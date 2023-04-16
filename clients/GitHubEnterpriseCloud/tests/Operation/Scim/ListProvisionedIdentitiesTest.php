<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Operation\Scim;

use ApiClients\Client\GitHubEnterpriseCloud\Client;
use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Operation\Scim\ListProvisionedIdentities;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class ListProvisionedIdentitiesTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_scim_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/scim+json'], Schema\ScimUserList::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/organizations/generated_null/Users?startIndex=13&count=13&filter=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentities::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated_null';
            $data['startIndex'] = 13;
            $data['count']      = 13;
            $data['filter']     = 'generated_null';

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_404_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/organizations/generated_null/Users?startIndex=13&count=13&filter=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentities::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated_null';
            $data['startIndex'] = 13;
            $data['count']      = 13;
            $data['filter']     = 'generated_null';

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_404_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(404, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/organizations/generated_null/Users?startIndex=13&count=13&filter=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentities::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated_null';
            $data['startIndex'] = 13;
            $data['count']      = 13;
            $data['filter']     = 'generated_null';

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_403_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/organizations/generated_null/Users?startIndex=13&count=13&filter=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentities::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated_null';
            $data['startIndex'] = 13;
            $data['count']      = 13;
            $data['filter']     = 'generated_null';

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_403_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(403, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/scim/v2/organizations/generated_null/Users?startIndex=13&count=13&filter=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentities::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated_null';
            $data['startIndex'] = 13;
            $data['count']      = 13;
            $data['filter']     = 'generated_null';

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
        $browser->request('GET', '/scim/v2/organizations/generated_null/Users?startIndex=13&count=13&filter=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentities::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated_null';
            $data['startIndex'] = 13;
            $data['count']      = 13;
            $data['filter']     = 'generated_null';

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
        $browser->request('GET', '/scim/v2/organizations/generated_null/Users?startIndex=13&count=13&filter=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentities::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated_null';
            $data['startIndex'] = 13;
            $data['count']      = 13;
            $data['filter']     = 'generated_null';

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
        $browser->request('GET', '/scim/v2/organizations/generated_null/Users?startIndex=13&count=13&filter=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentities::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated_null';
            $data['startIndex'] = 13;
            $data['count']      = 13;
            $data['filter']     = 'generated_null';

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
        $browser->request('GET', '/scim/v2/organizations/generated_null/Users?startIndex=13&count=13&filter=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListProvisionedIdentities::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated_null';
            $data['startIndex'] = 13;
            $data['count']      = 13;
            $data['filter']     = 'generated_null';

            return $data;
        })([]));
    }
}
