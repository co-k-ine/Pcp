<?php

class LanguesController extends GxController {

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
			'model' => $this->loadModel($id, 'Langues'),
		));
	}

	public function actionCreate() {
		$model = new Langues;


		if (isset($_POST['Langues'])) {
			$model->attributes = $_POST['Langues'];
			$relatedData = array(
				'filmsTelechargements' => $_POST['Langues']['filmsTelechargements'] === '' ? null : $_POST['Langues']['filmsTelechargements'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->idLangues));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Langues');


		if (isset($_POST['Langues'])) {
			$model->attributes = $_POST['Langues'];
			$relatedData = array(
				'filmsTelechargements' => $_POST['Langues']['filmsTelechargements'] === '' ? null : $_POST['Langues']['filmsTelechargements'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->idLangues));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'Langues')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Langues');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Langues('search');
		$model->unsetAttributes();

		if (isset($_GET['Langues']))
			$model->attributes = $_GET['Langues'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}