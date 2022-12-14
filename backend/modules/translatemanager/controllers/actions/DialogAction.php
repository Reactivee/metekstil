<?php

namespace backend\modules\translatemanager\controllers\actions;

use Yii;
use yii\base\Action;
use backend\modules\translatemanager\models\LanguageSource;
use backend\modules\translatemanager\models\LanguageTranslate;

/**
 * Class for creating front end translation dialoge box
 */
class DialogAction extends Action
{
    /**
     * Creating dialogue box.
     *
     * @return string
     */
    public function run()
    {
        $languageSource = LanguageSource::findOne([
            'category' => Yii::$app->request->post('category', ''),
            'MD5(message)' => Yii::$app->request->post('hash', ''),
        ]);

        if (!$languageSource) {
            return '<div id="translate-manager-error">'
                . Yii::t('language', 'Text not found in database! Please run project scan before translating!')
                . '</div>';
        }

        return $this->controller->renderPartial('dialog', [
            'languageSource' => $languageSource,
            'languageTranslate' => $this->_getTranslation($languageSource),
        ]);
    }

    /**
     * @param LanguageSource $languageSource
     *
     * @return LanguageTranslate
     */
    private function _getTranslation($languageSource)
    {
        $languageId = Yii::$app->request->post('language_id', '');
        $languageTranslate = $languageSource
            ->getLanguageTranslates()
            ->andWhere(['language' => $languageId])
            ->one();

        if (!$languageTranslate) {
            $languageTranslate = new LanguageTranslate([
                'id' => $languageSource->id,
                'language' => $languageId,
            ]);
        }

        return $languageTranslate;
    }
}
