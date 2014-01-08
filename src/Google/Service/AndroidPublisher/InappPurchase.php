<?php
namespace Google\Service\AndroidPublisher;

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


class InappPurchase extends \Google\Model
{
  public $consumptionState;
  public $developerPayload;
  public $kind;
  public $purchaseState;
  public $purchaseTime;

  public function setConsumptionState($consumptionState)
  {
    $this->consumptionState = $consumptionState;
  }

  public function getConsumptionState()
  {
    return $this->consumptionState;
  }

  public function setDeveloperPayload($developerPayload)
  {
    $this->developerPayload = $developerPayload;
  }

  public function getDeveloperPayload()
  {
    return $this->developerPayload;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPurchaseState($purchaseState)
  {
    $this->purchaseState = $purchaseState;
  }

  public function getPurchaseState()
  {
    return $this->purchaseState;
  }

  public function setPurchaseTime($purchaseTime)
  {
    $this->purchaseTime = $purchaseTime;
  }

  public function getPurchaseTime()
  {
    return $this->purchaseTime;
  }
}