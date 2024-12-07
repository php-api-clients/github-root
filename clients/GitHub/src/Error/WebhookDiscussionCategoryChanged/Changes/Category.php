<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDiscussionCategoryChanged\Changes;

use Error;

final class Category extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDiscussionCategoryChanged\Changes\Category $error)
    {
    }
}
