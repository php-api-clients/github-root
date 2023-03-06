<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class OrganizationCustomRepositoryRole
{
    public const SCHEMA_JSON = '{"title":"Organization Custom Repository Role","required":["id","name"],"type":"object","properties":{"id":{"type":"integer","description":"The unique identifier of the custom role."},"name":{"type":"string","description":"The name of the custom role."},"description":{"type":["string","null"],"description":"A short description about who this role is for or what permissions it grants."},"base_role":{"enum":["read","triage","write","maintain"],"type":"string","description":"The system role from which this role inherits permissions."},"permissions":{"type":"array","items":{"type":"string"},"description":"A list of additional permissions included in this role."},"organization":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Custom repository roles created by organization administrators"}';
    public const SCHEMA_TITLE = 'Organization Custom Repository Role';
    public const SCHEMA_DESCRIPTION = 'Custom repository roles created by organization administrators';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","description":"generated_description","base_role":"generated_base_role","permissions":["generated_permissions"],"organization":{"name":"generated_name","email":"generated_email","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"created_at":"generated_created_at","updated_at":"generated_updated_at"}';
    /**
     * The unique identifier of the custom role.
     */
    public ?int $id;
    /**
     * The name of the custom role.
     */
    public ?string $name;
    /**
     * A short description about who this role is for or what permissions it grants.
     */
    public ?string $description;
    /**
     * The system role from which this role inherits permissions.
     */
    public string $base_role;
    /**
     * A list of additional permissions included in this role.
     * @var array<string>
     */
    public array $permissions;
    /**
     * A GitHub user.
     */
    public Schema\SimpleUser $organization;
    public string $created_at;
    public string $updated_at;
    public function __construct(int $id, string $name, string $description, string $base_role, array $permissions, Schema\SimpleUser $organization, string $created_at, string $updated_at)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->base_role = $base_role;
        $this->permissions = $permissions;
        $this->organization = $organization;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
