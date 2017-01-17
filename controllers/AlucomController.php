<?php

namespace app\controllers;

use Yii;
use app\models\Alucom;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\AlucomSearch;

/**
 * AlucomController implements the CRUD actions for Alucom model.
 */
class AlucomController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Alucom models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Alucom::find()->select('alucom.idalucom,aluno.nome as idalunofk,componente.descricao as idcomponentefk,professor.nome as idprofessorfk,serie.descricao as serie, nota, bimestre')->
                join('inner join','aluno','aluno.idaluno=idalunofk')->
                join('inner join','componente','componente.idcomponente=idcomponentefk')->
                join('inner join','professor','professor.idprofessor=idprofessorfk')->
                join('inner join','serie','serie.idserie=aluno.idseriefk')
        
            
        ]);  
                $searchModel = new AlucomSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
// echo var_dump($dataProvider);
        
//         $query = UserWithRoles::find()
//        ->select("user.id,user.username,user.created_at,GROUP_CONCAT(auth_assignment.item_name ORDER BY auth_assignment.item_name SEPARATOR '<br>') as roles")
//        ->join('LEFT OUTER JOIN','auth_assignment','auth_assignment.user_id = user.id')
//        ->join('INNER JOIN','auth_item',' auth_item.name = auth_assignment.item_name AND auth_item.TYPE = 1')
//        ->groupBy('user.id,user.username,user.created_at'

        return $this->render('index', [
            'dataProvider' => $dataProvider,
             'searchModel' => $searchModel, 
        ]);
       
    }

    /**
     * Displays a single Alucom model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Alucom model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Alucom();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idalucom]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Alucom model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idalucom]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Alucom model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Alucom model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Alucom the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Alucom::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
