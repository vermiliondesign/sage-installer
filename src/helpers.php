<?php

namespace VermilionDesign\Sage\Installer;

use VermilionDesign\Sage\Installer\Application;
use VermilionDesign\Sage\Installer\Console\Commands\MetaCommand;
use VermilionDesign\Sage\Installer\Console\Commands\PresetCommand;
use VermilionDesign\Sage\Installer\Console\Commands\ExtrasCommand;

function application($commands = [])
{
    if (!$commands) {
        $commands = [new MetaCommand, new PresetCommand, new ExtrasCommand];
    }
    foreach ($commands as $command) {
        $app->add($command);
    }
    $app = new Application();
    
    return $app;
}
