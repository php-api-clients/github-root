<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Internal\Operation\Repos;

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

/** @covers \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Repos\CreateEnterpriseRuleset */
final class CreateEnterpriseRulesetTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_201_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\RepositoryRuleset::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/enterprises/generated/rulesets', Argument::type('array'), json_encode(json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Repos\CreateEnterpriseRuleset::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise'] = 'generated';

            return $data;
        })(json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_201_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\RepositoryRuleset::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/enterprises/generated/rulesets', Argument::type('array'), json_encode(json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->createEnterpriseRuleset('generated', json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/enterprises/generated/rulesets', Argument::type('array'), json_encode(json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Repos\CreateEnterpriseRuleset::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise'] = 'generated';

            return $data;
        })(json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/enterprises/generated/rulesets', Argument::type('array'), json_encode(json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->createEnterpriseRuleset('generated', json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
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
        $browser->request('POST', '/enterprises/generated/rulesets', Argument::type('array'), json_encode(json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Repos\CreateEnterpriseRuleset::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise'] = 'generated';

            return $data;
        })(json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
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
        $browser->request('POST', '/enterprises/generated/rulesets', Argument::type('array'), json_encode(json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->createEnterpriseRuleset('generated', json_decode(Schema\Repos\CreateEnterpriseRuleset\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }
}
