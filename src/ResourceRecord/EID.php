<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class EID
 *
 * [Michael_Patton][http://ana-3.lcs.mit.edu/~jnc/nimrod/dns.txt]
 */
final class EID extends Record
{
    const RR_TYPE = "EID";
    const RR_VALUE = 31;
   
    const MEANING = "Endpoint Identifier";
}
