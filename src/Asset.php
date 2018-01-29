<?php

namespace gulch\Assets;

use gulch\Assets\Contract\RendererInterface;

class Asset
{
    /** @var RendererInterface */
    private $renderer;

    /** @var array */
    private $assets = [];

    public function __construct(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function add(string $asset): self
    {
        if (!$this->isExists($asset)) {
            $this->assets[] = $asset;
        }

        return $this;
    }

    public function write(): string
    {
        return $this->renderer->render($this->assets);
    }

    public function __toString()
    {
        return $this->write();
    }

    private function isExists(string $asset): bool
    {
        return \in_array($asset, $this->assets, true);
    }
}
