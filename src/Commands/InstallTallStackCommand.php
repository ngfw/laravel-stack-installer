<?php
namespace Ngfw\LaravelStack\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Ngfw\LaravelStack\Installers\TallStackInstaller;

#[AsCommand(name: 'install:tall-stack')]
class InstallTallStackCommand extends BaseInstallCommand
{
    protected string $title = "TALL Stack";
    protected string $installerClass = TallStackInstaller::class;

    protected function configure()
    {
        $this->setDescription(sprintf(
            'Installs the %s (Laravel 11, AlpineJS, TailwindCSS, Livewire, Filament)',
            $this->title
        ));
    }
}