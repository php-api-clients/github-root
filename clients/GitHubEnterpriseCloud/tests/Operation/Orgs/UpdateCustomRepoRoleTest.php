<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Operation\Orgs;

use ApiClients\Client\GitHubEnterpriseCloud\Client;
use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Operation\Orgs\UpdateCustomRepoRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class UpdateCustomRepoRoleTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\OrganizationCustomRepositoryRole::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/orgs/generated_null/custom-repository-roles/13', Argument::type('array'), Schema\OrganizationCustomRepositoryRoleUpdateSchema::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateCustomRepoRole::OPERATION_MATCH, (static function (array $data): array {
            $data['org']     = 'generated_null';
            $data['role_id'] = 13;

            return $data;
        })(json_decode(Schema\OrganizationCustomRepositoryRoleUpdateSchema::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_422_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/orgs/generated_null/custom-repository-roles/13', Argument::type('array'), Schema\OrganizationCustomRepositoryRoleUpdateSchema::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateCustomRepoRole::OPERATION_MATCH, (static function (array $data): array {
            $data['org']     = 'generated_null';
            $data['role_id'] = 13;

            return $data;
        })(json_decode(Schema\OrganizationCustomRepositoryRoleUpdateSchema::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_404_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/orgs/generated_null/custom-repository-roles/13', Argument::type('array'), Schema\OrganizationCustomRepositoryRoleUpdateSchema::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateCustomRepoRole::OPERATION_MATCH, (static function (array $data): array {
            $data['org']     = 'generated_null';
            $data['role_id'] = 13;

            return $data;
        })(json_decode(Schema\OrganizationCustomRepositoryRoleUpdateSchema::SCHEMA_EXAMPLE_DATA, true)));
    }
}
