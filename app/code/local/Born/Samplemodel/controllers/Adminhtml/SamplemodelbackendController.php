<?php
class Born_Samplemodel_Adminhtml_SamplemodelbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Sample Page"));
	   $this->renderLayout();
    }
}