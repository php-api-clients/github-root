<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class DeletePreReceiveEnvironmentTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_422_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/admin/pre-receive-environments/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(DeletePreReceiveEnvironment::OPERATION_MATCH, (static function (array $data): array {
            $data['pre_receive_environment_id'] = 13;

            return $data;
        })([]));
    }
}
