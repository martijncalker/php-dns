<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class UID
 *
 * [IANA-Reserved]
 */
final class UID extends Record
{
    const RR_TYPE = "UID";
    const RR_VALUE = 101;
   
    const MEANING = "";
}
