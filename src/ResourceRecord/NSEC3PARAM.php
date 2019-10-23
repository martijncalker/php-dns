<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NSEC3PARAM
 *
 * [RFC5155]
 */
final class NSEC3PARAM extends Record
{
    const RR_TYPE = "NSEC3PARAM";
    const RR_VALUE = 51;
   
    const MEANING = "NSEC3PARAM";
}
