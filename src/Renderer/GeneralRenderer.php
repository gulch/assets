<?php

namespace gulch\Assets\Renderer;

use gulch\Assets\Contract\RendererInterface;

abstract class GeneralRenderer implements RendererInterface
{
    public function render(array $assets): string
    {
        $result = '';

        foreach ($assets as $asset) {
            $result .= \sprintf(static::PATTERN, $asset);
        }

        return $result;
    }
}
