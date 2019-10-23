<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class MX
 *
 * [RFC1035]
 */
final class MX extends Record
{
    const RR_TYPE = "MX";
    const RR_VALUE = 15;
   
    const MEANING = "mail exchange";

    /**
     * @var int
     *
     * A 16 bit integer which specifies the preference given to
     * this RR among others at the same owner.  Lower values
     * are preferred.
     */
    private $preference;

    /**
     * @var string
     *
     * A <domain-name> which specifies a host willing to act as
     * a mail exchange for the owner name.
     */
    private $exchange;

    /**
     * MX constructor.
     * @param string $name
     * @param int $ttl
     * @param string $data
     */
    public function __construct(string $name, int $ttl, string $data)
    {
        parent::__construct($name, $ttl, $data);

        list(
            $this->preference,
            $this->exchange
            ) = explode(' ', $data);
    }

    /**
     * @return int
     */
    public function getPreference(): int
    {
        return (int) $this->preference;
    }

    /**
     * @return string
     */
    public function getExchange(): string
    {
        return $this->exchange;
    }
}
