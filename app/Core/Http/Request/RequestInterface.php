<?php

namespace App\Core\Http\Request;

interface RequestInterface
{
    public function uri(): string;
    public function method(): string;
    public function input(string $key, $default = null): mixed;
    public function validate(array $rules): bool;
    public function errors(): array;
}