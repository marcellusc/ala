<?php
/*
 * Copyright 2014 Google Inc.
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
 *
 * Modified by __root__ on 31-May-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Deconf\SEIWP\Google\Service\Analytics;

class EntityUserLinkPermissions extends \Deconf\SEIWP\Google\Collection
{
  protected $collection_key = 'local';
  /**
   * @var string[]
   */
  public $effective;
  /**
   * @var string[]
   */
  public $local;

  /**
   * @param string[]
   */
  public function setEffective($effective)
  {
    $this->effective = $effective;
  }
  /**
   * @return string[]
   */
  public function getEffective()
  {
    return $this->effective;
  }
  /**
   * @param string[]
   */
  public function setLocal($local)
  {
    $this->local = $local;
  }
  /**
   * @return string[]
   */
  public function getLocal()
  {
    return $this->local;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EntityUserLinkPermissions::class, 'Google_Service_Analytics_EntityUserLinkPermissions');
