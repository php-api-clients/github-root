<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Operation\Meta;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class GetOctocatTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t200tac1f3c866954483c160c30867c3e5bd9()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/octocat-stream'), Schema\Operation\Meta\GetOctocat\Response\ApplicationoctocatStream\H200::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/octocat?s=generated_null', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubEnterpriseCloud\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubEnterpriseCloud\Operation\Meta\GetOctocat::OPERATION_MATCH, array('s' => 'generated_null'));
    }
}
