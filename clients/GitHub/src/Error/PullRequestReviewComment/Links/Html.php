<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\PullRequestReviewComment\Links;

final class Html extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\PullRequestReviewComment\Links\Html $error)
    {
    }
}
