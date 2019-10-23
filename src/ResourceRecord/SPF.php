<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class SPF
 *
 * [RFC7208]
 */
final class SPF extends Record
{
    const RR_TYPE = "SPF";
    const RR_VALUE = 99;
   
    const MEANING = "";
}
