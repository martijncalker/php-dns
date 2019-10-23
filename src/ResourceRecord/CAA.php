<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class CAA
 *
 * https://datatracker.ietf.org/doc/draft-ietf-lamps-rfc6844bis/
 */
final class CAA extends Record
{
    const RR_TYPE = "CAA";
    const RR_VALUE = 257;
   
    const MEANING = "Certification Authority Restriction";

    /**
     * @var int
     */
    private $flag;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var string
     */
    private $value;

    /**
     * CAA constructor.
     * @param string $name
     * @param int $ttl
     * @param string $data
     */
    public function __construct(string $name, int $ttl, string $data)
    {
        parent::__construct($name, $ttl, $data);

        list(
            $this->flag,
            $this->tag,
            $this->value
            ) = explode(' ', $data);
    }

    /**
     * @return int
     */
    public function getFlag(): int
    {
        return $this->flag;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
