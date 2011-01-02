<?php

Yii::import('application.models._base.BaseFilms');

class Films extends BaseFilms
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}