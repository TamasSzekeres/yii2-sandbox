<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <?php
            echo "hello<br>\n";
            $db = \Yii::$app->db;
            print_r($db->dbs);
            $db->open();
            $sd = $db->getSelectedDb();
            echo "<br>selectedDb=".($sd ? 'not null':'null')."\n";
        ?>
        
    </div>
</div>
