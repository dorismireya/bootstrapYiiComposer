<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sistema".
 *
 * @property integer $COD_SISTEMA
 * @property string $NOMBRE
 * @property string $TELEFONO
 * @property string $DIRECCION
 * @property string $FAX
 * @property string $EMAIL
 * @property string $CIUDAD
 * @property string $DETALLE
 * @property string $FECHA
 * @property string $TEMA
 * @property string $ESTADO
 */
class Sistema extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sistema';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FECHA'], 'safe'],
            [['TEMA'], 'required'],
            [['NOMBRE', 'EMAIL', 'CIUDAD', 'DETALLE'], 'string', 'max' => 100],
            [['TELEFONO', 'FAX'], 'string', 'max' => 20],
            [['DIRECCION'], 'string', 'max' => 500],
            [['TEMA'], 'string', 'max' => 300],
            [['ESTADO'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_SISTEMA' => 'Cod  Sistema',
            'NOMBRE' => 'Nombre',
            'TELEFONO' => 'Telefono',
            'DIRECCION' => 'Direccion',
            'FAX' => 'Fax',
            'EMAIL' => 'Email',
            'CIUDAD' => 'Ciudad',
            'DETALLE' => 'Detalle',
            'FECHA' => 'Fecha',
            'TEMA' => 'Tema',
            'ESTADO' => 'Estado',
        ];
    }
}
