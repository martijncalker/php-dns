<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class MB
 *
 * [RFC1035]
 */
final class MB extends Record
{
    const RR_TYPE = "MB";
    const RR_VALUE = 7;
   
    const MEANING = "a mailbox domain name (EXPERIMENTAL)";
}
