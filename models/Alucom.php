<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alucom".
 *
 * @property string $idalucom
 * @property string $idalunofk
 * @property string $idcomponentefk
 * @property string $idprofessorfk
 * @property integer $nota
 * @property integer $bimestre
 *
 * @property Aluno $idalunofk0
 * @property Componente $idcomponentefk0
 * @property Professor $idprofessorfk0
 */
class Alucom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alucom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idalunofk','idcomponentefk','idprofessorfk','falta'],'required'],
            [['nota', 'bimestre','falta'], 'integer'],
            [['idalunofk'], 'exist', 'skipOnError' => true, 'targetClass' => Aluno::className(), 'targetAttribute' => ['idalunofk' => 'idaluno']],
            [['idcomponentefk'], 'exist', 'skipOnError' => true, 'targetClass' => Componente::className(), 'targetAttribute' => ['idcomponentefk' => 'idcomponente']],
            [['idprofessorfk'], 'exist', 'skipOnError' => true, 'targetClass' => Professor::className(), 'targetAttribute' => ['idprofessorfk' => 'idprofessor']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idalucom' => 'Idalucom',
            'idalunofk' => 'Aluno',
            'idcomponentefk' => 'Componente',
            'idprofessorfk' => 'Professor',
            'nota' => 'Nota',
            'bimestre' => 'Bimestre',
            'falta' =>'Falta'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdalunofk0()
    {
        return $this->hasOne(Aluno::className(), ['idaluno' => 'idalunofk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcomponentefk0()
    {
        return $this->hasOne(Componente::className(), ['idcomponente' => 'idcomponentefk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdprofessorfk0()
    {
        return $this->hasOne(Professor::className(), ['idprofessor' => 'idprofessorfk']);
    }
    
}
