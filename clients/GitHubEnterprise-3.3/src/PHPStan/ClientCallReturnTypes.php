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
            return $this->typeResolver->resolve('Schema\\Root');
        }

        if ($call === 'GET /admin/hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GlobalHook>');
        }

        if ($call === 'LIST /admin/hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GlobalHook>');
        }

        if ($call === 'POST /admin/hooks') {
            return $this->typeResolver->resolve('Schema\\GlobalHook');
        }

        if ($call === 'GET /admin/hooks/{hook_id}') {
            return $this->typeResolver->resolve('Schema\\GlobalHook');
        }

        if ($call === 'DELETE /admin/hooks/{hook_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /admin/hooks/{hook_id}') {
            return $this->typeResolver->resolve('Schema\\GlobalHook2');
        }

        if ($call === 'POST /admin/hooks/{hook_id}/pings') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /admin/keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PublicKeyFull>');
        }

        if ($call === 'LIST /admin/keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PublicKeyFull>');
        }

        if ($call === 'DELETE /admin/keys/{key_ids}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /admin/ldap/teams/{team_id}/mapping') {
            return $this->typeResolver->resolve('Schema\\LdapMappingTeam');
        }

        if ($call === 'POST /admin/ldap/teams/{team_id}/sync') {
            return $this->typeResolver->resolve('Schema\\Operations\\EnterpriseAdmin\\SyncLdapMappingForTeam\\Response\\ApplicationJson\\Created');
        }

        if ($call === 'PATCH /admin/ldap/users/{username}/mapping') {
            return $this->typeResolver->resolve('Schema\\LdapMappingUser');
        }

        if ($call === 'POST /admin/ldap/users/{username}/sync') {
            return $this->typeResolver->resolve('Schema\\Operations\\EnterpriseAdmin\\SyncLdapMappingForUser\\Response\\ApplicationJson\\Created\\Application\\Json');
        }

        if ($call === 'POST /admin/organizations') {
            return $this->typeResolver->resolve('Schema\\OrganizationSimple');
        }

        if ($call === 'PATCH /admin/organizations/{org}') {
            return $this->typeResolver->resolve('Schema\\Operations\\EnterpriseAdmin\\UpdateOrgName\\Response\\ApplicationJson\\Accepted');
        }

        if ($call === 'GET /admin/pre-receive-environments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PreReceiveEnvironment>');
        }

        if ($call === 'LIST /admin/pre-receive-environments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PreReceiveEnvironment>');
        }

        if ($call === 'POST /admin/pre-receive-environments') {
            return $this->typeResolver->resolve('Schema\\PreReceiveEnvironment');
        }

        if ($call === 'GET /admin/pre-receive-environments/{pre_receive_environment_id}') {
            return $this->typeResolver->resolve('Schema\\PreReceiveEnvironment');
        }

        if ($call === 'DELETE /admin/pre-receive-environments/{pre_receive_environment_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /admin/pre-receive-environments/{pre_receive_environment_id}') {
            return $this->typeResolver->resolve('Schema\\PreReceiveEnvironment');
        }

        if ($call === 'POST /admin/pre-receive-environments/{pre_receive_environment_id}/downloads') {
            return $this->typeResolver->resolve('Schema\\PreReceiveEnvironmentDownloadStatus');
        }

        if ($call === 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads') {
            return $this->typeResolver->resolve('Schema\\PreReceiveEnvironmentDownloadStatus');
        }

        if ($call === 'GET /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest') {
            return $this->typeResolver->resolve('Schema\\PreReceiveEnvironmentDownloadStatus');
        }

        if ($call === 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest') {
            return $this->typeResolver->resolve('Schema\\PreReceiveEnvironmentDownloadStatus');
        }

        if ($call === 'GET /admin/pre-receive-hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PreReceiveHook>');
        }

        if ($call === 'LIST /admin/pre-receive-hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PreReceiveHook>');
        }

        if ($call === 'POST /admin/pre-receive-hooks') {
            return $this->typeResolver->resolve('Schema\\PreReceiveHook');
        }

        if ($call === 'GET /admin/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('Schema\\PreReceiveHook');
        }

        if ($call === 'DELETE /admin/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /admin/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('Schema\\PreReceiveHook');
        }

        if ($call === 'GET /admin/tokens') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Authorization>');
        }

        if ($call === 'LIST /admin/tokens') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Authorization>');
        }

        if ($call === 'DELETE /admin/tokens/{token_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /admin/users') {
            return $this->typeResolver->resolve('Schema\\SimpleUser');
        }

        if ($call === 'DELETE /admin/users/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /admin/users/{username}') {
            return $this->typeResolver->resolve('Schema\\Operations\\EnterpriseAdmin\\UpdateUsernameForUser\\Response\\ApplicationJson\\Accepted\\Application\\Json');
        }

        if ($call === 'POST /admin/users/{username}/authorizations') {
            return $this->typeResolver->resolve('Schema\\Authorization');
        }

        if ($call === 'DELETE /admin/users/{username}/authorizations') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /app') {
            return $this->typeResolver->resolve('Schema\\Integration');
        }

        if ($call === 'POST /app-manifests/{code}/conversions') {
            return $this->typeResolver->resolve('Schema\\Integration');
        }

        if ($call === 'GET /app/hook/config') {
            return $this->typeResolver->resolve('Schema\\WebhookConfig');
        }

        if ($call === 'PATCH /app/hook/config') {
            return $this->typeResolver->resolve('Schema\\WebhookConfig');
        }

        if ($call === 'GET /app/hook/deliveries') {
            return $this->typeResolver->resolve('iterable<int,Schema\\HookDeliveryItem>');
        }

        if ($call === 'GET /app/hook/deliveries/{delivery_id}') {
            return $this->typeResolver->resolve('Schema\\HookDelivery');
        }

        if ($call === 'POST /app/hook/deliveries/{delivery_id}/attempts') {
            return $this->typeResolver->resolve('Schema\\Operations\\Apps\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json');
        }

        if ($call === 'GET /app/installations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Installation>');
        }

        if ($call === 'LIST /app/installations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Installation>');
        }

        if ($call === 'GET /app/installations/{installation_id}') {
            return $this->typeResolver->resolve('Schema\\Installation');
        }

        if ($call === 'DELETE /app/installations/{installation_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /app/installations/{installation_id}/access_tokens') {
            return $this->typeResolver->resolve('Schema\\InstallationToken');
        }

        if ($call === 'PUT /app/installations/{installation_id}/suspended') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /app/installations/{installation_id}/suspended') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /applications/grants') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ApplicationGrant>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /applications/grants') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ApplicationGrant>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /applications/grants/{grant_id}') {
            return $this->typeResolver->resolve('Schema\\ApplicationGrant|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /applications/grants/{grant_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /applications/{client_id}/grant') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /applications/{client_id}/grants/{access_token}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /applications/{client_id}/token') {
            return $this->typeResolver->resolve('Schema\\Authorization');
        }

        if ($call === 'DELETE /applications/{client_id}/token') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /applications/{client_id}/token') {
            return $this->typeResolver->resolve('Schema\\Authorization');
        }

        if ($call === 'POST /applications/{client_id}/token/scoped') {
            return $this->typeResolver->resolve('Schema\\Authorization');
        }

        if ($call === 'GET /applications/{client_id}/tokens/{access_token}') {
            return $this->typeResolver->resolve('Schema\\Authorization');
        }

        if ($call === 'POST /applications/{client_id}/tokens/{access_token}') {
            return $this->typeResolver->resolve('Schema\\Authorization');
        }

        if ($call === 'DELETE /applications/{client_id}/tokens/{access_token}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /apps/{app_slug}') {
            return $this->typeResolver->resolve('Schema\\Integration');
        }

        if ($call === 'GET /authorizations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Authorization>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /authorizations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Authorization>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /authorizations') {
            return $this->typeResolver->resolve('Schema\\Authorization|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /authorizations/clients/{client_id}') {
            return $this->typeResolver->resolve('Schema\\Authorization|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /authorizations/clients/{client_id}/{fingerprint}') {
            return $this->typeResolver->resolve('Schema\\Authorization');
        }

        if ($call === 'GET /authorizations/{authorization_id}') {
            return $this->typeResolver->resolve('Schema\\Authorization|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /authorizations/{authorization_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /authorizations/{authorization_id}') {
            return $this->typeResolver->resolve('Schema\\Authorization');
        }

        if ($call === 'GET /codes_of_conduct') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CodeOfConduct>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /codes_of_conduct/{key}') {
            return $this->typeResolver->resolve('Schema\\CodeOfConduct|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /emojis') {
            return $this->typeResolver->resolve('Schema\\Operations\\Emojis\\Get\\Response\\ApplicationJson\\Ok|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /enterprise/announcement') {
            return $this->typeResolver->resolve('Schema\\Announcement');
        }

        if ($call === 'DELETE /enterprise/announcement') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /enterprise/announcement') {
            return $this->typeResolver->resolve('Schema\\Announcement');
        }

        if ($call === 'GET /enterprise/settings/license') {
            return $this->typeResolver->resolve('Schema\\LicenseInfo');
        }

        if ($call === 'GET /enterprise/stats/all') {
            return $this->typeResolver->resolve('Schema\\EnterpriseOverview');
        }

        if ($call === 'GET /enterprise/stats/comments') {
            return $this->typeResolver->resolve('Schema\\EnterpriseCommentOverview');
        }

        if ($call === 'GET /enterprise/stats/gists') {
            return $this->typeResolver->resolve('Schema\\EnterpriseGistOverview');
        }

        if ($call === 'GET /enterprise/stats/hooks') {
            return $this->typeResolver->resolve('Schema\\EnterpriseHookOverview');
        }

        if ($call === 'GET /enterprise/stats/issues') {
            return $this->typeResolver->resolve('Schema\\EnterpriseIssueOverview');
        }

        if ($call === 'GET /enterprise/stats/milestones') {
            return $this->typeResolver->resolve('Schema\\EnterpriseMilestoneOverview');
        }

        if ($call === 'GET /enterprise/stats/orgs') {
            return $this->typeResolver->resolve('Schema\\EnterpriseOrganizationOverview');
        }

        if ($call === 'GET /enterprise/stats/pages') {
            return $this->typeResolver->resolve('Schema\\EnterprisePageOverview');
        }

        if ($call === 'GET /enterprise/stats/pulls') {
            return $this->typeResolver->resolve('Schema\\EnterprisePullRequestOverview');
        }

        if ($call === 'GET /enterprise/stats/repos') {
            return $this->typeResolver->resolve('Schema\\EnterpriseRepositoryOverview');
        }

        if ($call === 'GET /enterprise/stats/users') {
            return $this->typeResolver->resolve('Schema\\EnterpriseUserOverview');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/permissions') {
            return $this->typeResolver->resolve('Schema\\ActionsEnterprisePermissions');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/permissions') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/permissions/organizations') {
            return $this->typeResolver->resolve('Schema\\Operations\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/organizations') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/organizations/{org_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/permissions/organizations/{org_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('Schema\\SelectedActions');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups') {
            return $this->typeResolver->resolve('Schema\\Operations\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'POST /enterprises/{enterprise}/actions/runner-groups') {
            return $this->typeResolver->resolve('Schema\\RunnerGroupsEnterprise');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('Schema\\RunnerGroupsEnterprise');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('Schema\\RunnerGroupsEnterprise');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations') {
            return $this->typeResolver->resolve('Schema\\Operations\\EnterpriseAdmin\\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\\Response\\ApplicationJson\\Ok\\Application\\Json');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners') {
            return $this->typeResolver->resolve('Schema\\Operations\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runners') {
            return $this->typeResolver->resolve('Schema\\Operations\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runners/downloads') {
            return $this->typeResolver->resolve('iterable<int,Schema\\RunnerApplication>');
        }

        if ($call === 'POST /enterprises/{enterprise}/actions/runners/registration-token') {
            return $this->typeResolver->resolve('Schema\\AuthenticationToken');
        }

        if ($call === 'POST /enterprises/{enterprise}/actions/runners/remove-token') {
            return $this->typeResolver->resolve('Schema\\AuthenticationToken');
        }

        if ($call === 'GET /enterprises/{enterprise}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('Schema\\Runner');
        }

        if ($call === 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /enterprises/{enterprise}/audit-log') {
            return $this->typeResolver->resolve('iterable<int,Schema\\AuditLogEvent>');
        }

        if ($call === 'LIST /enterprises/{enterprise}/audit-log') {
            return $this->typeResolver->resolve('iterable<int,Schema\\AuditLogEvent>');
        }

        if ($call === 'GET /events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /feeds') {
            return $this->typeResolver->resolve('Schema\\Feed');
        }

        if ($call === 'GET /gists') {
            return $this->typeResolver->resolve('iterable<int,Schema\\BaseGist>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /gists') {
            return $this->typeResolver->resolve('iterable<int,Schema\\BaseGist>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /gists') {
            return $this->typeResolver->resolve('Schema\\GistSimple|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /gists/public') {
            return $this->typeResolver->resolve('iterable<int,Schema\\BaseGist>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /gists/public') {
            return $this->typeResolver->resolve('iterable<int,Schema\\BaseGist>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /gists/starred') {
            return $this->typeResolver->resolve('iterable<int,Schema\\BaseGist>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /gists/starred') {
            return $this->typeResolver->resolve('iterable<int,Schema\\BaseGist>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /gists/{gist_id}') {
            return $this->typeResolver->resolve('Schema\\GistSimple|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /gists/{gist_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /gists/{gist_id}') {
            return $this->typeResolver->resolve('Schema\\GistSimple');
        }

        if ($call === 'GET /gists/{gist_id}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GistComment>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /gists/{gist_id}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GistComment>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /gists/{gist_id}/comments') {
            return $this->typeResolver->resolve('Schema\\GistComment|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /gists/{gist_id}/comments/{comment_id}') {
            return $this->typeResolver->resolve('Schema\\GistComment|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /gists/{gist_id}/comments/{comment_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /gists/{gist_id}/comments/{comment_id}') {
            return $this->typeResolver->resolve('Schema\\GistComment');
        }

        if ($call === 'GET /gists/{gist_id}/commits') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GistCommit>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /gists/{gist_id}/commits') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GistCommit>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /gists/{gist_id}/forks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GistSimple>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /gists/{gist_id}/forks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GistSimple>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /gists/{gist_id}/forks') {
            return $this->typeResolver->resolve('Schema\\BaseGist|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /gists/{gist_id}/star') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /gists/{gist_id}/star') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /gists/{gist_id}/star') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /gists/{gist_id}/{sha}') {
            return $this->typeResolver->resolve('Schema\\GistSimple');
        }

        if ($call === 'GET /gitignore/templates') {
            return $this->typeResolver->resolve('iterable<int,string>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /gitignore/templates/{name}') {
            return $this->typeResolver->resolve('Schema\\GitignoreTemplate|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /installation/repositories') {
            return $this->typeResolver->resolve('Schema\\Operations\\Apps\\ListReposAccessibleToInstallation\\Response\\ApplicationJson\\Ok|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /installation/token') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /issues') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Issue>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /issues') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Issue>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /licenses') {
            return $this->typeResolver->resolve('iterable<int,Schema\\LicenseSimple>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /licenses') {
            return $this->typeResolver->resolve('iterable<int,Schema\\LicenseSimple>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /licenses/{license}') {
            return $this->typeResolver->resolve('Schema\\License|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /markdown') {
            return $this->typeResolver->resolve('string|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /markdown/raw') {
            return $this->typeResolver->resolve('string|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /meta') {
            return $this->typeResolver->resolve('Schema\\ApiOverview|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /networks/{owner}/{repo}/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>|Schema\\BasicError|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /networks/{owner}/{repo}/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>|Schema\\BasicError|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /notifications') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Thread>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /notifications') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Thread>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /notifications') {
            return $this->typeResolver->resolve('Schema\\Operations\\Activity\\MarkNotificationsAsRead\\Response\\ApplicationJson\\Accepted|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /notifications/threads/{thread_id}') {
            return $this->typeResolver->resolve('Schema\\Thread|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /notifications/threads/{thread_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /notifications/threads/{thread_id}/subscription') {
            return $this->typeResolver->resolve('Schema\\ThreadSubscription|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /notifications/threads/{thread_id}/subscription') {
            return $this->typeResolver->resolve('Schema\\ThreadSubscription|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /notifications/threads/{thread_id}/subscription') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /octocat') {
            return $this->typeResolver->resolve('\\Psr\\Http\\Message\\ResponseInterface');
        }

        if ($call === 'GET /organizations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrganizationSimple>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}') {
            return $this->typeResolver->resolve('Schema\\OrganizationFull');
        }

        if ($call === 'PATCH /orgs/{org}') {
            return $this->typeResolver->resolve('Schema\\OrganizationFull');
        }

        if ($call === 'GET /orgs/{org}/actions/permissions') {
            return $this->typeResolver->resolve('Schema\\ActionsOrganizationPermissions');
        }

        if ($call === 'PUT /orgs/{org}/actions/permissions') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/actions/permissions/repositories') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'PUT /orgs/{org}/actions/permissions/repositories') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /orgs/{org}/actions/permissions/repositories/{repository_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /orgs/{org}/actions/permissions/repositories/{repository_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('Schema\\SelectedActions');
        }

        if ($call === 'PUT /orgs/{org}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/actions/runner-groups') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'POST /orgs/{org}/actions/runner-groups') {
            return $this->typeResolver->resolve('Schema\\RunnerGroupsOrg');
        }

        if ($call === 'GET /orgs/{org}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('Schema\\RunnerGroupsOrg');
        }

        if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /orgs/{org}/actions/runner-groups/{runner_group_id}') {
            return $this->typeResolver->resolve('Schema\\RunnerGroupsOrg');
        }

        if ($call === 'GET /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListRepoAccessToSelfHostedRunnerGroupInOrg\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/actions/runner-groups/{runner_group_id}/runners') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListSelfHostedRunnersInGroupForOrg\\Response\\ApplicationJson\\Ok\\Application\\Json');
        }

        if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/actions/runners') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListSelfHostedRunnersForOrg\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'GET /orgs/{org}/actions/runners/downloads') {
            return $this->typeResolver->resolve('iterable<int,Schema\\RunnerApplication>');
        }

        if ($call === 'POST /orgs/{org}/actions/runners/registration-token') {
            return $this->typeResolver->resolve('Schema\\AuthenticationToken');
        }

        if ($call === 'POST /orgs/{org}/actions/runners/remove-token') {
            return $this->typeResolver->resolve('Schema\\AuthenticationToken');
        }

        if ($call === 'GET /orgs/{org}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('Schema\\Runner');
        }

        if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/actions/secrets') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListOrgSecrets\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'GET /orgs/{org}/actions/secrets/public-key') {
            return $this->typeResolver->resolve('Schema\\ActionsPublicKey');
        }

        if ($call === 'GET /orgs/{org}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('Schema\\OrganizationActionsSecret');
        }

        if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('Schema\\EmptyObject|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /orgs/{org}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/actions/secrets/{secret_name}/repositories') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}/repositories') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/audit-log') {
            return $this->typeResolver->resolve('iterable<int,Schema\\AuditLogEvent>');
        }

        if ($call === 'LIST /orgs/{org}/audit-log') {
            return $this->typeResolver->resolve('iterable<int,Schema\\AuditLogEvent>');
        }

        if ($call === 'GET /orgs/{org}/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'LIST /orgs/{org}/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'GET /orgs/{org}/hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrgHook>');
        }

        if ($call === 'LIST /orgs/{org}/hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrgHook>');
        }

        if ($call === 'POST /orgs/{org}/hooks') {
            return $this->typeResolver->resolve('Schema\\OrgHook');
        }

        if ($call === 'GET /orgs/{org}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('Schema\\OrgHook');
        }

        if ($call === 'DELETE /orgs/{org}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('Schema\\OrgHook');
        }

        if ($call === 'GET /orgs/{org}/hooks/{hook_id}/config') {
            return $this->typeResolver->resolve('Schema\\WebhookConfig');
        }

        if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}/config') {
            return $this->typeResolver->resolve('Schema\\WebhookConfig');
        }

        if ($call === 'GET /orgs/{org}/hooks/{hook_id}/deliveries') {
            return $this->typeResolver->resolve('iterable<int,Schema\\HookDeliveryItem>');
        }

        if ($call === 'GET /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}') {
            return $this->typeResolver->resolve('Schema\\HookDelivery');
        }

        if ($call === 'POST /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts') {
            return $this->typeResolver->resolve('Schema\\Operations\\Orgs\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json');
        }

        if ($call === 'POST /orgs/{org}/hooks/{hook_id}/pings') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/installation') {
            return $this->typeResolver->resolve('Schema\\Installation');
        }

        if ($call === 'GET /orgs/{org}/installations') {
            return $this->typeResolver->resolve('Schema\\Operations\\Orgs\\ListAppInstallations\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'GET /orgs/{org}/issues') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Issue>');
        }

        if ($call === 'LIST /orgs/{org}/issues') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Issue>');
        }

        if ($call === 'GET /orgs/{org}/members') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'LIST /orgs/{org}/members') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'GET /orgs/{org}/members/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /orgs/{org}/members/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/memberships/{username}') {
            return $this->typeResolver->resolve('Schema\\OrgMembership');
        }

        if ($call === 'PUT /orgs/{org}/memberships/{username}') {
            return $this->typeResolver->resolve('Schema\\OrgMembership');
        }

        if ($call === 'DELETE /orgs/{org}/memberships/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/outside_collaborators') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'LIST /orgs/{org}/outside_collaborators') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'PUT /orgs/{org}/outside_collaborators/{username}') {
            return $this->typeResolver->resolve('Schema\\Operations\\Orgs\\ConvertMemberToOutsideCollaborator\\Response\\ApplicationJson\\Accepted\\Application\\Json|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /orgs/{org}/outside_collaborators/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/pre-receive-hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrgPreReceiveHook>');
        }

        if ($call === 'LIST /orgs/{org}/pre-receive-hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrgPreReceiveHook>');
        }

        if ($call === 'GET /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('Schema\\OrgPreReceiveHook');
        }

        if ($call === 'DELETE /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('Schema\\OrgPreReceiveHook');
        }

        if ($call === 'PATCH /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('Schema\\OrgPreReceiveHook');
        }

        if ($call === 'GET /orgs/{org}/projects') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Project>');
        }

        if ($call === 'LIST /orgs/{org}/projects') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Project>');
        }

        if ($call === 'POST /orgs/{org}/projects') {
            return $this->typeResolver->resolve('Schema\\Project');
        }

        if ($call === 'GET /orgs/{org}/public_members') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'LIST /orgs/{org}/public_members') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'GET /orgs/{org}/public_members/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /orgs/{org}/public_members/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /orgs/{org}/public_members/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/repos') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /orgs/{org}/repos') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'POST /orgs/{org}/repos') {
            return $this->typeResolver->resolve('Schema\\Repository');
        }

        if ($call === 'GET /orgs/{org}/secret-scanning/alerts') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrganizationSecretScanningAlert>');
        }

        if ($call === 'LIST /orgs/{org}/secret-scanning/alerts') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrganizationSecretScanningAlert>');
        }

        if ($call === 'GET /orgs/{org}/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'LIST /orgs/{org}/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'POST /orgs/{org}/teams') {
            return $this->typeResolver->resolve('Schema\\TeamFull');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}') {
            return $this->typeResolver->resolve('Schema\\TeamFull');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /orgs/{org}/teams/{team_slug}') {
            return $this->typeResolver->resolve('Schema\\TeamFull');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamDiscussion>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamDiscussion>');
        }

        if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussion');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussion');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussion');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamDiscussionComment>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamDiscussionComment>');
        }

        if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussionComment');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussionComment');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussionComment');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('Schema\\Reaction');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('Schema\\Reaction');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/members') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/members') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/memberships/{username}') {
            return $this->typeResolver->resolve('Schema\\TeamMembership|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /orgs/{org}/teams/{team_slug}/memberships/{username}') {
            return $this->typeResolver->resolve('Schema\\TeamMembership|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/memberships/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/projects') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamProject>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/projects') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamProject>');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
            return $this->typeResolver->resolve('Schema\\TeamProject|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/repos') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/repos') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('Schema\\TeamRepository|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /orgs/{org}/teams/{team_slug}/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'GET /projects/columns/cards/{card_id}') {
            return $this->typeResolver->resolve('Schema\\ProjectCard|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /projects/columns/cards/{card_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /projects/columns/cards/{card_id}') {
            return $this->typeResolver->resolve('Schema\\ProjectCard|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /projects/columns/cards/{card_id}/moves') {
            return $this->typeResolver->resolve('Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Created\\Application\\Json|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /projects/columns/{column_id}') {
            return $this->typeResolver->resolve('Schema\\ProjectColumn|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /projects/columns/{column_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /projects/columns/{column_id}') {
            return $this->typeResolver->resolve('Schema\\ProjectColumn|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /projects/columns/{column_id}/cards') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ProjectCard>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /projects/columns/{column_id}/cards') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ProjectCard>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /projects/columns/{column_id}/cards') {
            return $this->typeResolver->resolve('Schema\\ProjectCard|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /projects/columns/{column_id}/moves') {
            return $this->typeResolver->resolve('Schema\\Operations\\Projects\\MoveColumn\\Response\\ApplicationJson\\Created\\Application\\Json|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /projects/{project_id}') {
            return $this->typeResolver->resolve('Schema\\Project|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /projects/{project_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /projects/{project_id}') {
            return $this->typeResolver->resolve('Schema\\Project|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /projects/{project_id}/collaborators') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /projects/{project_id}/collaborators') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /projects/{project_id}/collaborators/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /projects/{project_id}/collaborators/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /projects/{project_id}/collaborators/{username}/permission') {
            return $this->typeResolver->resolve('Schema\\ProjectCollaboratorPermission|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /projects/{project_id}/columns') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ProjectColumn>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /projects/{project_id}/columns') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ProjectColumn>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /projects/{project_id}/columns') {
            return $this->typeResolver->resolve('Schema\\ProjectColumn|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /rate_limit') {
            return $this->typeResolver->resolve('Schema\\RateLimitOverview|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /reactions/{reaction_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('Schema\\FullRepository|Schema\\BasicError');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('Schema\\BasicError|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('Schema\\FullRepository|Schema\\BasicError');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListArtifactsForRepo\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}') {
            return $this->typeResolver->resolve('Schema\\Artifact');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/artifacts/{artifact_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'STREAM /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}') {
            return $this->typeResolver->resolve('iterable<int,string>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/jobs/{job_id}') {
            return $this->typeResolver->resolve('Schema\\Job');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/jobs/{job_id}/logs') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'STREAM /repos/{owner}/{repo}/actions/jobs/{job_id}/logs') {
            return $this->typeResolver->resolve('iterable<int,string>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/permissions') {
            return $this->typeResolver->resolve('Schema\\ActionsRepositoryPermissions');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('Schema\\SelectedActions');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions/selected-actions') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runners') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListSelfHostedRunnersForRepo\\Response\\ApplicationJson\\Ok\\Application\\Json');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runners/downloads') {
            return $this->typeResolver->resolve('iterable<int,Schema\\RunnerApplication>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runners/registration-token') {
            return $this->typeResolver->resolve('Schema\\AuthenticationToken');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runners/remove-token') {
            return $this->typeResolver->resolve('Schema\\AuthenticationToken');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('Schema\\Runner');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListWorkflowRunsForRepo\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}') {
            return $this->typeResolver->resolve('Schema\\WorkflowRun');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/approvals') {
            return $this->typeResolver->resolve('iterable<int,Schema\\EnvironmentApprovals>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/artifacts') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListWorkflowRunArtifacts\\Response\\ApplicationJson\\Ok\\Application\\Json');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/cancel') {
            return $this->typeResolver->resolve('Schema\\EmptyObject');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/jobs') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListJobsForWorkflowRun\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
            return $this->typeResolver->resolve('iterable<int,string>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PendingDeployment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Deployment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun') {
            return $this->typeResolver->resolve('Schema\\EmptyObject');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/secrets') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListRepoSecrets\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/secrets/public-key') {
            return $this->typeResolver->resolve('Schema\\ActionsPublicKey');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('Schema\\ActionsSecret');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('Schema\\EmptyObject|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/workflows') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListRepoWorkflows\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}') {
            return $this->typeResolver->resolve('Schema\\Workflow');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListWorkflowRuns\\Response\\ApplicationJson\\Ok\\Application\\Json');
        }

        if ($call === 'GET /repos/{owner}/{repo}/assignees') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/assignees') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/assignees/{assignee}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/autolinks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Autolink>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/autolinks') {
            return $this->typeResolver->resolve('Schema\\Autolink');
        }

        if ($call === 'GET /repos/{owner}/{repo}/autolinks/{autolink_id}') {
            return $this->typeResolver->resolve('Schema\\Autolink');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/autolinks/{autolink_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ShortBranch>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/branches') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ShortBranch>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}') {
            return $this->typeResolver->resolve('Schema\\BranchWithProtection|Schema\\BasicError');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection') {
            return $this->typeResolver->resolve('Schema\\BranchProtection');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection') {
            return $this->typeResolver->resolve('Schema\\ProtectedBranch');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
            return $this->typeResolver->resolve('Schema\\ProtectedBranchAdminEnforced');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
            return $this->typeResolver->resolve('Schema\\ProtectedBranchAdminEnforced');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
            return $this->typeResolver->resolve('Schema\\ProtectedBranchPullRequestReview');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
            return $this->typeResolver->resolve('Schema\\ProtectedBranchPullRequestReview');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
            return $this->typeResolver->resolve('Schema\\ProtectedBranchAdminEnforced');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
            return $this->typeResolver->resolve('Schema\\ProtectedBranchAdminEnforced');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
            return $this->typeResolver->resolve('Schema\\StatusCheckPolicy');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
            return $this->typeResolver->resolve('Schema\\StatusCheckPolicy');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
            return $this->typeResolver->resolve('iterable<int,string>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
            return $this->typeResolver->resolve('iterable<int,string>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
            return $this->typeResolver->resolve('iterable<int,string>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
            return $this->typeResolver->resolve('iterable<int,string>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
            return $this->typeResolver->resolve('Schema\\BranchRestrictionPolicy');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Integration>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Integration>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Integration>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Integration>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/rename') {
            return $this->typeResolver->resolve('Schema\\BranchWithProtection');
        }

        if ($call === 'POST /repos/{owner}/{repo}/check-runs') {
            return $this->typeResolver->resolve('Schema\\CheckRun');
        }

        if ($call === 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}') {
            return $this->typeResolver->resolve('Schema\\CheckRun');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/check-runs/{check_run_id}') {
            return $this->typeResolver->resolve('Schema\\CheckRun');
        }

        if ($call === 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CheckAnnotation>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CheckAnnotation>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/check-runs/{check_run_id}/rerequest') {
            return $this->typeResolver->resolve('Schema\\EmptyObject');
        }

        if ($call === 'POST /repos/{owner}/{repo}/check-suites') {
            return $this->typeResolver->resolve('Schema\\CheckSuite');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/check-suites/preferences') {
            return $this->typeResolver->resolve('Schema\\CheckSuitePreference');
        }

        if ($call === 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}') {
            return $this->typeResolver->resolve('Schema\\CheckSuite');
        }

        if ($call === 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs') {
            return $this->typeResolver->resolve('Schema\\Operations\\Checks\\ListForSuite\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'POST /repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest') {
            return $this->typeResolver->resolve('Schema\\EmptyObject');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CodeScanningAlertItems>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/alerts') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CodeScanningAlertItems>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}') {
            return $this->typeResolver->resolve('Schema\\CodeScanningAlert');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}') {
            return $this->typeResolver->resolve('Schema\\CodeScanningAlert');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CodeScanningAlertInstance>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CodeScanningAlertInstance>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/analyses') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CodeScanningAnalysis>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/analyses') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CodeScanningAnalysis>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}') {
            return $this->typeResolver->resolve('Schema\\CodeScanningAnalysis');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}') {
            return $this->typeResolver->resolve('Schema\\CodeScanningAnalysisDeletion');
        }

        if ($call === 'POST /repos/{owner}/{repo}/code-scanning/sarifs') {
            return $this->typeResolver->resolve('Schema\\CodeScanningSarifsReceipt|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/sarifs/{sarif_id}') {
            return $this->typeResolver->resolve('Schema\\CodeScanningSarifsStatus|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/collaborators') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Collaborator>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/collaborators') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Collaborator>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/collaborators/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/collaborators/{username}') {
            return $this->typeResolver->resolve('Schema\\RepositoryInvitation|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/collaborators/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/collaborators/{username}/permission') {
            return $this->typeResolver->resolve('Schema\\RepositoryCollaboratorPermission');
        }

        if ($call === 'GET /repos/{owner}/{repo}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CommitComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CommitComment>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/comments/{comment_id}') {
            return $this->typeResolver->resolve('Schema\\CommitComment');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/comments/{comment_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/comments/{comment_id}') {
            return $this->typeResolver->resolve('Schema\\CommitComment');
        }

        if ($call === 'GET /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('Schema\\Reaction');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Commit>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/commits') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Commit>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{commit_sha}/branches-where-head') {
            return $this->typeResolver->resolve('iterable<int,Schema\\BranchShort>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CommitComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CommitComment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
            return $this->typeResolver->resolve('Schema\\CommitComment');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{commit_sha}/pulls') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PullRequestSimple>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/commits/{commit_sha}/pulls') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PullRequestSimple>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}') {
            return $this->typeResolver->resolve('Schema\\Commit');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/check-runs') {
            return $this->typeResolver->resolve('Schema\\Operations\\Checks\\ListForRef\\Response\\ApplicationJson\\Ok\\Application\\Json');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/check-suites') {
            return $this->typeResolver->resolve('Schema\\Operations\\Checks\\ListSuitesForRef\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/status') {
            return $this->typeResolver->resolve('Schema\\CombinedCommitStatus');
        }

        if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/statuses') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Status>|Schema\\BasicError');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/commits/{ref}/statuses') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Status>|Schema\\BasicError');
        }

        if ($call === 'GET /repos/{owner}/{repo}/compare/{basehead}') {
            return $this->typeResolver->resolve('Schema\\CommitComparison');
        }

        if ($call === 'POST /repos/{owner}/{repo}/content_references/{content_reference_id}/attachments') {
            return $this->typeResolver->resolve('Schema\\ContentReferenceAttachment|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/contents/{path}') {
            return $this->typeResolver->resolve('Schema\\ContentDirectory|Schema\\ContentFile|Schema\\ContentSymlink|Schema\\ContentSubmodule|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/contents/{path}') {
            return $this->typeResolver->resolve('Schema\\FileCommit');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/contents/{path}') {
            return $this->typeResolver->resolve('Schema\\FileCommit');
        }

        if ($call === 'GET /repos/{owner}/{repo}/contributors') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Contributor>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/contributors') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Contributor>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/deployments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Deployment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/deployments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Deployment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/deployments') {
            return $this->typeResolver->resolve('Schema\\Deployment|Schema\\Operations\\Repos\\CreateDeployment\\Response\\ApplicationJson\\Accepted\\Application\\Json|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}') {
            return $this->typeResolver->resolve('Schema\\Deployment');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/deployments/{deployment_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
            return $this->typeResolver->resolve('iterable<int,Schema\\DeploymentStatus>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
            return $this->typeResolver->resolve('iterable<int,Schema\\DeploymentStatus>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
            return $this->typeResolver->resolve('Schema\\DeploymentStatus');
        }

        if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}') {
            return $this->typeResolver->resolve('Schema\\DeploymentStatus');
        }

        if ($call === 'POST /repos/{owner}/{repo}/dispatches') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/environments') {
            return $this->typeResolver->resolve('Schema\\Operations\\Repos\\GetAllEnvironments\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}') {
            return $this->typeResolver->resolve('Schema\\Environment');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/environments/{environment_name}') {
            return $this->typeResolver->resolve('Schema\\Environment');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies') {
            return $this->typeResolver->resolve('Schema\\Operations\\Repos\\ListDeploymentBranchPolicies\\Response\\ApplicationJson\\Ok');
        }

        if ($call === 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies') {
            return $this->typeResolver->resolve('Schema\\DeploymentBranchPolicy|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
            return $this->typeResolver->resolve('Schema\\DeploymentBranchPolicy');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
            return $this->typeResolver->resolve('Schema\\DeploymentBranchPolicy');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/forks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/forks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/forks') {
            return $this->typeResolver->resolve('Schema\\FullRepository');
        }

        if ($call === 'POST /repos/{owner}/{repo}/git/blobs') {
            return $this->typeResolver->resolve('Schema\\ShortBlob');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/blobs/{file_sha}') {
            return $this->typeResolver->resolve('Schema\\Blob');
        }

        if ($call === 'POST /repos/{owner}/{repo}/git/commits') {
            return $this->typeResolver->resolve('Schema\\GitCommit');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/commits/{commit_sha}') {
            return $this->typeResolver->resolve('Schema\\GitCommit');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/matching-refs/{ref}') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GitRef>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/ref/{ref}') {
            return $this->typeResolver->resolve('Schema\\GitRef');
        }

        if ($call === 'POST /repos/{owner}/{repo}/git/refs') {
            return $this->typeResolver->resolve('Schema\\GitRef');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/git/refs/{ref}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/git/refs/{ref}') {
            return $this->typeResolver->resolve('Schema\\GitRef');
        }

        if ($call === 'POST /repos/{owner}/{repo}/git/tags') {
            return $this->typeResolver->resolve('Schema\\GitTag');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/tags/{tag_sha}') {
            return $this->typeResolver->resolve('Schema\\GitTag');
        }

        if ($call === 'POST /repos/{owner}/{repo}/git/trees') {
            return $this->typeResolver->resolve('Schema\\GitTree');
        }

        if ($call === 'GET /repos/{owner}/{repo}/git/trees/{tree_sha}') {
            return $this->typeResolver->resolve('Schema\\GitTree');
        }

        if ($call === 'GET /repos/{owner}/{repo}/hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Hook>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Hook>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/hooks') {
            return $this->typeResolver->resolve('Schema\\Hook');
        }

        if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('Schema\\Hook');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}') {
            return $this->typeResolver->resolve('Schema\\Hook');
        }

        if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}/config') {
            return $this->typeResolver->resolve('Schema\\WebhookConfig');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}/config') {
            return $this->typeResolver->resolve('Schema\\WebhookConfig');
        }

        if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries') {
            return $this->typeResolver->resolve('iterable<int,Schema\\HookDeliveryItem>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}') {
            return $this->typeResolver->resolve('Schema\\HookDelivery');
        }

        if ($call === 'POST /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts') {
            return $this->typeResolver->resolve('Schema\\Operations\\Repos\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json');
        }

        if ($call === 'POST /repos/{owner}/{repo}/hooks/{hook_id}/pings') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /repos/{owner}/{repo}/hooks/{hook_id}/tests') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/installation') {
            return $this->typeResolver->resolve('Schema\\Installation|Schema\\BasicError');
        }

        if ($call === 'GET /repos/{owner}/{repo}/invitations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\RepositoryInvitation>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/invitations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\RepositoryInvitation>');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/invitations/{invitation_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/invitations/{invitation_id}') {
            return $this->typeResolver->resolve('Schema\\RepositoryInvitation');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Issue>|Schema\\BasicError');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Issue>|Schema\\BasicError');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues') {
            return $this->typeResolver->resolve('Schema\\Issue');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\IssueComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\IssueComment>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/comments/{comment_id}') {
            return $this->typeResolver->resolve('Schema\\IssueComment');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/issues/comments/{comment_id}') {
            return $this->typeResolver->resolve('Schema\\IssueComment');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('Schema\\Reaction');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\IssueEvent>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\IssueEvent>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/events/{event_id}') {
            return $this->typeResolver->resolve('Schema\\IssueEvent');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}') {
            return $this->typeResolver->resolve('Schema\\Issue|Schema\\BasicError|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/issues/{issue_number}') {
            return $this->typeResolver->resolve('Schema\\Issue|Schema\\BasicError');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/assignees') {
            return $this->typeResolver->resolve('Schema\\Issue');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/assignees') {
            return $this->typeResolver->resolve('Schema\\Issue');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\IssueComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\IssueComment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/comments') {
            return $this->typeResolver->resolve('Schema\\IssueComment');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\LabeledIssueEvent|Schema\\UnlabeledIssueEvent|Schema\\AssignedIssueEvent|Schema\\UnassignedIssueEvent|Schema\\MilestonedIssueEvent|Schema\\DemilestonedIssueEvent|Schema\\RenamedIssueEvent|Schema\\ReviewRequestedIssueEvent|Schema\\ReviewRequestRemovedIssueEvent|Schema\\ReviewDismissedIssueEvent|Schema\\LockedIssueEvent|Schema\\AddedToProjectIssueEvent|Schema\\MovedColumnInProjectIssueEvent|Schema\\RemovedFromProjectIssueEvent|Schema\\ConvertedNoteToIssueIssueEvent>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\LabeledIssueEvent|Schema\\UnlabeledIssueEvent|Schema\\AssignedIssueEvent|Schema\\UnassignedIssueEvent|Schema\\MilestonedIssueEvent|Schema\\DemilestonedIssueEvent|Schema\\RenamedIssueEvent|Schema\\ReviewRequestedIssueEvent|Schema\\ReviewRequestRemovedIssueEvent|Schema\\ReviewDismissedIssueEvent|Schema\\LockedIssueEvent|Schema\\AddedToProjectIssueEvent|Schema\\MovedColumnInProjectIssueEvent|Schema\\RemovedFromProjectIssueEvent|Schema\\ConvertedNoteToIssueIssueEvent>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/labels') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Label>|Schema\\BasicError');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/labels') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Label>|Schema\\BasicError');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/issues/{issue_number}/labels') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Label>|Schema\\BasicError');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/labels') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Label>|Schema\\BasicError');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels') {
            return $this->typeResolver->resolve('Schema\\BasicError|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels/{name}') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Label>|Schema\\BasicError');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/issues/{issue_number}/lock') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/lock') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
            return $this->typeResolver->resolve('Schema\\Reaction');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/timeline') {
            return $this->typeResolver->resolve('iterable<int,Schema\\LabeledIssueEvent|Schema\\UnlabeledIssueEvent|Schema\\MilestonedIssueEvent|Schema\\DemilestonedIssueEvent|Schema\\RenamedIssueEvent|Schema\\ReviewRequestedIssueEvent|Schema\\ReviewRequestRemovedIssueEvent|Schema\\ReviewDismissedIssueEvent|Schema\\LockedIssueEvent|Schema\\AddedToProjectIssueEvent|Schema\\MovedColumnInProjectIssueEvent|Schema\\RemovedFromProjectIssueEvent|Schema\\ConvertedNoteToIssueIssueEvent|Schema\\TimelineCommentEvent|Schema\\TimelineCrossReferencedEvent|Schema\\TimelineCommittedEvent|Schema\\TimelineReviewedEvent|Schema\\TimelineLineCommentedEvent|Schema\\TimelineCommitCommentedEvent|Schema\\TimelineAssignedIssueEvent|Schema\\TimelineUnassignedIssueEvent|Schema\\StateChangeIssueEvent>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/timeline') {
            return $this->typeResolver->resolve('iterable<int,Schema\\LabeledIssueEvent|Schema\\UnlabeledIssueEvent|Schema\\MilestonedIssueEvent|Schema\\DemilestonedIssueEvent|Schema\\RenamedIssueEvent|Schema\\ReviewRequestedIssueEvent|Schema\\ReviewRequestRemovedIssueEvent|Schema\\ReviewDismissedIssueEvent|Schema\\LockedIssueEvent|Schema\\AddedToProjectIssueEvent|Schema\\MovedColumnInProjectIssueEvent|Schema\\RemovedFromProjectIssueEvent|Schema\\ConvertedNoteToIssueIssueEvent|Schema\\TimelineCommentEvent|Schema\\TimelineCrossReferencedEvent|Schema\\TimelineCommittedEvent|Schema\\TimelineReviewedEvent|Schema\\TimelineLineCommentedEvent|Schema\\TimelineCommitCommentedEvent|Schema\\TimelineAssignedIssueEvent|Schema\\TimelineUnassignedIssueEvent|Schema\\StateChangeIssueEvent>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\DeployKey>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\DeployKey>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/keys') {
            return $this->typeResolver->resolve('Schema\\DeployKey');
        }

        if ($call === 'GET /repos/{owner}/{repo}/keys/{key_id}') {
            return $this->typeResolver->resolve('Schema\\DeployKey');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/keys/{key_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/labels') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Label>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/labels') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Label>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/labels') {
            return $this->typeResolver->resolve('Schema\\Label');
        }

        if ($call === 'GET /repos/{owner}/{repo}/labels/{name}') {
            return $this->typeResolver->resolve('Schema\\Label');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/labels/{name}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/labels/{name}') {
            return $this->typeResolver->resolve('Schema\\Label');
        }

        if ($call === 'GET /repos/{owner}/{repo}/languages') {
            return $this->typeResolver->resolve('Schema\\Language');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/lfs') {
            return $this->typeResolver->resolve('Schema\\Operations\\Repos\\EnableLfsForRepo\\Response\\ApplicationJson\\Accepted\\Application\\Json|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/lfs') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/license') {
            return $this->typeResolver->resolve('Schema\\LicenseContent');
        }

        if ($call === 'POST /repos/{owner}/{repo}/merge-upstream') {
            return $this->typeResolver->resolve('Schema\\MergedUpstream|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /repos/{owner}/{repo}/merges') {
            return $this->typeResolver->resolve('Schema\\Commit|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/milestones') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Milestone>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/milestones') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Milestone>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/milestones') {
            return $this->typeResolver->resolve('Schema\\Milestone');
        }

        if ($call === 'GET /repos/{owner}/{repo}/milestones/{milestone_number}') {
            return $this->typeResolver->resolve('Schema\\Milestone');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/milestones/{milestone_number}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/milestones/{milestone_number}') {
            return $this->typeResolver->resolve('Schema\\Milestone');
        }

        if ($call === 'GET /repos/{owner}/{repo}/milestones/{milestone_number}/labels') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Label>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/milestones/{milestone_number}/labels') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Label>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/notifications') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Thread>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/notifications') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Thread>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/notifications') {
            return $this->typeResolver->resolve('Schema\\Operations\\Activity\\MarkRepoNotificationsAsRead\\Response\\ApplicationJson\\Accepted\\Application\\Json|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pages') {
            return $this->typeResolver->resolve('Schema\\Page');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/pages') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pages') {
            return $this->typeResolver->resolve('Schema\\Page');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pages') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pages/builds') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PageBuild>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pages/builds') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PageBuild>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pages/builds') {
            return $this->typeResolver->resolve('Schema\\PageBuildStatus');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pages/builds/latest') {
            return $this->typeResolver->resolve('Schema\\PageBuild');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pages/builds/{build_id}') {
            return $this->typeResolver->resolve('Schema\\PageBuild');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pre-receive-hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\RepositoryPreReceiveHook>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pre-receive-hooks') {
            return $this->typeResolver->resolve('iterable<int,Schema\\RepositoryPreReceiveHook>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('Schema\\RepositoryPreReceiveHook');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('Schema\\RepositoryPreReceiveHook');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
            return $this->typeResolver->resolve('Schema\\RepositoryPreReceiveHook');
        }

        if ($call === 'GET /repos/{owner}/{repo}/projects') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Project>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/projects') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Project>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/projects') {
            return $this->typeResolver->resolve('Schema\\Project');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PullRequestSimple>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PullRequestSimple>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls') {
            return $this->typeResolver->resolve('Schema\\PullRequest');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PullRequestReviewComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PullRequestReviewComment>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
            return $this->typeResolver->resolve('Schema\\PullRequestReviewComment');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
            return $this->typeResolver->resolve('Schema\\PullRequestReviewComment');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
            return $this->typeResolver->resolve('Schema\\Reaction');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}') {
            return $this->typeResolver->resolve('Schema\\PullRequest|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/pulls/{pull_number}') {
            return $this->typeResolver->resolve('Schema\\PullRequest');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PullRequestReviewComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PullRequestReviewComment>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
            return $this->typeResolver->resolve('Schema\\PullRequestReviewComment');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/comments/{comment_id}/replies') {
            return $this->typeResolver->resolve('Schema\\PullRequestReviewComment');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/commits') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Commit>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/commits') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Commit>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/files') {
            return $this->typeResolver->resolve('iterable<int,Schema\\DiffEntry>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/files') {
            return $this->typeResolver->resolve('iterable<int,Schema\\DiffEntry>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/merge') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/merge') {
            return $this->typeResolver->resolve('Schema\\PullRequestMergeResult');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
            return $this->typeResolver->resolve('Schema\\PullRequestReviewRequest');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
            return $this->typeResolver->resolve('Schema\\PullRequestSimple|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
            return $this->typeResolver->resolve('Schema\\PullRequestSimple');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PullRequestReview>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
            return $this->typeResolver->resolve('iterable<int,Schema\\PullRequestReview>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
            return $this->typeResolver->resolve('Schema\\PullRequestReview');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
            return $this->typeResolver->resolve('Schema\\PullRequestReview');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
            return $this->typeResolver->resolve('Schema\\PullRequestReview');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
            return $this->typeResolver->resolve('Schema\\PullRequestReview');
        }

        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ReviewComment>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ReviewComment>');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals') {
            return $this->typeResolver->resolve('Schema\\PullRequestReview');
        }

        if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/events') {
            return $this->typeResolver->resolve('Schema\\PullRequestReview');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/update-branch') {
            return $this->typeResolver->resolve('Schema\\Operations\\Pulls\\UpdateBranch\\Response\\ApplicationJson\\Accepted\\Application\\Json');
        }

        if ($call === 'GET /repos/{owner}/{repo}/readme') {
            return $this->typeResolver->resolve('Schema\\ContentFile');
        }

        if ($call === 'GET /repos/{owner}/{repo}/readme/{dir}') {
            return $this->typeResolver->resolve('Schema\\ContentFile');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Release>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/releases') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Release>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/releases') {
            return $this->typeResolver->resolve('Schema\\Release');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/assets/{asset_id}') {
            return $this->typeResolver->resolve('Schema\\ReleaseAsset|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/releases/assets/{asset_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/releases/assets/{asset_id}') {
            return $this->typeResolver->resolve('Schema\\ReleaseAsset');
        }

        if ($call === 'POST /repos/{owner}/{repo}/releases/generate-notes') {
            return $this->typeResolver->resolve('Schema\\ReleaseNotesContent');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/latest') {
            return $this->typeResolver->resolve('Schema\\Release');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/tags/{tag}') {
            return $this->typeResolver->resolve('Schema\\Release');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}') {
            return $this->typeResolver->resolve('Schema\\Release');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/releases/{release_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/releases/{release_id}') {
            return $this->typeResolver->resolve('Schema\\Release');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}/assets') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ReleaseAsset>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/releases/{release_id}/assets') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ReleaseAsset>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/releases/{release_id}/assets') {
            return $this->typeResolver->resolve('Schema\\ReleaseAsset|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/releases/{release_id}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'POST /repos/{owner}/{repo}/releases/{release_id}/reactions') {
            return $this->typeResolver->resolve('Schema\\Reaction');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SecretScanningAlert>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/secret-scanning/alerts') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SecretScanningAlert>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}') {
            return $this->typeResolver->resolve('Schema\\SecretScanningAlert|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}') {
            return $this->typeResolver->resolve('Schema\\SecretScanningAlert|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SecretScanningLocation>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SecretScanningLocation>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stargazers') {
            return $this->typeResolver->resolve('Schema\\SimpleUser|Schema\\Stargazer');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stats/code_frequency') {
            return $this->typeResolver->resolve('iterable<int,int>|Schema\\Operations\\Repos\\GetCodeFrequencyStats\\Response\\ApplicationJson\\Accepted\\Application\\Json|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stats/commit_activity') {
            return $this->typeResolver->resolve('iterable<int,Schema\\CommitActivity>|Schema\\Operations\\Repos\\GetCommitActivityStats\\Response\\ApplicationJson\\Accepted\\Application\\Json|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stats/contributors') {
            return $this->typeResolver->resolve('iterable<int,Schema\\ContributorActivity>|Schema\\Operations\\Repos\\GetContributorsStats\\Response\\ApplicationJson\\Accepted\\Application\\Json|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stats/participation') {
            return $this->typeResolver->resolve('Schema\\ParticipationStats');
        }

        if ($call === 'GET /repos/{owner}/{repo}/stats/punch_card') {
            return $this->typeResolver->resolve('iterable<int,int>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /repos/{owner}/{repo}/statuses/{sha}') {
            return $this->typeResolver->resolve('Schema\\Status');
        }

        if ($call === 'GET /repos/{owner}/{repo}/subscribers') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/subscribers') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/subscription') {
            return $this->typeResolver->resolve('Schema\\RepositorySubscription|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/subscription') {
            return $this->typeResolver->resolve('Schema\\RepositorySubscription');
        }

        if ($call === 'DELETE /repos/{owner}/{repo}/subscription') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repos/{owner}/{repo}/tags') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Tag>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/tags') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Tag>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/tarball/{ref}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'STREAM /repos/{owner}/{repo}/tarball/{ref}') {
            return $this->typeResolver->resolve('iterable<int,string>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'LIST /repos/{owner}/{repo}/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'GET /repos/{owner}/{repo}/topics') {
            return $this->typeResolver->resolve('Schema\\Topic');
        }

        if ($call === 'PUT /repos/{owner}/{repo}/topics') {
            return $this->typeResolver->resolve('Schema\\Topic');
        }

        if ($call === 'POST /repos/{owner}/{repo}/transfer') {
            return $this->typeResolver->resolve('Schema\\MinimalRepository');
        }

        if ($call === 'GET /repos/{owner}/{repo}/zipball/{ref}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'STREAM /repos/{owner}/{repo}/zipball/{ref}') {
            return $this->typeResolver->resolve('iterable<int,string>');
        }

        if ($call === 'POST /repos/{template_owner}/{template_repo}/generate') {
            return $this->typeResolver->resolve('Schema\\Repository');
        }

        if ($call === 'GET /repositories') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/secrets') {
            return $this->typeResolver->resolve('Schema\\Operations\\Actions\\ListEnvironmentSecrets\\Response\\ApplicationJson\\Ok\\Application\\Json');
        }

        if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/secrets/public-key') {
            return $this->typeResolver->resolve('Schema\\ActionsPublicKey');
        }

        if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}') {
            return $this->typeResolver->resolve('Schema\\ActionsSecret');
        }

        if ($call === 'PUT /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}') {
            return $this->typeResolver->resolve('Schema\\EmptyObject|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /search/code') {
            return $this->typeResolver->resolve('Schema\\Operations\\Search\\Code\\Response\\ApplicationJson\\Ok|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /search/commits') {
            return $this->typeResolver->resolve('Schema\\Operations\\Search\\Commits\\Response\\ApplicationJson\\Ok|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /search/issues') {
            return $this->typeResolver->resolve('Schema\\Operations\\Search\\IssuesAndPullRequests\\Response\\ApplicationJson\\Ok|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /search/labels') {
            return $this->typeResolver->resolve('Schema\\Operations\\Search\\Labels\\Response\\ApplicationJson\\Ok|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /search/repositories') {
            return $this->typeResolver->resolve('Schema\\Operations\\Search\\Repos\\Response\\ApplicationJson\\Ok|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /search/topics') {
            return $this->typeResolver->resolve('Schema\\Operations\\Search\\Topics\\Response\\ApplicationJson\\Ok|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /search/users') {
            return $this->typeResolver->resolve('Schema\\Operations\\Search\\Users\\Response\\ApplicationJson\\Ok|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /setup/api/configcheck') {
            return $this->typeResolver->resolve('Schema\\ConfigurationStatus');
        }

        if ($call === 'POST /setup/api/configure') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /setup/api/maintenance') {
            return $this->typeResolver->resolve('Schema\\MaintenanceStatus');
        }

        if ($call === 'POST /setup/api/maintenance') {
            return $this->typeResolver->resolve('Schema\\MaintenanceStatus');
        }

        if ($call === 'GET /setup/api/settings') {
            return $this->typeResolver->resolve('Schema\\EnterpriseSettings');
        }

        if ($call === 'PUT /setup/api/settings') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /setup/api/settings/authorized-keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SshKey>');
        }

        if ($call === 'POST /setup/api/settings/authorized-keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SshKey>');
        }

        if ($call === 'DELETE /setup/api/settings/authorized-keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SshKey>');
        }

        if ($call === 'POST /setup/api/start') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /setup/api/upgrade') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /teams/{team_id}') {
            return $this->typeResolver->resolve('Schema\\TeamFull');
        }

        if ($call === 'DELETE /teams/{team_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /teams/{team_id}') {
            return $this->typeResolver->resolve('Schema\\TeamFull');
        }

        if ($call === 'GET /teams/{team_id}/discussions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamDiscussion>');
        }

        if ($call === 'LIST /teams/{team_id}/discussions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamDiscussion>');
        }

        if ($call === 'POST /teams/{team_id}/discussions') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussion');
        }

        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussion');
        }

        if ($call === 'DELETE /teams/{team_id}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /teams/{team_id}/discussions/{discussion_number}') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussion');
        }

        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamDiscussionComment>');
        }

        if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamDiscussionComment>');
        }

        if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/comments') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussionComment');
        }

        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussionComment');
        }

        if ($call === 'DELETE /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
            return $this->typeResolver->resolve('Schema\\TeamDiscussionComment');
        }

        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
            return $this->typeResolver->resolve('Schema\\Reaction');
        }

        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Reaction>');
        }

        if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/reactions') {
            return $this->typeResolver->resolve('Schema\\Reaction');
        }

        if ($call === 'GET /teams/{team_id}/members') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'LIST /teams/{team_id}/members') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'GET /teams/{team_id}/members/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /teams/{team_id}/members/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /teams/{team_id}/members/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /teams/{team_id}/memberships/{username}') {
            return $this->typeResolver->resolve('Schema\\TeamMembership');
        }

        if ($call === 'PUT /teams/{team_id}/memberships/{username}') {
            return $this->typeResolver->resolve('Schema\\TeamMembership|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /teams/{team_id}/memberships/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /teams/{team_id}/projects') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamProject>');
        }

        if ($call === 'LIST /teams/{team_id}/projects') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamProject>');
        }

        if ($call === 'GET /teams/{team_id}/projects/{project_id}') {
            return $this->typeResolver->resolve('Schema\\TeamProject|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /teams/{team_id}/projects/{project_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /teams/{team_id}/projects/{project_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /teams/{team_id}/repos') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /teams/{team_id}/repos') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'GET /teams/{team_id}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('Schema\\TeamRepository|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /teams/{team_id}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /teams/{team_id}/repos/{owner}/{repo}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /teams/{team_id}/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'LIST /teams/{team_id}/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Team>');
        }

        if ($call === 'GET /user') {
            return $this->typeResolver->resolve('Schema\\PrivateUser|Schema\\PublicUser|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /user') {
            return $this->typeResolver->resolve('Schema\\PrivateUser|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/emails') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Email>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/emails') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Email>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /user/emails') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Email>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /user/emails') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/followers') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/followers') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/following') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/following') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/following/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /user/following/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /user/following/{username}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/gpg_keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GpgKey>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/gpg_keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GpgKey>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /user/gpg_keys') {
            return $this->typeResolver->resolve('Schema\\GpgKey|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/gpg_keys/{gpg_key_id}') {
            return $this->typeResolver->resolve('Schema\\GpgKey|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /user/gpg_keys/{gpg_key_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/installations') {
            return $this->typeResolver->resolve('Schema\\Operations\\Apps\\ListInstallationsForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/installations/{installation_id}/repositories') {
            return $this->typeResolver->resolve('Schema\\Operations\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\ApplicationJson\\Ok|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /user/installations/{installation_id}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /user/installations/{installation_id}/repositories/{repository_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/issues') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Issue>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/issues') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Issue>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Key>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Key>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /user/keys') {
            return $this->typeResolver->resolve('Schema\\Key|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/keys/{key_id}') {
            return $this->typeResolver->resolve('Schema\\Key|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /user/keys/{key_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/memberships/orgs') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrgMembership>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/memberships/orgs') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrgMembership>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/memberships/orgs/{org}') {
            return $this->typeResolver->resolve('Schema\\OrgMembership');
        }

        if ($call === 'PATCH /user/memberships/orgs/{org}') {
            return $this->typeResolver->resolve('Schema\\OrgMembership');
        }

        if ($call === 'GET /user/orgs') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrganizationSimple>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/orgs') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrganizationSimple>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /user/projects') {
            return $this->typeResolver->resolve('Schema\\Project|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/public_emails') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Email>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/public_emails') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Email>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/repos') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Repository>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/repos') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Repository>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'POST /user/repos') {
            return $this->typeResolver->resolve('Schema\\Repository|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/repository_invitations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\RepositoryInvitation>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/repository_invitations') {
            return $this->typeResolver->resolve('iterable<int,Schema\\RepositoryInvitation>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /user/repository_invitations/{invitation_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PATCH /user/repository_invitations/{invitation_id}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/starred') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Repository>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/starred') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Repository>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/starred/{owner}/{repo}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'PUT /user/starred/{owner}/{repo}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /user/starred/{owner}/{repo}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/subscriptions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/subscriptions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /user/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamFull>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'LIST /user/teams') {
            return $this->typeResolver->resolve('iterable<int,Schema\\TeamFull>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /users') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>|\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /users/{username}') {
            return $this->typeResolver->resolve('Schema\\PrivateUser|Schema\\PublicUser');
        }

        if ($call === 'GET /users/{username}/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'LIST /users/{username}/events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'GET /users/{username}/events/orgs/{org}') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'LIST /users/{username}/events/orgs/{org}') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'GET /users/{username}/events/public') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'LIST /users/{username}/events/public') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'GET /users/{username}/followers') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'LIST /users/{username}/followers') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'GET /users/{username}/following') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'LIST /users/{username}/following') {
            return $this->typeResolver->resolve('iterable<int,Schema\\SimpleUser>');
        }

        if ($call === 'GET /users/{username}/following/{target_user}') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /users/{username}/gists') {
            return $this->typeResolver->resolve('iterable<int,Schema\\BaseGist>');
        }

        if ($call === 'LIST /users/{username}/gists') {
            return $this->typeResolver->resolve('iterable<int,Schema\\BaseGist>');
        }

        if ($call === 'GET /users/{username}/gpg_keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GpgKey>');
        }

        if ($call === 'LIST /users/{username}/gpg_keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\GpgKey>');
        }

        if ($call === 'GET /users/{username}/hovercard') {
            return $this->typeResolver->resolve('Schema\\Hovercard');
        }

        if ($call === 'GET /users/{username}/installation') {
            return $this->typeResolver->resolve('Schema\\Installation');
        }

        if ($call === 'GET /users/{username}/keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\KeySimple>');
        }

        if ($call === 'LIST /users/{username}/keys') {
            return $this->typeResolver->resolve('iterable<int,Schema\\KeySimple>');
        }

        if ($call === 'GET /users/{username}/orgs') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrganizationSimple>');
        }

        if ($call === 'LIST /users/{username}/orgs') {
            return $this->typeResolver->resolve('iterable<int,Schema\\OrganizationSimple>');
        }

        if ($call === 'GET /users/{username}/projects') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Project>');
        }

        if ($call === 'LIST /users/{username}/projects') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Project>');
        }

        if ($call === 'GET /users/{username}/received_events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'LIST /users/{username}/received_events') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'GET /users/{username}/received_events/public') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'LIST /users/{username}/received_events/public') {
            return $this->typeResolver->resolve('iterable<int,Schema\\Event>');
        }

        if ($call === 'GET /users/{username}/repos') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /users/{username}/repos') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'PUT /users/{username}/site_admin') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /users/{username}/site_admin') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /users/{username}/starred') {
            return $this->typeResolver->resolve('Schema\\StarredRepository|Schema\\Repository');
        }

        if ($call === 'GET /users/{username}/subscriptions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'LIST /users/{username}/subscriptions') {
            return $this->typeResolver->resolve('iterable<int,Schema\\MinimalRepository>');
        }

        if ($call === 'PUT /users/{username}/suspended') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'DELETE /users/{username}/suspended') {
            return $this->typeResolver->resolve('\\ApiClients\\Tools\\OpenApiClient\\Utils\\Response\\WithoutBody');
        }

        if ($call === 'GET /zen') {
            return $this->typeResolver->resolve('string');
        }

        return null;
    }
}
