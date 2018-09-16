<?php

namespace common\modules\tries\controllers\actions\console;

use yii\base\Action;

use common\lib\Keccak;

/**
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
class KeccakAction extends Action
{
    /**
     * @param string $input [Required]
     */
    public function run(string $input = '')
    {
        $hash = Keccak::hash("transfer(address,uint256)", 256);
        $this->controller->stdout("Keccak: $hash\n");
    }
}