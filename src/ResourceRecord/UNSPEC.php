<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class UNSPEC
 *
 * [IANA-Reserved]
 */
final class UNSPEC extends Record
{
    const RR_TYPE = "UNSPEC";
    const RR_VALUE = 103;
   
    const MEANING = "";
}
