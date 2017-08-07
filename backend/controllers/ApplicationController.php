<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Application;
use backend\models\ApplicationSearch;
use backend\models\Profile;
use backend\models\Commitment;

/**
 * ApplicationController implements the CRUD actions for Application model.
 *
 * Model properties...
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $job_choice_1
 * @property integer $job_choice_2
 * @property integer $job_choice_3
 * @property string $year
 * @property string $availableFromDate
 * @property integer $availableFromTime
 * @property string $availableToDate
 * @property integer $availableToTime
 * @property integer $bestTime
 * @property string $availabilityNotes
 * @property integer $double
 * @property string $otherNotes
 * @property string $referee
 * @property string $refereeRelationship
 * @property string $refereePhone
 * @property string $bestCallingTime
 * @property integer $accepted
 * @property integer $team_id
 * @property integer $rejected
 * @property string $rejectedReason
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property \common\models\Job $jobChoice1
 * @property \common\models\Job $jobChoice2
 * @property \common\models\Job $jobChoice3
 * @property \common\models\Profile $user
 * @property string $aliasModel
 *
 * @property string $volunteerName;
 * @property string $preferredName;
 * @property string $jobPreference1;
 * @property string $jobPreference2 = 'none';
 * @property string $jobPreference3 = 'none';
 * @property string $availableFrom;
 * @property string $availableTo;
 * @property string $earlyLate;

 * @property string[] $jobChoices = [];
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
		$searchModel->year = date('Y');
		//$searchModel->status = 0;
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
		$model = $this->findModel($id);
		$profile = $model->user;
		$commitments = (count($profile->commitments > 0)
			? $profile->commitments
			: null
		);

		return $this->render('view', [
			'model'       => $model,
			'profile'     => $profile,
			'commitments' => $commitments,
		]);
	}

	/**
	 * Creates a new Application model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		$model = new Application();

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
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
		$profile = $model->user;
		$commitments = (count($profile->commitments > 0)
			? $profile->commitments
			: null
		);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('update', [
			'model'       => $model,
			'profile'     => $profile,
			'commitments' => $commitments,
		]);
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

	protected function actionMessage()
	{
		/*
		$applicants = Application::find()
			->where(['status' => 0])
			->orderBy('id')
			->all();

		foreach($applicants as $applicant) {
			$name = $applicant->preferredName;
			$email = $applicant->user->emailAddress;

			Yii::$app->mailer->compose('vollies-update', [
				'name' => $applicant->preferredName
			])->setTo($applicant->user->emailAddress)
				->setSubject('Maleny Music Festival 2017 Vollies Update')
				->send();
		}
		*/
		return $this->redirect(['index']);
	}

}
