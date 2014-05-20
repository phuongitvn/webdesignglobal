<?php

/**
 * This is the model base class for the table "shop_customer".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ShopCustomerModel".
 *
 * Columns in table "shop_customer" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $customer_id
 * @property integer $user_id
 * @property integer $address_id
 * @property integer $delivery_address_id
 * @property integer $billing_address_id
 * @property string $email
 *
 */
abstract class BaseShopCustomerModel extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'shop_customer';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ShopCustomerModel|ShopCustomerModels', $n);
	}

	public static function representingColumn() {
		return 'email';
	}

	public function rules() {
		return array(
			array('address_id, delivery_address_id, billing_address_id, email', 'required'),
			array('user_id, address_id, delivery_address_id, billing_address_id', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>45),
			array('user_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('customer_id, user_id, address_id, delivery_address_id, billing_address_id, email', 'safe', 'on'=>'search'),
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
			'customer_id' => Yii::t('app', 'Customer'),
			'user_id' => Yii::t('app', 'User'),
			'address_id' => Yii::t('app', 'Address'),
			'delivery_address_id' => Yii::t('app', 'Delivery Address'),
			'billing_address_id' => Yii::t('app', 'Billing Address'),
			'email' => Yii::t('app', 'Email'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('customer_id', $this->customer_id);
		$criteria->compare('user_id', $this->user_id);
		$criteria->compare('address_id', $this->address_id);
		$criteria->compare('delivery_address_id', $this->delivery_address_id);
		$criteria->compare('billing_address_id', $this->billing_address_id);
		$criteria->compare('email', $this->email, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}