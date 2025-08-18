<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Brand extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();   
        $this->load->model('master/Brand_model', 'brand'); 
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect('brandListing');
    }

    /**
     * Brand listing
     */
    public function brandListing()
    {   
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');
            $count = $this->brand->brandListingCount($searchText);

            $returns = $this->paginationCompress("brandListing/", $count, 10);

            $data['brandRecords'] = $this->brand->brandListing($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Brand Management : Brand Listing';
            $this->loadViews("module/master/brand/list", $this->global, $data, NULL);
        }
    }

    /**
     * Add Brand Form
     */
    public function add()
    {
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {
            $this->global['pageTitle'] = 'Brand Management : Add New Brand';
            $this->loadViews("module/master/brand/add", $this->global, NULL, NULL);
        }
    }

    /**
     * Save new brand
     */
    public function addNewBrand()
    {
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {
            $this->form_validation->set_rules('brand_name','Brand Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('status','Status','required');

            if($this->form_validation->run() == FALSE) {
                $this->add();
            } else {
                $brandInfo = array(
                    'name'=>$this->input->post('brand_name'),
                    'status'=>$this->input->post('status')
                );

                $result = $this->brand->addNewBrand($brandInfo);

                if($result > 0){
                    $this->session->set_flashdata('success', 'New Brand created successfully');
                } else {
                    $this->session->set_flashdata('error', 'Brand creation failed');
                }

                redirect('brandListing');
            }
        }
    }

    /**
     * Edit Brand
     */
    public function edit($brandId = NULL)
    {
        if(!$this->isAdmin() || $brandId == null) {
            $this->loadThis();
        } else {
            $data['brandInfo'] = $this->brand->getBrandInfo($brandId);

            $this->global['pageTitle'] = 'Brand Management : Edit Brand';
            $this->loadViews("module/master/brand/edit", $this->global, $data, NULL);
        }
    }

    /**
     * Update Brand
     */
    public function updateBrand()
    {
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {
            $brandId = $this->input->post('brandId');
            //echo $brandId;
            //die;
            $this->form_validation->set_rules('brand_name','Brand Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('status','Status','required');

            if($this->form_validation->run() == FALSE) {
                $this->edit($brandId);
            } else {
                $brandInfo = array(
                    'name'=>$this->input->post('brand_name'),
                    'status'=>$this->input->post('status')
                );

                $result = $this->brand->updateBrand($brandInfo, $brandId);

                if($result == true){
                    $this->session->set_flashdata('success', 'Brand updated successfully');
                } else {
                    $this->session->set_flashdata('error', 'Brand updation failed');
                }

                redirect('brandListing');
            }
        }
    }

    /**
     * Delete Brand
     */

     public function deleteBrand($brandId)
    {
        if(!$this->isAdmin()){
            $this->session->set_flashdata('error', 'Access denied');
            redirect('brandListing');
        } else {
            $result = $this->brand->deleteBrand($brandId);
            if($result){
                $this->session->set_flashdata('success','Supplier deleted successfully');
            } else {
                $this->session->set_flashdata('error','Supplier deletion failed');
            }
            redirect('brandListing');
        }
    }
}
