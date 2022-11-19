<?php
declare(strict_types=1);

namespace Kemel91\HtmlParser\Entity;

class Tags implements \Countable
{
    private array $tags;

    public function __construct(array $tags)
    {
        $this->tags = $tags;
    }

    public function get(): array
    {
        return $this->tags;
    }

    public function unique(): array
    {
        return \array_unique($this->tags);
    }

    public function count(): int
    {
        return \count($this->tags);
    }

    public function __toString(): string
    {
        return \implode(', ', $this->get());
    }
}