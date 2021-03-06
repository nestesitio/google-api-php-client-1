<?php
namespace Google\Service\Blogger\PageViews;

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
 * The "pageViews" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bloggerService = new Google_Service_Blogger(...);
 *   $pageViews = $bloggerService->pageViews;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Retrieve pageview stats for a Blog. (pageViews.get)
   *
   * @param string $blogId
   * The ID of the blog to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string range
   *
   * @return \Google\Service\Blogger\Pageviews
   */
  public function get($blogId, $optParams = array())
  {
    $params = array('blogId' => $blogId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Blogger\Pageviews");
  }
}
