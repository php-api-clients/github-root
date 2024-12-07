<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\Issues;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error\BasicError;
use ApiClients\Client\GitHub\Error\ValidationError;
use ApiClients\Client\GitHub\Internal\Operation\Issues\List_;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Internal\Operation\Issues\List_ */
final class List_Test extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\ValidationError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/issues?collab=0&direction=generated&filter=generated&labels=generated&orgs=0&owned=0&page=1&per_page=8&pulls=0&since=1970-01-01T00%3A00%3A00%2B00%3A00&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(List_::OPERATION_MATCH, (static function (array $data): array {
            $data['labels']    = 'generated';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['collab']    = false;
            $data['orgs']      = false;
            $data['owned']     = false;
            $data['pulls']     = false;
            $data['filter']    = 'generated';
            $data['state']     = 'generated';
            $data['sort']      = 'generated';
            $data['direction'] = 'generated';
            $data['per_page']  = 8;
            $data['page']      = 1;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\ValidationError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/issues?collab=0&direction=generated&filter=generated&labels=generated&orgs=0&owned=0&page=1&per_page=8&pulls=0&since=1970-01-01T00%3A00%3A00%2B00%3A00&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->issues()->list('generated', '1970-01-01T00:00:00+00:00', false, false, false, false, 'generated', 'generated', 'generated', 'generated', 8, 1);
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
        $browser->request('GET', '/issues?collab=0&direction=generated&filter=generated&labels=generated&orgs=0&owned=0&page=1&per_page=8&pulls=0&since=1970-01-01T00%3A00%3A00%2B00%3A00&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(List_::OPERATION_MATCH, (static function (array $data): array {
            $data['labels']    = 'generated';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['collab']    = false;
            $data['orgs']      = false;
            $data['owned']     = false;
            $data['pulls']     = false;
            $data['filter']    = 'generated';
            $data['state']     = 'generated';
            $data['sort']      = 'generated';
            $data['direction'] = 'generated';
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
        $browser->request('GET', '/issues?collab=0&direction=generated&filter=generated&labels=generated&orgs=0&owned=0&page=1&per_page=8&pulls=0&since=1970-01-01T00%3A00%3A00%2B00%3A00&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->issues()->list('generated', '1970-01-01T00:00:00+00:00', false, false, false, false, 'generated', 'generated', 'generated', 'generated', 8, 1);
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
        $browser->request('GET', '/issues?collab=0&direction=generated&filter=generated&labels=generated&orgs=0&owned=0&page=1&per_page=8&pulls=0&since=1970-01-01T00%3A00%3A00%2B00%3A00&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(List_::OPERATION_MATCH, (static function (array $data): array {
            $data['labels']    = 'generated';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['collab']    = false;
            $data['orgs']      = false;
            $data['owned']     = false;
            $data['pulls']     = false;
            $data['filter']    = 'generated';
            $data['state']     = 'generated';
            $data['sort']      = 'generated';
            $data['direction'] = 'generated';
            $data['per_page']  = 8;
            $data['page']      = 1;

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
        $browser->request('GET', '/issues?collab=0&direction=generated&filter=generated&labels=generated&orgs=0&owned=0&page=1&per_page=8&pulls=0&since=1970-01-01T00%3A00%3A00%2B00%3A00&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->issues()->list('generated', '1970-01-01T00:00:00+00:00', false, false, false, false, 'generated', 'generated', 'generated', 'generated', 8, 1);
        self::assertArrayHasKey('code', $result);
        self::assertSame(304, $result['code']);
    }
}
