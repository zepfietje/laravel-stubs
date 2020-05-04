<?php

namespace ZepFietje\Stubs;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Symfony\Component\Finder\SplFileInfo;

class StubPublishCommand extends Command
{
    protected $signature = 'stub:publish {--force : Overwrite any existing files}';

    protected $description = 'Publish all stubs that are available for customization';

    public function handle(): void
    {
        if (! is_dir($stubsPath = $this->laravel->basePath('stubs'))) {
            (new Filesystem)->makeDirectory($stubsPath);
        }

        collect(File::files(__DIR__.'/../stubs'))->each(function (SplFileInfo $file) use ($stubsPath) {
            $from = $file->getPathname();
            $to = "$stubsPath/{$file->getFilename()}";

            if (! file_exists($to) || $this->option('force')) {
                file_put_contents($to, file_get_contents($from));
            }
        });

        $this->info('Stubs published successfully.');
    }
}
