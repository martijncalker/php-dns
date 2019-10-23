<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class SMIMEA
 *
 * [RFC8162]
 */
final class SMIMEA extends Record
{
    const RR_TYPE = "SMIMEA";
    const RR_VALUE = 53;
   
    const MEANING = "S/MIME cert association";
}
