<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error\BasicError;
use ApiClients\Client\GitHub\Error\ValidationError;
use ApiClients\Client\GitHub\Internal\Operation\Orgs\ListPatGrants;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Internal\Operation\Orgs\ListPatGrants */
final class ListPatGrantsTest extends AsyncTestCase
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
        $browser->request('GET', '/orgs/generated/personal-access-tokens?direction=generated&last_used_after=1970-01-01T00%3A00%3A00%2B00%3A00&last_used_before=1970-01-01T00%3A00%3A00%2B00%3A00&owner=generated&page=1&per_page=8&permission=generated&repository=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListPatGrants::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = ['generated'];
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['per_page']         = 8;
            $data['page']             = 1;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

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
        $browser->request('GET', '/orgs/generated/personal-access-tokens?direction=generated&last_used_after=1970-01-01T00%3A00%3A00%2B00%3A00&last_used_before=1970-01-01T00%3A00%3A00%2B00%3A00&owner=generated&page=1&per_page=8&permission=generated&repository=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->orgs()->listPatGrants('generated', ['generated'], 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 1, 'generated', 'generated');
    }

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
        $browser->request('GET', '/orgs/generated/personal-access-tokens?direction=generated&last_used_after=1970-01-01T00%3A00%3A00%2B00%3A00&last_used_before=1970-01-01T00%3A00%3A00%2B00%3A00&owner=generated&page=1&per_page=8&permission=generated&repository=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListPatGrants::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = ['generated'];
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['per_page']         = 8;
            $data['page']             = 1;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

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
        $browser->request('GET', '/orgs/generated/personal-access-tokens?direction=generated&last_used_after=1970-01-01T00%3A00%3A00%2B00%3A00&last_used_before=1970-01-01T00%3A00%3A00%2B00%3A00&owner=generated&page=1&per_page=8&permission=generated&repository=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->orgs()->listPatGrants('generated', ['generated'], 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 1, 'generated', 'generated');
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
        $browser->request('GET', '/orgs/generated/personal-access-tokens?direction=generated&last_used_after=1970-01-01T00%3A00%3A00%2B00%3A00&last_used_before=1970-01-01T00%3A00%3A00%2B00%3A00&owner=generated&page=1&per_page=8&permission=generated&repository=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListPatGrants::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = ['generated'];
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['per_page']         = 8;
            $data['page']             = 1;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

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
        $browser->request('GET', '/orgs/generated/personal-access-tokens?direction=generated&last_used_after=1970-01-01T00%3A00%3A00%2B00%3A00&last_used_before=1970-01-01T00%3A00%3A00%2B00%3A00&owner=generated&page=1&per_page=8&permission=generated&repository=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->orgs()->listPatGrants('generated', ['generated'], 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 1, 'generated', 'generated');
    }

    /** @test */
    public function call_httpCode_403_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/personal-access-tokens?direction=generated&last_used_after=1970-01-01T00%3A00%3A00%2B00%3A00&last_used_before=1970-01-01T00%3A00%3A00%2B00%3A00&owner=generated&page=1&per_page=8&permission=generated&repository=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListPatGrants::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = ['generated'];
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['per_page']         = 8;
            $data['page']             = 1;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_403_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/personal-access-tokens?direction=generated&last_used_after=1970-01-01T00%3A00%3A00%2B00%3A00&last_used_before=1970-01-01T00%3A00%3A00%2B00%3A00&owner=generated&page=1&per_page=8&permission=generated&repository=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->orgs()->listPatGrants('generated', ['generated'], 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 1, 'generated', 'generated');
    }
}
