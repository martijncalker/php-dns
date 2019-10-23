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
}
