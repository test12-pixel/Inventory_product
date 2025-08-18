<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Size extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();   
        $this->load->model('master/Size_model', 'size'); 
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect('sizeListing');
    }

    public function sizeListing()
    {
        $searchText = $this->input->post('searchText');
        $data['searchText'] = $searchText;

        $this->load->library('pagination');
        $count = count($this->size->sizeListing($searchText));

        $returns = $this->paginationCompress("module/size/sizeListing/", $count, 10);
        $data['sizeRecords'] = $this->size->sizeListing($searchText, $returns["page"], $returns["segment"]);

        $this->global['pageTitle'] = 'Size Management : Listing';
        $this->loadViews("module/master/size/list", $this->global, $data, NULL);
    }

    public function add()
    {
        $this->global['pageTitle'] = 'Add New Size';
        $this->loadViews("module/master/size/add", $this->global, NULL, NULL);
    }

    public function addNewSize()
    {
        // echo $this->input->post('size_name');
        // echo $this->input->post('status');
        // die;

        $this->form_validation->set_rules('size_name','Size Name','trim|required|max_length[128]');

        if($this->form_validation->run() == FALSE)
        {
            $this->add();
        }
        else
        {
            $sizeInfo = [
                'name' => $this->input->post('size_name'),
                'status' => $this->input->post('status')
            ];
            
            $result = $this->size->addNewSize($sizeInfo);

            if($result > 0){
                $this->session->set_flashdata('success', 'New Size created successfully');
            } else {
                $this->session->set_flashdata('error', 'Size creation failed');
            }

            redirect('sizeListing');
        }
    }

   
    public function edit($sizeId = NULL)
    {
        if(!$this->isAdmin() || $sizeId == null) {
            $this->loadThis();
        } else {
            $data['sizeInfo'] = $this->size->getSizeInfo($sizeId);

            $this->global['pageTitle'] = 'Size Management : Edit Size';
            $this->loadViews("module/master/size/edit", $this->global, $data, NULL);
        }
    }


    public function updateSize()
    {
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {
            $sizeId = $this->input->post('size_Id');
            //echo $sizeId;
            //die;
            $this->form_validation->set_rules('size_name','Size Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('status','Status','required');

            if($this->form_validation->run() == FALSE) {
                $this->edit($brandId);
            } else {
                $sizeInfo = array(
                    'name'=>$this->input->post('size_name'),
                    'status'=>$this->input->post('status')
                );

                $result = $this->size->updateSize($sizeInfo, $sizeId);

                if($result == true){
                    $this->session->set_flashdata('success', 'Brand updated successfully');
                } else {
                    $this->session->set_flashdata('error', 'Brand updation failed');
                }

                redirect('sizeListing');
            }
        }
    }

    public function deleteSize($id = NULL)
    {
        if($id == null){
            redirect('sizeListing');
        }

        $result = $this->size->deleteSize($id);

        if ($result == true) {
            $this->session->set_flashdata('success', 'Size deleted successfully');
        } else {
            $this->session->set_flashdata('error', 'Size deletion failed');
        }
        redirect('sizeListing');
    }
}
