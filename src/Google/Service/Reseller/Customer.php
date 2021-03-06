<?php
namespace Google\Service\Reseller;

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


class Customer extends \Google\Model
{
  public $alternateEmail;
  public $customerDomain;
  public $customerId;
  public $kind;
  public $phoneNumber;
  protected $postalAddressType = '\Google\Service\Reseller\Address';
  protected $postalAddressDataType = '';
  public $resourceUiUrl;

  public function setAlternateEmail($alternateEmail)
  {
    $this->alternateEmail = $alternateEmail;
  }

  public function getAlternateEmail()
  {
    return $this->alternateEmail;
  }
  
  public function setCustomerDomain($customerDomain)
  {
    $this->customerDomain = $customerDomain;
  }

  public function getCustomerDomain()
  {
    return $this->customerDomain;
  }
  
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }

  public function getCustomerId()
  {
    return $this->customerId;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  
  public function setPostalAddress(\Google\Service\Reseller\Address $postalAddress)
  {
    $this->postalAddress = $postalAddress;
  }

  public function getPostalAddress()
  {
    return $this->postalAddress;
  }
  
  public function setResourceUiUrl($resourceUiUrl)
  {
    $this->resourceUiUrl = $resourceUiUrl;
  }

  public function getResourceUiUrl()
  {
    return $this->resourceUiUrl;
  }
  
}
