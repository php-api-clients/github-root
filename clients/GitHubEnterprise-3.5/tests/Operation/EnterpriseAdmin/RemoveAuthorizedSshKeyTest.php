<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Async\await;
use function React\Promise\resolve;

final class RemoveAuthorizedSshKeyTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_401_requestContentType_application_x_www_form_urlencoded_empty(): void
    {
        $response = new Response(401, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/setup/api/settings/authorized-keys', Argument::type('array'), Schema\EnterpriseAdmin\RemoveAuthorizedSshKey\Request\ApplicationXWwwFormUrlencoded::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\EnterpriseAdmin\RemoveAuthorizedSshKey::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\EnterpriseAdmin\RemoveAuthorizedSshKey\Request\ApplicationXWwwFormUrlencoded::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_401_requestContentType_application_x_www_form_urlencoded_empty(): void
    {
        $response = new Response(401, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/setup/api/settings/authorized-keys', Argument::type('array'), Schema\EnterpriseAdmin\RemoveAuthorizedSshKey\Request\ApplicationXWwwFormUrlencoded::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->enterpriseAdmin()->removeAuthorizedSshKey(json_decode(Schema\EnterpriseAdmin\RemoveAuthorizedSshKey\Request\ApplicationXWwwFormUrlencoded::SCHEMA_EXAMPLE_DATA, true)));
        self::assertArrayHasKey('code', $result);
        self::assertSame(401, $result['code']);
    }
}
