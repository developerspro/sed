<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $idusuario
 * @property string $usuario
 * @property string $senha
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario', 'senha'], 'required'],
            [['usuario'], 'string', 'max' => 50],
            [['senha'], 'string', 'max' => 16],
        ];
      
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idusuario' => 'Idusuario',
            'usuario' => 'Usuario',
            'senha' => 'Senha',
        ];
    }
      
      
    }
