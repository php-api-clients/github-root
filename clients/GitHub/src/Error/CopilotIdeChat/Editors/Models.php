<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\CopilotIdeChat\Editors;

final class Models extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CopilotIdeChat\Editors\Models $error)
    {
    }
}
