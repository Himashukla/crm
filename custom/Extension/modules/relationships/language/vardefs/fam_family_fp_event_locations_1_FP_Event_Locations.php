<?php
// created: 2021-08-06 13:22:05
$dictionary["FP_Event_Locations"]["fields"]["fam_family_fp_event_locations_1"] = array (
  'name' => 'fam_family_fp_event_locations_1',
  'type' => 'link',
  'relationship' => 'fam_family_fp_event_locations_1',
  'source' => 'non-db',
  'module' => 'Family',
  'bean_name' => 'Family',
  'vname' => 'LBL_FAM_FAMILY_FP_EVENT_LOCATIONS_1_FROM_FAM_FAMILY_TITLE',
  'id_name' => 'fam_family_fp_event_locations_1fam_family_ida',
);
$dictionary["FP_Event_Locations"]["fields"]["fam_family_fp_event_locations_1_name"] = array (
  'name' => 'fam_family_fp_event_locations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL__FP_EVENT_FAM_FAMILY_LOCATIONS_1_FROM_FAM_FAMILY_TITLE',
  'save' => true,
  'id_name' => 'fam_family_fp_event_locations_1fam_family_ida',
  'link' => 'fam_family_fp_event_locations_1',
  'table' => 'fam_family',
  'module' => 'Family',
  'rname' => 'name',
);
$dictionary["FP_Event_Locations"]["fields"]["fam_family_fp_event_locations_1fam_family_ida"] = array (
  'name' => 'fam_family_fp_event_locations_1fam_family_ida',
  'type' => 'link',
  'relationship' => 'fam_family_fp_event_locations_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_FAM_FAMILY_FP_EVENT_LOCATIONS_1_FROM_FAM_FAMILY_TITLE',
);
