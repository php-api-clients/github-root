<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\SecurityAdvisories;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error\BasicError;
use ApiClients\Client\GitHub\Error\ScimError;
use ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories\ListOrgRepositoryAdvisories;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories\ListOrgRepositoryAdvisories */
final class ListOrgRepositoryAdvisoriesTest extends AsyncTestCase
{
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
        $browser->request('GET', '/orgs/generated/security-advisories?after=generated&before=generated&direction=generated&per_page=8&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListOrgRepositoryAdvisories::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated';
            $data['before']    = 'generated';
            $data['after']     = 'generated';
            $data['state']     = 'generated';
            $data['direction'] = 'generated';
            $data['sort']      = 'generated';
            $data['per_page']  = 8;

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
        $browser->request('GET', '/orgs/generated/security-advisories?after=generated&before=generated&direction=generated&per_page=8&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->securityAdvisories()->listOrgRepositoryAdvisories('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 8);
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
        $browser->request('GET', '/orgs/generated/security-advisories?after=generated&before=generated&direction=generated&per_page=8&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListOrgRepositoryAdvisories::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated';
            $data['before']    = 'generated';
            $data['after']     = 'generated';
            $data['state']     = 'generated';
            $data['direction'] = 'generated';
            $data['sort']      = 'generated';
            $data['per_page']  = 8;

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
        $browser->request('GET', '/orgs/generated/security-advisories?after=generated&before=generated&direction=generated&per_page=8&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->securityAdvisories()->listOrgRepositoryAdvisories('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 8);
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
        $browser->request('GET', '/orgs/generated/security-advisories?after=generated&before=generated&direction=generated&per_page=8&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListOrgRepositoryAdvisories::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated';
            $data['before']    = 'generated';
            $data['after']     = 'generated';
            $data['state']     = 'generated';
            $data['direction'] = 'generated';
            $data['sort']      = 'generated';
            $data['per_page']  = 8;

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
        $browser->request('GET', '/orgs/generated/security-advisories?after=generated&before=generated&direction=generated&per_page=8&sort=generated&state=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->securityAdvisories()->listOrgRepositoryAdvisories('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 8);
    }
}
