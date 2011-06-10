<?php
/**
 * Page Relation
 */
class DirtyDozen_CmsRelations_Model_Mysql4_Cms_Page_Relation extends Mage_Core_Model_Mysql4_Abstract
{
    /**
     * Constructor
     * 
     * @return void
     */
    public function _construct()
    {    
        // Note that the cmsrelations_id refers to the key field in your database table.
        $this->_init('cmsrelations/cms_page_relation', 'cmsrelations_id');
    }
}
