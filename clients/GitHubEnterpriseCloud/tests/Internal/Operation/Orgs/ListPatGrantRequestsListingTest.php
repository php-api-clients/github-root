<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Internal\Operation\Orgs;

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

/** @covers \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Orgs\ListPatGrantRequestsListing */
final class ListPatGrantRequestsListingTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_500_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/personal-access-token-requests?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&token_id=&per_page=8&page=1&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Orgs\ListPatGrantRequestsListing::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = null;
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['token_id']         = null;
            $data['per_page']         = 8;
            $data['page']             = 1;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

            return $data;
        })([]));
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function operations_httpCode_500_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/personal-access-token-requests?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&token_id=&per_page=8&page=1&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->orgs()->listPatGrantRequestsListing('generated', null, 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', null, 8, 1, 'generated', 'generated');
        foreach ($result as $item) {
        }
    }

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
        $browser->request('GET', '/orgs/generated/personal-access-token-requests?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&token_id=&per_page=8&page=1&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Orgs\ListPatGrantRequestsListing::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = null;
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['token_id']         = null;
            $data['per_page']         = 8;
            $data['page']             = 1;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

            return $data;
        })([]));
        foreach ($result as $item) {
        }
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
        $browser->request('GET', '/orgs/generated/personal-access-token-requests?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&token_id=&per_page=8&page=1&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->orgs()->listPatGrantRequestsListing('generated', null, 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', null, 8, 1, 'generated', 'generated');
        foreach ($result as $item) {
        }
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
        $browser->request('GET', '/orgs/generated/personal-access-token-requests?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&token_id=&per_page=8&page=1&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Orgs\ListPatGrantRequestsListing::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = null;
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['token_id']         = null;
            $data['per_page']         = 8;
            $data['page']             = 1;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

            return $data;
        })([]));
        foreach ($result as $item) {
        }
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
        $browser->request('GET', '/orgs/generated/personal-access-token-requests?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&token_id=&per_page=8&page=1&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->orgs()->listPatGrantRequestsListing('generated', null, 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', null, 8, 1, 'generated', 'generated');
        foreach ($result as $item) {
        }
    }

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
        $browser->request('GET', '/orgs/generated/personal-access-token-requests?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&token_id=&per_page=8&page=1&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Orgs\ListPatGrantRequestsListing::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = null;
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['token_id']         = null;
            $data['per_page']         = 8;
            $data['page']             = 1;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

            return $data;
        })([]));
        foreach ($result as $item) {
        }
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
        $browser->request('GET', '/orgs/generated/personal-access-token-requests?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&token_id=&per_page=8&page=1&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->orgs()->listPatGrantRequestsListing('generated', null, 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', null, 8, 1, 'generated', 'generated');
        foreach ($result as $item) {
        }
    }
}
