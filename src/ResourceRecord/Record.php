<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class Record
 */
abstract class Record
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $ttl;
    /**
     * @var string
     */
    private $data;

    public function __construct(
        string $name,
        int $ttl,
        string $data
    ) {
        $this->name = $name;
        $this->ttl = $ttl;
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
}