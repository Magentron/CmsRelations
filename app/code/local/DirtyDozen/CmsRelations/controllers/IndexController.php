<?php
class DirtyDozen_CmsRelations_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/cmsrelations?id=15 
    	 *  or
    	 * http://site.com/cmsrelations/id/15 	
    	 */
    	/* 
		$cmsrelations_id = $this->getRequest()->getParam('id');

  		if($cmsrelations_id != null && $cmsrelations_id != '')	{
			$cmsrelations = Mage::getModel('cmsrelations/cmsrelations')->load($cmsrelations_id)->getData();
		} else {
			$cmsrelations = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($cmsrelations == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$cmsrelationsTable = $resource->getTableName('cmsrelations');
			
			$select = $read->select()
			   ->from($cmsrelationsTable,array('cmsrelations_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$cmsrelations = $read->fetchRow($select);
		}
		Mage::register('cmsrelations', $cmsrelations);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}
