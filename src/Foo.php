<?php

namespace Azenox;

class Foo
{
    public string $name = 'foo';

    /**
     * @return string
     */
    public function bar(): string
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return string
     */
    public function uppercase($name): string
    {
        return strtoupper($name);
    }
}