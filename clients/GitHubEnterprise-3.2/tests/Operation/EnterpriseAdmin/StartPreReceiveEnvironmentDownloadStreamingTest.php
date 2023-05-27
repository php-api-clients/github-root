<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Async\await;
use function React\Promise\resolve;

final class StartPreReceiveEnvironmentDownloadStreamingTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_202_responseContentType_application_json_zero(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], Schema\PreReceiveEnvironmentDownloadStatus::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/admin/pre-receive-environments/26/downloads', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming::OPERATION_MATCH, (static function (array $data): array {
            $data['pre_receive_environment_id'] = 26;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_202_responseContentType_application_json_zero(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], Schema\PreReceiveEnvironmentDownloadStatus::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/admin/pre-receive-environments/26/downloads', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->startPreReceiveEnvironmentDownloadStreaming(26));
    }

    /**
     * @test
     */
    public function call_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\ApplicationJson\UnprocessableEntity\Application\Json::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\Operations\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\ApplicationJson\UnprocessableEntity\Application\Json::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/admin/pre-receive-environments/26/downloads', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming::OPERATION_MATCH, (static function (array $data): array {
            $data['pre_receive_environment_id'] = 26;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\ApplicationJson\UnprocessableEntity\Application\Json::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\Operations\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\ApplicationJson\UnprocessableEntity\Application\Json::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/admin/pre-receive-environments/26/downloads', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->startPreReceiveEnvironmentDownloadStreaming(26));
    }
}
