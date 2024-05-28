<?php

namespace Jorjika\Payonce\Commands;

use Illuminate\Console\Command;

class PayonceCommand extends Command
{
    public $signature = 'payonce';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
