<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Reactions\CreateForIssueComment\Request;

final class ApplicationJson extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Reactions\CreateForIssueComment\Request\ApplicationJson $error)
    {
    }
}
