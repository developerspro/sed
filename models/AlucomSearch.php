<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alucom;

/**
 * AlucomSearch represents the model behind the search form about `app\models\Alucom`.
 */
class AlucomSearch extends Alucom
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idalucom', 'idalunofk', 'idcomponentefk', 'idprofessorfk', 'nota', 'bimestre'], 'integer'],
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
        $query = Alucom::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query]);
//            'query' => Alucom::find()->select('alucom.idalucom,aluno.nome as idalunofk,componente.descricao as idcomponentefk,professor.nome as idprofessorfk,serie.descricao as serie, nota, bimestre')->
//                join('inner join','aluno','aluno.idaluno=idalunofk')->
//                join('inner join','componente','componente.idcomponente=idcomponentefk')->
//                join('inner join','professor','professor.idprofessor=idprofessorfk')->
//                join('inner join','serie','serie.idserie=aluno.idseriefk')
//        ]);
  
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
//        $query->andFilterWhere([
//            
//            'idalucom' => $this->idalucom,
//            'idalunofk' => $this->idalunofk0->nome,
////            'idcomponentefk' => $this->idcomponentefk,
////            'idprofessorfk' => $this->idprofessorfk,
//            'nota' => $this->nota,
//            'bimestre' => $this->bimestre,
//        ]);
        //var_dump($query);die;
        return $dataProvider;
    }
}
