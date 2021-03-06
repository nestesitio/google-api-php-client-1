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


class PlayerLeaderboardScoreListResponse extends \Google\Collection
{
  protected $itemsType = '\Google\Service\Games\PlayerLeaderboardScore';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $playerType = '\Google\Service\Games\Player';
  protected $playerDataType = '';

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  
  public function setPlayer(\Google\Service\Games\Player $player)
  {
    $this->player = $player;
  }

  public function getPlayer()
  {
    return $this->player;
  }
  
}
