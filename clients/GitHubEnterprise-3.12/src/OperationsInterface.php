<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise;

interface OperationsInterface
{
    public function meta(): Operation\Meta;

    public function enterpriseAdmin(): Operation\EnterpriseAdmin;

    public function securityAdvisories(): Operation\SecurityAdvisories;

    public function apps(): Operation\Apps;

    public function oauthAuthorizations(): Operation\OauthAuthorizations;

    public function codesOfConduct(): Operation\CodesOfConduct;

    public function emojis(): Operation\Emojis;

    public function actions(): Operation\Actions;

    public function codeScanning(): Operation\CodeScanning;

    public function secretScanning(): Operation\SecretScanning;

    public function dependabot(): Operation\Dependabot;

    public function billing(): Operation\Billing;

    public function activity(): Operation\Activity;

    public function gists(): Operation\Gists;

    public function gitignore(): Operation\Gitignore;

    public function issues(): Operation\Issues;

    public function licenses(): Operation\Licenses;

    public function markdown(): Operation\Markdown;

    public function orgs(): Operation\Orgs;

    public function oidc(): Operation\Oidc;

    public function announcementBanners(): Operation\AnnouncementBanners;

    public function packages(): Operation\Packages;

    public function teams(): Operation\Teams;

    public function migrations(): Operation\Migrations;

    public function projects(): Operation\Projects;

    public function repos(): Operation\Repos;

    public function reactions(): Operation\Reactions;

    public function rateLimit(): Operation\RateLimit;

    public function checks(): Operation\Checks;

    public function dependencyGraph(): Operation\DependencyGraph;

    public function git(): Operation\Git;

    public function pulls(): Operation\Pulls;

    public function search(): Operation\Search;

    public function users(): Operation\Users;
}
