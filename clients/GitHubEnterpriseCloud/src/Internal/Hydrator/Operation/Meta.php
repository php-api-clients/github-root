<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Hydrator\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains\ActionsInbound;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains\ArtifactAttestations;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\SshKeyFingerprints;
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

class Meta implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\SshKeyFingerprints' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains\ActionsInbound' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ActionsInbound($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains\ArtifactAttestations' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ArtifactAttestations($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview(array $payload): ApiOverview
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['verifiable_password_authentication'] ?? null;

            if ($value === null) {
                $missingFields[] = 'verifiable_password_authentication';
                goto after_verifiablePasswordAuthentication;
            }

            $properties['verifiablePasswordAuthentication'] = $value;

            after_verifiablePasswordAuthentication:

            $value = $payload['ssh_key_fingerprints'] ?? null;

            if ($value === null) {
                $properties['sshKeyFingerprints'] = null;
                goto after_sshKeyFingerprints;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sshKeyFingerprints';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sshKeyFingerprints'] = $value;

            after_sshKeyFingerprints:

            $value = $payload['ssh_keys'] ?? null;

            if ($value === null) {
                $properties['sshKeys'] = null;
                goto after_sshKeys;
            }

            $properties['sshKeys'] = $value;

            after_sshKeys:

            $value = $payload['hooks'] ?? null;

            if ($value === null) {
                $properties['hooks'] = null;
                goto after_hooks;
            }

            $properties['hooks'] = $value;

            after_hooks:

            $value = $payload['github_enterprise_importer'] ?? null;

            if ($value === null) {
                $properties['githubEnterpriseImporter'] = null;
                goto after_githubEnterpriseImporter;
            }

            $properties['githubEnterpriseImporter'] = $value;

            after_githubEnterpriseImporter:

            $value = $payload['web'] ?? null;

            if ($value === null) {
                $properties['web'] = null;
                goto after_web;
            }

            $properties['web'] = $value;

            after_web:

            $value = $payload['api'] ?? null;

            if ($value === null) {
                $properties['api'] = null;
                goto after_api;
            }

            $properties['api'] = $value;

            after_api:

            $value = $payload['git'] ?? null;

            if ($value === null) {
                $properties['git'] = null;
                goto after_git;
            }

            $properties['git'] = $value;

            after_git:

            $value = $payload['packages'] ?? null;

            if ($value === null) {
                $properties['packages'] = null;
                goto after_packages;
            }

            $properties['packages'] = $value;

            after_packages:

            $value = $payload['pages'] ?? null;

            if ($value === null) {
                $properties['pages'] = null;
                goto after_pages;
            }

            $properties['pages'] = $value;

            after_pages:

            $value = $payload['importer'] ?? null;

            if ($value === null) {
                $properties['importer'] = null;
                goto after_importer;
            }

            $properties['importer'] = $value;

            after_importer:

            $value = $payload['actions'] ?? null;

            if ($value === null) {
                $properties['actions'] = null;
                goto after_actions;
            }

            $properties['actions'] = $value;

            after_actions:

            $value = $payload['actions_macos'] ?? null;

            if ($value === null) {
                $properties['actionsMacos'] = null;
                goto after_actionsMacos;
            }

            $properties['actionsMacos'] = $value;

            after_actionsMacos:

            $value = $payload['codespaces'] ?? null;

            if ($value === null) {
                $properties['codespaces'] = null;
                goto after_codespaces;
            }

            $properties['codespaces'] = $value;

            after_codespaces:

            $value = $payload['dependabot'] ?? null;

            if ($value === null) {
                $properties['dependabot'] = null;
                goto after_dependabot;
            }

            $properties['dependabot'] = $value;

            after_dependabot:

            $value = $payload['copilot'] ?? null;

            if ($value === null) {
                $properties['copilot'] = null;
                goto after_copilot;
            }

            $properties['copilot'] = $value;

            after_copilot:

            $value = $payload['domains'] ?? null;

            if ($value === null) {
                $properties['domains'] = null;
                goto after_domains;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'domains';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['domains'] = $value;

            after_domains:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ApiOverview::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ApiOverview(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints(array $payload): SshKeyFingerprints
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['SHA256_RSA'] ?? null;

            if ($value === null) {
                $properties['shaTwoHundredFiftySixRsa'] = null;
                goto after_shaTwoHundredFiftySixRsa;
            }

            $properties['shaTwoHundredFiftySixRsa'] = $value;

            after_shaTwoHundredFiftySixRsa:

            $value = $payload['SHA256_DSA'] ?? null;

            if ($value === null) {
                $properties['shaTwoHundredFiftySixDsa'] = null;
                goto after_shaTwoHundredFiftySixDsa;
            }

            $properties['shaTwoHundredFiftySixDsa'] = $value;

            after_shaTwoHundredFiftySixDsa:

            $value = $payload['SHA256_ECDSA'] ?? null;

            if ($value === null) {
                $properties['shaTwoHundredFiftySixEcdsa'] = null;
                goto after_shaTwoHundredFiftySixEcdsa;
            }

            $properties['shaTwoHundredFiftySixEcdsa'] = $value;

            after_shaTwoHundredFiftySixEcdsa:

            $value = $payload['SHA256_ED25519'] ?? null;

            if ($value === null) {
                $properties['shaTwoHundredFiftySixEdTwentyFiveThousandFiveHundredNineteen'] = null;
                goto after_shaTwoHundredFiftySixEdTwentyFiveThousandFiveHundredNineteen;
            }

            $properties['shaTwoHundredFiftySixEdTwentyFiveThousandFiveHundredNineteen'] = $value;

            after_shaTwoHundredFiftySixEdTwentyFiveThousandFiveHundredNineteen:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\SshKeyFingerprints', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SshKeyFingerprints::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SshKeyFingerprints(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\SshKeyFingerprints', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains(array $payload): Domains
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['website'] ?? null;

            if ($value === null) {
                $properties['website'] = null;
                goto after_website;
            }

            $properties['website'] = $value;

            after_website:

            $value = $payload['codespaces'] ?? null;

            if ($value === null) {
                $properties['codespaces'] = null;
                goto after_codespaces;
            }

            $properties['codespaces'] = $value;

            after_codespaces:

            $value = $payload['copilot'] ?? null;

            if ($value === null) {
                $properties['copilot'] = null;
                goto after_copilot;
            }

            $properties['copilot'] = $value;

            after_copilot:

            $value = $payload['packages'] ?? null;

            if ($value === null) {
                $properties['packages'] = null;
                goto after_packages;
            }

            $properties['packages'] = $value;

            after_packages:

            $value = $payload['actions'] ?? null;

            if ($value === null) {
                $properties['actions'] = null;
                goto after_actions;
            }

            $properties['actions'] = $value;

            after_actions:

            $value = $payload['actions_inbound'] ?? null;

            if ($value === null) {
                $properties['actionsInbound'] = null;
                goto after_actionsInbound;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'actionsInbound';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ActionsInbound($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['actionsInbound'] = $value;

            after_actionsInbound:

            $value = $payload['artifact_attestations'] ?? null;

            if ($value === null) {
                $properties['artifactAttestations'] = null;
                goto after_artifactAttestations;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'artifactAttestations';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ArtifactAttestations($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['artifactAttestations'] = $value;

            after_artifactAttestations:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Domains::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Domains(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ActionsInbound(array $payload): ActionsInbound
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['full_domains'] ?? null;

            if ($value === null) {
                $properties['fullDomains'] = null;
                goto after_fullDomains;
            }

            $properties['fullDomains'] = $value;

            after_fullDomains:

            $value = $payload['wildcard_domains'] ?? null;

            if ($value === null) {
                $properties['wildcardDomains'] = null;
                goto after_wildcardDomains;
            }

            $properties['wildcardDomains'] = $value;

            after_wildcardDomains:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains\ActionsInbound', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ActionsInbound::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ActionsInbound(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains\ActionsInbound', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ArtifactAttestations(array $payload): ArtifactAttestations
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['trust_domain'] ?? null;

            if ($value === null) {
                $properties['trustDomain'] = null;
                goto after_trustDomain;
            }

            $properties['trustDomain'] = $value;

            after_trustDomain:

            $value = $payload['services'] ?? null;

            if ($value === null) {
                $properties['services'] = null;
                goto after_services;
            }

            $properties['services'] = $value;

            after_services:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains\ArtifactAttestations', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ArtifactAttestations::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ArtifactAttestations(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains\ArtifactAttestations', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\SshKeyFingerprints' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains\ActionsInbound' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ActionsInbound($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview\Domains\ArtifactAttestations' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ArtifactAttestations($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview(mixed $object): mixed
    {
        assert($object instanceof ApiOverview);
        $result = [];

        $verifiablePasswordAuthentication                                                            = $object->verifiablePasswordAuthentication;
        after_verifiablePasswordAuthentication:        $result['verifiable_password_authentication'] = $verifiablePasswordAuthentication;

        $sshKeyFingerprints = $object->sshKeyFingerprints;

        if ($sshKeyFingerprints === null) {
            goto after_sshKeyFingerprints;
        }

        $sshKeyFingerprints                                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints($sshKeyFingerprints);
        after_sshKeyFingerprints:        $result['ssh_key_fingerprints'] = $sshKeyFingerprints;

        $sshKeys = $object->sshKeys;

        if ($sshKeys === null) {
            goto after_sshKeys;
        }

        static $sshKeysSerializer0;

        if ($sshKeysSerializer0 === null) {
            $sshKeysSerializer0 = new SerializeArrayItems(...[]);
        }

        $sshKeys                                  = $sshKeysSerializer0->serialize($sshKeys, $this);
        after_sshKeys:        $result['ssh_keys'] = $sshKeys;

        $hooks = $object->hooks;

        if ($hooks === null) {
            goto after_hooks;
        }

        static $hooksSerializer0;

        if ($hooksSerializer0 === null) {
            $hooksSerializer0 = new SerializeArrayItems(...[]);
        }

        $hooks                               = $hooksSerializer0->serialize($hooks, $this);
        after_hooks:        $result['hooks'] = $hooks;

        $githubEnterpriseImporter = $object->githubEnterpriseImporter;

        if ($githubEnterpriseImporter === null) {
            goto after_githubEnterpriseImporter;
        }

        static $githubEnterpriseImporterSerializer0;

        if ($githubEnterpriseImporterSerializer0 === null) {
            $githubEnterpriseImporterSerializer0 = new SerializeArrayItems(...[]);
        }

        $githubEnterpriseImporter                                                    = $githubEnterpriseImporterSerializer0->serialize($githubEnterpriseImporter, $this);
        after_githubEnterpriseImporter:        $result['github_enterprise_importer'] = $githubEnterpriseImporter;

        $web = $object->web;

        if ($web === null) {
            goto after_web;
        }

        static $webSerializer0;

        if ($webSerializer0 === null) {
            $webSerializer0 = new SerializeArrayItems(...[]);
        }

        $web                             = $webSerializer0->serialize($web, $this);
        after_web:        $result['web'] = $web;

        $api = $object->api;

        if ($api === null) {
            goto after_api;
        }

        static $apiSerializer0;

        if ($apiSerializer0 === null) {
            $apiSerializer0 = new SerializeArrayItems(...[]);
        }

        $api                             = $apiSerializer0->serialize($api, $this);
        after_api:        $result['api'] = $api;

        $git = $object->git;

        if ($git === null) {
            goto after_git;
        }

        static $gitSerializer0;

        if ($gitSerializer0 === null) {
            $gitSerializer0 = new SerializeArrayItems(...[]);
        }

        $git                             = $gitSerializer0->serialize($git, $this);
        after_git:        $result['git'] = $git;

        $packages = $object->packages;

        if ($packages === null) {
            goto after_packages;
        }

        static $packagesSerializer0;

        if ($packagesSerializer0 === null) {
            $packagesSerializer0 = new SerializeArrayItems(...[]);
        }

        $packages                                  = $packagesSerializer0->serialize($packages, $this);
        after_packages:        $result['packages'] = $packages;

        $pages = $object->pages;

        if ($pages === null) {
            goto after_pages;
        }

        static $pagesSerializer0;

        if ($pagesSerializer0 === null) {
            $pagesSerializer0 = new SerializeArrayItems(...[]);
        }

        $pages                               = $pagesSerializer0->serialize($pages, $this);
        after_pages:        $result['pages'] = $pages;

        $importer = $object->importer;

        if ($importer === null) {
            goto after_importer;
        }

        static $importerSerializer0;

        if ($importerSerializer0 === null) {
            $importerSerializer0 = new SerializeArrayItems(...[]);
        }

        $importer                                  = $importerSerializer0->serialize($importer, $this);
        after_importer:        $result['importer'] = $importer;

        $actions = $object->actions;

        if ($actions === null) {
            goto after_actions;
        }

        static $actionsSerializer0;

        if ($actionsSerializer0 === null) {
            $actionsSerializer0 = new SerializeArrayItems(...[]);
        }

        $actions                                 = $actionsSerializer0->serialize($actions, $this);
        after_actions:        $result['actions'] = $actions;

        $actionsMacos = $object->actionsMacos;

        if ($actionsMacos === null) {
            goto after_actionsMacos;
        }

        static $actionsMacosSerializer0;

        if ($actionsMacosSerializer0 === null) {
            $actionsMacosSerializer0 = new SerializeArrayItems(...[]);
        }

        $actionsMacos                                       = $actionsMacosSerializer0->serialize($actionsMacos, $this);
        after_actionsMacos:        $result['actions_macos'] = $actionsMacos;

        $codespaces = $object->codespaces;

        if ($codespaces === null) {
            goto after_codespaces;
        }

        static $codespacesSerializer0;

        if ($codespacesSerializer0 === null) {
            $codespacesSerializer0 = new SerializeArrayItems(...[]);
        }

        $codespaces                                    = $codespacesSerializer0->serialize($codespaces, $this);
        after_codespaces:        $result['codespaces'] = $codespaces;

        $dependabot = $object->dependabot;

        if ($dependabot === null) {
            goto after_dependabot;
        }

        static $dependabotSerializer0;

        if ($dependabotSerializer0 === null) {
            $dependabotSerializer0 = new SerializeArrayItems(...[]);
        }

        $dependabot                                    = $dependabotSerializer0->serialize($dependabot, $this);
        after_dependabot:        $result['dependabot'] = $dependabot;

        $copilot = $object->copilot;

        if ($copilot === null) {
            goto after_copilot;
        }

        static $copilotSerializer0;

        if ($copilotSerializer0 === null) {
            $copilotSerializer0 = new SerializeArrayItems(...[]);
        }

        $copilot                                 = $copilotSerializer0->serialize($copilot, $this);
        after_copilot:        $result['copilot'] = $copilot;

        $domains = $object->domains;

        if ($domains === null) {
            goto after_domains;
        }

        $domains                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains($domains);
        after_domains:        $result['domains'] = $domains;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints(mixed $object): mixed
    {
        assert($object instanceof SshKeyFingerprints);
        $result = [];

        $shaTwoHundredFiftySixRsa = $object->shaTwoHundredFiftySixRsa;

        if ($shaTwoHundredFiftySixRsa === null) {
            goto after_shaTwoHundredFiftySixRsa;
        }

        after_shaTwoHundredFiftySixRsa:        $result['SHA256_RSA'] = $shaTwoHundredFiftySixRsa;

        $shaTwoHundredFiftySixDsa = $object->shaTwoHundredFiftySixDsa;

        if ($shaTwoHundredFiftySixDsa === null) {
            goto after_shaTwoHundredFiftySixDsa;
        }

        after_shaTwoHundredFiftySixDsa:        $result['SHA256_DSA'] = $shaTwoHundredFiftySixDsa;

        $shaTwoHundredFiftySixEcdsa = $object->shaTwoHundredFiftySixEcdsa;

        if ($shaTwoHundredFiftySixEcdsa === null) {
            goto after_shaTwoHundredFiftySixEcdsa;
        }

        after_shaTwoHundredFiftySixEcdsa:        $result['SHA256_ECDSA'] = $shaTwoHundredFiftySixEcdsa;

        $shaTwoHundredFiftySixEdTwentyFiveThousandFiveHundredNineteen = $object->shaTwoHundredFiftySixEdTwentyFiveThousandFiveHundredNineteen;

        if ($shaTwoHundredFiftySixEdTwentyFiveThousandFiveHundredNineteen === null) {
            goto after_shaTwoHundredFiftySixEdTwentyFiveThousandFiveHundredNineteen;
        }

        after_shaTwoHundredFiftySixEdTwentyFiveThousandFiveHundredNineteen:        $result['SHA256_ED25519'] = $shaTwoHundredFiftySixEdTwentyFiveThousandFiveHundredNineteen;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains(mixed $object): mixed
    {
        assert($object instanceof Domains);
        $result = [];

        $website = $object->website;

        if ($website === null) {
            goto after_website;
        }

        static $websiteSerializer0;

        if ($websiteSerializer0 === null) {
            $websiteSerializer0 = new SerializeArrayItems(...[]);
        }

        $website                                 = $websiteSerializer0->serialize($website, $this);
        after_website:        $result['website'] = $website;

        $codespaces = $object->codespaces;

        if ($codespaces === null) {
            goto after_codespaces;
        }

        static $codespacesSerializer0;

        if ($codespacesSerializer0 === null) {
            $codespacesSerializer0 = new SerializeArrayItems(...[]);
        }

        $codespaces                                    = $codespacesSerializer0->serialize($codespaces, $this);
        after_codespaces:        $result['codespaces'] = $codespaces;

        $copilot = $object->copilot;

        if ($copilot === null) {
            goto after_copilot;
        }

        static $copilotSerializer0;

        if ($copilotSerializer0 === null) {
            $copilotSerializer0 = new SerializeArrayItems(...[]);
        }

        $copilot                                 = $copilotSerializer0->serialize($copilot, $this);
        after_copilot:        $result['copilot'] = $copilot;

        $packages = $object->packages;

        if ($packages === null) {
            goto after_packages;
        }

        static $packagesSerializer0;

        if ($packagesSerializer0 === null) {
            $packagesSerializer0 = new SerializeArrayItems(...[]);
        }

        $packages                                  = $packagesSerializer0->serialize($packages, $this);
        after_packages:        $result['packages'] = $packages;

        $actions = $object->actions;

        if ($actions === null) {
            goto after_actions;
        }

        static $actionsSerializer0;

        if ($actionsSerializer0 === null) {
            $actionsSerializer0 = new SerializeArrayItems(...[]);
        }

        $actions                                 = $actionsSerializer0->serialize($actions, $this);
        after_actions:        $result['actions'] = $actions;

        $actionsInbound = $object->actionsInbound;

        if ($actionsInbound === null) {
            goto after_actionsInbound;
        }

        $actionsInbound                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ActionsInbound($actionsInbound);
        after_actionsInbound:        $result['actions_inbound'] = $actionsInbound;

        $artifactAttestations = $object->artifactAttestations;

        if ($artifactAttestations === null) {
            goto after_artifactAttestations;
        }

        $artifactAttestations                                               = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ArtifactAttestations($artifactAttestations);
        after_artifactAttestations:        $result['artifact_attestations'] = $artifactAttestations;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ActionsInbound(mixed $object): mixed
    {
        assert($object instanceof ActionsInbound);
        $result = [];

        $fullDomains = $object->fullDomains;

        if ($fullDomains === null) {
            goto after_fullDomains;
        }

        static $fullDomainsSerializer0;

        if ($fullDomainsSerializer0 === null) {
            $fullDomainsSerializer0 = new SerializeArrayItems(...[]);
        }

        $fullDomains                                      = $fullDomainsSerializer0->serialize($fullDomains, $this);
        after_fullDomains:        $result['full_domains'] = $fullDomains;

        $wildcardDomains = $object->wildcardDomains;

        if ($wildcardDomains === null) {
            goto after_wildcardDomains;
        }

        static $wildcardDomainsSerializer0;

        if ($wildcardDomainsSerializer0 === null) {
            $wildcardDomainsSerializer0 = new SerializeArrayItems(...[]);
        }

        $wildcardDomains                                          = $wildcardDomainsSerializer0->serialize($wildcardDomains, $this);
        after_wildcardDomains:        $result['wildcard_domains'] = $wildcardDomains;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ApiOverview⚡️Domains⚡️ArtifactAttestations(mixed $object): mixed
    {
        assert($object instanceof ArtifactAttestations);
        $result = [];

        $trustDomain = $object->trustDomain;

        if ($trustDomain === null) {
            goto after_trustDomain;
        }

        after_trustDomain:        $result['trust_domain'] = $trustDomain;

        $services = $object->services;

        if ($services === null) {
            goto after_services;
        }

        static $servicesSerializer0;

        if ($servicesSerializer0 === null) {
            $servicesSerializer0 = new SerializeArrayItems(...[]);
        }

        $services                                  = $servicesSerializer0->serialize($services, $this);
        after_services:        $result['services'] = $services;

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
