<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql;

use ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis\SkippedRepositories;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis\SkippedRepositories\NotFoundRepos;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysisSkippedRepoGroup;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleRepository;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleUser;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class VariantAnalyses implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleRepository' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleRepository($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis\SkippedRepositories' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysisSkippedRepoGroup' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysisSkippedRepoGroup($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis\SkippedRepositories\NotFoundRepos' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories⚡️NotFoundRepos($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis(array $payload): CodeScanningVariantAnalysis
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['controller_repo'] ?? null;

            if ($value === null) {
                $missingFields[] = 'controller_repo';
                goto after_controllerRepo;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'controllerRepo';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['controllerRepo'] = $value;

            after_controllerRepo:

            $value = $payload['actor'] ?? null;

            if ($value === null) {
                $missingFields[] = 'actor';
                goto after_actor;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'actor';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['actor'] = $value;

            after_actor:

            $value = $payload['query_language'] ?? null;

            if ($value === null) {
                $missingFields[] = 'query_language';
                goto after_queryLanguage;
            }

            $properties['queryLanguage'] = $value;

            after_queryLanguage:

            $value = $payload['query_pack_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'query_pack_url';
                goto after_queryPackUrl;
            }

            $properties['queryPackUrl'] = $value;

            after_queryPackUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completedAt'] = null;
                goto after_completedAt;
            }

            $properties['completedAt'] = $value;

            after_completedAt:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['actions_workflow_run_id'] ?? null;

            if ($value === null) {
                $properties['actionsWorkflowRunId'] = null;
                goto after_actionsWorkflowRunId;
            }

            $properties['actionsWorkflowRunId'] = $value;

            after_actionsWorkflowRunId:

            $value = $payload['failure_reason'] ?? null;

            if ($value === null) {
                $properties['failureReason'] = null;
                goto after_failureReason;
            }

            $properties['failureReason'] = $value;

            after_failureReason:

            $value = $payload['scanned_repositories'] ?? null;

            if ($value === null) {
                $properties['scannedRepositories'] = null;
                goto after_scannedRepositories;
            }

            $properties['scannedRepositories'] = $value;

            after_scannedRepositories:

            $value = $payload['skipped_repositories'] ?? null;

            if ($value === null) {
                $properties['skippedRepositories'] = null;
                goto after_skippedRepositories;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'skippedRepositories';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['skippedRepositories'] = $value;

            after_skippedRepositories:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CodeScanningVariantAnalysis::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CodeScanningVariantAnalysis(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleRepository(array $payload): SimpleRepository
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $missingFields[] = 'owner';
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['private'] ?? null;

            if ($value === null) {
                $missingFields[] = 'private';
                goto after_private;
            }

            $properties['private'] = $value;

            after_private:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['fork'] ?? null;

            if ($value === null) {
                $missingFields[] = 'fork';
                goto after_fork;
            }

            $properties['fork'] = $value;

            after_fork:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['archive_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archive_url';
                goto after_archiveUrl;
            }

            $properties['archiveUrl'] = $value;

            after_archiveUrl:

            $value = $payload['assignees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees_url';
                goto after_assigneesUrl;
            }

            $properties['assigneesUrl'] = $value;

            after_assigneesUrl:

            $value = $payload['blobs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'blobs_url';
                goto after_blobsUrl;
            }

            $properties['blobsUrl'] = $value;

            after_blobsUrl:

            $value = $payload['branches_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'branches_url';
                goto after_branchesUrl;
            }

            $properties['branchesUrl'] = $value;

            after_branchesUrl:

            $value = $payload['collaborators_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'collaborators_url';
                goto after_collaboratorsUrl;
            }

            $properties['collaboratorsUrl'] = $value;

            after_collaboratorsUrl:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commits_url';
                goto after_commitsUrl;
            }

            $properties['commitsUrl'] = $value;

            after_commitsUrl:

            $value = $payload['compare_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'compare_url';
                goto after_compareUrl;
            }

            $properties['compareUrl'] = $value;

            after_compareUrl:

            $value = $payload['contents_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contents_url';
                goto after_contentsUrl;
            }

            $properties['contentsUrl'] = $value;

            after_contentsUrl:

            $value = $payload['contributors_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contributors_url';
                goto after_contributorsUrl;
            }

            $properties['contributorsUrl'] = $value;

            after_contributorsUrl:

            $value = $payload['deployments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deployments_url';
                goto after_deploymentsUrl;
            }

            $properties['deploymentsUrl'] = $value;

            after_deploymentsUrl:

            $value = $payload['downloads_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'downloads_url';
                goto after_downloadsUrl;
            }

            $properties['downloadsUrl'] = $value;

            after_downloadsUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_url';
                goto after_forksUrl;
            }

            $properties['forksUrl'] = $value;

            after_forksUrl:

            $value = $payload['git_commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_commits_url';
                goto after_gitCommitsUrl;
            }

            $properties['gitCommitsUrl'] = $value;

            after_gitCommitsUrl:

            $value = $payload['git_refs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_refs_url';
                goto after_gitRefsUrl;
            }

            $properties['gitRefsUrl'] = $value;

            after_gitRefsUrl:

            $value = $payload['git_tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_tags_url';
                goto after_gitTagsUrl;
            }

            $properties['gitTagsUrl'] = $value;

            after_gitTagsUrl:

            $value = $payload['issue_comment_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_comment_url';
                goto after_issueCommentUrl;
            }

            $properties['issueCommentUrl'] = $value;

            after_issueCommentUrl:

            $value = $payload['issue_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_events_url';
                goto after_issueEventsUrl;
            }

            $properties['issueEventsUrl'] = $value;

            after_issueEventsUrl:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issues_url';
                goto after_issuesUrl;
            }

            $properties['issuesUrl'] = $value;

            after_issuesUrl:

            $value = $payload['keys_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'keys_url';
                goto after_keysUrl;
            }

            $properties['keysUrl'] = $value;

            after_keysUrl:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['languages_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'languages_url';
                goto after_languagesUrl;
            }

            $properties['languagesUrl'] = $value;

            after_languagesUrl:

            $value = $payload['merges_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'merges_url';
                goto after_mergesUrl;
            }

            $properties['mergesUrl'] = $value;

            after_mergesUrl:

            $value = $payload['milestones_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'milestones_url';
                goto after_milestonesUrl;
            }

            $properties['milestonesUrl'] = $value;

            after_milestonesUrl:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'notifications_url';
                goto after_notificationsUrl;
            }

            $properties['notificationsUrl'] = $value;

            after_notificationsUrl:

            $value = $payload['pulls_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pulls_url';
                goto after_pullsUrl;
            }

            $properties['pullsUrl'] = $value;

            after_pullsUrl:

            $value = $payload['releases_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'releases_url';
                goto after_releasesUrl;
            }

            $properties['releasesUrl'] = $value;

            after_releasesUrl:

            $value = $payload['stargazers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_url';
                goto after_stargazersUrl;
            }

            $properties['stargazersUrl'] = $value;

            after_stargazersUrl:

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'statuses_url';
                goto after_statusesUrl;
            }

            $properties['statusesUrl'] = $value;

            after_statusesUrl:

            $value = $payload['subscribers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscribers_url';
                goto after_subscribersUrl;
            }

            $properties['subscribersUrl'] = $value;

            after_subscribersUrl:

            $value = $payload['subscription_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscription_url';
                goto after_subscriptionUrl;
            }

            $properties['subscriptionUrl'] = $value;

            after_subscriptionUrl:

            $value = $payload['tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tags_url';
                goto after_tagsUrl;
            }

            $properties['tagsUrl'] = $value;

            after_tagsUrl:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams_url';
                goto after_teamsUrl;
            }

            $properties['teamsUrl'] = $value;

            after_teamsUrl:

            $value = $payload['trees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'trees_url';
                goto after_treesUrl;
            }

            $properties['treesUrl'] = $value;

            after_treesUrl:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SimpleRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SimpleRepository(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleRepository', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser(array $payload): SimpleUser
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'site_admin';
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starredAt'] = null;
                goto after_starredAt;
            }

            $properties['starredAt'] = $value;

            after_starredAt:

            $value = $payload['user_view_type'] ?? null;

            if ($value === null) {
                $properties['userViewType'] = null;
                goto after_userViewType;
            }

            $properties['userViewType'] = $value;

            after_userViewType:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SimpleUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SimpleUser(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories(array $payload): SkippedRepositories
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['access_mismatch_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'access_mismatch_repos';
                goto after_accessMismatchRepos;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'accessMismatchRepos';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysisSkippedRepoGroup($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['accessMismatchRepos'] = $value;

            after_accessMismatchRepos:

            $value = $payload['not_found_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'not_found_repos';
                goto after_notFoundRepos;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'notFoundRepos';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories⚡️NotFoundRepos($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['notFoundRepos'] = $value;

            after_notFoundRepos:

            $value = $payload['no_codeql_db_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'no_codeql_db_repos';
                goto after_noCodeqlDbRepos;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'noCodeqlDbRepos';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysisSkippedRepoGroup($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['noCodeqlDbRepos'] = $value;

            after_noCodeqlDbRepos:

            $value = $payload['over_limit_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'over_limit_repos';
                goto after_overLimitRepos;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'overLimitRepos';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysisSkippedRepoGroup($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['overLimitRepos'] = $value;

            after_overLimitRepos:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis\SkippedRepositories', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SkippedRepositories::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SkippedRepositories(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis\SkippedRepositories', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysisSkippedRepoGroup(array $payload): CodeScanningVariantAnalysisSkippedRepoGroup
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['repository_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_count';
                goto after_repositoryCount;
            }

            $properties['repositoryCount'] = $value;

            after_repositoryCount:

            $value = $payload['repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repositories';
                goto after_repositories;
            }

            $properties['repositories'] = $value;

            after_repositories:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysisSkippedRepoGroup', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CodeScanningVariantAnalysisSkippedRepoGroup::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CodeScanningVariantAnalysisSkippedRepoGroup(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysisSkippedRepoGroup', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories⚡️NotFoundRepos(array $payload): NotFoundRepos
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['repository_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_count';
                goto after_repositoryCount;
            }

            $properties['repositoryCount'] = $value;

            after_repositoryCount:

            $value = $payload['repository_full_names'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_full_names';
                goto after_repositoryFullNames;
            }

            $properties['repositoryFullNames'] = $value;

            after_repositoryFullNames:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis\SkippedRepositories\NotFoundRepos', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(NotFoundRepos::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new NotFoundRepos(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis\SkippedRepositories\NotFoundRepos', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable(array $payload): ServiceUnavailable
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ServiceUnavailable::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ServiceUnavailable(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleRepository($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis\SkippedRepositories' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysisSkippedRepoGroup' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysisSkippedRepoGroup($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis\SkippedRepositories\NotFoundRepos' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories⚡️NotFoundRepos($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable($object),
                default => throw new LogicException("No serialization defined for $className"),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis(mixed $object): mixed
    {
        assert($object instanceof CodeScanningVariantAnalysis);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $controllerRepo                                         = $object->controllerRepo;
        $controllerRepo                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleRepository($controllerRepo);
        after_controllerRepo:        $result['controller_repo'] = $controllerRepo;

        $actor                               = $object->actor;
        $actor                               = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser($actor);
        after_actor:        $result['actor'] = $actor;

        $queryLanguage                                        = $object->queryLanguage;
        after_queryLanguage:        $result['query_language'] = $queryLanguage;

        $queryPackUrl                                        = $object->queryPackUrl;
        after_queryPackUrl:        $result['query_pack_url'] = $queryPackUrl;

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }

        after_createdAt:        $result['created_at'] = $createdAt;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $completedAt = $object->completedAt;

        if ($completedAt === null) {
            goto after_completedAt;
        }

        after_completedAt:        $result['completed_at'] = $completedAt;

        $status                                = $object->status;
        after_status:        $result['status'] = $status;

        $actionsWorkflowRunId = $object->actionsWorkflowRunId;

        if ($actionsWorkflowRunId === null) {
            goto after_actionsWorkflowRunId;
        }

        after_actionsWorkflowRunId:        $result['actions_workflow_run_id'] = $actionsWorkflowRunId;

        $failureReason = $object->failureReason;

        if ($failureReason === null) {
            goto after_failureReason;
        }

        after_failureReason:        $result['failure_reason'] = $failureReason;

        $scannedRepositories = $object->scannedRepositories;

        if ($scannedRepositories === null) {
            goto after_scannedRepositories;
        }

        static $scannedRepositoriesSerializer0;

        if ($scannedRepositoriesSerializer0 === null) {
            $scannedRepositoriesSerializer0 = new SerializeArrayItems(...[]);
        }

        $scannedRepositories                                              = $scannedRepositoriesSerializer0->serialize($scannedRepositories, $this);
        after_scannedRepositories:        $result['scanned_repositories'] = $scannedRepositories;

        $skippedRepositories = $object->skippedRepositories;

        if ($skippedRepositories === null) {
            goto after_skippedRepositories;
        }

        $skippedRepositories                                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories($skippedRepositories);
        after_skippedRepositories:        $result['skipped_repositories'] = $skippedRepositories;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleRepository(mixed $object): mixed
    {
        assert($object instanceof SimpleRepository);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $fullName                                   = $object->fullName;
        after_fullName:        $result['full_name'] = $fullName;

        $owner                               = $object->owner;
        $owner                               = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        $private                                 = $object->private;
        after_private:        $result['private'] = $private;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $fork                              = $object->fork;
        after_fork:        $result['fork'] = $fork;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $archiveUrl                                     = $object->archiveUrl;
        after_archiveUrl:        $result['archive_url'] = $archiveUrl;

        $assigneesUrl                                       = $object->assigneesUrl;
        after_assigneesUrl:        $result['assignees_url'] = $assigneesUrl;

        $blobsUrl                                   = $object->blobsUrl;
        after_blobsUrl:        $result['blobs_url'] = $blobsUrl;

        $branchesUrl                                      = $object->branchesUrl;
        after_branchesUrl:        $result['branches_url'] = $branchesUrl;

        $collaboratorsUrl                                           = $object->collaboratorsUrl;
        after_collaboratorsUrl:        $result['collaborators_url'] = $collaboratorsUrl;

        $commentsUrl                                      = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        $commitsUrl                                     = $object->commitsUrl;
        after_commitsUrl:        $result['commits_url'] = $commitsUrl;

        $compareUrl                                     = $object->compareUrl;
        after_compareUrl:        $result['compare_url'] = $compareUrl;

        $contentsUrl                                      = $object->contentsUrl;
        after_contentsUrl:        $result['contents_url'] = $contentsUrl;

        $contributorsUrl                                          = $object->contributorsUrl;
        after_contributorsUrl:        $result['contributors_url'] = $contributorsUrl;

        $deploymentsUrl                                         = $object->deploymentsUrl;
        after_deploymentsUrl:        $result['deployments_url'] = $deploymentsUrl;

        $downloadsUrl                                       = $object->downloadsUrl;
        after_downloadsUrl:        $result['downloads_url'] = $downloadsUrl;

        $eventsUrl                                    = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $forksUrl                                   = $object->forksUrl;
        after_forksUrl:        $result['forks_url'] = $forksUrl;

        $gitCommitsUrl                                         = $object->gitCommitsUrl;
        after_gitCommitsUrl:        $result['git_commits_url'] = $gitCommitsUrl;

        $gitRefsUrl                                      = $object->gitRefsUrl;
        after_gitRefsUrl:        $result['git_refs_url'] = $gitRefsUrl;

        $gitTagsUrl                                      = $object->gitTagsUrl;
        after_gitTagsUrl:        $result['git_tags_url'] = $gitTagsUrl;

        $issueCommentUrl                                           = $object->issueCommentUrl;
        after_issueCommentUrl:        $result['issue_comment_url'] = $issueCommentUrl;

        $issueEventsUrl                                          = $object->issueEventsUrl;
        after_issueEventsUrl:        $result['issue_events_url'] = $issueEventsUrl;

        $issuesUrl                                    = $object->issuesUrl;
        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        $keysUrl                                  = $object->keysUrl;
        after_keysUrl:        $result['keys_url'] = $keysUrl;

        $labelsUrl                                    = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        $languagesUrl                                       = $object->languagesUrl;
        after_languagesUrl:        $result['languages_url'] = $languagesUrl;

        $mergesUrl                                    = $object->mergesUrl;
        after_mergesUrl:        $result['merges_url'] = $mergesUrl;

        $milestonesUrl                                        = $object->milestonesUrl;
        after_milestonesUrl:        $result['milestones_url'] = $milestonesUrl;

        $notificationsUrl                                           = $object->notificationsUrl;
        after_notificationsUrl:        $result['notifications_url'] = $notificationsUrl;

        $pullsUrl                                   = $object->pullsUrl;
        after_pullsUrl:        $result['pulls_url'] = $pullsUrl;

        $releasesUrl                                      = $object->releasesUrl;
        after_releasesUrl:        $result['releases_url'] = $releasesUrl;

        $stargazersUrl                                        = $object->stargazersUrl;
        after_stargazersUrl:        $result['stargazers_url'] = $stargazersUrl;

        $statusesUrl                                      = $object->statusesUrl;
        after_statusesUrl:        $result['statuses_url'] = $statusesUrl;

        $subscribersUrl                                         = $object->subscribersUrl;
        after_subscribersUrl:        $result['subscribers_url'] = $subscribersUrl;

        $subscriptionUrl                                          = $object->subscriptionUrl;
        after_subscriptionUrl:        $result['subscription_url'] = $subscriptionUrl;

        $tagsUrl                                  = $object->tagsUrl;
        after_tagsUrl:        $result['tags_url'] = $tagsUrl;

        $teamsUrl                                   = $object->teamsUrl;
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        $treesUrl                                   = $object->treesUrl;
        after_treesUrl:        $result['trees_url'] = $treesUrl;

        $hooksUrl                                   = $object->hooksUrl;
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        assert($object instanceof SimpleUser);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $avatarUrl                                    = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }

        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $followersUrl                                       = $object->followersUrl;
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        $followingUrl                                       = $object->followingUrl;
        after_followingUrl:        $result['following_url'] = $followingUrl;

        $gistsUrl                                   = $object->gistsUrl;
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        $starredUrl                                     = $object->starredUrl;
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        $subscriptionsUrl                                           = $object->subscriptionsUrl;
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        $organizationsUrl                                           = $object->organizationsUrl;
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        $reposUrl                                   = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        $eventsUrl                                    = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $receivedEventsUrl                                             = $object->receivedEventsUrl;
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

        $siteAdmin                                    = $object->siteAdmin;
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }

        after_starredAt:        $result['starred_at'] = $starredAt;

        $userViewType = $object->userViewType;

        if ($userViewType === null) {
            goto after_userViewType;
        }

        after_userViewType:        $result['user_view_type'] = $userViewType;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories(mixed $object): mixed
    {
        assert($object instanceof SkippedRepositories);
        $result = [];

        $accessMismatchRepos                                               = $object->accessMismatchRepos;
        $accessMismatchRepos                                               = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysisSkippedRepoGroup($accessMismatchRepos);
        after_accessMismatchRepos:        $result['access_mismatch_repos'] = $accessMismatchRepos;

        $notFoundRepos                                         = $object->notFoundRepos;
        $notFoundRepos                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories⚡️NotFoundRepos($notFoundRepos);
        after_notFoundRepos:        $result['not_found_repos'] = $notFoundRepos;

        $noCodeqlDbRepos                                            = $object->noCodeqlDbRepos;
        $noCodeqlDbRepos                                            = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysisSkippedRepoGroup($noCodeqlDbRepos);
        after_noCodeqlDbRepos:        $result['no_codeql_db_repos'] = $noCodeqlDbRepos;

        $overLimitRepos                                          = $object->overLimitRepos;
        $overLimitRepos                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysisSkippedRepoGroup($overLimitRepos);
        after_overLimitRepos:        $result['over_limit_repos'] = $overLimitRepos;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysisSkippedRepoGroup(mixed $object): mixed
    {
        assert($object instanceof CodeScanningVariantAnalysisSkippedRepoGroup);
        $result = [];

        $repositoryCount                                          = $object->repositoryCount;
        after_repositoryCount:        $result['repository_count'] = $repositoryCount;

        $repositories = $object->repositories;
        static $repositoriesSerializer0;

        if ($repositoriesSerializer0 === null) {
            $repositoriesSerializer0 = new SerializeArrayItems(...[]);
        }

        $repositories                                      = $repositoriesSerializer0->serialize($repositories, $this);
        after_repositories:        $result['repositories'] = $repositories;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CodeScanningVariantAnalysis⚡️SkippedRepositories⚡️NotFoundRepos(mixed $object): mixed
    {
        assert($object instanceof NotFoundRepos);
        $result = [];

        $repositoryCount                                          = $object->repositoryCount;
        after_repositoryCount:        $result['repository_count'] = $repositoryCount;

        $repositoryFullNames = $object->repositoryFullNames;
        static $repositoryFullNamesSerializer0;

        if ($repositoryFullNamesSerializer0 === null) {
            $repositoryFullNamesSerializer0 = new SerializeArrayItems(...[]);
        }

        $repositoryFullNames                                               = $repositoryFullNamesSerializer0->serialize($repositoryFullNames, $this);
        after_repositoryFullNames:        $result['repository_full_names'] = $repositoryFullNames;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable(mixed $object): mixed
    {
        assert($object instanceof ServiceUnavailable);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }

        after_code:        $result['code'] = $code;

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
