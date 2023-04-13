<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\CodeScanning;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class ListAlertsForEnterpriseTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\CodeScanningOrganizationAlertItems::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/enterprises/generated_null/code-scanning/alerts?tool_name=generated_null&tool_guid=&before=generated_null&after=generated_null&state=generated_null&page=13&per_page=13&direction=generated_null&sort=generated_null', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubEnterprise\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubEnterprise\Operation\CodeScanning\ListAlertsForEnterprise::OPERATION_MATCH, (static function (array $data) : array {
            $data['enterprise'] = 'generated_null';
            $data['tool_name'] = 'generated_null';
            $data['tool_guid'] = null;
            $data['before'] = 'generated_null';
            $data['after'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['page'] = 13;
            $data['per_page'] = 13;
            $data['direction'] = 'generated_null';
            $data['sort'] = 'generated_null';
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_404_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(404, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/enterprises/generated_null/code-scanning/alerts?tool_name=generated_null&tool_guid=&before=generated_null&after=generated_null&state=generated_null&page=13&per_page=13&direction=generated_null&sort=generated_null', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubEnterprise\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubEnterprise\Operation\CodeScanning\ListAlertsForEnterprise::OPERATION_MATCH, (static function (array $data) : array {
            $data['enterprise'] = 'generated_null';
            $data['tool_name'] = 'generated_null';
            $data['tool_guid'] = null;
            $data['before'] = 'generated_null';
            $data['after'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['page'] = 13;
            $data['per_page'] = 13;
            $data['direction'] = 'generated_null';
            $data['sort'] = 'generated_null';
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_503_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class);
        $response = new \React\Http\Message\Response(503, array('Content-Type' => 'application/json'), Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/enterprises/generated_null/code-scanning/alerts?tool_name=generated_null&tool_guid=&before=generated_null&after=generated_null&state=generated_null&page=13&per_page=13&direction=generated_null&sort=generated_null', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubEnterprise\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubEnterprise\Operation\CodeScanning\ListAlertsForEnterprise::OPERATION_MATCH, (static function (array $data) : array {
            $data['enterprise'] = 'generated_null';
            $data['tool_name'] = 'generated_null';
            $data['tool_guid'] = null;
            $data['before'] = 'generated_null';
            $data['after'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['page'] = 13;
            $data['per_page'] = 13;
            $data['direction'] = 'generated_null';
            $data['sort'] = 'generated_null';
            return $data;
        })(array()));
    }
}
