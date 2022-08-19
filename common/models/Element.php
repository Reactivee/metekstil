<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "element".
 *
 * @property int $id
 * @property int|null $product_id
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $title_en
 * @property string|null $desc_en
 * @property string|null $desc_uz
 * @property string|null $desc_ru
 * @property int|null $fat_element_id
 * @property string|null $img
 * @property string|null $slug
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Element extends \yii\db\ActiveRecord
{
    public $uploaded_images;
    public $deleted_images;
    public $sorted_images;
    public $top_element;
    const NOACTIVE = 0;
    const ACTIVE = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'element';
    }

    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'skeeks\yii2\slug\SlugBehavior',
                'slugAttribute' => 'slug',                      //The attribute to be generated
                'attribute' => 'title_ru',                //The attribute from which will be generated
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
            [['product_id', 'created_at', 'updated_at'], 'integer'],
            [['desc_en', 'desc_uz', 'desc_ru'], 'string'],
            [['uploaded_images', 'deleted_images', 'sorted_images', 'top_element', 'fat_element_id'], 'safe'],
            [['product_id', 'title_ru', 'title_uz', 'title_en',], 'required'],
            [['title_ru', 'title_uz', 'title_en', 'img', 'slug'], 'string', 'max' => 255],
        ];

    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'title_ru' => 'Title Ru',
            'title_uz' => 'Title Uz',
            'title_en' => 'Title En',
            'desc_en' => 'Desc En',
            'desc_uz' => 'Desc Uz',
            'desc_ru' => 'Desc Ru',
            'img' => 'Img',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function saveImages()
    {
        $images = $this['uploaded_images'];
        $re_images = json_decode($images);
        if ($images) {

            foreach ($re_images as $file) {

                $pr_iMagEs = new ElementImages();
                $pr_iMagEs->element_id = $this->id;
                $pr_iMagEs->path = $file->path;
                $pr_iMagEs->name = $file->generate_name;
                $pr_iMagEs->save();

            }
        }
    }

    public function getImage()
    {

        return $this->hasOne(ElementImages::className(), ['element_id' => 'id']);
    }

    public function getImages()
    {

        return $this->hasMany(ElementImages::className(), ['element_id' => 'id']);
    }

    public function getProducts()
    {
        $prod = Product::find()->all();
        return ArrayHelper::map($prod, 'id', 'title_en');
    }

    public function getElements()
    {
        $prod = Element::find()->all();
        return ArrayHelper::map($prod, 'id', 'title_en');
    }

    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    public function getSubElement()
    {
        return $this->hasOne(SubElement::className(), ['element_id' => 'id']);
    }

    public function getOption()
    {
        return $this->hasMany(OptionsProduct::className(), ['product_id' => 'id']);
    }

    public static function getStatus($status = null)
    {

        $array = [
            self::NOACTIVE => 'NoActive',
            self::ACTIVE => 'Active',
        ];

        return $status === null ? $array : $array[$status];
    }
}
