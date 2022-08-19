<?php

namespace common\models;

use phpDocumentor\Reflection\Types\This;
use Yii;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property int|null $category_id
 * @property string|null $slug
 * @property string|null $image
 * @property string|null $type
 * @property string|null $desc
 */
class Product extends \yii\db\ActiveRecord
{
    public $uploaded_images;
    public $deleted_images;
    public $sorted_images;
    public $options;

    const NO_ACTIVE = 0;
    const ACTIVE = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'skeeks\yii2\slug\SlugBehavior',
                'slugAttribute' => 'slug',                      //The attribute to be generated
                'attribute' => 'title_en',                //The attribute from which will be generated
                // optional params
                'maxLength' => 64,                              //Maximum length of attribute slug
                'minLength' => 3,                               //Min length of attribute slug
                'ensureUnique' => true,
                'slugifyOptions' => [
                    'lowercase' => true,
                    'separator' => '_',
                    'trim' => true

                ]
            ]
        ];

    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'category_id'], 'required'],
            [['status', 'uploaded_images', 'deleted_images', 'slug', 'sorted_images', 'image', 'desc'], 'safe'],
            [['title_uz', 'title_ru', 'title_en', 'slug', 'type',], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'category_id' => Yii::t('app', 'Category ID'),
            'slug' => Yii::t('app', 'Slug'),
            'image' => Yii::t('app', 'Image'),
            'type' => Yii::t('app', 'Type'),
            'desc' => Yii::t('app', 'Desc'),
        ];
    }

    public function getCategoryAll()
    {
        $cats = Category::find()->all();
        $id = ArrayHelper::map($cats, 'id', 'name_ru');
        return $id;
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getSort()
    {
        return $this->hasOne(Sorts::className(), ['id' => 'type']);
    }

    public function getSortsAll()
    {
        $cats = Sorts::find()->all();
        $id = ArrayHelper::map($cats, 'id', 'title_ru');
        return $id;
    }

    public function saveImages()
    {
        $images = $this['uploaded_images'];
        $re_images = json_decode($images);
        if ($images) {

            foreach ($re_images as $file) {

                $pr_iMagEs = new ProductImages();
                $pr_iMagEs->product_id = $this->id;
                $pr_iMagEs->path = $file->path;
                $pr_iMagEs->name = $file->generate_name;
                $pr_iMagEs->save();

            }
        }
    }

    public function getImg()
    {
        return $this->hasOne(ProductImages::className(), ['product_id' => 'id']);
    }

    public function getImgs()
    {
        return $this->hasMany(ProductImages::className(), ['product_id' => 'id']);
    }

    public function getOption()
    {
        return $this->hasMany(OptionsProduct::className(), ['product_id' => 'id']);
    }

}
