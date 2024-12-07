<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $name
 * @property int $sizeInBytes
 * @property string $url
 * @property string $archiveDownloadUrl
 * @property bool $expired
 * @property ?string $createdAt
 * @property ?string $expiresAt
 * @property ?string $updatedAt
 * @property ?\ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun $workflowRun
 */
interface Artifact
{
}
