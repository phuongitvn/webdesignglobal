<?php

/**
 * This is the model base class for the table "{{translates}}".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TranslatesModel".
 *
 * Columns in table "{{translates}}" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $table_name
 * @property integer $pri_id
 * @property string $trans_content
 * @property string $language
 * @property string $update_time
 * @property integer $published
 *
 */
abstract class BaseTranslatesModel extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{translates}}';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TranslatesModel|TranslatesModels', $n);
	}

	public static function representingColumn() {
		return 'table_name';
	}

	public function rules() {
		return array(
			array('pri_id, published', 'numerical', 'integerOnly'=>true),
			array('table_name', 'length', 'max'=>50),
			array('language', 'length', 'max'=>5),
			array('trans_content, update_time', 'safe'),
			array('table_name, pri_id, trans_content, language, update_time, published', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, table_name, pri_id, trans_content, language, update_time, published', 'safe', 'on'=>'search'),
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
			'id' => Yii::t('app', 'ID'),
			'table_name' => Yii::t('app', 'Table Name'),
			'pri_id' => Yii::t('app', 'Pri'),
			'trans_content' => Yii::t('app', 'Trans Content'),
			'language' => Yii::t('app', 'Language'),
			'update_time' => Yii::t('app', 'Update Time'),
			'published' => Yii::t('app', 'Published'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('table_name', $this->table_name, true);
		$criteria->compare('pri_id', $this->pri_id);
		$criteria->compare('trans_content', $this->trans_content, true);
		$criteria->compare('language', $this->language, true);
		$criteria->compare('update_time', $this->update_time, true);
		$criteria->compare('published', $this->published);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}