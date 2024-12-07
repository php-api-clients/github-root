<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\SigstoreBundle0\VerificationMaterial\XFiveHundredNineCertificatechain;

use Error;

final class Certificates extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\XFiveHundredNineCertificatechain\Certificates $error)
    {
    }
}
