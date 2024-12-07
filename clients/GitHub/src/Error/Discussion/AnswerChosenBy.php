<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Discussion;

use Error;

final class AnswerChosenBy extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy $error)
    {
    }
}
