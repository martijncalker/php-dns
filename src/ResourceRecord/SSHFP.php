<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class SSHFP
 *
 * [RFC4255]
 */
final class SSHFP extends Record
{
    const RR_TYPE = "SSHFP";
    const RR_VALUE = 44;
   
    const MEANING = "SSH Key Fingerprint";
}
