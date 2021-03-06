<?php
namespace Google\Service\Books;

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


class GeolayerdataGeoViewport extends \Google\Model
{
  protected $hiType = '\Google\Service\Books\GeolayerdataGeoViewportHi';
  protected $hiDataType = '';
  protected $loType = '\Google\Service\Books\GeolayerdataGeoViewportLo';
  protected $loDataType = '';

  public function setHi(\Google\Service\Books\GeolayerdataGeoViewportHi $hi)
  {
    $this->hi = $hi;
  }

  public function getHi()
  {
    return $this->hi;
  }

  public function setLo(\Google\Service\Books\GeolayerdataGeoViewportLo $lo)
  {
    $this->lo = $lo;
  }

  public function getLo()
  {
    return $this->lo;
  }
}
