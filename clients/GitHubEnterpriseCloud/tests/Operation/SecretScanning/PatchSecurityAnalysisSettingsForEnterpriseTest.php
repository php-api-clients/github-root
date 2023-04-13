<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHubEnterpriseCloud\Operation\SecretScanning;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class PatchSecurityAnalysisSettingsForEnterpriseTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_404_requestContentType_application_json_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(404, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/enterprises/generated_null/code_security_and_analysis', \Prophecy\Argument::type('array'), Schema\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHubEnterpriseCloud\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHubEnterpriseCloud\Operation\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise::OPERATION_MATCH, (static function (array $data) : array {
            $data['enterprise'] = 'generated_null';
            return $data;
        })(json_decode(Schema\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
