<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Git\CreateTag\Request;

use ApiClients\Client\GitHub\Schema\Git\CreateTag\Request\ApplicationJson\Tagger;

/**
 * @property string $tag
 * @property string $message
 * @property string $object
 * @property string $type
 * @property ?Tagger $tagger
 */
interface ApplicationJson
{
}
