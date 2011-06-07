<?php
/**
 * CmsRelations Model
 *
 * Maps urls to pages and translates them
 */
class DirtyDozen_MultilanguageCmsPages_Model_MultilanguageCmsPages extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('multilanguagecmspages/multilanguagecmspages');
    }
}