<?php
declare(strict_types=1);

namespace Kemel91\HtmlParser\Entity;

class Tags implements \Countable
{
    private array $items;

    public function __construct(array $tags)
    {
        $this->items = $tags;
    }

    public function all(): array
    {
        return $this->items;
    }

    public function unique(): array
    {
        return \array_unique($this->items);
    }

    /**
     * @return array{string, int}
     */
    public function groupInKeys(): array
    {
        $array = [];
        foreach ($this->all() as $tag) {
            $array[$tag] = isset($array[$tag]) ? ++$array[$tag] : 1;
        }

        return $array;
    }

    public function count(): int
    {
        return \count($this->items);
    }

    public function __toString(): string
    {
        return \implode(', ', $this->all());
    }
}