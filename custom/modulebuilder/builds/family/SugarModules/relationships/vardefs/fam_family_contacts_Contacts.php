<?php
// created: 2021-08-06 05:29:13
$dictionary["Contact"]["fields"]["fam_family_contacts"] = array (
  'name' => 'fam_family_contacts',
  'type' => 'link',
  'relationship' => 'fam_family_contacts',
  'source' => 'non-db',
  'module' => 'fam_family',
  'bean_name' => 'fam_family',
  'vname' => 'LBL_FAM_FAMILY_CONTACTS_FROM_FAM_FAMILY_TITLE',
  'id_name' => 'fam_family_contactsfam_family_ida',
);
$dictionary["Contact"]["fields"]["fam_family_contacts_name"] = array (
  'name' => 'fam_family_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FAM_FAMILY_CONTACTS_FROM_FAM_FAMILY_TITLE',
  'save' => true,
  'id_name' => 'fam_family_contactsfam_family_ida',
  'link' => 'fam_family_contacts',
  'table' => 'fam_family',
  'module' => 'fam_family',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Contact"]["fields"]["fam_family_contactsfam_family_ida"] = array (
  'name' => 'fam_family_contactsfam_family_ida',
  'type' => 'link',
  'relationship' => 'fam_family_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FAM_FAMILY_CONTACTS_FROM_CONTACTS_TITLE',
);
