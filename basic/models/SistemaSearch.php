<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sistema;

/**
 * SistemaSearch represents the model behind the search form about `app\models\Sistema`.
 */
class SistemaSearch extends Sistema
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_SISTEMA'], 'integer'],
            [['NOMBRE', 'TELEFONO', 'DIRECCION', 'FAX', 'EMAIL', 'CIUDAD', 'DETALLE', 'FECHA', 'TEMA', 'ESTADO'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Sistema::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'COD_SISTEMA' => $this->COD_SISTEMA,
            'FECHA' => $this->FECHA,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE', $this->NOMBRE])
            ->andFilterWhere(['like', 'TELEFONO', $this->TELEFONO])
            ->andFilterWhere(['like', 'DIRECCION', $this->DIRECCION])
            ->andFilterWhere(['like', 'FAX', $this->FAX])
            ->andFilterWhere(['like', 'EMAIL', $this->EMAIL])
            ->andFilterWhere(['like', 'CIUDAD', $this->CIUDAD])
            ->andFilterWhere(['like', 'DETALLE', $this->DETALLE])
            ->andFilterWhere(['like', 'TEMA', $this->TEMA])
            ->andFilterWhere(['like', 'ESTADO', $this->ESTADO]);

        return $dataProvider;
    }
}
