<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "serie".
 *
 * @property string $idserie
 * @property string $descricao
 *
 * @property Aluno[] $alunos
 */
class Serie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'serie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao'], 'required'],
            [['descricao'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idserie' => 'Idserie',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunos()
    {
        return $this->hasMany(Aluno::className(), ['idseriefk' => 'idserie']);
    }
}
