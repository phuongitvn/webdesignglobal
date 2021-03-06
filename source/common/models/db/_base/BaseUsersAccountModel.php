<?php

/**
 * This is the model base class for the table "{{users_account}}".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "UsersAccountModel".
 *
 * Columns in table "{{users_account}}" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property string $email
 * @property string $address
 * @property integer $bonus
 * @property string $avatar
 * @property string $description
 * @property string $activkey
 * @property string $create_at
 * @property string $lastvisit_at
 * @property integer $usertype
 * @property integer $status
 *
 */
abstract class BaseUsersAccountModel extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{users_account}}';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'UsersAccountModel|UsersAccountModels', $n);
	}

	public static function representingColumn() {
		return 'username';
	}

	public function rules() {
		return array(
			array('username, password, email, address, create_at, lastvisit_at', 'required'),
			array('bonus, usertype, status', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>20),
			array('password, email, activkey', 'length', 'max'=>128),
			array('fullname, address, avatar', 'length', 'max'=>255),
			array('description', 'safe'),
			array('fullname, bonus, avatar, description, activkey, usertype, status', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, username, password, fullname, email, address, bonus, avatar, description, activkey, create_at, lastvisit_at, usertype, status', 'safe', 'on'=>'search'),
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
			'username' => Yii::t('app', 'Username'),
			'password' => Yii::t('app', 'Password'),
			'fullname' => Yii::t('app', 'Fullname'),
			'email' => Yii::t('app', 'Email'),
			'address' => Yii::t('app', 'Address'),
			'bonus' => Yii::t('app', 'Bonus'),
			'avatar' => Yii::t('app', 'Avatar'),
			'description' => Yii::t('app', 'Description'),
			'activkey' => Yii::t('app', 'Activkey'),
			'create_at' => Yii::t('app', 'Create At'),
			'lastvisit_at' => Yii::t('app', 'Lastvisit At'),
			'usertype' => Yii::t('app', 'Usertype'),
			'status' => Yii::t('app', 'Status'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('username', $this->username, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('fullname', $this->fullname, true);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('address', $this->address, true);
		$criteria->compare('bonus', $this->bonus);
		$criteria->compare('avatar', $this->avatar, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('activkey', $this->activkey, true);
		$criteria->compare('create_at', $this->create_at, true);
		$criteria->compare('lastvisit_at', $this->lastvisit_at, true);
		$criteria->compare('usertype', $this->usertype);
		$criteria->compare('status', $this->status);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}