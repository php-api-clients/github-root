<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\EnvironmentApprovals;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Environments
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","description":"The id of the environment.","examples":[56780428]},"node_id":{"type":"string","examples":["MDExOkVudmlyb25tZW50NTY3ODA0Mjg="]},"name":{"type":"string","description":"The name of the environment.","examples":["staging"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"]},"created_at":{"type":"string","description":"The time that the environment was created, in ISO 8601 format.","format":"date-time","examples":["2020-11-23T22:00:40Z"]},"updated_at":{"type":"string","description":"The time that the environment was last updated, in ISO 8601 format.","format":"date-time","examples":["2020-11-23T22:00:40Z"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":56780428,"node_id":"MDExOkVudmlyb25tZW50NTY3ODA0Mjg=","name":"staging","url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging","html_url":"https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging","created_at":"2020-11-23T22:00:40Z","updated_at":"2020-11-23T22:00:40Z"}';
    /**
     * id: The id of the environment.
     * name: The name of the environment.
     * created_at: The time that the environment was created, in ISO 8601 format.
     * updated_at: The time that the environment was last updated, in ISO 8601 format.
     */
    public function __construct(public ?int $id, public ?string $node_id, public ?string $name, public ?string $url, public ?string $html_url, public ?string $created_at, public ?string $updated_at)
    {
    }
}
