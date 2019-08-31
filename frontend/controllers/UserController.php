<?php

namespace frontend\controllers;

use yii\rest\ActiveController;

/**
 * @author Tamás Szekeres <szektam2@gmail.com>
 */
class UserController extends ActiveController
{
    public $modelClass = 'common\models\User';
}