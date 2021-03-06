<?php
namespace Google\Service\AdSenseHost\Associationsessions;

/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "associationsessions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsensehostService = new Google_Service_AdSenseHost(...);
 *   $associationsessions = $adsensehostService->associationsessions;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Create an association session for initiating an association with an AdSense
   * user. (associationsessions.start)
   *
   * @param string $productCode
   * Products to associate with the user.
   * @param string $websiteUrl
   * The URL of the user's hosted website.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string websiteLocale
   * The locale of the user's hosted website.
   * @opt_param string userLocale
   * The preferred locale of the user.
   * @return \Google\Service\AdSenseHost\AssociationSession
   */
  public function start($productCode, $websiteUrl, $optParams = array())
  {
    $params = array('productCode' => $productCode, 'websiteUrl' => $websiteUrl);
    $params = array_merge($params, $optParams);
    return $this->call('start', array($params), "\Google\Service\AdSenseHost\AssociationSession");
  }
  /**
   * Verify an association session after the association callback returns from
   * AdSense signup. (associationsessions.verify)
   *
   * @param string $token
   * The token returned to the association callback URL.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\AssociationSession
   */
  public function verify($token, $optParams = array())
  {
    $params = array('token' => $token);
    $params = array_merge($params, $optParams);
    return $this->call('verify', array($params), "\Google\Service\AdSenseHost\AssociationSession");
  }
}
