<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property string $idaluno
 * @property string $nome
 * @property string $idseriefk
 *
 * @property Alucom[] $alucoms
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idaluno' => 'Idaluno',
            'nome' => 'Nome',
            'idseriefk' => 'Idseriefk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlucoms()
    {
        return $this->hasMany(Alucom::className(), ['idalunofk' => 'idaluno']);
    }
}
