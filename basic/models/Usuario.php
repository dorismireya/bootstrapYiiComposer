<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $COD_USUARIO
 * @property string $CI
 * @property string $NOMBRE
 * @property string $APELLIDO
 * @property string $DIRECCION
 * @property string $TELEFONO
 * @property string $CELULAR
 * @property string $EMAIL
 * @property string $LOGIN
 * @property string $PASSWORD
 * @property string $ESTADO
 * @property integer $COD_ROL
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
            [['LOGIN', 'PASSWORD', 'COD_ROL'], 'required'],
            [['COD_ROL'], 'integer'],
            [['CI', 'TELEFONO', 'ESTADO'], 'string', 'max' => 10],
            [['NOMBRE', 'APELLIDO', 'EMAIL', 'LOGIN', 'PASSWORD'], 'string', 'max' => 100],
            [['DIRECCION'], 'string', 'max' => 500],
            [['CELULAR'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_USUARIO' => 'Cod  Usuario',
            'CI' => 'Ci',
            'NOMBRE' => 'Nombre',
            'APELLIDO' => 'Apellido',
            'DIRECCION' => 'Direccion',
            'TELEFONO' => 'Telefono',
            'CELULAR' => 'Celular',
            'EMAIL' => 'Email',
            'LOGIN' => 'Login',
            'PASSWORD' => 'Password',
            'ESTADO' => 'Estado',
            'COD_ROL' => 'Cod  Rol',
        ];
    }
}
