<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class GPOS
 *
 * [RFC1712]
 */
final class GPOS extends Record
{
    const RR_TYPE = "GPOS";
    const RR_VALUE = 27;
   
    const MEANING = "Geographical Position";
}
