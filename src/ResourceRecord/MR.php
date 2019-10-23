<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class MR
 *
 * [RFC1035]
 */
final class MR extends Record
{
    const RR_TYPE = "MR";
    const RR_VALUE = 9;
   
    const MEANING = "a mail rename domain name (EXPERIMENTAL)";
}
