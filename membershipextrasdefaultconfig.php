<?php

require_once 'membershipextrasdefaultconfig.civix.php';
use CRM_Membershipextrasdefaultconfig_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function membershipextrasdefaultconfig_civicrm_config(&$config) {
  _membershipextrasdefaultconfig_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function membershipextrasdefaultconfig_civicrm_install() {
  _membershipextrasdefaultconfig_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function membershipextrasdefaultconfig_civicrm_enable() {
  _membershipextrasdefaultconfig_civix_civicrm_enable();
}
