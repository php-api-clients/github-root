<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Artifact;

final class WorkflowRun extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun $error)
    {
    }
}
