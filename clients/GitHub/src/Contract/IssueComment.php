<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $url
 * @property ?string $body
 * @property ?string $bodyText
 * @property ?string $bodyHtml
 * @property string $htmlUrl
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $user
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $issueUrl
 * @property string $authorAssociation
 * @property ?\ApiClients\Client\GitHub\Schema\Integration $performedViaGithubApp
 * @property ?\ApiClients\Client\GitHub\Schema\ReactionRollup $reactions
 */
interface IssueComment
{
}
