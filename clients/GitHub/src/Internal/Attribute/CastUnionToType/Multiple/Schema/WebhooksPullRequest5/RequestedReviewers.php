<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Multiple\Schema\WebhooksPullRequest5;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final readonly class RequestedReviewers implements \EventSauce\ObjectHydrator\PropertyCaster
{
    private \ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhooksPullRequest5\RequestedReviewers $wrappedCaster;
    public function __construct()
    {
        $this->wrappedCaster = new \ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhooksPullRequest5\RequestedReviewers();
    }
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        $data = array();
        $values = $value;
        unset($value);
        foreach ($values as $value) {
            $values[] = $this->wrappedCaster->cast($value, $hydrator);
        }
        return $data;
    }
}
