<?php

namespace gulch\Assets\Renderer;

use gulch\Assets\Contract\RendererInterface;

class HeadCssRenderer implements RendererInterface
{
    public function render(array $assets): string
    {
        $result = '';

        foreach ($assets as $asset) {
            $result .= '<link href="' . $asset . '" rel="stylesheet" type="text/css">';
        }

        return $result;
    }
}
