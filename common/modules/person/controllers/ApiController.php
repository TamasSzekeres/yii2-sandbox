<?php

namespace common\modules\person\controllers;

use yii\rest\ActiveController;

use common\modules\person\models\Person;

/**
 * @author Tamás Szekeres <szektam2@gmail.com>
 */
class ApiController extends ActiveController
{
    public $modelClass = Person::class;
}