<?php
 // created: 2021-08-06 05:29:13
$layout_defs["stud_student"]["subpanel_setup"]['fam_family_contacts'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FAM_FAMILY_CONTACTS_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'fam_family_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
