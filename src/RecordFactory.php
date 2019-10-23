<?php

declare(strict_types=1);

namespace vanCalker\DNS;

use vanCalker\DNS\Exception\ResourceTypeException;

/**
 * Class RecordFactory
 */
final class RecordFactory
{
    /**
     * @param array $data
     * @return mixed
     * @throws ResourceTypeException
     */
    public static function recordFromData(array $data)
    {
        if (false === array_key_exists($data['type'], Resources::$values)) {
            throw ResourceTypeException::couldNotCreateResourceRecordFromTypeValue($data['type']);
        }

        $class = Resources::$values[$data['type']];

        return new $class(
            $data['name'],
            $data['TTL'],
            $data['data']
        );
    }
}
