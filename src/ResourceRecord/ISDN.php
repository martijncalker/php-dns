<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class ISDN
 *
 * [RFC1183]
 */
final class ISDN extends Record
{
    const RR_TYPE = "ISDN";
    const RR_VALUE = 20;
   
    const MEANING = "for ISDN address";
}
