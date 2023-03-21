<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class AuditLogEvent
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"@timestamp":{"type":"integer","description":"The time the audit log event occurred, given as a [Unix timestamp](http:\\/\\/en.wikipedia.org\\/wiki\\/Unix_time)."},"action":{"type":"string","description":"The name of the action that was performed, for example `user.login` or `repo.create`."},"active":{"type":"boolean"},"active_was":{"type":"boolean"},"actor":{"type":"string","description":"The actor who performed the action."},"actor_id":{"type":"integer","description":"The id of the actor who performed the action."},"actor_location":{"type":"object","properties":{"country_name":{"type":"string"}}},"data":{"type":"object","additionalProperties":true},"org_id":{"type":"integer"},"user_id":{"type":"integer"},"business_id":{"type":"integer"},"blocked_user":{"type":"string","description":"The username of the account being blocked."},"business":{"type":"string"},"config":{"type":"array","items":{"type":"object"}},"config_was":{"type":"array","items":{"type":"object"}},"content_type":{"type":"string"},"operation_type":{"type":"string"},"created_at":{"type":"integer","description":"The time the audit log event was recorded, given as a [Unix timestamp](http:\\/\\/en.wikipedia.org\\/wiki\\/Unix_time)."},"deploy_key_fingerprint":{"type":"string"},"_document_id":{"type":"string","description":"A unique identifier for an audit event."},"emoji":{"type":"string"},"events":{"type":"array","items":{"type":"object"}},"events_were":{"type":"array","items":{"type":"object"}},"explanation":{"type":"string"},"fingerprint":{"type":"string"},"hook_id":{"type":"integer"},"limited_availability":{"type":"boolean"},"message":{"type":"string"},"name":{"type":"string"},"old_user":{"type":"string"},"openssh_public_key":{"type":"string"},"org":{"type":"string"},"previous_visibility":{"type":"string"},"read_only":{"type":"boolean"},"repo":{"type":"string","description":"The name of the repository."},"repository":{"type":"string","description":"The name of the repository."},"repository_public":{"type":"boolean"},"target_login":{"type":"string"},"team":{"type":"string"},"transport_protocol":{"type":"integer","description":"The type of protocol (for example, HTTP or SSH) used to transfer Git data."},"transport_protocol_name":{"type":"string","description":"A human readable name for the protocol (for example, HTTP or SSH) used to transfer Git data."},"user":{"type":"string","description":"The user that was affected by the action performed (if available)."},"visibility":{"type":"string","description":"The repository visibility, for example `public` or `private`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"_AT_timestamp":13,"action":"generated_action_null","active":false,"active_was":false,"actor":"generated_actor_null","actor_id":13,"actor_location":{"country_name":"generated_country_name_null"},"data":null,"org_id":13,"user_id":13,"business_id":13,"blocked_user":"generated_blocked_user_null","business":"generated_business_null","config":null,"config_was":null,"content_type":"generated_content_type_null","operation_type":"generated_operation_type_null","created_at":13,"deploy_key_fingerprint":"generated_deploy_key_fingerprint_null","_document_id":"generated__document_id_null","emoji":"generated_emoji_null","events":null,"events_were":null,"explanation":"generated_explanation_null","fingerprint":"generated_fingerprint_null","hook_id":13,"limited_availability":false,"message":"generated_message_null","name":"generated_name_null","old_user":"generated_old_user_null","openssh_public_key":"generated_openssh_public_key_null","org":"generated_org_null","previous_visibility":"generated_previous_visibility_null","read_only":false,"repo":"generated_repo_null","repository":"generated_repository_null","repository_public":false,"target_login":"generated_target_login_null","team":"generated_team_null","transport_protocol":13,"transport_protocol_name":"generated_transport_protocol_name_null","user":"generated_user_null","visibility":"generated_visibility_null"}';
    /**
     * _AT_timestamp: The time the audit log event occurred, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
     * action: The name of the action that was performed, for example `user.login` or `repo.create`.
     * actor: The actor who performed the action.
     * actor_id: The id of the actor who performed the action.
     * blocked_user: The username of the account being blocked.
     * created_at: The time the audit log event was recorded, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
     * _document_id: A unique identifier for an audit event.
     * repo: The name of the repository.
     * repository: The name of the repository.
     * transport_protocol: The type of protocol (for example, HTTP or SSH) used to transfer Git data.
     * transport_protocol_name: A human readable name for the protocol (for example, HTTP or SSH) used to transfer Git data.
     * user: The user that was affected by the action performed (if available).
     * visibility: The repository visibility, for example `public` or `private`.
     */
    public function __construct(public ?int $_AT_timestamp, public ?string $action, public ?bool $active, public ?bool $active_was, public ?string $actor, public ?int $actor_id, public ?Schema\AuditLogEvent\ActorLocation $actor_location, public mixed $data, public ?int $org_id, public ?int $user_id, public ?int $business_id, public ?string $blocked_user, public ?string $business, public mixed $config, public mixed $config_was, public ?string $content_type, public ?string $operation_type, public ?int $created_at, public ?string $deploy_key_fingerprint, public ?string $_document_id, public ?string $emoji, public mixed $events, public mixed $events_were, public ?string $explanation, public ?string $fingerprint, public ?int $hook_id, public ?bool $limited_availability, public ?string $message, public ?string $name, public ?string $old_user, public ?string $openssh_public_key, public ?string $org, public ?string $previous_visibility, public ?bool $read_only, public ?string $repo, public ?string $repository, public ?bool $repository_public, public ?string $target_login, public ?string $team, public ?int $transport_protocol, public ?string $transport_protocol_name, public ?string $user, public ?string $visibility)
    {
    }
}
