<?php
if (!defined('sugarEntry') || !sugarEntry) {
   die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/family_Family/family_Family.php');

class family_FamilyDashlet extends DashletGeneric {
   function __construct($id, $def = null)
   {
       global $current_user, $app_strings;
       require('modules/family_Family/metadata/dashletviewdefs.php');

       parent::__construct($id, $def);

       if (empty($def['title'])) {
           $this->title = translate('LBL_HOMEPAGE_TITLE', 'family_Family');
       }

       $this->searchFields = $dashletData['family_FamilyDashlet']['searchFields'];
       $this->columns = $dashletData['family_FamilyDashlet']['columns'];

       $this->seedBean = new test_TestFamily();        
   }
}
