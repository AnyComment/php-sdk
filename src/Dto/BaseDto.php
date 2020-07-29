<?php


namespace AnyComment\Dto;

use ReflectionClass;
use ReflectionProperty;

class BaseDto
{
    /**
     * Get list of properties for given instance.
     *
     * @return array
     * @throws \ReflectionException
     */
    public function getParams()
    {
        $reflect = new ReflectionClass($this);
        $props = $reflect->getProperties(ReflectionProperty::IS_PUBLIC);

        $value = [];
        foreach ($props as $key => $prop) {
            $value[$prop->getName()] = $prop->getValue($this);
        }


        return $value;
    }
}
