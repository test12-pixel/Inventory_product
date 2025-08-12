<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Category extends BaseController
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('category_model', 'cm');
        $this->isLoggedIn();   
    }

    /**
     * Default routing method
     */
    public function index()
    {
        redirect('CategoryListing');
    }
    
    /**
     * Load category list
     */
    function categoryListing()
    {   
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {        
            $this->global['pageTitle'] = 'CodeInsect : Category Listing';
            $this->loadViews("module/master/category/list", $this->global, NULL, NULL);
        }
    }

    /**
     * Load add new category form
     */
    function add()
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'CodeInsect : Add New Category';
            $this->loadViews("module/master/category/add", $this->global, NULL, NULL);
        }
    }

    /**
     * Load category edit form
     * @param number $categoryId
     */
    function edit($categoryId = NULL)
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'CodeInsect : Edit Category';
            $this->loadViews("module/master/category/edit", $this->global, NULL);
        }
    }
}
?>
