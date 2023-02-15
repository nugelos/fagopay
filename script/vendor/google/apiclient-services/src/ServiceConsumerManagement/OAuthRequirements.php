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
 */

namespace Google\Service\ServiceConsumerManagement;

class OAuthRequirements extends \Google\Model
{
  /**
   * @var bool
   */
  public $allowAnyScope;
  /**
   * @var string
   */
  public $canonicalScopes;

  /**
   * @param bool
   */
  public function setAllowAnyScope($allowAnyScope)
  {
    $this->allowAnyScope = $allowAnyScope;
  }
  /**
   * @return bool
   */
  public function getAllowAnyScope()
  {
    return $this->allowAnyScope;
  }
  /**
   * @param string
   */
  public function setCanonicalScopes($canonicalScopes)
  {
    $this->canonicalScopes = $canonicalScopes;
  }
  /**
   * @return string
   */
  public function getCanonicalScopes()
  {
    return $this->canonicalScopes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OAuthRequirements::class, 'Google_Service_ServiceConsumerManagement_OAuthRequirements');
