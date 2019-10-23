<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class MAILB
 *
 * [RFC1035]
 */
final class MAILB extends Record
{
    const RR_TYPE = "MAILB";
    const RR_VALUE = 253;
   
    const MEANING = "mailbox-related RRs (MB, MG or MR)";
}
