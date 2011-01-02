<?php

class GenresController extends GxController {

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
			'model' => $this->loadModel($id, 'Genres'),
		));
	}

	public function actionCreate() {
		$model = new Genres;


		if (isset($_POST['Genres'])) {
			$model->attributes = $_POST['Genres'];
			$relatedData = array(
				'films' => $_POST['Genres']['films'] === '' ? null : $_POST['Genres']['films'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->idGenres));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Genres');


		if (isset($_POST['Genres'])) {
			$model->attributes = $_POST['Genres'];
			$relatedData = array(
				'films' => $_POST['Genres']['films'] === '' ? null : $_POST['Genres']['films'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->idGenres));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'Genres')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Genres');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Genres('search');
		$model->unsetAttributes();

		if (isset($_GET['Genres']))
			$model->attributes = $_GET['Genres'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}