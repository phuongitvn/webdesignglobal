<?php

class TransactionController extends BackendApplicationController {

	public function beforeAction($action) {
		$this->layout = Shop::module()->layout;
		return parent::beforeAction($action);
	}
	public function actionView($id) {
		$model = $this->loadModel($id, 'BackendShopOrderTransactionModel');
		$this->render('view', array(
			'model' => $model,
		));
	}

	public function actionCreate() {
		$model = new BackendShopOrderTransactionModel;


		if (isset($_POST['BackendShopOrderTransactionModel'])) {
			$model->setAttributes($_POST['BackendShopOrderTransactionModel']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'BackendShopOrderTransactionModel');


		if (isset($_POST['BackendShopOrderTransactionModel'])) {
			$model->setAttributes($_POST['BackendShopOrderTransactionModel']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'BackendShopOrderTransactionModel')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('BackendShopOrderTransactionModel');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new BackendShopOrderTransactionModel('search');
		$model->unsetAttributes();

		if (isset($_GET['BackendShopOrderTransactionModel']))
			$model->setAttributes($_GET['BackendShopOrderTransactionModel']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}