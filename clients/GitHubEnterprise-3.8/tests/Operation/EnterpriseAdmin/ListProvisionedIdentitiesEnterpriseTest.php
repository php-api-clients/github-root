<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class ListProvisionedIdentitiesEnterpriseTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_scim_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/scim+json'], Schema\ScimEnterpriseUserList::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated_null&excludedAttributes=generated_null&startIndex=13&count=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated_null';
            $data['excludedAttributes'] = 'generated_null';
            $data['startIndex']         = 13;
            $data['count']              = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_400_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated_null&excludedAttributes=generated_null&startIndex=13&count=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated_null';
            $data['excludedAttributes'] = 'generated_null';
            $data['startIndex']         = 13;
            $data['count']              = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_400_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated_null&excludedAttributes=generated_null&startIndex=13&count=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated_null';
            $data['excludedAttributes'] = 'generated_null';
            $data['startIndex']         = 13;
            $data['count']              = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_429_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated_null&excludedAttributes=generated_null&startIndex=13&count=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated_null';
            $data['excludedAttributes'] = 'generated_null';
            $data['startIndex']         = 13;
            $data['count']              = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_429_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated_null&excludedAttributes=generated_null&startIndex=13&count=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated_null';
            $data['excludedAttributes'] = 'generated_null';
            $data['startIndex']         = 13;
            $data['count']              = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_500_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated_null&excludedAttributes=generated_null&startIndex=13&count=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated_null';
            $data['excludedAttributes'] = 'generated_null';
            $data['startIndex']         = 13;
            $data['count']              = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_500_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated_null&excludedAttributes=generated_null&startIndex=13&count=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated_null';
            $data['excludedAttributes'] = 'generated_null';
            $data['startIndex']         = 13;
            $data['count']              = 13;

            return $data;
        })([]));
    }
}
