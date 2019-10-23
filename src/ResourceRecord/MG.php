<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class MG
 *
 * [RFC1035]
 */
final class MG extends Record
{
    const RR_TYPE = "MG";
    const RR_VALUE = 8;
   
    const MEANING = "a mail group member (EXPERIMENTAL)";
}
