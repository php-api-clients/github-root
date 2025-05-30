<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Internal\Operation\SecretScanning;

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

/** @covers \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\SecretScanning\ListAlertsForOrgListing */
final class ListAlertsForOrgListingTest extends AsyncTestCase
{
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
        $browser->request('GET', '/orgs/generated/secret-scanning/alerts?state=generated&secret_type=generated&resolution=generated&before=generated&after=generated&validity=generated&sort=generated&direction=generated&page=1&per_page=8&is_publicly_leaked=&is_multi_repo=', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\SecretScanning\ListAlertsForOrgListing::OPERATION_MATCH, (static function (array $data): array {
            $data['org']                = 'generated';
            $data['state']              = 'generated';
            $data['secret_type']        = 'generated';
            $data['resolution']         = 'generated';
            $data['before']             = 'generated';
            $data['after']              = 'generated';
            $data['validity']           = 'generated';
            $data['sort']               = 'generated';
            $data['direction']          = 'generated';
            $data['page']               = 1;
            $data['per_page']           = 8;
            $data['is_publicly_leaked'] = false;
            $data['is_multi_repo']      = false;

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
        $browser->request('GET', '/orgs/generated/secret-scanning/alerts?state=generated&secret_type=generated&resolution=generated&before=generated&after=generated&validity=generated&sort=generated&direction=generated&page=1&per_page=8&is_publicly_leaked=&is_multi_repo=', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->secretScanning()->listAlertsForOrgListing('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 1, 8, false, false);
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function call_httpCode_503_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class);
        $response = new Response(503, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/secret-scanning/alerts?state=generated&secret_type=generated&resolution=generated&before=generated&after=generated&validity=generated&sort=generated&direction=generated&page=1&per_page=8&is_publicly_leaked=&is_multi_repo=', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\SecretScanning\ListAlertsForOrgListing::OPERATION_MATCH, (static function (array $data): array {
            $data['org']                = 'generated';
            $data['state']              = 'generated';
            $data['secret_type']        = 'generated';
            $data['resolution']         = 'generated';
            $data['before']             = 'generated';
            $data['after']              = 'generated';
            $data['validity']           = 'generated';
            $data['sort']               = 'generated';
            $data['direction']          = 'generated';
            $data['page']               = 1;
            $data['per_page']           = 8;
            $data['is_publicly_leaked'] = false;
            $data['is_multi_repo']      = false;

            return $data;
        })([]));
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function operations_httpCode_503_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class);
        $response = new Response(503, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/secret-scanning/alerts?state=generated&secret_type=generated&resolution=generated&before=generated&after=generated&validity=generated&sort=generated&direction=generated&page=1&per_page=8&is_publicly_leaked=&is_multi_repo=', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->secretScanning()->listAlertsForOrgListing('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 1, 8, false, false);
        foreach ($result as $item) {
        }
    }
}
