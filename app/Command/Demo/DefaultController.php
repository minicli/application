<?php

namespace App\Command\Demo;

use Minicli\Command\CommandController;

class DefaultController extends CommandController
{
    public function handle(): void
    {
        $this->info('Run ./minicli help for usage help.');
    }
}
