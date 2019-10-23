<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class SINK
 *
 * [Donald_E_Eastlake][http://tools.ietf.org/html/draft-eastlake-kitchen-sink]
 */
final class SINK extends Record
{
    const RR_TYPE = "SINK";
    const RR_VALUE = 40;
   
    const MEANING = "SINK";
}
