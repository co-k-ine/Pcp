<?php

class SousTitreController extends GxController {

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
			'model' => $this->loadModel($id, 'SousTitre'),
		));
	}

	public function actionCreate() {
		$model = new SousTitre;


		if (isset($_POST['SousTitre'])) {
			$model->attributes = $_POST['SousTitre'];
			$relatedData = array(
				'filmsTelechargements' => $_POST['SousTitre']['filmsTelechargements'] === '' ? null : $_POST['SousTitre']['filmsTelechargements'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->idsous_titre));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'SousTitre');


		if (isset($_POST['SousTitre'])) {
			$model->attributes = $_POST['SousTitre'];
			$relatedData = array(
				'filmsTelechargements' => $_POST['SousTitre']['filmsTelechargements'] === '' ? null : $_POST['SousTitre']['filmsTelechargements'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->idsous_titre));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'SousTitre')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('SousTitre');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new SousTitre('search');
		$model->unsetAttributes();

		if (isset($_GET['SousTitre']))
			$model->attributes = $_GET['SousTitre'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}