<h4> Hello <strong>Admin</strong>, </h4>
<strong><?= $model->name ?></strong> is newly registered on Front Row Labs<br>
<?php if($model->image_web_filename){ ?>
<strong>Attached File : </strong> <?= Yii::$app->homeUrl. '/uploads/'.$model->image_web_filename ?>
<?php }else{ ?>
No any file attached
<?php } ?>