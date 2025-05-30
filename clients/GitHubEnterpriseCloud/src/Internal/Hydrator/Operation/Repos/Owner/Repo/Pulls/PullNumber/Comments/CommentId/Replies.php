<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId;

use ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\Html;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\PullRequest;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\Self_;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ReactionRollup;
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

class Replies implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\Self_' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\Html' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\PullRequest' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ReactionRollup' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ReactionRollup($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment(array $payload): PullRequestReviewComment
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['pull_request_review_id'] ?? null;

            if ($value === null) {
                $properties['pullRequestReviewId'] = null;
                goto after_pullRequestReviewId;
            }

            $properties['pullRequestReviewId'] = $value;

            after_pullRequestReviewId:

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

            $value = $payload['diff_hunk'] ?? null;

            if ($value === null) {
                $missingFields[] = 'diff_hunk';
                goto after_diffHunk;
            }

            $properties['diffHunk'] = $value;

            after_diffHunk:

            $value = $payload['path'] ?? null;

            if ($value === null) {
                $missingFields[] = 'path';
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

            $value = $payload['position'] ?? null;

            if ($value === null) {
                $properties['position'] = null;
                goto after_position;
            }

            $properties['position'] = $value;

            after_position:

            $value = $payload['original_position'] ?? null;

            if ($value === null) {
                $properties['originalPosition'] = null;
                goto after_originalPosition;
            }

            $properties['originalPosition'] = $value;

            after_originalPosition:

            $value = $payload['commit_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit_id';
                goto after_commitId;
            }

            $properties['commitId'] = $value;

            after_commitId:

            $value = $payload['original_commit_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'original_commit_id';
                goto after_originalCommitId;
            }

            $properties['originalCommitId'] = $value;

            after_originalCommitId:

            $value = $payload['in_reply_to_id'] ?? null;

            if ($value === null) {
                $properties['inReplyToId'] = null;
                goto after_inReplyToId;
            }

            $properties['inReplyToId'] = $value;

            after_inReplyToId:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user';
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $missingFields[] = 'body';
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['pull_request_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_request_url';
                goto after_pullRequestUrl;
            }

            $properties['pullRequestUrl'] = $value;

            after_pullRequestUrl:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['_links'] ?? null;

            if ($value === null) {
                $missingFields[] = '_links';
                goto after_links;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'links';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['links'] = $value;

            after_links:

            $value = $payload['start_line'] ?? null;

            if ($value === null) {
                $properties['startLine'] = null;
                goto after_startLine;
            }

            $properties['startLine'] = $value;

            after_startLine:

            $value = $payload['original_start_line'] ?? null;

            if ($value === null) {
                $properties['originalStartLine'] = null;
                goto after_originalStartLine;
            }

            $properties['originalStartLine'] = $value;

            after_originalStartLine:

            $value = $payload['start_side'] ?? null;

            if ($value === null) {
                $properties['startSide'] = null;
                goto after_startSide;
            }

            $properties['startSide'] = $value;

            after_startSide:

            $value = $payload['line'] ?? null;

            if ($value === null) {
                $properties['line'] = null;
                goto after_line;
            }

            $properties['line'] = $value;

            after_line:

            $value = $payload['original_line'] ?? null;

            if ($value === null) {
                $properties['originalLine'] = null;
                goto after_originalLine;
            }

            $properties['originalLine'] = $value;

            after_originalLine:

            $value = $payload['side'] ?? null;

            if ($value === null) {
                $properties['side'] = null;
                goto after_side;
            }

            $properties['side'] = $value;

            after_side:

            $value = $payload['subject_type'] ?? null;

            if ($value === null) {
                $properties['subjectType'] = null;
                goto after_subjectType;
            }

            $properties['subjectType'] = $value;

            after_subjectType:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $properties['reactions'] = null;
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ReactionRollup($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['body_html'] ?? null;

            if ($value === null) {
                $properties['bodyHtml'] = null;
                goto after_bodyHtml;
            }

            $properties['bodyHtml'] = $value;

            after_bodyHtml:

            $value = $payload['body_text'] ?? null;

            if ($value === null) {
                $properties['bodyText'] = null;
                goto after_bodyText;
            }

            $properties['bodyText'] = $value;

            after_bodyText:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PullRequestReviewComment::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PullRequestReviewComment(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment', $exception, stack: $this->hydrationStack);
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

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links(array $payload): Links
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['self'] ?? null;

            if ($value === null) {
                $missingFields[] = 'self';
                goto after_self;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'self';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['self'] = $value;

            after_self:

            $value = $payload['html'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html';
                goto after_html;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'html';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['html'] = $value;

            after_html:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_request';
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Links::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Links(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_(array $payload): Self_
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['href'] ?? null;

            if ($value === null) {
                $missingFields[] = 'href';
                goto after_href;
            }

            $properties['href'] = $value;

            after_href:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\Self_', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Self_::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Self_(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\Self_', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html(array $payload): Html
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['href'] ?? null;

            if ($value === null) {
                $missingFields[] = 'href';
                goto after_href;
            }

            $properties['href'] = $value;

            after_href:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\Html', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Html::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Html(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\Html', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest(array $payload): PullRequest
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['href'] ?? null;

            if ($value === null) {
                $missingFields[] = 'href';
                goto after_href;
            }

            $properties['href'] = $value;

            after_href:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\PullRequest', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PullRequest::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PullRequest(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\PullRequest', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ReactionRollup(array $payload): ReactionRollup
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['+1'] ?? null;

            if ($value === null) {
                $missingFields[] = '+1';
                goto after_plusOne;
            }

            $properties['plusOne'] = $value;

            after_plusOne:

            $value = $payload['-1'] ?? null;

            if ($value === null) {
                $missingFields[] = '-1';
                goto after_minOne;
            }

            $properties['minOne'] = $value;

            after_minOne:

            $value = $payload['laugh'] ?? null;

            if ($value === null) {
                $missingFields[] = 'laugh';
                goto after_laugh;
            }

            $properties['laugh'] = $value;

            after_laugh:

            $value = $payload['confused'] ?? null;

            if ($value === null) {
                $missingFields[] = 'confused';
                goto after_confused;
            }

            $properties['confused'] = $value;

            after_confused:

            $value = $payload['heart'] ?? null;

            if ($value === null) {
                $missingFields[] = 'heart';
                goto after_heart;
            }

            $properties['heart'] = $value;

            after_heart:

            $value = $payload['hooray'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooray';
                goto after_hooray;
            }

            $properties['hooray'] = $value;

            after_hooray:

            $value = $payload['eyes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'eyes';
                goto after_eyes;
            }

            $properties['eyes'] = $value;

            after_eyes:

            $value = $payload['rocket'] ?? null;

            if ($value === null) {
                $missingFields[] = 'rocket';
                goto after_rocket;
            }

            $properties['rocket'] = $value;

            after_rocket:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ReactionRollup::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ReactionRollup(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\Self_' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\Html' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment\Links\PullRequest' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ReactionRollup' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ReactionRollup($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment(mixed $object): mixed
    {
        assert($object instanceof PullRequestReviewComment);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $pullRequestReviewId = $object->pullRequestReviewId;

        if ($pullRequestReviewId === null) {
            goto after_pullRequestReviewId;
        }

        after_pullRequestReviewId:        $result['pull_request_review_id'] = $pullRequestReviewId;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $diffHunk                                   = $object->diffHunk;
        after_diffHunk:        $result['diff_hunk'] = $diffHunk;

        $path                              = $object->path;
        after_path:        $result['path'] = $path;

        $position = $object->position;

        if ($position === null) {
            goto after_position;
        }

        after_position:        $result['position'] = $position;

        $originalPosition = $object->originalPosition;

        if ($originalPosition === null) {
            goto after_originalPosition;
        }

        after_originalPosition:        $result['original_position'] = $originalPosition;

        $commitId                                   = $object->commitId;
        after_commitId:        $result['commit_id'] = $commitId;

        $originalCommitId                                            = $object->originalCommitId;
        after_originalCommitId:        $result['original_commit_id'] = $originalCommitId;

        $inReplyToId = $object->inReplyToId;

        if ($inReplyToId === null) {
            goto after_inReplyToId;
        }

        after_inReplyToId:        $result['in_reply_to_id'] = $inReplyToId;

        $user                              = $object->user;
        $user                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SimpleUser($user);
        after_user:        $result['user'] = $user;

        $body                              = $object->body;
        after_body:        $result['body'] = $body;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $updatedAt                                    = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $pullRequestUrl                                          = $object->pullRequestUrl;
        after_pullRequestUrl:        $result['pull_request_url'] = $pullRequestUrl;

        $authorAssociation                                            = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        $links                                = $object->links;
        $links                                = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links($links);
        after_links:        $result['_links'] = $links;

        $startLine = $object->startLine;

        if ($startLine === null) {
            goto after_startLine;
        }

        after_startLine:        $result['start_line'] = $startLine;

        $originalStartLine = $object->originalStartLine;

        if ($originalStartLine === null) {
            goto after_originalStartLine;
        }

        after_originalStartLine:        $result['original_start_line'] = $originalStartLine;

        $startSide = $object->startSide;

        if ($startSide === null) {
            goto after_startSide;
        }

        after_startSide:        $result['start_side'] = $startSide;

        $line = $object->line;

        if ($line === null) {
            goto after_line;
        }

        after_line:        $result['line'] = $line;

        $originalLine = $object->originalLine;

        if ($originalLine === null) {
            goto after_originalLine;
        }

        after_originalLine:        $result['original_line'] = $originalLine;

        $side = $object->side;

        if ($side === null) {
            goto after_side;
        }

        after_side:        $result['side'] = $side;

        $subjectType = $object->subjectType;

        if ($subjectType === null) {
            goto after_subjectType;
        }

        after_subjectType:        $result['subject_type'] = $subjectType;

        $reactions = $object->reactions;

        if ($reactions === null) {
            goto after_reactions;
        }

        $reactions                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ReactionRollup($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        $bodyHtml = $object->bodyHtml;

        if ($bodyHtml === null) {
            goto after_bodyHtml;
        }

        after_bodyHtml:        $result['body_html'] = $bodyHtml;

        $bodyText = $object->bodyText;

        if ($bodyText === null) {
            goto after_bodyText;
        }

        after_bodyText:        $result['body_text'] = $bodyText;

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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links(mixed $object): mixed
    {
        assert($object instanceof Links);
        $result = [];

        $self                              = $object->self;
        $self                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_($self);
        after_self:        $result['self'] = $self;

        $html                              = $object->html;
        $html                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html($html);
        after_html:        $result['html'] = $html;

        $pullRequest                                      = $object->pullRequest;
        $pullRequest                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_(mixed $object): mixed
    {
        assert($object instanceof Self_);
        $result = [];

        $href                              = $object->href;
        after_href:        $result['href'] = $href;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html(mixed $object): mixed
    {
        assert($object instanceof Html);
        $result = [];

        $href                              = $object->href;
        after_href:        $result['href'] = $href;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest(mixed $object): mixed
    {
        assert($object instanceof PullRequest);
        $result = [];

        $href                              = $object->href;
        after_href:        $result['href'] = $href;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ReactionRollup(mixed $object): mixed
    {
        assert($object instanceof ReactionRollup);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $totalCount                                     = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        $plusOne                            = $object->plusOne;
        after_plusOne:        $result['+1'] = $plusOne;

        $minOne                            = $object->minOne;
        after_minOne:        $result['-1'] = $minOne;

        $laugh                               = $object->laugh;
        after_laugh:        $result['laugh'] = $laugh;

        $confused                                  = $object->confused;
        after_confused:        $result['confused'] = $confused;

        $heart                               = $object->heart;
        after_heart:        $result['heart'] = $heart;

        $hooray                                = $object->hooray;
        after_hooray:        $result['hooray'] = $hooray;

        $eyes                              = $object->eyes;
        after_eyes:        $result['eyes'] = $eyes;

        $rocket                                = $object->rocket;
        after_rocket:        $result['rocket'] = $rocket;

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
