<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class DOA
 *
 * [draft-durand-doa-over-dns]
 */
final class DOA extends Record
{
    const RR_TYPE = "DOA";
    const RR_VALUE = 259;
   
    const MEANING = "Digital Object Architecture";
}
