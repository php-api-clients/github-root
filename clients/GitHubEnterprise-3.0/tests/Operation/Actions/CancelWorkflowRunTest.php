<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Operation\Actions\CancelWorkflowRun;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class CancelWorkflowRunTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_202_responseContentType_application_json(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], Schema\Operation\Actions\CancelWorkflowRun\Response\Applicationjson\H202::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated_null/generated_null/actions/runs/13/cancel', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(CancelWorkflowRun::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']  = 'generated_null';
            $data['repo']   = 'generated_null';
            $data['run_id'] = 13;

            return $data;
        })([]));
    }
}
