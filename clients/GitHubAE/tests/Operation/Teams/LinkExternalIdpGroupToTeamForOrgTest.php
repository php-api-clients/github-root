<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubAE\Operation\Teams;

use ApiClients\Client\GitHubAE\Client;
use ApiClients\Client\GitHubAE\Operation\Teams\LinkExternalIdpGroupToTeamForOrg;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class LinkExternalIdpGroupToTeamForOrgTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\ExternalGroup::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/orgs/generated_null/teams/generated_null/external-groups', Argument::type('array'), Schema\Teams\LinkExternalIdpGroupToTeamForOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(LinkExternalIdpGroupToTeamForOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated_null';
            $data['team_slug'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Teams\LinkExternalIdpGroupToTeamForOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
