<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Internal\Operation\Gists;

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

/** @covers \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Gists\ListForUser */
final class ListForUserTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ValidationError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/users/generated/gists?since=1970-01-01T00:00:00+00:00&per_page=8&page=1', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Gists\ListForUser::OPERATION_MATCH, (static function (array $data): array {
            $data['username'] = 'generated';
            $data['since']    = '1970-01-01T00:00:00+00:00';
            $data['per_page'] = 8;
            $data['page']     = 1;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ValidationError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/users/generated/gists?since=1970-01-01T00:00:00+00:00&per_page=8&page=1', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->gists()->listForUser('generated', '1970-01-01T00:00:00+00:00', 8, 1);
    }
}
