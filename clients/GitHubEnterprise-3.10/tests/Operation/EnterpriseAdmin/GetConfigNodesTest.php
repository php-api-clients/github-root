<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Async\await;
use function React\Promise\resolve;

final class GetConfigNodesTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_200_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\GhesConfigNodes::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/manage/v1/config/nodes?uuid=generated&cluster_roles=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\GetConfigNodes::OPERATION_MATCH, (static function (array $data): array {
            $data['uuid']          = 'generated';
            $data['cluster_roles'] = 'generated';

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_200_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\GhesConfigNodes::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/manage/v1/config/nodes?uuid=generated&cluster_roles=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->getConfigNodes('generated', 'generated'));
    }

    /** @test */
    public function call_httpCode_401_empty(): void
    {
        $response = new Response(401, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/manage/v1/config/nodes?uuid=generated&cluster_roles=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\GetConfigNodes::OPERATION_MATCH, (static function (array $data): array {
            $data['uuid']          = 'generated';
            $data['cluster_roles'] = 'generated';

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_401_empty(): void
    {
        $response = new Response(401, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/manage/v1/config/nodes?uuid=generated&cluster_roles=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->getConfigNodes('generated', 'generated'));
        self::assertArrayHasKey('code', $result);
        self::assertSame(401, $result['code']);
    }

    /** @test */
    public function call_httpCode_500_empty(): void
    {
        $response = new Response(500, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/manage/v1/config/nodes?uuid=generated&cluster_roles=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\GetConfigNodes::OPERATION_MATCH, (static function (array $data): array {
            $data['uuid']          = 'generated';
            $data['cluster_roles'] = 'generated';

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_500_empty(): void
    {
        $response = new Response(500, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/manage/v1/config/nodes?uuid=generated&cluster_roles=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->getConfigNodes('generated', 'generated'));
        self::assertArrayHasKey('code', $result);
        self::assertSame(500, $result['code']);
    }
}
