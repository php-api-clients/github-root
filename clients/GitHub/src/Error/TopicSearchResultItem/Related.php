<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\TopicSearchResultItem;

use Error;

final class Related extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related $error)
    {
    }
}
