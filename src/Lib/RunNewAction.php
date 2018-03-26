<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class RunNewAction extends \LibFunction
{

    public function run($action_class, $run_param): void
    {
        $action = $this->lib->base->createFunctionalObject($action_class);
        $action->runParam = $run_param;
        $this->lib->runAction($action);
    }

}