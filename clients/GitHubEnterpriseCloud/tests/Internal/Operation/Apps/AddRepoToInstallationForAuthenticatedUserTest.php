<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Internal\Operation\Apps;

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

/** @covers \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Apps\AddRepoToInstallationForAuthenticatedUser */
final class AddRepoToInstallationForAuthenticatedUserTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_403_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/user/installations/15/repositories/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Apps\AddRepoToInstallationForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['installation_id'] = 15;
            $data['repository_id']   = 13;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_403_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/user/installations/15/repositories/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->apps()->addRepoToInstallationForAuthenticatedUser(15, 13);
    }

    /** @test */
    public function call_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/user/installations/15/repositories/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Apps\AddRepoToInstallationForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['installation_id'] = 15;
            $data['repository_id']   = 13;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/user/installations/15/repositories/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->apps()->addRepoToInstallationForAuthenticatedUser(15, 13);
    }

    /** @test */
    public function call_httpCode_204_empty(): void
    {
        $response = new Response(204, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/user/installations/15/repositories/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Apps\AddRepoToInstallationForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['installation_id'] = 15;
            $data['repository_id']   = 13;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_204_empty(): void
    {
        $response = new Response(204, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/user/installations/15/repositories/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->apps()->addRepoToInstallationForAuthenticatedUser(15, 13);
        self::assertArrayHasKey('code', $result);
        self::assertSame(204, $result['code']);
    }

    /** @test */
    public function call_httpCode_304_empty(): void
    {
        $response = new Response(304, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/user/installations/15/repositories/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Apps\AddRepoToInstallationForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['installation_id'] = 15;
            $data['repository_id']   = 13;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_304_empty(): void
    {
        $response = new Response(304, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/user/installations/15/repositories/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->apps()->addRepoToInstallationForAuthenticatedUser(15, 13);
        self::assertArrayHasKey('code', $result);
        self::assertSame(304, $result['code']);
    }
}
