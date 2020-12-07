<?php

namespace TinhPHP\Tool\Console;

use App\Models\Plugin;
use Carbon\Carbon;
use Illuminate\Console\Command;

class InstallToolPackage extends Command
{
    protected $signature = 'package_tool:install';

    protected $description = 'Install the Tool Package';

    public function handle()
    {
        $this->info('Installing Tool Package...');

        Plugin::query()->updateOrInsert(
            [
                'code' => 'tool',
            ],
            [
                'version' => '1.0.1',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]
        );

        $this->info('Publishing configuration...');

        $this->call('vendor:publish', [
            '--provider' => "TinhPHP\Tool\ToolServiceProvider",
            '--tag' => 'config'
        ]);

        $this->info('Installed Tool Package');
    }
}
