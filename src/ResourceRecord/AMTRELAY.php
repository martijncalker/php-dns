<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class AMTRELAY
 *
 * [draft-ietf-mboned-driad-amt-discovery]
 */
final class AMTRELAY extends Record
{
    const RR_TYPE = "AMTRELAY";
    const RR_VALUE = 260;
   
    const MEANING = "Automatic Multicast Tunneling Relay";
}
