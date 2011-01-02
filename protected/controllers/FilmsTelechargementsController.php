<?php

class FilmsTelechargementsController extends GxController {

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
			'model' => $this->loadModel($id, 'FilmsTelechargements'),
		));
	}

	public function actionCreate() {
		$model = new FilmsTelechargements;


		if (isset($_POST['FilmsTelechargements'])) {
			$model->attributes = $_POST['FilmsTelechargements'];
			$relatedData = array(
				'decoupages' => $_POST['FilmsTelechargements']['decoupages'] === '' ? null : $_POST['FilmsTelechargements']['decoupages'],
				'hebergeures' => $_POST['FilmsTelechargements']['hebergeures'] === '' ? null : $_POST['FilmsTelechargements']['hebergeures'],
				'langues' => $_POST['FilmsTelechargements']['langues'] === '' ? null : $_POST['FilmsTelechargements']['langues'],
				'qualiters' => $_POST['FilmsTelechargements']['qualiters'] === '' ? null : $_POST['FilmsTelechargements']['qualiters'],
				'sousTitres' => $_POST['FilmsTelechargements']['sousTitres'] === '' ? null : $_POST['FilmsTelechargements']['sousTitres'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->idFilms_Telechargements));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'FilmsTelechargements');


		if (isset($_POST['FilmsTelechargements'])) {
			$model->attributes = $_POST['FilmsTelechargements'];
			$relatedData = array(
				'decoupages' => $_POST['FilmsTelechargements']['decoupages'] === '' ? null : $_POST['FilmsTelechargements']['decoupages'],
				'hebergeures' => $_POST['FilmsTelechargements']['hebergeures'] === '' ? null : $_POST['FilmsTelechargements']['hebergeures'],
				'langues' => $_POST['FilmsTelechargements']['langues'] === '' ? null : $_POST['FilmsTelechargements']['langues'],
				'qualiters' => $_POST['FilmsTelechargements']['qualiters'] === '' ? null : $_POST['FilmsTelechargements']['qualiters'],
				'sousTitres' => $_POST['FilmsTelechargements']['sousTitres'] === '' ? null : $_POST['FilmsTelechargements']['sousTitres'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->idFilms_Telechargements));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'FilmsTelechargements')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('FilmsTelechargements');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new FilmsTelechargements('search');
		$model->unsetAttributes();

		if (isset($_GET['FilmsTelechargements']))
			$model->attributes = $_GET['FilmsTelechargements'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}