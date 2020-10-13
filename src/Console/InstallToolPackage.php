<?php

namespace TinhPHP\Tool\Console;

use Illuminate\Console\Command;

class InstallToolPackage extends Command
{
    protected $signature = 'package_tool:install';

    protected $description = 'Install the Tool Package';

    public function handle()
    {
        $this->info('Installing Tool Package...');

        $this->info('Publishing configuration...');

        $this->call('vendor:publish', [
            '--provider' => "TinhPHP\Tool\ToolServiceProvider.php",
            '--tag' => 'config'
        ]);

        $this->info('Installed Tool Package');
    }
}
