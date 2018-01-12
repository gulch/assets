<?php

namespace gulch\Assets\Renderer;

use gulch\Assets\Contract\RendererInterface;

class JsRenderer implements RendererInterface
{
    public function render(array $assets): string
    {
        $result = '';

        foreach ($assets as $asset) {
            $result .= '<script src="' . $asset . '"></script>';
        }

        return $result;
    }
}
