<?php

namespace gulch\Assets\Renderer;

class PreloadWoff2Renderer extends GeneralRenderer
{
    protected const PATTERN = '<link rel="preload" href="%1$s" as="font" type="font/woff2">';
}
