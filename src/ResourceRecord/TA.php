<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class TA
 *
 * [Sam_Weiler][http://cameo.library.cmu.edu/][
        Deploying DNSSEC Without a Signed Root.  Technical Report 1999-19,
Information Networking Institute, Carnegie Mellon University, April 2004.]
 */
final class TA extends Record
{
    const RR_TYPE = "TA";
    const RR_VALUE = 32768;
   
    const MEANING = "DNSSEC Trust Authorities";
}
