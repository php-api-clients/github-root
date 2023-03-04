<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ContributorActivity;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Weeks
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"w":{"type":"integer"},"a":{"type":"integer"},"d":{"type":"integer"},"c":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"w":13,"a":13,"d":13,"c":13}';
    public ?int $w;
    public ?int $a;
    public ?int $d;
    public ?int $c;
    public function __construct(int $w, int $a, int $d, int $c)
    {
        $this->w = $w;
        $this->a = $a;
        $this->d = $d;
        $this->c = $c;
    }
}
