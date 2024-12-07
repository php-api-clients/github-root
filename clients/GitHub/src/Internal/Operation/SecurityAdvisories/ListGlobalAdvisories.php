<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Advisories;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\GlobalAdvisory;
use ApiClients\Client\GitHub\Schema\ValidationErrorSimple;
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

final class ListGlobalAdvisories
{
    public const OPERATION_ID    = 'security-advisories/list-global-advisories';
    public const OPERATION_MATCH = 'GET /advisories';
    /**If specified, only advisories with this GHSA (GitHub Security Advisory) identifier will be returned. **/
    private string $ghsaId;
    /**If specified, only advisories with this CVE (Common Vulnerabilities and Exposures) identifier will be returned. **/
    private string $cveId;
    /**If specified, only advisories for these ecosystems will be returned. **/
    private string $ecosystem;
    /**If specified, only advisories with these severities will be returned. **/
    private string $severity;
    /**If specified, only advisories with these Common Weakness Enumerations (CWEs) will be returned.

    Example: `cwes=79,284,22` or `cwes[]=79&cwes[]=284&cwes[]=22` **/
    private string|array $cwes;
    /**Whether to only return advisories that have been withdrawn. **/
    private bool $isWithdrawn;
    /**If specified, only return advisories that affect any of `package` or `package@version`. A maximum of 1000 packages can be specified.
    If the query parameter causes the URL to exceed the maximum URL length supported by your client, you must specify fewer packages.

    Example: `affects=package1,package2@1.0.0,package3@^2.0.0` or `affects[]=package1&affects[]=package2@1.0.0` **/
    private string|array $affects;
    /**If specified, only return advisories that were published on a date or date range.

    For more information on the syntax of the date range, see "[Understanding the search syntax](https://docs.github.com/search-github/getting-started-with-searching-on-github/understanding-the-search-syntax#query-for-dates)." **/
    private string $published;
    /**If specified, only return advisories that were updated on a date or date range.

    For more information on the syntax of the date range, see "[Understanding the search syntax](https://docs.github.com/search-github/getting-started-with-searching-on-github/understanding-the-search-syntax#query-for-dates)." **/
    private string $updated;
    /**If specified, only show advisories that were updated or published on a date or date range.

    For more information on the syntax of the date range, see "[Understanding the search syntax](https://docs.github.com/search-github/getting-started-with-searching-on-github/understanding-the-search-syntax#query-for-dates)." **/
    private string $modified;
    /**If specified, only return advisories that have an EPSS percentage score that matches the provided value.
    The EPSS percentage represents the likelihood of a CVE being exploited. **/
    private string $epssPercentage;
    /**If specified, only return advisories that have an EPSS percentile score that matches the provided value.
    The EPSS percentile represents the relative rank of the CVE's likelihood of being exploited compared to other CVEs. **/
    private string $epssPercentile;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $after;
    /**If specified, only advisories of this type will be returned. By default, a request with no other parameters defined will only return reviewed advisories that are not malware. **/
    private string $type;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The property to sort the results by. **/
    private string $sort;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Advisories $hydrator, string $ghsaId, string $cveId, string $ecosystem, string $severity, string|array $cwes, bool $isWithdrawn, string|array $affects, string $published, string $updated, string $modified, string $epssPercentage, string $epssPercentile, string $before, string $after, string $type = 'reviewed', string $direction = 'desc', int $perPage = 30, string $sort = 'published')
    {
        $this->ghsaId                  = $ghsaId;
        $this->cveId                   = $cveId;
        $this->ecosystem               = $ecosystem;
        $this->severity                = $severity;
        $this->cwes                    = $cwes;
        $this->isWithdrawn             = $isWithdrawn;
        $this->affects                 = $affects;
        $this->published               = $published;
        $this->updated                 = $updated;
        $this->modified                = $modified;
        $this->epssPercentage          = $epssPercentage;
        $this->epssPercentile          = $epssPercentile;
        $this->before                  = $before;
        $this->after                   = $after;
        $this->type                    = $type;
        $this->direction               = $direction;
        $this->perPage                 = $perPage;
        $this->sort                    = $sort;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/advisories{?affects,after,before,cve_id,cwes,direction,ecosystem,epss_percentage,epss_percentile,ghsa_id,is_withdrawn,modified,per_page,published,severity,sort,type,updated}'))->expand(['affects' => $this->affects, 'after' => $this->after, 'before' => $this->before, 'cve_id' => $this->cveId, 'cwes' => $this->cwes, 'direction' => $this->direction, 'ecosystem' => $this->ecosystem, 'epss_percentage' => $this->epssPercentage, 'epss_percentile' => $this->epssPercentile, 'ghsa_id' => $this->ghsaId, 'is_withdrawn' => $this->isWithdrawn, 'modified' => $this->modified, 'per_page' => $this->perPage, 'published' => $this->published, 'severity' => $this->severity, 'sort' => $this->sort, 'type' => $this->type, 'updated' => $this->updated]));
    }

    /** @return Observable<GlobalAdvisory> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): GlobalAdvisory {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(GlobalAdvisory::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(GlobalAdvisory::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Too many requests
                     **/

                    case 429:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(429, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ValidationErrorSimple::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\ValidationErrorSimple(422, $this->hydrator->hydrateObject(ValidationErrorSimple::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
