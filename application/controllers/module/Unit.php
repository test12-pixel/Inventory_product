<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Unit extends BaseController
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
        redirect('unit/unitListing');
    }
    
    /**
     * This function is used to load the role list
     */
    function unitListing()
    {   
    	if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {        
             $this->global['pageTitle'] = 'CodeInsect : Unit Listing';
            $this->loadViews("module/master/unit/list", $this->global, NULL);
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
            $this->global['pageTitle'] = 'CodeInsect : Add New Unit';

            $this->loadViews("module/master/unit/add", $this->global, NULL, NULL);
        }
    }

    /**
     * This function is used load user edit information
     * @param number $productId : Optional : This is user id
     */
    function edit($unitId = NULL)
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            
            $this->global['pageTitle'] = 'CodeInsect : Edit Unit';
            
            $this->loadViews("module/master/unit/edit", $this->global, NULL);
        }
    }
   
}


?>