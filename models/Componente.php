<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "componente".
 *
 * @property string $idcomponente
 * @property string $descricao
 *
 * @property Alucom[] $alucoms
 */
class Componente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'componente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao'], 'required'],
            [['descricao'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcomponente' => 'Idcomponente',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlucoms()
    {
        return $this->hasMany(Alucom::className(), ['idcomponentefk' => 'idcomponente']);
    }
}
