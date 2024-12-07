<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Issues;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events;
use ApiClients\Client\GitHub\Schema\AddedToProjectIssueEvent;
use ApiClients\Client\GitHub\Schema\AssignedIssueEvent;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\ConvertedNoteToIssueIssueEvent;
use ApiClients\Client\GitHub\Schema\DemilestonedIssueEvent;
use ApiClients\Client\GitHub\Schema\LabeledIssueEvent;
use ApiClients\Client\GitHub\Schema\LockedIssueEvent;
use ApiClients\Client\GitHub\Schema\MilestonedIssueEvent;
use ApiClients\Client\GitHub\Schema\MovedColumnInProjectIssueEvent;
use ApiClients\Client\GitHub\Schema\RemovedFromProjectIssueEvent;
use ApiClients\Client\GitHub\Schema\RenamedIssueEvent;
use ApiClients\Client\GitHub\Schema\ReviewDismissedIssueEvent;
use ApiClients\Client\GitHub\Schema\ReviewRequestedIssueEvent;
use ApiClients\Client\GitHub\Schema\ReviewRequestRemovedIssueEvent;
use ApiClients\Client\GitHub\Schema\UnassignedIssueEvent;
use ApiClients\Client\GitHub\Schema\UnlabeledIssueEvent;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;

final class ListEvents
{
    public const OPERATION_ID    = 'issues/list-events';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/{issue_number}/events';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The number that identifies the issue. **/
    private int $issueNumber;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Events $hydrator, string $owner, string $repo, int $issueNumber, int $perPage = 30, int $page = 1)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->issueNumber             = $issueNumber;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/issues/{issue_number}/events{?page,per_page}'))->expand(['issue_number' => $this->issueNumber, 'owner' => $this->owner, 'page' => $this->page, 'per_page' => $this->perPage, 'repo' => $this->repo]));
    }

    /** @return Observable<LabeledIssueEvent|UnlabeledIssueEvent|AssignedIssueEvent|UnassignedIssueEvent|MilestonedIssueEvent|DemilestonedIssueEvent|RenamedIssueEvent|ReviewRequestedIssueEvent|ReviewRequestRemovedIssueEvent|ReviewDismissedIssueEvent|LockedIssueEvent|AddedToProjectIssueEvent|MovedColumnInProjectIssueEvent|RemovedFromProjectIssueEvent|ConvertedNoteToIssueIssueEvent> */
    public function createResponse(ResponseInterface $response): Observable
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): LabeledIssueEvent|UnlabeledIssueEvent|AssignedIssueEvent|UnassignedIssueEvent|MilestonedIssueEvent|DemilestonedIssueEvent|RenamedIssueEvent|ReviewRequestedIssueEvent|ReviewRequestRemovedIssueEvent|ReviewDismissedIssueEvent|LockedIssueEvent|AddedToProjectIssueEvent|MovedColumnInProjectIssueEvent|RemovedFromProjectIssueEvent|ConvertedNoteToIssueIssueEvent {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(LabeledIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(LabeledIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(UnlabeledIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(UnlabeledIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaab;
                            }

                            items_application_json_two_hundred_aaaab:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(AssignedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(AssignedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaac;
                            }

                            items_application_json_two_hundred_aaaac:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(UnassignedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(UnassignedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaad;
                            }

                            items_application_json_two_hundred_aaaad:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(MilestonedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(MilestonedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaae;
                            }

                            items_application_json_two_hundred_aaaae:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(DemilestonedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(DemilestonedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaf;
                            }

                            items_application_json_two_hundred_aaaaf:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(RenamedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(RenamedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaag;
                            }

                            items_application_json_two_hundred_aaaag:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(ReviewRequestedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(ReviewRequestedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaah;
                            }

                            items_application_json_two_hundred_aaaah:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(ReviewRequestRemovedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(ReviewRequestRemovedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaai;
                            }

                            items_application_json_two_hundred_aaaai:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(ReviewDismissedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(ReviewDismissedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaj;
                            }

                            items_application_json_two_hundred_aaaaj:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(LockedIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(LockedIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaak;
                            }

                            items_application_json_two_hundred_aaaak:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(AddedToProjectIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(AddedToProjectIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaal;
                            }

                            items_application_json_two_hundred_aaaal:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(MovedColumnInProjectIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(MovedColumnInProjectIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaam;
                            }

                            items_application_json_two_hundred_aaaam:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(RemovedFromProjectIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(RemovedFromProjectIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaan;
                            }

                            items_application_json_two_hundred_aaaan:
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(ConvertedNoteToIssueIssueEvent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(ConvertedNoteToIssueIssueEvent::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaao;
                            }

                            items_application_json_two_hundred_aaaao:
                            throw $error;
                        });
                    /**
                     * Gone
                     **/

                    case 410:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(410, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
