<?php

class PaysController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions'=>array('index','view'),
				'users'=>array('*'),
				),
			array('allow', 
				'actions'=>array('minicreate', 'create','update'),
				'users'=>array('@'),
				),
			array('allow', 
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
				),
			array('deny', 
				'users'=>array('*'),
				),
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Pays'),
		));
	}

	public function actionCreate() {
		$model = new Pays;


		if (isset($_POST['Pays'])) {
			$model->attributes = $_POST['Pays'];
			$relatedData = array(
				'films' => $_POST['Pays']['films'] === '' ? null : $_POST['Pays']['films'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->idPays));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Pays');


		if (isset($_POST['Pays'])) {
			$model->attributes = $_POST['Pays'];
			$relatedData = array(
				'films' => $_POST['Pays']['films'] === '' ? null : $_POST['Pays']['films'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->idPays));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'Pays')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Pays');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Pays('search');
		$model->unsetAttributes();

		if (isset($_GET['Pays']))
			$model->attributes = $_GET['Pays'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}