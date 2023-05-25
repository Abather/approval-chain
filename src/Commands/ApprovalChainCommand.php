<?php

namespace Abather\ApprovalChain\Commands;

use Illuminate\Console\Command;

class ApprovalChainCommand extends Command
{
    public $signature = 'approval-chain';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
