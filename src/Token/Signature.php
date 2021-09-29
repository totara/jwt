<?php
declare(strict_types=1);

namespace Lcobucci\JWT\Token;

final class Signature
{
    /** @var string */
    private $hash;
    /** @var string */
    private $encoded;

    public function __construct(string $hash, string $encoded)
    {
        $this->hash    = $hash;
        $this->encoded = $encoded;
    }

    public static function fromEmptyData(): self
    {
        return new self('', '');
    }

    public function hash(): string
    {
        return $this->hash;
    }

    /**
     * Returns the encoded version of the signature
     */
    public function toString(): string
    {
        return $this->encoded;
    }
}
