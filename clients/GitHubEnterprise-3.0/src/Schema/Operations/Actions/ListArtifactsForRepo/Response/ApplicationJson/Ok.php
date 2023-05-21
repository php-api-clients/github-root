<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{"required":["total_count","artifacts"],"type":"object","properties":{"total_count":{"type":"integer"},"artifacts":{"type":"array","items":{"title":"Artifact","required":["id","node_id","name","size_in_bytes","url","archive_download_url","expired","created_at","expires_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[5]},"node_id":{"type":"string","examples":["MDEwOkNoZWNrU3VpdGU1"]},"name":{"type":"string","description":"The name of the artifact.","examples":["AdventureWorks.Framework"]},"size_in_bytes":{"type":"integer","description":"The size in bytes of the artifact.","examples":[12345]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5"]},"archive_download_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5\\/zip"]},"expired":{"type":"boolean","description":"Whether or not the artifact has expired."},"created_at":{"type":["string","null"],"format":"date-time"},"expires_at":{"type":["string","null"],"format":"date-time"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"An artifact"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":11,"artifacts":[{"id":5,"node_id":"MDEwOkNoZWNrU3VpdGU1","name":"AdventureWorks.Framework","size_in_bytes":12345,"url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5","archive_download_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5\\/zip","expired":false,"created_at":"1970-01-01T00:00:00+00:00","expires_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00"},{"id":5,"node_id":"MDEwOkNoZWNrU3VpdGU1","name":"AdventureWorks.Framework","size_in_bytes":12345,"url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5","archive_download_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5\\/zip","expired":false,"created_at":"1970-01-01T00:00:00+00:00","expires_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00"}]}';

    public function __construct(#[MapFrom('total_count')] public int $totalCount, public array $artifacts)
    {
    }
}
