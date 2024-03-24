<?php

declare(strict_types=1);

namespace Potter\Link;

use \Psr\Link\LinkInterface as PsrLinkInterface;

interface LinkInterface extends PsrLinkInterface
{
    public function getHref(): string;
    public function hasHref(): bool;
    public function isTemplated(): bool;
    public function getRels(): array;
    public function hasRel(string $rel): bool;
    public function getAttributes(): array;
    public function hasAttribute(string $key): bool;
}