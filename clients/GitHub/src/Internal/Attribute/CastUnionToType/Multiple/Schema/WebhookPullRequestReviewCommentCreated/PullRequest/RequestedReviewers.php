<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Multiple\Schema\WebhookPullRequestReviewCommentCreated\PullRequest;

use Attribute;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertyCaster;

#[Attribute(Attribute::TARGET_PARAMETER)]
final readonly class RequestedReviewers implements PropertyCaster
{
    private \ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookPullRequestReviewCommentCreated\PullRequest\RequestedReviewers $wrappedCaster;

    public function __construct()
    {
        $this->wrappedCaster = new \ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookPullRequestReviewCommentCreated\PullRequest\RequestedReviewers();
    }

    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        $data   = [];
        $values = $value;
        unset($value);
        foreach ($values as $value) {
            $values[] = $this->wrappedCaster->cast($value, $hydrator);
        }

        return $data;
    }
}
