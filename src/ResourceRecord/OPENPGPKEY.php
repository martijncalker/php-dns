<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class OPENPGPKEY
 *
 * [RFC7929]
 */
final class OPENPGPKEY extends Record
{
    const RR_TYPE = "OPENPGPKEY";
    const RR_VALUE = 61;
   
    const MEANING = "OpenPGP Key";
}
