<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\CodeScanning\UploadSarif\Request;

final class ApplicationJson extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CodeScanning\UploadSarif\Request\ApplicationJson $error)
    {
    }
}
