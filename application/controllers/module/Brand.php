<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Brand extends BaseController
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
        redirect('BrandListing');
    }
    
    /**
     * This function is used to load the role list
     */
    function brandListing()
    {   
    	if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {        
             $this->global['pageTitle'] = 'CodeInsect : Brand Listing';
            $this->loadViews("module/master/brand/list", $this->global, NULL, NULL);
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
            $this->global['pageTitle'] = 'CodeInsect : Add New Brand';

            $this->loadViews("module/master/brand/add", $this->global, NULL, NULL);
        }
    }

    /**
     * This function is used load user edit information
     * @param number $productId : Optional : This is user id
     */
    function edit($brandId = NULL)
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            
            $this->global['pageTitle'] = 'CodeInsect : Edit Brand';
            
            $this->loadViews("module/master/brand/edit", $this->global, NULL);
        }
    }
   
}


?>