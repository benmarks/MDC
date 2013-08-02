<?php
$installer = $this;
$installer->startSetup();
$installer->run("
CREATE TABLE `ba_comments` (
  `comment_id` int(11) NOT NULL auto_increment,
  `comment` text,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY(`comment_id`)
);
INSERT INTO `magento`.`ba_comments` (`comment_id`, `comment`, `timestamp`) VALUES (NULL, 'dsafasdfsdf', CURRENT_TIMESTAMP), (NULL, 'dasfdasfasdfsdf', CURRENT_TIMESTAMP);");
$installer->endSetup();