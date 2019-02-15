<?php

namespace Vermilion\Sage\Installer\Presets;

class None extends Preset
{
    protected function updatePackagesArray(array $packages)
    {
        return $packages;
    }
}
