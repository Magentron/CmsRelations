<?php
/**
 * Status Model
 */
class DirtyDozen_MultilanguageCmsPages_Model_Status extends Varien_Object
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
            self::STATUS_ENABLED    => Mage::helper('multilanguagecmspages')->__('Enabled'),
            self::STATUS_DISABLED   => Mage::helper('multilanguagecmspages')->__('Disabled')
        );
    }
}