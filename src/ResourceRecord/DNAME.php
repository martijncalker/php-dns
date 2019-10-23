<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class DNAME
 *
 * [RFC6672]
 */
final class DNAME extends Record
{
    const RR_TYPE = "DNAME";
    const RR_VALUE = 39;
   
    const MEANING = "DNAME";
}
