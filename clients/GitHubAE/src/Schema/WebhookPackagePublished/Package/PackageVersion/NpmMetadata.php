<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class NpmMetadata
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string"},"version":{"type":"string"},"npm_user":{"type":"string"},"author":{"type":["object","null"]},"bugs":{"type":["object","null"]},"dependencies":{"type":"object"},"dev_dependencies":{"type":"object"},"peer_dependencies":{"type":"object"},"optional_dependencies":{"type":"object"},"description":{"type":"string"},"dist":{"type":["object","null"]},"git_head":{"type":"string"},"homepage":{"type":"string"},"license":{"type":"string"},"main":{"type":"string"},"repository":{"type":["object","null"]},"scripts":{"type":"object"},"id":{"type":"string"},"node_version":{"type":"string"},"npm_version":{"type":"string"},"has_shrinkwrap":{"type":"boolean"},"maintainers":{"type":"array","items":{"type":"object"}},"contributors":{"type":"array","items":{"type":"object"}},"engines":{"type":"object"},"keywords":{"type":"array","items":{"type":"string"}},"files":{"type":"array","items":{"type":"string"}},"bin":{"type":"object"},"man":{"type":"object"},"directories":{"type":["object","null"]},"os":{"type":"array","items":{"type":"string"}},"cpu":{"type":"array","items":{"type":"string"}},"readme":{"type":"string"},"installation_command":{"type":"string"},"release_id":{"type":"integer"},"commit_oid":{"type":"string"},"published_via_actions":{"type":"boolean"},"deleted_by_id":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","version":"generated_version","npm_user":"generated_npm_user","author":[],"bugs":[],"dependencies":[],"dev_dependencies":[],"peer_dependencies":[],"optional_dependencies":[],"description":"generated_description","dist":[],"git_head":"generated_git_head","homepage":"generated_homepage","license":"generated_license","main":"generated_main","repository":[],"scripts":[],"id":"generated_id","node_version":"generated_node_version","npm_version":"generated_npm_version","has_shrinkwrap":false,"maintainers":[[]],"contributors":[[]],"engines":[],"keywords":["generated_keywords"],"files":["generated_files"],"bin":[],"man":[],"directories":[],"os":["generated_os"],"cpu":["generated_cpu"],"readme":"generated_readme","installation_command":"generated_installation_command","release_id":13,"commit_oid":"generated_commit_oid","published_via_actions":false,"deleted_by_id":13}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\AuditLogEvent\Config> $maintainers
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\AuditLogEvent\Config> $contributors
     * @param ?array<string> $keywords
     * @param ?array<string> $files
     * @param ?array<string> $os
     * @param ?array<string> $cpu
     */
    public function __construct(public ?string $name, public ?string $version, public ?string $npm_user, public ?Schema\WebhookCheckSuiteCompleted\ActionsMeta $author, public ?Schema\WebhookCheckSuiteCompleted\ActionsMeta $bugs, public ?Schema\AuditLogEvent\Config $dependencies, public ?Schema\AuditLogEvent\Config $dev_dependencies, public ?Schema\AuditLogEvent\Config $peer_dependencies, public ?Schema\AuditLogEvent\Config $optional_dependencies, public ?string $description, public ?Schema\WebhookCheckSuiteCompleted\ActionsMeta $dist, public ?string $git_head, public ?string $homepage, public ?string $license, public ?string $main, public ?Schema\WebhookCheckSuiteCompleted\ActionsMeta $repository, public ?Schema\AuditLogEvent\Config $scripts, public ?string $id, public ?string $node_version, public ?string $npm_version, public ?bool $has_shrinkwrap, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\AuditLogEvent\Config::class)] public ?array $maintainers, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\AuditLogEvent\Config::class)] public ?array $contributors, public ?Schema\AuditLogEvent\Config $engines, public ?array $keywords, public ?array $files, public ?Schema\AuditLogEvent\Config $bin, public ?Schema\AuditLogEvent\Config $man, public ?Schema\WebhookCheckSuiteCompleted\ActionsMeta $directories, public ?array $os, public ?array $cpu, public ?string $readme, public ?string $installation_command, public ?int $release_id, public ?string $commit_oid, public ?bool $published_via_actions, public ?int $deleted_by_id)
    {
    }
}
