<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NIMLOC
 *
 * [1][Michael_Patton][http://ana-3.lcs.mit.edu/~jnc/nimrod/dns.txt]
 */
final class NIMLOC extends Record
{
    const RR_TYPE = "NIMLOC";
    const RR_VALUE = 32;
   
    const MEANING = "Nimrod Locator";
}
