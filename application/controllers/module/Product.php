<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Product extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('role_model', 'rm');
        $this->isLoggedIn();   
    }

    /**
     * This is default routing method
     * It routes to default listing page
     */
    public function index()
    {
        redirect('productListing');
    }
    
    /**
     * This function is used to load the role list
     */
    function productListing()
    {   
    	if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {        
             $this->global['pageTitle'] = 'CodeInsect : Product Listing';
            $this->loadViews("module/master/product/list", $this->global, NULL, NULL);
        }
       
    }

    /**
     * This function is used to load the add new form
     */
    function add()
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'CodeInsect : Add New Product';

            $this->loadViews("module/master/product/add", $this->global, NULL, NULL);
        }
    }

    /**
     * This function is used load user edit information
     * @param number $productId : Optional : This is user id
     */
    function edit($productId = NULL)
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            if($productId == null)
            {
                //redirect('product/productListing');
            }
            
            $this->global['pageTitle'] = 'CodeInsect : Edit Product';
            
            $this->loadViews("module/master/product/edit", $this->global, Null, NULL);
        }
    }
   
}


?>