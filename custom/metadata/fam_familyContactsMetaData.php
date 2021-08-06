<?php
// created: 2021-08-06 05:29:13
$dictionary["fam_family_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'fam_family_contacts' => 
    array (
      'lhs_module' => 'fam_family',
      'lhs_table' => 'fam_family',
      'lhs_key' => 'id',
      'rhs_module' => 'contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'fam_family_contacts_c',
      'join_key_lhs' => 'fam_family_contactsfam_family_ida',
      'join_key_rhs' => 'fam_family_contactscontacts_idb',
    ),
  ),
  'table' => 'fam_family_contacts_c',
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
      'name' => 'fam_family_contactsfam_family_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'fam_family_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'fam_family_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'fam_family_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'fam_family_contactsfam_family_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'fam_family_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'fam_family_contactscontacts_idb',
      ),
    ),
  ),
);