<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\Teams;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Operation\Teams\UpdateInOrg;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class UpdateInOrgTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], Schema\TeamFull::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/orgs/generated_null/teams/generated_null', Argument::type('array'), Schema\Teams\UpdateInOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateInOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated_null';
            $data['team_slug'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Teams\UpdateInOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
