<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Category extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();   
        $this->load->model('master/Category_model', 'category'); 
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect('categoryListing');
    }

    /**
     * Category listing
     */
    public function categoryListing()
    {   
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');
            $count = $this->category->categoryListingCount($searchText);

            $returns = $this->paginationCompress("categoryListing/", $count, 10);

            $data['categoryRecords'] = $this->category->categoryListing($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Category Management : Category Listing';
            $this->loadViews("module/master/category/list", $this->global, $data, NULL);
        }
    }

    /**
     * Add Category Form
     */
    public function add()
    {
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {
            $this->global['pageTitle'] = 'Category Management : Add New Category';
            $this->loadViews("module/master/category/add", $this->global, NULL, NULL);
        }
    }

    /**
     * Save new category
     */
    public function addNewCategory()
    {
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {
            $this->form_validation->set_rules('category_name','Category Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('status','Status','required');

            if($this->form_validation->run() == FALSE) {
                $this->add();
            } else {
                $categoryInfo = array(
                    'name'   => $this->input->post('category_name'),
                    'status' => $this->input->post('status')
                );

                $result = $this->category->addNewCategory($categoryInfo);

                if($result > 0){
                    $this->session->set_flashdata('success', 'New Category created successfully');
                } else {
                    $this->session->set_flashdata('error', 'Category creation failed');
                }

                redirect('categoryListing');
            }
        }
    }

    /**
     * Edit Category
     */
    public function edit($categoryId = NULL)
    {
        if(!$this->isAdmin() || $categoryId == null) {
            $this->loadThis();
        } else {
            $data['categoryInfo'] = $this->category->getCategoryInfo($categoryId);

            $this->global['pageTitle'] = 'Category Management : Edit Category';
            $this->loadViews("module/master/category/edit", $this->global, $data, NULL);
        }
    }

    /**
     * Update Category
     */
    public function updateCategory()
    {
        if(!$this->isAdmin()) {
            $this->loadThis();
        } else {
            $categoryId = $this->input->post('categoryId');
            $this->form_validation->set_rules('category_name','Category Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('status','Status','required');

            if($this->form_validation->run() == FALSE) {
                $this->edit($categoryId);
            } else {
                $categoryInfo = array(
                    'name'   => $this->input->post('category_name'),
                    'status' => $this->input->post('status')
                );

                $result = $this->category->updateCategory($categoryInfo, $categoryId);

                if($result == true){
                    $this->session->set_flashdata('success', 'Category updated successfully');
                } else {
                    $this->session->set_flashdata('error', 'Category updation failed');
                }

                redirect('categoryListing');
            }
        }
    }

    /**
     * Delete Category
     */
    public function deleteCategory($categoryId)
    {
        if(!$this->isAdmin()){
            $this->session->set_flashdata('error', 'Access denied');
            redirect('categoryListing');
        } else {
            $result = $this->category->deleteCategory($categoryId);
            if($result){
                $this->session->set_flashdata('success','Category deleted successfully');
            } else {
                $this->session->set_flashdata('error','Category deletion failed');
            }
            redirect('categoryListing');
        }
    }
}
