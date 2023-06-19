<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class AuditLogEvent
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"@timestamp":{"type":"integer","description":"The time the audit log event occurred, given as a [Unix timestamp](http:\\/\\/en.wikipedia.org\\/wiki\\/Unix_time)."},"action":{"type":"string","description":"The name of the action that was performed, for example `user.login` or `repo.create`."},"active":{"type":"boolean"},"active_was":{"type":"boolean"},"actor":{"type":"string","description":"The actor who performed the action."},"actor_id":{"type":"integer","description":"The id of the actor who performed the action."},"actor_location":{"type":"object","properties":{"country_name":{"type":"string"}}},"data":{"type":"object","additionalProperties":true},"org_id":{"type":"integer"},"user_id":{"type":"integer"},"business_id":{"type":"integer"},"blocked_user":{"type":"string","description":"The username of the account being blocked."},"business":{"type":"string"},"config":{"type":"array","items":{"type":"object"}},"config_was":{"type":"array","items":{"type":"object"}},"content_type":{"type":"string"},"operation_type":{"type":"string"},"created_at":{"type":"integer","description":"The time the audit log event was recorded, given as a [Unix timestamp](http:\\/\\/en.wikipedia.org\\/wiki\\/Unix_time)."},"deploy_key_fingerprint":{"type":"string"},"_document_id":{"type":"string","description":"A unique identifier for an audit event."},"emoji":{"type":"string"},"events":{"type":"array","items":{"type":"object"}},"events_were":{"type":"array","items":{"type":"object"}},"explanation":{"type":"string"},"fingerprint":{"type":"string"},"hook_id":{"type":"integer"},"limited_availability":{"type":"boolean"},"message":{"type":"string"},"name":{"type":"string"},"old_user":{"type":"string"},"openssh_public_key":{"type":"string"},"org":{"type":"string"},"previous_visibility":{"type":"string"},"read_only":{"type":"boolean"},"repo":{"type":"string","description":"The name of the repository."},"repository":{"type":"string","description":"The name of the repository."},"repository_public":{"type":"boolean"},"target_login":{"type":"string"},"team":{"type":"string"},"transport_protocol":{"type":"integer","description":"The type of protocol (for example, HTTP or SSH) used to transfer Git data."},"transport_protocol_name":{"type":"string","description":"A human readable name for the protocol (for example, HTTP or SSH) used to transfer Git data."},"user":{"type":"string","description":"The user that was affected by the action performed (if available)."},"visibility":{"type":"string","description":"The repository visibility, for example `public` or `private`."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"@timestamp":13,"action":"generated","active":false,"active_was":false,"actor":"generated","actor_id":8,"actor_location":{"country_name":"generated"},"data":[],"org_id":6,"user_id":7,"business_id":11,"blocked_user":"generated","business":"generated","config":[[],[]],"config_was":[[],[]],"content_type":"generated","operation_type":"generated","created_at":10,"deploy_key_fingerprint":"generated","_document_id":"generated","emoji":"generated","events":[[],[]],"events_were":[[],[]],"explanation":"generated","fingerprint":"generated","hook_id":7,"limited_availability":false,"message":"generated","name":"generated","old_user":"generated","openssh_public_key":"generated","org":"generated","previous_visibility":"generated","read_only":false,"repo":"generated","repository":"generated","repository_public":false,"target_login":"generated","team":"generated","transport_protocol":18,"transport_protocol_name":"generated","user":"generated","visibility":"generated"}';

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
    public function __construct(#[MapFrom('@timestamp')]
    public int|null $atTimestamp, public string|null $action, public bool|null $active, #[MapFrom('active_was')]
    public bool|null $activeWas, public string|null $actor, #[MapFrom('actor_id')]
    public int|null $actorId, #[MapFrom('actor_location')]
    public Schema\AuditLogEvent\ActorLocation|null $actorLocation, public Schema\AuditLogEvent\Data|null $data, #[MapFrom('org_id')]
    public int|null $orgId, #[MapFrom('user_id')]
    public int|null $userId, #[MapFrom('business_id')]
    public int|null $businessId, #[MapFrom('blocked_user')]
    public string|null $blockedUser, public string|null $business, public array|null $config, #[MapFrom('config_was')]
    public array|null $configWas, #[MapFrom('content_type')]
    public string|null $contentType, #[MapFrom('operation_type')]
    public string|null $operationType, #[MapFrom('created_at')]
    public int|null $createdAt, #[MapFrom('deploy_key_fingerprint')]
    public string|null $deployKeyFingerprint, #[MapFrom('_document_id')]
    public string|null $documentId, public string|null $emoji, public array|null $events, #[MapFrom('events_were')]
    public array|null $eventsWere, public string|null $explanation, public string|null $fingerprint, #[MapFrom('hook_id')]
    public int|null $hookId, #[MapFrom('limited_availability')]
    public bool|null $limitedAvailability, public string|null $message, public string|null $name, #[MapFrom('old_user')]
    public string|null $oldUser, #[MapFrom('openssh_public_key')]
    public string|null $opensshPublicKey, public string|null $org, #[MapFrom('previous_visibility')]
    public string|null $previousVisibility, #[MapFrom('read_only')]
    public bool|null $readOnly, public string|null $repo, public string|null $repository, #[MapFrom('repository_public')]
    public bool|null $repositoryPublic, #[MapFrom('target_login')]
    public string|null $targetLogin, public string|null $team, #[MapFrom('transport_protocol')]
    public int|null $transportProtocol, #[MapFrom('transport_protocol_name')]
    public string|null $transportProtocolName, public string|null $user, public string|null $visibility,)
    {
    }
}
