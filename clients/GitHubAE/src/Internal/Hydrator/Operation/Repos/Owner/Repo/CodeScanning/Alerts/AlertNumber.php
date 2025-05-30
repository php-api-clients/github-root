<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts;

use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\CodeScanningAlert;
use ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance;
use ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message;
use ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation;
use ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule;
use ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool;
use ApiClients\Client\GitHubAE\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable;
use ApiClients\Client\GitHubAE\Schema\SimpleUser;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class AlertNumber implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHubAE\Schema\CodeScanningAlert' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlert($payload),
                'ApiClients\Client\GitHubAE\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($payload),
                'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHubAE\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlert(array $payload): CodeScanningAlert
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['instances_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'instances_url';
                goto after_instancesUrl;
            }

            $properties['instancesUrl'] = $value;

            after_instancesUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['dismissed_by'] ?? null;

            if ($value === null) {
                $properties['dismissedBy'] = null;
                goto after_dismissedBy;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'dismissedBy';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['dismissedBy'] = $value;

            after_dismissedBy:

            $value = $payload['dismissed_at'] ?? null;

            if ($value === null) {
                $properties['dismissedAt'] = null;
                goto after_dismissedAt;
            }

            $properties['dismissedAt'] = $value;

            after_dismissedAt:

            $value = $payload['dismissed_reason'] ?? null;

            if ($value === null) {
                $properties['dismissedReason'] = null;
                goto after_dismissedReason;
            }

            $properties['dismissedReason'] = $value;

            after_dismissedReason:

            $value = $payload['rule'] ?? null;

            if ($value === null) {
                $missingFields[] = 'rule';
                goto after_rule;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'rule';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['rule'] = $value;

            after_rule:

            $value = $payload['tool'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tool';
                goto after_tool;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'tool';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['tool'] = $value;

            after_tool:

            $value = $payload['most_recent_instance'] ?? null;

            if ($value === null) {
                $missingFields[] = 'most_recent_instance';
                goto after_mostRecentInstance;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'mostRecentInstance';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['mostRecentInstance'] = $value;

            after_mostRecentInstance:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlert', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CodeScanningAlert::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CodeScanningAlert(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlert', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser(array $payload): SimpleUser
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'site_admin';
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starredAt'] = null;
                goto after_starredAt;
            }

            $properties['starredAt'] = $value;

            after_starredAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SimpleUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SimpleUser(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule(array $payload): CodeScanningAlertRule
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['severity'] ?? null;

            if ($value === null) {
                $properties['severity'] = null;
                goto after_severity;
            }

            $properties['severity'] = $value;

            after_severity:

            $value = $payload['security_severity_level'] ?? null;

            if ($value === null) {
                $properties['securitySeverityLevel'] = null;
                goto after_securitySeverityLevel;
            }

            $properties['securitySeverityLevel'] = $value;

            after_securitySeverityLevel:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['full_description'] ?? null;

            if ($value === null) {
                $properties['fullDescription'] = null;
                goto after_fullDescription;
            }

            $properties['fullDescription'] = $value;

            after_fullDescription:

            $value = $payload['tags'] ?? null;

            if ($value === null) {
                $properties['tags'] = null;
                goto after_tags;
            }

            $properties['tags'] = $value;

            after_tags:

            $value = $payload['help'] ?? null;

            if ($value === null) {
                $properties['help'] = null;
                goto after_help;
            }

            $properties['help'] = $value;

            after_help:

            $value = $payload['help_uri'] ?? null;

            if ($value === null) {
                $properties['helpUri'] = null;
                goto after_helpUri;
            }

            $properties['helpUri'] = $value;

            after_helpUri:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CodeScanningAlertRule::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CodeScanningAlertRule(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool(array $payload): CodeScanningAnalysisTool
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['version'] ?? null;

            if ($value === null) {
                $properties['version'] = null;
                goto after_version;
            }

            $properties['version'] = $value;

            after_version:

            $value = $payload['guid'] ?? null;

            if ($value === null) {
                $properties['guid'] = null;
                goto after_guid;
            }

            $properties['guid'] = $value;

            after_guid:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CodeScanningAnalysisTool::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CodeScanningAnalysisTool(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance(array $payload): CodeScanningAlertInstance
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $properties['ref'] = null;
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['analysis_key'] ?? null;

            if ($value === null) {
                $properties['analysisKey'] = null;
                goto after_analysisKey;
            }

            $properties['analysisKey'] = $value;

            after_analysisKey:

            $value = $payload['environment'] ?? null;

            if ($value === null) {
                $properties['environment'] = null;
                goto after_environment;
            }

            $properties['environment'] = $value;

            after_environment:

            $value = $payload['category'] ?? null;

            if ($value === null) {
                $properties['category'] = null;
                goto after_category;
            }

            $properties['category'] = $value;

            after_category:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['commit_sha'] ?? null;

            if ($value === null) {
                $properties['commitSha'] = null;
                goto after_commitSha;
            }

            $properties['commitSha'] = $value;

            after_commitSha:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'message';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['location'] ?? null;

            if ($value === null) {
                $properties['location'] = null;
                goto after_location;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'location';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['location'] = $value;

            after_location:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['classifications'] ?? null;

            if ($value === null) {
                $properties['classifications'] = null;
                goto after_classifications;
            }

            $properties['classifications'] = $value;

            after_classifications:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CodeScanningAlertInstance::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CodeScanningAlertInstance(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message(array $payload): Message
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['text'] ?? null;

            if ($value === null) {
                $properties['text'] = null;
                goto after_text;
            }

            $properties['text'] = $value;

            after_text:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Message::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Message(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation(array $payload): CodeScanningAlertLocation
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['path'] ?? null;

            if ($value === null) {
                $properties['path'] = null;
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

            $value = $payload['start_line'] ?? null;

            if ($value === null) {
                $properties['startLine'] = null;
                goto after_startLine;
            }

            $properties['startLine'] = $value;

            after_startLine:

            $value = $payload['end_line'] ?? null;

            if ($value === null) {
                $properties['endLine'] = null;
                goto after_endLine;
            }

            $properties['endLine'] = $value;

            after_endLine:

            $value = $payload['start_column'] ?? null;

            if ($value === null) {
                $properties['startColumn'] = null;
                goto after_startColumn;
            }

            $properties['startColumn'] = $value;

            after_startColumn:

            $value = $payload['end_column'] ?? null;

            if ($value === null) {
                $properties['endColumn'] = null;
                goto after_endColumn;
            }

            $properties['endColumn'] = $value;

            after_endColumn:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CodeScanningAlertLocation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CodeScanningAlertLocation(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable(array $payload): ServiceUnavailable
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ServiceUnavailable::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ServiceUnavailable(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlert' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlert($object),
                'ApiClients\Client\GitHubAE\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRule' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule($object),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($object),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($object),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($object),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($object),
                'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHubAE\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable($object),
                default => throw new LogicException("No serialization defined for $className"),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlert(mixed $object): mixed
    {
        assert($object instanceof CodeScanningAlert);
        $result = [];

        $number                                = $object->number;
        after_number:        $result['number'] = $number;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $instancesUrl                                       = $object->instancesUrl;
        after_instancesUrl:        $result['instances_url'] = $instancesUrl;

        $state                               = $object->state;
        after_state:        $result['state'] = $state;

        $dismissedBy = $object->dismissedBy;

        if ($dismissedBy === null) {
            goto after_dismissedBy;
        }

        $dismissedBy                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($dismissedBy);
        after_dismissedBy:        $result['dismissed_by'] = $dismissedBy;

        $dismissedAt = $object->dismissedAt;

        if ($dismissedAt === null) {
            goto after_dismissedAt;
        }

        after_dismissedAt:        $result['dismissed_at'] = $dismissedAt;

        $dismissedReason = $object->dismissedReason;

        if ($dismissedReason === null) {
            goto after_dismissedReason;
        }

        after_dismissedReason:        $result['dismissed_reason'] = $dismissedReason;

        $rule                              = $object->rule;
        $rule                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule($rule);
        after_rule:        $result['rule'] = $rule;

        $tool                              = $object->tool;
        $tool                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($tool);
        after_tool:        $result['tool'] = $tool;

        $mostRecentInstance                                              = $object->mostRecentInstance;
        $mostRecentInstance                                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($mostRecentInstance);
        after_mostRecentInstance:        $result['most_recent_instance'] = $mostRecentInstance;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        assert($object instanceof SimpleUser);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $avatarUrl                                    = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }

        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $followersUrl                                       = $object->followersUrl;
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        $followingUrl                                       = $object->followingUrl;
        after_followingUrl:        $result['following_url'] = $followingUrl;

        $gistsUrl                                   = $object->gistsUrl;
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        $starredUrl                                     = $object->starredUrl;
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        $subscriptionsUrl                                           = $object->subscriptionsUrl;
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        $organizationsUrl                                           = $object->organizationsUrl;
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        $reposUrl                                   = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        $eventsUrl                                    = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $receivedEventsUrl                                             = $object->receivedEventsUrl;
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

        $siteAdmin                                    = $object->siteAdmin;
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }

        after_starredAt:        $result['starred_at'] = $starredAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRule(mixed $object): mixed
    {
        assert($object instanceof CodeScanningAlertRule);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $severity = $object->severity;

        if ($severity === null) {
            goto after_severity;
        }

        after_severity:        $result['severity'] = $severity;

        $securitySeverityLevel = $object->securitySeverityLevel;

        if ($securitySeverityLevel === null) {
            goto after_securitySeverityLevel;
        }

        after_securitySeverityLevel:        $result['security_severity_level'] = $securitySeverityLevel;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $fullDescription = $object->fullDescription;

        if ($fullDescription === null) {
            goto after_fullDescription;
        }

        after_fullDescription:        $result['full_description'] = $fullDescription;

        $tags = $object->tags;

        if ($tags === null) {
            goto after_tags;
        }

        static $tagsSerializer0;

        if ($tagsSerializer0 === null) {
            $tagsSerializer0 = new SerializeArrayItems(...[]);
        }

        $tags                              = $tagsSerializer0->serialize($tags, $this);
        after_tags:        $result['tags'] = $tags;

        $help = $object->help;

        if ($help === null) {
            goto after_help;
        }

        after_help:        $result['help'] = $help;

        $helpUri = $object->helpUri;

        if ($helpUri === null) {
            goto after_helpUri;
        }

        after_helpUri:        $result['help_uri'] = $helpUri;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool(mixed $object): mixed
    {
        assert($object instanceof CodeScanningAnalysisTool);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $version = $object->version;

        if ($version === null) {
            goto after_version;
        }

        after_version:        $result['version'] = $version;

        $guid = $object->guid;

        if ($guid === null) {
            goto after_guid;
        }

        after_guid:        $result['guid'] = $guid;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance(mixed $object): mixed
    {
        assert($object instanceof CodeScanningAlertInstance);
        $result = [];

        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }

        after_ref:        $result['ref'] = $ref;

        $analysisKey = $object->analysisKey;

        if ($analysisKey === null) {
            goto after_analysisKey;
        }

        after_analysisKey:        $result['analysis_key'] = $analysisKey;

        $environment = $object->environment;

        if ($environment === null) {
            goto after_environment;
        }

        after_environment:        $result['environment'] = $environment;

        $category = $object->category;

        if ($category === null) {
            goto after_category;
        }

        after_category:        $result['category'] = $category;

        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }

        after_state:        $result['state'] = $state;

        $commitSha = $object->commitSha;

        if ($commitSha === null) {
            goto after_commitSha;
        }

        after_commitSha:        $result['commit_sha'] = $commitSha;

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        $message                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($message);
        after_message:        $result['message'] = $message;

        $location = $object->location;

        if ($location === null) {
            goto after_location;
        }

        $location                                  = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($location);
        after_location:        $result['location'] = $location;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $classifications = $object->classifications;

        if ($classifications === null) {
            goto after_classifications;
        }

        static $classificationsSerializer0;

        if ($classificationsSerializer0 === null) {
            $classificationsSerializer0 = new SerializeArrayItems(...[]);
        }

        $classifications                                         = $classificationsSerializer0->serialize($classifications, $this);
        after_classifications:        $result['classifications'] = $classifications;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message(mixed $object): mixed
    {
        assert($object instanceof Message);
        $result = [];

        $text = $object->text;

        if ($text === null) {
            goto after_text;
        }

        after_text:        $result['text'] = $text;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation(mixed $object): mixed
    {
        assert($object instanceof CodeScanningAlertLocation);
        $result = [];

        $path = $object->path;

        if ($path === null) {
            goto after_path;
        }

        after_path:        $result['path'] = $path;

        $startLine = $object->startLine;

        if ($startLine === null) {
            goto after_startLine;
        }

        after_startLine:        $result['start_line'] = $startLine;

        $endLine = $object->endLine;

        if ($endLine === null) {
            goto after_endLine;
        }

        after_endLine:        $result['end_line'] = $endLine;

        $startColumn = $object->startColumn;

        if ($startColumn === null) {
            goto after_startColumn;
        }

        after_startColumn:        $result['start_column'] = $startColumn;

        $endColumn = $object->endColumn;

        if ($endColumn === null) {
            goto after_endColumn;
        }

        after_endColumn:        $result['end_column'] = $endColumn;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable(mixed $object): mixed
    {
        assert($object instanceof ServiceUnavailable);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }

        after_code:        $result['code'] = $code;

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
