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


class VolumeUserInfo extends \Google\Model
{
  protected $copyType = '\Google\Service\Books\VolumeUserInfoCopy';
  protected $copyDataType = '';
  public $isInMyBooks;
  public $isPreordered;
  public $isPurchased;
  public $isUploaded;
  protected $readingPositionType = '\Google\Service\Books\ReadingPosition';
  protected $readingPositionDataType = '';
  protected $rentalPeriodType = '\Google\Service\Books\VolumeUserInfoRentalPeriod';
  protected $rentalPeriodDataType = '';
  public $rentalState;
  protected $reviewType = '\Google\Service\Books\Review';
  protected $reviewDataType = '';
  public $updated;
  protected $userUploadedVolumeInfoType = '\Google\Service\Books\VolumeUserInfoUserUploadedVolumeInfo';
  protected $userUploadedVolumeInfoDataType = '';

  public function setCopy(\Google\Service\Books\VolumeUserInfoCopy $copy)
  {
    $this->copy = $copy;
  }

  public function getCopy()
  {
    return $this->copy;
  }

  public function setIsInMyBooks($isInMyBooks)
  {
    $this->isInMyBooks = $isInMyBooks;
  }

  public function getIsInMyBooks()
  {
    return $this->isInMyBooks;
  }

  public function setIsPreordered($isPreordered)
  {
    $this->isPreordered = $isPreordered;
  }

  public function getIsPreordered()
  {
    return $this->isPreordered;
  }

  public function setIsPurchased($isPurchased)
  {
    $this->isPurchased = $isPurchased;
  }

  public function getIsPurchased()
  {
    return $this->isPurchased;
  }

  public function setIsUploaded($isUploaded)
  {
    $this->isUploaded = $isUploaded;
  }

  public function getIsUploaded()
  {
    return $this->isUploaded;
  }

  public function setReadingPosition(\Google\Service\Books\ReadingPosition $readingPosition)
  {
    $this->readingPosition = $readingPosition;
  }

  public function getReadingPosition()
  {
    return $this->readingPosition;
  }

  public function setRentalPeriod(\Google\Service\Books\VolumeUserInfoRentalPeriod $rentalPeriod)
  {
    $this->rentalPeriod = $rentalPeriod;
  }

  public function getRentalPeriod()
  {
    return $this->rentalPeriod;
  }

  public function setRentalState($rentalState)
  {
    $this->rentalState = $rentalState;
  }

  public function getRentalState()
  {
    return $this->rentalState;
  }

  public function setReview(\Google\Service\Books\Review $review)
  {
    $this->review = $review;
  }

  public function getReview()
  {
    return $this->review;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }

  public function setUserUploadedVolumeInfo(\Google\Service\Books\VolumeUserInfoUserUploadedVolumeInfo $userUploadedVolumeInfo)
  {
    $this->userUploadedVolumeInfo = $userUploadedVolumeInfo;
  }

  public function getUserUploadedVolumeInfo()
  {
    return $this->userUploadedVolumeInfo;
  }
}
