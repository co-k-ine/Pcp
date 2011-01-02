<?php

class FilmsController extends GxController {

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
			'model' => $this->loadModel($id, 'Films'),
		));
	}

	public function actionCreate() {
		$model = new Films;


		if (isset($_POST['Films'])) {
			$model->attributes = $_POST['Films'];
			$relatedData = array(
				'acteurs' => $_POST['Films']['acteurs'] === '' ? null : $_POST['Films']['acteurs'],
				'genres' => $_POST['Films']['genres'] === '' ? null : $_POST['Films']['genres'],
				'pays' => $_POST['Films']['pays'] === '' ? null : $_POST['Films']['pays'],
				'realisateurs' => $_POST['Films']['realisateurs'] === '' ? null : $_POST['Films']['realisateurs'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->idFilms));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Films');


		if (isset($_POST['Films'])) {
			$model->attributes = $_POST['Films'];
			$relatedData = array(
				'acteurs' => $_POST['Films']['acteurs'] === '' ? null : $_POST['Films']['acteurs'],
				'genres' => $_POST['Films']['genres'] === '' ? null : $_POST['Films']['genres'],
				'pays' => $_POST['Films']['pays'] === '' ? null : $_POST['Films']['pays'],
				'realisateurs' => $_POST['Films']['realisateurs'] === '' ? null : $_POST['Films']['realisateurs'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->idFilms));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'Films')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Films');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Films('search');
		$model->unsetAttributes();

		if (isset($_GET['Films']))
			$model->attributes = $_GET['Films'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}