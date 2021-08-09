<?php
// created: 2021-08-06 13:22:05
$dictionary["fam_family_fp_event_locations_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'fam_family_fp_event_locations_1' => 
    array (
      'lhs_module' => 'Family',
      'lhs_table' => 'fam_family',
      'lhs_key' => 'id',
      'rhs_module' => 'FP_Event_Locations',
      'rhs_table' => 'fp_event_locations',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'fam_family_fp_event_locations_1_c',
      'join_key_lhs' => 'fam_family_fp_event_locations_1fam_family_ida',
      'join_key_rhs' => 'fam_family_fp_event_locations_1fp_event_locations_idb',
    ),
  ),
  'table' => 'fam_family_fp_event_locations_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'fam_family_fp_event_locations_1fam_family_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'fam_family_fp_event_locations_1fp_event_locations_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'fam_family_fp_event_locations_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'fam_family_fp_event_locations_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'fam_family_fp_event_locations_1fam_family_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'fam_family_fp_event_locations_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'fam_family_fp_event_locations_1fp_event_locations_idb',
      ),
    ),
  ),
);