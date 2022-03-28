<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $idbooks
 * @property string $name
 * @property int $author
 * @property string|null $annotation
 * @property string|null $cover
 * @property float|null $price
 * @property string|null $date
 *
 * @property Authors $author0
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'author'], 'required'],
            [['author'], 'integer'],
            [['annotation'], 'string'],
            [['price'], 'number'],
            [['date'], 'safe'],
            [['name', 'cover'], 'string', 'max' => 255],
            [['author'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['author' => 'idauthors']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idbooks' => 'Idbooks',
            'name' => 'Name',
            'author' => 'Author',
            'annotation' => 'Annotation',
            'cover' => 'Cover',
            'price' => 'Price',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[Author0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(Authors::className(), ['idauthors' => 'author']);
    }
}
