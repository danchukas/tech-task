<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class GetAbilityForAction extends \LibFunction
{

    public function run($action)
    {
        return $action->availableAbility;
    }

}