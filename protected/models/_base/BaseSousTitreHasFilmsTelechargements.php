<?php

/**
 * This is the model base class for the table "sous_titre_has_Films_Telechargements".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "SousTitreHasFilmsTelechargements".
 *
 * Columns in table "sous_titre_has_Films_Telechargements" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $sous_titre_idsous_titre
 * @property integer $Films_Telechargements_idFilms_Telechargements
 *
 */
abstract class BaseSousTitreHasFilmsTelechargements extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'sous_titre_has_Films_Telechargements';
	}

	public static function representingColumn() {
		return array(
			'sous_titre_idsous_titre',
			'Films_Telechargements_idFilms_Telechargements',
		);
	}

	public function rules() {
		return array(
			array('sous_titre_idsous_titre, Films_Telechargements_idFilms_Telechargements', 'required'),
			array('sous_titre_idsous_titre, Films_Telechargements_idFilms_Telechargements', 'numerical', 'integerOnly'=>true),
			array('sous_titre_idsous_titre, Films_Telechargements_idFilms_Telechargements', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'sous_titre_idsous_titre' => Yii::t('app', 'Sous Titre Idsous Titre'),
			'Films_Telechargements_idFilms_Telechargements' => Yii::t('app', 'Films Telechargements Id Films Telechargements'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('sous_titre_idsous_titre', $this->sous_titre_idsous_titre);
		$criteria->compare('Films_Telechargements_idFilms_Telechargements', $this->Films_Telechargements_idFilms_Telechargements);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}