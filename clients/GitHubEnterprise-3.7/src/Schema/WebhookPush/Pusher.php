<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookPush;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Pusher
{
    public const SCHEMA_JSON = '{"title":"Committer","required":["name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."}';
    public const SCHEMA_TITLE = 'Committer';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"generated_date","email":"generated_email","name":"generated_name","username":"generated_username"}';
    public string $date;
    public ?string $email;
    /**
     * The git author's name.
     */
    public ?string $name;
    public string $username;
    public function __construct(string $date, string $email, string $name, string $username)
    {
        $this->date = $date;
        $this->email = $email;
        $this->name = $name;
        $this->username = $username;
    }
}
