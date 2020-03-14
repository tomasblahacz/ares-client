<?php

declare(strict_types = 1);

namespace TomasBlaha\Ares\AresResponse;

use JMS\Serializer\Annotation as Serializer;

class AresResponseValue
{

    /**
     * @Serializer\XmlValue()
     * @Serializer\Type("string")
     */
    private $value;

    public function getValue(): string
    {
        return (string) $this->value;
    }

}
