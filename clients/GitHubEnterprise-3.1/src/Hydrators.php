<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use Generator;

final class Hydrators implements ObjectMapper
{
    private ?Hydrator\Operation\Root $operation🌀Root                                                                                                                                                                                         = null;
    private ?Hydrator\Operation\Admin\Hooks $operation🌀Admin🌀Hooks                                                                                                                                                                           = null;
    private ?Hydrator\Operation\Admin\Hooks\HookId $operation🌀Admin🌀Hooks🌀HookId                                                                                                                                                             = null;
    private ?Hydrator\Operation\Admin\Hooks\HookId\Pings $operation🌀Admin🌀Hooks🌀HookId🌀Pings                                                                                                                                                 = null;
    private ?Hydrator\Operation\Admin\Keys $operation🌀Admin🌀Keys                                                                                                                                                                             = null;
    private ?Hydrator\Operation\Admin\Keys\KeyIds $operation🌀Admin🌀Keys🌀KeyIds                                                                                                                                                               = null;
    private ?Hydrator\Operation\Admin\Ldap\Teams\TeamId\Mapping $operation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Mapping                                                                                                                                   = null;
    private ?Hydrator\Operation\Admin\Ldap\Teams\TeamId\Sync $operation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Sync                                                                                                                                         = null;
    private ?Hydrator\Operation\Admin\Ldap\Users\Username\Mapping $operation🌀Admin🌀Ldap🌀Users🌀Username🌀Mapping                                                                                                                               = null;
    private ?Hydrator\Operation\Admin\Ldap\Users\Username\Sync $operation🌀Admin🌀Ldap🌀Users🌀Username🌀Sync                                                                                                                                     = null;
    private ?Hydrator\Operation\Admin\Organizations $operation🌀Admin🌀Organizations                                                                                                                                                           = null;
    private ?Hydrator\Operation\Admin\Organizations\Org $operation🌀Admin🌀Organizations🌀Org                                                                                                                                                   = null;
    private ?Hydrator\Operation\Admin\PreReceiveEnvironments $operation🌀Admin🌀PreReceiveEnvironments                                                                                                                                         = null;
    private ?Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId $operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId                                                                                         = null;
    private ?Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads $operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads                                                                     = null;
    private ?Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads\Latest $operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest                                                       = null;
    private ?Hydrator\Operation\Admin\PreReceiveHooks $operation🌀Admin🌀PreReceiveHooks                                                                                                                                                       = null;
    private ?Hydrator\Operation\Admin\PreReceiveHooks\PreReceiveHookId $operation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId                                                                                                                     = null;
    private ?Hydrator\Operation\Admin\Tokens $operation🌀Admin🌀Tokens                                                                                                                                                                         = null;
    private ?Hydrator\Operation\Admin\Tokens\TokenId $operation🌀Admin🌀Tokens🌀TokenId                                                                                                                                                         = null;
    private ?Hydrator\Operation\Admin\Users $operation🌀Admin🌀Users                                                                                                                                                                           = null;
    private ?Hydrator\Operation\Admin\Users\Username $operation🌀Admin🌀Users🌀Username                                                                                                                                                         = null;
    private ?Hydrator\Operation\Admin\Users\Username\Authorizations $operation🌀Admin🌀Users🌀Username🌀Authorizations                                                                                                                           = null;
    private ?Hydrator\Operation\App $operation🌀App                                                                                                                                                                                           = null;
    private ?Hydrator\Operation\AppManifests\Code\Conversions $operation🌀AppManifests🌀Code🌀Conversions                                                                                                                                       = null;
    private ?Hydrator\Operation\App\Hook\Config $operation🌀App🌀Hook🌀Config                                                                                                                                                                   = null;
    private ?Hydrator\Operation\App\Installations $operation🌀App🌀Installations                                                                                                                                                               = null;
    private ?Hydrator\Operation\App\Installations\InstallationId $operation🌀App🌀Installations🌀InstallationId                                                                                                                                 = null;
    private ?Hydrator\Operation\App\Installations\InstallationId\AccessTokens $operation🌀App🌀Installations🌀InstallationId🌀AccessTokens                                                                                                       = null;
    private ?Hydrator\Operation\App\Installations\InstallationId\Suspended $operation🌀App🌀Installations🌀InstallationId🌀Suspended                                                                                                             = null;
    private ?Hydrator\Operation\Applications\Grants $operation🌀Applications🌀Grants                                                                                                                                                           = null;
    private ?Hydrator\Operation\Applications\Grants\GrantId $operation🌀Applications🌀Grants🌀GrantId                                                                                                                                           = null;
    private ?Hydrator\Operation\Applications\ClientId\Grant $operation🌀Applications🌀ClientId🌀Grant                                                                                                                                           = null;
    private ?Hydrator\Operation\Applications\ClientId\Grants\AccessToken $operation🌀Applications🌀ClientId🌀Grants🌀AccessToken                                                                                                                 = null;
    private ?Hydrator\Operation\Applications\ClientId\Token $operation🌀Applications🌀ClientId🌀Token                                                                                                                                           = null;
    private ?Hydrator\Operation\Applications\ClientId\Token\Scoped $operation🌀Applications🌀ClientId🌀Token🌀Scoped                                                                                                                             = null;
    private ?Hydrator\Operation\Applications\ClientId\Tokens\AccessToken $operation🌀Applications🌀ClientId🌀Tokens🌀AccessToken                                                                                                                 = null;
    private ?Hydrator\Operation\Apps\AppSlug $operation🌀Apps🌀AppSlug                                                                                                                                                                         = null;
    private ?Hydrator\Operation\Authorizations $operation🌀Authorizations                                                                                                                                                                     = null;
    private ?Hydrator\Operation\Authorizations\Clients\ClientId $operation🌀Authorizations🌀Clients🌀ClientId                                                                                                                                   = null;
    private ?Hydrator\Operation\Authorizations\Clients\ClientId\Fingerprint $operation🌀Authorizations🌀Clients🌀ClientId🌀Fingerprint                                                                                                           = null;
    private ?Hydrator\Operation\Authorizations\AuthorizationId $operation🌀Authorizations🌀AuthorizationId                                                                                                                                     = null;
    private ?Hydrator\Operation\CodesOfConduct $operation🌀CodesOfConduct                                                                                                                                                                     = null;
    private ?Hydrator\Operation\CodesOfConduct\Key $operation🌀CodesOfConduct🌀Key                                                                                                                                                             = null;
    private ?Hydrator\Operation\Emojis $operation🌀Emojis                                                                                                                                                                                     = null;
    private ?Hydrator\Operation\Enterprise\Announcement $operation🌀Enterprise🌀Announcement                                                                                                                                                   = null;
    private ?Hydrator\Operation\Enterprise\Settings\License $operation🌀Enterprise🌀Settings🌀License                                                                                                                                           = null;
    private ?Hydrator\Operation\Enterprise\Stats\All $operation🌀Enterprise🌀Stats🌀All                                                                                                                                                         = null;
    private ?Hydrator\Operation\Enterprise\Stats\Comments $operation🌀Enterprise🌀Stats🌀Comments                                                                                                                                               = null;
    private ?Hydrator\Operation\Enterprise\Stats\Gists $operation🌀Enterprise🌀Stats🌀Gists                                                                                                                                                     = null;
    private ?Hydrator\Operation\Enterprise\Stats\Hooks $operation🌀Enterprise🌀Stats🌀Hooks                                                                                                                                                     = null;
    private ?Hydrator\Operation\Enterprise\Stats\Issues $operation🌀Enterprise🌀Stats🌀Issues                                                                                                                                                   = null;
    private ?Hydrator\Operation\Enterprise\Stats\Milestones $operation🌀Enterprise🌀Stats🌀Milestones                                                                                                                                           = null;
    private ?Hydrator\Operation\Enterprise\Stats\Orgs $operation🌀Enterprise🌀Stats🌀Orgs                                                                                                                                                       = null;
    private ?Hydrator\Operation\Enterprise\Stats\Pages $operation🌀Enterprise🌀Stats🌀Pages                                                                                                                                                     = null;
    private ?Hydrator\Operation\Enterprise\Stats\Pulls $operation🌀Enterprise🌀Stats🌀Pulls                                                                                                                                                     = null;
    private ?Hydrator\Operation\Enterprise\Stats\Repos $operation🌀Enterprise🌀Stats🌀Repos                                                                                                                                                     = null;
    private ?Hydrator\Operation\Enterprise\Stats\Users $operation🌀Enterprise🌀Stats🌀Users                                                                                                                                                     = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions $operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions                                                                                                             = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\Organizations $operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations                                                                                 = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\Organizations\OrgId $operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations🌀OrgId                                                                     = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\SelectedActions $operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions                                                                             = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups $operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups                                                                                                           = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId $operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId                                                                               = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Organizations $operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations                                                   = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Organizations\OrgId $operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations🌀OrgId                                       = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Runners $operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners                                                               = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Runners\RunnerId $operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId                                             = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\Runners $operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners                                                                                                                     = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\Downloads $operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads                                                                                                 = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RegistrationToken $operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken                                                                                 = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RemoveToken $operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RemoveToken                                                                                             = null;
    private ?Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId $operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId                                                                                                   = null;
    private ?Hydrator\Operation\Events $operation🌀Events                                                                                                                                                                                     = null;
    private ?Hydrator\Operation\Feeds $operation🌀Feeds                                                                                                                                                                                       = null;
    private ?Hydrator\Operation\Gists $operation🌀Gists                                                                                                                                                                                       = null;
    private ?Hydrator\Operation\Gists\Public_ $operation🌀Gists🌀Public_                                                                                                                                                                       = null;
    private ?Hydrator\Operation\Gists\Starred $operation🌀Gists🌀Starred                                                                                                                                                                       = null;
    private ?Hydrator\Operation\Gists\GistId $operation🌀Gists🌀GistId                                                                                                                                                                         = null;
    private ?Hydrator\Operation\Gists\GistId\Comments $operation🌀Gists🌀GistId🌀Comments                                                                                                                                                       = null;
    private ?Hydrator\Operation\Gists\GistId\Comments\CommentId $operation🌀Gists🌀GistId🌀Comments🌀CommentId                                                                                                                                   = null;
    private ?Hydrator\Operation\Gists\GistId\Commits $operation🌀Gists🌀GistId🌀Commits                                                                                                                                                         = null;
    private ?Hydrator\Operation\Gists\GistId\Forks $operation🌀Gists🌀GistId🌀Forks                                                                                                                                                             = null;
    private ?Hydrator\Operation\Gists\GistId\Star $operation🌀Gists🌀GistId🌀Star                                                                                                                                                               = null;
    private ?Hydrator\Operation\Gists\GistId\Sha $operation🌀Gists🌀GistId🌀Sha                                                                                                                                                                 = null;
    private ?Hydrator\Operation\Gitignore\Templates $operation🌀Gitignore🌀Templates                                                                                                                                                           = null;
    private ?Hydrator\Operation\Gitignore\Templates\Name $operation🌀Gitignore🌀Templates🌀Name                                                                                                                                                 = null;
    private ?Hydrator\Operation\Installation\Repositories $operation🌀Installation🌀Repositories                                                                                                                                               = null;
    private ?Hydrator\Operation\Installation\Token $operation🌀Installation🌀Token                                                                                                                                                             = null;
    private ?Hydrator\Operation\Issues $operation🌀Issues                                                                                                                                                                                     = null;
    private ?Hydrator\Operation\Licenses $operation🌀Licenses                                                                                                                                                                                 = null;
    private ?Hydrator\Operation\Licenses\License $operation🌀Licenses🌀License                                                                                                                                                                 = null;
    private ?Hydrator\Operation\Markdown $operation🌀Markdown                                                                                                                                                                                 = null;
    private ?Hydrator\Operation\Markdown\Raw $operation🌀Markdown🌀Raw                                                                                                                                                                         = null;
    private ?Hydrator\Operation\Meta $operation🌀Meta                                                                                                                                                                                         = null;
    private ?Hydrator\Operation\Networks\Owner\Repo\Events $operation🌀Networks🌀Owner🌀Repo🌀Events                                                                                                                                             = null;
    private ?Hydrator\Operation\Notifications $operation🌀Notifications                                                                                                                                                                       = null;
    private ?Hydrator\Operation\Notifications\Threads\ThreadId $operation🌀Notifications🌀Threads🌀ThreadId                                                                                                                                     = null;
    private ?Hydrator\Operation\Notifications\Threads\ThreadId\Subscription $operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription                                                                                                           = null;
    private ?Hydrator\Operation\Octocat $operation🌀Octocat                                                                                                                                                                                   = null;
    private ?Hydrator\Operation\Organizations $operation🌀Organizations                                                                                                                                                                       = null;
    private ?Hydrator\Operation\Orgs\Org $operation🌀Orgs🌀Org                                                                                                                                                                                 = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Permissions $operation🌀Orgs🌀Org🌀Actions🌀Permissions                                                                                                                                         = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories $operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories                                                                                                               = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories\RepositoryId $operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId                                                                                     = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions $operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions                                                                                                         = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\RunnerGroups $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups                                                                                                                                       = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId                                                                                                           = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories                                                                                 = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories\RepositoryId $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId                                                       = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Runners $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners                                                                                           = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Runners\RunnerId $operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId                                                                         = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Runners $operation🌀Orgs🌀Org🌀Actions🌀Runners                                                                                                                                                 = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads                                                                                                                             = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken                                                                                                             = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken                                                                                                                         = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId                                                                                                                               = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Secrets $operation🌀Orgs🌀Org🌀Actions🌀Secrets                                                                                                                                                 = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey                                                                                                                             = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName                                                                                                                           = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories                                                                                                 = null;
    private ?Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId                                                                       = null;
    private ?Hydrator\Operation\Orgs\Org\Events $operation🌀Orgs🌀Org🌀Events                                                                                                                                                                   = null;
    private ?Hydrator\Operation\Orgs\Org\Hooks $operation🌀Orgs🌀Org🌀Hooks                                                                                                                                                                     = null;
    private ?Hydrator\Operation\Orgs\Org\Hooks\HookId $operation🌀Orgs🌀Org🌀Hooks🌀HookId                                                                                                                                                       = null;
    private ?Hydrator\Operation\Orgs\Org\Hooks\HookId\Config $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config                                                                                                                                         = null;
    private ?Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings                                                                                                                                           = null;
    private ?Hydrator\Operation\Orgs\Org\Installation $operation🌀Orgs🌀Org🌀Installation                                                                                                                                                       = null;
    private ?Hydrator\Operation\Orgs\Org\Installations $operation🌀Orgs🌀Org🌀Installations                                                                                                                                                     = null;
    private ?Hydrator\Operation\Orgs\Org\Issues $operation🌀Orgs🌀Org🌀Issues                                                                                                                                                                   = null;
    private ?Hydrator\Operation\Orgs\Org\Members $operation🌀Orgs🌀Org🌀Members                                                                                                                                                                 = null;
    private ?Hydrator\Operation\Orgs\Org\Members\Username $operation🌀Orgs🌀Org🌀Members🌀Username                                                                                                                                               = null;
    private ?Hydrator\Operation\Orgs\Org\Memberships\Username $operation🌀Orgs🌀Org🌀Memberships🌀Username                                                                                                                                       = null;
    private ?Hydrator\Operation\Orgs\Org\OutsideCollaborators $operation🌀Orgs🌀Org🌀OutsideCollaborators                                                                                                                                       = null;
    private ?Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username $operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username                                                                                                                     = null;
    private ?Hydrator\Operation\Orgs\Org\PreReceiveHooks $operation🌀Orgs🌀Org🌀PreReceiveHooks                                                                                                                                                 = null;
    private ?Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId $operation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId                                                                                                               = null;
    private ?Hydrator\Operation\Orgs\Org\Projects $operation🌀Orgs🌀Org🌀Projects                                                                                                                                                               = null;
    private ?Hydrator\Operation\Orgs\Org\PublicMembers $operation🌀Orgs🌀Org🌀PublicMembers                                                                                                                                                     = null;
    private ?Hydrator\Operation\Orgs\Org\PublicMembers\Username $operation🌀Orgs🌀Org🌀PublicMembers🌀Username                                                                                                                                   = null;
    private ?Hydrator\Operation\Orgs\Org\Repos $operation🌀Orgs🌀Org🌀Repos                                                                                                                                                                     = null;
    private ?Hydrator\Operation\Orgs\Org\Teams $operation🌀Orgs🌀Org🌀Teams                                                                                                                                                                     = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug                                                                                                                                                   = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions                                                                                                                           = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber                                                                                         = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments                                                                       = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber                                           = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions                       = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions\ReactionId $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions                                                                     = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId                                               = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members                                                                                                                                   = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username                                                                                                         = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects                                                                                                                                 = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId                                                                                                             = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos                                                                                                                                       = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo                                                                                                                 = null;
    private ?Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams                                                                                                                                       = null;
    private ?Hydrator\Operation\Projects\Columns\Cards\CardId $operation🌀Projects🌀Columns🌀Cards🌀CardId                                                                                                                                       = null;
    private ?Hydrator\Operation\Projects\Columns\Cards\CardId\Moves $operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves                                                                                                                           = null;
    private ?Hydrator\Operation\Projects\Columns\ColumnId $operation🌀Projects🌀Columns🌀ColumnId                                                                                                                                               = null;
    private ?Hydrator\Operation\Projects\Columns\ColumnId\Cards $operation🌀Projects🌀Columns🌀ColumnId🌀Cards                                                                                                                                   = null;
    private ?Hydrator\Operation\Projects\Columns\ColumnId\Moves $operation🌀Projects🌀Columns🌀ColumnId🌀Moves                                                                                                                                   = null;
    private ?Hydrator\Operation\Projects\ProjectId $operation🌀Projects🌀ProjectId                                                                                                                                                             = null;
    private ?Hydrator\Operation\Projects\ProjectId\Collaborators $operation🌀Projects🌀ProjectId🌀Collaborators                                                                                                                                 = null;
    private ?Hydrator\Operation\Projects\ProjectId\Collaborators\Username $operation🌀Projects🌀ProjectId🌀Collaborators🌀Username                                                                                                               = null;
    private ?Hydrator\Operation\Projects\ProjectId\Collaborators\Username\Permission $operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission                                                                                         = null;
    private ?Hydrator\Operation\Projects\ProjectId\Columns $operation🌀Projects🌀ProjectId🌀Columns                                                                                                                                             = null;
    private ?Hydrator\Operation\RateLimit $operation🌀RateLimit                                                                                                                                                                               = null;
    private ?Hydrator\Operation\Reactions\ReactionId $operation🌀Reactions🌀ReactionId                                                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo $operation🌀Repos🌀Owner🌀Repo                                                                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts                                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Logs $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runners $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners                                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runs $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs                                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets                                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows                                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Disable $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Dispatches $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Enable $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Assignees $operation🌀Repos🌀Owner🌀Repo🌀Assignees                                                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Assignees\Assignee $operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches $operation🌀Repos🌀Owner🌀Repo🌀Branches                                                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch                                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Rename $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename                                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CheckRuns $operation🌀Repos🌀Owner🌀Repo🌀CheckRuns                                                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId $operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations $operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CheckSuites $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites                                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Collaborators $operation🌀Repos🌀Owner🌀Repo🌀Collaborators                                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username $operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username                                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission $operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Comments $operation🌀Repos🌀Owner🌀Repo🌀Comments                                                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId $operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions $operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId $operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Commits $operation🌀Repos🌀Owner🌀Repo🌀Commits                                                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Commits\Ref $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref                                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead $operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead                                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\ContentReferences\ContentReferenceId\Attachments $operation🌀Repos🌀Owner🌀Repo🌀ContentReferences🌀ContentReferenceId🌀Attachments                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Contents\Path $operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path                                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Contributors $operation🌀Repos🌀Owner🌀Repo🌀Contributors                                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Deployments $operation🌀Repos🌀Owner🌀Repo🌀Deployments                                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId $operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses $operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId $operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Dispatches $operation🌀Repos🌀Owner🌀Repo🌀Dispatches                                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Events $operation🌀Repos🌀Owner🌀Repo🌀Events                                                                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Forks $operation🌀Repos🌀Owner🌀Repo🌀Forks                                                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\Blobs $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs                                                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\Blobs\FileSha $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha                                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\Commits $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits                                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\Commits\CommitSha $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref $operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref                                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\Refs $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs                                                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref                                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\Tags $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags                                                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\Tags\TagSha $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha                                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\Trees $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees                                                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Git\Trees\TreeSha $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha                                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Hooks $operation🌀Repos🌀Owner🌀Repo🌀Hooks                                                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId                                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Tests $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Installation $operation🌀Repos🌀Owner🌀Repo🌀Installation                                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Invitations $operation🌀Repos🌀Owner🌀Repo🌀Invitations                                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId $operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues $operation🌀Repos🌀Owner🌀Repo🌀Issues                                                                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\Comments $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments                                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\Events $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events                                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\Events\EventId $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Keys $operation🌀Repos🌀Owner🌀Repo🌀Keys                                                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId $operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId                                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Labels $operation🌀Repos🌀Owner🌀Repo🌀Labels                                                                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Labels\Name $operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name                                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Languages $operation🌀Repos🌀Owner🌀Repo🌀Languages                                                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\License $operation🌀Repos🌀Owner🌀Repo🌀License                                                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Merges $operation🌀Repos🌀Owner🌀Repo🌀Merges                                                                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Milestones $operation🌀Repos🌀Owner🌀Repo🌀Milestones                                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber $operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels $operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Notifications $operation🌀Repos🌀Owner🌀Repo🌀Notifications                                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pages $operation🌀Repos🌀Owner🌀Repo🌀Pages                                                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pages\Builds $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds                                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks $operation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks                                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId $operation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Projects $operation🌀Repos🌀Owner🌀Repo🌀Projects                                                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls $operation🌀Repos🌀Owner🌀Repo🌀Pulls                                                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments                                                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber                                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files                                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Merge $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge                                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Dismissals $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\UpdateBranch $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Readme $operation🌀Repos🌀Owner🌀Repo🌀Readme                                                                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Readme\Dir $operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir                                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Releases $operation🌀Repos🌀Owner🌀Repo🌀Releases                                                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Releases\Latest $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest                                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag                                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets                                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts $operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber $operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber                                                                                             = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Stargazers $operation🌀Repos🌀Owner🌀Repo🌀Stargazers                                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors                                                                                                                           = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Stats\Participation $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard                                                                                                                                 = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha $operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha                                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Subscribers $operation🌀Repos🌀Owner🌀Repo🌀Subscribers                                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Subscription $operation🌀Repos🌀Owner🌀Repo🌀Subscription                                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Tags $operation🌀Repos🌀Owner🌀Repo🌀Tags                                                                                                                                                       = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref $operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref                                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Teams $operation🌀Repos🌀Owner🌀Repo🌀Teams                                                                                                                                                     = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Topics $operation🌀Repos🌀Owner🌀Repo🌀Topics                                                                                                                                                   = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Transfer $operation🌀Repos🌀Owner🌀Repo🌀Transfer                                                                                                                                               = null;
    private ?Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref $operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref                                                                                                                                         = null;
    private ?Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate $operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate                                                                                                               = null;
    private ?Hydrator\Operation\Repositories $operation🌀Repositories                                                                                                                                                                         = null;
    private ?Hydrator\Operation\Search\Code $operation🌀Search🌀Code                                                                                                                                                                           = null;
    private ?Hydrator\Operation\Search\Commits $operation🌀Search🌀Commits                                                                                                                                                                     = null;
    private ?Hydrator\Operation\Search\Issues $operation🌀Search🌀Issues                                                                                                                                                                       = null;
    private ?Hydrator\Operation\Search\Labels $operation🌀Search🌀Labels                                                                                                                                                                       = null;
    private ?Hydrator\Operation\Search\Repositories $operation🌀Search🌀Repositories                                                                                                                                                           = null;
    private ?Hydrator\Operation\Search\Topics $operation🌀Search🌀Topics                                                                                                                                                                       = null;
    private ?Hydrator\Operation\Search\Users $operation🌀Search🌀Users                                                                                                                                                                         = null;
    private ?Hydrator\Operation\Setup\Api\Configcheck $operation🌀Setup🌀Api🌀Configcheck                                                                                                                                                       = null;
    private ?Hydrator\Operation\Setup\Api\Configure $operation🌀Setup🌀Api🌀Configure                                                                                                                                                           = null;
    private ?Hydrator\Operation\Setup\Api\Maintenance $operation🌀Setup🌀Api🌀Maintenance                                                                                                                                                       = null;
    private ?Hydrator\Operation\Setup\Api\Settings $operation🌀Setup🌀Api🌀Settings                                                                                                                                                             = null;
    private ?Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys $operation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys                                                                                                                               = null;
    private ?Hydrator\Operation\Setup\Api\Start $operation🌀Setup🌀Api🌀Start                                                                                                                                                                   = null;
    private ?Hydrator\Operation\Setup\Api\Upgrade $operation🌀Setup🌀Api🌀Upgrade                                                                                                                                                               = null;
    private ?Hydrator\Operation\Teams\TeamId $operation🌀Teams🌀TeamId                                                                                                                                                                         = null;
    private ?Hydrator\Operation\Teams\TeamId\Discussions $operation🌀Teams🌀TeamId🌀Discussions                                                                                                                                                 = null;
    private ?Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber                                                                                                               = null;
    private ?Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments                                                                                             = null;
    private ?Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber                                                                 = null;
    private ?Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions                                             = null;
    private ?Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions                                                                                           = null;
    private ?Hydrator\Operation\Teams\TeamId\Members $operation🌀Teams🌀TeamId🌀Members                                                                                                                                                         = null;
    private ?Hydrator\Operation\Teams\TeamId\Members\Username $operation🌀Teams🌀TeamId🌀Members🌀Username                                                                                                                                       = null;
    private ?Hydrator\Operation\Teams\TeamId\Memberships\Username $operation🌀Teams🌀TeamId🌀Memberships🌀Username                                                                                                                               = null;
    private ?Hydrator\Operation\Teams\TeamId\Projects $operation🌀Teams🌀TeamId🌀Projects                                                                                                                                                       = null;
    private ?Hydrator\Operation\Teams\TeamId\Projects\ProjectId $operation🌀Teams🌀TeamId🌀Projects🌀ProjectId                                                                                                                                   = null;
    private ?Hydrator\Operation\Teams\TeamId\Repos $operation🌀Teams🌀TeamId🌀Repos                                                                                                                                                             = null;
    private ?Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo $operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo                                                                                                                                       = null;
    private ?Hydrator\Operation\Teams\TeamId\Teams $operation🌀Teams🌀TeamId🌀Teams                                                                                                                                                             = null;
    private ?Hydrator\Operation\User $operation🌀User                                                                                                                                                                                         = null;
    private ?Hydrator\Operation\User\Emails $operation🌀User🌀Emails                                                                                                                                                                           = null;
    private ?Hydrator\Operation\User\Followers $operation🌀User🌀Followers                                                                                                                                                                     = null;
    private ?Hydrator\Operation\User\Following $operation🌀User🌀Following                                                                                                                                                                     = null;
    private ?Hydrator\Operation\User\Following\Username $operation🌀User🌀Following🌀Username                                                                                                                                                   = null;
    private ?Hydrator\Operation\User\GpgKeys $operation🌀User🌀GpgKeys                                                                                                                                                                         = null;
    private ?Hydrator\Operation\User\GpgKeys\GpgKeyId $operation🌀User🌀GpgKeys🌀GpgKeyId                                                                                                                                                       = null;
    private ?Hydrator\Operation\User\Installations $operation🌀User🌀Installations                                                                                                                                                             = null;
    private ?Hydrator\Operation\User\Installations\InstallationId\Repositories $operation🌀User🌀Installations🌀InstallationId🌀Repositories                                                                                                     = null;
    private ?Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId $operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId                                                                           = null;
    private ?Hydrator\Operation\User\Issues $operation🌀User🌀Issues                                                                                                                                                                           = null;
    private ?Hydrator\Operation\User\Keys $operation🌀User🌀Keys                                                                                                                                                                               = null;
    private ?Hydrator\Operation\User\Keys\KeyId $operation🌀User🌀Keys🌀KeyId                                                                                                                                                                   = null;
    private ?Hydrator\Operation\User\Memberships\Orgs $operation🌀User🌀Memberships🌀Orgs                                                                                                                                                       = null;
    private ?Hydrator\Operation\User\Memberships\Orgs\Org $operation🌀User🌀Memberships🌀Orgs🌀Org                                                                                                                                               = null;
    private ?Hydrator\Operation\User\Orgs $operation🌀User🌀Orgs                                                                                                                                                                               = null;
    private ?Hydrator\Operation\User\Projects $operation🌀User🌀Projects                                                                                                                                                                       = null;
    private ?Hydrator\Operation\User\PublicEmails $operation🌀User🌀PublicEmails                                                                                                                                                               = null;
    private ?Hydrator\Operation\User\Repos $operation🌀User🌀Repos                                                                                                                                                                             = null;
    private ?Hydrator\Operation\User\RepositoryInvitations $operation🌀User🌀RepositoryInvitations                                                                                                                                             = null;
    private ?Hydrator\Operation\User\RepositoryInvitations\InvitationId $operation🌀User🌀RepositoryInvitations🌀InvitationId                                                                                                                   = null;
    private ?Hydrator\Operation\User\Starred $operation🌀User🌀Starred                                                                                                                                                                         = null;
    private ?Hydrator\Operation\User\Starred\Owner\Repo $operation🌀User🌀Starred🌀Owner🌀Repo                                                                                                                                                   = null;
    private ?Hydrator\Operation\User\Subscriptions $operation🌀User🌀Subscriptions                                                                                                                                                             = null;
    private ?Hydrator\Operation\User\Teams $operation🌀User🌀Teams                                                                                                                                                                             = null;
    private ?Hydrator\Operation\Users $operation🌀Users                                                                                                                                                                                       = null;
    private ?Hydrator\Operation\Users\Username $operation🌀Users🌀Username                                                                                                                                                                     = null;
    private ?Hydrator\Operation\Users\Username\Events $operation🌀Users🌀Username🌀Events                                                                                                                                                       = null;
    private ?Hydrator\Operation\Users\Username\Events\Orgs\Org $operation🌀Users🌀Username🌀Events🌀Orgs🌀Org                                                                                                                                     = null;
    private ?Hydrator\Operation\Users\Username\Events\Public_ $operation🌀Users🌀Username🌀Events🌀Public_                                                                                                                                       = null;
    private ?Hydrator\Operation\Users\Username\Followers $operation🌀Users🌀Username🌀Followers                                                                                                                                                 = null;
    private ?Hydrator\Operation\Users\Username\Following $operation🌀Users🌀Username🌀Following                                                                                                                                                 = null;
    private ?Hydrator\Operation\Users\Username\Following\TargetUser $operation🌀Users🌀Username🌀Following🌀TargetUser                                                                                                                           = null;
    private ?Hydrator\Operation\Users\Username\Gists $operation🌀Users🌀Username🌀Gists                                                                                                                                                         = null;
    private ?Hydrator\Operation\Users\Username\GpgKeys $operation🌀Users🌀Username🌀GpgKeys                                                                                                                                                     = null;
    private ?Hydrator\Operation\Users\Username\Hovercard $operation🌀Users🌀Username🌀Hovercard                                                                                                                                                 = null;
    private ?Hydrator\Operation\Users\Username\Installation $operation🌀Users🌀Username🌀Installation                                                                                                                                           = null;
    private ?Hydrator\Operation\Users\Username\Keys $operation🌀Users🌀Username🌀Keys                                                                                                                                                           = null;
    private ?Hydrator\Operation\Users\Username\Orgs $operation🌀Users🌀Username🌀Orgs                                                                                                                                                           = null;
    private ?Hydrator\Operation\Users\Username\Projects $operation🌀Users🌀Username🌀Projects                                                                                                                                                   = null;
    private ?Hydrator\Operation\Users\Username\ReceivedEvents $operation🌀Users🌀Username🌀ReceivedEvents                                                                                                                                       = null;
    private ?Hydrator\Operation\Users\Username\ReceivedEvents\Public_ $operation🌀Users🌀Username🌀ReceivedEvents🌀Public_                                                                                                                       = null;
    private ?Hydrator\Operation\Users\Username\Repos $operation🌀Users🌀Username🌀Repos                                                                                                                                                         = null;
    private ?Hydrator\Operation\Users\Username\SiteAdmin $operation🌀Users🌀Username🌀SiteAdmin                                                                                                                                                 = null;
    private ?Hydrator\Operation\Users\Username\Starred $operation🌀Users🌀Username🌀Starred                                                                                                                                                     = null;
    private ?Hydrator\Operation\Users\Username\Subscriptions $operation🌀Users🌀Username🌀Subscriptions                                                                                                                                         = null;
    private ?Hydrator\Operation\Users\Username\Suspended $operation🌀Users🌀Username🌀Suspended                                                                                                                                                 = null;
    private ?Hydrator\Operation\Zen $operation🌀Zen                                                                                                                                                                                           = null;

    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingTeam' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Mapping()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\SyncLdapMappingForTeam\\Response\\ApplicationJson\\Created' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Sync()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser\\Plan' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀Username🌀Mapping()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\SyncLdapMappingForUser\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀Username🌀Sync()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Admin🌀Organizations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\UpdateOrgName\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Admin🌀Organizations🌀Org()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\ApplicationJson\\UnprocessableEntity', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\UpdatePreReceiveEnvironment\\Response\\ApplicationJson\\UnprocessableEntity\\Application\\Json' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironmentDownloadStatus', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownload\\Response\\ApplicationJson\\UnprocessableEntity\\Application\\Json', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownloadStreaming\\Response\\ApplicationJson\\UnprocessableEntity\\Application\\Json' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\ScriptRepository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\Environment', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\Environment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveHooks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleUser' => $this->getObjectMapperOperation🌀Admin🌀Users()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\UpdateUsernameForUser\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Admin🌀Users🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization\\App', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ScopedInstallation', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀Admin🌀Users🌀Username🌀Authorizations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BasicError', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\InstallationToken', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ApplicationGrant', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ApplicationGrant\\App' => $this->getObjectMapperOperation🌀Applications🌀Grants🌀GrantId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct🌀Key()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Emojis\\Get\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Emojis()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Announcement' => $this->getObjectMapperOperation🌀Enterprise🌀Announcement()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseInfo' => $this->getObjectMapperOperation🌀Enterprise🌀Settings🌀License()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseRepositoryOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseHookOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePageOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOrganizationOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseUserOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePullRequestOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseIssueOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseMilestoneOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseGistOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseCommentOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀All()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\AuthenticationToken', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\AuthenticationToken\\Permissions' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Runner' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Activity\\ListPublicEvents\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Events()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\ForkOf', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\ForkOf\\Files', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\Files' => $this->getObjectMapperOperation🌀Gists()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden\\Block' => $this->getObjectMapperOperation🌀Gists🌀GistId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BaseGist', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BaseGist\\Files' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Forks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Gists\\CheckIsStarred\\Response\\ApplicationJson\\NotFound' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Star()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Apps\\ListReposAccessibleToInstallation\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀License()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Activity\\MarkNotificationsAsRead\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Notifications()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseSimple', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Owner', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository\\License', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread\\Subject' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull\\Plan' => $this->getObjectMapperOperation🌀Orgs🌀Org()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListRepoAccessToSelfHostedRunnerGroupInOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelfHostedRunnersInGroupForOrg\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationActionsSecret', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Orgs\\ListAppInstallations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Installations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Orgs\\ConvertMemberToOutsideCollaborator\\Response\\ApplicationJson\\Accepted\\Application\\Json', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Orgs\\RemoveOutsideCollaborator\\Response\\ApplicationJson\\UnprocessableEntity' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgPreReceiveHook' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Projects()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamFull', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamSimple' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussion', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ReactionRollup' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsInOrg\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamRepository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamRepository\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCard', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\DeleteCard\\Response\\ApplicationJson\\Forbidden' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Created\\Application\\Json', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\CreateCard\\Response\\ApplicationJson\\ServiceUnavailable\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\MoveColumn\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\Update\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀ProjectId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview\\Resources', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConductSimple', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Repos\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListArtifactsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Artifact', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForRepo\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListWorkflowRunsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\WorkflowRun', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit\\Author', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit\\Committer' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListWorkflowRunArtifacts\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\CancelWorkflowRun\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListJobsForWorkflowRun\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ReRunWorkflow\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListRepoSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsSecret', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\CreateOrUpdateRepoSecret\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListRepoWorkflows\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListWorkflowRuns\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitUser', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit\\Tree', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Verification', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Stats', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchRequiredStatusCheck', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchAdminEnforced', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\AllowForcePushes', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\AllowDeletions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\BlockCreations', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredSignatures' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\StatusCheckPolicy', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredSignatures', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\EnforceAdmins', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\AllowForcePushes', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\AllowDeletions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\BlockCreations' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\Output', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\CheckSuite', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference\\Preferences' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Checks\\ListForSuite\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Checks\\RerequestSuite\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlert', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertRule', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysisTool', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance\\Message', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertLocation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysis', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\CodeScanning\\GetAnalysis\\Response\\ApplicationJsonSarif\\Ok\\Application\\JsonSarif', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysisDeletion', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimError' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryCollaboratorPermission', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Reactions\\CreateForCommitComment\\Response\\ApplicationJson\\UnsupportedMediaType' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Checks\\ListForRef\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Checks\\ListSuitesForRef\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentReferenceAttachment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀ContentReferences🌀ContentReferenceId🌀Attachments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Author', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Committer', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Tree', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Deployment', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Repos\\CreateDeployment\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Author', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Committer', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Tree', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Tagger', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook\\Config', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Milestone', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEvent', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventLabel', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Team', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Team\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventDismissedReview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventMilestone', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventProjectCard', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseContent', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseContent\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Activity\\MarkRepoNotificationsAsRead\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Page', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesSourceHash', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild\\Error' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryPreReceiveHook' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Link', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Self_', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Html', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMergeResult', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\MethodNotAllowed\\Application\\Json', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\Conflict\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewRequest', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Head', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Base', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links\\Html', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Pulls\\UpdateBranch\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentFile', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentFile\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Repos\\GetCodeFrequencyStats\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Code\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Code()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Commits\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Commits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\IssuesAndPullRequests\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Issues()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Labels\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Repos\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Topics\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Topics()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Users\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Users()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ConfigurationStatus' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Configcheck()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\MaintenanceStatus' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Avatar', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Customer', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\License', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubSsl', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Reconciliation', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Profile', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Cas', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Saml', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubOauth', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Smtp', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ntp', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Snmp', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Syslog', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Pages', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Collectd', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Mapping' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Settings()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsLegacy\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PrivateUser', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PrivateUser\\Plan' => $this->getObjectMapperOperation🌀User()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Apps\\ListInstallationsForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Installations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀Username🌀Hovercard()->hydrateObject($className, $payload),
        };
    }

    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            (yield $index => $this->hydrateObject($className, $payload));
        }
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    public function serializeObjectOfType(object $object, string $className): mixed
    {
        return match ($className) {
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingTeam' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Mapping()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\SyncLdapMappingForTeam\\Response\\ApplicationJson\\Created' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Sync()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser\\Plan' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀Username🌀Mapping()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\SyncLdapMappingForUser\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀Username🌀Sync()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Admin🌀Organizations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\UpdateOrgName\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Admin🌀Organizations🌀Org()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\ApplicationJson\\UnprocessableEntity', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\UpdatePreReceiveEnvironment\\Response\\ApplicationJson\\UnprocessableEntity\\Application\\Json' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironmentDownloadStatus', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownload\\Response\\ApplicationJson\\UnprocessableEntity\\Application\\Json', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownloadStreaming\\Response\\ApplicationJson\\UnprocessableEntity\\Application\\Json' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\ScriptRepository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\Environment', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\Environment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveHooks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleUser' => $this->getObjectMapperOperation🌀Admin🌀Users()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\UpdateUsernameForUser\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Admin🌀Users🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization\\App', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ScopedInstallation', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀Admin🌀Users🌀Username🌀Authorizations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BasicError', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\InstallationToken', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ApplicationGrant', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ApplicationGrant\\App' => $this->getObjectMapperOperation🌀Applications🌀Grants🌀GrantId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct🌀Key()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Emojis\\Get\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Emojis()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Announcement' => $this->getObjectMapperOperation🌀Enterprise🌀Announcement()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseInfo' => $this->getObjectMapperOperation🌀Enterprise🌀Settings🌀License()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseRepositoryOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseHookOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePageOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOrganizationOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseUserOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePullRequestOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseIssueOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseMilestoneOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseGistOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseCommentOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀All()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\AuthenticationToken', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\AuthenticationToken\\Permissions' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Runner' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Activity\\ListPublicEvents\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Events()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\ForkOf', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\ForkOf\\Files', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\Files' => $this->getObjectMapperOperation🌀Gists()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden\\Block' => $this->getObjectMapperOperation🌀Gists🌀GistId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BaseGist', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BaseGist\\Files' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Forks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Gists\\CheckIsStarred\\Response\\ApplicationJson\\NotFound' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Star()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Apps\\ListReposAccessibleToInstallation\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀License()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Activity\\MarkNotificationsAsRead\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Notifications()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseSimple', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Owner', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository\\License', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread\\Subject' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull\\Plan' => $this->getObjectMapperOperation🌀Orgs🌀Org()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListRepoAccessToSelfHostedRunnerGroupInOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelfHostedRunnersInGroupForOrg\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationActionsSecret', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Orgs\\ListAppInstallations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Installations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Orgs\\ConvertMemberToOutsideCollaborator\\Response\\ApplicationJson\\Accepted\\Application\\Json', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Orgs\\RemoveOutsideCollaborator\\Response\\ApplicationJson\\UnprocessableEntity' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgPreReceiveHook' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Projects()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamFull', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamSimple' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussion', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ReactionRollup' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsInOrg\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamRepository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamRepository\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCard', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\DeleteCard\\Response\\ApplicationJson\\Forbidden' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Created\\Application\\Json', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\CreateCard\\Response\\ApplicationJson\\ServiceUnavailable\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\MoveColumn\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Projects\\Update\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀ProjectId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview\\Resources', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConductSimple', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Repos\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListArtifactsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Artifact', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForRepo\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListWorkflowRunsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\WorkflowRun', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit\\Author', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit\\Committer' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListWorkflowRunArtifacts\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\CancelWorkflowRun\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListJobsForWorkflowRun\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ReRunWorkflow\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListRepoSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsSecret', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\CreateOrUpdateRepoSecret\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListRepoWorkflows\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Actions\\ListWorkflowRuns\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitUser', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit\\Tree', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Verification', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Stats', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchRequiredStatusCheck', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchAdminEnforced', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\AllowForcePushes', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\AllowDeletions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\BlockCreations', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredSignatures' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\StatusCheckPolicy', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredSignatures', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\EnforceAdmins', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\AllowForcePushes', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\AllowDeletions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\BlockCreations' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\Output', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\CheckSuite', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference\\Preferences' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Checks\\ListForSuite\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Checks\\RerequestSuite\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlert', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertRule', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysisTool', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance\\Message', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertLocation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysis', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\CodeScanning\\GetAnalysis\\Response\\ApplicationJsonSarif\\Ok\\Application\\JsonSarif', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysisDeletion', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimError' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryCollaboratorPermission', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Reactions\\CreateForCommitComment\\Response\\ApplicationJson\\UnsupportedMediaType' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Checks\\ListForRef\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Checks\\ListSuitesForRef\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentReferenceAttachment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀ContentReferences🌀ContentReferenceId🌀Attachments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Author', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Committer', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Tree', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Deployment', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Repos\\CreateDeployment\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Author', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Committer', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Tree', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Tagger', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook\\Config', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Milestone', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEvent', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventLabel', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Team', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Team\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventDismissedReview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventMilestone', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventProjectCard', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseContent', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseContent\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Activity\\MarkRepoNotificationsAsRead\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Page', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesSourceHash', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild\\Error' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryPreReceiveHook' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Link', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Self_', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Html', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMergeResult', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\MethodNotAllowed\\Application\\Json', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\Conflict\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewRequest', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Head', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Base', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links\\Html', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Pulls\\UpdateBranch\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentFile', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentFile\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Repos\\GetCodeFrequencyStats\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Code\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Code()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Commits\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Commits()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\IssuesAndPullRequests\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Issues()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Labels\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Repos\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Topics\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Topics()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Search\\Users\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Users()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\ConfigurationStatus' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Configcheck()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\MaintenanceStatus' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Avatar', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Customer', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\License', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubSsl', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Reconciliation', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Profile', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Cas', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Saml', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubOauth', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Smtp', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ntp', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Snmp', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Syslog', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Pages', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Collectd', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Mapping' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Settings()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsLegacy\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PrivateUser', '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\PrivateUser\\Plan' => $this->getObjectMapperOperation🌀User()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Apps\\ListInstallationsForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Installations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Operations\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->serializeObject($object),
            '\\ApiClients\\Client\\GitHubEnterprise\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀Username🌀Hovercard()->serializeObject($object),
        };
    }

    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            (yield $index => $this->serializeObject($object));
        }
    }

    public function getObjectMapperOperation🌀Root(): Hydrator\Operation\Root
    {
        if ($this->operation🌀Root instanceof Hydrator\Operation\Root === false) {
            $this->operation🌀Root = new Hydrator\Operation\Root();
        }

        return $this->operation🌀Root;
    }

    public function getObjectMapperOperation🌀Admin🌀Hooks(): Hydrator\Operation\Admin\Hooks
    {
        if ($this->operation🌀Admin🌀Hooks instanceof Hydrator\Operation\Admin\Hooks === false) {
            $this->operation🌀Admin🌀Hooks = new Hydrator\Operation\Admin\Hooks();
        }

        return $this->operation🌀Admin🌀Hooks;
    }

    public function getObjectMapperOperation🌀Admin🌀Hooks🌀HookId(): Hydrator\Operation\Admin\Hooks\HookId
    {
        if ($this->operation🌀Admin🌀Hooks🌀HookId instanceof Hydrator\Operation\Admin\Hooks\HookId === false) {
            $this->operation🌀Admin🌀Hooks🌀HookId = new Hydrator\Operation\Admin\Hooks\HookId();
        }

        return $this->operation🌀Admin🌀Hooks🌀HookId;
    }

    public function getObjectMapperOperation🌀Admin🌀Hooks🌀HookId🌀Pings(): Hydrator\Operation\Admin\Hooks\HookId\Pings
    {
        if ($this->operation🌀Admin🌀Hooks🌀HookId🌀Pings instanceof Hydrator\Operation\Admin\Hooks\HookId\Pings === false) {
            $this->operation🌀Admin🌀Hooks🌀HookId🌀Pings = new Hydrator\Operation\Admin\Hooks\HookId\Pings();
        }

        return $this->operation🌀Admin🌀Hooks🌀HookId🌀Pings;
    }

    public function getObjectMapperOperation🌀Admin🌀Keys(): Hydrator\Operation\Admin\Keys
    {
        if ($this->operation🌀Admin🌀Keys instanceof Hydrator\Operation\Admin\Keys === false) {
            $this->operation🌀Admin🌀Keys = new Hydrator\Operation\Admin\Keys();
        }

        return $this->operation🌀Admin🌀Keys;
    }

    public function getObjectMapperOperation🌀Admin🌀Keys🌀KeyIds(): Hydrator\Operation\Admin\Keys\KeyIds
    {
        if ($this->operation🌀Admin🌀Keys🌀KeyIds instanceof Hydrator\Operation\Admin\Keys\KeyIds === false) {
            $this->operation🌀Admin🌀Keys🌀KeyIds = new Hydrator\Operation\Admin\Keys\KeyIds();
        }

        return $this->operation🌀Admin🌀Keys🌀KeyIds;
    }

    public function getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Mapping(): Hydrator\Operation\Admin\Ldap\Teams\TeamId\Mapping
    {
        if ($this->operation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Mapping instanceof Hydrator\Operation\Admin\Ldap\Teams\TeamId\Mapping === false) {
            $this->operation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Mapping = new Hydrator\Operation\Admin\Ldap\Teams\TeamId\Mapping();
        }

        return $this->operation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Mapping;
    }

    public function getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Sync(): Hydrator\Operation\Admin\Ldap\Teams\TeamId\Sync
    {
        if ($this->operation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Sync instanceof Hydrator\Operation\Admin\Ldap\Teams\TeamId\Sync === false) {
            $this->operation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Sync = new Hydrator\Operation\Admin\Ldap\Teams\TeamId\Sync();
        }

        return $this->operation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Sync;
    }

    public function getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀Username🌀Mapping(): Hydrator\Operation\Admin\Ldap\Users\Username\Mapping
    {
        if ($this->operation🌀Admin🌀Ldap🌀Users🌀Username🌀Mapping instanceof Hydrator\Operation\Admin\Ldap\Users\Username\Mapping === false) {
            $this->operation🌀Admin🌀Ldap🌀Users🌀Username🌀Mapping = new Hydrator\Operation\Admin\Ldap\Users\Username\Mapping();
        }

        return $this->operation🌀Admin🌀Ldap🌀Users🌀Username🌀Mapping;
    }

    public function getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀Username🌀Sync(): Hydrator\Operation\Admin\Ldap\Users\Username\Sync
    {
        if ($this->operation🌀Admin🌀Ldap🌀Users🌀Username🌀Sync instanceof Hydrator\Operation\Admin\Ldap\Users\Username\Sync === false) {
            $this->operation🌀Admin🌀Ldap🌀Users🌀Username🌀Sync = new Hydrator\Operation\Admin\Ldap\Users\Username\Sync();
        }

        return $this->operation🌀Admin🌀Ldap🌀Users🌀Username🌀Sync;
    }

    public function getObjectMapperOperation🌀Admin🌀Organizations(): Hydrator\Operation\Admin\Organizations
    {
        if ($this->operation🌀Admin🌀Organizations instanceof Hydrator\Operation\Admin\Organizations === false) {
            $this->operation🌀Admin🌀Organizations = new Hydrator\Operation\Admin\Organizations();
        }

        return $this->operation🌀Admin🌀Organizations;
    }

    public function getObjectMapperOperation🌀Admin🌀Organizations🌀Org(): Hydrator\Operation\Admin\Organizations\Org
    {
        if ($this->operation🌀Admin🌀Organizations🌀Org instanceof Hydrator\Operation\Admin\Organizations\Org === false) {
            $this->operation🌀Admin🌀Organizations🌀Org = new Hydrator\Operation\Admin\Organizations\Org();
        }

        return $this->operation🌀Admin🌀Organizations🌀Org;
    }

    public function getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments(): Hydrator\Operation\Admin\PreReceiveEnvironments
    {
        if ($this->operation🌀Admin🌀PreReceiveEnvironments instanceof Hydrator\Operation\Admin\PreReceiveEnvironments === false) {
            $this->operation🌀Admin🌀PreReceiveEnvironments = new Hydrator\Operation\Admin\PreReceiveEnvironments();
        }

        return $this->operation🌀Admin🌀PreReceiveEnvironments;
    }

    public function getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId(): Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId
    {
        if ($this->operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId instanceof Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId === false) {
            $this->operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId = new Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId();
        }

        return $this->operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId;
    }

    public function getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads(): Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads
    {
        if ($this->operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads instanceof Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads === false) {
            $this->operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads = new Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads();
        }

        return $this->operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads;
    }

    public function getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest(): Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads\Latest
    {
        if ($this->operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest instanceof Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads\Latest === false) {
            $this->operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest = new Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads\Latest();
        }

        return $this->operation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest;
    }

    public function getObjectMapperOperation🌀Admin🌀PreReceiveHooks(): Hydrator\Operation\Admin\PreReceiveHooks
    {
        if ($this->operation🌀Admin🌀PreReceiveHooks instanceof Hydrator\Operation\Admin\PreReceiveHooks === false) {
            $this->operation🌀Admin🌀PreReceiveHooks = new Hydrator\Operation\Admin\PreReceiveHooks();
        }

        return $this->operation🌀Admin🌀PreReceiveHooks;
    }

    public function getObjectMapperOperation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId(): Hydrator\Operation\Admin\PreReceiveHooks\PreReceiveHookId
    {
        if ($this->operation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId instanceof Hydrator\Operation\Admin\PreReceiveHooks\PreReceiveHookId === false) {
            $this->operation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId = new Hydrator\Operation\Admin\PreReceiveHooks\PreReceiveHookId();
        }

        return $this->operation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId;
    }

    public function getObjectMapperOperation🌀Admin🌀Tokens(): Hydrator\Operation\Admin\Tokens
    {
        if ($this->operation🌀Admin🌀Tokens instanceof Hydrator\Operation\Admin\Tokens === false) {
            $this->operation🌀Admin🌀Tokens = new Hydrator\Operation\Admin\Tokens();
        }

        return $this->operation🌀Admin🌀Tokens;
    }

    public function getObjectMapperOperation🌀Admin🌀Tokens🌀TokenId(): Hydrator\Operation\Admin\Tokens\TokenId
    {
        if ($this->operation🌀Admin🌀Tokens🌀TokenId instanceof Hydrator\Operation\Admin\Tokens\TokenId === false) {
            $this->operation🌀Admin🌀Tokens🌀TokenId = new Hydrator\Operation\Admin\Tokens\TokenId();
        }

        return $this->operation🌀Admin🌀Tokens🌀TokenId;
    }

    public function getObjectMapperOperation🌀Admin🌀Users(): Hydrator\Operation\Admin\Users
    {
        if ($this->operation🌀Admin🌀Users instanceof Hydrator\Operation\Admin\Users === false) {
            $this->operation🌀Admin🌀Users = new Hydrator\Operation\Admin\Users();
        }

        return $this->operation🌀Admin🌀Users;
    }

    public function getObjectMapperOperation🌀Admin🌀Users🌀Username(): Hydrator\Operation\Admin\Users\Username
    {
        if ($this->operation🌀Admin🌀Users🌀Username instanceof Hydrator\Operation\Admin\Users\Username === false) {
            $this->operation🌀Admin🌀Users🌀Username = new Hydrator\Operation\Admin\Users\Username();
        }

        return $this->operation🌀Admin🌀Users🌀Username;
    }

    public function getObjectMapperOperation🌀Admin🌀Users🌀Username🌀Authorizations(): Hydrator\Operation\Admin\Users\Username\Authorizations
    {
        if ($this->operation🌀Admin🌀Users🌀Username🌀Authorizations instanceof Hydrator\Operation\Admin\Users\Username\Authorizations === false) {
            $this->operation🌀Admin🌀Users🌀Username🌀Authorizations = new Hydrator\Operation\Admin\Users\Username\Authorizations();
        }

        return $this->operation🌀Admin🌀Users🌀Username🌀Authorizations;
    }

    public function getObjectMapperOperation🌀App(): Hydrator\Operation\App
    {
        if ($this->operation🌀App instanceof Hydrator\Operation\App === false) {
            $this->operation🌀App = new Hydrator\Operation\App();
        }

        return $this->operation🌀App;
    }

    public function getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions(): Hydrator\Operation\AppManifests\Code\Conversions
    {
        if ($this->operation🌀AppManifests🌀Code🌀Conversions instanceof Hydrator\Operation\AppManifests\Code\Conversions === false) {
            $this->operation🌀AppManifests🌀Code🌀Conversions = new Hydrator\Operation\AppManifests\Code\Conversions();
        }

        return $this->operation🌀AppManifests🌀Code🌀Conversions;
    }

    public function getObjectMapperOperation🌀App🌀Hook🌀Config(): Hydrator\Operation\App\Hook\Config
    {
        if ($this->operation🌀App🌀Hook🌀Config instanceof Hydrator\Operation\App\Hook\Config === false) {
            $this->operation🌀App🌀Hook🌀Config = new Hydrator\Operation\App\Hook\Config();
        }

        return $this->operation🌀App🌀Hook🌀Config;
    }

    public function getObjectMapperOperation🌀App🌀Installations(): Hydrator\Operation\App\Installations
    {
        if ($this->operation🌀App🌀Installations instanceof Hydrator\Operation\App\Installations === false) {
            $this->operation🌀App🌀Installations = new Hydrator\Operation\App\Installations();
        }

        return $this->operation🌀App🌀Installations;
    }

    public function getObjectMapperOperation🌀App🌀Installations🌀InstallationId(): Hydrator\Operation\App\Installations\InstallationId
    {
        if ($this->operation🌀App🌀Installations🌀InstallationId instanceof Hydrator\Operation\App\Installations\InstallationId === false) {
            $this->operation🌀App🌀Installations🌀InstallationId = new Hydrator\Operation\App\Installations\InstallationId();
        }

        return $this->operation🌀App🌀Installations🌀InstallationId;
    }

    public function getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens(): Hydrator\Operation\App\Installations\InstallationId\AccessTokens
    {
        if ($this->operation🌀App🌀Installations🌀InstallationId🌀AccessTokens instanceof Hydrator\Operation\App\Installations\InstallationId\AccessTokens === false) {
            $this->operation🌀App🌀Installations🌀InstallationId🌀AccessTokens = new Hydrator\Operation\App\Installations\InstallationId\AccessTokens();
        }

        return $this->operation🌀App🌀Installations🌀InstallationId🌀AccessTokens;
    }

    public function getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended(): Hydrator\Operation\App\Installations\InstallationId\Suspended
    {
        if ($this->operation🌀App🌀Installations🌀InstallationId🌀Suspended instanceof Hydrator\Operation\App\Installations\InstallationId\Suspended === false) {
            $this->operation🌀App🌀Installations🌀InstallationId🌀Suspended = new Hydrator\Operation\App\Installations\InstallationId\Suspended();
        }

        return $this->operation🌀App🌀Installations🌀InstallationId🌀Suspended;
    }

    public function getObjectMapperOperation🌀Applications🌀Grants(): Hydrator\Operation\Applications\Grants
    {
        if ($this->operation🌀Applications🌀Grants instanceof Hydrator\Operation\Applications\Grants === false) {
            $this->operation🌀Applications🌀Grants = new Hydrator\Operation\Applications\Grants();
        }

        return $this->operation🌀Applications🌀Grants;
    }

    public function getObjectMapperOperation🌀Applications🌀Grants🌀GrantId(): Hydrator\Operation\Applications\Grants\GrantId
    {
        if ($this->operation🌀Applications🌀Grants🌀GrantId instanceof Hydrator\Operation\Applications\Grants\GrantId === false) {
            $this->operation🌀Applications🌀Grants🌀GrantId = new Hydrator\Operation\Applications\Grants\GrantId();
        }

        return $this->operation🌀Applications🌀Grants🌀GrantId;
    }

    public function getObjectMapperOperation🌀Applications🌀ClientId🌀Grant(): Hydrator\Operation\Applications\ClientId\Grant
    {
        if ($this->operation🌀Applications🌀ClientId🌀Grant instanceof Hydrator\Operation\Applications\ClientId\Grant === false) {
            $this->operation🌀Applications🌀ClientId🌀Grant = new Hydrator\Operation\Applications\ClientId\Grant();
        }

        return $this->operation🌀Applications🌀ClientId🌀Grant;
    }

    public function getObjectMapperOperation🌀Applications🌀ClientId🌀Grants🌀AccessToken(): Hydrator\Operation\Applications\ClientId\Grants\AccessToken
    {
        if ($this->operation🌀Applications🌀ClientId🌀Grants🌀AccessToken instanceof Hydrator\Operation\Applications\ClientId\Grants\AccessToken === false) {
            $this->operation🌀Applications🌀ClientId🌀Grants🌀AccessToken = new Hydrator\Operation\Applications\ClientId\Grants\AccessToken();
        }

        return $this->operation🌀Applications🌀ClientId🌀Grants🌀AccessToken;
    }

    public function getObjectMapperOperation🌀Applications🌀ClientId🌀Token(): Hydrator\Operation\Applications\ClientId\Token
    {
        if ($this->operation🌀Applications🌀ClientId🌀Token instanceof Hydrator\Operation\Applications\ClientId\Token === false) {
            $this->operation🌀Applications🌀ClientId🌀Token = new Hydrator\Operation\Applications\ClientId\Token();
        }

        return $this->operation🌀Applications🌀ClientId🌀Token;
    }

    public function getObjectMapperOperation🌀Applications🌀ClientId🌀Token🌀Scoped(): Hydrator\Operation\Applications\ClientId\Token\Scoped
    {
        if ($this->operation🌀Applications🌀ClientId🌀Token🌀Scoped instanceof Hydrator\Operation\Applications\ClientId\Token\Scoped === false) {
            $this->operation🌀Applications🌀ClientId🌀Token🌀Scoped = new Hydrator\Operation\Applications\ClientId\Token\Scoped();
        }

        return $this->operation🌀Applications🌀ClientId🌀Token🌀Scoped;
    }

    public function getObjectMapperOperation🌀Applications🌀ClientId🌀Tokens🌀AccessToken(): Hydrator\Operation\Applications\ClientId\Tokens\AccessToken
    {
        if ($this->operation🌀Applications🌀ClientId🌀Tokens🌀AccessToken instanceof Hydrator\Operation\Applications\ClientId\Tokens\AccessToken === false) {
            $this->operation🌀Applications🌀ClientId🌀Tokens🌀AccessToken = new Hydrator\Operation\Applications\ClientId\Tokens\AccessToken();
        }

        return $this->operation🌀Applications🌀ClientId🌀Tokens🌀AccessToken;
    }

    public function getObjectMapperOperation🌀Apps🌀AppSlug(): Hydrator\Operation\Apps\AppSlug
    {
        if ($this->operation🌀Apps🌀AppSlug instanceof Hydrator\Operation\Apps\AppSlug === false) {
            $this->operation🌀Apps🌀AppSlug = new Hydrator\Operation\Apps\AppSlug();
        }

        return $this->operation🌀Apps🌀AppSlug;
    }

    public function getObjectMapperOperation🌀Authorizations(): Hydrator\Operation\Authorizations
    {
        if ($this->operation🌀Authorizations instanceof Hydrator\Operation\Authorizations === false) {
            $this->operation🌀Authorizations = new Hydrator\Operation\Authorizations();
        }

        return $this->operation🌀Authorizations;
    }

    public function getObjectMapperOperation🌀Authorizations🌀Clients🌀ClientId(): Hydrator\Operation\Authorizations\Clients\ClientId
    {
        if ($this->operation🌀Authorizations🌀Clients🌀ClientId instanceof Hydrator\Operation\Authorizations\Clients\ClientId === false) {
            $this->operation🌀Authorizations🌀Clients🌀ClientId = new Hydrator\Operation\Authorizations\Clients\ClientId();
        }

        return $this->operation🌀Authorizations🌀Clients🌀ClientId;
    }

    public function getObjectMapperOperation🌀Authorizations🌀Clients🌀ClientId🌀Fingerprint(): Hydrator\Operation\Authorizations\Clients\ClientId\Fingerprint
    {
        if ($this->operation🌀Authorizations🌀Clients🌀ClientId🌀Fingerprint instanceof Hydrator\Operation\Authorizations\Clients\ClientId\Fingerprint === false) {
            $this->operation🌀Authorizations🌀Clients🌀ClientId🌀Fingerprint = new Hydrator\Operation\Authorizations\Clients\ClientId\Fingerprint();
        }

        return $this->operation🌀Authorizations🌀Clients🌀ClientId🌀Fingerprint;
    }

    public function getObjectMapperOperation🌀Authorizations🌀AuthorizationId(): Hydrator\Operation\Authorizations\AuthorizationId
    {
        if ($this->operation🌀Authorizations🌀AuthorizationId instanceof Hydrator\Operation\Authorizations\AuthorizationId === false) {
            $this->operation🌀Authorizations🌀AuthorizationId = new Hydrator\Operation\Authorizations\AuthorizationId();
        }

        return $this->operation🌀Authorizations🌀AuthorizationId;
    }

    public function getObjectMapperOperation🌀CodesOfConduct(): Hydrator\Operation\CodesOfConduct
    {
        if ($this->operation🌀CodesOfConduct instanceof Hydrator\Operation\CodesOfConduct === false) {
            $this->operation🌀CodesOfConduct = new Hydrator\Operation\CodesOfConduct();
        }

        return $this->operation🌀CodesOfConduct;
    }

    public function getObjectMapperOperation🌀CodesOfConduct🌀Key(): Hydrator\Operation\CodesOfConduct\Key
    {
        if ($this->operation🌀CodesOfConduct🌀Key instanceof Hydrator\Operation\CodesOfConduct\Key === false) {
            $this->operation🌀CodesOfConduct🌀Key = new Hydrator\Operation\CodesOfConduct\Key();
        }

        return $this->operation🌀CodesOfConduct🌀Key;
    }

    public function getObjectMapperOperation🌀Emojis(): Hydrator\Operation\Emojis
    {
        if ($this->operation🌀Emojis instanceof Hydrator\Operation\Emojis === false) {
            $this->operation🌀Emojis = new Hydrator\Operation\Emojis();
        }

        return $this->operation🌀Emojis;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Announcement(): Hydrator\Operation\Enterprise\Announcement
    {
        if ($this->operation🌀Enterprise🌀Announcement instanceof Hydrator\Operation\Enterprise\Announcement === false) {
            $this->operation🌀Enterprise🌀Announcement = new Hydrator\Operation\Enterprise\Announcement();
        }

        return $this->operation🌀Enterprise🌀Announcement;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Settings🌀License(): Hydrator\Operation\Enterprise\Settings\License
    {
        if ($this->operation🌀Enterprise🌀Settings🌀License instanceof Hydrator\Operation\Enterprise\Settings\License === false) {
            $this->operation🌀Enterprise🌀Settings🌀License = new Hydrator\Operation\Enterprise\Settings\License();
        }

        return $this->operation🌀Enterprise🌀Settings🌀License;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀All(): Hydrator\Operation\Enterprise\Stats\All
    {
        if ($this->operation🌀Enterprise🌀Stats🌀All instanceof Hydrator\Operation\Enterprise\Stats\All === false) {
            $this->operation🌀Enterprise🌀Stats🌀All = new Hydrator\Operation\Enterprise\Stats\All();
        }

        return $this->operation🌀Enterprise🌀Stats🌀All;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments(): Hydrator\Operation\Enterprise\Stats\Comments
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Comments instanceof Hydrator\Operation\Enterprise\Stats\Comments === false) {
            $this->operation🌀Enterprise🌀Stats🌀Comments = new Hydrator\Operation\Enterprise\Stats\Comments();
        }

        return $this->operation🌀Enterprise🌀Stats🌀Comments;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists(): Hydrator\Operation\Enterprise\Stats\Gists
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Gists instanceof Hydrator\Operation\Enterprise\Stats\Gists === false) {
            $this->operation🌀Enterprise🌀Stats🌀Gists = new Hydrator\Operation\Enterprise\Stats\Gists();
        }

        return $this->operation🌀Enterprise🌀Stats🌀Gists;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks(): Hydrator\Operation\Enterprise\Stats\Hooks
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Hooks instanceof Hydrator\Operation\Enterprise\Stats\Hooks === false) {
            $this->operation🌀Enterprise🌀Stats🌀Hooks = new Hydrator\Operation\Enterprise\Stats\Hooks();
        }

        return $this->operation🌀Enterprise🌀Stats🌀Hooks;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues(): Hydrator\Operation\Enterprise\Stats\Issues
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Issues instanceof Hydrator\Operation\Enterprise\Stats\Issues === false) {
            $this->operation🌀Enterprise🌀Stats🌀Issues = new Hydrator\Operation\Enterprise\Stats\Issues();
        }

        return $this->operation🌀Enterprise🌀Stats🌀Issues;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones(): Hydrator\Operation\Enterprise\Stats\Milestones
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Milestones instanceof Hydrator\Operation\Enterprise\Stats\Milestones === false) {
            $this->operation🌀Enterprise🌀Stats🌀Milestones = new Hydrator\Operation\Enterprise\Stats\Milestones();
        }

        return $this->operation🌀Enterprise🌀Stats🌀Milestones;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs(): Hydrator\Operation\Enterprise\Stats\Orgs
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Orgs instanceof Hydrator\Operation\Enterprise\Stats\Orgs === false) {
            $this->operation🌀Enterprise🌀Stats🌀Orgs = new Hydrator\Operation\Enterprise\Stats\Orgs();
        }

        return $this->operation🌀Enterprise🌀Stats🌀Orgs;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages(): Hydrator\Operation\Enterprise\Stats\Pages
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Pages instanceof Hydrator\Operation\Enterprise\Stats\Pages === false) {
            $this->operation🌀Enterprise🌀Stats🌀Pages = new Hydrator\Operation\Enterprise\Stats\Pages();
        }

        return $this->operation🌀Enterprise🌀Stats🌀Pages;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls(): Hydrator\Operation\Enterprise\Stats\Pulls
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Pulls instanceof Hydrator\Operation\Enterprise\Stats\Pulls === false) {
            $this->operation🌀Enterprise🌀Stats🌀Pulls = new Hydrator\Operation\Enterprise\Stats\Pulls();
        }

        return $this->operation🌀Enterprise🌀Stats🌀Pulls;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos(): Hydrator\Operation\Enterprise\Stats\Repos
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Repos instanceof Hydrator\Operation\Enterprise\Stats\Repos === false) {
            $this->operation🌀Enterprise🌀Stats🌀Repos = new Hydrator\Operation\Enterprise\Stats\Repos();
        }

        return $this->operation🌀Enterprise🌀Stats🌀Repos;
    }

    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Users(): Hydrator\Operation\Enterprise\Stats\Users
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Users instanceof Hydrator\Operation\Enterprise\Stats\Users === false) {
            $this->operation🌀Enterprise🌀Stats🌀Users = new Hydrator\Operation\Enterprise\Stats\Users();
        }

        return $this->operation🌀Enterprise🌀Stats🌀Users;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions(): Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions = new Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations(): Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\Organizations
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\Organizations === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations = new Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\Organizations();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations🌀OrgId(): Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\Organizations\OrgId
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations🌀OrgId instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\Organizations\OrgId === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations🌀OrgId = new Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\Organizations\OrgId();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations🌀OrgId;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions(): Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\SelectedActions
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\SelectedActions === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions = new Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\SelectedActions();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups(): Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups = new Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId(): Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId = new Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations(): Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Organizations
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Organizations === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations = new Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Organizations();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations🌀OrgId(): Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Organizations\OrgId
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations🌀OrgId instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Organizations\OrgId === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations🌀OrgId = new Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Organizations\OrgId();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations🌀OrgId;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners(): Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Runners
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Runners === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners = new Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Runners();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId(): Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Runners\RunnerId
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Runners\RunnerId === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId = new Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Runners\RunnerId();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners(): Hydrator\Operation\Enterprises\Enterprise\Actions\Runners
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\Runners === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners = new Hydrator\Operation\Enterprises\Enterprise\Actions\Runners();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads(): Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\Downloads
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\Downloads === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads = new Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\Downloads();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken(): Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RegistrationToken
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RegistrationToken === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken = new Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RegistrationToken();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RemoveToken(): Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RemoveToken
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RemoveToken instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RemoveToken === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RemoveToken = new Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RemoveToken();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RemoveToken;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId(): Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId instanceof Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId = new Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId;
    }

    public function getObjectMapperOperation🌀Events(): Hydrator\Operation\Events
    {
        if ($this->operation🌀Events instanceof Hydrator\Operation\Events === false) {
            $this->operation🌀Events = new Hydrator\Operation\Events();
        }

        return $this->operation🌀Events;
    }

    public function getObjectMapperOperation🌀Feeds(): Hydrator\Operation\Feeds
    {
        if ($this->operation🌀Feeds instanceof Hydrator\Operation\Feeds === false) {
            $this->operation🌀Feeds = new Hydrator\Operation\Feeds();
        }

        return $this->operation🌀Feeds;
    }

    public function getObjectMapperOperation🌀Gists(): Hydrator\Operation\Gists
    {
        if ($this->operation🌀Gists instanceof Hydrator\Operation\Gists === false) {
            $this->operation🌀Gists = new Hydrator\Operation\Gists();
        }

        return $this->operation🌀Gists;
    }

    public function getObjectMapperOperation🌀Gists🌀Public_(): Hydrator\Operation\Gists\Public_
    {
        if ($this->operation🌀Gists🌀Public_ instanceof Hydrator\Operation\Gists\Public_ === false) {
            $this->operation🌀Gists🌀Public_ = new Hydrator\Operation\Gists\Public_();
        }

        return $this->operation🌀Gists🌀Public_;
    }

    public function getObjectMapperOperation🌀Gists🌀Starred(): Hydrator\Operation\Gists\Starred
    {
        if ($this->operation🌀Gists🌀Starred instanceof Hydrator\Operation\Gists\Starred === false) {
            $this->operation🌀Gists🌀Starred = new Hydrator\Operation\Gists\Starred();
        }

        return $this->operation🌀Gists🌀Starred;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId(): Hydrator\Operation\Gists\GistId
    {
        if ($this->operation🌀Gists🌀GistId instanceof Hydrator\Operation\Gists\GistId === false) {
            $this->operation🌀Gists🌀GistId = new Hydrator\Operation\Gists\GistId();
        }

        return $this->operation🌀Gists🌀GistId;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Comments(): Hydrator\Operation\Gists\GistId\Comments
    {
        if ($this->operation🌀Gists🌀GistId🌀Comments instanceof Hydrator\Operation\Gists\GistId\Comments === false) {
            $this->operation🌀Gists🌀GistId🌀Comments = new Hydrator\Operation\Gists\GistId\Comments();
        }

        return $this->operation🌀Gists🌀GistId🌀Comments;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId(): Hydrator\Operation\Gists\GistId\Comments\CommentId
    {
        if ($this->operation🌀Gists🌀GistId🌀Comments🌀CommentId instanceof Hydrator\Operation\Gists\GistId\Comments\CommentId === false) {
            $this->operation🌀Gists🌀GistId🌀Comments🌀CommentId = new Hydrator\Operation\Gists\GistId\Comments\CommentId();
        }

        return $this->operation🌀Gists🌀GistId🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Commits(): Hydrator\Operation\Gists\GistId\Commits
    {
        if ($this->operation🌀Gists🌀GistId🌀Commits instanceof Hydrator\Operation\Gists\GistId\Commits === false) {
            $this->operation🌀Gists🌀GistId🌀Commits = new Hydrator\Operation\Gists\GistId\Commits();
        }

        return $this->operation🌀Gists🌀GistId🌀Commits;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Forks(): Hydrator\Operation\Gists\GistId\Forks
    {
        if ($this->operation🌀Gists🌀GistId🌀Forks instanceof Hydrator\Operation\Gists\GistId\Forks === false) {
            $this->operation🌀Gists🌀GistId🌀Forks = new Hydrator\Operation\Gists\GistId\Forks();
        }

        return $this->operation🌀Gists🌀GistId🌀Forks;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Star(): Hydrator\Operation\Gists\GistId\Star
    {
        if ($this->operation🌀Gists🌀GistId🌀Star instanceof Hydrator\Operation\Gists\GistId\Star === false) {
            $this->operation🌀Gists🌀GistId🌀Star = new Hydrator\Operation\Gists\GistId\Star();
        }

        return $this->operation🌀Gists🌀GistId🌀Star;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Sha(): Hydrator\Operation\Gists\GistId\Sha
    {
        if ($this->operation🌀Gists🌀GistId🌀Sha instanceof Hydrator\Operation\Gists\GistId\Sha === false) {
            $this->operation🌀Gists🌀GistId🌀Sha = new Hydrator\Operation\Gists\GistId\Sha();
        }

        return $this->operation🌀Gists🌀GistId🌀Sha;
    }

    public function getObjectMapperOperation🌀Gitignore🌀Templates(): Hydrator\Operation\Gitignore\Templates
    {
        if ($this->operation🌀Gitignore🌀Templates instanceof Hydrator\Operation\Gitignore\Templates === false) {
            $this->operation🌀Gitignore🌀Templates = new Hydrator\Operation\Gitignore\Templates();
        }

        return $this->operation🌀Gitignore🌀Templates;
    }

    public function getObjectMapperOperation🌀Gitignore🌀Templates🌀Name(): Hydrator\Operation\Gitignore\Templates\Name
    {
        if ($this->operation🌀Gitignore🌀Templates🌀Name instanceof Hydrator\Operation\Gitignore\Templates\Name === false) {
            $this->operation🌀Gitignore🌀Templates🌀Name = new Hydrator\Operation\Gitignore\Templates\Name();
        }

        return $this->operation🌀Gitignore🌀Templates🌀Name;
    }

    public function getObjectMapperOperation🌀Installation🌀Repositories(): Hydrator\Operation\Installation\Repositories
    {
        if ($this->operation🌀Installation🌀Repositories instanceof Hydrator\Operation\Installation\Repositories === false) {
            $this->operation🌀Installation🌀Repositories = new Hydrator\Operation\Installation\Repositories();
        }

        return $this->operation🌀Installation🌀Repositories;
    }

    public function getObjectMapperOperation🌀Installation🌀Token(): Hydrator\Operation\Installation\Token
    {
        if ($this->operation🌀Installation🌀Token instanceof Hydrator\Operation\Installation\Token === false) {
            $this->operation🌀Installation🌀Token = new Hydrator\Operation\Installation\Token();
        }

        return $this->operation🌀Installation🌀Token;
    }

    public function getObjectMapperOperation🌀Issues(): Hydrator\Operation\Issues
    {
        if ($this->operation🌀Issues instanceof Hydrator\Operation\Issues === false) {
            $this->operation🌀Issues = new Hydrator\Operation\Issues();
        }

        return $this->operation🌀Issues;
    }

    public function getObjectMapperOperation🌀Licenses(): Hydrator\Operation\Licenses
    {
        if ($this->operation🌀Licenses instanceof Hydrator\Operation\Licenses === false) {
            $this->operation🌀Licenses = new Hydrator\Operation\Licenses();
        }

        return $this->operation🌀Licenses;
    }

    public function getObjectMapperOperation🌀Licenses🌀License(): Hydrator\Operation\Licenses\License
    {
        if ($this->operation🌀Licenses🌀License instanceof Hydrator\Operation\Licenses\License === false) {
            $this->operation🌀Licenses🌀License = new Hydrator\Operation\Licenses\License();
        }

        return $this->operation🌀Licenses🌀License;
    }

    public function getObjectMapperOperation🌀Markdown(): Hydrator\Operation\Markdown
    {
        if ($this->operation🌀Markdown instanceof Hydrator\Operation\Markdown === false) {
            $this->operation🌀Markdown = new Hydrator\Operation\Markdown();
        }

        return $this->operation🌀Markdown;
    }

    public function getObjectMapperOperation🌀Markdown🌀Raw(): Hydrator\Operation\Markdown\Raw
    {
        if ($this->operation🌀Markdown🌀Raw instanceof Hydrator\Operation\Markdown\Raw === false) {
            $this->operation🌀Markdown🌀Raw = new Hydrator\Operation\Markdown\Raw();
        }

        return $this->operation🌀Markdown🌀Raw;
    }

    public function getObjectMapperOperation🌀Meta(): Hydrator\Operation\Meta
    {
        if ($this->operation🌀Meta instanceof Hydrator\Operation\Meta === false) {
            $this->operation🌀Meta = new Hydrator\Operation\Meta();
        }

        return $this->operation🌀Meta;
    }

    public function getObjectMapperOperation🌀Networks🌀Owner🌀Repo🌀Events(): Hydrator\Operation\Networks\Owner\Repo\Events
    {
        if ($this->operation🌀Networks🌀Owner🌀Repo🌀Events instanceof Hydrator\Operation\Networks\Owner\Repo\Events === false) {
            $this->operation🌀Networks🌀Owner🌀Repo🌀Events = new Hydrator\Operation\Networks\Owner\Repo\Events();
        }

        return $this->operation🌀Networks🌀Owner🌀Repo🌀Events;
    }

    public function getObjectMapperOperation🌀Notifications(): Hydrator\Operation\Notifications
    {
        if ($this->operation🌀Notifications instanceof Hydrator\Operation\Notifications === false) {
            $this->operation🌀Notifications = new Hydrator\Operation\Notifications();
        }

        return $this->operation🌀Notifications;
    }

    public function getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId(): Hydrator\Operation\Notifications\Threads\ThreadId
    {
        if ($this->operation🌀Notifications🌀Threads🌀ThreadId instanceof Hydrator\Operation\Notifications\Threads\ThreadId === false) {
            $this->operation🌀Notifications🌀Threads🌀ThreadId = new Hydrator\Operation\Notifications\Threads\ThreadId();
        }

        return $this->operation🌀Notifications🌀Threads🌀ThreadId;
    }

    public function getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription(): Hydrator\Operation\Notifications\Threads\ThreadId\Subscription
    {
        if ($this->operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription instanceof Hydrator\Operation\Notifications\Threads\ThreadId\Subscription === false) {
            $this->operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription = new Hydrator\Operation\Notifications\Threads\ThreadId\Subscription();
        }

        return $this->operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription;
    }

    public function getObjectMapperOperation🌀Octocat(): Hydrator\Operation\Octocat
    {
        if ($this->operation🌀Octocat instanceof Hydrator\Operation\Octocat === false) {
            $this->operation🌀Octocat = new Hydrator\Operation\Octocat();
        }

        return $this->operation🌀Octocat;
    }

    public function getObjectMapperOperation🌀Organizations(): Hydrator\Operation\Organizations
    {
        if ($this->operation🌀Organizations instanceof Hydrator\Operation\Organizations === false) {
            $this->operation🌀Organizations = new Hydrator\Operation\Organizations();
        }

        return $this->operation🌀Organizations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org(): Hydrator\Operation\Orgs\Org
    {
        if ($this->operation🌀Orgs🌀Org instanceof Hydrator\Operation\Orgs\Org === false) {
            $this->operation🌀Orgs🌀Org = new Hydrator\Operation\Orgs\Org();
        }

        return $this->operation🌀Orgs🌀Org;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions(): Hydrator\Operation\Orgs\Org\Actions\Permissions
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions instanceof Hydrator\Operation\Orgs\Org\Actions\Permissions === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions = new Hydrator\Operation\Orgs\Org\Actions\Permissions();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories(): Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories instanceof Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories = new Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId(): Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId instanceof Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId = new Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions(): Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions instanceof Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions = new Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups(): Hydrator\Operation\Orgs\Org\Actions\RunnerGroups
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups instanceof Hydrator\Operation\Orgs\Org\Actions\RunnerGroups === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups = new Hydrator\Operation\Orgs\Org\Actions\RunnerGroups();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId(): Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId instanceof Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId = new Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories(): Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories instanceof Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories = new Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId(): Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId instanceof Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId = new Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners(): Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Runners
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners instanceof Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Runners === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners = new Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Runners();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId(): Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Runners\RunnerId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId instanceof Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Runners\RunnerId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId = new Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\Runners\RunnerId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners(): Hydrator\Operation\Orgs\Org\Actions\Runners
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners instanceof Hydrator\Operation\Orgs\Org\Actions\Runners === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners = new Hydrator\Operation\Orgs\Org\Actions\Runners();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads(): Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads instanceof Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads = new Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken(): Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken instanceof Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken = new Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken(): Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken instanceof Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken = new Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId(): Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId instanceof Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId = new Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets(): Hydrator\Operation\Orgs\Org\Actions\Secrets
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets instanceof Hydrator\Operation\Orgs\Org\Actions\Secrets === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets = new Hydrator\Operation\Orgs\Org\Actions\Secrets();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey(): Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey instanceof Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey = new Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName(): Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName instanceof Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName = new Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories(): Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories instanceof Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories = new Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId(): Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId instanceof Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId = new Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Events(): Hydrator\Operation\Orgs\Org\Events
    {
        if ($this->operation🌀Orgs🌀Org🌀Events instanceof Hydrator\Operation\Orgs\Org\Events === false) {
            $this->operation🌀Orgs🌀Org🌀Events = new Hydrator\Operation\Orgs\Org\Events();
        }

        return $this->operation🌀Orgs🌀Org🌀Events;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks(): Hydrator\Operation\Orgs\Org\Hooks
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks instanceof Hydrator\Operation\Orgs\Org\Hooks === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks = new Hydrator\Operation\Orgs\Org\Hooks();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId(): Hydrator\Operation\Orgs\Org\Hooks\HookId
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId instanceof Hydrator\Operation\Orgs\Org\Hooks\HookId === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId = new Hydrator\Operation\Orgs\Org\Hooks\HookId();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config(): Hydrator\Operation\Orgs\Org\Hooks\HookId\Config
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config instanceof Hydrator\Operation\Orgs\Org\Hooks\HookId\Config === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config = new Hydrator\Operation\Orgs\Org\Hooks\HookId\Config();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings(): Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings instanceof Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings = new Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Installation(): Hydrator\Operation\Orgs\Org\Installation
    {
        if ($this->operation🌀Orgs🌀Org🌀Installation instanceof Hydrator\Operation\Orgs\Org\Installation === false) {
            $this->operation🌀Orgs🌀Org🌀Installation = new Hydrator\Operation\Orgs\Org\Installation();
        }

        return $this->operation🌀Orgs🌀Org🌀Installation;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Installations(): Hydrator\Operation\Orgs\Org\Installations
    {
        if ($this->operation🌀Orgs🌀Org🌀Installations instanceof Hydrator\Operation\Orgs\Org\Installations === false) {
            $this->operation🌀Orgs🌀Org🌀Installations = new Hydrator\Operation\Orgs\Org\Installations();
        }

        return $this->operation🌀Orgs🌀Org🌀Installations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Issues(): Hydrator\Operation\Orgs\Org\Issues
    {
        if ($this->operation🌀Orgs🌀Org🌀Issues instanceof Hydrator\Operation\Orgs\Org\Issues === false) {
            $this->operation🌀Orgs🌀Org🌀Issues = new Hydrator\Operation\Orgs\Org\Issues();
        }

        return $this->operation🌀Orgs🌀Org🌀Issues;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members(): Hydrator\Operation\Orgs\Org\Members
    {
        if ($this->operation🌀Orgs🌀Org🌀Members instanceof Hydrator\Operation\Orgs\Org\Members === false) {
            $this->operation🌀Orgs🌀Org🌀Members = new Hydrator\Operation\Orgs\Org\Members();
        }

        return $this->operation🌀Orgs🌀Org🌀Members;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username(): Hydrator\Operation\Orgs\Org\Members\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀Members🌀Username instanceof Hydrator\Operation\Orgs\Org\Members\Username === false) {
            $this->operation🌀Orgs🌀Org🌀Members🌀Username = new Hydrator\Operation\Orgs\Org\Members\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀Members🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username(): Hydrator\Operation\Orgs\Org\Memberships\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀Memberships🌀Username instanceof Hydrator\Operation\Orgs\Org\Memberships\Username === false) {
            $this->operation🌀Orgs🌀Org🌀Memberships🌀Username = new Hydrator\Operation\Orgs\Org\Memberships\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀Memberships🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators(): Hydrator\Operation\Orgs\Org\OutsideCollaborators
    {
        if ($this->operation🌀Orgs🌀Org🌀OutsideCollaborators instanceof Hydrator\Operation\Orgs\Org\OutsideCollaborators === false) {
            $this->operation🌀Orgs🌀Org🌀OutsideCollaborators = new Hydrator\Operation\Orgs\Org\OutsideCollaborators();
        }

        return $this->operation🌀Orgs🌀Org🌀OutsideCollaborators;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username(): Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username instanceof Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username === false) {
            $this->operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username = new Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks(): Hydrator\Operation\Orgs\Org\PreReceiveHooks
    {
        if ($this->operation🌀Orgs🌀Org🌀PreReceiveHooks instanceof Hydrator\Operation\Orgs\Org\PreReceiveHooks === false) {
            $this->operation🌀Orgs🌀Org🌀PreReceiveHooks = new Hydrator\Operation\Orgs\Org\PreReceiveHooks();
        }

        return $this->operation🌀Orgs🌀Org🌀PreReceiveHooks;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId(): Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId
    {
        if ($this->operation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId instanceof Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId === false) {
            $this->operation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId = new Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId();
        }

        return $this->operation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Projects(): Hydrator\Operation\Orgs\Org\Projects
    {
        if ($this->operation🌀Orgs🌀Org🌀Projects instanceof Hydrator\Operation\Orgs\Org\Projects === false) {
            $this->operation🌀Orgs🌀Org🌀Projects = new Hydrator\Operation\Orgs\Org\Projects();
        }

        return $this->operation🌀Orgs🌀Org🌀Projects;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers(): Hydrator\Operation\Orgs\Org\PublicMembers
    {
        if ($this->operation🌀Orgs🌀Org🌀PublicMembers instanceof Hydrator\Operation\Orgs\Org\PublicMembers === false) {
            $this->operation🌀Orgs🌀Org🌀PublicMembers = new Hydrator\Operation\Orgs\Org\PublicMembers();
        }

        return $this->operation🌀Orgs🌀Org🌀PublicMembers;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username(): Hydrator\Operation\Orgs\Org\PublicMembers\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀PublicMembers🌀Username instanceof Hydrator\Operation\Orgs\Org\PublicMembers\Username === false) {
            $this->operation🌀Orgs🌀Org🌀PublicMembers🌀Username = new Hydrator\Operation\Orgs\Org\PublicMembers\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀PublicMembers🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Repos(): Hydrator\Operation\Orgs\Org\Repos
    {
        if ($this->operation🌀Orgs🌀Org🌀Repos instanceof Hydrator\Operation\Orgs\Org\Repos === false) {
            $this->operation🌀Orgs🌀Org🌀Repos = new Hydrator\Operation\Orgs\Org\Repos();
        }

        return $this->operation🌀Orgs🌀Org🌀Repos;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams(): Hydrator\Operation\Orgs\Org\Teams
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams instanceof Hydrator\Operation\Orgs\Org\Teams === false) {
            $this->operation🌀Orgs🌀Org🌀Teams = new Hydrator\Operation\Orgs\Org\Teams();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions\ReactionId
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions\ReactionId === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions\ReactionId();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams(): Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams instanceof Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams = new Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId(): Hydrator\Operation\Projects\Columns\Cards\CardId
    {
        if ($this->operation🌀Projects🌀Columns🌀Cards🌀CardId instanceof Hydrator\Operation\Projects\Columns\Cards\CardId === false) {
            $this->operation🌀Projects🌀Columns🌀Cards🌀CardId = new Hydrator\Operation\Projects\Columns\Cards\CardId();
        }

        return $this->operation🌀Projects🌀Columns🌀Cards🌀CardId;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves(): Hydrator\Operation\Projects\Columns\Cards\CardId\Moves
    {
        if ($this->operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves instanceof Hydrator\Operation\Projects\Columns\Cards\CardId\Moves === false) {
            $this->operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves = new Hydrator\Operation\Projects\Columns\Cards\CardId\Moves();
        }

        return $this->operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId(): Hydrator\Operation\Projects\Columns\ColumnId
    {
        if ($this->operation🌀Projects🌀Columns🌀ColumnId instanceof Hydrator\Operation\Projects\Columns\ColumnId === false) {
            $this->operation🌀Projects🌀Columns🌀ColumnId = new Hydrator\Operation\Projects\Columns\ColumnId();
        }

        return $this->operation🌀Projects🌀Columns🌀ColumnId;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards(): Hydrator\Operation\Projects\Columns\ColumnId\Cards
    {
        if ($this->operation🌀Projects🌀Columns🌀ColumnId🌀Cards instanceof Hydrator\Operation\Projects\Columns\ColumnId\Cards === false) {
            $this->operation🌀Projects🌀Columns🌀ColumnId🌀Cards = new Hydrator\Operation\Projects\Columns\ColumnId\Cards();
        }

        return $this->operation🌀Projects🌀Columns🌀ColumnId🌀Cards;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves(): Hydrator\Operation\Projects\Columns\ColumnId\Moves
    {
        if ($this->operation🌀Projects🌀Columns🌀ColumnId🌀Moves instanceof Hydrator\Operation\Projects\Columns\ColumnId\Moves === false) {
            $this->operation🌀Projects🌀Columns🌀ColumnId🌀Moves = new Hydrator\Operation\Projects\Columns\ColumnId\Moves();
        }

        return $this->operation🌀Projects🌀Columns🌀ColumnId🌀Moves;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId(): Hydrator\Operation\Projects\ProjectId
    {
        if ($this->operation🌀Projects🌀ProjectId instanceof Hydrator\Operation\Projects\ProjectId === false) {
            $this->operation🌀Projects🌀ProjectId = new Hydrator\Operation\Projects\ProjectId();
        }

        return $this->operation🌀Projects🌀ProjectId;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators(): Hydrator\Operation\Projects\ProjectId\Collaborators
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Collaborators instanceof Hydrator\Operation\Projects\ProjectId\Collaborators === false) {
            $this->operation🌀Projects🌀ProjectId🌀Collaborators = new Hydrator\Operation\Projects\ProjectId\Collaborators();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Collaborators;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username(): Hydrator\Operation\Projects\ProjectId\Collaborators\Username
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username instanceof Hydrator\Operation\Projects\ProjectId\Collaborators\Username === false) {
            $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username = new Hydrator\Operation\Projects\ProjectId\Collaborators\Username();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission(): Hydrator\Operation\Projects\ProjectId\Collaborators\Username\Permission
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission instanceof Hydrator\Operation\Projects\ProjectId\Collaborators\Username\Permission === false) {
            $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission = new Hydrator\Operation\Projects\ProjectId\Collaborators\Username\Permission();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns(): Hydrator\Operation\Projects\ProjectId\Columns
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Columns instanceof Hydrator\Operation\Projects\ProjectId\Columns === false) {
            $this->operation🌀Projects🌀ProjectId🌀Columns = new Hydrator\Operation\Projects\ProjectId\Columns();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Columns;
    }

    public function getObjectMapperOperation🌀RateLimit(): Hydrator\Operation\RateLimit
    {
        if ($this->operation🌀RateLimit instanceof Hydrator\Operation\RateLimit === false) {
            $this->operation🌀RateLimit = new Hydrator\Operation\RateLimit();
        }

        return $this->operation🌀RateLimit;
    }

    public function getObjectMapperOperation🌀Reactions🌀ReactionId(): Hydrator\Operation\Reactions\ReactionId
    {
        if ($this->operation🌀Reactions🌀ReactionId instanceof Hydrator\Operation\Reactions\ReactionId === false) {
            $this->operation🌀Reactions🌀ReactionId = new Hydrator\Operation\Reactions\ReactionId();
        }

        return $this->operation🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo(): Hydrator\Operation\Repos\Owner\Repo
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo instanceof Hydrator\Operation\Repos\Owner\Repo === false) {
            $this->operation🌀Repos🌀Owner🌀Repo = new Hydrator\Operation\Repos\Owner\Repo();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts(): Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts = new Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId(): Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId = new Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat(): Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat = new Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId(): Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId = new Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs(): Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Logs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Logs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs = new Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Logs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions(): Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions = new Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions(): Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions = new Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runners
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runners === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runners();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun(): Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun = new Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets(): Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets = new Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey(): Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey = new Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName(): Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName = new Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows(): Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows = new Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId(): Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId = new Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable(): Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Disable
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Disable === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable = new Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Disable();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches(): Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Dispatches
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Dispatches === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches = new Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Dispatches();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable(): Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Enable
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Enable === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable = new Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Enable();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs(): Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs instanceof Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs = new Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees(): Hydrator\Operation\Repos\Owner\Repo\Assignees
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Assignees instanceof Hydrator\Operation\Repos\Owner\Repo\Assignees === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees = new Hydrator\Operation\Repos\Owner\Repo\Assignees();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee(): Hydrator\Operation\Repos\Owner\Repo\Assignees\Assignee
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee instanceof Hydrator\Operation\Repos\Owner\Repo\Assignees\Assignee === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee = new Hydrator\Operation\Repos\Owner\Repo\Assignees\Assignee();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches(): Hydrator\Operation\Repos\Owner\Repo\Branches
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches instanceof Hydrator\Operation\Repos\Owner\Repo\Branches === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches = new Hydrator\Operation\Repos\Owner\Repo\Branches();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename(): Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Rename
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename instanceof Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Rename === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename = new Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Rename();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns(): Hydrator\Operation\Repos\Owner\Repo\CheckRuns
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns instanceof Hydrator\Operation\Repos\Owner\Repo\CheckRuns === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns = new Hydrator\Operation\Repos\Owner\Repo\CheckRuns();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId(): Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId instanceof Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId = new Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations(): Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations instanceof Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations = new Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites(): Hydrator\Operation\Repos\Owner\Repo\CheckSuites
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites instanceof Hydrator\Operation\Repos\Owner\Repo\CheckSuites === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites = new Hydrator\Operation\Repos\Owner\Repo\CheckSuites();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences(): Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences instanceof Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences = new Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId(): Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId instanceof Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId = new Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns(): Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns instanceof Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns = new Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest(): Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest instanceof Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest = new Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts(): Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts instanceof Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts = new Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber(): Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber instanceof Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber = new Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances(): Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances instanceof Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances = new Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses(): Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses instanceof Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses = new Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId(): Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId instanceof Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId = new Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs(): Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs instanceof Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs = new Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId(): Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId instanceof Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId = new Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators(): Hydrator\Operation\Repos\Owner\Repo\Collaborators
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators instanceof Hydrator\Operation\Repos\Owner\Repo\Collaborators === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators = new Hydrator\Operation\Repos\Owner\Repo\Collaborators();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username(): Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username instanceof Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username = new Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission(): Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission instanceof Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission = new Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments(): Hydrator\Operation\Repos\Owner\Repo\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments instanceof Hydrator\Operation\Repos\Owner\Repo\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments = new Hydrator\Operation\Repos\Owner\Repo\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId(): Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId instanceof Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId = new Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions(): Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions instanceof Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions = new Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId(): Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId instanceof Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId = new Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits(): Hydrator\Operation\Repos\Owner\Repo\Commits
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits instanceof Hydrator\Operation\Repos\Owner\Repo\Commits === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits = new Hydrator\Operation\Repos\Owner\Repo\Commits();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead(): Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead instanceof Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead = new Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments(): Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments instanceof Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments = new Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls(): Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls instanceof Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls = new Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref(): Hydrator\Operation\Repos\Owner\Repo\Commits\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref instanceof Hydrator\Operation\Repos\Owner\Repo\Commits\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref = new Hydrator\Operation\Repos\Owner\Repo\Commits\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns(): Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns instanceof Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns = new Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites(): Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites instanceof Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites = new Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status(): Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status instanceof Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status = new Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses(): Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses instanceof Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses = new Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead(): Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead instanceof Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead = new Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀ContentReferences🌀ContentReferenceId🌀Attachments(): Hydrator\Operation\Repos\Owner\Repo\ContentReferences\ContentReferenceId\Attachments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀ContentReferences🌀ContentReferenceId🌀Attachments instanceof Hydrator\Operation\Repos\Owner\Repo\ContentReferences\ContentReferenceId\Attachments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀ContentReferences🌀ContentReferenceId🌀Attachments = new Hydrator\Operation\Repos\Owner\Repo\ContentReferences\ContentReferenceId\Attachments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀ContentReferences🌀ContentReferenceId🌀Attachments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path(): Hydrator\Operation\Repos\Owner\Repo\Contents\Path
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path instanceof Hydrator\Operation\Repos\Owner\Repo\Contents\Path === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path = new Hydrator\Operation\Repos\Owner\Repo\Contents\Path();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors(): Hydrator\Operation\Repos\Owner\Repo\Contributors
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Contributors instanceof Hydrator\Operation\Repos\Owner\Repo\Contributors === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Contributors = new Hydrator\Operation\Repos\Owner\Repo\Contributors();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Contributors;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments(): Hydrator\Operation\Repos\Owner\Repo\Deployments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments instanceof Hydrator\Operation\Repos\Owner\Repo\Deployments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments = new Hydrator\Operation\Repos\Owner\Repo\Deployments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId(): Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId instanceof Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId = new Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses(): Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses instanceof Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses = new Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId(): Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId instanceof Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId = new Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dispatches(): Hydrator\Operation\Repos\Owner\Repo\Dispatches
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dispatches instanceof Hydrator\Operation\Repos\Owner\Repo\Dispatches === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dispatches = new Hydrator\Operation\Repos\Owner\Repo\Dispatches();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dispatches;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events(): Hydrator\Operation\Repos\Owner\Repo\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Events instanceof Hydrator\Operation\Repos\Owner\Repo\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Events = new Hydrator\Operation\Repos\Owner\Repo\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks(): Hydrator\Operation\Repos\Owner\Repo\Forks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Forks instanceof Hydrator\Operation\Repos\Owner\Repo\Forks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Forks = new Hydrator\Operation\Repos\Owner\Repo\Forks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Forks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs(): Hydrator\Operation\Repos\Owner\Repo\Git\Blobs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs instanceof Hydrator\Operation\Repos\Owner\Repo\Git\Blobs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs = new Hydrator\Operation\Repos\Owner\Repo\Git\Blobs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha(): Hydrator\Operation\Repos\Owner\Repo\Git\Blobs\FileSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha instanceof Hydrator\Operation\Repos\Owner\Repo\Git\Blobs\FileSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha = new Hydrator\Operation\Repos\Owner\Repo\Git\Blobs\FileSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits(): Hydrator\Operation\Repos\Owner\Repo\Git\Commits
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits instanceof Hydrator\Operation\Repos\Owner\Repo\Git\Commits === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits = new Hydrator\Operation\Repos\Owner\Repo\Git\Commits();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha(): Hydrator\Operation\Repos\Owner\Repo\Git\Commits\CommitSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha instanceof Hydrator\Operation\Repos\Owner\Repo\Git\Commits\CommitSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha = new Hydrator\Operation\Repos\Owner\Repo\Git\Commits\CommitSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref(): Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref instanceof Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref = new Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref(): Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref instanceof Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref = new Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs(): Hydrator\Operation\Repos\Owner\Repo\Git\Refs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs instanceof Hydrator\Operation\Repos\Owner\Repo\Git\Refs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs = new Hydrator\Operation\Repos\Owner\Repo\Git\Refs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref(): Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref instanceof Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref = new Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags(): Hydrator\Operation\Repos\Owner\Repo\Git\Tags
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags instanceof Hydrator\Operation\Repos\Owner\Repo\Git\Tags === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags = new Hydrator\Operation\Repos\Owner\Repo\Git\Tags();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha(): Hydrator\Operation\Repos\Owner\Repo\Git\Tags\TagSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha instanceof Hydrator\Operation\Repos\Owner\Repo\Git\Tags\TagSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha = new Hydrator\Operation\Repos\Owner\Repo\Git\Tags\TagSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees(): Hydrator\Operation\Repos\Owner\Repo\Git\Trees
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees instanceof Hydrator\Operation\Repos\Owner\Repo\Git\Trees === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees = new Hydrator\Operation\Repos\Owner\Repo\Git\Trees();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha(): Hydrator\Operation\Repos\Owner\Repo\Git\Trees\TreeSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha instanceof Hydrator\Operation\Repos\Owner\Repo\Git\Trees\TreeSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha = new Hydrator\Operation\Repos\Owner\Repo\Git\Trees\TreeSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks(): Hydrator\Operation\Repos\Owner\Repo\Hooks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks instanceof Hydrator\Operation\Repos\Owner\Repo\Hooks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks = new Hydrator\Operation\Repos\Owner\Repo\Hooks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId(): Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId instanceof Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId = new Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config(): Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config instanceof Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config = new Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings(): Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings instanceof Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings = new Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests(): Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Tests
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests instanceof Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Tests === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests = new Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Tests();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation(): Hydrator\Operation\Repos\Owner\Repo\Installation
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Installation instanceof Hydrator\Operation\Repos\Owner\Repo\Installation === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Installation = new Hydrator\Operation\Repos\Owner\Repo\Installation();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Installation;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations(): Hydrator\Operation\Repos\Owner\Repo\Invitations
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Invitations instanceof Hydrator\Operation\Repos\Owner\Repo\Invitations === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations = new Hydrator\Operation\Repos\Owner\Repo\Invitations();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId(): Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId instanceof Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId = new Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues(): Hydrator\Operation\Repos\Owner\Repo\Issues
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues instanceof Hydrator\Operation\Repos\Owner\Repo\Issues === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues = new Hydrator\Operation\Repos\Owner\Repo\Issues();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments(): Hydrator\Operation\Repos\Owner\Repo\Issues\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments = new Hydrator\Operation\Repos\Owner\Repo\Issues\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId(): Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId = new Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions(): Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions = new Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId(): Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId = new Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events(): Hydrator\Operation\Repos\Owner\Repo\Issues\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events = new Hydrator\Operation\Repos\Owner\Repo\Issues\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId(): Hydrator\Operation\Repos\Owner\Repo\Issues\Events\EventId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\Events\EventId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId = new Hydrator\Operation\Repos\Owner\Repo\Issues\Events\EventId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber(): Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber = new Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees(): Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees = new Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments(): Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments = new Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events(): Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events = new Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels(): Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels = new Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name(): Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name = new Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock(): Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock = new Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions(): Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions = new Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId(): Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId = new Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline(): Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline instanceof Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline = new Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys(): Hydrator\Operation\Repos\Owner\Repo\Keys
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Keys instanceof Hydrator\Operation\Repos\Owner\Repo\Keys === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Keys = new Hydrator\Operation\Repos\Owner\Repo\Keys();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Keys;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId(): Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId instanceof Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId = new Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels(): Hydrator\Operation\Repos\Owner\Repo\Labels
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Labels instanceof Hydrator\Operation\Repos\Owner\Repo\Labels === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Labels = new Hydrator\Operation\Repos\Owner\Repo\Labels();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Labels;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name(): Hydrator\Operation\Repos\Owner\Repo\Labels\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name instanceof Hydrator\Operation\Repos\Owner\Repo\Labels\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name = new Hydrator\Operation\Repos\Owner\Repo\Labels\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages(): Hydrator\Operation\Repos\Owner\Repo\Languages
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Languages instanceof Hydrator\Operation\Repos\Owner\Repo\Languages === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Languages = new Hydrator\Operation\Repos\Owner\Repo\Languages();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Languages;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License(): Hydrator\Operation\Repos\Owner\Repo\License
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀License instanceof Hydrator\Operation\Repos\Owner\Repo\License === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀License = new Hydrator\Operation\Repos\Owner\Repo\License();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀License;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Merges(): Hydrator\Operation\Repos\Owner\Repo\Merges
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Merges instanceof Hydrator\Operation\Repos\Owner\Repo\Merges === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Merges = new Hydrator\Operation\Repos\Owner\Repo\Merges();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Merges;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones(): Hydrator\Operation\Repos\Owner\Repo\Milestones
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Milestones instanceof Hydrator\Operation\Repos\Owner\Repo\Milestones === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones = new Hydrator\Operation\Repos\Owner\Repo\Milestones();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber(): Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber instanceof Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber = new Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels(): Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels instanceof Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels = new Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications(): Hydrator\Operation\Repos\Owner\Repo\Notifications
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Notifications instanceof Hydrator\Operation\Repos\Owner\Repo\Notifications === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Notifications = new Hydrator\Operation\Repos\Owner\Repo\Notifications();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Notifications;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages(): Hydrator\Operation\Repos\Owner\Repo\Pages
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages instanceof Hydrator\Operation\Repos\Owner\Repo\Pages === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages = new Hydrator\Operation\Repos\Owner\Repo\Pages();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds(): Hydrator\Operation\Repos\Owner\Repo\Pages\Builds
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds instanceof Hydrator\Operation\Repos\Owner\Repo\Pages\Builds === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds = new Hydrator\Operation\Repos\Owner\Repo\Pages\Builds();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest(): Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest instanceof Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest = new Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId(): Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId instanceof Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId = new Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks(): Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks instanceof Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks = new Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId(): Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId instanceof Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId = new Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects(): Hydrator\Operation\Repos\Owner\Repo\Projects
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Projects instanceof Hydrator\Operation\Repos\Owner\Repo\Projects === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Projects = new Hydrator\Operation\Repos\Owner\Repo\Projects();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Projects;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls(): Hydrator\Operation\Repos\Owner\Repo\Pulls
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls = new Hydrator\Operation\Repos\Owner\Repo\Pulls();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments(): Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments = new Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId(): Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId = new Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions(): Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions = new Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId(): Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId = new Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Merge
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Merge === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Merge();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Dismissals
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Dismissals === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Dismissals();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch(): Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\UpdateBranch
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch instanceof Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\UpdateBranch === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch = new Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\UpdateBranch();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme(): Hydrator\Operation\Repos\Owner\Repo\Readme
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Readme instanceof Hydrator\Operation\Repos\Owner\Repo\Readme === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Readme = new Hydrator\Operation\Repos\Owner\Repo\Readme();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Readme;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir(): Hydrator\Operation\Repos\Owner\Repo\Readme\Dir
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir instanceof Hydrator\Operation\Repos\Owner\Repo\Readme\Dir === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir = new Hydrator\Operation\Repos\Owner\Repo\Readme\Dir();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases(): Hydrator\Operation\Repos\Owner\Repo\Releases
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases instanceof Hydrator\Operation\Repos\Owner\Repo\Releases === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases = new Hydrator\Operation\Repos\Owner\Repo\Releases();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId(): Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId instanceof Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId = new Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest(): Hydrator\Operation\Repos\Owner\Repo\Releases\Latest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest instanceof Hydrator\Operation\Repos\Owner\Repo\Releases\Latest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest = new Hydrator\Operation\Repos\Owner\Repo\Releases\Latest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag(): Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag instanceof Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag = new Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId(): Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId instanceof Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId = new Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets(): Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets instanceof Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets = new Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts(): Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts instanceof Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts = new Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber(): Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber instanceof Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber = new Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stargazers(): Hydrator\Operation\Repos\Owner\Repo\Stargazers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stargazers instanceof Hydrator\Operation\Repos\Owner\Repo\Stargazers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stargazers = new Hydrator\Operation\Repos\Owner\Repo\Stargazers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stargazers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency(): Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency instanceof Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency = new Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity(): Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity instanceof Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity = new Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors(): Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors instanceof Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors = new Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation(): Hydrator\Operation\Repos\Owner\Repo\Stats\Participation
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation instanceof Hydrator\Operation\Repos\Owner\Repo\Stats\Participation === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation = new Hydrator\Operation\Repos\Owner\Repo\Stats\Participation();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard(): Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard instanceof Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard = new Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha(): Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha instanceof Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha = new Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers(): Hydrator\Operation\Repos\Owner\Repo\Subscribers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Subscribers instanceof Hydrator\Operation\Repos\Owner\Repo\Subscribers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Subscribers = new Hydrator\Operation\Repos\Owner\Repo\Subscribers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Subscribers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription(): Hydrator\Operation\Repos\Owner\Repo\Subscription
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Subscription instanceof Hydrator\Operation\Repos\Owner\Repo\Subscription === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Subscription = new Hydrator\Operation\Repos\Owner\Repo\Subscription();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Subscription;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags(): Hydrator\Operation\Repos\Owner\Repo\Tags
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Tags instanceof Hydrator\Operation\Repos\Owner\Repo\Tags === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Tags = new Hydrator\Operation\Repos\Owner\Repo\Tags();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Tags;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref(): Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref instanceof Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref = new Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams(): Hydrator\Operation\Repos\Owner\Repo\Teams
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Teams instanceof Hydrator\Operation\Repos\Owner\Repo\Teams === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Teams = new Hydrator\Operation\Repos\Owner\Repo\Teams();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Teams;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics(): Hydrator\Operation\Repos\Owner\Repo\Topics
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Topics instanceof Hydrator\Operation\Repos\Owner\Repo\Topics === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Topics = new Hydrator\Operation\Repos\Owner\Repo\Topics();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Topics;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Transfer(): Hydrator\Operation\Repos\Owner\Repo\Transfer
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Transfer instanceof Hydrator\Operation\Repos\Owner\Repo\Transfer === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Transfer = new Hydrator\Operation\Repos\Owner\Repo\Transfer();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Transfer;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref(): Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref instanceof Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref = new Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate(): Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate
    {
        if ($this->operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate instanceof Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate === false) {
            $this->operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate = new Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate();
        }

        return $this->operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate;
    }

    public function getObjectMapperOperation🌀Repositories(): Hydrator\Operation\Repositories
    {
        if ($this->operation🌀Repositories instanceof Hydrator\Operation\Repositories === false) {
            $this->operation🌀Repositories = new Hydrator\Operation\Repositories();
        }

        return $this->operation🌀Repositories;
    }

    public function getObjectMapperOperation🌀Search🌀Code(): Hydrator\Operation\Search\Code
    {
        if ($this->operation🌀Search🌀Code instanceof Hydrator\Operation\Search\Code === false) {
            $this->operation🌀Search🌀Code = new Hydrator\Operation\Search\Code();
        }

        return $this->operation🌀Search🌀Code;
    }

    public function getObjectMapperOperation🌀Search🌀Commits(): Hydrator\Operation\Search\Commits
    {
        if ($this->operation🌀Search🌀Commits instanceof Hydrator\Operation\Search\Commits === false) {
            $this->operation🌀Search🌀Commits = new Hydrator\Operation\Search\Commits();
        }

        return $this->operation🌀Search🌀Commits;
    }

    public function getObjectMapperOperation🌀Search🌀Issues(): Hydrator\Operation\Search\Issues
    {
        if ($this->operation🌀Search🌀Issues instanceof Hydrator\Operation\Search\Issues === false) {
            $this->operation🌀Search🌀Issues = new Hydrator\Operation\Search\Issues();
        }

        return $this->operation🌀Search🌀Issues;
    }

    public function getObjectMapperOperation🌀Search🌀Labels(): Hydrator\Operation\Search\Labels
    {
        if ($this->operation🌀Search🌀Labels instanceof Hydrator\Operation\Search\Labels === false) {
            $this->operation🌀Search🌀Labels = new Hydrator\Operation\Search\Labels();
        }

        return $this->operation🌀Search🌀Labels;
    }

    public function getObjectMapperOperation🌀Search🌀Repositories(): Hydrator\Operation\Search\Repositories
    {
        if ($this->operation🌀Search🌀Repositories instanceof Hydrator\Operation\Search\Repositories === false) {
            $this->operation🌀Search🌀Repositories = new Hydrator\Operation\Search\Repositories();
        }

        return $this->operation🌀Search🌀Repositories;
    }

    public function getObjectMapperOperation🌀Search🌀Topics(): Hydrator\Operation\Search\Topics
    {
        if ($this->operation🌀Search🌀Topics instanceof Hydrator\Operation\Search\Topics === false) {
            $this->operation🌀Search🌀Topics = new Hydrator\Operation\Search\Topics();
        }

        return $this->operation🌀Search🌀Topics;
    }

    public function getObjectMapperOperation🌀Search🌀Users(): Hydrator\Operation\Search\Users
    {
        if ($this->operation🌀Search🌀Users instanceof Hydrator\Operation\Search\Users === false) {
            $this->operation🌀Search🌀Users = new Hydrator\Operation\Search\Users();
        }

        return $this->operation🌀Search🌀Users;
    }

    public function getObjectMapperOperation🌀Setup🌀Api🌀Configcheck(): Hydrator\Operation\Setup\Api\Configcheck
    {
        if ($this->operation🌀Setup🌀Api🌀Configcheck instanceof Hydrator\Operation\Setup\Api\Configcheck === false) {
            $this->operation🌀Setup🌀Api🌀Configcheck = new Hydrator\Operation\Setup\Api\Configcheck();
        }

        return $this->operation🌀Setup🌀Api🌀Configcheck;
    }

    public function getObjectMapperOperation🌀Setup🌀Api🌀Configure(): Hydrator\Operation\Setup\Api\Configure
    {
        if ($this->operation🌀Setup🌀Api🌀Configure instanceof Hydrator\Operation\Setup\Api\Configure === false) {
            $this->operation🌀Setup🌀Api🌀Configure = new Hydrator\Operation\Setup\Api\Configure();
        }

        return $this->operation🌀Setup🌀Api🌀Configure;
    }

    public function getObjectMapperOperation🌀Setup🌀Api🌀Maintenance(): Hydrator\Operation\Setup\Api\Maintenance
    {
        if ($this->operation🌀Setup🌀Api🌀Maintenance instanceof Hydrator\Operation\Setup\Api\Maintenance === false) {
            $this->operation🌀Setup🌀Api🌀Maintenance = new Hydrator\Operation\Setup\Api\Maintenance();
        }

        return $this->operation🌀Setup🌀Api🌀Maintenance;
    }

    public function getObjectMapperOperation🌀Setup🌀Api🌀Settings(): Hydrator\Operation\Setup\Api\Settings
    {
        if ($this->operation🌀Setup🌀Api🌀Settings instanceof Hydrator\Operation\Setup\Api\Settings === false) {
            $this->operation🌀Setup🌀Api🌀Settings = new Hydrator\Operation\Setup\Api\Settings();
        }

        return $this->operation🌀Setup🌀Api🌀Settings;
    }

    public function getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys(): Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys
    {
        if ($this->operation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys instanceof Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys === false) {
            $this->operation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys = new Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys();
        }

        return $this->operation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys;
    }

    public function getObjectMapperOperation🌀Setup🌀Api🌀Start(): Hydrator\Operation\Setup\Api\Start
    {
        if ($this->operation🌀Setup🌀Api🌀Start instanceof Hydrator\Operation\Setup\Api\Start === false) {
            $this->operation🌀Setup🌀Api🌀Start = new Hydrator\Operation\Setup\Api\Start();
        }

        return $this->operation🌀Setup🌀Api🌀Start;
    }

    public function getObjectMapperOperation🌀Setup🌀Api🌀Upgrade(): Hydrator\Operation\Setup\Api\Upgrade
    {
        if ($this->operation🌀Setup🌀Api🌀Upgrade instanceof Hydrator\Operation\Setup\Api\Upgrade === false) {
            $this->operation🌀Setup🌀Api🌀Upgrade = new Hydrator\Operation\Setup\Api\Upgrade();
        }

        return $this->operation🌀Setup🌀Api🌀Upgrade;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId(): Hydrator\Operation\Teams\TeamId
    {
        if ($this->operation🌀Teams🌀TeamId instanceof Hydrator\Operation\Teams\TeamId === false) {
            $this->operation🌀Teams🌀TeamId = new Hydrator\Operation\Teams\TeamId();
        }

        return $this->operation🌀Teams🌀TeamId;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions(): Hydrator\Operation\Teams\TeamId\Discussions
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions instanceof Hydrator\Operation\Teams\TeamId\Discussions === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions = new Hydrator\Operation\Teams\TeamId\Discussions();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber(): Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber instanceof Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber = new Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments(): Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments instanceof Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments = new Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber(): Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber instanceof Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber = new Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions(): Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions instanceof Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions = new Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions(): Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions instanceof Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions = new Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Members(): Hydrator\Operation\Teams\TeamId\Members
    {
        if ($this->operation🌀Teams🌀TeamId🌀Members instanceof Hydrator\Operation\Teams\TeamId\Members === false) {
            $this->operation🌀Teams🌀TeamId🌀Members = new Hydrator\Operation\Teams\TeamId\Members();
        }

        return $this->operation🌀Teams🌀TeamId🌀Members;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Members🌀Username(): Hydrator\Operation\Teams\TeamId\Members\Username
    {
        if ($this->operation🌀Teams🌀TeamId🌀Members🌀Username instanceof Hydrator\Operation\Teams\TeamId\Members\Username === false) {
            $this->operation🌀Teams🌀TeamId🌀Members🌀Username = new Hydrator\Operation\Teams\TeamId\Members\Username();
        }

        return $this->operation🌀Teams🌀TeamId🌀Members🌀Username;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username(): Hydrator\Operation\Teams\TeamId\Memberships\Username
    {
        if ($this->operation🌀Teams🌀TeamId🌀Memberships🌀Username instanceof Hydrator\Operation\Teams\TeamId\Memberships\Username === false) {
            $this->operation🌀Teams🌀TeamId🌀Memberships🌀Username = new Hydrator\Operation\Teams\TeamId\Memberships\Username();
        }

        return $this->operation🌀Teams🌀TeamId🌀Memberships🌀Username;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Projects(): Hydrator\Operation\Teams\TeamId\Projects
    {
        if ($this->operation🌀Teams🌀TeamId🌀Projects instanceof Hydrator\Operation\Teams\TeamId\Projects === false) {
            $this->operation🌀Teams🌀TeamId🌀Projects = new Hydrator\Operation\Teams\TeamId\Projects();
        }

        return $this->operation🌀Teams🌀TeamId🌀Projects;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId(): Hydrator\Operation\Teams\TeamId\Projects\ProjectId
    {
        if ($this->operation🌀Teams🌀TeamId🌀Projects🌀ProjectId instanceof Hydrator\Operation\Teams\TeamId\Projects\ProjectId === false) {
            $this->operation🌀Teams🌀TeamId🌀Projects🌀ProjectId = new Hydrator\Operation\Teams\TeamId\Projects\ProjectId();
        }

        return $this->operation🌀Teams🌀TeamId🌀Projects🌀ProjectId;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Repos(): Hydrator\Operation\Teams\TeamId\Repos
    {
        if ($this->operation🌀Teams🌀TeamId🌀Repos instanceof Hydrator\Operation\Teams\TeamId\Repos === false) {
            $this->operation🌀Teams🌀TeamId🌀Repos = new Hydrator\Operation\Teams\TeamId\Repos();
        }

        return $this->operation🌀Teams🌀TeamId🌀Repos;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo(): Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo
    {
        if ($this->operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo instanceof Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo === false) {
            $this->operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo = new Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo();
        }

        return $this->operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Teams(): Hydrator\Operation\Teams\TeamId\Teams
    {
        if ($this->operation🌀Teams🌀TeamId🌀Teams instanceof Hydrator\Operation\Teams\TeamId\Teams === false) {
            $this->operation🌀Teams🌀TeamId🌀Teams = new Hydrator\Operation\Teams\TeamId\Teams();
        }

        return $this->operation🌀Teams🌀TeamId🌀Teams;
    }

    public function getObjectMapperOperation🌀User(): Hydrator\Operation\User
    {
        if ($this->operation🌀User instanceof Hydrator\Operation\User === false) {
            $this->operation🌀User = new Hydrator\Operation\User();
        }

        return $this->operation🌀User;
    }

    public function getObjectMapperOperation🌀User🌀Emails(): Hydrator\Operation\User\Emails
    {
        if ($this->operation🌀User🌀Emails instanceof Hydrator\Operation\User\Emails === false) {
            $this->operation🌀User🌀Emails = new Hydrator\Operation\User\Emails();
        }

        return $this->operation🌀User🌀Emails;
    }

    public function getObjectMapperOperation🌀User🌀Followers(): Hydrator\Operation\User\Followers
    {
        if ($this->operation🌀User🌀Followers instanceof Hydrator\Operation\User\Followers === false) {
            $this->operation🌀User🌀Followers = new Hydrator\Operation\User\Followers();
        }

        return $this->operation🌀User🌀Followers;
    }

    public function getObjectMapperOperation🌀User🌀Following(): Hydrator\Operation\User\Following
    {
        if ($this->operation🌀User🌀Following instanceof Hydrator\Operation\User\Following === false) {
            $this->operation🌀User🌀Following = new Hydrator\Operation\User\Following();
        }

        return $this->operation🌀User🌀Following;
    }

    public function getObjectMapperOperation🌀User🌀Following🌀Username(): Hydrator\Operation\User\Following\Username
    {
        if ($this->operation🌀User🌀Following🌀Username instanceof Hydrator\Operation\User\Following\Username === false) {
            $this->operation🌀User🌀Following🌀Username = new Hydrator\Operation\User\Following\Username();
        }

        return $this->operation🌀User🌀Following🌀Username;
    }

    public function getObjectMapperOperation🌀User🌀GpgKeys(): Hydrator\Operation\User\GpgKeys
    {
        if ($this->operation🌀User🌀GpgKeys instanceof Hydrator\Operation\User\GpgKeys === false) {
            $this->operation🌀User🌀GpgKeys = new Hydrator\Operation\User\GpgKeys();
        }

        return $this->operation🌀User🌀GpgKeys;
    }

    public function getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId(): Hydrator\Operation\User\GpgKeys\GpgKeyId
    {
        if ($this->operation🌀User🌀GpgKeys🌀GpgKeyId instanceof Hydrator\Operation\User\GpgKeys\GpgKeyId === false) {
            $this->operation🌀User🌀GpgKeys🌀GpgKeyId = new Hydrator\Operation\User\GpgKeys\GpgKeyId();
        }

        return $this->operation🌀User🌀GpgKeys🌀GpgKeyId;
    }

    public function getObjectMapperOperation🌀User🌀Installations(): Hydrator\Operation\User\Installations
    {
        if ($this->operation🌀User🌀Installations instanceof Hydrator\Operation\User\Installations === false) {
            $this->operation🌀User🌀Installations = new Hydrator\Operation\User\Installations();
        }

        return $this->operation🌀User🌀Installations;
    }

    public function getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories(): Hydrator\Operation\User\Installations\InstallationId\Repositories
    {
        if ($this->operation🌀User🌀Installations🌀InstallationId🌀Repositories instanceof Hydrator\Operation\User\Installations\InstallationId\Repositories === false) {
            $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories = new Hydrator\Operation\User\Installations\InstallationId\Repositories();
        }

        return $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories;
    }

    public function getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId(): Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId
    {
        if ($this->operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId instanceof Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId === false) {
            $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId = new Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId();
        }

        return $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀User🌀Issues(): Hydrator\Operation\User\Issues
    {
        if ($this->operation🌀User🌀Issues instanceof Hydrator\Operation\User\Issues === false) {
            $this->operation🌀User🌀Issues = new Hydrator\Operation\User\Issues();
        }

        return $this->operation🌀User🌀Issues;
    }

    public function getObjectMapperOperation🌀User🌀Keys(): Hydrator\Operation\User\Keys
    {
        if ($this->operation🌀User🌀Keys instanceof Hydrator\Operation\User\Keys === false) {
            $this->operation🌀User🌀Keys = new Hydrator\Operation\User\Keys();
        }

        return $this->operation🌀User🌀Keys;
    }

    public function getObjectMapperOperation🌀User🌀Keys🌀KeyId(): Hydrator\Operation\User\Keys\KeyId
    {
        if ($this->operation🌀User🌀Keys🌀KeyId instanceof Hydrator\Operation\User\Keys\KeyId === false) {
            $this->operation🌀User🌀Keys🌀KeyId = new Hydrator\Operation\User\Keys\KeyId();
        }

        return $this->operation🌀User🌀Keys🌀KeyId;
    }

    public function getObjectMapperOperation🌀User🌀Memberships🌀Orgs(): Hydrator\Operation\User\Memberships\Orgs
    {
        if ($this->operation🌀User🌀Memberships🌀Orgs instanceof Hydrator\Operation\User\Memberships\Orgs === false) {
            $this->operation🌀User🌀Memberships🌀Orgs = new Hydrator\Operation\User\Memberships\Orgs();
        }

        return $this->operation🌀User🌀Memberships🌀Orgs;
    }

    public function getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org(): Hydrator\Operation\User\Memberships\Orgs\Org
    {
        if ($this->operation🌀User🌀Memberships🌀Orgs🌀Org instanceof Hydrator\Operation\User\Memberships\Orgs\Org === false) {
            $this->operation🌀User🌀Memberships🌀Orgs🌀Org = new Hydrator\Operation\User\Memberships\Orgs\Org();
        }

        return $this->operation🌀User🌀Memberships🌀Orgs🌀Org;
    }

    public function getObjectMapperOperation🌀User🌀Orgs(): Hydrator\Operation\User\Orgs
    {
        if ($this->operation🌀User🌀Orgs instanceof Hydrator\Operation\User\Orgs === false) {
            $this->operation🌀User🌀Orgs = new Hydrator\Operation\User\Orgs();
        }

        return $this->operation🌀User🌀Orgs;
    }

    public function getObjectMapperOperation🌀User🌀Projects(): Hydrator\Operation\User\Projects
    {
        if ($this->operation🌀User🌀Projects instanceof Hydrator\Operation\User\Projects === false) {
            $this->operation🌀User🌀Projects = new Hydrator\Operation\User\Projects();
        }

        return $this->operation🌀User🌀Projects;
    }

    public function getObjectMapperOperation🌀User🌀PublicEmails(): Hydrator\Operation\User\PublicEmails
    {
        if ($this->operation🌀User🌀PublicEmails instanceof Hydrator\Operation\User\PublicEmails === false) {
            $this->operation🌀User🌀PublicEmails = new Hydrator\Operation\User\PublicEmails();
        }

        return $this->operation🌀User🌀PublicEmails;
    }

    public function getObjectMapperOperation🌀User🌀Repos(): Hydrator\Operation\User\Repos
    {
        if ($this->operation🌀User🌀Repos instanceof Hydrator\Operation\User\Repos === false) {
            $this->operation🌀User🌀Repos = new Hydrator\Operation\User\Repos();
        }

        return $this->operation🌀User🌀Repos;
    }

    public function getObjectMapperOperation🌀User🌀RepositoryInvitations(): Hydrator\Operation\User\RepositoryInvitations
    {
        if ($this->operation🌀User🌀RepositoryInvitations instanceof Hydrator\Operation\User\RepositoryInvitations === false) {
            $this->operation🌀User🌀RepositoryInvitations = new Hydrator\Operation\User\RepositoryInvitations();
        }

        return $this->operation🌀User🌀RepositoryInvitations;
    }

    public function getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId(): Hydrator\Operation\User\RepositoryInvitations\InvitationId
    {
        if ($this->operation🌀User🌀RepositoryInvitations🌀InvitationId instanceof Hydrator\Operation\User\RepositoryInvitations\InvitationId === false) {
            $this->operation🌀User🌀RepositoryInvitations🌀InvitationId = new Hydrator\Operation\User\RepositoryInvitations\InvitationId();
        }

        return $this->operation🌀User🌀RepositoryInvitations🌀InvitationId;
    }

    public function getObjectMapperOperation🌀User🌀Starred(): Hydrator\Operation\User\Starred
    {
        if ($this->operation🌀User🌀Starred instanceof Hydrator\Operation\User\Starred === false) {
            $this->operation🌀User🌀Starred = new Hydrator\Operation\User\Starred();
        }

        return $this->operation🌀User🌀Starred;
    }

    public function getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo(): Hydrator\Operation\User\Starred\Owner\Repo
    {
        if ($this->operation🌀User🌀Starred🌀Owner🌀Repo instanceof Hydrator\Operation\User\Starred\Owner\Repo === false) {
            $this->operation🌀User🌀Starred🌀Owner🌀Repo = new Hydrator\Operation\User\Starred\Owner\Repo();
        }

        return $this->operation🌀User🌀Starred🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀User🌀Subscriptions(): Hydrator\Operation\User\Subscriptions
    {
        if ($this->operation🌀User🌀Subscriptions instanceof Hydrator\Operation\User\Subscriptions === false) {
            $this->operation🌀User🌀Subscriptions = new Hydrator\Operation\User\Subscriptions();
        }

        return $this->operation🌀User🌀Subscriptions;
    }

    public function getObjectMapperOperation🌀User🌀Teams(): Hydrator\Operation\User\Teams
    {
        if ($this->operation🌀User🌀Teams instanceof Hydrator\Operation\User\Teams === false) {
            $this->operation🌀User🌀Teams = new Hydrator\Operation\User\Teams();
        }

        return $this->operation🌀User🌀Teams;
    }

    public function getObjectMapperOperation🌀Users(): Hydrator\Operation\Users
    {
        if ($this->operation🌀Users instanceof Hydrator\Operation\Users === false) {
            $this->operation🌀Users = new Hydrator\Operation\Users();
        }

        return $this->operation🌀Users;
    }

    public function getObjectMapperOperation🌀Users🌀Username(): Hydrator\Operation\Users\Username
    {
        if ($this->operation🌀Users🌀Username instanceof Hydrator\Operation\Users\Username === false) {
            $this->operation🌀Users🌀Username = new Hydrator\Operation\Users\Username();
        }

        return $this->operation🌀Users🌀Username;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Events(): Hydrator\Operation\Users\Username\Events
    {
        if ($this->operation🌀Users🌀Username🌀Events instanceof Hydrator\Operation\Users\Username\Events === false) {
            $this->operation🌀Users🌀Username🌀Events = new Hydrator\Operation\Users\Username\Events();
        }

        return $this->operation🌀Users🌀Username🌀Events;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org(): Hydrator\Operation\Users\Username\Events\Orgs\Org
    {
        if ($this->operation🌀Users🌀Username🌀Events🌀Orgs🌀Org instanceof Hydrator\Operation\Users\Username\Events\Orgs\Org === false) {
            $this->operation🌀Users🌀Username🌀Events🌀Orgs🌀Org = new Hydrator\Operation\Users\Username\Events\Orgs\Org();
        }

        return $this->operation🌀Users🌀Username🌀Events🌀Orgs🌀Org;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Events🌀Public_(): Hydrator\Operation\Users\Username\Events\Public_
    {
        if ($this->operation🌀Users🌀Username🌀Events🌀Public_ instanceof Hydrator\Operation\Users\Username\Events\Public_ === false) {
            $this->operation🌀Users🌀Username🌀Events🌀Public_ = new Hydrator\Operation\Users\Username\Events\Public_();
        }

        return $this->operation🌀Users🌀Username🌀Events🌀Public_;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Followers(): Hydrator\Operation\Users\Username\Followers
    {
        if ($this->operation🌀Users🌀Username🌀Followers instanceof Hydrator\Operation\Users\Username\Followers === false) {
            $this->operation🌀Users🌀Username🌀Followers = new Hydrator\Operation\Users\Username\Followers();
        }

        return $this->operation🌀Users🌀Username🌀Followers;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Following(): Hydrator\Operation\Users\Username\Following
    {
        if ($this->operation🌀Users🌀Username🌀Following instanceof Hydrator\Operation\Users\Username\Following === false) {
            $this->operation🌀Users🌀Username🌀Following = new Hydrator\Operation\Users\Username\Following();
        }

        return $this->operation🌀Users🌀Username🌀Following;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Following🌀TargetUser(): Hydrator\Operation\Users\Username\Following\TargetUser
    {
        if ($this->operation🌀Users🌀Username🌀Following🌀TargetUser instanceof Hydrator\Operation\Users\Username\Following\TargetUser === false) {
            $this->operation🌀Users🌀Username🌀Following🌀TargetUser = new Hydrator\Operation\Users\Username\Following\TargetUser();
        }

        return $this->operation🌀Users🌀Username🌀Following🌀TargetUser;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Gists(): Hydrator\Operation\Users\Username\Gists
    {
        if ($this->operation🌀Users🌀Username🌀Gists instanceof Hydrator\Operation\Users\Username\Gists === false) {
            $this->operation🌀Users🌀Username🌀Gists = new Hydrator\Operation\Users\Username\Gists();
        }

        return $this->operation🌀Users🌀Username🌀Gists;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀GpgKeys(): Hydrator\Operation\Users\Username\GpgKeys
    {
        if ($this->operation🌀Users🌀Username🌀GpgKeys instanceof Hydrator\Operation\Users\Username\GpgKeys === false) {
            $this->operation🌀Users🌀Username🌀GpgKeys = new Hydrator\Operation\Users\Username\GpgKeys();
        }

        return $this->operation🌀Users🌀Username🌀GpgKeys;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Hovercard(): Hydrator\Operation\Users\Username\Hovercard
    {
        if ($this->operation🌀Users🌀Username🌀Hovercard instanceof Hydrator\Operation\Users\Username\Hovercard === false) {
            $this->operation🌀Users🌀Username🌀Hovercard = new Hydrator\Operation\Users\Username\Hovercard();
        }

        return $this->operation🌀Users🌀Username🌀Hovercard;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Installation(): Hydrator\Operation\Users\Username\Installation
    {
        if ($this->operation🌀Users🌀Username🌀Installation instanceof Hydrator\Operation\Users\Username\Installation === false) {
            $this->operation🌀Users🌀Username🌀Installation = new Hydrator\Operation\Users\Username\Installation();
        }

        return $this->operation🌀Users🌀Username🌀Installation;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Keys(): Hydrator\Operation\Users\Username\Keys
    {
        if ($this->operation🌀Users🌀Username🌀Keys instanceof Hydrator\Operation\Users\Username\Keys === false) {
            $this->operation🌀Users🌀Username🌀Keys = new Hydrator\Operation\Users\Username\Keys();
        }

        return $this->operation🌀Users🌀Username🌀Keys;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Orgs(): Hydrator\Operation\Users\Username\Orgs
    {
        if ($this->operation🌀Users🌀Username🌀Orgs instanceof Hydrator\Operation\Users\Username\Orgs === false) {
            $this->operation🌀Users🌀Username🌀Orgs = new Hydrator\Operation\Users\Username\Orgs();
        }

        return $this->operation🌀Users🌀Username🌀Orgs;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Projects(): Hydrator\Operation\Users\Username\Projects
    {
        if ($this->operation🌀Users🌀Username🌀Projects instanceof Hydrator\Operation\Users\Username\Projects === false) {
            $this->operation🌀Users🌀Username🌀Projects = new Hydrator\Operation\Users\Username\Projects();
        }

        return $this->operation🌀Users🌀Username🌀Projects;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents(): Hydrator\Operation\Users\Username\ReceivedEvents
    {
        if ($this->operation🌀Users🌀Username🌀ReceivedEvents instanceof Hydrator\Operation\Users\Username\ReceivedEvents === false) {
            $this->operation🌀Users🌀Username🌀ReceivedEvents = new Hydrator\Operation\Users\Username\ReceivedEvents();
        }

        return $this->operation🌀Users🌀Username🌀ReceivedEvents;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents🌀Public_(): Hydrator\Operation\Users\Username\ReceivedEvents\Public_
    {
        if ($this->operation🌀Users🌀Username🌀ReceivedEvents🌀Public_ instanceof Hydrator\Operation\Users\Username\ReceivedEvents\Public_ === false) {
            $this->operation🌀Users🌀Username🌀ReceivedEvents🌀Public_ = new Hydrator\Operation\Users\Username\ReceivedEvents\Public_();
        }

        return $this->operation🌀Users🌀Username🌀ReceivedEvents🌀Public_;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Repos(): Hydrator\Operation\Users\Username\Repos
    {
        if ($this->operation🌀Users🌀Username🌀Repos instanceof Hydrator\Operation\Users\Username\Repos === false) {
            $this->operation🌀Users🌀Username🌀Repos = new Hydrator\Operation\Users\Username\Repos();
        }

        return $this->operation🌀Users🌀Username🌀Repos;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀SiteAdmin(): Hydrator\Operation\Users\Username\SiteAdmin
    {
        if ($this->operation🌀Users🌀Username🌀SiteAdmin instanceof Hydrator\Operation\Users\Username\SiteAdmin === false) {
            $this->operation🌀Users🌀Username🌀SiteAdmin = new Hydrator\Operation\Users\Username\SiteAdmin();
        }

        return $this->operation🌀Users🌀Username🌀SiteAdmin;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Starred(): Hydrator\Operation\Users\Username\Starred
    {
        if ($this->operation🌀Users🌀Username🌀Starred instanceof Hydrator\Operation\Users\Username\Starred === false) {
            $this->operation🌀Users🌀Username🌀Starred = new Hydrator\Operation\Users\Username\Starred();
        }

        return $this->operation🌀Users🌀Username🌀Starred;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Subscriptions(): Hydrator\Operation\Users\Username\Subscriptions
    {
        if ($this->operation🌀Users🌀Username🌀Subscriptions instanceof Hydrator\Operation\Users\Username\Subscriptions === false) {
            $this->operation🌀Users🌀Username🌀Subscriptions = new Hydrator\Operation\Users\Username\Subscriptions();
        }

        return $this->operation🌀Users🌀Username🌀Subscriptions;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Suspended(): Hydrator\Operation\Users\Username\Suspended
    {
        if ($this->operation🌀Users🌀Username🌀Suspended instanceof Hydrator\Operation\Users\Username\Suspended === false) {
            $this->operation🌀Users🌀Username🌀Suspended = new Hydrator\Operation\Users\Username\Suspended();
        }

        return $this->operation🌀Users🌀Username🌀Suspended;
    }

    public function getObjectMapperOperation🌀Zen(): Hydrator\Operation\Zen
    {
        if ($this->operation🌀Zen instanceof Hydrator\Operation\Zen === false) {
            $this->operation🌀Zen = new Hydrator\Operation\Zen();
        }

        return $this->operation🌀Zen;
    }
}
