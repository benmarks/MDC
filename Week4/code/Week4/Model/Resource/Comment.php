<?php
class BlueAcorn_Week4_Model_Resource_Comment extends Mage_Core_Model_Resource_Db_Abstract {
    protected function _construct() {
        $this->_init('ba_week4/comment', 'comment_id');
    }
}