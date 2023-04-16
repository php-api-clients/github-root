<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Operation\Scim;

use ApiClients\Client\GitHubEnterpriseCloud\Client;
use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Operation\Scim\UpdateAttributeForUser;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class UpdateAttributeForUserTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_requestContentType_application_json_responseContentType_application_scim_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/scim+json'], Schema\ScimUser::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/scim/v2/organizations/generated_null/Users/generated_null', Argument::type('array'), Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateAttributeForUser::OPERATION_MATCH, (static function (array $data): array {
            $data['org']          = 'generated_null';
            $data['scim_user_id'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_404_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/scim/v2/organizations/generated_null/Users/generated_null', Argument::type('array'), Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateAttributeForUser::OPERATION_MATCH, (static function (array $data): array {
            $data['org']          = 'generated_null';
            $data['scim_user_id'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_404_requestContentType_application_json_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(404, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/scim/v2/organizations/generated_null/Users/generated_null', Argument::type('array'), Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateAttributeForUser::OPERATION_MATCH, (static function (array $data): array {
            $data['org']          = 'generated_null';
            $data['scim_user_id'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_403_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/scim/v2/organizations/generated_null/Users/generated_null', Argument::type('array'), Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateAttributeForUser::OPERATION_MATCH, (static function (array $data): array {
            $data['org']          = 'generated_null';
            $data['scim_user_id'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_403_requestContentType_application_json_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(403, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/scim/v2/organizations/generated_null/Users/generated_null', Argument::type('array'), Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateAttributeForUser::OPERATION_MATCH, (static function (array $data): array {
            $data['org']          = 'generated_null';
            $data['scim_user_id'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
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
        $browser->request('PATCH', '/scim/v2/organizations/generated_null/Users/generated_null', Argument::type('array'), Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateAttributeForUser::OPERATION_MATCH, (static function (array $data): array {
            $data['org']          = 'generated_null';
            $data['scim_user_id'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
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
        $browser->request('PATCH', '/scim/v2/organizations/generated_null/Users/generated_null', Argument::type('array'), Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateAttributeForUser::OPERATION_MATCH, (static function (array $data): array {
            $data['org']          = 'generated_null';
            $data['scim_user_id'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_429_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(429, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/scim/v2/organizations/generated_null/Users/generated_null', Argument::type('array'), Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateAttributeForUser::OPERATION_MATCH, (static function (array $data): array {
            $data['org']          = 'generated_null';
            $data['scim_user_id'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Scim\UpdateAttributeForUser\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
