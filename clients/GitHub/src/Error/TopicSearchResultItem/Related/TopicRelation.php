<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\TopicSearchResultItem\Related;

use Error;

final class TopicRelation extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related\TopicRelation $error)
    {
    }
}
