<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Async\await;
use function React\Promise\resolve;

final class ListProvisionedIdentitiesEnterpriseTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_200_responseContentType_application_scim_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/scim+json'], Schema\ScimEnterpriseUserList::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated';
            $data['excludedAttributes'] = 'generated';
            $data['startIndex']         = 10;
            $data['count']              = 5;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_200_responseContentType_application_scim_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/scim+json'], Schema\ScimEnterpriseUserList::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->listProvisionedIdentitiesEnterprise('generated', 'generated', 10, 5));
    }

    /**
     * @test
     */
    public function call_httpCode_400_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated';
            $data['excludedAttributes'] = 'generated';
            $data['startIndex']         = 10;
            $data['count']              = 5;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_400_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->listProvisionedIdentitiesEnterprise('generated', 'generated', 10, 5));
    }

    /**
     * @test
     */
    public function call_httpCode_400_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated';
            $data['excludedAttributes'] = 'generated';
            $data['startIndex']         = 10;
            $data['count']              = 5;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_400_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->listProvisionedIdentitiesEnterprise('generated', 'generated', 10, 5));
    }

    /**
     * @test
     */
    public function call_httpCode_429_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated';
            $data['excludedAttributes'] = 'generated';
            $data['startIndex']         = 10;
            $data['count']              = 5;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_429_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->listProvisionedIdentitiesEnterprise('generated', 'generated', 10, 5));
    }

    /**
     * @test
     */
    public function call_httpCode_429_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated';
            $data['excludedAttributes'] = 'generated';
            $data['startIndex']         = 10;
            $data['count']              = 5;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_429_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->listProvisionedIdentitiesEnterprise('generated', 'generated', 10, 5));
    }

    /**
     * @test
     */
    public function call_httpCode_500_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated';
            $data['excludedAttributes'] = 'generated';
            $data['startIndex']         = 10;
            $data['count']              = 5;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_500_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->listProvisionedIdentitiesEnterprise('generated', 'generated', 10, 5));
    }

    /**
     * @test
     */
    public function call_httpCode_500_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated';
            $data['excludedAttributes'] = 'generated';
            $data['startIndex']         = 10;
            $data['count']              = 5;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_500_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->listProvisionedIdentitiesEnterprise('generated', 'generated', 10, 5));
    }

    /**
     * @test
     */
    public function call_httpCode_401_empty(): void
    {
        $response = new Response(401, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated';
            $data['excludedAttributes'] = 'generated';
            $data['startIndex']         = 10;
            $data['count']              = 5;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_401_empty(): void
    {
        $response = new Response(401, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->listProvisionedIdentitiesEnterprise('generated', 'generated', 10, 5));
        self::assertArrayHasKey('code', $result);
        self::assertSame(401, $result['code']);
    }

    /**
     * @test
     */
    public function call_httpCode_403_empty(): void
    {
        $response = new Response(403, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['filter']             = 'generated';
            $data['excludedAttributes'] = 'generated';
            $data['startIndex']         = 10;
            $data['count']              = 5;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_403_empty(): void
    {
        $response = new Response(403, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/Users?filter=generated&excludedAttributes=generated&startIndex=10&count=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->listProvisionedIdentitiesEnterprise('generated', 'generated', 10, 5));
        self::assertArrayHasKey('code', $result);
        self::assertSame(403, $result['code']);
    }
}
