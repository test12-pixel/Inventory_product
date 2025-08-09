<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Purchase extends BaseController {

    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('role_model', 'rm');
        $this->isLoggedIn();   
    }

    public function index() {
        // $data['purchases'] = $this->Purchase_model->get_all(); // Uncomment later
        $this->load->view('module/purchase/purchase'/*, $data*/);
    }

    public function add() {
        // $data = $this->input->post();
        // $insert_id = $this->Purchase_model->insert($data);
        //echo json_encode([
       //     'status' => 'success',
         //   'message' => 'Purchase added successfully'
        //]);
    }

    public function edit($id) {
        // $data = $this->input->post();
        // $this->Purchase_model->update($id, $data);
        // echo json_encode([
        //     'status' => 'success',
        //     'message' => 'Purchase updated successfully'
        // ]);
    }

    public function delete($id) {
        // $this->Purchase_model->delete($id);
        // echo json_encode([
        //     'status' => 'success',
        //     'message' => 'Purchase deleted successfully'
        // ]);
    }
}
