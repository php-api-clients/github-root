<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\GitTag\Object_;
use ApiClients\Client\GitHub\Schema\GitTag\Tagger;
use ApiClients\Client\GitHub\Schema\Verification;

/**
 * @property string $nodeId
 * @property string $tag
 * @property string $sha
 * @property string $url
 * @property string $message
 * @property Tagger $tagger
 * @property Object_ $object
 * @property ?Verification $verification
 */
interface GitTag
{
}
