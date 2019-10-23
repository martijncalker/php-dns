<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class SOA
 *
 * [RFC1035]
 */
final class SOA extends Record
{
    const RR_TYPE = "SOA";
    const RR_VALUE = 6;
   
    const MEANING = "marks the start of a zone of authority";

    /**
     * @var string
     * The <domain-name> of the name server that was the
     * original or primary source of data for this zone.
     */
    private $mname;

    /**
     * @var string
     * A <domain-name> which specifies the mailbox of the
     * person responsible for this zone.
     */
    private $rname;

    /**
     * @var int
     * The unsigned 32 bit version number of the original copy
     * of the zone.  Zone transfers preserve this value.  This
     * value wraps and should be compared using sequence space
     * arithmetic.
     */
    private $serial;

    /**
     * @var int
     * A 32 bit time interval before the zone should be
     * refreshed.
     */
    private $refresh;

    /**
     * @var int
     * A 32 bit time interval that should elapse before a
     * failed refresh should be retried
     */
    private $retry;

    /**
     * @var int
     * A 32 bit time value that specifies the upper limit on
     * the time interval that can elapse before the zone is no
     * longer authoritative.
     */
    private $expire;

    /**
     * @var int
     * The unsigned 32 bit minimum TTL field that should be
     * exported with any RR from this zone.
     */
    private $minimum;

    /**
     * SOA constructor.
     * @param string $name
     * @param int $ttl
     * @param string $data
     */
    public function __construct(string $name, int $ttl, string $data)
    {
        parent::__construct($name, $ttl, $data);

        list(
            $this->mname,
            $this->rname,
            $this->serial,
            $this->refresh,
            $this->retry,
            $this->expire,
            $this->minimum
            ) = explode(' ', $data);
    }

    /**
     * @return string
     */
    public function getMname(): string
    {
        return $this->mname;
    }

    /**
     * @return string
     */
    public function getRname(): string
    {
        return $this->rname;
    }

    /**
     * @return int
     */
    public function getSerial(): int
    {
        return (int) $this->serial;
    }

    /**
     * @return int
     */
    public function getRefresh(): int
    {
        return (int) $this->refresh;
    }

    /**
     * @return int
     */
    public function getRetry(): int
    {
        return (int) $this->retry;
    }

    /**
     * @return int
     */
    public function getExpire(): int
    {
        return (int) $this->expire;
    }

    /**
     * @return int
     */
    public function getMinimum(): int
    {
        return $this->minimum;
    }
}
