<?php
/**
 * Status Model
 */
class DirtyDozen_CmsRelations_Model_Status extends Varien_Object
{
    const STATUS_ENABLED	= 1;
    const STATUS_DISABLED	= 2;

    /**
     * Returns options array
     * 
     * @return array
     */
    static public function getOptionArray()
    {
        return array(
            self::STATUS_ENABLED    => Mage::helper('cmsrelations')->__('Enabled'),
            self::STATUS_DISABLED   => Mage::helper('cmsrelations')->__('Disabled')
        );
    }
}
