<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Repos\UpdateInformationAboutPagesSite\Request\ApplicationJson\Source;

final class One extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Repos\UpdateInformationAboutPagesSite\Request\ApplicationJson\Source\One $error)
    {
    }
}
