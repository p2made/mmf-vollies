<?php

namespace frontend\controllers;

use Yii;
use common\models\Application;
use common\models\ApplicationSearch;
use common\models\Profile;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ApplicationController implements the CRUD actions for Application model.
 */
class ApplicationController extends Controller
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
	 * Lists all Application models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		$searchModel = new ApplicationSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single Application model.
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
	 * Creates a new Application model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		$id = Yii::$app->user->identity->id;

		$profile = $this->findProfile($id);

		$model = new Application();
		$model->user_id = $id;
		$model->year = gmdate('Y');

		if(isset($_POST['Profile'], $_POST['Application'])) {
			// populate input data to $profile & $model
			$profile->attributes = $_POST['Profile'];
			$model->attributes = $_POST['Application'];

			// validate BOTH $profile & $model
			$valid = $profile->validate();
			$valid = $model->validate() && $valid;

			if($valid) {
				// use false parameter to disable validation
				$profile->save(false);
				$model->save(false);
				$this->emailApplicant($model);
				return $this->redirect(['view', 'id' => $model->id]);
			}
		}

		return $this->render('create', [
			'profile' => $profile,
			'model' => $model,
		]);

		/*
		if ($model->load(Yii::$app->request->post()) && $model->save() && $profile->save()) {
			$this->emailApplicant($model);
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('create', [
				'model' => $model,
				'profile' => $profile,
			]);
		}
		*/
	}

	/**
	 * Updates an existing Application model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		if (!$model->preferredName) {
			$model->preferredName = $model->givenName;
		}
		if ($model->mmfVol == 1) {
			$model->vol = 1;
			$model->mmfAtt = 1;
		}

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Deletes an existing Application model.
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
	 * Finds the Application model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Application the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = Application::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}

	protected function findProfile($id)
	{
		if (($profile = Profile::findOne($id)) !== null) {
			return $profile;
		}

		$profile = new Profile();
		$profile->user_id = $id;
		$profile->state = 'Qld';
		$profile->country = 'Australia';
		//$profile->save();
		return $profile;
	}

	protected function emailApplicant($model)
	{
		Yii::$app->mailer->compose('application-complete', [
			'vollieName' => $model->preferredName,
			'jobChoices' => $model->jobChoices,
		])
			->setFrom('vollies@malenymusicfestival.com')
			->setTo(Yii::$app->user->identity->email)
			->setSubject('Maleny Music Festival 2017 Volunteer Application')
			->send();;
	}

}
