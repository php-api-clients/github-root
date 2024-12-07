<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\CodeScanning;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error\BasicError;
use ApiClients\Client\GitHub\Error\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable;
use ApiClients\Client\GitHub\Internal\Operation\CodeScanning\ListAlertsForOrg;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Internal\Operation\CodeScanning\ListAlertsForOrg */
final class ListAlertsForOrgTest extends AsyncTestCase
{
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
        $browser->request('GET', '/orgs/generated/code-scanning/alerts?after=generated&before=generated&direction=generated&page=1&per_page=8&severity=generated&sort=generated&state=generated&tool_guid=generated&tool_name=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListAlertsForOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated';
            $data['tool_name'] = 'generated';
            $data['tool_guid'] = 'generated';
            $data['before']    = 'generated';
            $data['after']     = 'generated';
            $data['state']     = 'generated';
            $data['severity']  = 'generated';
            $data['page']      = 1;
            $data['per_page']  = 8;
            $data['direction'] = 'generated';
            $data['sort']      = 'generated';

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
        $browser->request('GET', '/orgs/generated/code-scanning/alerts?after=generated&before=generated&direction=generated&page=1&per_page=8&severity=generated&sort=generated&state=generated&tool_guid=generated&tool_name=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codeScanning()->listAlertsForOrg('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 1, 8, 'generated', 'generated');
    }

    /** @test */
    public function call_httpCode_503_responseContentType_application_json_zero(): void
    {
        self::expectException(ServiceUnavailable::class);
        $response = new Response(503, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/code-scanning/alerts?after=generated&before=generated&direction=generated&page=1&per_page=8&severity=generated&sort=generated&state=generated&tool_guid=generated&tool_name=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListAlertsForOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated';
            $data['tool_name'] = 'generated';
            $data['tool_guid'] = 'generated';
            $data['before']    = 'generated';
            $data['after']     = 'generated';
            $data['state']     = 'generated';
            $data['severity']  = 'generated';
            $data['page']      = 1;
            $data['per_page']  = 8;
            $data['direction'] = 'generated';
            $data['sort']      = 'generated';

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_503_responseContentType_application_json_zero(): void
    {
        self::expectException(ServiceUnavailable::class);
        $response = new Response(503, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/code-scanning/alerts?after=generated&before=generated&direction=generated&page=1&per_page=8&severity=generated&sort=generated&state=generated&tool_guid=generated&tool_name=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codeScanning()->listAlertsForOrg('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 1, 8, 'generated', 'generated');
    }
}
