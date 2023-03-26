<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class AnnouncementBanner
{
    public const SCHEMA_JSON = '{"title":"Announcement Banner","required":["announcement","expires_at","user_dismissible"],"type":"object","properties":{"announcement":{"type":["string","null"],"description":"The announcement text in GitHub Flavored Markdown. For more information about GitHub Flavored Markdown, see \\"[Basic writing and formatting syntax](https:\\/\\/docs.github.com\\/enterprise-server@3.8\\/github\\/writing-on-github\\/getting-started-with-writing-and-formatting-on-github\\/basic-writing-and-formatting-syntax).\\"","examples":["Very **important** announcement about _something_."]},"expires_at":{"type":["string","null"],"description":"The time at which the announcement expires. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. To set an announcement that never expires, omit this parameter, set it to `null`, or set it to an empty string.","format":"date-time","examples":["\\"2021-01-01T00:00:00.000-07:00\\""]},"user_dismissible":{"type":["boolean","null"],"description":"Whether an announcement can be dismissed by the user.","default":false,"examples":[false]}},"description":"Announcement at either the repository, organization, or enterprise level"}';
    public const SCHEMA_TITLE = 'Announcement Banner';
    public const SCHEMA_DESCRIPTION = 'Announcement at either the repository, organization, or enterprise level';
    public const SCHEMA_EXAMPLE_DATA = '{"announcement":"Very **important** announcement about _something_.","expires_at":"\\"2021-01-01T00:00:00.000-07:00\\"","user_dismissible":false}';
    /**
     * announcement: The announcement text in GitHub Flavored Markdown. For more information about GitHub Flavored Markdown, see "[Basic writing and formatting syntax](https://docs.github.com/enterprise-server@3.8/github/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax)."
     * expiresAt: The time at which the announcement expires. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. To set an announcement that never expires, omit this parameter, set it to `null`, or set it to an empty string.
     * userDismissible: Whether an announcement can be dismissed by the user.
     */
    public function __construct(public ?string $announcement, #[\EventSauce\ObjectHydrator\MapFrom('expires_at')] public ?string $expiresAt, #[\EventSauce\ObjectHydrator\MapFrom('user_dismissible')] public ?bool $userDismissible)
    {
    }
}
