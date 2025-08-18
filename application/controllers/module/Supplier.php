<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Supplier extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('master/Supplier_model', 'sm'); // Supplier Model
        $this->load->library('form_validation');
        $this->isLoggedIn();   
    }

    /**
     * Default method, redirect to supplier listing
     */
    public function index()
    {
        redirect('module/supplier/supplierListing');
    }

    /**
     * Supplier listing
     */
    public function supplierListing()
    {   
        if (!$this->isAdmin()) {
            $this->loadThis();
        } else {        
            $this->global['pageTitle'] = 'Supplier Listing';

            // Optional search
            $searchText = $this->input->post('searchText');
            $searchText = !empty($searchText) ? $this->security->xss_clean($searchText) : '';

            // Fetch suppliers from model
            $data['supplierRecords'] = $this->sm->getAllSuppliers($searchText); 

            $this->loadViews("module/master/supplier/list", $this->global, $data, NULL);
        }
    }


    /**
     * Add Supplier form
     */
    public function add()
    {
        if(!$this->isAdmin()){
            $this->loadThis();
        } else {
            $this->global['pageTitle'] = 'Add New Supplier';
            $this->loadViews("module/master/supplier/add", $this->global, NULL, NULL);
        }
    }

    /**
     * Insert new supplier
     */
    public function addNewSupplier()
    {
        //echo "Welcome";
        //die(); 
        if(!$this->isAdmin()){
            $this->loadThis();
        } else {
            $this->form_validation->set_rules('supplier_name','Supplier Name','trim|required|max_length[100]');
            $this->form_validation->set_rules('phone','Phone','trim|required|max_length[15]');
            $this->form_validation->set_rules('email','Email','trim|valid_email|max_length[100]');
            $this->form_validation->set_rules('status','Status','required|numeric');

            if($this->form_validation->run() == FALSE){
                $this->add();
            } else {
                $supplierInfo = array(
                    'organisation'   => $this->input->post('organisation'),
                    'supplier_name'  => $this->input->post('supplier_name'),
                    'phone'          => $this->input->post('phone'),
                    'email'          => $this->input->post('email'),
                    'address'        => $this->input->post('address'),
                    'status'         => $this->input->post('status'),
                    'created_at'     => date('Y-m-d H:i:s')
                );

                $result = $this->sm->insertSupplier($supplierInfo);
                if($result > 0){
                    $this->session->set_flashdata('success','Supplier added successfully');
                } else {
                    $this->session->set_flashdata('error','Supplier creation failed');
                }
                redirect('module/supplier/supplierListing');
            }
        }
    }

    /**
     * Edit Supplier
     */
   public function edit($id = null)
    {
        if ($id == null) {
            redirect('supplierListing'); // fallback if no ID
        }

        // Load supplier data
        $this->load->model('master/Supplier_model', 'sm');
        $record = $this->sm->getSupplierById($id);

        if (!$record) {
            $this->session->set_flashdata('error', 'Supplier not found');
            redirect('master/supplier/supplierListing');
        }

        $data['record'] = $record; // pass to view
        $this->global['pageTitle'] = 'Edit Supplier';

        $this->loadViews("module/master/supplier/edit", $this->global, $data, NULL);
    }


    /**
     * Update supplier
     */
    public function updateSupplier()
    {
        $this->load->library('form_validation');

        $id = $this->input->post('id');

        $this->form_validation->set_rules('organisation','Organisation','trim|required|max_length[150]');
        $this->form_validation->set_rules('supplier_name','Supplier Name','trim|required|max_length[100]');
        $this->form_validation->set_rules('phone','Phone','trim|required|max_length[15]');
        $this->form_validation->set_rules('address','Address','trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id); // reload edit form with errors
        } else {
            $data = array(
                'organisation' => $this->input->post('organisation'),
                'supplier_name' => $this->input->post('supplier_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'status' => $this->input->post('status'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            $this->load->model('master/Supplier_model', 'sm');
            $updated = $this->sm->updateSupplier($id, $data);

            if ($updated) {
                $this->session->set_flashdata('success', 'Supplier updated successfully');
            } else {
                $this->session->set_flashdata('error', 'Supplier update failed');
            }

            redirect('supplierListing');
        }
    }

    /**
     * Delete Supplier
     */
    public function delete($supplierId)
    {
        if(!$this->isAdmin()){
            $this->session->set_flashdata('error', 'Access denied');
            redirect('module/supplier/supplierListing');
        } else {
            $result = $this->sm->deleteSupplier($supplierId);
            if($result){
                $this->session->set_flashdata('success','Supplier deleted successfully');
            } else {
                $this->session->set_flashdata('error','Supplier deletion failed');
            }
            redirect('module/supplier/supplierListing');
        }
    }
}
?>
