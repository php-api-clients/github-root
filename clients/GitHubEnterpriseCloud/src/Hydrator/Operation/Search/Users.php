<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Hydrator\Operation\Search;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Users implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Search\Users\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️Search⚡️Users⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\UserSearchResultItem' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️UserSearchResultItem($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SearchResultTextMatches($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches\Matches' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SearchResultTextMatches⚡️Matches($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️Search⚡️Users⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Search\Users\Response\Applicationjson\H200
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_total_count;
            }

            $properties['total_count'] = $value;

            after_total_count:

            $value = $payload['incomplete_results'] ?? null;

            if ($value === null) {
                $missingFields[] = 'incomplete_results';
                goto after_incomplete_results;
            }

            $properties['incomplete_results'] = $value;

            after_incomplete_results:

            $value = $payload['items'] ?? null;

            if ($value === null) {
                $missingFields[] = 'items';
                goto after_items;
            }

            static $itemsCaster1;

            if ($itemsCaster1 === null) {
                $itemsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\UserSearchResultItem',
));
            }

            $value = $itemsCaster1->cast($value, $this);

            $properties['items'] = $value;

            after_items:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Search\Users\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Search\Users\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Search\Users\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Search\Users\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️UserSearchResultItem(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\UserSearchResultItem
    {
        $properties = []; 
        $missingFields = [];
        try {
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
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatar_url;
            }

            $properties['avatar_url'] = $value;

            after_avatar_url:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatar_id'] = null;
                goto after_gravatar_id;
            }

            $properties['gravatar_id'] = $value;

            after_gravatar_id:

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
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followers_url;
            }

            $properties['followers_url'] = $value;

            after_followers_url:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptions_url;
            }

            $properties['subscriptions_url'] = $value;

            after_subscriptions_url:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizations_url;
            }

            $properties['organizations_url'] = $value;

            after_organizations_url:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_repos_url;
            }

            $properties['repos_url'] = $value;

            after_repos_url:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_received_events_url;
            }

            $properties['received_events_url'] = $value;

            after_received_events_url:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['score'] ?? null;

            if ($value === null) {
                $missingFields[] = 'score';
                goto after_score;
            }

            $properties['score'] = $value;

            after_score:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_following_url;
            }

            $properties['following_url'] = $value;

            after_following_url:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gists_url;
            }

            $properties['gists_url'] = $value;

            after_gists_url:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starred_url;
            }

            $properties['starred_url'] = $value;

            after_starred_url:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_events_url;
            }

            $properties['events_url'] = $value;

            after_events_url:

            $value = $payload['public_repos'] ?? null;

            if ($value === null) {
                $properties['public_repos'] = null;
                goto after_public_repos;
            }

            $properties['public_repos'] = $value;

            after_public_repos:

            $value = $payload['public_gists'] ?? null;

            if ($value === null) {
                $properties['public_gists'] = null;
                goto after_public_gists;
            }

            $properties['public_gists'] = $value;

            after_public_gists:

            $value = $payload['followers'] ?? null;

            if ($value === null) {
                $properties['followers'] = null;
                goto after_followers;
            }

            $properties['followers'] = $value;

            after_followers:

            $value = $payload['following'] ?? null;

            if ($value === null) {
                $properties['following'] = null;
                goto after_following;
            }

            $properties['following'] = $value;

            after_following:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['created_at'] = null;
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updated_at'] = null;
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['bio'] ?? null;

            if ($value === null) {
                $properties['bio'] = null;
                goto after_bio;
            }

            $properties['bio'] = $value;

            after_bio:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['location'] ?? null;

            if ($value === null) {
                $properties['location'] = null;
                goto after_location;
            }

            $properties['location'] = $value;

            after_location:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'site_admin';
                goto after_site_admin;
            }

            $properties['site_admin'] = $value;

            after_site_admin:

            $value = $payload['hireable'] ?? null;

            if ($value === null) {
                $properties['hireable'] = null;
                goto after_hireable;
            }

            $properties['hireable'] = $value;

            after_hireable:

            $value = $payload['text_matches'] ?? null;

            if ($value === null) {
                $properties['text_matches'] = null;
                goto after_text_matches;
            }

            static $text_matchesCaster1;

            if ($text_matchesCaster1 === null) {
                $text_matchesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SearchResultTextMatches',
));
            }

            $value = $text_matchesCaster1->cast($value, $this);

            $properties['text_matches'] = $value;

            after_text_matches:

            $value = $payload['blog'] ?? null;

            if ($value === null) {
                $properties['blog'] = null;
                goto after_blog;
            }

            $properties['blog'] = $value;

            after_blog:

            $value = $payload['company'] ?? null;

            if ($value === null) {
                $properties['company'] = null;
                goto after_company;
            }

            $properties['company'] = $value;

            after_company:

            $value = $payload['suspended_at'] ?? null;

            if ($value === null) {
                $properties['suspended_at'] = null;
                goto after_suspended_at;
            }

            $properties['suspended_at'] = $value;

            after_suspended_at:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\UserSearchResultItem', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\UserSearchResultItem::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\UserSearchResultItem(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\UserSearchResultItem', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SearchResultTextMatches(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['object_url'] ?? null;

            if ($value === null) {
                $properties['object_url'] = null;
                goto after_object_url;
            }

            $properties['object_url'] = $value;

            after_object_url:

            $value = $payload['object_type'] ?? null;

            if ($value === null) {
                $properties['object_type'] = null;
                goto after_object_type;
            }

            $properties['object_type'] = $value;

            after_object_type:

            $value = $payload['property'] ?? null;

            if ($value === null) {
                $properties['property'] = null;
                goto after_property;
            }

            $properties['property'] = $value;

            after_property:

            $value = $payload['fragment'] ?? null;

            if ($value === null) {
                $properties['fragment'] = null;
                goto after_fragment;
            }

            $properties['fragment'] = $value;

            after_fragment:

            $value = $payload['matches'] ?? null;

            if ($value === null) {
                $properties['matches'] = null;
                goto after_matches;
            }

            static $matchesCaster1;

            if ($matchesCaster1 === null) {
                $matchesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SearchResultTextMatches\\Matches',
));
            }

            $value = $matchesCaster1->cast($value, $this);

            $properties['matches'] = $value;

            after_matches:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SearchResultTextMatches⚡️Matches(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches\Matches
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['text'] ?? null;

            if ($value === null) {
                $properties['text'] = null;
                goto after_text;
            }

            $properties['text'] = $value;

            after_text:

            $value = $payload['indices'] ?? null;

            if ($value === null) {
                $properties['indices'] = null;
                goto after_indices;
            }

            $properties['indices'] = $value;

            after_indices:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches\Matches', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches\Matches::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches\Matches(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches\Matches', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
    {
        $properties = []; 
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
                $properties['documentation_url'] = null;
                goto after_documentation_url;
            }

            $properties['documentation_url'] = $value;

            after_documentation_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'documentation_url';
                goto after_documentation_url;
            }

            $properties['documentation_url'] = $value;

            after_documentation_url:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            static $errorsCaster1;

            if ($errorsCaster1 === null) {
                $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ValidationError\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ValidationError⚡️Errors(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError\Errors
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['resource'] ?? null;

            if ($value === null) {
                $properties['resource'] = null;
                goto after_resource;
            }

            $properties['resource'] = $value;

            after_resource:

            $value = $payload['field'] ?? null;

            if ($value === null) {
                $properties['field'] = null;
                goto after_field;
            }

            $properties['field'] = $value;

            after_field:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['code'] ?? null;

            if ($value === null) {
                $missingFields[] = 'code';
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['index'] ?? null;

            if ($value === null) {
                $properties['index'] = null;
                goto after_index;
            }

            $properties['index'] = $value;

            after_index:

            $value = $payload['value'] ?? null;

            if ($value === null) {
                $properties['value'] = null;
                goto after_value;
            }

            $properties['value'] = $value;

            after_value:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Search\Users\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️Search⚡️Users⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\UserSearchResultItem' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️UserSearchResultItem($object),
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SearchResultTextMatches($object),
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches\Matches' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SearchResultTextMatches⚡️Matches($object),
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($object),
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ValidationError($object),
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ValidationError⚡️Errors($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️Search⚡️Users⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Search\Users\Response\Applicationjson\H200);
        $result = [];

        $total_count = $object->total_count;
        after_total_count:        $result['total_count'] = $total_count;

        
        $incomplete_results = $object->incomplete_results;
        after_incomplete_results:        $result['incomplete_results'] = $incomplete_results;

        
        $items = $object->items;
        static $itemsSerializer0;

        if ($itemsSerializer0 === null) {
            $itemsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\UserSearchResultItem',
));
        }
        
        $items = $itemsSerializer0->serialize($items, $this);
        after_items:        $result['items'] = $items;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️UserSearchResultItem(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\UserSearchResultItem);
        $result = [];

        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $avatar_url = $object->avatar_url;
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $followers_url = $object->followers_url;
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $subscriptions_url = $object->subscriptions_url;
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $organizations_url = $object->organizations_url;
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $repos_url = $object->repos_url;
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $received_events_url = $object->received_events_url;
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $score = $object->score;
        after_score:        $result['score'] = $score;

        
        $following_url = $object->following_url;
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $starred_url = $object->starred_url;
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $public_repos = $object->public_repos;

        if ($public_repos === null) {
            goto after_public_repos;
        }
        after_public_repos:        $result['public_repos'] = $public_repos;

        
        $public_gists = $object->public_gists;

        if ($public_gists === null) {
            goto after_public_gists;
        }
        after_public_gists:        $result['public_gists'] = $public_gists;

        
        $followers = $object->followers;

        if ($followers === null) {
            goto after_followers;
        }
        after_followers:        $result['followers'] = $followers;

        
        $following = $object->following;

        if ($following === null) {
            goto after_following;
        }
        after_following:        $result['following'] = $following;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $bio = $object->bio;

        if ($bio === null) {
            goto after_bio;
        }
        after_bio:        $result['bio'] = $bio;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $location = $object->location;

        if ($location === null) {
            goto after_location;
        }
        after_location:        $result['location'] = $location;

        
        $site_admin = $object->site_admin;
        after_site_admin:        $result['site_admin'] = $site_admin;

        
        $hireable = $object->hireable;

        if ($hireable === null) {
            goto after_hireable;
        }
        after_hireable:        $result['hireable'] = $hireable;

        
        $text_matches = $object->text_matches;

        if ($text_matches === null) {
            goto after_text_matches;
        }
        static $text_matchesSerializer0;

        if ($text_matchesSerializer0 === null) {
            $text_matchesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SearchResultTextMatches',
));
        }
        
        $text_matches = $text_matchesSerializer0->serialize($text_matches, $this);
        after_text_matches:        $result['text_matches'] = $text_matches;

        
        $blog = $object->blog;

        if ($blog === null) {
            goto after_blog;
        }
        after_blog:        $result['blog'] = $blog;

        
        $company = $object->company;

        if ($company === null) {
            goto after_company;
        }
        after_company:        $result['company'] = $company;

        
        $suspended_at = $object->suspended_at;

        if ($suspended_at === null) {
            goto after_suspended_at;
        }
        after_suspended_at:        $result['suspended_at'] = $suspended_at;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SearchResultTextMatches(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches);
        $result = [];

        $object_url = $object->object_url;

        if ($object_url === null) {
            goto after_object_url;
        }
        after_object_url:        $result['object_url'] = $object_url;

        
        $object_type = $object->object_type;

        if ($object_type === null) {
            goto after_object_type;
        }
        after_object_type:        $result['object_type'] = $object_type;

        
        $property = $object->property;

        if ($property === null) {
            goto after_property;
        }
        after_property:        $result['property'] = $property;

        
        $fragment = $object->fragment;

        if ($fragment === null) {
            goto after_fragment;
        }
        after_fragment:        $result['fragment'] = $fragment;

        
        $matches = $object->matches;

        if ($matches === null) {
            goto after_matches;
        }
        static $matchesSerializer0;

        if ($matchesSerializer0 === null) {
            $matchesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SearchResultTextMatches\\Matches',
));
        }
        
        $matches = $matchesSerializer0->serialize($matches, $this);
        after_matches:        $result['matches'] = $matches;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SearchResultTextMatches⚡️Matches(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches\Matches);
        $result = [];

        $text = $object->text;

        if ($text === null) {
            goto after_text;
        }
        after_text:        $result['text'] = $text;

        
        $indices = $object->indices;

        if ($indices === null) {
            goto after_indices;
        }
        static $indicesSerializer0;

        if ($indicesSerializer0 === null) {
            $indicesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $indices = $indicesSerializer0->serialize($indices, $this);
        after_indices:        $result['indices'] = $indices;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503);
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

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError);
        $result = [];

        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ValidationError\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ValidationError⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ValidationError\Errors);
        $result = [];

        $resource = $object->resource;

        if ($resource === null) {
            goto after_resource;
        }
        after_resource:        $result['resource'] = $resource;

        
        $field = $object->field;

        if ($field === null) {
            goto after_field;
        }
        after_field:        $result['field'] = $field;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $code = $object->code;
        after_code:        $result['code'] = $code;

        
        $index = $object->index;

        if ($index === null) {
            goto after_index;
        }
        after_index:        $result['index'] = $index;

        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
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
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
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
