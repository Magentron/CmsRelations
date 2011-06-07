<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('cms_page_relation')};
CREATE TABLE {$this->getTable('cms_page_relation')} (
	`cms_page_relation_id` smallint(6) NOT NULL AUTO_INCREMENT,
	`store_id` smallint(5) unsigned NOT NULL,
    `parent_page_id` smallint(6) NOT NULL,
    `child_page_id` smallint(6) NOT NULL,
  PRIMARY KEY (`cms_page_relation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->endSetup(); 