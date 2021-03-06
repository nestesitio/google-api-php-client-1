<?php
namespace Google\Service\AdSense;

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


class Account extends \Google\Collection
{
  public $id;
  public $kind;
  public $name;
  public $premium;
  protected $subAccountsType = '\Google\Service\AdSense\Account';
  protected $subAccountsDataType = 'array';
  public $timezone;

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
  
  public function setPremium($premium)
  {
    $this->premium = $premium;
  }

  public function getPremium()
  {
    return $this->premium;
  }
  
  public function setSubAccounts($subAccounts)
  {
    $this->subAccounts = $subAccounts;
  }

  public function getSubAccounts()
  {
    return $this->subAccounts;
  }
  
  public function setTimezone($timezone)
  {
    $this->timezone = $timezone;
  }

  public function getTimezone()
  {
    return $this->timezone;
  }
  
}
