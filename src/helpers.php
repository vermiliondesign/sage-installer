<?php

namespace Vermilion\Sage\Installer;

use Vermilion\Sage\Installer\Application;
use Vermilion\Sage\Installer\Console\Commands\MetaCommand;
use Vermilion\Sage\Installer\Console\Commands\PresetCommand;
use Vermilion\Sage\Installer\Console\Commands\ExtrasCommand;

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
