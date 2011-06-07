<?php
/**
 * DirtyDozen Magento CMSRelations setup sql 
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    
 * @package     _home
 */

$this->startSetup();

$this->run("

CREATE TABLE IF NOT EXISTS ${$this->getTable('cmsrelations_group')}
(
  `group_id` smallint unsigned not null auto_increment primary key,
  `name` varchar(63) not null,
  `type` tinyint unsigned not null default 0,
  `is_active` tinyint unsigned not null default 0,
  `updated_at` timestamp
) ENGINE=InnoDB CHARSET=utf8;


CREATE TABLE IF NOT EXISTS ${$this->getTable('cmsrelations_grouppage')}
(
  `group_id` smallint unsigned not null,
  `page_id` mediumint unsigned not null,
  `specification` varchar(31) null,
  `updated_at` timestamp,
  PRIMARY KEY (`page_id`, `group_id`)
) ENGINE=InnoDB CHARSET=utf8;

");

$this->endSetup();


