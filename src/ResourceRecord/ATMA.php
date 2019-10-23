<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class ATMA
 *
 * [
        ATM Forum Technical Committee, "ATM Name System, V2.0", Doc ID: AF-DANS-0152.000, July 2000. Available from and held in escrow by IANA.]
 */
final class ATMA extends Record
{
    const RR_TYPE = "ATMA";
    const RR_VALUE = 34;
   
    const MEANING = "ATM Address";
}
