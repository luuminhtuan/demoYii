<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property int $price
 * @property int $quantity
 * @property string $desc
 * @property string $content
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'image', 'desc', 'content', 'created_at', 'updated_at'], 'required'],
            [['price', 'quantity', 'status', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
            [['name', 'slug', 'image', 'desc'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'image' => 'Image',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'desc' => 'Desc',
            'content' => 'Content',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getProductByCatId($idCat){
        $data = Products::find()->asArray()->where('type=:catid', ['catid'=>$idCat])->all();
        return $data;
    }

    public function getProductAll(){
        return Products::find()->all();
    }
}
