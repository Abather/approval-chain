<?php

namespace Abather\ApprovalChain\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abather\ApprovalChain\ApprovalChain
 */
class ApprovalChain extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Abather\ApprovalChain\ApprovalChain::class;
    }
}
