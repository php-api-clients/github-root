<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Client;
use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin\PostManageRunConfigApply */
final class PostManageRunConfigApplyTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/manage/v1/config/apply', Argument::type('array'), json_encode(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\PostManageRunConfigApply::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/manage/v1/config/apply', Argument::type('array'), json_encode(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->postManageRunConfigApply(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_400_requestContentType_application_json_empty(): void
    {
        $response = new Response(400, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/manage/v1/config/apply', Argument::type('array'), json_encode(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\PostManageRunConfigApply::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_400_requestContentType_application_json_empty(): void
    {
        $response = new Response(400, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/manage/v1/config/apply', Argument::type('array'), json_encode(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->postManageRunConfigApply(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
        self::assertArrayHasKey('code', $result);
        self::assertSame(400, $result['code']);
    }

    /** @test */
    public function call_httpCode_401_requestContentType_application_json_empty(): void
    {
        $response = new Response(401, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/manage/v1/config/apply', Argument::type('array'), json_encode(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\PostManageRunConfigApply::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_401_requestContentType_application_json_empty(): void
    {
        $response = new Response(401, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/manage/v1/config/apply', Argument::type('array'), json_encode(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->postManageRunConfigApply(json_decode(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
        self::assertArrayHasKey('code', $result);
        self::assertSame(401, $result['code']);
    }
}
