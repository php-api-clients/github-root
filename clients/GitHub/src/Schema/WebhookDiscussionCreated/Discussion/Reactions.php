<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookDiscussionCreated\Discussion;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Reactions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"_PLUSES_1":13,"_MINUS_1":13,"confused":13,"eyes":13,"heart":13,"hooray":13,"laugh":13,"rocket":13,"total_count":13,"url":"generated_url"}';
    public ?int $_PLUSES_1;
    public ?int $_MINUS_1;
    public ?int $confused;
    public ?int $eyes;
    public ?int $heart;
    public ?int $hooray;
    public ?int $laugh;
    public ?int $rocket;
    public ?int $total_count;
    public ?string $url;
    public function __construct(int $_PLUSES_1, int $_MINUS_1, int $confused, int $eyes, int $heart, int $hooray, int $laugh, int $rocket, int $total_count, string $url)
    {
        $this->_PLUSES_1 = $_PLUSES_1;
        $this->_MINUS_1 = $_MINUS_1;
        $this->confused = $confused;
        $this->eyes = $eyes;
        $this->heart = $heart;
        $this->hooray = $hooray;
        $this->laugh = $laugh;
        $this->rocket = $rocket;
        $this->total_count = $total_count;
        $this->url = $url;
    }
}
