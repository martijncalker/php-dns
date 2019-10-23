<?php

declare(strict_types=1);

namespace vanCalker\DNS\DoH;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

final class CloudflareDNSProvider implements DNSProviderInterface
{
    /**
     * @var ClientInterface
     */
    private $client;

    private static $_endpoint = 'https://cloudflare-dns.com/dns-query';

    private static $_headers = [
        'Accept' => 'application/dns-json',
    ];

    public function __construct(
        ClientInterface $client
    ) {
        $this->client = $client;
    }

    public function query(
        string $domain,
        int $type
    ): ResponseInterface
    {
        $endpoint = sprintf(
            '%s?name=%s&cd=true&type=%s',
            self::$_endpoint,
            $domain,
            $type
        );

        return $this->client->send(new Request(
            'GET',
            $endpoint,
            self::$_headers
        ));
    }
}
