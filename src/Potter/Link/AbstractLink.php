<?php

declare(strict_types=1);

namespace Potter\Link;

abstract class AbstractLink extends LinkInterface
{
    abstract public function getHref(): string;
    abstract public function hasHref(): bool;
    abstract protected function setHref(string $href): void;
    abstract public function isTemplated(): bool;
    abstract protected function setTemplated(bool $templated): void;
    abstract public function getRels(): array;
    abstract public function hasRel(string $rel): bool;
    abstract protected function setRels(array $rels): void;
    abstract public function getAttributes(): array;
    abstract public function hasAttribute(string $key): bool;
    abstract protected function setAttributes(array $attributes): void;
}