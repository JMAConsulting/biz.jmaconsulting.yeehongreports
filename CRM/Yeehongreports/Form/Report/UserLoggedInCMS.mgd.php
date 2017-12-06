<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Yeehongreports_Form_Report_UserLoggedInCMS',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => ts('User Logged In CMS'),
      'description' => 'UserLoggedInCMS (biz.jmaconsulting.yeehongreports)',
      'class_name' => 'CRM_Yeehongreports_Form_Report_UserLoggedInCMS',
      'report_url' => 'userlogin',
      'component' => 'CiviContact',
    ),
  ),
);