<?php
/* @var $this yii\web\View */
?>
<h1><?
    if(!isset($all))
        echo $res['title'];
    else
        echo "Новости";

    ?></h1>

<p>
    <pre>
        <?php print_r($res);?>
    </pre>
</p>
