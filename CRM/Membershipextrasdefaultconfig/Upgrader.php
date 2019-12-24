<?php
use CRM_Membershipextrasdefaultconfig_ExtensionUtil as E;
use CRM_Membershipextrasdefaultconfig_Installationsteps_SampleContributionPage as SampleContributionPage;

/**
 * Collection of upgrade steps.
 */
class CRM_Membershipextrasdefaultconfig_Upgrader extends CRM_Membershipextrasdefaultconfig_Upgrader_Base {

  public function Install() {
    $steps = [
      new SampleContributionPage(),
    ];

    foreach ($steps as $step) {
      $step->apply();
    }
  }

}
