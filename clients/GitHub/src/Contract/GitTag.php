<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $nodeId
 * @property string $tag
 * @property string $sha
 * @property string $url
 * @property string $message
 * @property \ApiClients\Client\GitHub\Schema\GitTag\Tagger $tagger
 * @property \ApiClients\Client\GitHub\Schema\GitTag\Object_ $object
 * @property ?\ApiClients\Client\GitHub\Schema\Verification $verification
 */
interface GitTag
{
}
