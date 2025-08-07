<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Supplier extends BaseController
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
        redirect('supplierListing');
    }
    
    /**
     * This function is used to load the role list
     */
    function supplierListing()
    {   
    	if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {        
             $this->global['pageTitle'] = 'CodeInsect : Supplier Listing';
            $this->loadViews("module/master/supplier/list", $this->global, NULL, NULL);
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
            $this->global['pageTitle'] = 'CodeInsect : Add New Supplier';

            $this->loadViews("module/master/supplier/add", $this->global, NULL, NULL);
        }
    }

    /**
     * This function is used load user edit information
     * @param number $productId : Optional : This is user id
     */
    function edit($supplierId = NULL)
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            
            $this->global['pageTitle'] = 'CodeInsect : Edit Supplier';
            
            $this->loadViews("module/master/supplier/edit", $this->global, NULL);
        }
    }
   
}


?>