<?php
/**
 * CmsRelations Model
 *
 * Maps urls to pages and translates them
 */
class DirtyDozen_CmsRelations_Model_CmsRelations extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('cmsrelations/cmsrelations');
    }
}
