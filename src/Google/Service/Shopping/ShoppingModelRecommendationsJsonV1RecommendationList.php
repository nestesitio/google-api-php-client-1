<?php
namespace Google\Service\Shopping;

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


class ShoppingModelRecommendationsJsonV1RecommendationList extends \Google\Model
{
  protected $productType = '\Google\Service\Shopping\ShoppingModelProductJsonV1';
  protected $productDataType = '';

  public function setProduct(\Google\Service\Shopping\ShoppingModelProductJsonV1 $product)
  {
    $this->product = $product;
  }

  public function getProduct()
  {
    return $this->product;
  }
}