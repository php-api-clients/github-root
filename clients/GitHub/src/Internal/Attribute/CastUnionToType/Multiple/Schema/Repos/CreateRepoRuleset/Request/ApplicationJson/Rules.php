<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Multiple\Schema\Repos\CreateRepoRuleset\Request\ApplicationJson;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final readonly class Rules implements \EventSauce\ObjectHydrator\PropertyCaster
{
    private \ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Repos\CreateRepoRuleset\Request\ApplicationJson\Rules $wrappedCaster;
    public function __construct()
    {
        $this->wrappedCaster = new \ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Repos\CreateRepoRuleset\Request\ApplicationJson\Rules();
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
