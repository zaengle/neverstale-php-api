<?php

namespace neverstale\api\exceptions;
use Throwable;

class ApiException extends \Exception
{
    protected int $status;
    protected array $headers;

    public function __construct(
        int $status,
        ?string $message = null,
        ?Throwable $previous = null,
        array $headers = [],
        int $code = 0
    ) {
        $this->status = $status;
        $this->headers = $headers;
        parent::__construct($message, $code, $previous);
    }
    /**
     * Get the HTTP status code.
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
    /**
     * Get the headers.
     *
     * @return array<string, string>
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }
}
