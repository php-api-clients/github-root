<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbCommentNumberRcb implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\TeamDiscussionComment' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️TeamDiscussionComment($payload),
                'ApiClients\Client\GitHubAE\Schema\ReactionRollup' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️TeamDiscussionComment(array $payload): \ApiClients\Client\GitHubAE\Schema\TeamDiscussionComment
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['author'] ?? null;

            if ($value === null) {
                $properties['author'] = null;
                goto after_author;
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $missingFields[] = 'body';
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['body_html'] ?? null;

            if ($value === null) {
                $missingFields[] = 'body_html';
                goto after_body_html;
            }

            $properties['body_html'] = $value;

            after_body_html:

            $value = $payload['body_version'] ?? null;

            if ($value === null) {
                $missingFields[] = 'body_version';
                goto after_body_version;
            }

            $properties['body_version'] = $value;

            after_body_version:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['last_edited_at'] ?? null;

            if ($value === null) {
                $properties['last_edited_at'] = null;
                goto after_last_edited_at;
            }

            $properties['last_edited_at'] = $value;

            after_last_edited_at:

            $value = $payload['discussion_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'discussion_url';
                goto after_discussion_url;
            }

            $properties['discussion_url'] = $value;

            after_discussion_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $properties['reactions'] = null;
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\TeamDiscussionComment', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\TeamDiscussionComment::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\TeamDiscussionComment(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\TeamDiscussionComment', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup(array $payload): \ApiClients\Client\GitHubAE\Schema\ReactionRollup
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_total_count;
            }

            $properties['total_count'] = $value;

            after_total_count:

            $value = $payload['__p_l_u_s_e_s_1'] ?? null;

            if ($value === null) {
                $missingFields[] = '__p_l_u_s_e_s_1';
                goto after__PLUSES_1;
            }

            $properties['_PLUSES_1'] = $value;

            after__PLUSES_1:

            $value = $payload['__m_i_n_u_s_1'] ?? null;

            if ($value === null) {
                $missingFields[] = '__m_i_n_u_s_1';
                goto after__MINUS_1;
            }

            $properties['_MINUS_1'] = $value;

            after__MINUS_1:

            $value = $payload['laugh'] ?? null;

            if ($value === null) {
                $missingFields[] = 'laugh';
                goto after_laugh;
            }

            $properties['laugh'] = $value;

            after_laugh:

            $value = $payload['confused'] ?? null;

            if ($value === null) {
                $missingFields[] = 'confused';
                goto after_confused;
            }

            $properties['confused'] = $value;

            after_confused:

            $value = $payload['heart'] ?? null;

            if ($value === null) {
                $missingFields[] = 'heart';
                goto after_heart;
            }

            $properties['heart'] = $value;

            after_heart:

            $value = $payload['hooray'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooray';
                goto after_hooray;
            }

            $properties['hooray'] = $value;

            after_hooray:

            $value = $payload['eyes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'eyes';
                goto after_eyes;
            }

            $properties['eyes'] = $value;

            after_eyes:

            $value = $payload['rocket'] ?? null;

            if ($value === null) {
                $missingFields[] = 'rocket';
                goto after_rocket;
            }

            $properties['rocket'] = $value;

            after_rocket:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ReactionRollup::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ReactionRollup(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubAE\Schema\TeamDiscussionComment' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️TeamDiscussionComment($object),
            'ApiClients\Client\GitHubAE\Schema\ReactionRollup' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️TeamDiscussionComment(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\TeamDiscussionComment);
        $result = [];

        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        after_author:        $result['author'] = $author;

        
        $body = $object->body;
        after_body:        $result['body'] = $body;

        
        $body_html = $object->body_html;
        after_body_html:        $result['body_html'] = $body_html;

        
        $body_version = $object->body_version;
        after_body_version:        $result['body_version'] = $body_version;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $last_edited_at = $object->last_edited_at;

        if ($last_edited_at === null) {
            goto after_last_edited_at;
        }
        after_last_edited_at:        $result['last_edited_at'] = $last_edited_at;

        
        $discussion_url = $object->discussion_url;
        after_discussion_url:        $result['discussion_url'] = $discussion_url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $reactions = $object->reactions;

        if ($reactions === null) {
            goto after_reactions;
        }
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup($reactions);
        after_reactions:        $result['reactions'] = $reactions;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ReactionRollup);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $total_count = $object->total_count;
        after_total_count:        $result['total_count'] = $total_count;

        
        $_PLUSES_1 = $object->_PLUSES_1;
        after__PLUSES_1:        $result['__p_l_u_s_e_s_1'] = $_PLUSES_1;

        
        $_MINUS_1 = $object->_MINUS_1;
        after__MINUS_1:        $result['__m_i_n_u_s_1'] = $_MINUS_1;

        
        $laugh = $object->laugh;
        after_laugh:        $result['laugh'] = $laugh;

        
        $confused = $object->confused;
        after_confused:        $result['confused'] = $confused;

        
        $heart = $object->heart;
        after_heart:        $result['heart'] = $heart;

        
        $hooray = $object->hooray;
        after_hooray:        $result['hooray'] = $hooray;

        
        $eyes = $object->eyes;
        after_eyes:        $result['eyes'] = $eyes;

        
        $rocket = $object->rocket;
        after_rocket:        $result['rocket'] = $rocket;


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
