<?php
namespace Google\Service\Games;

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


class PeerChannelDiagnostics extends \Google\Model
{
  protected $bytesReceivedType = '\Google\Service\Games\AggregateStats';
  protected $bytesReceivedDataType = '';
  protected $bytesSentType = '\Google\Service\Games\AggregateStats';
  protected $bytesSentDataType = '';
  public $kind;
  public $numMessagesLost;
  public $numMessagesReceived;
  public $numMessagesSent;
  public $numSendFailures;
  protected $roundtripLatencyMillisType = '\Google\Service\Games\AggregateStats';
  protected $roundtripLatencyMillisDataType = '';

  public function setBytesReceived(\Google\Service\Games\AggregateStats $bytesReceived)
  {
    $this->bytesReceived = $bytesReceived;
  }

  public function getBytesReceived()
  {
    return $this->bytesReceived;
  }
  
  public function setBytesSent(\Google\Service\Games\AggregateStats $bytesSent)
  {
    $this->bytesSent = $bytesSent;
  }

  public function getBytesSent()
  {
    return $this->bytesSent;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setNumMessagesLost($numMessagesLost)
  {
    $this->numMessagesLost = $numMessagesLost;
  }

  public function getNumMessagesLost()
  {
    return $this->numMessagesLost;
  }
  
  public function setNumMessagesReceived($numMessagesReceived)
  {
    $this->numMessagesReceived = $numMessagesReceived;
  }

  public function getNumMessagesReceived()
  {
    return $this->numMessagesReceived;
  }
  
  public function setNumMessagesSent($numMessagesSent)
  {
    $this->numMessagesSent = $numMessagesSent;
  }

  public function getNumMessagesSent()
  {
    return $this->numMessagesSent;
  }
  
  public function setNumSendFailures($numSendFailures)
  {
    $this->numSendFailures = $numSendFailures;
  }

  public function getNumSendFailures()
  {
    return $this->numSendFailures;
  }
  
  public function setRoundtripLatencyMillis(\Google\Service\Games\AggregateStats $roundtripLatencyMillis)
  {
    $this->roundtripLatencyMillis = $roundtripLatencyMillis;
  }

  public function getRoundtripLatencyMillis()
  {
    return $this->roundtripLatencyMillis;
  }
  
}
