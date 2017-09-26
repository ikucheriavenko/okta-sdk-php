<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\Generated\GroupRules;

use Okta\Resource\AbstractResource;

class GroupRuleAction extends AbstractResource
{
    const ASSIGN_USER_TO_GROUPS = 'assignUserToGroups';

    /**
     * Get the assignUserToGroups.
     *
     * @return \Okta\GroupRules\GroupRuleGroupAssignment
     */
    public function getAssignUserToGroups(array $options = []): \Okta\GroupRules\GroupRuleGroupAssignment
    {
        return $this->getResourceProperty(
            self::ASSIGN_USER_TO_GROUPS,
            \Okta\GroupRules\GroupRuleGroupAssignment::class,
            $options
        );
    }

    /**
     * Set the assignUserToGroups.
     *
     * @param GroupRuleGroupAssignment $assignUserToGroups The GroupRuleGroupAssignment instance.
     * @return self
     */
    public function setAssignUserToGroups(GroupRuleGroupAssignment $assignUserToGroups)
    {
        $this->setResourceProperty(
            self::ASSIGN_USER_TO_GROUPS,
            $assignUserToGroups
        );
        
        return $this;
    }
}
