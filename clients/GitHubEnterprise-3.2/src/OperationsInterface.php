<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise;

interface OperationsInterface
{
    public function meta(): Operation\Meta;

    public function enterpriseAdmin(): Operation\EnterpriseAdmin;

    public function apps(): Operation\Apps;

    public function oauthAuthorizations(): Operation\OauthAuthorizations;

    public function codesOfConduct(): Operation\CodesOfConduct;

    public function emojis(): Operation\Emojis;

    public function activity(): Operation\Activity;

    public function gists(): Operation\Gists;

    public function gitignore(): Operation\Gitignore;

    public function issues(): Operation\Issues;

    public function licenses(): Operation\Licenses;

    public function markdown(): Operation\Markdown;

    public function orgs(): Operation\Orgs;

    public function actions(): Operation\Actions;

    public function projects(): Operation\Projects;

    public function repos(): Operation\Repos;

    public function teams(): Operation\Teams;

    public function reactions(): Operation\Reactions;

    public function rateLimit(): Operation\RateLimit;

    public function checks(): Operation\Checks;

    public function codeScanning(): Operation\CodeScanning;

    public function git(): Operation\Git;

    public function pulls(): Operation\Pulls;

    public function secretScanning(): Operation\SecretScanning;

    public function search(): Operation\Search;

    public function users(): Operation\Users;
}
