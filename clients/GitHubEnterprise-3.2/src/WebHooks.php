<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class WebHooks implements \ApiClients\Contracts\OpenAPI\WebHooksInterface
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly Hydrators $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, Hydrators $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->hydrator = $hydrator;
    }
    /**
     * @template H
     * @param class-string<H> $className
     * @return H
     */
    public function hydrateWebHook(string $className, array $data) : object
    {
        return $this->hydrator->hydrateObject($className, $data);
    }
    /**
     * @return array{className: class-string, data: mixed}
     */
    public function serializeWebHook(object $object) : array
    {
        return array('className' => $object::class, 'data' => $this->hydrator->serializeObject($object));
    }
    /**
     * @return 
     */
    public function resolve(array $headers, array $data) : object
    {
        $headers = (static function ($headers) : array {
            $flatHeaders = array();
            foreach ($headers as $key => $value) {
                $flatHeaders[strtolower($key)] = $value;
            }
            return $flatHeaders;
        })($headers);
        $error = new \RuntimeException('No event matching given headers and data');
        throw $error;
    }
}
