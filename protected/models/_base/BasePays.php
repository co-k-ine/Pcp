<?php

/**
 * This is the model base class for the table "Pays".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Pays".
 *
 * Columns in table "Pays" available as properties of the model,
 * followed by relations of table "Pays" available as properties of the model.
 *
 * @property integer $idPays
 * @property string $PaysNom
 *
 * @property Films[] $films
 */
abstract class BasePays extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'Pays';
	}

	public static function representingColumn() {
		return 'PaysNom';
	}

	public function rules() {
		return array(
			array('PaysNom', 'length', 'max'=>50),
			array('PaysNom', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idPays, PaysNom', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'films' => array(self::MANY_MANY, 'Films', 'Pays_has_Films(Pays_idPays, Films_idFilms)'),
		);
	}

	public function pivotModels() {
		return array(
			'films' => 'PaysHasFilms',
		);
	}

	public function attributeLabels() {
		return array(
			'idPays' => Yii::t('app', 'Id Pays'),
			'PaysNom' => Yii::t('app', 'Pays Nom'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idPays', $this->idPays);
		$criteria->compare('PaysNom', $this->PaysNom, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}