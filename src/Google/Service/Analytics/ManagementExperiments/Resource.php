<?php
namespace Google\Service\Analytics\ManagementExperiments;

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
 * The "experiments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $experiments = $analyticsService->experiments;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Delete an experiment. (experiments.delete)
   *
   * @param string $accountId
   * Account ID to which the experiment belongs
   * @param string $webPropertyId
   * Web property ID to which the experiment belongs
   * @param string $profileId
   * View (Profile) ID to which the experiment belongs
   * @param string $experimentId
   * ID of the experiment to delete
   * @param array $optParams Optional parameters.
   */
  public function delete($accountId, $webPropertyId, $profileId, $experimentId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns an experiment to which the user has access. (experiments.get)
   *
   * @param string $accountId
   * Account ID to retrieve the experiment for.
   * @param string $webPropertyId
   * Web property ID to retrieve the experiment for.
   * @param string $profileId
   * View (Profile) ID to retrieve the experiment for.
   * @param string $experimentId
   * Experiment ID to retrieve the experiment for.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\Experiment
   */
  public function get($accountId, $webPropertyId, $profileId, $experimentId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Analytics\Experiment");
  }
  /**
   * Create a new experiment. (experiments.insert)
   *
   * @param string $accountId
   * Account ID to create the experiment for.
   * @param string $webPropertyId
   * Web property ID to create the experiment for.
   * @param string $profileId
   * View (Profile) ID to create the experiment for.
   * @param \Google\Experiment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\Experiment
   */
  public function insert($accountId, $webPropertyId, $profileId, \Google\Service\Analytics\Experiment $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Analytics\Experiment");
  }
  /**
   * Lists experiments to which the user has access.
   * (experiments.listManagementExperiments)
   *
   * @param string $accountId
   * Account ID to retrieve experiments for.
   * @param string $webPropertyId
   * Web property ID to retrieve experiments for.
   * @param string $profileId
   * View (Profile) ID to retrieve experiments for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults
   * The maximum number of experiments to include in this response.
   * @opt_param int startIndex
   * An index of the first experiment to retrieve. Use this parameter as a pagination mechanism along
    * with the max-results parameter.
   * @return \Google\Service\Analytics\Experiments
   */
  public function listManagementExperiments($accountId, $webPropertyId, $profileId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Analytics\Experiments");
  }
  /**
   * Update an existing experiment. This method supports patch semantics.
   * (experiments.patch)
   *
   * @param string $accountId
   * Account ID of the experiment to update.
   * @param string $webPropertyId
   * Web property ID of the experiment to update.
   * @param string $profileId
   * View (Profile) ID of the experiment to update.
   * @param string $experimentId
   * Experiment ID of the experiment to update.
   * @param \Google\Experiment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\Experiment
   */
  public function patch($accountId, $webPropertyId, $profileId, $experimentId, \Google\Service\Analytics\Experiment $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Analytics\Experiment");
  }
  /**
   * Update an existing experiment. (experiments.update)
   *
   * @param string $accountId
   * Account ID of the experiment to update.
   * @param string $webPropertyId
   * Web property ID of the experiment to update.
   * @param string $profileId
   * View (Profile) ID of the experiment to update.
   * @param string $experimentId
   * Experiment ID of the experiment to update.
   * @param \Google\Experiment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\Experiment
   */
  public function update($accountId, $webPropertyId, $profileId, $experimentId, \Google\Service\Analytics\Experiment $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Analytics\Experiment");
  }
}
