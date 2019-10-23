<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class CERT
 *
 * [RFC4398]
 */
final class CERT extends Record
{
    const RR_TYPE = "CERT";
    const RR_VALUE = 37;
   
    const MEANING = "CERT";
}
