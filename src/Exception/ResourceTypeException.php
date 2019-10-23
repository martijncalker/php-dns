<?php

declare(strict_types=1);

namespace vanCalker\DNS\Exception;

/**
 * Class DNSException
 */
final class ResourceTypeException extends DNSException
{
    /**
     * @param int $resourceTypeValue
     * @return ResourceTypeException
     */
    public static function couldNotCreateResourceRecordFromTypeValue(int $resourceTypeValue)
    {
        return new self(
            sprintf(
                'Could not create Resource Record from value %s',
                $resourceTypeValue
            )
        );
    }
}
