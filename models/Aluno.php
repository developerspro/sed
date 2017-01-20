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
 * @property Serie $idseriefk0
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
            [['nome', 'idseriefk'], 'required'],
            [['idseriefk'], 'integer'],
            [['nome'], 'string', 'max' => 100],
            [['idseriefk'], 'exist', 'skipOnError' => true, 'targetClass' => Serie::className(), 'targetAttribute' => ['idseriefk' => 'idserie']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdseriefk0()
    {
        return $this->hasOne(Serie::className(), ['idserie' => 'idseriefk']);
    }
}
