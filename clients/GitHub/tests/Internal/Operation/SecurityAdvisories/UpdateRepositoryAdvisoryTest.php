<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\SecurityAdvisories;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error\BasicError;
use ApiClients\Client\GitHub\Error\ValidationError;
use ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories\UpdateRepositoryAdvisory;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisoryUpdate;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories\UpdateRepositoryAdvisory */
final class UpdateRepositoryAdvisoryTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(RepositoryAdvisory::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/security-advisories/generated', Argument::type('array'), json_encode(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(UpdateRepositoryAdvisory::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']   = 'generated';
            $data['repo']    = 'generated';
            $data['ghsa_id'] = 'generated';

            return $data;
        })(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(RepositoryAdvisory::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/security-advisories/generated', Argument::type('array'), json_encode(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->securityAdvisories()->updateRepositoryAdvisory('generated', 'generated', 'generated', json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_403_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/security-advisories/generated', Argument::type('array'), json_encode(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(UpdateRepositoryAdvisory::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']   = 'generated';
            $data['repo']    = 'generated';
            $data['ghsa_id'] = 'generated';

            return $data;
        })(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_403_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/security-advisories/generated', Argument::type('array'), json_encode(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->securityAdvisories()->updateRepositoryAdvisory('generated', 'generated', 'generated', json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/security-advisories/generated', Argument::type('array'), json_encode(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(UpdateRepositoryAdvisory::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']   = 'generated';
            $data['repo']    = 'generated';
            $data['ghsa_id'] = 'generated';

            return $data;
        })(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/security-advisories/generated', Argument::type('array'), json_encode(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->securityAdvisories()->updateRepositoryAdvisory('generated', 'generated', 'generated', json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_422_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\ValidationError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/security-advisories/generated', Argument::type('array'), json_encode(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(UpdateRepositoryAdvisory::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']   = 'generated';
            $data['repo']    = 'generated';
            $data['ghsa_id'] = 'generated';

            return $data;
        })(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_422_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(\ApiClients\Client\GitHub\Schema\ValidationError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/security-advisories/generated', Argument::type('array'), json_encode(json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->securityAdvisories()->updateRepositoryAdvisory('generated', 'generated', 'generated', json_decode(RepositoryAdvisoryUpdate::SCHEMA_EXAMPLE_DATA, true));
    }
}
