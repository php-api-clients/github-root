<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Internal\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions\ListWorkflowRuns */
final class ListWorkflowRunsTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_200_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/actions/workflows//runs?actor=generated&branch=generated&event=generated&status=generated&created=1970-01-01T00:00:00+00:00&per_page=8&page=1&exclude_pull_requests=', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Actions\ListWorkflowRuns::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']                 = 'generated';
            $data['repo']                  = 'generated';
            $data['workflow_id']           = null;
            $data['actor']                 = 'generated';
            $data['branch']                = 'generated';
            $data['event']                 = 'generated';
            $data['status']                = 'generated';
            $data['created']               = '1970-01-01T00:00:00+00:00';
            $data['per_page']              = 8;
            $data['page']                  = 1;
            $data['exclude_pull_requests'] = false;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_200_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/actions/workflows//runs?actor=generated&branch=generated&event=generated&status=generated&created=1970-01-01T00:00:00+00:00&per_page=8&page=1&exclude_pull_requests=', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->actions()->listWorkflowRuns('generated', 'generated', null, 'generated', 'generated', 'generated', 'generated', '1970-01-01T00:00:00+00:00', 8, 1, false);
    }
}
