<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class ListRepoAccessToSelfHostedRunnerGroupInOrgTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\Applicationjson\H200::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/actions/runner-groups/13/repositories?page=13&per_page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListRepoAccessToSelfHostedRunnerGroupInOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']             = 'generated_null';
            $data['runner_group_id'] = 13;
            $data['page']            = 13;
            $data['per_page']        = 13;

            return $data;
        })([]));
    }
}
