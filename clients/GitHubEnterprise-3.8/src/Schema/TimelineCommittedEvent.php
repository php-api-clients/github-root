<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class TimelineCommittedEvent
{
    public const SCHEMA_JSON = '{"title":"Timeline Committed Event","required":["sha","node_id","url","html_url","author","committer","tree","message","parents","verification"],"type":"object","properties":{"event":{"type":"string"},"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"author":{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"},"committer":{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"},"message":{"type":"string","description":"Message describing the purpose of the commit","examples":["Fix #42"]},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}},"parents":{"type":"array","items":{"required":["sha","url","html_url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}},"verification":{"required":["verified","reason","signature","payload"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}},"html_url":{"type":"string","format":"uri"}},"description":"Timeline Committed Event"}';
    public const SCHEMA_TITLE = 'Timeline Committed Event';
    public const SCHEMA_DESCRIPTION = 'Timeline Committed Event';
    public const SCHEMA_EXAMPLE_DATA = '{"event":"generated_event","sha":"7638417db6d59f3c431d3e1f261cc637155684cd","node_id":"generated_node_id","url":"generated_url","author":{"date":"2014-08-09T08:02:04+12:00","email":"monalisa.octocat@example.com","name":"Monalisa Octocat"},"committer":{"date":"2014-08-09T08:02:04+12:00","email":"monalisa.octocat@example.com","name":"Monalisa Octocat"},"message":"Fix #42","tree":{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd","url":"generated_url"},"parents":[{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd","url":"generated_url","html_url":"generated_html_url"}],"verification":{"verified":false,"reason":"generated_reason","signature":"generated_signature","payload":"generated_payload"},"html_url":"generated_html_url"}';
    /**
     * sha: SHA for the commit
     * author: Identifying information for the git-user
     * committer: Identifying information for the git-user
     * message: Message describing the purpose of the commit
     * @param array<\ApiClients\Client\GitHubEnterprise\Schema\GitCommit\Parents> $parents
     */
    public function __construct(public ?string $event, public string $sha, public string $node_id, public string $url, public Schema\GitCommit\Author $author, public Schema\GitCommit\Author $committer, public string $message, public Schema\GitCommit\Tree $tree, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\GitCommit\Parents::class)] public array $parents, public Schema\GitCommit\Verification $verification, public string $html_url)
    {
    }
}
