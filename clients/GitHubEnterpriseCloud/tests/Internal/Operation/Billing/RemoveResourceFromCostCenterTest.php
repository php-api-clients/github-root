<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Internal\Operation\Billing;

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

/** @covers \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Billing\RemoveResourceFromCostCenter */
final class RemoveResourceFromCostCenterTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\Billing\RemoveResourceFromCostCenter\Response\ApplicationJson\Ok\Application\Json::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Billing\RemoveResourceFromCostCenter::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise']     = 'generated';
            $data['cost_center_id'] = 'generated';

            return $data;
        })(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\Billing\RemoveResourceFromCostCenter\Response\ApplicationJson\Ok\Application\Json::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->billing()->removeResourceFromCostCenter('generated', 'generated', json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_400_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Billing\RemoveResourceFromCostCenter::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise']     = 'generated';
            $data['cost_center_id'] = 'generated';

            return $data;
        })(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_400_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->billing()->removeResourceFromCostCenter('generated', 'generated', json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_400_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Billing\RemoveResourceFromCostCenter::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise']     = 'generated';
            $data['cost_center_id'] = 'generated';

            return $data;
        })(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_400_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->billing()->removeResourceFromCostCenter('generated', 'generated', json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_403_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Billing\RemoveResourceFromCostCenter::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise']     = 'generated';
            $data['cost_center_id'] = 'generated';

            return $data;
        })(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_403_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->billing()->removeResourceFromCostCenter('generated', 'generated', json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_500_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Billing\RemoveResourceFromCostCenter::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise']     = 'generated';
            $data['cost_center_id'] = 'generated';

            return $data;
        })(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_500_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->billing()->removeResourceFromCostCenter('generated', 'generated', json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_503_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class);
        $response = new Response(503, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Billing\RemoveResourceFromCostCenter::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise']     = 'generated';
            $data['cost_center_id'] = 'generated';

            return $data;
        })(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_503_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class);
        $response = new Response(503, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/enterprises/generated/settings/billing/cost-centers/generated/resource', Argument::type('array'), json_encode(json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->billing()->removeResourceFromCostCenter('generated', 'generated', json_decode(Schema\Billing\RemoveResourceFromCostCenter\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }
}
