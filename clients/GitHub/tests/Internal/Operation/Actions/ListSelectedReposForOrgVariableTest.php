<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Internal\Operation\Actions\ListSelectedReposForOrgVariable */
final class ListSelectedReposForOrgVariableTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_200_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/actions/variables/generated/repositories?page=1&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Actions\ListSelectedReposForOrgVariable::OPERATION_MATCH, (static function (array $data): array {
            $data['org']      = 'generated';
            $data['name']     = 'generated';
            $data['page']     = 1;
            $data['per_page'] = 8;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_200_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/actions/variables/generated/repositories?page=1&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->actions()->listSelectedReposForOrgVariable('generated', 'generated', 1, 8);
    }

    /** @test */
    public function call_httpCode_409_empty(): void
    {
        $response = new Response(409, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/actions/variables/generated/repositories?page=1&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Actions\ListSelectedReposForOrgVariable::OPERATION_MATCH, (static function (array $data): array {
            $data['org']      = 'generated';
            $data['name']     = 'generated';
            $data['page']     = 1;
            $data['per_page'] = 8;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_409_empty(): void
    {
        $response = new Response(409, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/actions/variables/generated/repositories?page=1&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->actions()->listSelectedReposForOrgVariable('generated', 'generated', 1, 8);
        self::assertArrayHasKey('code', $result);
        self::assertSame(409, $result['code']);
    }
}
