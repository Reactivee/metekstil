<?php

use backend\modules\translatemanager\models\LanguageSource;
use backend\modules\translatemanager\models\LanguageTranslate;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $languageSource LanguageSource */
/* @var $languageTranslate LanguageTranslate */
?>
<div id="translate-manager-dialog">
    <div class="translate-manager-message">
        <div class="clearfix">
            <?php $form = ActiveForm::begin([
                'id' => 'transslate-manager-change-source-form',
                'action' => ['/translatemanager/language/message'],
            ]); ?>
            <?php echo $form->field($languageTranslate, 'id', ['enableLabel' => false])->hiddenInput(['name' => 'id', 'id' => 'language-source-id']) ?>
            <?php echo $form->field($languageTranslate, 'language')->dropDownList(array_merge([
                '' => Yii::t('language', 'Source'),
            ], $languageTranslate->getTranslatedLanguageNames()), [
                'name' => 'language_id',
                'id' => 'translate-manager-language-source',
            ])->label(Yii::t('language', 'Choosing the language of translation'))
            ?>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="clearfix">
            <?php echo Html::label(Yii::t('language', 'Text to be translated'), 'translate-manager-message') ?>
            <?php echo Html::textarea('translate-manager-message', $languageSource->message, ['readonly' => 'readonly', 'id' => 'translate-manager-message']) ?>
        </div>
    </div>

    <div class="translate-manager-message">
        <div class="clearfix">
            <?php $form = ActiveForm::begin([
                'id' => 'transslate-manager-translation-form',
                'method' => 'POST',
                'action' => ['/translatemanager/language/save'],
            ]); ?>
            <?php echo $form->field($languageTranslate, 'id', ['enableLabel' => false])->hiddenInput(['name' => 'id']) ?>
            <?php echo $form->field($languageTranslate, 'language', ['enableLabel' => false])->hiddenInput(['name' => 'language_id']) ?>
            <?php echo $form->field($languageTranslate, 'translation')->textarea(['name' => 'translation', 'class' => $languageTranslate->language]) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
