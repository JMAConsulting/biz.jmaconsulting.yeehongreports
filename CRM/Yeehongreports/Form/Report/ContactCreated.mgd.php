<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Yeehongreports_Form_Report_ContactCreated',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'ContactCreated',
      'description' => 'ContactCreated (biz.jmaconsulting.yeehongreports)',
      'class_name' => 'CRM_Yeehongreports_Form_Report_ContactCreated',
      'report_url' => 'created',
      'component' => 'CiviMail',
    ),
  ),
);