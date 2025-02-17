<?php

namespace KingOfWebDesigns\LaravelXpos\Commands;

use Illuminate\Console\Command;

class LaravelXposCommand extends Command
{
    public $signature = 'laravel-xpos';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
