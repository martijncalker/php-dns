<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NULLe
 *
 * It's not allowed to name a class NULL in php
 *
 * [RFC1035]
 */
final class NULLe extends Record
{
    const RR_TYPE = "NULL";
    const RR_VALUE = 10;
   
    const MEANING = "a null RR (EXPERIMENTAL)";
}
