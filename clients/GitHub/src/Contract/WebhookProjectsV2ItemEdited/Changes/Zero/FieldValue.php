<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookProjectsV2ItemEdited\Changes\Zero;

use ApiClients\Client\GitHub\Schema\ProjectsV2IterationSetting;
use ApiClients\Client\GitHub\Schema\ProjectsV2SingleSelectOption;

/**
 * @property ?string $fieldNodeId
 * @property ?string $fieldType
 * @property ?string $fieldName
 * @property ?int $projectNumber
 * @property string|int|ProjectsV2SingleSelectOption|ProjectsV2IterationSetting|null $from
 * @property string|int|ProjectsV2SingleSelectOption|ProjectsV2IterationSetting|null $to
 */
interface FieldValue
{
}
