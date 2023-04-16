<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\ChunkSize;
final class ListWorkflowRunsTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), Schema\Operation\Actions\ListWorkflowRuns\Response\Applicationjson\H200::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/actions/workflows//runs?actor=generated_null&branch=generated_null&event=generated_null&status=generated_null&created=1970-01-01T00:00:00+00:00&check_suite_id=13&head_sha=generated_null&per_page=13&page=13&exclude_pull_requests=', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubEnterprise\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubEnterprise\Operation\Actions\ListWorkflowRuns::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['workflow_id'] = null;
            $data['actor'] = 'generated_null';
            $data['branch'] = 'generated_null';
            $data['event'] = 'generated_null';
            $data['status'] = 'generated_null';
            $data['created'] = '1970-01-01T00:00:00+00:00';
            $data['check_suite_id'] = 13;
            $data['head_sha'] = 'generated_null';
            $data['per_page'] = 13;
            $data['page'] = 13;
            $data['exclude_pull_requests'] = false;
            return $data;
        })(array()));
    }
}
