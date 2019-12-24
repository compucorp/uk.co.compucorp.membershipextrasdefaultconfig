<?php

/**
 * Class to create sample contribution page for membership extras.
 */

class CRM_Membershipextrasdefaultconfig_Installationsteps_SampleContributionPage {

  /**
   * Main method that will apply all changes.
   * This is called inside public function install of
   * class CRM_Membershipextrasdefaultconfig_Upgrader
   */
  public function apply() {
    civicrm_api3('ContributionPage', 'create', [
      'title' => "Compuclient default contribution page",
      'financial_type_id' => 1,
      'is_active' => 1,
      'currency' => "GBP",
      'payment_processor' => $this->_get_active_payment_processors(),
      'is_email_receipt' => 1,
      'receipt_from_name' => "Compuclient example receipt",
      'receipt_from_email' => "email@example.com",
      'is_allow_other_amount' => 1,
    ]);
  }

  /**
   * Return all active payment processor names.
   */
  private function _get_active_payment_processors () {
    $payment_processor_names = [];

    $active_payment_processors = civicrm_api3('PaymentProcessor', 'get', [
      'sequential' => 1,
      'return' => ["name"],
      'is_test' => 1,
      'is_active' => 1,
    ]);

    if(!$active_payment_processors['is_error']) {
      foreach ($active_payment_processors['values'] as $payment_processor) {
        $payment_processor_names[] = $payment_processor['name'];
      }
    }

    return $payment_processor_names;
  }

}
