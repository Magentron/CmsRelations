<?php

class DirtyDozen_CmsRelations_Model_Mysql4_CmsRelations_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('cmsrelations/cmsrelations');
    }
}
