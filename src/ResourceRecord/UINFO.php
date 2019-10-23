<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class UINFO
 *
 * [IANA-Reserved]
 */
final class UINFO extends Record
{
    const RR_TYPE = "UINFO";
    const RR_VALUE = 100;
   
    const MEANING = "";
}
