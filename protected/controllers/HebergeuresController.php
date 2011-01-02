<?php

class HebergeuresController extends GxController {

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
			'model' => $this->loadModel($id, 'Hebergeures'),
		));
	}

	public function actionCreate() {
		$model = new Hebergeures;


		if (isset($_POST['Hebergeures'])) {
			$model->attributes = $_POST['Hebergeures'];
			$relatedData = array(
				'filmsTelechargements' => $_POST['Hebergeures']['filmsTelechargements'] === '' ? null : $_POST['Hebergeures']['filmsTelechargements'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->idHebergeures));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Hebergeures');


		if (isset($_POST['Hebergeures'])) {
			$model->attributes = $_POST['Hebergeures'];
			$relatedData = array(
				'filmsTelechargements' => $_POST['Hebergeures']['filmsTelechargements'] === '' ? null : $_POST['Hebergeures']['filmsTelechargements'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->idHebergeures));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'Hebergeures')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Hebergeures');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Hebergeures('search');
		$model->unsetAttributes();

		if (isset($_GET['Hebergeures']))
			$model->attributes = $_GET['Hebergeures'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}