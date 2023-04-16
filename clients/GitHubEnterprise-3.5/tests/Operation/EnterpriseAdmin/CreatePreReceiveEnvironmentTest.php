<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class CreatePreReceiveEnvironmentTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], Schema\PreReceiveEnvironment::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/admin/pre-receive-environments', Argument::type('array'), Schema\EnterpriseAdmin\CreatePreReceiveEnvironment\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(CreatePreReceiveEnvironment::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\EnterpriseAdmin\CreatePreReceiveEnvironment\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
