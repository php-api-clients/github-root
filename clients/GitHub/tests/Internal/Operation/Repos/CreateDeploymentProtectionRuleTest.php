<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Internal\Operation\Repos\CreateDeploymentProtectionRule */
final class CreateDeploymentProtectionRuleTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_201_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\DeploymentProtectionRule::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/environments/generated/deployment_protection_rules', Argument::type('array'), json_encode(json_decode(Schema\Repos\CreateDeploymentProtectionRule\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Repos\CreateDeploymentProtectionRule::OPERATION_MATCH, (static function (array $data): array {
            $data['environment_name'] = 'generated';
            $data['repo']             = 'generated';
            $data['owner']            = 'generated';

            return $data;
        })(json_decode(Schema\Repos\CreateDeploymentProtectionRule\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_201_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\DeploymentProtectionRule::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/environments/generated/deployment_protection_rules', Argument::type('array'), json_encode(json_decode(Schema\Repos\CreateDeploymentProtectionRule\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->createDeploymentProtectionRule('generated', 'generated', 'generated', json_decode(Schema\Repos\CreateDeploymentProtectionRule\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }
}
