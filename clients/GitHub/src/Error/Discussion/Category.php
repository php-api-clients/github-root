<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Discussion;

final class Category extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Discussion\Category $error)
    {
    }
}
