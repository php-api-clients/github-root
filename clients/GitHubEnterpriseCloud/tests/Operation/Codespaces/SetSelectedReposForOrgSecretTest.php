<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Operation\Codespaces;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class SetSelectedReposForOrgSecretTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_404_requestContentType_application_json_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(404, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated_null/codespaces/secrets/generated_null/repositories', \Prophecy\Argument::type('array'), Schema\Codespaces\SetSelectedReposForOrgSecret\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubEnterpriseCloud\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubEnterpriseCloud\Operation\Codespaces\SetSelectedReposForOrgSecret::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['secret_name'] = 'generated_null';
            return $data;
        })(json_decode(Schema\Codespaces\SetSelectedReposForOrgSecret\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
