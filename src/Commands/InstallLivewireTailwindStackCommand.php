<?php

namespace Ngfw\LaravelStack\Commands;

use Ngfw\LaravelStack\Installers\LivewireTailwindStackInstaller;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'install:livewire-tailwind')]
class InstallLivewireTailwindStackCommand extends BaseInstallCommand
{
    protected string $title = 'Laravel + Livewire + Tailwind CSS Stack';
    protected string $installerClass = LivewireTailwindStackInstaller::class;

}
