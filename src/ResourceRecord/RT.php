<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class RT
 *
 * [RFC1183]
 */
final class RT extends Record
{
    const RR_TYPE = "RT";
    const RR_VALUE = 21;
   
    const MEANING = "for Route Through";
}
