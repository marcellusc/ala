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

class FilterExpression extends \Deconf\SEIWP\Google\Model
{
  /**
   * @var bool
   */
  public $caseSensitive;
  /**
   * @var string
   */
  public $expressionValue;
  /**
   * @var string
   */
  public $field;
  /**
   * @var int
   */
  public $fieldIndex;
  /**
   * @var string
   */
  public $kind;
  /**
   * @var string
   */
  public $matchType;

  /**
   * @param bool
   */
  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }
  /**
   * @return bool
   */
  public function getCaseSensitive()
  {
    return $this->caseSensitive;
  }
  /**
   * @param string
   */
  public function setExpressionValue($expressionValue)
  {
    $this->expressionValue = $expressionValue;
  }
  /**
   * @return string
   */
  public function getExpressionValue()
  {
    return $this->expressionValue;
  }
  /**
   * @param string
   */
  public function setField($field)
  {
    $this->field = $field;
  }
  /**
   * @return string
   */
  public function getField()
  {
    return $this->field;
  }
  /**
   * @param int
   */
  public function setFieldIndex($fieldIndex)
  {
    $this->fieldIndex = $fieldIndex;
  }
  /**
   * @return int
   */
  public function getFieldIndex()
  {
    return $this->fieldIndex;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param string
   */
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /**
   * @return string
   */
  public function getMatchType()
  {
    return $this->matchType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FilterExpression::class, 'Google_Service_Analytics_FilterExpression');
