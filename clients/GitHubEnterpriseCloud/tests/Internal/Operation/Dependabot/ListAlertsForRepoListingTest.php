<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Internal\Operation\Dependabot;

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

/** @covers \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Dependabot\ListAlertsForRepoListing */
final class ListAlertsForRepoListingTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_400_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Dependabot\ListAlertsForRepoListing::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']           = 'generated';
            $data['repo']            = 'generated';
            $data['state']           = 'generated';
            $data['severity']        = 'generated';
            $data['ecosystem']       = 'generated';
            $data['package']         = 'generated';
            $data['manifest']        = 'generated';
            $data['epss_percentage'] = 'generated';
            $data['scope']           = 'generated';
            $data['before']          = 'generated';
            $data['after']           = 'generated';
            $data['last']            = 4;
            $data['sort']            = 'generated';
            $data['direction']       = 'generated';
            $data['page']            = 1;
            $data['per_page']        = 8;
            $data['first']           = 5;

            return $data;
        })([]));
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function operations_httpCode_400_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->dependabot()->listAlertsForRepoListing('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 4, 'generated', 'generated', 1, 8, 5);
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function call_httpCode_400_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Dependabot\ListAlertsForRepoListing::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']           = 'generated';
            $data['repo']            = 'generated';
            $data['state']           = 'generated';
            $data['severity']        = 'generated';
            $data['ecosystem']       = 'generated';
            $data['package']         = 'generated';
            $data['manifest']        = 'generated';
            $data['epss_percentage'] = 'generated';
            $data['scope']           = 'generated';
            $data['before']          = 'generated';
            $data['after']           = 'generated';
            $data['last']            = 4;
            $data['sort']            = 'generated';
            $data['direction']       = 'generated';
            $data['page']            = 1;
            $data['per_page']        = 8;
            $data['first']           = 5;

            return $data;
        })([]));
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function operations_httpCode_400_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->dependabot()->listAlertsForRepoListing('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 4, 'generated', 'generated', 1, 8, 5);
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function call_httpCode_403_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Dependabot\ListAlertsForRepoListing::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']           = 'generated';
            $data['repo']            = 'generated';
            $data['state']           = 'generated';
            $data['severity']        = 'generated';
            $data['ecosystem']       = 'generated';
            $data['package']         = 'generated';
            $data['manifest']        = 'generated';
            $data['epss_percentage'] = 'generated';
            $data['scope']           = 'generated';
            $data['before']          = 'generated';
            $data['after']           = 'generated';
            $data['last']            = 4;
            $data['sort']            = 'generated';
            $data['direction']       = 'generated';
            $data['page']            = 1;
            $data['per_page']        = 8;
            $data['first']           = 5;

            return $data;
        })([]));
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function operations_httpCode_403_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->dependabot()->listAlertsForRepoListing('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 4, 'generated', 'generated', 1, 8, 5);
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function call_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Dependabot\ListAlertsForRepoListing::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']           = 'generated';
            $data['repo']            = 'generated';
            $data['state']           = 'generated';
            $data['severity']        = 'generated';
            $data['ecosystem']       = 'generated';
            $data['package']         = 'generated';
            $data['manifest']        = 'generated';
            $data['epss_percentage'] = 'generated';
            $data['scope']           = 'generated';
            $data['before']          = 'generated';
            $data['after']           = 'generated';
            $data['last']            = 4;
            $data['sort']            = 'generated';
            $data['direction']       = 'generated';
            $data['page']            = 1;
            $data['per_page']        = 8;
            $data['first']           = 5;

            return $data;
        })([]));
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function operations_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->dependabot()->listAlertsForRepoListing('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 4, 'generated', 'generated', 1, 8, 5);
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function call_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationErrorSimple::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ValidationErrorSimple::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Dependabot\ListAlertsForRepoListing::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']           = 'generated';
            $data['repo']            = 'generated';
            $data['state']           = 'generated';
            $data['severity']        = 'generated';
            $data['ecosystem']       = 'generated';
            $data['package']         = 'generated';
            $data['manifest']        = 'generated';
            $data['epss_percentage'] = 'generated';
            $data['scope']           = 'generated';
            $data['before']          = 'generated';
            $data['after']           = 'generated';
            $data['last']            = 4;
            $data['sort']            = 'generated';
            $data['direction']       = 'generated';
            $data['page']            = 1;
            $data['per_page']        = 8;
            $data['first']           = 5;

            return $data;
        })([]));
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function operations_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationErrorSimple::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ValidationErrorSimple::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->dependabot()->listAlertsForRepoListing('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 4, 'generated', 'generated', 1, 8, 5);
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function call_httpCode_304_empty(): void
    {
        $response = new Response(304, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Dependabot\ListAlertsForRepoListing::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']           = 'generated';
            $data['repo']            = 'generated';
            $data['state']           = 'generated';
            $data['severity']        = 'generated';
            $data['ecosystem']       = 'generated';
            $data['package']         = 'generated';
            $data['manifest']        = 'generated';
            $data['epss_percentage'] = 'generated';
            $data['scope']           = 'generated';
            $data['before']          = 'generated';
            $data['after']           = 'generated';
            $data['last']            = 4;
            $data['sort']            = 'generated';
            $data['direction']       = 'generated';
            $data['page']            = 1;
            $data['per_page']        = 8;
            $data['first']           = 5;

            return $data;
        })([]));
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function operations_httpCode_304_empty(): void
    {
        $response = new Response(304, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/dependabot/alerts?state=generated&severity=generated&ecosystem=generated&package=generated&manifest=generated&epss_percentage=generated&scope=generated&before=generated&after=generated&last=4&sort=generated&direction=generated&page=1&per_page=8&first=5', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->dependabot()->listAlertsForRepoListing('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 4, 'generated', 'generated', 1, 8, 5);
        self::assertArrayHasKey('code', $result);
        self::assertSame(304, $result['code']);
        foreach ($result as $item) {
        }
    }
}
