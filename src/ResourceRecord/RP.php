<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class RP
 *
 * [RFC1183]
 */
final class RP extends Record
{
    const RR_TYPE = "RP";
    const RR_VALUE = 17;
   
    const MEANING = "for Responsible Person";
}
