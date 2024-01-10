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

namespace Deconf\SEIWP\Google\Service\Analytics\Resource;

use Deconf\SEIWP\Google\Service\Analytics\Columns;

/**
 * The "columns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Deconf\SEIWP\Google\Service\Analytics(...);
 *   $columns = $analyticsService->metadata_columns;
 *  </code>
 */
class MetadataColumns extends \Deconf\SEIWP\Google\Service\Resource
{
  /**
   * Lists all columns for a report type (columns.listMetadataColumns)
   *
   * @param string $reportType Report type. Allowed Values: 'ga'. Where 'ga'
   * corresponds to the Core Reporting API
   * @param array $optParams Optional parameters.
   * @return Columns
   */
  public function listMetadataColumns($reportType, $optParams = [])
  {
    $params = ['reportType' => $reportType];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], Columns::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetadataColumns::class, 'Google_Service_Analytics_Resource_MetadataColumns');
