<?php

Yii::import('application.models._base.BaseQualiter');

class Qualiter extends BaseQualiter
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}