<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class DS
 *
 * [RFC4034][RFC3658]
 */
final class DS extends Record
{
    const RR_TYPE = "DS";
    const RR_VALUE = 43;
   
    const MEANING = "Delegation Signer";
}
