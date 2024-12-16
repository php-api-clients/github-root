<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Hydrator\Operation\Repos\Owner\Repo\BypassRequests\PushRules;

use ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Organization;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Repository;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Requester;
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

class BypassRequestNumber implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Repository' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Repository($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Organization' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Organization($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Requester' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Requester($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest(array $payload): PushRuleBypassRequest
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

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $properties['number'] = null;
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $properties['repository'] = null;
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Repository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Organization($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['requester'] ?? null;

            if ($value === null) {
                $properties['requester'] = null;
                goto after_requester;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requester';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Requester($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requester'] = $value;

            after_requester:

            $value = $payload['request_type'] ?? null;

            if ($value === null) {
                $properties['requestType'] = null;
                goto after_requestType;
            }

            $properties['requestType'] = $value;

            after_requestType:

            $value = $payload['data'] ?? null;

            if ($value === null) {
                $properties['data'] = null;
                goto after_data;
            }

            $properties['data'] = $value;

            after_data:

            $value = $payload['resource_identifier'] ?? null;

            if ($value === null) {
                $properties['resourceIdentifier'] = null;
                goto after_resourceIdentifier;
            }

            $properties['resourceIdentifier'] = $value;

            after_resourceIdentifier:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['requester_comment'] ?? null;

            if ($value === null) {
                $properties['requesterComment'] = null;
                goto after_requesterComment;
            }

            $properties['requesterComment'] = $value;

            after_requesterComment:

            $value = $payload['expires_at'] ?? null;

            if ($value === null) {
                $properties['expiresAt'] = null;
                goto after_expiresAt;
            }

            $properties['expiresAt'] = $value;

            after_expiresAt:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['responses'] ?? null;

            if ($value === null) {
                $properties['responses'] = null;
                goto after_responses;
            }

            $properties['responses'] = $value;

            after_responses:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PushRuleBypassRequest::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PushRuleBypassRequest(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Repository(array $payload): Repository
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

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $properties['fullName'] = null;
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Repository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Repository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Repository(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Repository', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Organization(array $payload): Organization
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Organization', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Organization::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Organization(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Organization', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Requester(array $payload): Requester
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['actor_id'] ?? null;

            if ($value === null) {
                $properties['actorId'] = null;
                goto after_actorId;
            }

            $properties['actorId'] = $value;

            after_actorId:

            $value = $payload['actor_name'] ?? null;

            if ($value === null) {
                $properties['actorName'] = null;
                goto after_actorName;
            }

            $properties['actorName'] = $value;

            after_actorName:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Requester', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Requester::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Requester(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Requester', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError(array $payload): BasicError
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Repository' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Repository($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Organization' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Organization($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest\Requester' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Requester($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest(mixed $object): mixed
    {
        assert($object instanceof PushRuleBypassRequest);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }

        after_number:        $result['number'] = $number;

        $repository = $object->repository;

        if ($repository === null) {
            goto after_repository;
        }

        $repository                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Repository($repository);
        after_repository:        $result['repository'] = $repository;

        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }

        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Organization($organization);
        after_organization:        $result['organization'] = $organization;

        $requester = $object->requester;

        if ($requester === null) {
            goto after_requester;
        }

        $requester                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Requester($requester);
        after_requester:        $result['requester'] = $requester;

        $requestType = $object->requestType;

        if ($requestType === null) {
            goto after_requestType;
        }

        after_requestType:        $result['request_type'] = $requestType;

        $data = $object->data;

        if ($data === null) {
            goto after_data;
        }

        static $dataSerializer0;

        if ($dataSerializer0 === null) {
            $dataSerializer0 = new SerializeArrayItems(...[]);
        }

        $data                              = $dataSerializer0->serialize($data, $this);
        after_data:        $result['data'] = $data;

        $resourceIdentifier = $object->resourceIdentifier;

        if ($resourceIdentifier === null) {
            goto after_resourceIdentifier;
        }

        after_resourceIdentifier:        $result['resource_identifier'] = $resourceIdentifier;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        $requesterComment = $object->requesterComment;

        if ($requesterComment === null) {
            goto after_requesterComment;
        }

        after_requesterComment:        $result['requester_comment'] = $requesterComment;

        $expiresAt = $object->expiresAt;

        if ($expiresAt === null) {
            goto after_expiresAt;
        }

        after_expiresAt:        $result['expires_at'] = $expiresAt;

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }

        after_createdAt:        $result['created_at'] = $createdAt;

        $responses = $object->responses;

        if ($responses === null) {
            goto after_responses;
        }

        static $responsesSerializer0;

        if ($responsesSerializer0 === null) {
            $responsesSerializer0 = new SerializeArrayItems(...[]);
        }

        $responses                                   = $responsesSerializer0->serialize($responses, $this);
        after_responses:        $result['responses'] = $responses;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Repository(mixed $object): mixed
    {
        assert($object instanceof Repository);
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

        $fullName = $object->fullName;

        if ($fullName === null) {
            goto after_fullName;
        }

        after_fullName:        $result['full_name'] = $fullName;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Organization(mixed $object): mixed
    {
        assert($object instanceof Organization);
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

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PushRuleBypassRequest⚡️Requester(mixed $object): mixed
    {
        assert($object instanceof Requester);
        $result = [];

        $actorId = $object->actorId;

        if ($actorId === null) {
            goto after_actorId;
        }

        after_actorId:        $result['actor_id'] = $actorId;

        $actorName = $object->actorName;

        if ($actorName === null) {
            goto after_actorName;
        }

        after_actorName:        $result['actor_name'] = $actorName;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError(mixed $object): mixed
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
