<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Cms
 * @copyright   Copyright (c) 2010 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Cms Page Model
 *
 * @category    Mage
 * @package     Mage_Cms
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class DirtyDozen_CmsRelations_Model_Cms_Page extends Mage_Cms_Model_Page
{
    /**
     * get related pages
     * 
     * @return Collection
     */
    public function getRelatedTranslations()
    {
        Mage::log('loading related pages');
        $relationCollection = Mage::getModel('cmsrelations/cms_page_relation')
            ->getCollection();
        $relation = $relationCollection
            ->addFieldToFilter('page_id', $this->getPageId())
            ->getFirstItem();
        $relatedPageIds = $relationCollection
            ->addFieldToFilter('relation_set_id', $relation->getRelationSetId());
        var_dump($relatedPageIds->toArray());exit;
    }

    public function saveRelatedPages()
    {
    }

    public function afterSave()
    {
        return parent::afterSave();
    }
}
