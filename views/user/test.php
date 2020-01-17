 <?= $form->field($model, 'password')->passwordInput(['maxlength' => true])->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'authKey')->textInput(['maxlength' => true])->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'accessToken')->textInput(['maxlength' => true])->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'rememberMe')->textInput()->hiddenInput()->label(false) ?>
