<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class GID
 *
 * [IANA-Reserved]
 */
final class GID extends Record
{
    const RR_TYPE = "GID";
    const RR_VALUE = 102;
   
    const MEANING = "";
}
