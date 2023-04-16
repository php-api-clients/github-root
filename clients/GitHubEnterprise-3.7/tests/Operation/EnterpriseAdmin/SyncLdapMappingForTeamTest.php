<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\SyncLdapMappingForTeam;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class SyncLdapMappingForTeamTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_responseContentType_application_json(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], Schema\Operation\EnterpriseAdmin\SyncLdapMappingForTeam\Response\Applicationjson\H201::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/admin/ldap/teams/13/sync', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(SyncLdapMappingForTeam::OPERATION_MATCH, (static function (array $data): array {
            $data['team_id'] = 13;

            return $data;
        })([]));
    }
}
