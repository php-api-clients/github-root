<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Operations\Orgs\RemoveOutsideCollaborator\Response\ApplicationJson;

final class UnprocessableEntity extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Orgs\RemoveOutsideCollaborator\Response\ApplicationJson\UnprocessableEntity $error)
    {
    }
}
