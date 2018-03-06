<?php

namespace gulch\Assets\Renderer;

class PreloadJsRenderer extends GeneralRenderer
{
    protected const PATTERN = '<link rel="preload" href="%1$s" as="script">';
}
