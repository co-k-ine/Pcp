<?php

Yii::import('application.models._base.BaseActeursHasFilms');

class ActeursHasFilms extends BaseActeursHasFilms
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}