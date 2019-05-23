<?php

namespace common\modules\tries\controllers;

use yii\console\Controller;

/**
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
class ConsoleController extends Controller
{
    public function actions ()
    {
        return [
            'keccak' => actions\console\KeccakAction::class,
        ];
    }
}