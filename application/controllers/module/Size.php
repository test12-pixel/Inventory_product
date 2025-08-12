<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Size extends BaseController
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('size_model', 'sm');
        $this->isLoggedIn();   
    }

    /**
     * Default routing method
     */
    public function index()
    {
        redirect('sizeListing');
    }
    
    /**
     * Load size list
     */
    function sizeListing()
    {   
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {        
            $this->global['pageTitle'] = 'CodeInsect : Size Listing';
            $this->loadViews("module/master/size/list", $this->global, NULL, NULL);
        }
    }

    /**
     * Load add new size form
     */
    function add()
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'CodeInsect : Add New Size';
            $this->loadViews("module/master/size/add", $this->global, NULL, NULL);
        }
    }

    /**
     * Load size edit form
     * @param number $sizeId
     */
    function edit($sizeId = NULL)
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'CodeInsect : Edit Size';
            $this->loadViews("module/master/size/edit", $this->global, NULL);
        }
    }
}
?>
