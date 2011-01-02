<?php

class QualiterController extends GxController {

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
			'model' => $this->loadModel($id, 'Qualiter'),
		));
	}

	public function actionCreate() {
		$model = new Qualiter;


		if (isset($_POST['Qualiter'])) {
			$model->attributes = $_POST['Qualiter'];
			$relatedData = array(
				'filmsTelechargements' => $_POST['Qualiter']['filmsTelechargements'] === '' ? null : $_POST['Qualiter']['filmsTelechargements'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->idQualiter));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Qualiter');


		if (isset($_POST['Qualiter'])) {
			$model->attributes = $_POST['Qualiter'];
			$relatedData = array(
				'filmsTelechargements' => $_POST['Qualiter']['filmsTelechargements'] === '' ? null : $_POST['Qualiter']['filmsTelechargements'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->idQualiter));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'Qualiter')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Qualiter');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Qualiter('search');
		$model->unsetAttributes();

		if (isset($_GET['Qualiter']))
			$model->attributes = $_GET['Qualiter'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}