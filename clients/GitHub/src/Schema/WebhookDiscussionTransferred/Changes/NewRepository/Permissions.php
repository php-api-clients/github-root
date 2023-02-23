<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookDiscussionTransferred\Changes\NewRepository;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["pull","push","admin"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"pull":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"admin":false,"maintain":false,"pull":false,"push":false,"triage":false}';
    public ?bool $admin;
    public bool $maintain;
    public ?bool $pull;
    public ?bool $push;
    public bool $triage;
    public function __construct(bool $admin, bool $maintain, bool $pull, bool $push, bool $triage)
    {
        $this->admin = $admin;
        $this->maintain = $maintain;
        $this->pull = $pull;
        $this->push = $push;
        $this->triage = $triage;
    }
}
