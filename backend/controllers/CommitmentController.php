<?php
/**
 * CommitmentController.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

namespace backend\controllers;

use Yii;
use backend\models\Commitment;
use backend\models\CommitmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Profile;
use backend\models\Application;
use backend\models\Job;
use backend\models\Team;

/**
 * CommitmentController implements the CRUD actions for Commitment model.
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $application_id
 * @property integer $team_id
 * @property integer $job_id
 * @property string $job_name
 * @property string $year
 * @property integer $hours
 * @property string $report
 * @property integer $reinvite
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property \backend\models\Application $application
 * @property \backend\models\Job $job
 * @property \backend\models\Profile $user
 * @property \backend\models\Team $team
 * @property string $aliasModel
 *
 * @property string $vollieName;
 */
class CommitmentController extends Controller
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
	 * Lists all Commitment models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		$searchModel = new CommitmentSearch();
		$searchModel->year = date('Y');
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		//$dataProvider->query->andWhere('year = YEAR(curdate())');

		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single Commitment model.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionView($id)
	{
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}

	/**
	 * Creates a new Commitment model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate($id)
	{
		$model = new Commitment();

		$model->application_id = $id;
		$application = Application::findOne($id);
		$profile = $application->user;
		$model->user_id = $profile->user_id;
		$model->year = gmdate('Y');

		/*
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		}
		else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
		*/

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			//return $this->redirect(['update', 'id' => $model->id]);
			return $this->redirect(['/application/update', 'id' => $model->id]);
		} else {
			return $this->render('create', [
				'model' => $model,
				'application' => $application,
				'profile' => $profile,
			]);
		}
	}

	/**
	 * Updates an existing Commitment model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		$model = $this->findModel($id);
		$application = $model->application;;
		$profile = $model->user;

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		}
		else {
			return $this->render('update', [
				'model' => $model,
				'application' => $application,
				'profile' => $profile,
			]);
		}

		/*
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
		*/
	}

	/**
	 * Deletes an existing Commitment model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDelete($id)
	{
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the Commitment model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Commitment the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = Commitment::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
