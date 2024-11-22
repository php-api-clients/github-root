<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Client;
use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin\UpdateAuditLogStream */
final class UpdateAuditLogStreamTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\GetAuditLogStreamConfig::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/enterprises/generated/audit-log/streams/9', Argument::type('array'), json_encode(json_decode(Schema\EnterpriseAdmin\UpdateAuditLogStream\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\UpdateAuditLogStream::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise'] = 'generated';
            $data['stream_id']  = 9;

            return $data;
        })(json_decode(Schema\EnterpriseAdmin\UpdateAuditLogStream\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\GetAuditLogStreamConfig::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/enterprises/generated/audit-log/streams/9', Argument::type('array'), json_encode(json_decode(Schema\EnterpriseAdmin\UpdateAuditLogStream\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->updateAuditLogStream('generated', 9, json_decode(Schema\EnterpriseAdmin\UpdateAuditLogStream\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_422_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/enterprises/generated/audit-log/streams/9', Argument::type('array'), json_encode(json_decode(Schema\EnterpriseAdmin\UpdateAuditLogStream\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\EnterpriseAdmin\UpdateAuditLogStream::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise'] = 'generated';
            $data['stream_id']  = 9;

            return $data;
        })(json_decode(Schema\EnterpriseAdmin\UpdateAuditLogStream\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_422_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/enterprises/generated/audit-log/streams/9', Argument::type('array'), json_encode(json_decode(Schema\EnterpriseAdmin\UpdateAuditLogStream\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->enterpriseAdmin()->updateAuditLogStream('generated', 9, json_decode(Schema\EnterpriseAdmin\UpdateAuditLogStream\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }
}
