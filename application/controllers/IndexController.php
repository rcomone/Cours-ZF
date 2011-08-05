<?php 

class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
            
    }
    
    public function aboutAction()
    {

    }
    
    public function sitemapAction()
    {
        $this->_helper->layout()->disableLayout();
    }
}
