<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rol".
 *
 * @property integer $COD_ROL
 * @property string $ROL
 * @property string $DETALLE
 * @property string $ESTADO
 * @property integer $COD_SISTEMA
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_SISTEMA'], 'required'],
            [['COD_SISTEMA'], 'integer'],
            [['ROL'], 'string', 'max' => 50],
            [['DETALLE'], 'string', 'max' => 100],
            [['ESTADO'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_ROL' => 'Cod  Rol',
            'ROL' => 'Rol',
            'DETALLE' => 'Detalle',
            'ESTADO' => 'Estado',
            'COD_SISTEMA' => 'Cod  Sistema',
        ];
    }
}
