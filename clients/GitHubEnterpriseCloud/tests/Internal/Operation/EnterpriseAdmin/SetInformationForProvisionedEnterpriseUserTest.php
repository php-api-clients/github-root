<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Client;
use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser */
final class SetInformationForProvisionedEnterpriseUserTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_200_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\UserResponse::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            $data['scim_user_id'] = 'generated';
            $data['enterprise']   = 'generated';

            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_200_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\UserResponse::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->setInformationForProvisionedEnterpriseUser('generated', 'generated', json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_400_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            $data['scim_user_id'] = 'generated';
            $data['enterprise']   = 'generated';

            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_400_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->setInformationForProvisionedEnterpriseUser('generated', 'generated', json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_400_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            $data['scim_user_id'] = 'generated';
            $data['enterprise']   = 'generated';

            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_400_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->setInformationForProvisionedEnterpriseUser('generated', 'generated', json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            $data['scim_user_id'] = 'generated';
            $data['enterprise']   = 'generated';

            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->setInformationForProvisionedEnterpriseUser('generated', 'generated', json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_429_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            $data['scim_user_id'] = 'generated';
            $data['enterprise']   = 'generated';

            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_429_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->setInformationForProvisionedEnterpriseUser('generated', 'generated', json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_429_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            $data['scim_user_id'] = 'generated';
            $data['enterprise']   = 'generated';

            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_429_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(429, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->setInformationForProvisionedEnterpriseUser('generated', 'generated', json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_500_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            $data['scim_user_id'] = 'generated';
            $data['enterprise']   = 'generated';

            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_500_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->setInformationForProvisionedEnterpriseUser('generated', 'generated', json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_500_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            $data['scim_user_id'] = 'generated';
            $data['enterprise']   = 'generated';

            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_500_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(500, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->setInformationForProvisionedEnterpriseUser('generated', 'generated', json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_401_requestContentType_application_json_empty(): void
    {
        $response = new Response(401, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            $data['scim_user_id'] = 'generated';
            $data['enterprise']   = 'generated';

            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_401_requestContentType_application_json_empty(): void
    {
        $response = new Response(401, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->setInformationForProvisionedEnterpriseUser('generated', 'generated', json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true));
        self::assertArrayHasKey('code', $result);
        self::assertSame(401, $result['code']);
    }

    /** @test */
    public function call_httpCode_403_requestContentType_application_json_empty(): void
    {
        $response = new Response(403, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            $data['scim_user_id'] = 'generated';
            $data['enterprise']   = 'generated';

            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_403_requestContentType_application_json_empty(): void
    {
        $response = new Response(403, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->setInformationForProvisionedEnterpriseUser('generated', 'generated', json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true));
        self::assertArrayHasKey('code', $result);
        self::assertSame(403, $result['code']);
    }

    /** @test */
    public function call_httpCode_409_requestContentType_application_json_empty(): void
    {
        $response = new Response(409, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser::OPERATION_MATCH, (static function (array $data): array {
            $data['scim_user_id'] = 'generated';
            $data['enterprise']   = 'generated';

            return $data;
        })(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_409_requestContentType_application_json_empty(): void
    {
        $response = new Response(409, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/scim/v2/enterprises/generated/Users/generated', Argument::type('array'), json_encode(json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->setInformationForProvisionedEnterpriseUser('generated', 'generated', json_decode(Schema\User::SCHEMA_EXAMPLE_DATA, true));
        self::assertArrayHasKey('code', $result);
        self::assertSame(409, $result['code']);
    }
}
