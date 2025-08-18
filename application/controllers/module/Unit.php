<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Unit extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();   
        $this->load->model('master/Unit_model', 'unit'); 
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect('unitListing');
    }

    /**
     * Unit listing
     */
    public function unitListing()
    {   
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');
            $count = $this->unit->unitListingCount($searchText);

            $returns = $this->paginationCompress("unitListing/", $count, 10);

            $data['unitRecords'] = $this->unit->unitListing($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Unit Management : Unit Listing';
            $this->loadViews("module/master/unit/list", $this->global, $data, NULL);
        }
    }

    /**
     * Add Unit Form
     */
    public function add()
    {
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {
            $this->global['pageTitle'] = 'Unit Management : Add New Unit';
            $this->loadViews("module/master/unit/add", $this->global, NULL, NULL);
        }
    }

    /**
     * Save new unit
     */
    public function addNewUnit()
    {
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {
            $this->form_validation->set_rules('unit_name','Unit Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('status','Status','required');

            if($this->form_validation->run() == FALSE) {
                $this->add();
            } else {
                $unitInfo = array(
                    'name'=>$this->input->post('unit_name'),
                    'status'=>$this->input->post('status')
                );
                
                
                $result = $this->unit->addNewUnit($unitInfo);

                if($result > 0){
                    $this->session->set_flashdata('success', 'New Unit created successfully');
                } else {
                    $this->session->set_flashdata('error', 'Unit creation failed');
                }

                redirect('unitListing');
            }
        }
    }

    /**
     * Edit Unit
     */
    public function edit($unitId = NULL)
    {
        if(!$this->isAdmin() || $unitId == null) {
            $this->loadThis();
        } else {
            $data['unitInfo'] = $this->unit->getUnitInfo($unitId);

            $this->global['pageTitle'] = 'Unit Management : Edit Unit';
            $this->loadViews("module/master/unit/edit", $this->global, $data, NULL);
        }
    }

    /**
     * Update Unit
     */
    public function updateUnit()
    {
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {
            $unitId = $this->input->post('unitId');

            $this->form_validation->set_rules('unit_name','Unit Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('status','Status','required');

            if($this->form_validation->run() == FALSE) {
                $this->edit($unitId);
            } else {

                $unitInfo = array(
                    'name'=>$this->input->post('unit_name'),
                    'status'=>$this->input->post('status')
                );
                //print_r($unitInfo);die;

                $result = $this->unit->updateUnit($unitInfo, $unitId);

                if($result == true){
                    $this->session->set_flashdata('success', 'Unit updated successfully');
                } else {
                    $this->session->set_flashdata('error', 'Unit updation failed');
                }

                redirect('unitListing');
            }
        }
    }

    /**
     * Delete Unit
     */
    public function deleteUnit($unitId)
    {
        if(!$this->isAdmin()){
            $this->session->set_flashdata('error', 'Access denied');
            redirect('unitListing');
        } else {
            $result = $this->unit->deleteUnit($unitId);
            if($result){
                $this->session->set_flashdata('success','Unit deleted successfully');
            } else {
                $this->session->set_flashdata('error','Unit deletion failed');
            }
            redirect('unitListing');
        }
    }
}
