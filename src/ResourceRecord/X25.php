<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class X25
 *
 * [RFC1183]
 */
final class X25 extends Record
{
    const RR_TYPE = "X25";
    const RR_VALUE = 19;
   
    const MEANING = "for X.25 PSDN address";
}
