<?php

declare(strict_types=1);

namespace vanCalker\DNS\DoH;

use vanCalker\DNS\RecordFactory;
use vanCalker\DNS\Resources;

/**
 * Class DoHClient
 */
final class DoHClient
{
    /**
     * @var DNSProviderInterface
     */
    private $DNSProvider;

    /**
     * TestClient constructor.
     * @param DNSProviderInterface $DNSProvider
     */
    public function __construct(
        DNSProviderInterface $DNSProvider
    ) {
        $this->DNSProvider = $DNSProvider;
    }

    /**
     * @param string $domain
     * @param string|int $type
     * @return array
     * @throws \vanCalker\DNS\Exception\ResourceTypeException
     */
    public function query(
        string $domain,
        $type
    ): array
    {
        if ('string' === gettype($type)) {
            $type = Resources::$types[strtoupper($type)];
        }

        $response = $this->DNSProvider->query($domain, $type);

        $data = json_decode($response->getBody()->getContents(), true);

        if (false === array_key_exists('Answer', $data)) {
            return [];
        }

        $records = [];
        foreach ($data['Answer'] as $answer) {
            $records[] = RecordFactory::recordFromData($answer);
        }

        return $records;
    }
}
