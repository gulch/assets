<?php

namespace gulch\Assets\Renderer;

use gulch\Assets\Contract\RendererInterface;

class AsyncJsRenderer implements RendererInterface
{
    public function render(array $assets): string
    {
        $result = '';

        foreach ($assets as $asset) {
            $result .= '<script async src="' . $asset . '"></script>';
        }

        return $result;
    }
}
