<?php

namespace gulch\Assets\Renderer;

use gulch\Assets\Contract\RendererInterface;

class DeferJsRenderer implements RendererInterface
{
    public function render(array $assets): string
    {
        $result = '';

        foreach ($assets as $asset) {
            $result .= '<script defer src="' . $asset . '"></script>';
        }

        return $result;
    }
}
