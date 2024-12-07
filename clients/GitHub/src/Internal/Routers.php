<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal;

use ApiClients\Client\GitHub\Internal\Router\Get\Actions;
use ApiClients\Client\GitHub\Internal\Router\Get\Activity;
use ApiClients\Client\GitHub\Internal\Router\Get\ApiInsights;
use ApiClients\Client\GitHub\Internal\Router\Get\Apps;
use ApiClients\Client\GitHub\Internal\Router\Get\Billing;
use ApiClients\Client\GitHub\Internal\Router\Get\Checks;
use ApiClients\Client\GitHub\Internal\Router\Get\Classroom;
use ApiClients\Client\GitHub\Internal\Router\Get\CodeScanning;
use ApiClients\Client\GitHub\Internal\Router\Get\CodeSecurity;
use ApiClients\Client\GitHub\Internal\Router\Get\CodesOfConduct;
use ApiClients\Client\GitHub\Internal\Router\Get\Codespaces;
use ApiClients\Client\GitHub\Internal\Router\Get\Copilot;
use ApiClients\Client\GitHub\Internal\Router\Get\Dependabot;
use ApiClients\Client\GitHub\Internal\Router\Get\DependencyGraph;
use ApiClients\Client\GitHub\Internal\Router\Get\Emojis;
use ApiClients\Client\GitHub\Internal\Router\Get\Gists;
use ApiClients\Client\GitHub\Internal\Router\Get\Git;
use ApiClients\Client\GitHub\Internal\Router\Get\Gitignore;
use ApiClients\Client\GitHub\Internal\Router\Get\Interactions;
use ApiClients\Client\GitHub\Internal\Router\Get\Issues;
use ApiClients\Client\GitHub\Internal\Router\Get\Licenses;
use ApiClients\Client\GitHub\Internal\Router\Get\Meta;
use ApiClients\Client\GitHub\Internal\Router\Get\Migrations;
use ApiClients\Client\GitHub\Internal\Router\Get\Oidc;
use ApiClients\Client\GitHub\Internal\Router\Get\Orgs;
use ApiClients\Client\GitHub\Internal\Router\Get\Packages;
use ApiClients\Client\GitHub\Internal\Router\Get\Projects;
use ApiClients\Client\GitHub\Internal\Router\Get\Pulls;
use ApiClients\Client\GitHub\Internal\Router\Get\RateLimit;
use ApiClients\Client\GitHub\Internal\Router\Get\Reactions;
use ApiClients\Client\GitHub\Internal\Router\Get\Repos;
use ApiClients\Client\GitHub\Internal\Router\Get\Search;
use ApiClients\Client\GitHub\Internal\Router\Get\SecretScanning;
use ApiClients\Client\GitHub\Internal\Router\Get\SecurityAdvisories;
use ApiClients\Client\GitHub\Internal\Router\Get\Teams;
use ApiClients\Client\GitHub\Internal\Router\Get\Users;
use ApiClients\Client\GitHub\Internal\Router\Post\Markdown;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class Routers
{
    private Meta|null $internal🔀Router🔀Get🔀Meta                                                                               = null;
    private SecurityAdvisories|null $internal🔀Router🔀Get🔀SecurityAdvisories                                                   = null;
    private Apps|null $internal🔀Router🔀Get🔀Apps                                                                               = null;
    private Classroom|null $internal🔀Router🔀Get🔀Classroom                                                                     = null;
    private CodesOfConduct|null $internal🔀Router🔀Get🔀CodesOfConduct                                                           = null;
    private Emojis|null $internal🔀Router🔀Get🔀Emojis                                                                           = null;
    private Activity|null $internal🔀Router🔀Get🔀Activity                                                                       = null;
    private Gists|null $internal🔀Router🔀Get🔀Gists                                                                             = null;
    private Issues|null $internal🔀Router🔀Get🔀Issues                                                                           = null;
    private Licenses|null $internal🔀Router🔀Get🔀Licenses                                                                       = null;
    private Orgs|null $internal🔀Router🔀Get🔀Orgs                                                                               = null;
    private RateLimit|null $internal🔀Router🔀Get🔀RateLimit                                                                     = null;
    private Repos|null $internal🔀Router🔀Get🔀Repos                                                                             = null;
    private Users|null $internal🔀Router🔀Get🔀Users                                                                             = null;
    private Gitignore|null $internal🔀Router🔀Get🔀Gitignore                                                                     = null;
    private Projects|null $internal🔀Router🔀Get🔀Projects                                                                       = null;
    private Search|null $internal🔀Router🔀Get🔀Search                                                                           = null;
    private Teams|null $internal🔀Router🔀Get🔀Teams                                                                             = null;
    private Codespaces|null $internal🔀Router🔀Get🔀Codespaces                                                                   = null;
    private Interactions|null $internal🔀Router🔀Get🔀Interactions                                                               = null;
    private Migrations|null $internal🔀Router🔀Get🔀Migrations                                                                   = null;
    private Packages|null $internal🔀Router🔀Get🔀Packages                                                                       = null;
    private Copilot|null $internal🔀Router🔀Get🔀Copilot                                                                         = null;
    private Dependabot|null $internal🔀Router🔀Get🔀Dependabot                                                                   = null;
    private SecretScanning|null $internal🔀Router🔀Get🔀SecretScanning                                                           = null;
    private Actions|null $internal🔀Router🔀Get🔀Actions                                                                         = null;
    private CodeScanning|null $internal🔀Router🔀Get🔀CodeScanning                                                               = null;
    private CodeSecurity|null $internal🔀Router🔀Get🔀CodeSecurity                                                               = null;
    private Pulls|null $internal🔀Router🔀Get🔀Pulls                                                                             = null;
    private Billing|null $internal🔀Router🔀Get🔀Billing                                                                         = null;
    private ApiInsights|null $internal🔀Router🔀Get🔀ApiInsights                                                                 = null;
    private Checks|null $internal🔀Router🔀Get🔀Checks                                                                           = null;
    private DependencyGraph|null $internal🔀Router🔀Get🔀DependencyGraph                                                         = null;
    private Reactions|null $internal🔀Router🔀Get🔀Reactions                                                                     = null;
    private Oidc|null $internal🔀Router🔀Get🔀Oidc                                                                               = null;
    private Git|null $internal🔀Router🔀Get🔀Git                                                                                 = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Apps|null $internal🔀Router🔀Post🔀Apps                               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Gists|null $internal🔀Router🔀Post🔀Gists                             = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Orgs|null $internal🔀Router🔀Post🔀Orgs                               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Migrations|null $internal🔀Router🔀Post🔀Migrations                   = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Projects|null $internal🔀Router🔀Post🔀Projects                       = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Repos|null $internal🔀Router🔀Post🔀Repos                             = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Teams|null $internal🔀Router🔀Post🔀Teams                             = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Actions|null $internal🔀Router🔀Post🔀Actions                         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Codespaces|null $internal🔀Router🔀Post🔀Codespaces                   = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Copilot|null $internal🔀Router🔀Post🔀Copilot                         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\CodeScanning|null $internal🔀Router🔀Post🔀CodeScanning               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\DependencyGraph|null $internal🔀Router🔀Post🔀DependencyGraph         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Git|null $internal🔀Router🔀Post🔀Git                                 = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\SecretScanning|null $internal🔀Router🔀Post🔀SecretScanning           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\SecurityAdvisories|null $internal🔀Router🔀Post🔀SecurityAdvisories   = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Reactions|null $internal🔀Router🔀Post🔀Reactions                     = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Packages|null $internal🔀Router🔀Post🔀Packages                       = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\CodeSecurity|null $internal🔀Router🔀Post🔀CodeSecurity               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Checks|null $internal🔀Router🔀Post🔀Checks                           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Issues|null $internal🔀Router🔀Post🔀Issues                           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Pulls|null $internal🔀Router🔀Post🔀Pulls                             = null;
    private Markdown|null $internal🔀Router🔀Post🔀Markdown                                                                      = null;
    private \ApiClients\Client\GitHub\Internal\Router\Post\Users|null $internal🔀Router🔀Post🔀Users                             = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Apps|null $internal🔀Router🔀Patch🔀Apps                             = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Activity|null $internal🔀Router🔀Patch🔀Activity                     = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Projects|null $internal🔀Router🔀Patch🔀Projects                     = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Repos|null $internal🔀Router🔀Patch🔀Repos                           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Codespaces|null $internal🔀Router🔀Patch🔀Codespaces                 = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Users|null $internal🔀Router🔀Patch🔀Users                           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Gists|null $internal🔀Router🔀Patch🔀Gists                           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Orgs|null $internal🔀Router🔀Patch🔀Orgs                             = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Teams|null $internal🔀Router🔀Patch🔀Teams                           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Migrations|null $internal🔀Router🔀Patch🔀Migrations                 = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Actions|null $internal🔀Router🔀Patch🔀Actions                       = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\CodeSecurity|null $internal🔀Router🔀Patch🔀CodeSecurity             = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Checks|null $internal🔀Router🔀Patch🔀Checks                         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\CodeScanning|null $internal🔀Router🔀Patch🔀CodeScanning             = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Issues|null $internal🔀Router🔀Patch🔀Issues                         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Pulls|null $internal🔀Router🔀Patch🔀Pulls                           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\SecurityAdvisories|null $internal🔀Router🔀Patch🔀SecurityAdvisories = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Dependabot|null $internal🔀Router🔀Patch🔀Dependabot                 = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\Git|null $internal🔀Router🔀Patch🔀Git                               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Patch\SecretScanning|null $internal🔀Router🔀Patch🔀SecretScanning         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Apps|null $internal🔀Router🔀Delete🔀Apps                           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Gists|null $internal🔀Router🔀Delete🔀Gists                         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Activity|null $internal🔀Router🔀Delete🔀Activity                   = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Interactions|null $internal🔀Router🔀Delete🔀Interactions           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Projects|null $internal🔀Router🔀Delete🔀Projects                   = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Repos|null $internal🔀Router🔀Delete🔀Repos                         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Users|null $internal🔀Router🔀Delete🔀Users                         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Codespaces|null $internal🔀Router🔀Delete🔀Codespaces               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Orgs|null $internal🔀Router🔀Delete🔀Orgs                           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Teams|null $internal🔀Router🔀Delete🔀Teams                         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Migrations|null $internal🔀Router🔀Delete🔀Migrations               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Packages|null $internal🔀Router🔀Delete🔀Packages                   = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Actions|null $internal🔀Router🔀Delete🔀Actions                     = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\CodeScanning|null $internal🔀Router🔀Delete🔀CodeScanning           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Dependabot|null $internal🔀Router🔀Delete🔀Dependabot               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Git|null $internal🔀Router🔀Delete🔀Git                             = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Issues|null $internal🔀Router🔀Delete🔀Issues                       = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Pulls|null $internal🔀Router🔀Delete🔀Pulls                         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\CodeSecurity|null $internal🔀Router🔀Delete🔀CodeSecurity           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Copilot|null $internal🔀Router🔀Delete🔀Copilot                     = null;
    private \ApiClients\Client\GitHub\Internal\Router\Delete\Reactions|null $internal🔀Router🔀Delete🔀Reactions                 = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Apps|null $internal🔀Router🔀Put🔀Apps                                 = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Activity|null $internal🔀Router🔀Put🔀Activity                         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Actions|null $internal🔀Router🔀Put🔀Actions                           = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Orgs|null $internal🔀Router🔀Put🔀Orgs                                 = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Codespaces|null $internal🔀Router🔀Put🔀Codespaces                     = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Repos|null $internal🔀Router🔀Put🔀Repos                               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Projects|null $internal🔀Router🔀Put🔀Projects                         = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Migrations|null $internal🔀Router🔀Put🔀Migrations                     = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Interactions|null $internal🔀Router🔀Put🔀Interactions                 = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Teams|null $internal🔀Router🔀Put🔀Teams                               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Gists|null $internal🔀Router🔀Put🔀Gists                               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Users|null $internal🔀Router🔀Put🔀Users                               = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Oidc|null $internal🔀Router🔀Put🔀Oidc                                 = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\CodeSecurity|null $internal🔀Router🔀Put🔀CodeSecurity                 = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Dependabot|null $internal🔀Router🔀Put🔀Dependabot                     = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Issues|null $internal🔀Router🔀Put🔀Issues                             = null;
    private \ApiClients\Client\GitHub\Internal\Router\Put\Pulls|null $internal🔀Router🔀Put🔀Pulls                               = null;

    public function __construct(private readonly AuthenticationInterface $authentication, private readonly Browser $browser, private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrators $hydrators)
    {
    }

    public function internal🔀Router🔀Get🔀Meta(): Meta
    {
        if ($this->internal🔀Router🔀Get🔀Meta instanceof Meta === false) {
            $this->internal🔀Router🔀Get🔀Meta = new Meta(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Meta;
    }

    public function internal🔀Router🔀Get🔀SecurityAdvisories(): SecurityAdvisories
    {
        if ($this->internal🔀Router🔀Get🔀SecurityAdvisories instanceof SecurityAdvisories === false) {
            $this->internal🔀Router🔀Get🔀SecurityAdvisories = new SecurityAdvisories(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀SecurityAdvisories;
    }

    public function internal🔀Router🔀Get🔀Apps(): Apps
    {
        if ($this->internal🔀Router🔀Get🔀Apps instanceof Apps === false) {
            $this->internal🔀Router🔀Get🔀Apps = new Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Apps;
    }

    public function internal🔀Router🔀Get🔀Classroom(): Classroom
    {
        if ($this->internal🔀Router🔀Get🔀Classroom instanceof Classroom === false) {
            $this->internal🔀Router🔀Get🔀Classroom = new Classroom(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Classroom;
    }

    public function internal🔀Router🔀Get🔀CodesOfConduct(): CodesOfConduct
    {
        if ($this->internal🔀Router🔀Get🔀CodesOfConduct instanceof CodesOfConduct === false) {
            $this->internal🔀Router🔀Get🔀CodesOfConduct = new CodesOfConduct(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀CodesOfConduct;
    }

    public function internal🔀Router🔀Get🔀Emojis(): Emojis
    {
        if ($this->internal🔀Router🔀Get🔀Emojis instanceof Emojis === false) {
            $this->internal🔀Router🔀Get🔀Emojis = new Emojis(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Emojis;
    }

    public function internal🔀Router🔀Get🔀Activity(): Activity
    {
        if ($this->internal🔀Router🔀Get🔀Activity instanceof Activity === false) {
            $this->internal🔀Router🔀Get🔀Activity = new Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Activity;
    }

    public function internal🔀Router🔀Get🔀Gists(): Gists
    {
        if ($this->internal🔀Router🔀Get🔀Gists instanceof Gists === false) {
            $this->internal🔀Router🔀Get🔀Gists = new Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Gists;
    }

    public function internal🔀Router🔀Get🔀Issues(): Issues
    {
        if ($this->internal🔀Router🔀Get🔀Issues instanceof Issues === false) {
            $this->internal🔀Router🔀Get🔀Issues = new Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Issues;
    }

    public function internal🔀Router🔀Get🔀Licenses(): Licenses
    {
        if ($this->internal🔀Router🔀Get🔀Licenses instanceof Licenses === false) {
            $this->internal🔀Router🔀Get🔀Licenses = new Licenses(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Licenses;
    }

    public function internal🔀Router🔀Get🔀Orgs(): Orgs
    {
        if ($this->internal🔀Router🔀Get🔀Orgs instanceof Orgs === false) {
            $this->internal🔀Router🔀Get🔀Orgs = new Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Orgs;
    }

    public function internal🔀Router🔀Get🔀RateLimit(): RateLimit
    {
        if ($this->internal🔀Router🔀Get🔀RateLimit instanceof RateLimit === false) {
            $this->internal🔀Router🔀Get🔀RateLimit = new RateLimit(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀RateLimit;
    }

    public function internal🔀Router🔀Get🔀Repos(): Repos
    {
        if ($this->internal🔀Router🔀Get🔀Repos instanceof Repos === false) {
            $this->internal🔀Router🔀Get🔀Repos = new Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Repos;
    }

    public function internal🔀Router🔀Get🔀Users(): Users
    {
        if ($this->internal🔀Router🔀Get🔀Users instanceof Users === false) {
            $this->internal🔀Router🔀Get🔀Users = new Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Users;
    }

    public function internal🔀Router🔀Get🔀Gitignore(): Gitignore
    {
        if ($this->internal🔀Router🔀Get🔀Gitignore instanceof Gitignore === false) {
            $this->internal🔀Router🔀Get🔀Gitignore = new Gitignore(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Gitignore;
    }

    public function internal🔀Router🔀Get🔀Projects(): Projects
    {
        if ($this->internal🔀Router🔀Get🔀Projects instanceof Projects === false) {
            $this->internal🔀Router🔀Get🔀Projects = new Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Projects;
    }

    public function internal🔀Router🔀Get🔀Search(): Search
    {
        if ($this->internal🔀Router🔀Get🔀Search instanceof Search === false) {
            $this->internal🔀Router🔀Get🔀Search = new Search(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Search;
    }

    public function internal🔀Router🔀Get🔀Teams(): Teams
    {
        if ($this->internal🔀Router🔀Get🔀Teams instanceof Teams === false) {
            $this->internal🔀Router🔀Get🔀Teams = new Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Teams;
    }

    public function internal🔀Router🔀Get🔀Codespaces(): Codespaces
    {
        if ($this->internal🔀Router🔀Get🔀Codespaces instanceof Codespaces === false) {
            $this->internal🔀Router🔀Get🔀Codespaces = new Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Codespaces;
    }

    public function internal🔀Router🔀Get🔀Interactions(): Interactions
    {
        if ($this->internal🔀Router🔀Get🔀Interactions instanceof Interactions === false) {
            $this->internal🔀Router🔀Get🔀Interactions = new Interactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Interactions;
    }

    public function internal🔀Router🔀Get🔀Migrations(): Migrations
    {
        if ($this->internal🔀Router🔀Get🔀Migrations instanceof Migrations === false) {
            $this->internal🔀Router🔀Get🔀Migrations = new Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Migrations;
    }

    public function internal🔀Router🔀Get🔀Packages(): Packages
    {
        if ($this->internal🔀Router🔀Get🔀Packages instanceof Packages === false) {
            $this->internal🔀Router🔀Get🔀Packages = new Packages(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Packages;
    }

    public function internal🔀Router🔀Get🔀Copilot(): Copilot
    {
        if ($this->internal🔀Router🔀Get🔀Copilot instanceof Copilot === false) {
            $this->internal🔀Router🔀Get🔀Copilot = new Copilot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Copilot;
    }

    public function internal🔀Router🔀Get🔀Dependabot(): Dependabot
    {
        if ($this->internal🔀Router🔀Get🔀Dependabot instanceof Dependabot === false) {
            $this->internal🔀Router🔀Get🔀Dependabot = new Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Dependabot;
    }

    public function internal🔀Router🔀Get🔀SecretScanning(): SecretScanning
    {
        if ($this->internal🔀Router🔀Get🔀SecretScanning instanceof SecretScanning === false) {
            $this->internal🔀Router🔀Get🔀SecretScanning = new SecretScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀SecretScanning;
    }

    public function internal🔀Router🔀Get🔀Actions(): Actions
    {
        if ($this->internal🔀Router🔀Get🔀Actions instanceof Actions === false) {
            $this->internal🔀Router🔀Get🔀Actions = new Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Actions;
    }

    public function internal🔀Router🔀Get🔀CodeScanning(): CodeScanning
    {
        if ($this->internal🔀Router🔀Get🔀CodeScanning instanceof CodeScanning === false) {
            $this->internal🔀Router🔀Get🔀CodeScanning = new CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀CodeScanning;
    }

    public function internal🔀Router🔀Get🔀CodeSecurity(): CodeSecurity
    {
        if ($this->internal🔀Router🔀Get🔀CodeSecurity instanceof CodeSecurity === false) {
            $this->internal🔀Router🔀Get🔀CodeSecurity = new CodeSecurity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀CodeSecurity;
    }

    public function internal🔀Router🔀Get🔀Pulls(): Pulls
    {
        if ($this->internal🔀Router🔀Get🔀Pulls instanceof Pulls === false) {
            $this->internal🔀Router🔀Get🔀Pulls = new Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Pulls;
    }

    public function internal🔀Router🔀Get🔀Billing(): Billing
    {
        if ($this->internal🔀Router🔀Get🔀Billing instanceof Billing === false) {
            $this->internal🔀Router🔀Get🔀Billing = new Billing(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Billing;
    }

    public function internal🔀Router🔀Get🔀ApiInsights(): ApiInsights
    {
        if ($this->internal🔀Router🔀Get🔀ApiInsights instanceof ApiInsights === false) {
            $this->internal🔀Router🔀Get🔀ApiInsights = new ApiInsights(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀ApiInsights;
    }

    public function internal🔀Router🔀Get🔀Checks(): Checks
    {
        if ($this->internal🔀Router🔀Get🔀Checks instanceof Checks === false) {
            $this->internal🔀Router🔀Get🔀Checks = new Checks(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Checks;
    }

    public function internal🔀Router🔀Get🔀DependencyGraph(): DependencyGraph
    {
        if ($this->internal🔀Router🔀Get🔀DependencyGraph instanceof DependencyGraph === false) {
            $this->internal🔀Router🔀Get🔀DependencyGraph = new DependencyGraph(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀DependencyGraph;
    }

    public function internal🔀Router🔀Get🔀Reactions(): Reactions
    {
        if ($this->internal🔀Router🔀Get🔀Reactions instanceof Reactions === false) {
            $this->internal🔀Router🔀Get🔀Reactions = new Reactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Reactions;
    }

    public function internal🔀Router🔀Get🔀Oidc(): Oidc
    {
        if ($this->internal🔀Router🔀Get🔀Oidc instanceof Oidc === false) {
            $this->internal🔀Router🔀Get🔀Oidc = new Oidc(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Oidc;
    }

    public function internal🔀Router🔀Get🔀Git(): Git
    {
        if ($this->internal🔀Router🔀Get🔀Git instanceof Git === false) {
            $this->internal🔀Router🔀Get🔀Git = new Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Git;
    }

    public function internal🔀Router🔀Post🔀Apps(): \ApiClients\Client\GitHub\Internal\Router\Post\Apps
    {
        if ($this->internal🔀Router🔀Post🔀Apps instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Apps === false) {
            $this->internal🔀Router🔀Post🔀Apps = new \ApiClients\Client\GitHub\Internal\Router\Post\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Apps;
    }

    public function internal🔀Router🔀Post🔀Gists(): \ApiClients\Client\GitHub\Internal\Router\Post\Gists
    {
        if ($this->internal🔀Router🔀Post🔀Gists instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Gists === false) {
            $this->internal🔀Router🔀Post🔀Gists = new \ApiClients\Client\GitHub\Internal\Router\Post\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Gists;
    }

    public function internal🔀Router🔀Post🔀Orgs(): \ApiClients\Client\GitHub\Internal\Router\Post\Orgs
    {
        if ($this->internal🔀Router🔀Post🔀Orgs instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Orgs === false) {
            $this->internal🔀Router🔀Post🔀Orgs = new \ApiClients\Client\GitHub\Internal\Router\Post\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Orgs;
    }

    public function internal🔀Router🔀Post🔀Migrations(): \ApiClients\Client\GitHub\Internal\Router\Post\Migrations
    {
        if ($this->internal🔀Router🔀Post🔀Migrations instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Migrations === false) {
            $this->internal🔀Router🔀Post🔀Migrations = new \ApiClients\Client\GitHub\Internal\Router\Post\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Migrations;
    }

    public function internal🔀Router🔀Post🔀Projects(): \ApiClients\Client\GitHub\Internal\Router\Post\Projects
    {
        if ($this->internal🔀Router🔀Post🔀Projects instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Projects === false) {
            $this->internal🔀Router🔀Post🔀Projects = new \ApiClients\Client\GitHub\Internal\Router\Post\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Projects;
    }

    public function internal🔀Router🔀Post🔀Repos(): \ApiClients\Client\GitHub\Internal\Router\Post\Repos
    {
        if ($this->internal🔀Router🔀Post🔀Repos instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Repos === false) {
            $this->internal🔀Router🔀Post🔀Repos = new \ApiClients\Client\GitHub\Internal\Router\Post\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Repos;
    }

    public function internal🔀Router🔀Post🔀Teams(): \ApiClients\Client\GitHub\Internal\Router\Post\Teams
    {
        if ($this->internal🔀Router🔀Post🔀Teams instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Teams === false) {
            $this->internal🔀Router🔀Post🔀Teams = new \ApiClients\Client\GitHub\Internal\Router\Post\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Teams;
    }

    public function internal🔀Router🔀Post🔀Actions(): \ApiClients\Client\GitHub\Internal\Router\Post\Actions
    {
        if ($this->internal🔀Router🔀Post🔀Actions instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Actions === false) {
            $this->internal🔀Router🔀Post🔀Actions = new \ApiClients\Client\GitHub\Internal\Router\Post\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Actions;
    }

    public function internal🔀Router🔀Post🔀Codespaces(): \ApiClients\Client\GitHub\Internal\Router\Post\Codespaces
    {
        if ($this->internal🔀Router🔀Post🔀Codespaces instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Codespaces === false) {
            $this->internal🔀Router🔀Post🔀Codespaces = new \ApiClients\Client\GitHub\Internal\Router\Post\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Codespaces;
    }

    public function internal🔀Router🔀Post🔀Copilot(): \ApiClients\Client\GitHub\Internal\Router\Post\Copilot
    {
        if ($this->internal🔀Router🔀Post🔀Copilot instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Copilot === false) {
            $this->internal🔀Router🔀Post🔀Copilot = new \ApiClients\Client\GitHub\Internal\Router\Post\Copilot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Copilot;
    }

    public function internal🔀Router🔀Post🔀CodeScanning(): \ApiClients\Client\GitHub\Internal\Router\Post\CodeScanning
    {
        if ($this->internal🔀Router🔀Post🔀CodeScanning instanceof \ApiClients\Client\GitHub\Internal\Router\Post\CodeScanning === false) {
            $this->internal🔀Router🔀Post🔀CodeScanning = new \ApiClients\Client\GitHub\Internal\Router\Post\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀CodeScanning;
    }

    public function internal🔀Router🔀Post🔀DependencyGraph(): \ApiClients\Client\GitHub\Internal\Router\Post\DependencyGraph
    {
        if ($this->internal🔀Router🔀Post🔀DependencyGraph instanceof \ApiClients\Client\GitHub\Internal\Router\Post\DependencyGraph === false) {
            $this->internal🔀Router🔀Post🔀DependencyGraph = new \ApiClients\Client\GitHub\Internal\Router\Post\DependencyGraph(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀DependencyGraph;
    }

    public function internal🔀Router🔀Post🔀Git(): \ApiClients\Client\GitHub\Internal\Router\Post\Git
    {
        if ($this->internal🔀Router🔀Post🔀Git instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Git === false) {
            $this->internal🔀Router🔀Post🔀Git = new \ApiClients\Client\GitHub\Internal\Router\Post\Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Git;
    }

    public function internal🔀Router🔀Post🔀SecretScanning(): \ApiClients\Client\GitHub\Internal\Router\Post\SecretScanning
    {
        if ($this->internal🔀Router🔀Post🔀SecretScanning instanceof \ApiClients\Client\GitHub\Internal\Router\Post\SecretScanning === false) {
            $this->internal🔀Router🔀Post🔀SecretScanning = new \ApiClients\Client\GitHub\Internal\Router\Post\SecretScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀SecretScanning;
    }

    public function internal🔀Router🔀Post🔀SecurityAdvisories(): \ApiClients\Client\GitHub\Internal\Router\Post\SecurityAdvisories
    {
        if ($this->internal🔀Router🔀Post🔀SecurityAdvisories instanceof \ApiClients\Client\GitHub\Internal\Router\Post\SecurityAdvisories === false) {
            $this->internal🔀Router🔀Post🔀SecurityAdvisories = new \ApiClients\Client\GitHub\Internal\Router\Post\SecurityAdvisories(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀SecurityAdvisories;
    }

    public function internal🔀Router🔀Post🔀Reactions(): \ApiClients\Client\GitHub\Internal\Router\Post\Reactions
    {
        if ($this->internal🔀Router🔀Post🔀Reactions instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Reactions === false) {
            $this->internal🔀Router🔀Post🔀Reactions = new \ApiClients\Client\GitHub\Internal\Router\Post\Reactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Reactions;
    }

    public function internal🔀Router🔀Post🔀Packages(): \ApiClients\Client\GitHub\Internal\Router\Post\Packages
    {
        if ($this->internal🔀Router🔀Post🔀Packages instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Packages === false) {
            $this->internal🔀Router🔀Post🔀Packages = new \ApiClients\Client\GitHub\Internal\Router\Post\Packages(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Packages;
    }

    public function internal🔀Router🔀Post🔀CodeSecurity(): \ApiClients\Client\GitHub\Internal\Router\Post\CodeSecurity
    {
        if ($this->internal🔀Router🔀Post🔀CodeSecurity instanceof \ApiClients\Client\GitHub\Internal\Router\Post\CodeSecurity === false) {
            $this->internal🔀Router🔀Post🔀CodeSecurity = new \ApiClients\Client\GitHub\Internal\Router\Post\CodeSecurity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀CodeSecurity;
    }

    public function internal🔀Router🔀Post🔀Checks(): \ApiClients\Client\GitHub\Internal\Router\Post\Checks
    {
        if ($this->internal🔀Router🔀Post🔀Checks instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Checks === false) {
            $this->internal🔀Router🔀Post🔀Checks = new \ApiClients\Client\GitHub\Internal\Router\Post\Checks(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Checks;
    }

    public function internal🔀Router🔀Post🔀Issues(): \ApiClients\Client\GitHub\Internal\Router\Post\Issues
    {
        if ($this->internal🔀Router🔀Post🔀Issues instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Issues === false) {
            $this->internal🔀Router🔀Post🔀Issues = new \ApiClients\Client\GitHub\Internal\Router\Post\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Issues;
    }

    public function internal🔀Router🔀Post🔀Pulls(): \ApiClients\Client\GitHub\Internal\Router\Post\Pulls
    {
        if ($this->internal🔀Router🔀Post🔀Pulls instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Pulls === false) {
            $this->internal🔀Router🔀Post🔀Pulls = new \ApiClients\Client\GitHub\Internal\Router\Post\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Pulls;
    }

    public function internal🔀Router🔀Post🔀Markdown(): Markdown
    {
        if ($this->internal🔀Router🔀Post🔀Markdown instanceof Markdown === false) {
            $this->internal🔀Router🔀Post🔀Markdown = new Markdown(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Markdown;
    }

    public function internal🔀Router🔀Post🔀Users(): \ApiClients\Client\GitHub\Internal\Router\Post\Users
    {
        if ($this->internal🔀Router🔀Post🔀Users instanceof \ApiClients\Client\GitHub\Internal\Router\Post\Users === false) {
            $this->internal🔀Router🔀Post🔀Users = new \ApiClients\Client\GitHub\Internal\Router\Post\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Users;
    }

    public function internal🔀Router🔀Patch🔀Apps(): \ApiClients\Client\GitHub\Internal\Router\Patch\Apps
    {
        if ($this->internal🔀Router🔀Patch🔀Apps instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Apps === false) {
            $this->internal🔀Router🔀Patch🔀Apps = new \ApiClients\Client\GitHub\Internal\Router\Patch\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Apps;
    }

    public function internal🔀Router🔀Patch🔀Activity(): \ApiClients\Client\GitHub\Internal\Router\Patch\Activity
    {
        if ($this->internal🔀Router🔀Patch🔀Activity instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Activity === false) {
            $this->internal🔀Router🔀Patch🔀Activity = new \ApiClients\Client\GitHub\Internal\Router\Patch\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Activity;
    }

    public function internal🔀Router🔀Patch🔀Projects(): \ApiClients\Client\GitHub\Internal\Router\Patch\Projects
    {
        if ($this->internal🔀Router🔀Patch🔀Projects instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Projects === false) {
            $this->internal🔀Router🔀Patch🔀Projects = new \ApiClients\Client\GitHub\Internal\Router\Patch\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Projects;
    }

    public function internal🔀Router🔀Patch🔀Repos(): \ApiClients\Client\GitHub\Internal\Router\Patch\Repos
    {
        if ($this->internal🔀Router🔀Patch🔀Repos instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Repos === false) {
            $this->internal🔀Router🔀Patch🔀Repos = new \ApiClients\Client\GitHub\Internal\Router\Patch\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Repos;
    }

    public function internal🔀Router🔀Patch🔀Codespaces(): \ApiClients\Client\GitHub\Internal\Router\Patch\Codespaces
    {
        if ($this->internal🔀Router🔀Patch🔀Codespaces instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Codespaces === false) {
            $this->internal🔀Router🔀Patch🔀Codespaces = new \ApiClients\Client\GitHub\Internal\Router\Patch\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Codespaces;
    }

    public function internal🔀Router🔀Patch🔀Users(): \ApiClients\Client\GitHub\Internal\Router\Patch\Users
    {
        if ($this->internal🔀Router🔀Patch🔀Users instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Users === false) {
            $this->internal🔀Router🔀Patch🔀Users = new \ApiClients\Client\GitHub\Internal\Router\Patch\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Users;
    }

    public function internal🔀Router🔀Patch🔀Gists(): \ApiClients\Client\GitHub\Internal\Router\Patch\Gists
    {
        if ($this->internal🔀Router🔀Patch🔀Gists instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Gists === false) {
            $this->internal🔀Router🔀Patch🔀Gists = new \ApiClients\Client\GitHub\Internal\Router\Patch\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Gists;
    }

    public function internal🔀Router🔀Patch🔀Orgs(): \ApiClients\Client\GitHub\Internal\Router\Patch\Orgs
    {
        if ($this->internal🔀Router🔀Patch🔀Orgs instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Orgs === false) {
            $this->internal🔀Router🔀Patch🔀Orgs = new \ApiClients\Client\GitHub\Internal\Router\Patch\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Orgs;
    }

    public function internal🔀Router🔀Patch🔀Teams(): \ApiClients\Client\GitHub\Internal\Router\Patch\Teams
    {
        if ($this->internal🔀Router🔀Patch🔀Teams instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Teams === false) {
            $this->internal🔀Router🔀Patch🔀Teams = new \ApiClients\Client\GitHub\Internal\Router\Patch\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Teams;
    }

    public function internal🔀Router🔀Patch🔀Migrations(): \ApiClients\Client\GitHub\Internal\Router\Patch\Migrations
    {
        if ($this->internal🔀Router🔀Patch🔀Migrations instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Migrations === false) {
            $this->internal🔀Router🔀Patch🔀Migrations = new \ApiClients\Client\GitHub\Internal\Router\Patch\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Migrations;
    }

    public function internal🔀Router🔀Patch🔀Actions(): \ApiClients\Client\GitHub\Internal\Router\Patch\Actions
    {
        if ($this->internal🔀Router🔀Patch🔀Actions instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Actions === false) {
            $this->internal🔀Router🔀Patch🔀Actions = new \ApiClients\Client\GitHub\Internal\Router\Patch\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Actions;
    }

    public function internal🔀Router🔀Patch🔀CodeSecurity(): \ApiClients\Client\GitHub\Internal\Router\Patch\CodeSecurity
    {
        if ($this->internal🔀Router🔀Patch🔀CodeSecurity instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\CodeSecurity === false) {
            $this->internal🔀Router🔀Patch🔀CodeSecurity = new \ApiClients\Client\GitHub\Internal\Router\Patch\CodeSecurity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀CodeSecurity;
    }

    public function internal🔀Router🔀Patch🔀Checks(): \ApiClients\Client\GitHub\Internal\Router\Patch\Checks
    {
        if ($this->internal🔀Router🔀Patch🔀Checks instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Checks === false) {
            $this->internal🔀Router🔀Patch🔀Checks = new \ApiClients\Client\GitHub\Internal\Router\Patch\Checks(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Checks;
    }

    public function internal🔀Router🔀Patch🔀CodeScanning(): \ApiClients\Client\GitHub\Internal\Router\Patch\CodeScanning
    {
        if ($this->internal🔀Router🔀Patch🔀CodeScanning instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\CodeScanning === false) {
            $this->internal🔀Router🔀Patch🔀CodeScanning = new \ApiClients\Client\GitHub\Internal\Router\Patch\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀CodeScanning;
    }

    public function internal🔀Router🔀Patch🔀Issues(): \ApiClients\Client\GitHub\Internal\Router\Patch\Issues
    {
        if ($this->internal🔀Router🔀Patch🔀Issues instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Issues === false) {
            $this->internal🔀Router🔀Patch🔀Issues = new \ApiClients\Client\GitHub\Internal\Router\Patch\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Issues;
    }

    public function internal🔀Router🔀Patch🔀Pulls(): \ApiClients\Client\GitHub\Internal\Router\Patch\Pulls
    {
        if ($this->internal🔀Router🔀Patch🔀Pulls instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Pulls === false) {
            $this->internal🔀Router🔀Patch🔀Pulls = new \ApiClients\Client\GitHub\Internal\Router\Patch\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Pulls;
    }

    public function internal🔀Router🔀Patch🔀SecurityAdvisories(): \ApiClients\Client\GitHub\Internal\Router\Patch\SecurityAdvisories
    {
        if ($this->internal🔀Router🔀Patch🔀SecurityAdvisories instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\SecurityAdvisories === false) {
            $this->internal🔀Router🔀Patch🔀SecurityAdvisories = new \ApiClients\Client\GitHub\Internal\Router\Patch\SecurityAdvisories(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀SecurityAdvisories;
    }

    public function internal🔀Router🔀Patch🔀Dependabot(): \ApiClients\Client\GitHub\Internal\Router\Patch\Dependabot
    {
        if ($this->internal🔀Router🔀Patch🔀Dependabot instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Dependabot === false) {
            $this->internal🔀Router🔀Patch🔀Dependabot = new \ApiClients\Client\GitHub\Internal\Router\Patch\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Dependabot;
    }

    public function internal🔀Router🔀Patch🔀Git(): \ApiClients\Client\GitHub\Internal\Router\Patch\Git
    {
        if ($this->internal🔀Router🔀Patch🔀Git instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\Git === false) {
            $this->internal🔀Router🔀Patch🔀Git = new \ApiClients\Client\GitHub\Internal\Router\Patch\Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Git;
    }

    public function internal🔀Router🔀Patch🔀SecretScanning(): \ApiClients\Client\GitHub\Internal\Router\Patch\SecretScanning
    {
        if ($this->internal🔀Router🔀Patch🔀SecretScanning instanceof \ApiClients\Client\GitHub\Internal\Router\Patch\SecretScanning === false) {
            $this->internal🔀Router🔀Patch🔀SecretScanning = new \ApiClients\Client\GitHub\Internal\Router\Patch\SecretScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀SecretScanning;
    }

    public function internal🔀Router🔀Delete🔀Apps(): \ApiClients\Client\GitHub\Internal\Router\Delete\Apps
    {
        if ($this->internal🔀Router🔀Delete🔀Apps instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Apps === false) {
            $this->internal🔀Router🔀Delete🔀Apps = new \ApiClients\Client\GitHub\Internal\Router\Delete\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Apps;
    }

    public function internal🔀Router🔀Delete🔀Gists(): \ApiClients\Client\GitHub\Internal\Router\Delete\Gists
    {
        if ($this->internal🔀Router🔀Delete🔀Gists instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Gists === false) {
            $this->internal🔀Router🔀Delete🔀Gists = new \ApiClients\Client\GitHub\Internal\Router\Delete\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Gists;
    }

    public function internal🔀Router🔀Delete🔀Activity(): \ApiClients\Client\GitHub\Internal\Router\Delete\Activity
    {
        if ($this->internal🔀Router🔀Delete🔀Activity instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Activity === false) {
            $this->internal🔀Router🔀Delete🔀Activity = new \ApiClients\Client\GitHub\Internal\Router\Delete\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Activity;
    }

    public function internal🔀Router🔀Delete🔀Interactions(): \ApiClients\Client\GitHub\Internal\Router\Delete\Interactions
    {
        if ($this->internal🔀Router🔀Delete🔀Interactions instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Interactions === false) {
            $this->internal🔀Router🔀Delete🔀Interactions = new \ApiClients\Client\GitHub\Internal\Router\Delete\Interactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Interactions;
    }

    public function internal🔀Router🔀Delete🔀Projects(): \ApiClients\Client\GitHub\Internal\Router\Delete\Projects
    {
        if ($this->internal🔀Router🔀Delete🔀Projects instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Projects === false) {
            $this->internal🔀Router🔀Delete🔀Projects = new \ApiClients\Client\GitHub\Internal\Router\Delete\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Projects;
    }

    public function internal🔀Router🔀Delete🔀Repos(): \ApiClients\Client\GitHub\Internal\Router\Delete\Repos
    {
        if ($this->internal🔀Router🔀Delete🔀Repos instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Repos === false) {
            $this->internal🔀Router🔀Delete🔀Repos = new \ApiClients\Client\GitHub\Internal\Router\Delete\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Repos;
    }

    public function internal🔀Router🔀Delete🔀Users(): \ApiClients\Client\GitHub\Internal\Router\Delete\Users
    {
        if ($this->internal🔀Router🔀Delete🔀Users instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Users === false) {
            $this->internal🔀Router🔀Delete🔀Users = new \ApiClients\Client\GitHub\Internal\Router\Delete\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Users;
    }

    public function internal🔀Router🔀Delete🔀Codespaces(): \ApiClients\Client\GitHub\Internal\Router\Delete\Codespaces
    {
        if ($this->internal🔀Router🔀Delete🔀Codespaces instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Codespaces === false) {
            $this->internal🔀Router🔀Delete🔀Codespaces = new \ApiClients\Client\GitHub\Internal\Router\Delete\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Codespaces;
    }

    public function internal🔀Router🔀Delete🔀Orgs(): \ApiClients\Client\GitHub\Internal\Router\Delete\Orgs
    {
        if ($this->internal🔀Router🔀Delete🔀Orgs instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Orgs === false) {
            $this->internal🔀Router🔀Delete🔀Orgs = new \ApiClients\Client\GitHub\Internal\Router\Delete\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Orgs;
    }

    public function internal🔀Router🔀Delete🔀Teams(): \ApiClients\Client\GitHub\Internal\Router\Delete\Teams
    {
        if ($this->internal🔀Router🔀Delete🔀Teams instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Teams === false) {
            $this->internal🔀Router🔀Delete🔀Teams = new \ApiClients\Client\GitHub\Internal\Router\Delete\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Teams;
    }

    public function internal🔀Router🔀Delete🔀Migrations(): \ApiClients\Client\GitHub\Internal\Router\Delete\Migrations
    {
        if ($this->internal🔀Router🔀Delete🔀Migrations instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Migrations === false) {
            $this->internal🔀Router🔀Delete🔀Migrations = new \ApiClients\Client\GitHub\Internal\Router\Delete\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Migrations;
    }

    public function internal🔀Router🔀Delete🔀Packages(): \ApiClients\Client\GitHub\Internal\Router\Delete\Packages
    {
        if ($this->internal🔀Router🔀Delete🔀Packages instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Packages === false) {
            $this->internal🔀Router🔀Delete🔀Packages = new \ApiClients\Client\GitHub\Internal\Router\Delete\Packages(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Packages;
    }

    public function internal🔀Router🔀Delete🔀Actions(): \ApiClients\Client\GitHub\Internal\Router\Delete\Actions
    {
        if ($this->internal🔀Router🔀Delete🔀Actions instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Actions === false) {
            $this->internal🔀Router🔀Delete🔀Actions = new \ApiClients\Client\GitHub\Internal\Router\Delete\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Actions;
    }

    public function internal🔀Router🔀Delete🔀CodeScanning(): \ApiClients\Client\GitHub\Internal\Router\Delete\CodeScanning
    {
        if ($this->internal🔀Router🔀Delete🔀CodeScanning instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\CodeScanning === false) {
            $this->internal🔀Router🔀Delete🔀CodeScanning = new \ApiClients\Client\GitHub\Internal\Router\Delete\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀CodeScanning;
    }

    public function internal🔀Router🔀Delete🔀Dependabot(): \ApiClients\Client\GitHub\Internal\Router\Delete\Dependabot
    {
        if ($this->internal🔀Router🔀Delete🔀Dependabot instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Dependabot === false) {
            $this->internal🔀Router🔀Delete🔀Dependabot = new \ApiClients\Client\GitHub\Internal\Router\Delete\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Dependabot;
    }

    public function internal🔀Router🔀Delete🔀Git(): \ApiClients\Client\GitHub\Internal\Router\Delete\Git
    {
        if ($this->internal🔀Router🔀Delete🔀Git instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Git === false) {
            $this->internal🔀Router🔀Delete🔀Git = new \ApiClients\Client\GitHub\Internal\Router\Delete\Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Git;
    }

    public function internal🔀Router🔀Delete🔀Issues(): \ApiClients\Client\GitHub\Internal\Router\Delete\Issues
    {
        if ($this->internal🔀Router🔀Delete🔀Issues instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Issues === false) {
            $this->internal🔀Router🔀Delete🔀Issues = new \ApiClients\Client\GitHub\Internal\Router\Delete\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Issues;
    }

    public function internal🔀Router🔀Delete🔀Pulls(): \ApiClients\Client\GitHub\Internal\Router\Delete\Pulls
    {
        if ($this->internal🔀Router🔀Delete🔀Pulls instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Pulls === false) {
            $this->internal🔀Router🔀Delete🔀Pulls = new \ApiClients\Client\GitHub\Internal\Router\Delete\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Pulls;
    }

    public function internal🔀Router🔀Delete🔀CodeSecurity(): \ApiClients\Client\GitHub\Internal\Router\Delete\CodeSecurity
    {
        if ($this->internal🔀Router🔀Delete🔀CodeSecurity instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\CodeSecurity === false) {
            $this->internal🔀Router🔀Delete🔀CodeSecurity = new \ApiClients\Client\GitHub\Internal\Router\Delete\CodeSecurity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀CodeSecurity;
    }

    public function internal🔀Router🔀Delete🔀Copilot(): \ApiClients\Client\GitHub\Internal\Router\Delete\Copilot
    {
        if ($this->internal🔀Router🔀Delete🔀Copilot instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Copilot === false) {
            $this->internal🔀Router🔀Delete🔀Copilot = new \ApiClients\Client\GitHub\Internal\Router\Delete\Copilot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Copilot;
    }

    public function internal🔀Router🔀Delete🔀Reactions(): \ApiClients\Client\GitHub\Internal\Router\Delete\Reactions
    {
        if ($this->internal🔀Router🔀Delete🔀Reactions instanceof \ApiClients\Client\GitHub\Internal\Router\Delete\Reactions === false) {
            $this->internal🔀Router🔀Delete🔀Reactions = new \ApiClients\Client\GitHub\Internal\Router\Delete\Reactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Reactions;
    }

    public function internal🔀Router🔀Put🔀Apps(): \ApiClients\Client\GitHub\Internal\Router\Put\Apps
    {
        if ($this->internal🔀Router🔀Put🔀Apps instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Apps === false) {
            $this->internal🔀Router🔀Put🔀Apps = new \ApiClients\Client\GitHub\Internal\Router\Put\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Apps;
    }

    public function internal🔀Router🔀Put🔀Activity(): \ApiClients\Client\GitHub\Internal\Router\Put\Activity
    {
        if ($this->internal🔀Router🔀Put🔀Activity instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Activity === false) {
            $this->internal🔀Router🔀Put🔀Activity = new \ApiClients\Client\GitHub\Internal\Router\Put\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Activity;
    }

    public function internal🔀Router🔀Put🔀Actions(): \ApiClients\Client\GitHub\Internal\Router\Put\Actions
    {
        if ($this->internal🔀Router🔀Put🔀Actions instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Actions === false) {
            $this->internal🔀Router🔀Put🔀Actions = new \ApiClients\Client\GitHub\Internal\Router\Put\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Actions;
    }

    public function internal🔀Router🔀Put🔀Orgs(): \ApiClients\Client\GitHub\Internal\Router\Put\Orgs
    {
        if ($this->internal🔀Router🔀Put🔀Orgs instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Orgs === false) {
            $this->internal🔀Router🔀Put🔀Orgs = new \ApiClients\Client\GitHub\Internal\Router\Put\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Orgs;
    }

    public function internal🔀Router🔀Put🔀Codespaces(): \ApiClients\Client\GitHub\Internal\Router\Put\Codespaces
    {
        if ($this->internal🔀Router🔀Put🔀Codespaces instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Codespaces === false) {
            $this->internal🔀Router🔀Put🔀Codespaces = new \ApiClients\Client\GitHub\Internal\Router\Put\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Codespaces;
    }

    public function internal🔀Router🔀Put🔀Repos(): \ApiClients\Client\GitHub\Internal\Router\Put\Repos
    {
        if ($this->internal🔀Router🔀Put🔀Repos instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Repos === false) {
            $this->internal🔀Router🔀Put🔀Repos = new \ApiClients\Client\GitHub\Internal\Router\Put\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Repos;
    }

    public function internal🔀Router🔀Put🔀Projects(): \ApiClients\Client\GitHub\Internal\Router\Put\Projects
    {
        if ($this->internal🔀Router🔀Put🔀Projects instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Projects === false) {
            $this->internal🔀Router🔀Put🔀Projects = new \ApiClients\Client\GitHub\Internal\Router\Put\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Projects;
    }

    public function internal🔀Router🔀Put🔀Migrations(): \ApiClients\Client\GitHub\Internal\Router\Put\Migrations
    {
        if ($this->internal🔀Router🔀Put🔀Migrations instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Migrations === false) {
            $this->internal🔀Router🔀Put🔀Migrations = new \ApiClients\Client\GitHub\Internal\Router\Put\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Migrations;
    }

    public function internal🔀Router🔀Put🔀Interactions(): \ApiClients\Client\GitHub\Internal\Router\Put\Interactions
    {
        if ($this->internal🔀Router🔀Put🔀Interactions instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Interactions === false) {
            $this->internal🔀Router🔀Put🔀Interactions = new \ApiClients\Client\GitHub\Internal\Router\Put\Interactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Interactions;
    }

    public function internal🔀Router🔀Put🔀Teams(): \ApiClients\Client\GitHub\Internal\Router\Put\Teams
    {
        if ($this->internal🔀Router🔀Put🔀Teams instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Teams === false) {
            $this->internal🔀Router🔀Put🔀Teams = new \ApiClients\Client\GitHub\Internal\Router\Put\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Teams;
    }

    public function internal🔀Router🔀Put🔀Gists(): \ApiClients\Client\GitHub\Internal\Router\Put\Gists
    {
        if ($this->internal🔀Router🔀Put🔀Gists instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Gists === false) {
            $this->internal🔀Router🔀Put🔀Gists = new \ApiClients\Client\GitHub\Internal\Router\Put\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Gists;
    }

    public function internal🔀Router🔀Put🔀Users(): \ApiClients\Client\GitHub\Internal\Router\Put\Users
    {
        if ($this->internal🔀Router🔀Put🔀Users instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Users === false) {
            $this->internal🔀Router🔀Put🔀Users = new \ApiClients\Client\GitHub\Internal\Router\Put\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Users;
    }

    public function internal🔀Router🔀Put🔀Oidc(): \ApiClients\Client\GitHub\Internal\Router\Put\Oidc
    {
        if ($this->internal🔀Router🔀Put🔀Oidc instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Oidc === false) {
            $this->internal🔀Router🔀Put🔀Oidc = new \ApiClients\Client\GitHub\Internal\Router\Put\Oidc(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Oidc;
    }

    public function internal🔀Router🔀Put🔀CodeSecurity(): \ApiClients\Client\GitHub\Internal\Router\Put\CodeSecurity
    {
        if ($this->internal🔀Router🔀Put🔀CodeSecurity instanceof \ApiClients\Client\GitHub\Internal\Router\Put\CodeSecurity === false) {
            $this->internal🔀Router🔀Put🔀CodeSecurity = new \ApiClients\Client\GitHub\Internal\Router\Put\CodeSecurity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀CodeSecurity;
    }

    public function internal🔀Router🔀Put🔀Dependabot(): \ApiClients\Client\GitHub\Internal\Router\Put\Dependabot
    {
        if ($this->internal🔀Router🔀Put🔀Dependabot instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Dependabot === false) {
            $this->internal🔀Router🔀Put🔀Dependabot = new \ApiClients\Client\GitHub\Internal\Router\Put\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Dependabot;
    }

    public function internal🔀Router🔀Put🔀Issues(): \ApiClients\Client\GitHub\Internal\Router\Put\Issues
    {
        if ($this->internal🔀Router🔀Put🔀Issues instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Issues === false) {
            $this->internal🔀Router🔀Put🔀Issues = new \ApiClients\Client\GitHub\Internal\Router\Put\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Issues;
    }

    public function internal🔀Router🔀Put🔀Pulls(): \ApiClients\Client\GitHub\Internal\Router\Put\Pulls
    {
        if ($this->internal🔀Router🔀Put🔀Pulls instanceof \ApiClients\Client\GitHub\Internal\Router\Put\Pulls === false) {
            $this->internal🔀Router🔀Put🔀Pulls = new \ApiClients\Client\GitHub\Internal\Router\Put\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Pulls;
    }
}
