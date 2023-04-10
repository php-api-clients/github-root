<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ContentReferenceAttachment
{
    public const SCHEMA_JSON = '{"title":"ContentReferenceAttachment","required":["id","title","body"],"type":"object","properties":{"id":{"type":"integer","description":"The ID of the attachment","examples":[21]},"title":{"maxLength":1024,"type":"string","description":"The title of the attachment","examples":["Title of the attachment"]},"body":{"maxLength":262144,"type":"string","description":"The body of the attachment","examples":["Body of the attachment"]},"node_id":{"type":"string","description":"The node_id of the content attachment","examples":["MDE3OkNvbnRlbnRBdHRhY2htZW50MjE="]}},"description":"Content Reference attachments allow you to provide context around URLs posted in comments"}';
    public const SCHEMA_TITLE = 'ContentReferenceAttachment';
    public const SCHEMA_DESCRIPTION = 'Content Reference attachments allow you to provide context around URLs posted in comments';
    public const SCHEMA_EXAMPLE_DATA = '{"id":21,"title":"Title of the attachment","body":"Body of the attachment","node_id":"MDE3OkNvbnRlbnRBdHRhY2htZW50MjE="}';
    /**
     * id: The ID of the attachment
     * title: The title of the attachment
     * body: The body of the attachment
     * nodeId: The node_id of the content attachment
     */
    public function __construct(public int $id, public string $title, public string $body, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId)
    {
    }
}
