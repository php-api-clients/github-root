<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class AuditLogEvent
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"@timestamp":{"type":"integer","description":"The time the audit log event occurred, given as a [Unix timestamp](http:\\/\\/en.wikipedia.org\\/wiki\\/Unix_time)."},"action":{"type":"string","description":"The name of the action that was performed, for example `user.login` or `repo.create`."},"active":{"type":"boolean"},"active_was":{"type":"boolean"},"actor":{"type":"string","description":"The actor who performed the action."},"actor_id":{"type":"integer","description":"The id of the actor who performed the action."},"actor_location":{"type":"object","properties":{"country_name":{"type":"string"}}},"data":{"type":"object","additionalProperties":true},"org_id":{"type":"integer"},"user_id":{"type":"integer"},"business_id":{"type":"integer"},"blocked_user":{"type":"string","description":"The username of the account being blocked."},"business":{"type":"string"},"config":{"type":"array","items":{"type":"object"}},"config_was":{"type":"array","items":{"type":"object"}},"content_type":{"type":"string"},"operation_type":{"type":"string"},"created_at":{"type":"integer","description":"The time the audit log event was recorded, given as a [Unix timestamp](http:\\/\\/en.wikipedia.org\\/wiki\\/Unix_time)."},"deploy_key_fingerprint":{"type":"string"},"_document_id":{"type":"string","description":"A unique identifier for an audit event."},"emoji":{"type":"string"},"events":{"type":"array","items":{"type":"object"}},"events_were":{"type":"array","items":{"type":"object"}},"explanation":{"type":"string"},"fingerprint":{"type":"string"},"hook_id":{"type":"integer"},"limited_availability":{"type":"boolean"},"message":{"type":"string"},"name":{"type":"string"},"old_user":{"type":"string"},"openssh_public_key":{"type":"string"},"org":{"type":"string"},"previous_visibility":{"type":"string"},"read_only":{"type":"boolean"},"repo":{"type":"string","description":"The name of the repository."},"repository":{"type":"string","description":"The name of the repository."},"repository_public":{"type":"boolean"},"target_login":{"type":"string"},"team":{"type":"string"},"transport_protocol":{"type":"integer","description":"The type of protocol (for example, HTTP or SSH) used to transfer Git data."},"transport_protocol_name":{"type":"string","description":"A human readable name for the protocol (for example, HTTP or SSH) used to transfer Git data."},"user":{"type":"string","description":"The user that was affected by the action performed (if available)."},"visibility":{"type":"string","description":"The repository visibility, for example `public` or `private`."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"@timestamp":13,"action":"generated","active":false,"active_was":false,"actor":"generated","actor_id":8,"actor_location":{"country_name":"generated"},"data":"generated","org_id":6,"user_id":7,"business_id":11,"blocked_user":"generated","business":"generated","config":[[],[]],"config_was":[[],[]],"content_type":"generated","operation_type":"generated","created_at":10,"deploy_key_fingerprint":"generated","_document_id":"generated","emoji":"generated","events":[[],[]],"events_were":[[],[]],"explanation":"generated","fingerprint":"generated","hook_id":7,"limited_availability":false,"message":"generated","name":"generated","old_user":"generated","openssh_public_key":"generated","org":"generated","previous_visibility":"generated","read_only":false,"repo":"generated","repository":"generated","repository_public":false,"target_login":"generated","team":"generated","transport_protocol":18,"transport_protocol_name":"generated","user":"generated","visibility":"generated"}';

    /**
     * atTimestamp: The time the audit log event occurred, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
     * action: The name of the action that was performed, for example `user.login` or `repo.create`.
     * actor: The actor who performed the action.
     * actorId: The id of the actor who performed the action.
     * blockedUser: The username of the account being blocked.
     * createdAt: The time the audit log event was recorded, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
     * documentId: A unique identifier for an audit event.
     * repo: The name of the repository.
     * repository: The name of the repository.
     * transportProtocol: The type of protocol (for example, HTTP or SSH) used to transfer Git data.
     * transportProtocolName: A human readable name for the protocol (for example, HTTP or SSH) used to transfer Git data.
     * user: The user that was affected by the action performed (if available).
     * visibility: The repository visibility, for example `public` or `private`.
     */
    public function __construct(#[MapFrom('@timestamp')] public ?int $atTimestamp, public ?string $action, public ?bool $active, #[MapFrom('active_was')] public ?bool $activeWas, public ?string $actor, #[MapFrom('actor_id')] public ?int $actorId, #[MapFrom('actor_location')] public ?Schema\AuditLogEvent\ActorLocation $actorLocation, public string $data, #[MapFrom('org_id')] public ?int $orgId, #[MapFrom('user_id')] public ?int $userId, #[MapFrom('business_id')] public ?int $businessId, #[MapFrom('blocked_user')] public ?string $blockedUser, public ?string $business, public ?array $config, #[MapFrom('config_was')] public ?array $configWas, #[MapFrom('content_type')] public ?string $contentType, #[MapFrom('operation_type')] public ?string $operationType, #[MapFrom('created_at')] public ?int $createdAt, #[MapFrom('deploy_key_fingerprint')] public ?string $deployKeyFingerprint, #[MapFrom('_document_id')] public ?string $documentId, public ?string $emoji, public ?array $events, #[MapFrom('events_were')] public ?array $eventsWere, public ?string $explanation, public ?string $fingerprint, #[MapFrom('hook_id')] public ?int $hookId, #[MapFrom('limited_availability')] public ?bool $limitedAvailability, public ?string $message, public ?string $name, #[MapFrom('old_user')] public ?string $oldUser, #[MapFrom('openssh_public_key')] public ?string $opensshPublicKey, public ?string $org, #[MapFrom('previous_visibility')] public ?string $previousVisibility, #[MapFrom('read_only')] public ?bool $readOnly, public ?string $repo, public ?string $repository, #[MapFrom('repository_public')] public ?bool $repositoryPublic, #[MapFrom('target_login')] public ?string $targetLogin, public ?string $team, #[MapFrom('transport_protocol')] public ?int $transportProtocol, #[MapFrom('transport_protocol_name')] public ?string $transportProtocolName, public ?string $user, public ?string $visibility)
    {
    }
}
