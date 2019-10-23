<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class RRSIG
 *
 * [RFC4034][RFC3755]
 */
final class RRSIG extends Record
{
    const RR_TYPE = "RRSIG";
    const RR_VALUE = 46;
   
    const MEANING = "RRSIG";

    /**
     * @var string
     * The Type Covered field identifies the type of the RRset that is
     * covered by this RRSIG record
     */
    private $typeCovered;

    /**
     * @var int
     * The Algorithm Number field identifies the cryptographic algorithm
     * used to create the signature. A list of DNSSEC algorithm types can
     * be found in Appendix A.1
     * https://tools.ietf.org/html/rfc4034#appendix-A.1
     */
    private $algorithm;

    /**
     * @var int
     * The Labels field specifies the number of labels in the original RRSIG
     * RR owner name.  The significance of this field is that a validator
     * uses it to determine whether the answer was synthesized from a
     * wildcard.  If so, it can be used to determine what owner name was
     * used in generating the signature.
     */
    private $labels;

    /**
     * @var int
     * The Original TTL field specifies the TTL of the covered RRset as it
     * appears in the authoritative zone.
     */
    private $originalTTL;

    /**
     * @var int
     * The Signature Expiration and Inception fields specify a validity
     * period for the signature.  The RRSIG record MUST NOT be used for
     * authentication prior to the inception date and MUST NOT be used for
     * authentication after the expiration date.
     */
    private $SignatureExpiration;

    /**
     * @var int
     * The Signature Expiration and Inception fields specify a validity
     * period for the signature.  The RRSIG record MUST NOT be used for
     * authentication prior to the inception date and MUST NOT be used for
     * authentication after the expiration date.
     *
     */
    private $SignatureInception;

    /**
     * @var int
     * The Key Tag field contains the key tag value of the DNSKEY RR that
     * validates this signature, in network byte order.  Appendix B explains
     * how to calculate Key Tag values.
     * https://tools.ietf.org/html/rfc4034#appendix-B
     */
    private $keyTag;

    /**
     * @var string
     * The Signer's Name field value identifies the owner name of the DNSKEY
     * RR that a validator is supposed to use to validate this signature.
     * The Signer's Name field MUST contain the name of the zone of the
     * covered RRset.  A sender MUST NOT use DNS name compression on the
     * Signer's Name field when transmitting a RRSIG RR.
     */
    private $signerName;

    /**
     * @var string
     * The Signature field contains the cryptographic signature that covers
     * the RRSIG RDATA (excluding the Signature field) and the RRset
     * specified by the RRSIG owner name, RRSIG class, and RRSIG Type
     * Covered field.  The format of this field depends on the algorithm in
     * use, and these formats are described in separate companion documents
     */
    private $signature;


    /**
     * RRSIG constructor.
     * @param string $name
     * @param int $ttl
     * @param string $data
     */
    public function __construct(string $name, int $ttl, string $data)
    {
        parent::__construct($name, $ttl, $data);

        list(
            $this->typeCovered,
            $this->algorithm,
            $this->labels,
            $this->originalTTL,
            $this->SignatureExpiration,
            $this->SignatureInception,
            $this->keyTag,
            $this->signerName,
            $this->signature
            ) = explode(' ', $data);
    }

    /**
     * @return string
     */
    public function getTypeCovered(): string
    {
        return $this->typeCovered;
    }

    /**
     * @return int
     */
    public function getAlgorithm(): int
    {
        return $this->algorithm;
    }

    /**
     * @return int
     */
    public function getLabels(): int
    {
        return $this->labels;
    }

    /**
     * @return int
     */
    public function getOriginalTTL(): int
    {
        return $this->originalTTL;
    }

    /**
     * @return int
     */
    public function getSignatureExpiration(): int
    {
        return $this->SignatureExpiration;
    }

    /**
     * @return int
     */
    public function getSignatureInception(): int
    {
        return $this->SignatureInception;
    }

    /**
     * @return int
     */
    public function getKeyTag(): int
    {
        return $this->keyTag;
    }

    /**
     * @return string
     */
    public function getSignerName(): string
    {
        return $this->signerName;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }
}
