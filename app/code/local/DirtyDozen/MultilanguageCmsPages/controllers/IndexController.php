<?php
class DirtyDozen_MultilanguageCmsPages_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/multilanguagecmspages?id=15 
    	 *  or
    	 * http://site.com/multilanguagecmspages/id/15 	
    	 */
    	/* 
		$multilanguagecmspages_id = $this->getRequest()->getParam('id');

  		if($multilanguagecmspages_id != null && $multilanguagecmspages_id != '')	{
			$multilanguagecmspages = Mage::getModel('multilanguagecmspages/multilanguagecmspages')->load($multilanguagecmspages_id)->getData();
		} else {
			$multilanguagecmspages = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($multilanguagecmspages == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$multilanguagecmspagesTable = $resource->getTableName('multilanguagecmspages');
			
			$select = $read->select()
			   ->from($multilanguagecmspagesTable,array('multilanguagecmspages_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$multilanguagecmspages = $read->fetchRow($select);
		}
		Mage::register('multilanguagecmspages', $multilanguagecmspages);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}