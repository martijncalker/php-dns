<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class MINFO
 *
 * [RFC1035]
 */
final class MINFO extends Record
{
    const RR_TYPE = "MINFO";
    const RR_VALUE = 14;
   
    const MEANING = "mailbox or mail list information";
}
