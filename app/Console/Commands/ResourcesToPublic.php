<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CopyAssets extends Command
{
    protected $signature = 'assets:copy';

    protected $description = 'Copy CSS and JS assets to public folder';

    public function handle()
    {
        $publicPath = public_path();
        $resourcesPath = resource_path();

        $this->copyDirectory($resourcesPath . '/css', $publicPath . '/css');
        $this->copyDirectory($resourcesPath . '/js', $publicPath . '/js');

        $this->info('Assets copied successfully!');
    }

    private function copyDirectory($source, $destination)
    {
        if (!File::isDirectory($destination)) {
            File::makeDirectory($destination, 0755, true);
        }

        $files = File::allFiles($source);

        foreach ($files as $file) {
            File::copy($file->getPathname(), $destination . '/' . $file->getFilename());
        }
    }
}
