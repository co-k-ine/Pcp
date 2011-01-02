<?php

Yii::import('application.models._base.BaseGenresHasFilms');

class GenresHasFilms extends BaseGenresHasFilms
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}