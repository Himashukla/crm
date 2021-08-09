<?php
// created: 2021-08-06 13:22:05
$dictionary["fam_family"]["fields"]["fam_family_fp_event_locations_1"] = array (
  'name' => 'fam_family_fp_event_locations_1',
  'type' => 'link',
  'relationship' => 'fam_family_fp_event_locations_1',
  'source' => 'non-db',
  'module' => 'FP_Event_Locations',
  'bean_name' => 'FP_Event_Locations',
  'vname' => 'LBL_FAM_FAMILY_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'id_name' => 'fam_family_fp_event_locations_1fp_event_locations_idb',
);
$dictionary["fam_family"]["fields"]["fam_family_fp_event_locations_1_name"] = array (
  'name' => 'fam_family_fp_event_locations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FAM_FAMILY_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'save' => true,
  'id_name' => 'fam_family_fp_event_locations_1fp_event_locations_idb',
  'link' => 'fam_family_fp_event_locations_1',
  'table' => 'fp_event_locations',
  'module' => 'FP_Event_Locations',
  'rname' => 'name',
);
$dictionary["fam_family"]["fields"]["fam_family_fp_event_locations_1fp_event_locations_idb"] = array (
  'name' => 'fam_family_fp_event_locations_1fp_event_locations_idb',
  'type' => 'link',
  'relationship' => 'fam_family_fp_event_locations_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_FAM_FAMILY_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
);
