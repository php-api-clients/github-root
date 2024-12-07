<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\SecurityAdvisories;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error\BasicError;
use ApiClients\Client\GitHub\Error\ValidationErrorSimple;
use ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories\ListGlobalAdvisories;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories\ListGlobalAdvisories */
final class ListGlobalAdvisoriesTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_429_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(429, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/advisories?affects=generated&after=generated&before=generated&cve_id=generated&cwes=generated&direction=generated&ecosystem=generated&epss_percentage=generated&epss_percentile=generated&ghsa_id=generated&is_withdrawn=0&modified=generated&per_page=8&published=generated&severity=generated&sort=generated&type=generated&updated=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListGlobalAdvisories::OPERATION_MATCH, (static function (array $data): array {
            $data['ghsa_id']         = 'generated';
            $data['cve_id']          = 'generated';
            $data['ecosystem']       = 'generated';
            $data['severity']        = 'generated';
            $data['cwes']            = 'generated';
            $data['is_withdrawn']    = false;
            $data['affects']         = 'generated';
            $data['published']       = 'generated';
            $data['updated']         = 'generated';
            $data['modified']        = 'generated';
            $data['epss_percentage'] = 'generated';
            $data['epss_percentile'] = 'generated';
            $data['before']          = 'generated';
            $data['after']           = 'generated';
            $data['type']            = 'generated';
            $data['direction']       = 'generated';
            $data['per_page']        = 8;
            $data['sort']            = 'generated';

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_429_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(429, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/advisories?affects=generated&after=generated&before=generated&cve_id=generated&cwes=generated&direction=generated&ecosystem=generated&epss_percentage=generated&epss_percentile=generated&ghsa_id=generated&is_withdrawn=0&modified=generated&per_page=8&published=generated&severity=generated&sort=generated&type=generated&updated=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->securityAdvisories()->listGlobalAdvisories('generated', 'generated', 'generated', 'generated', 'generated', false, 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 8, 'generated');
    }

    /** @test */
    public function call_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ValidationErrorSimple::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\ValidationErrorSimple::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/advisories?affects=generated&after=generated&before=generated&cve_id=generated&cwes=generated&direction=generated&ecosystem=generated&epss_percentage=generated&epss_percentile=generated&ghsa_id=generated&is_withdrawn=0&modified=generated&per_page=8&published=generated&severity=generated&sort=generated&type=generated&updated=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(ListGlobalAdvisories::OPERATION_MATCH, (static function (array $data): array {
            $data['ghsa_id']         = 'generated';
            $data['cve_id']          = 'generated';
            $data['ecosystem']       = 'generated';
            $data['severity']        = 'generated';
            $data['cwes']            = 'generated';
            $data['is_withdrawn']    = false;
            $data['affects']         = 'generated';
            $data['published']       = 'generated';
            $data['updated']         = 'generated';
            $data['modified']        = 'generated';
            $data['epss_percentage'] = 'generated';
            $data['epss_percentile'] = 'generated';
            $data['before']          = 'generated';
            $data['after']           = 'generated';
            $data['type']            = 'generated';
            $data['direction']       = 'generated';
            $data['per_page']        = 8;
            $data['sort']            = 'generated';

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ValidationErrorSimple::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\ValidationErrorSimple::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/advisories?affects=generated&after=generated&before=generated&cve_id=generated&cwes=generated&direction=generated&ecosystem=generated&epss_percentage=generated&epss_percentile=generated&ghsa_id=generated&is_withdrawn=0&modified=generated&per_page=8&published=generated&severity=generated&sort=generated&type=generated&updated=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->securityAdvisories()->listGlobalAdvisories('generated', 'generated', 'generated', 'generated', 'generated', false, 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 8, 'generated');
    }
}
