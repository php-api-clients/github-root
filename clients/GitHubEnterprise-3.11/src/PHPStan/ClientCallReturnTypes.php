<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\PHPStan;

use ApiClients\Client\GitHubEnterprise\Client;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\PrettyPrinter\Standard;
use PHPStan\Analyser\Scope;
use PHPStan\PhpDoc\TypeStringResolver;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Type\DynamicMethodReturnTypeExtension;
use PHPStan\Type\Type;

use function count;
use function substr;

final readonly class ClientCallReturnTypes implements DynamicMethodReturnTypeExtension
{
    private Standard $printer;

    public function __construct(private TypeStringResolver $typeResolver)
    {
        $this->printer = new Standard();
    }

    public function getClass(): string
    {
        return Client::class;
    }

    public function isMethodSupported(MethodReflection $methodReflection): bool
    {
        return $methodReflection->getName() === 'call';
    }

    public function getTypeFromMethodCall(MethodReflection $methodReflection, MethodCall $methodCall, Scope $scope): Type|null
    {
        $args = $methodCall->getArgs();
        if (count($args) === 0) {
            return null;
        }

        $call = substr($this->printer->prettyPrintExpr($args[0]->value), 1, -1);
        if ($call === 'GET /') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /admin/hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\GlobalHook>');
        }

        if ($call === 'LIST /admin/hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\GlobalHook>');
        }

        if ($call === 'POST /admin/hooks') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /admin/hooks/{hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /admin/hooks/{hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /admin/hooks/{hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /admin/hooks/{hook_id}/pings') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /admin/keys') {
            return $this->typeResolver->resolve('Observable<Schema\\PublicKeyFull>');
        }

        if ($call === 'LIST /admin/keys') {
            return $this->typeResolver->resolve('Observable<Schema\\PublicKeyFull>');
        }

        if ($call === 'DELETE /admin/keys/{key_ids}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /admin/ldap/teams/{team_id}/mapping') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /admin/ldap/teams/{team_id}/sync') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /admin/ldap/users/{username}/mapping') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /admin/ldap/users/{username}/sync') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /admin/organizations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /admin/organizations/{org}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /admin/pre-receive-environments') {
            return $this->typeResolver->resolve('Observable<Schema\\PreReceiveEnvironment>');
        }

        if ($call === 'LIST /admin/pre-receive-environments') {
            return $this->typeResolver->resolve('Observable<Schema\\PreReceiveEnvironment>');
        }

        if ($call === 'POST /admin/pre-receive-environments') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /admin/pre-receive-environments/{pre_receive_environment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /admin/pre-receive-environments/{pre_receive_environment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /admin/pre-receive-environments/{pre_receive_environment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /admin/pre-receive-environments/{pre_receive_environment_id}/downloads') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /admin/pre-receive-hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\PreReceiveHook>');
        }

        if ($call === 'LIST /admin/pre-receive-hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\PreReceiveHook>');
        }

        if ($call === 'POST /admin/pre-receive-hooks') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /admin/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /admin/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /admin/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /admin/tokens') {
            return $this->typeResolver->resolve('Observable<Schema\\Authorization>');
        }

        if ($call === 'LIST /admin/tokens') {
            return $this->typeResolver->resolve('Observable<Schema\\Authorization>');
        }

        if ($call === 'DELETE /admin/tokens/{token_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /admin/users') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /admin/users/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /admin/users/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /admin/users/{username}/authorizations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /admin/users/{username}/authorizations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /advisories') {
            return $this->typeResolver->resolve('Observable<Schema\\GlobalAdvisory>');
        }

        if ($call === 'GET /advisories/{ghsa_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /app') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /app-manifests/{code}/conversions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /app/hook/config') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /app/hook/config') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /app/hook/deliveries') {
            return $this->typeResolver->resolve('Observable<Schema\\HookDeliveryItem>');
        }

        if ($call === 'GET /app/hook/deliveries/{delivery_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /app/hook/deliveries/{delivery_id}/attempts') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /app/installation-requests') {
            return $this->typeResolver->resolve('Observable<Schema\\IntegrationInstallationRequest>|WithoutBody');
        }

        if ($call === 'LIST /app/installation-requests') {
            return $this->typeResolver->resolve('Observable<Schema\\IntegrationInstallationRequest>|WithoutBody');
        }

        if ($call === 'GET /app/installations') {
            return $this->typeResolver->resolve('Observable<Schema\\Installation>');
        }

        if ($call === 'LIST /app/installations') {
            return $this->typeResolver->resolve('Observable<Schema\\Installation>');
        }

        if ($call === 'GET /app/installations/{installation_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /app/installations/{installation_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /app/installations/{installation_id}/access_tokens') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /app/installations/{installation_id}/suspended') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /app/installations/{installation_id}/suspended') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /applications/grants') {
            return $this->typeResolver->resolve('Observable<Schema\\ApplicationGrant>|WithoutBody');
        }

        if ($call === 'LIST /applications/grants') {
            return $this->typeResolver->resolve('Observable<Schema\\ApplicationGrant>|WithoutBody');
        }

        if ($call === 'GET /applications/grants/{grant_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /applications/grants/{grant_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /applications/{client_id}/grant') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /applications/{client_id}/token') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /applications/{client_id}/token') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /applications/{client_id}/token') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /applications/{client_id}/token/scoped') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /apps/{app_slug}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /authorizations') {
            return $this->typeResolver->resolve('Observable<Schema\\Authorization>|WithoutBody');
        }

        if ($call === 'LIST /authorizations') {
            return $this->typeResolver->resolve('Observable<Schema\\Authorization>|WithoutBody');
        }

        if ($call === 'POST /authorizations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /authorizations/clients/{client_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /authorizations/clients/{client_id}/{fingerprint}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /authorizations/{authorization_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /authorizations/{authorization_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /authorizations/{authorization_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /codes_of_conduct') {
            return $this->typeResolver->resolve('Observable<Schema\\CodeOfConduct>|WithoutBody');
        }

        if ($call === 'GET /codes_of_conduct/{key}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /emojis') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/announcement') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /enterprise/announcement') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /enterprise/announcement') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/settings/license') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/all') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/comments') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/gists') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/hooks') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/issues') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/milestones') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/orgs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/pages') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/pulls') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/repos') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/security-products') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprise/stats/users') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/cache/usage') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/cache/usage-policy') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /enterprises/{enterprise}/actions/cache/usage-policy') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/permissions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/permissions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/permissions/organizations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/organizations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/organizations/{org_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/permissions/organizations/{org_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/permissions/workflow') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/workflow') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /enterprises/{enterprise}/actions/runner-groups') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runners') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runners/downloads') {
            return $this->typeResolver->resolve('Observable<Schema\\RunnerApplication>');
        }

        if ($call === 'POST /enterprises/{enterprise}/actions/runners/generate-jitconfig') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /enterprises/{enterprise}/actions/runners/registration-token') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /enterprises/{enterprise}/actions/runners/remove-token') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /enterprises/{enterprise}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}/labels/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/audit-log') {
            return $this->typeResolver->resolve('Observable<Schema\\AuditLogEvent>');
        }

        if ($call === 'LIST /enterprises/{enterprise}/audit-log') {
            return $this->typeResolver->resolve('Observable<Schema\\AuditLogEvent>');
        }

        if ($call === 'GET /enterprises/{enterprise}/code-scanning/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\CodeScanningOrganizationAlertItems>');
        }

        if ($call === 'LIST /enterprises/{enterprise}/code-scanning/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\CodeScanningOrganizationAlertItems>');
        }

        if ($call === 'GET /enterprises/{enterprise}/code_security_and_analysis') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /enterprises/{enterprise}/code_security_and_analysis') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /enterprises/{enterprise}/dependabot/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\DependabotAlertWithRepository>|WithoutBody');
        }

        if ($call === 'GET /enterprises/{enterprise}/secret-scanning/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationSecretScanningAlert>');
        }

        if ($call === 'GET /enterprises/{enterprise}/settings/billing/advanced-security') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /enterprises/{enterprise}/{security_product}/{enablement}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>|WithoutBody');
        }

        if ($call === 'LIST /events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>|WithoutBody');
        }

        if ($call === 'GET /feeds') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /gists') {
            return $this->typeResolver->resolve('Observable<Schema\\BaseGist>|WithoutBody');
        }

        if ($call === 'LIST /gists') {
            return $this->typeResolver->resolve('Observable<Schema\\BaseGist>|WithoutBody');
        }

        if ($call === 'POST /gists') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /gists/public') {
            return $this->typeResolver->resolve('Observable<Schema\\BaseGist>|WithoutBody');
        }

        if ($call === 'LIST /gists/public') {
            return $this->typeResolver->resolve('Observable<Schema\\BaseGist>|WithoutBody');
        }

        if ($call === 'GET /gists/starred') {
            return $this->typeResolver->resolve('Observable<Schema\\BaseGist>|WithoutBody');
        }

        if ($call === 'LIST /gists/starred') {
            return $this->typeResolver->resolve('Observable<Schema\\BaseGist>|WithoutBody');
        }

        if ($call === 'GET /gists/{gist_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /gists/{gist_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /gists/{gist_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /gists/{gist_id}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\GistComment>|WithoutBody');
        }

        if ($call === 'LIST /gists/{gist_id}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\GistComment>|WithoutBody');
        }

        if ($call === 'POST /gists/{gist_id}/comments') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /gists/{gist_id}/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /gists/{gist_id}/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /gists/{gist_id}/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /gists/{gist_id}/commits') {
            return $this->typeResolver->resolve('Observable<Schema\\GistCommit>|WithoutBody');
        }

        if ($call === 'LIST /gists/{gist_id}/commits') {
            return $this->typeResolver->resolve('Observable<Schema\\GistCommit>|WithoutBody');
        }

        if ($call === 'GET /gists/{gist_id}/forks') {
            return $this->typeResolver->resolve('Observable<Schema\\GistSimple>|WithoutBody');
        }

        if ($call === 'LIST /gists/{gist_id}/forks') {
            return $this->typeResolver->resolve('Observable<Schema\\GistSimple>|WithoutBody');
        }

        if ($call === 'POST /gists/{gist_id}/forks') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /gists/{gist_id}/star') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /gists/{gist_id}/star') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /gists/{gist_id}/star') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /gists/{gist_id}/{sha}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /gitignore/templates') {
            return $this->typeResolver->resolve('Observable<string>|WithoutBody');
        }

        if ($call === 'GET /gitignore/templates/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /installation/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /installation/token') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /issues') {
            return $this->typeResolver->resolve('Observable<Schema\\Issue>|WithoutBody');
        }

        if ($call === 'LIST /issues') {
            return $this->typeResolver->resolve('Observable<Schema\\Issue>|WithoutBody');
        }

        if ($call === 'GET /licenses') {
            return $this->typeResolver->resolve('Observable<Schema\\LicenseSimple>|WithoutBody');
        }

        if ($call === 'LIST /licenses') {
            return $this->typeResolver->resolve('Observable<Schema\\LicenseSimple>|WithoutBody');
        }

        if ($call === 'GET /licenses/{license}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /manage/v1/config/nodes') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /manage/v1/maintenance') {
            return $this->typeResolver->resolve('Observable<Schema\\GhesGetMaintenance>|WithoutBody');
        }

        if ($call === 'POST /manage/v1/maintenance') {
            return $this->typeResolver->resolve('Observable<Schema\\GhesSetMaintenanceResponse>|WithoutBody');
        }

        if ($call === 'GET /manage/v1/replication/status') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /manage/v1/version') {
            return $this->typeResolver->resolve('Observable<Schema\\GhesVersion>|WithoutBody');
        }

        if ($call === 'POST /markdown') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /markdown/raw') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /meta') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /networks/{owner}/{repo}/events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>|Schema\\BasicError|WithoutBody');
        }

        if ($call === 'LIST /networks/{owner}/{repo}/events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>|Schema\\BasicError|WithoutBody');
        }

        if ($call === 'GET /notifications') {
            return $this->typeResolver->resolve('Observable<Schema\\Thread>|WithoutBody');
        }

        if ($call === 'LIST /notifications') {
            return $this->typeResolver->resolve('Observable<Schema\\Thread>|WithoutBody');
        }

        if ($call === 'PUT /notifications') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /notifications/threads/{thread_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /notifications/threads/{thread_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /notifications/threads/{thread_id}/subscription') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /notifications/threads/{thread_id}/subscription') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /notifications/threads/{thread_id}/subscription') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /octocat') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /organizations') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationSimple>|WithoutBody');
        }

        if ($call === 'GET /organizations/{organization_id}/custom_roles') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/cache/usage') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/cache/usage-by-repository') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/oidc/customization/sub') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/oidc/customization/sub') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/permissions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/permissions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/permissions/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/permissions/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/permissions/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/actions/permissions/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/permissions/workflow') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/permissions/workflow') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/runner-groups') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/actions/runner-groups') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/runner-groups/{runner_group_id}/runners') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/runners') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/runners/downloads') {
            return $this->typeResolver->resolve('Observable<Schema\\RunnerApplication>');
        }

        if ($call === 'POST /orgs/{org}/actions/runners/generate-jitconfig') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/actions/runners/registration-token') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/actions/runners/remove-token') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}/labels/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/secrets') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/secrets/public-key') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/secrets/{secret_name}/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/variables') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/actions/variables') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/variables/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/actions/variables/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}/actions/variables/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/actions/variables/{name}/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/variables/{name}/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/actions/variables/{name}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/actions/variables/{name}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/announcement') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/announcement') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}/announcement') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/audit-log') {
            return $this->typeResolver->resolve('Observable<Schema\\AuditLogEvent>');
        }

        if ($call === 'LIST /orgs/{org}/audit-log') {
            return $this->typeResolver->resolve('Observable<Schema\\AuditLogEvent>');
        }

        if ($call === 'GET /orgs/{org}/code-scanning/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\CodeScanningOrganizationAlertItems>');
        }

        if ($call === 'LIST /orgs/{org}/code-scanning/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\CodeScanningOrganizationAlertItems>');
        }

        if ($call === 'GET /orgs/{org}/custom-repository-roles') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/custom-repository-roles') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/custom-repository-roles/{role_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/custom-repository-roles/{role_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}/custom-repository-roles/{role_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/dependabot/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\DependabotAlertWithRepository>|WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/dependabot/secrets') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/dependabot/secrets/public-key') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/dependabot/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/dependabot/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/dependabot/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/dependabot/secrets/{secret_name}/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/docker/conflicts') {
            return $this->typeResolver->resolve('Observable<Schema\\Package>');
        }

        if ($call === 'GET /orgs/{org}/events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'LIST /orgs/{org}/events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'GET /orgs/{org}/external-group/{group_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/external-groups') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\OrgHook>');
        }

        if ($call === 'LIST /orgs/{org}/hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\OrgHook>');
        }

        if ($call === 'POST /orgs/{org}/hooks') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/hooks/{hook_id}/config') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}/config') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/hooks/{hook_id}/deliveries') {
            return $this->typeResolver->resolve('Observable<Schema\\HookDeliveryItem>');
        }

        if ($call === 'GET /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/hooks/{hook_id}/pings') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/installation') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/installations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/issues') {
            return $this->typeResolver->resolve('Observable<Schema\\Issue>');
        }

        if ($call === 'LIST /orgs/{org}/issues') {
            return $this->typeResolver->resolve('Observable<Schema\\Issue>');
        }

        if ($call === 'GET /orgs/{org}/members') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'LIST /orgs/{org}/members') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'GET /orgs/{org}/members/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/members/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/memberships/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/memberships/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/memberships/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/migrations') {
            return $this->typeResolver->resolve('Observable<Schema\\Migration>');
        }

        if ($call === 'LIST /orgs/{org}/migrations') {
            return $this->typeResolver->resolve('Observable<Schema\\Migration>');
        }

        if ($call === 'POST /orgs/{org}/migrations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/migrations/{migration_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/migrations/{migration_id}/archive') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'STREAM /orgs/{org}/migrations/{migration_id}/archive') {
            return $this->typeResolver->resolve('Observable<string>');
        }

        if ($call === 'DELETE /orgs/{org}/migrations/{migration_id}/archive') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/migrations/{migration_id}/repositories') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /orgs/{org}/migrations/{migration_id}/repositories') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'GET /orgs/{org}/outside_collaborators') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'LIST /orgs/{org}/outside_collaborators') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'PUT /orgs/{org}/outside_collaborators/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/outside_collaborators/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/packages') {
            return $this->typeResolver->resolve('Observable<Schema\\Package>|WithoutBody');
        }

        if ($call === 'LIST /orgs/{org}/packages') {
            return $this->typeResolver->resolve('Observable<Schema\\Package>|WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/packages/{package_type}/{package_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/packages/{package_type}/{package_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/packages/{package_type}/{package_name}/restore') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/packages/{package_type}/{package_name}/versions') {
            return $this->typeResolver->resolve('Observable<Schema\\PackageVersion>');
        }

        if ($call === 'LIST /orgs/{org}/packages/{package_type}/{package_name}/versions') {
            return $this->typeResolver->resolve('Observable<Schema\\PackageVersion>');
        }

        if ($call === 'GET /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/personal-access-token-requests') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationProgrammaticAccessGrantRequest>');
        }

        if ($call === 'LIST /orgs/{org}/personal-access-token-requests') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationProgrammaticAccessGrantRequest>');
        }

        if ($call === 'POST /orgs/{org}/personal-access-token-requests') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/personal-access-token-requests/{pat_request_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/personal-access-token-requests/{pat_request_id}/repositories') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /orgs/{org}/personal-access-token-requests/{pat_request_id}/repositories') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'GET /orgs/{org}/personal-access-tokens') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationProgrammaticAccessGrant>');
        }

        if ($call === 'LIST /orgs/{org}/personal-access-tokens') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationProgrammaticAccessGrant>');
        }

        if ($call === 'POST /orgs/{org}/personal-access-tokens') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /orgs/{org}/personal-access-tokens/{pat_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/personal-access-tokens/{pat_id}/repositories') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /orgs/{org}/personal-access-tokens/{pat_id}/repositories') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'GET /orgs/{org}/pre-receive-hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\OrgPreReceiveHook>');
        }

        if ($call === 'LIST /orgs/{org}/pre-receive-hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\OrgPreReceiveHook>');
        }

        if ($call === 'GET /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/projects') {
            return $this->typeResolver->resolve('Observable<Schema\\Project>');
        }

        if ($call === 'LIST /orgs/{org}/projects') {
            return $this->typeResolver->resolve('Observable<Schema\\Project>');
        }

        if ($call === 'POST /orgs/{org}/projects') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/public_members') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'LIST /orgs/{org}/public_members') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'GET /orgs/{org}/public_members/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/public_members/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/public_members/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/repos') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /orgs/{org}/repos') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'POST /orgs/{org}/repos') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/repository-fine-grained-permissions') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryFineGrainedPermission>');
        }

        if ($call === 'GET /orgs/{org}/rulesets') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryRuleset>');
        }

        if ($call === 'LIST /orgs/{org}/rulesets') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryRuleset>');
        }

        if ($call === 'POST /orgs/{org}/rulesets') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/rulesets/{ruleset_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/rulesets/{ruleset_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/rulesets/{ruleset_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/secret-scanning/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationSecretScanningAlert>');
        }

        if ($call === 'LIST /orgs/{org}/secret-scanning/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationSecretScanningAlert>');
        }

        if ($call === 'GET /orgs/{org}/security-managers') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamSimple>');
        }

        if ($call === 'PUT /orgs/{org}/security-managers/teams/{team_slug}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/security-managers/teams/{team_slug}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/settings/billing/advanced-security') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'LIST /orgs/{org}/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'POST /orgs/{org}/teams') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}/teams/{team_slug}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamDiscussion>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamDiscussion>');
        }

        if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamDiscussionComment>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamDiscussionComment>');
        }

        if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/external-groups') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/external-groups') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/external-groups') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/members') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/members') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/memberships/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/teams/{team_slug}/memberships/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/memberships/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/projects') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamProject>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/projects') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamProject>');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/repos') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/repos') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'POST /orgs/{org}/{security_product}/{enablement}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /projects/columns/cards/{card_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /projects/columns/cards/{card_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /projects/columns/cards/{card_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /projects/columns/cards/{card_id}/moves') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /projects/columns/{column_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /projects/columns/{column_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /projects/columns/{column_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /projects/columns/{column_id}/cards') {
            return $this->typeResolver->resolve('Observable<Schema\\ProjectCard>|WithoutBody');
        }

        if ($call === 'LIST /projects/columns/{column_id}/cards') {
            return $this->typeResolver->resolve('Observable<Schema\\ProjectCard>|WithoutBody');
        }

        if ($call === 'POST /projects/columns/{column_id}/cards') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /projects/columns/{column_id}/moves') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /projects/{project_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /projects/{project_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /projects/{project_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /projects/{project_id}/collaborators') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>|WithoutBody');
        }

        if ($call === 'LIST /projects/{project_id}/collaborators') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>|WithoutBody');
        }

        if ($call === 'PUT /projects/{project_id}/collaborators/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /projects/{project_id}/collaborators/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /projects/{project_id}/collaborators/{username}/permission') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /projects/{project_id}/columns') {
            return $this->typeResolver->resolve('Observable<Schema\\ProjectColumn>|WithoutBody');
        }

        if ($call === 'LIST /projects/{project_id}/columns') {
            return $this->typeResolver->resolve('Observable<Schema\\ProjectColumn>|WithoutBody');
        }

        if ($call === 'POST /projects/{project_id}/columns') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /rate_limit') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/artifacts/{artifact_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'STREAM /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}') {
            return $this->typeResolver->resolve('Observable<string>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/cache/usage') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/cache/usage-policy') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/actions/cache/usage-policy') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/caches') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/caches') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/caches/{cache_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/jobs/{job_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/jobs/{job_id}/logs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'STREAM /repos/{owner}/{repo}/actions/jobs/{job_id}/logs') {
            return $this->typeResolver->resolve('Observable<string>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/jobs/{job_id}/rerun') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/oidc/customization/sub') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/oidc/customization/sub') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/organization-secrets') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/organization-variables') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/permissions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/permissions/access') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions/access') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/permissions/workflow') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions/workflow') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runners') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runners/downloads') {
            return $this->typeResolver->resolve('Observable<Schema\\RunnerApplication>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runners/generate-jitconfig') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runners/registration-token') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runners/remove-token') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}/labels/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/approvals') {
            return $this->typeResolver->resolve('Observable<Schema\\EnvironmentApprovals>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/artifacts') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/jobs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs') {
            return $this->typeResolver->resolve('Observable<string>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/cancel') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/deployment_protection_rule') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/jobs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
            return $this->typeResolver->resolve('Observable<string>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments') {
            return $this->typeResolver->resolve('Observable<Schema\\PendingDeployment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments') {
            return $this->typeResolver->resolve('Observable<Schema\\Deployment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun-failed-jobs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/secrets') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/secrets/public-key') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/variables') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/variables') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/variables/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/variables/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/actions/variables/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/workflows') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/activity') {
            return $this->typeResolver->resolve('Observable<Schema\\Activity>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/assignees') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/assignees') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/assignees/{assignee}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/autolinks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Autolink>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/autolinks') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/autolinks/{autolink_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/autolinks/{autolink_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/automated-security-fixes') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches') {
            return $this->typeResolver->resolve('Observable<Schema\\ShortBranch>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/branches') {
            return $this->typeResolver->resolve('Observable<Schema\\ShortBranch>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
            return $this->typeResolver->resolve('Observable<string>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
            return $this->typeResolver->resolve('Observable<string>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
            return $this->typeResolver->resolve('Observable<string>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
            return $this->typeResolver->resolve('Observable<string>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
            return $this->typeResolver->resolve('Observable<Schema\\Integration>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
            return $this->typeResolver->resolve('Observable<Schema\\Integration>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
            return $this->typeResolver->resolve('Observable<Schema\\Integration>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
            return $this->typeResolver->resolve('Observable<Schema\\Integration>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/rename') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/check-runs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/check-runs/{check_run_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations') {
            return $this->typeResolver->resolve('Observable<Schema\\CheckAnnotation>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations') {
            return $this->typeResolver->resolve('Observable<Schema\\CheckAnnotation>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/check-runs/{check_run_id}/rerequest') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/check-suites') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/check-suites/preferences') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\CodeScanningAlertItems>|WithoutBody');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\CodeScanningAlertItems>|WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances') {
            return $this->typeResolver->resolve('Observable<Schema\\CodeScanningAlertInstance>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances') {
            return $this->typeResolver->resolve('Observable<Schema\\CodeScanningAlertInstance>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/analyses') {
            return $this->typeResolver->resolve('Observable<Schema\\CodeScanningAnalysis>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/analyses') {
            return $this->typeResolver->resolve('Observable<Schema\\CodeScanningAnalysis>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/default-setup') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/code-scanning/default-setup') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/code-scanning/sarifs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/sarifs/{sarif_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/codeowners/errors') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/collaborators') {
            return $this->typeResolver->resolve('Observable<Schema\\Collaborator>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/collaborators') {
            return $this->typeResolver->resolve('Observable<Schema\\Collaborator>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/collaborators/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/collaborators/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/collaborators/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/collaborators/{username}/permission') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\CommitComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\CommitComment>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits') {
            return $this->typeResolver->resolve('Observable<Schema\\Commit>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/commits') {
            return $this->typeResolver->resolve('Observable<Schema\\Commit>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{commit_sha}/branches-where-head') {
            return $this->typeResolver->resolve('Observable<Schema\\BranchShort>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\CommitComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\CommitComment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{commit_sha}/pulls') {
            return $this->typeResolver->resolve('Observable<Schema\\PullRequestSimple>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/commits/{commit_sha}/pulls') {
            return $this->typeResolver->resolve('Observable<Schema\\PullRequestSimple>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/check-runs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/check-suites') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/status') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/statuses') {
            return $this->typeResolver->resolve('Observable<Schema\\Status>|Schema\\BasicError');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/commits/{ref}/statuses') {
            return $this->typeResolver->resolve('Observable<Schema\\Status>|Schema\\BasicError');
        }

        if ($call === 'GET /repos/{owner}/{repo}/compare/{basehead}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/contents/{path}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/contents/{path}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/contents/{path}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/contributors') {
            return $this->typeResolver->resolve('Observable<Schema\\Contributor>|WithoutBody');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/contributors') {
            return $this->typeResolver->resolve('Observable<Schema\\Contributor>|WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/dependabot/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\DependabotAlert>|WithoutBody');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/dependabot/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\DependabotAlert>|WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/dependabot/alerts/{alert_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/dependabot/alerts/{alert_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/dependabot/secrets') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/dependabot/secrets/public-key') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/dependabot/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/dependabot/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/dependabot/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/dependency-graph/compare/{basehead}') {
            return $this->typeResolver->resolve('Observable<Schema\\DependencyGraphDiff>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/dependency-graph/sbom') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/dependency-graph/snapshots') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/deployments') {
            return $this->typeResolver->resolve('Observable<Schema\\Deployment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/deployments') {
            return $this->typeResolver->resolve('Observable<Schema\\Deployment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/deployments') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/deployments/{deployment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
            return $this->typeResolver->resolve('Observable<Schema\\DeploymentStatus>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
            return $this->typeResolver->resolve('Observable<Schema\\DeploymentStatus>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/dispatches') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/environments') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/environments/{environment_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/apps') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/forks') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/forks') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/forks') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/git/blobs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/blobs/{file_sha}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/git/commits') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/commits/{commit_sha}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/matching-refs/{ref}') {
            return $this->typeResolver->resolve('Observable<Schema\\GitRef>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/ref/{ref}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/git/refs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/git/refs/{ref}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/git/refs/{ref}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/git/tags') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/tags/{tag_sha}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/git/trees') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/trees/{tree_sha}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\Hook>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\Hook>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/hooks') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}/config') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}/config') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries') {
            return $this->typeResolver->resolve('Observable<Schema\\HookDeliveryItem>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/hooks/{hook_id}/pings') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/hooks/{hook_id}/tests') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/installation') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/invitations') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryInvitation>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/invitations') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryInvitation>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/invitations/{invitation_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/invitations/{invitation_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues') {
            return $this->typeResolver->resolve('Observable<Schema\\Issue>|Schema\\BasicError');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues') {
            return $this->typeResolver->resolve('Observable<Schema\\Issue>|Schema\\BasicError');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\IssueComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\IssueComment>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/issues/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/events') {
            return $this->typeResolver->resolve('Observable<Schema\\IssueEvent>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/events') {
            return $this->typeResolver->resolve('Observable<Schema\\IssueEvent>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/events/{event_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/issues/{issue_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/assignees') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/assignees') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\IssueComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\IssueComment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/comments') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/events') {
            return $this->typeResolver->resolve('Observable<Schema\\LabeledIssueEvent|Schema\\UnlabeledIssueEvent|Schema\\AssignedIssueEvent|Schema\\UnassignedIssueEvent|Schema\\MilestonedIssueEvent|Schema\\DemilestonedIssueEvent|Schema\\RenamedIssueEvent|Schema\\ReviewRequestedIssueEvent|Schema\\ReviewRequestRemovedIssueEvent|Schema\\ReviewDismissedIssueEvent|Schema\\LockedIssueEvent|Schema\\AddedToProjectIssueEvent|Schema\\MovedColumnInProjectIssueEvent|Schema\\RemovedFromProjectIssueEvent|Schema\\ConvertedNoteToIssueIssueEvent>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/events') {
            return $this->typeResolver->resolve('Observable<Schema\\LabeledIssueEvent|Schema\\UnlabeledIssueEvent|Schema\\AssignedIssueEvent|Schema\\UnassignedIssueEvent|Schema\\MilestonedIssueEvent|Schema\\DemilestonedIssueEvent|Schema\\RenamedIssueEvent|Schema\\ReviewRequestedIssueEvent|Schema\\ReviewRequestRemovedIssueEvent|Schema\\ReviewDismissedIssueEvent|Schema\\LockedIssueEvent|Schema\\AddedToProjectIssueEvent|Schema\\MovedColumnInProjectIssueEvent|Schema\\RemovedFromProjectIssueEvent|Schema\\ConvertedNoteToIssueIssueEvent>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/labels') {
            return $this->typeResolver->resolve('Observable<Schema\\Label>|Schema\\BasicError');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/labels') {
            return $this->typeResolver->resolve('Observable<Schema\\Label>|Schema\\BasicError');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/issues/{issue_number}/labels') {
            return $this->typeResolver->resolve('Observable<Schema\\Label>|Schema\\BasicError');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/labels') {
            return $this->typeResolver->resolve('Observable<Schema\\Label>|Schema\\BasicError');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels/{name}') {
            return $this->typeResolver->resolve('Observable<Schema\\Label>|Schema\\BasicError');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/issues/{issue_number}/lock') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/lock') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/timeline') {
            return $this->typeResolver->resolve('Observable<Schema\\LabeledIssueEvent|Schema\\UnlabeledIssueEvent|Schema\\MilestonedIssueEvent|Schema\\DemilestonedIssueEvent|Schema\\RenamedIssueEvent|Schema\\ReviewRequestedIssueEvent|Schema\\ReviewRequestRemovedIssueEvent|Schema\\ReviewDismissedIssueEvent|Schema\\LockedIssueEvent|Schema\\AddedToProjectIssueEvent|Schema\\MovedColumnInProjectIssueEvent|Schema\\RemovedFromProjectIssueEvent|Schema\\ConvertedNoteToIssueIssueEvent|Schema\\TimelineCommentEvent|Schema\\TimelineCrossReferencedEvent|Schema\\TimelineCommittedEvent|Schema\\TimelineReviewedEvent|Schema\\TimelineLineCommentedEvent|Schema\\TimelineCommitCommentedEvent|Schema\\TimelineAssignedIssueEvent|Schema\\TimelineUnassignedIssueEvent|Schema\\StateChangeIssueEvent>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/timeline') {
            return $this->typeResolver->resolve('Observable<Schema\\LabeledIssueEvent|Schema\\UnlabeledIssueEvent|Schema\\MilestonedIssueEvent|Schema\\DemilestonedIssueEvent|Schema\\RenamedIssueEvent|Schema\\ReviewRequestedIssueEvent|Schema\\ReviewRequestRemovedIssueEvent|Schema\\ReviewDismissedIssueEvent|Schema\\LockedIssueEvent|Schema\\AddedToProjectIssueEvent|Schema\\MovedColumnInProjectIssueEvent|Schema\\RemovedFromProjectIssueEvent|Schema\\ConvertedNoteToIssueIssueEvent|Schema\\TimelineCommentEvent|Schema\\TimelineCrossReferencedEvent|Schema\\TimelineCommittedEvent|Schema\\TimelineReviewedEvent|Schema\\TimelineLineCommentedEvent|Schema\\TimelineCommitCommentedEvent|Schema\\TimelineAssignedIssueEvent|Schema\\TimelineUnassignedIssueEvent|Schema\\StateChangeIssueEvent>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/keys') {
            return $this->typeResolver->resolve('Observable<Schema\\DeployKey>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/keys') {
            return $this->typeResolver->resolve('Observable<Schema\\DeployKey>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/keys') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/keys/{key_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/keys/{key_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/labels') {
            return $this->typeResolver->resolve('Observable<Schema\\Label>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/labels') {
            return $this->typeResolver->resolve('Observable<Schema\\Label>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/labels/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/labels/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/labels/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/languages') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/lfs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/lfs') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/license') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/merge-upstream') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/merges') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/milestones') {
            return $this->typeResolver->resolve('Observable<Schema\\Milestone>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/milestones') {
            return $this->typeResolver->resolve('Observable<Schema\\Milestone>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/milestones') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/milestones/{milestone_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/milestones/{milestone_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/milestones/{milestone_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/milestones/{milestone_number}/labels') {
            return $this->typeResolver->resolve('Observable<Schema\\Label>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/milestones/{milestone_number}/labels') {
            return $this->typeResolver->resolve('Observable<Schema\\Label>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/notifications') {
            return $this->typeResolver->resolve('Observable<Schema\\Thread>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/notifications') {
            return $this->typeResolver->resolve('Observable<Schema\\Thread>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/notifications') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pages') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/pages') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pages') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pages') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pages/builds') {
            return $this->typeResolver->resolve('Observable<Schema\\PageBuild>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pages/builds') {
            return $this->typeResolver->resolve('Observable<Schema\\PageBuild>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pages/builds') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pages/builds/latest') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pages/builds/{build_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pages/deployments') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pre-receive-hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryPreReceiveHook>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pre-receive-hooks') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryPreReceiveHook>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/projects') {
            return $this->typeResolver->resolve('Observable<Schema\\Project>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/projects') {
            return $this->typeResolver->resolve('Observable<Schema\\Project>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/projects') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls') {
            return $this->typeResolver->resolve('Observable<Schema\\PullRequestSimple>|WithoutBody');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls') {
            return $this->typeResolver->resolve('Observable<Schema\\PullRequestSimple>|WithoutBody');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\PullRequestReviewComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\PullRequestReviewComment>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/pulls/{pull_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\PullRequestReviewComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\PullRequestReviewComment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/comments/{comment_id}/replies') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/commits') {
            return $this->typeResolver->resolve('Observable<Schema\\Commit>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/commits') {
            return $this->typeResolver->resolve('Observable<Schema\\Commit>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/files') {
            return $this->typeResolver->resolve('Observable<Schema\\DiffEntry>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/files') {
            return $this->typeResolver->resolve('Observable<Schema\\DiffEntry>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/merge') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/merge') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
            return $this->typeResolver->resolve('Observable<Schema\\PullRequestReview>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
            return $this->typeResolver->resolve('Observable<Schema\\PullRequestReview>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\ReviewComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\ReviewComment>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/events') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/update-branch') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/readme') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/readme/{dir}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases') {
            return $this->typeResolver->resolve('Observable<Schema\\Release>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/releases') {
            return $this->typeResolver->resolve('Observable<Schema\\Release>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/releases') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/assets/{asset_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/releases/assets/{asset_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/releases/assets/{asset_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/releases/generate-notes') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/latest') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/tags/{tag}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/releases/{release_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/releases/{release_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}/assets') {
            return $this->typeResolver->resolve('Observable<Schema\\ReleaseAsset>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/releases/{release_id}/assets') {
            return $this->typeResolver->resolve('Observable<Schema\\ReleaseAsset>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/releases/{release_id}/assets') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/releases/{release_id}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/releases/{release_id}/reactions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/replicas/caches') {
            return $this->typeResolver->resolve('Observable<Schema\\Operations\\Repos\\ListCacheInfo\\Response\\ApplicationJson\\Ok>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/replicas/caches') {
            return $this->typeResolver->resolve('Observable<Schema\\Operations\\Repos\\ListCacheInfo\\Response\\ApplicationJson\\Ok>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/rules/branches/{branch}') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryRuleCreation|Schema\\RepositoryRuleUpdate|Schema\\RepositoryRuleDeletion|Schema\\RepositoryRuleRequiredLinearHistory|Schema\\RepositoryRuleRequiredDeployments|Schema\\RepositoryRuleRequiredSignatures|Schema\\RepositoryRulePullRequest|Schema\\RepositoryRuleRequiredStatusChecks|Schema\\RepositoryRuleNonFastForward|Schema\\RepositoryRuleCommitMessagePattern|Schema\\RepositoryRuleCommitAuthorEmailPattern|Schema\\RepositoryRuleCommitterEmailPattern|Schema\\RepositoryRuleBranchNamePattern|Schema\\RepositoryRuleTagNamePattern|Schema\\RepositoryRuleWorkflows>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/rules/branches/{branch}') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryRuleCreation|Schema\\RepositoryRuleUpdate|Schema\\RepositoryRuleDeletion|Schema\\RepositoryRuleRequiredLinearHistory|Schema\\RepositoryRuleRequiredDeployments|Schema\\RepositoryRuleRequiredSignatures|Schema\\RepositoryRulePullRequest|Schema\\RepositoryRuleRequiredStatusChecks|Schema\\RepositoryRuleNonFastForward|Schema\\RepositoryRuleCommitMessagePattern|Schema\\RepositoryRuleCommitAuthorEmailPattern|Schema\\RepositoryRuleCommitterEmailPattern|Schema\\RepositoryRuleBranchNamePattern|Schema\\RepositoryRuleTagNamePattern|Schema\\RepositoryRuleWorkflows>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/rulesets') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryRuleset>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/rulesets') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryRuleset>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/rulesets') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/rulesets/{ruleset_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/rulesets/{ruleset_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/rulesets/{ruleset_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\SecretScanningAlert>|WithoutBody');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/secret-scanning/alerts') {
            return $this->typeResolver->resolve('Observable<Schema\\SecretScanningAlert>|WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations') {
            return $this->typeResolver->resolve('Observable<Schema\\SecretScanningLocation>|WithoutBody');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations') {
            return $this->typeResolver->resolve('Observable<Schema\\SecretScanningLocation>|WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stargazers') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stats/code_frequency') {
            return $this->typeResolver->resolve('Observable<int>|Schema\\Operations\\Repos\\GetCodeFrequencyStats\\Response\\ApplicationJson\\Accepted\\Application\\Json|WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stats/commit_activity') {
            return $this->typeResolver->resolve('Observable<Schema\\CommitActivity>|Schema\\Operations\\Repos\\GetCommitActivityStats\\Response\\ApplicationJson\\Accepted\\Application\\Json|WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stats/contributors') {
            return $this->typeResolver->resolve('Observable<Schema\\ContributorActivity>|Schema\\Operations\\Repos\\GetContributorsStats\\Response\\ApplicationJson\\Accepted\\Application\\Json|WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stats/participation') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stats/punch_card') {
            return $this->typeResolver->resolve('Observable<int>|WithoutBody');
        }

        if ($call === 'POST /repos/{owner}/{repo}/statuses/{sha}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/subscribers') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/subscribers') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/subscription') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/subscription') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/subscription') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/tags') {
            return $this->typeResolver->resolve('Observable<Schema\\Tag>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/tags') {
            return $this->typeResolver->resolve('Observable<Schema\\Tag>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/tags/protection') {
            return $this->typeResolver->resolve('Observable<Schema\\TagProtection>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/tags/protection') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/tags/protection/{tag_protection_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/tarball/{ref}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'STREAM /repos/{owner}/{repo}/tarball/{ref}') {
            return $this->typeResolver->resolve('Observable<string>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/topics') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/topics') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repos/{owner}/{repo}/transfer') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/vulnerability-alerts') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/vulnerability-alerts') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/vulnerability-alerts') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repos/{owner}/{repo}/zipball/{ref}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'STREAM /repos/{owner}/{repo}/zipball/{ref}') {
            return $this->typeResolver->resolve('Observable<string>');
        }

        if ($call === 'POST /repos/{template_owner}/{template_repo}/generate') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repositories') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>|WithoutBody');
        }

        if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/secrets') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/secrets/public-key') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/variables') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /repositories/{repository_id}/environments/{environment_name}/variables') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/variables/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /repositories/{repository_id}/environments/{environment_name}/variables/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /repositories/{repository_id}/environments/{environment_name}/variables/{name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /scim/v2/Groups') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /scim/v2/Groups') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /scim/v2/Groups/{scim_group_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /scim/v2/Groups/{scim_group_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /scim/v2/Groups/{scim_group_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /scim/v2/Groups/{scim_group_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /scim/v2/Users') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /scim/v2/Users') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /scim/v2/Users/{scim_user_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /scim/v2/Users/{scim_user_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /scim/v2/Users/{scim_user_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /scim/v2/Users/{scim_user_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /search/code') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /search/commits') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /search/issues') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /search/labels') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /search/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /search/topics') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /search/users') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /setup/api/configcheck') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /setup/api/configure') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /setup/api/maintenance') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /setup/api/maintenance') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /setup/api/settings') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /setup/api/settings') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /setup/api/settings/authorized-keys') {
            return $this->typeResolver->resolve('Observable<Schema\\SshKey>|WithoutBody');
        }

        if ($call === 'POST /setup/api/settings/authorized-keys') {
            return $this->typeResolver->resolve('Observable<Schema\\SshKey>|WithoutBody');
        }

        if ($call === 'DELETE /setup/api/settings/authorized-keys') {
            return $this->typeResolver->resolve('Observable<Schema\\SshKey>|WithoutBody');
        }

        if ($call === 'POST /setup/api/start') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /setup/api/upgrade') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /teams/{team_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /teams/{team_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}/discussions') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamDiscussion>');
        }

        if ($call === 'LIST /teams/{team_id}/discussions') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamDiscussion>');
        }

        if ($call === 'POST /teams/{team_id}/discussions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /teams/{team_id}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /teams/{team_id}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamDiscussionComment>');
        }

        if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamDiscussionComment>');
        }

        if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('Observable<Schema\\Reaction>');
        }

        if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}/members') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'LIST /teams/{team_id}/members') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'GET /teams/{team_id}/members/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /teams/{team_id}/members/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /teams/{team_id}/members/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}/memberships/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /teams/{team_id}/memberships/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /teams/{team_id}/memberships/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}/projects') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamProject>');
        }

        if ($call === 'LIST /teams/{team_id}/projects') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamProject>');
        }

        if ($call === 'GET /teams/{team_id}/projects/{project_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /teams/{team_id}/projects/{project_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /teams/{team_id}/projects/{project_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}/repos') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /teams/{team_id}/repos') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'GET /teams/{team_id}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /teams/{team_id}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /teams/{team_id}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /teams/{team_id}/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'LIST /teams/{team_id}/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\Team>');
        }

        if ($call === 'GET /user') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /user') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/docker/conflicts') {
            return $this->typeResolver->resolve('Observable<Schema\\Package>');
        }

        if ($call === 'GET /user/emails') {
            return $this->typeResolver->resolve('Observable<Schema\\Email>|WithoutBody');
        }

        if ($call === 'LIST /user/emails') {
            return $this->typeResolver->resolve('Observable<Schema\\Email>|WithoutBody');
        }

        if ($call === 'POST /user/emails') {
            return $this->typeResolver->resolve('Observable<Schema\\Email>|WithoutBody');
        }

        if ($call === 'DELETE /user/emails') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/followers') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>|WithoutBody');
        }

        if ($call === 'LIST /user/followers') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>|WithoutBody');
        }

        if ($call === 'GET /user/following') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>|WithoutBody');
        }

        if ($call === 'LIST /user/following') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>|WithoutBody');
        }

        if ($call === 'GET /user/following/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /user/following/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /user/following/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/gpg_keys') {
            return $this->typeResolver->resolve('Observable<Schema\\GpgKey>|WithoutBody');
        }

        if ($call === 'LIST /user/gpg_keys') {
            return $this->typeResolver->resolve('Observable<Schema\\GpgKey>|WithoutBody');
        }

        if ($call === 'POST /user/gpg_keys') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/gpg_keys/{gpg_key_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /user/gpg_keys/{gpg_key_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/installations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/installations/{installation_id}/repositories') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /user/installations/{installation_id}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /user/installations/{installation_id}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/issues') {
            return $this->typeResolver->resolve('Observable<Schema\\Issue>|WithoutBody');
        }

        if ($call === 'LIST /user/issues') {
            return $this->typeResolver->resolve('Observable<Schema\\Issue>|WithoutBody');
        }

        if ($call === 'GET /user/keys') {
            return $this->typeResolver->resolve('Observable<Schema\\Key>|WithoutBody');
        }

        if ($call === 'LIST /user/keys') {
            return $this->typeResolver->resolve('Observable<Schema\\Key>|WithoutBody');
        }

        if ($call === 'POST /user/keys') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/keys/{key_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /user/keys/{key_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/memberships/orgs') {
            return $this->typeResolver->resolve('Observable<Schema\\OrgMembership>|WithoutBody');
        }

        if ($call === 'LIST /user/memberships/orgs') {
            return $this->typeResolver->resolve('Observable<Schema\\OrgMembership>|WithoutBody');
        }

        if ($call === 'GET /user/memberships/orgs/{org}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /user/memberships/orgs/{org}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/migrations') {
            return $this->typeResolver->resolve('Observable<Schema\\Migration>|WithoutBody');
        }

        if ($call === 'LIST /user/migrations') {
            return $this->typeResolver->resolve('Observable<Schema\\Migration>|WithoutBody');
        }

        if ($call === 'POST /user/migrations') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/migrations/{migration_id}/archive') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/migrations/{migration_id}/repositories') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /user/migrations/{migration_id}/repositories') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'GET /user/orgs') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationSimple>|WithoutBody');
        }

        if ($call === 'LIST /user/orgs') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationSimple>|WithoutBody');
        }

        if ($call === 'GET /user/packages') {
            return $this->typeResolver->resolve('Observable<Schema\\Package>|WithoutBody');
        }

        if ($call === 'LIST /user/packages') {
            return $this->typeResolver->resolve('Observable<Schema\\Package>|WithoutBody');
        }

        if ($call === 'GET /user/packages/{package_type}/{package_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /user/packages/{package_type}/{package_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /user/packages/{package_type}/{package_name}/restore') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/packages/{package_type}/{package_name}/versions') {
            return $this->typeResolver->resolve('Observable<Schema\\PackageVersion>');
        }

        if ($call === 'LIST /user/packages/{package_type}/{package_name}/versions') {
            return $this->typeResolver->resolve('Observable<Schema\\PackageVersion>');
        }

        if ($call === 'GET /user/packages/{package_type}/{package_name}/versions/{package_version_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /user/packages/{package_type}/{package_name}/versions/{package_version_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /user/packages/{package_type}/{package_name}/versions/{package_version_id}/restore') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /user/projects') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/public_emails') {
            return $this->typeResolver->resolve('Observable<Schema\\Email>|WithoutBody');
        }

        if ($call === 'LIST /user/public_emails') {
            return $this->typeResolver->resolve('Observable<Schema\\Email>|WithoutBody');
        }

        if ($call === 'GET /user/repos') {
            return $this->typeResolver->resolve('Observable<Schema\\Repository>|WithoutBody');
        }

        if ($call === 'LIST /user/repos') {
            return $this->typeResolver->resolve('Observable<Schema\\Repository>|WithoutBody');
        }

        if ($call === 'POST /user/repos') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/repository_invitations') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryInvitation>|WithoutBody');
        }

        if ($call === 'LIST /user/repository_invitations') {
            return $this->typeResolver->resolve('Observable<Schema\\RepositoryInvitation>|WithoutBody');
        }

        if ($call === 'DELETE /user/repository_invitations/{invitation_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PATCH /user/repository_invitations/{invitation_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/social_accounts') {
            return $this->typeResolver->resolve('Observable<Schema\\SocialAccount>|WithoutBody');
        }

        if ($call === 'LIST /user/social_accounts') {
            return $this->typeResolver->resolve('Observable<Schema\\SocialAccount>|WithoutBody');
        }

        if ($call === 'POST /user/social_accounts') {
            return $this->typeResolver->resolve('Observable<Schema\\SocialAccount>|WithoutBody');
        }

        if ($call === 'DELETE /user/social_accounts') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/ssh_signing_keys') {
            return $this->typeResolver->resolve('Observable<Schema\\SshSigningKey>|WithoutBody');
        }

        if ($call === 'LIST /user/ssh_signing_keys') {
            return $this->typeResolver->resolve('Observable<Schema\\SshSigningKey>|WithoutBody');
        }

        if ($call === 'POST /user/ssh_signing_keys') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/ssh_signing_keys/{ssh_signing_key_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /user/ssh_signing_keys/{ssh_signing_key_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/starred') {
            return $this->typeResolver->resolve('Observable<Schema\\Repository>|WithoutBody');
        }

        if ($call === 'LIST /user/starred') {
            return $this->typeResolver->resolve('Observable<Schema\\Repository>|WithoutBody');
        }

        if ($call === 'GET /user/starred/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'PUT /user/starred/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /user/starred/{owner}/{repo}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /user/subscriptions') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>|WithoutBody');
        }

        if ($call === 'LIST /user/subscriptions') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>|WithoutBody');
        }

        if ($call === 'GET /user/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamFull>|WithoutBody');
        }

        if ($call === 'LIST /user/teams') {
            return $this->typeResolver->resolve('Observable<Schema\\TeamFull>|WithoutBody');
        }

        if ($call === 'GET /users') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>|WithoutBody');
        }

        if ($call === 'GET /users/{username}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /users/{username}/docker/conflicts') {
            return $this->typeResolver->resolve('Observable<Schema\\Package>');
        }

        if ($call === 'GET /users/{username}/events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'LIST /users/{username}/events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'GET /users/{username}/events/orgs/{org}') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'LIST /users/{username}/events/orgs/{org}') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'GET /users/{username}/events/public') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'LIST /users/{username}/events/public') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'GET /users/{username}/followers') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'LIST /users/{username}/followers') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'GET /users/{username}/following') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'LIST /users/{username}/following') {
            return $this->typeResolver->resolve('Observable<Schema\\SimpleUser>');
        }

        if ($call === 'GET /users/{username}/following/{target_user}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /users/{username}/gists') {
            return $this->typeResolver->resolve('Observable<Schema\\BaseGist>');
        }

        if ($call === 'LIST /users/{username}/gists') {
            return $this->typeResolver->resolve('Observable<Schema\\BaseGist>');
        }

        if ($call === 'GET /users/{username}/gpg_keys') {
            return $this->typeResolver->resolve('Observable<Schema\\GpgKey>');
        }

        if ($call === 'LIST /users/{username}/gpg_keys') {
            return $this->typeResolver->resolve('Observable<Schema\\GpgKey>');
        }

        if ($call === 'GET /users/{username}/hovercard') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /users/{username}/installation') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /users/{username}/keys') {
            return $this->typeResolver->resolve('Observable<Schema\\KeySimple>');
        }

        if ($call === 'LIST /users/{username}/keys') {
            return $this->typeResolver->resolve('Observable<Schema\\KeySimple>');
        }

        if ($call === 'GET /users/{username}/orgs') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationSimple>');
        }

        if ($call === 'LIST /users/{username}/orgs') {
            return $this->typeResolver->resolve('Observable<Schema\\OrganizationSimple>');
        }

        if ($call === 'GET /users/{username}/packages') {
            return $this->typeResolver->resolve('Observable<Schema\\Package>|WithoutBody');
        }

        if ($call === 'LIST /users/{username}/packages') {
            return $this->typeResolver->resolve('Observable<Schema\\Package>|WithoutBody');
        }

        if ($call === 'GET /users/{username}/packages/{package_type}/{package_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /users/{username}/packages/{package_type}/{package_name}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /users/{username}/packages/{package_type}/{package_name}/restore') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /users/{username}/packages/{package_type}/{package_name}/versions') {
            return $this->typeResolver->resolve('Observable<Schema\\PackageVersion>');
        }

        if ($call === 'GET /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'POST /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /users/{username}/projects') {
            return $this->typeResolver->resolve('Observable<Schema\\Project>');
        }

        if ($call === 'LIST /users/{username}/projects') {
            return $this->typeResolver->resolve('Observable<Schema\\Project>');
        }

        if ($call === 'GET /users/{username}/received_events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'LIST /users/{username}/received_events') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'GET /users/{username}/received_events/public') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'LIST /users/{username}/received_events/public') {
            return $this->typeResolver->resolve('Observable<Schema\\Event>');
        }

        if ($call === 'GET /users/{username}/repos') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /users/{username}/repos') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'PUT /users/{username}/site_admin') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /users/{username}/site_admin') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /users/{username}/social_accounts') {
            return $this->typeResolver->resolve('Observable<Schema\\SocialAccount>');
        }

        if ($call === 'LIST /users/{username}/social_accounts') {
            return $this->typeResolver->resolve('Observable<Schema\\SocialAccount>');
        }

        if ($call === 'GET /users/{username}/ssh_signing_keys') {
            return $this->typeResolver->resolve('Observable<Schema\\SshSigningKey>');
        }

        if ($call === 'LIST /users/{username}/ssh_signing_keys') {
            return $this->typeResolver->resolve('Observable<Schema\\SshSigningKey>');
        }

        if ($call === 'GET /users/{username}/starred') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /users/{username}/subscriptions') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /users/{username}/subscriptions') {
            return $this->typeResolver->resolve('Observable<Schema\\MinimalRepository>');
        }

        if ($call === 'PUT /users/{username}/suspended') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'DELETE /users/{username}/suspended') {
            return $this->typeResolver->resolve('');
        }

        if ($call === 'GET /zen') {
            return $this->typeResolver->resolve('');
        }

        return null;
    }
}
