<?php

declare(strict_types=1);

namespace vanCalker\DNS\DoH;

use Psr\Http\Message\ResponseInterface;

interface DNSProviderInterface
{
    public function query(
        string $domain,
        int $type
    ): ResponseInterface;
}
