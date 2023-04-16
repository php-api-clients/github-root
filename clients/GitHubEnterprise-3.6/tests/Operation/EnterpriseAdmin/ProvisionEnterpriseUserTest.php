<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\ProvisionEnterpriseUser;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class ProvisionEnterpriseUserTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_requestContentType_application_json_responseContentType_application_scim_json(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/scim+json'], Schema\ScimEnterpriseUserResponse::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/scim/v2/Users', Argument::type('array'), Schema\User::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ProvisionEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_400_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/scim/v2/Users', Argument::type('array'), Schema\User::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ProvisionEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_400_requestContentType_application_json_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/scim/v2/Users', Argument::type('array'), Schema\User::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ProvisionEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_429_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/scim/v2/Users', Argument::type('array'), Schema\User::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ProvisionEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_429_requestContentType_application_json_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/scim/v2/Users', Argument::type('array'), Schema\User::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ProvisionEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_500_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/scim/v2/Users', Argument::type('array'), Schema\User::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ProvisionEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_500_requestContentType_application_json_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/scim/v2/Users', Argument::type('array'), Schema\User::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ProvisionEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }
}
