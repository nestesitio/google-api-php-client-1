<?php
namespace Google\Service\Fusiontables;

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


class PointStyle extends \Google\Model
{
  public $iconName;
  protected $iconStylerType = '\Google\Service\Fusiontables\StyleFunction';
  protected $iconStylerDataType = '';

  public function setIconName($iconName)
  {
    $this->iconName = $iconName;
  }

  public function getIconName()
  {
    return $this->iconName;
  }

  public function setIconStyler(\Google\Service\Fusiontables\StyleFunction $iconStyler)
  {
    $this->iconStyler = $iconStyler;
  }

  public function getIconStyler()
  {
    return $this->iconStyler;
  }
}
