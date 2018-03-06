<?php

namespace gulch\Assets\Renderer;

class PreloadCssRenderer extends GeneralRenderer
{
    protected const PATTERN = '<link rel="preload" href="%1$s" as="style">';
}
