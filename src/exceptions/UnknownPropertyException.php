<?php

namespace neverstale\api\exceptions;

class UnknownPropertyException extends \Exception
{
    public function getName(): string
    {
        return 'Unknown Property';
    }
}
