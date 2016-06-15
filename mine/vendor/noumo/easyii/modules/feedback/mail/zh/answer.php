<?php
$this->title = $subject;
?>
<p><?= nl2br($feedback->answer_text) ?></p>
<br/>
<br/>
<hr>
<p><?= Yii::$app->formatter->asDatetime($feedback->time, 'medium') ?> 你写道:</p>
<p>
    <?php foreach(explode("\n", $feedback->text) as $line) echo '> '.$line.'<br/>'; ?>
</p>