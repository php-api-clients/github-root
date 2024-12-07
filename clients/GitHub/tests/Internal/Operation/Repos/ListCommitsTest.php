<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error\BasicError;
use ApiClients\Client\GitHub\Error\ScimError;
use ApiClients\Client\GitHub\Internal\Operation\Repos\ListCommits;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Internal\Operation\Repos\ListCommits */
final class ListCommitsTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_500_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/commits?author=generated&committer=generated&page=1&path=generated&per_page=8&sha=generated&since=1970-01-01T00%3A00%3A00%2B00%3A00&until=1970-01-01T00%3A00%3A00%2B00%3A00', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListCommits::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated';
            $data['repo']      = 'generated';
            $data['sha']       = 'generated';
            $data['path']      = 'generated';
            $data['author']    = 'generated';
            $data['committer'] = 'generated';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['until']     = '1970-01-01T00:00:00+00:00';
            $data['per_page']  = 8;
            $data['page']      = 1;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_500_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/commits?author=generated&committer=generated&page=1&path=generated&per_page=8&sha=generated&since=1970-01-01T00%3A00%3A00%2B00%3A00&until=1970-01-01T00%3A00%3A00%2B00%3A00', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->listCommits('generated', 'generated', 'generated', 'generated', 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 1);
    }

    /** @test */
    public function call_httpCode_400_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/commits?author=generated&committer=generated&page=1&path=generated&per_page=8&sha=generated&since=1970-01-01T00%3A00%3A00%2B00%3A00&until=1970-01-01T00%3A00%3A00%2B00%3A00', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListCommits::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated';
            $data['repo']      = 'generated';
            $data['sha']       = 'generated';
            $data['path']      = 'generated';
            $data['author']    = 'generated';
            $data['committer'] = 'generated';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['until']     = '1970-01-01T00:00:00+00:00';
            $data['per_page']  = 8;
            $data['page']      = 1;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_400_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/commits?author=generated&committer=generated&page=1&path=generated&per_page=8&sha=generated&since=1970-01-01T00%3A00%3A00%2B00%3A00&until=1970-01-01T00%3A00%3A00%2B00%3A00', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->listCommits('generated', 'generated', 'generated', 'generated', 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 1);
    }

    /** @test */
    public function call_httpCode_400_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/commits?author=generated&committer=generated&page=1&path=generated&per_page=8&sha=generated&since=1970-01-01T00%3A00%3A00%2B00%3A00&until=1970-01-01T00%3A00%3A00%2B00%3A00', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListCommits::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated';
            $data['repo']      = 'generated';
            $data['sha']       = 'generated';
            $data['path']      = 'generated';
            $data['author']    = 'generated';
            $data['committer'] = 'generated';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['until']     = '1970-01-01T00:00:00+00:00';
            $data['per_page']  = 8;
            $data['page']      = 1;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_400_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/commits?author=generated&committer=generated&page=1&path=generated&per_page=8&sha=generated&since=1970-01-01T00%3A00%3A00%2B00%3A00&until=1970-01-01T00%3A00%3A00%2B00%3A00', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->listCommits('generated', 'generated', 'generated', 'generated', 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 1);
    }

    /** @test */
    public function call_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/commits?author=generated&committer=generated&page=1&path=generated&per_page=8&sha=generated&since=1970-01-01T00%3A00%3A00%2B00%3A00&until=1970-01-01T00%3A00%3A00%2B00%3A00', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListCommits::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated';
            $data['repo']      = 'generated';
            $data['sha']       = 'generated';
            $data['path']      = 'generated';
            $data['author']    = 'generated';
            $data['committer'] = 'generated';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['until']     = '1970-01-01T00:00:00+00:00';
            $data['per_page']  = 8;
            $data['page']      = 1;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/commits?author=generated&committer=generated&page=1&path=generated&per_page=8&sha=generated&since=1970-01-01T00%3A00%3A00%2B00%3A00&until=1970-01-01T00%3A00%3A00%2B00%3A00', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->listCommits('generated', 'generated', 'generated', 'generated', 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 1);
    }

    /** @test */
    public function call_httpCode_409_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(409, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/commits?author=generated&committer=generated&page=1&path=generated&per_page=8&sha=generated&since=1970-01-01T00%3A00%3A00%2B00%3A00&until=1970-01-01T00%3A00%3A00%2B00%3A00', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListCommits::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated';
            $data['repo']      = 'generated';
            $data['sha']       = 'generated';
            $data['path']      = 'generated';
            $data['author']    = 'generated';
            $data['committer'] = 'generated';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['until']     = '1970-01-01T00:00:00+00:00';
            $data['per_page']  = 8;
            $data['page']      = 1;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_409_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(409, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/commits?author=generated&committer=generated&page=1&path=generated&per_page=8&sha=generated&since=1970-01-01T00%3A00%3A00%2B00%3A00&until=1970-01-01T00%3A00%3A00%2B00%3A00', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->listCommits('generated', 'generated', 'generated', 'generated', 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 1);
    }
}
