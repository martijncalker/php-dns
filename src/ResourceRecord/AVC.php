<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class AVC
 *
 * [Wolfgang_Riedel]
 */
final class AVC extends Record
{
    const RR_TYPE = "AVC";
    const RR_VALUE = 258;
   
    const MEANING = "Application Visibility and Control";
}
