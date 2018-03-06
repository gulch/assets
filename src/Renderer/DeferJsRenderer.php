<?php

namespace gulch\Assets\Renderer;

class DeferJsRenderer extends GeneralRenderer
{
    protected const PATTERN = '<script defer src="%1$s"></script>';
}
