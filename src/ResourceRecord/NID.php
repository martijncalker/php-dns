<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NID
 *
 * [RFC6742]
 */
final class NID extends Record
{
    const RR_TYPE = "NID";
    const RR_VALUE = 104;
   
    const MEANING = "";
}
