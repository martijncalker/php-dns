<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class CSYNC
 *
 * [RFC7477]
 */
final class CSYNC extends Record
{
    const RR_TYPE = "CSYNC";
    const RR_VALUE = 62;
   
    const MEANING = "Child-To-Parent Synchronization";
}
