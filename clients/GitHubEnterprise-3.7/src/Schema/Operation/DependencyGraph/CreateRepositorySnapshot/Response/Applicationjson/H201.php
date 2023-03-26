<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Operation\DependencyGraph\CreateRepositorySnapshot\Response\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class H201
{
    public const SCHEMA_JSON = '{"required":["id","created_at","result","message"],"type":"object","properties":{"id":{"type":"integer","description":"ID of the created snapshot."},"created_at":{"type":"string","description":"The time at which the snapshot was created."},"result":{"type":"string","description":"Either \\"SUCCESS\\", \\"ACCEPTED\\", or \\"INVALID\\". \\"SUCCESS\\" indicates that the snapshot was successfully created and the repository\'s dependencies were updated. \\"ACCEPTED\\" indicates that the snapshot was successfully created, but the repository\'s dependencies were not updated. \\"INVALID\\" indicates that the snapshot was malformed."},"message":{"type":"string","description":"A message providing further details about the result, such as why the dependencies were not updated."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"created_at":"generated_created_at_null","result":"generated_result_null","message":"generated_message_null"}';
    /**
     * id: ID of the created snapshot.
     * createdAt: The time at which the snapshot was created.
     * result: Either "SUCCESS", "ACCEPTED", or "INVALID". "SUCCESS" indicates that the snapshot was successfully created and the repository's dependencies were updated. "ACCEPTED" indicates that the snapshot was successfully created, but the repository's dependencies were not updated. "INVALID" indicates that the snapshot was malformed.
     * message: A message providing further details about the result, such as why the dependencies were not updated.
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public string $result, public string $message)
    {
    }
}
