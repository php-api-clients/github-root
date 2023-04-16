<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Operation\SecretScanning;

use ApiClients\Client\GitHubEnterpriseCloud\Client;
use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Operation\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class PatchSecurityAnalysisSettingsForEnterpriseTest extends AsyncTestCase
{
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
        $browser->request('PATCH', '/enterprises/generated_null/code_security_and_analysis', Argument::type('array'), Schema\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(PatchSecurityAnalysisSettingsForEnterprise::OPERATION_MATCH, (static function (array $data): array {
            $data['enterprise'] = 'generated_null';

            return $data;
        })(json_decode(Schema\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
