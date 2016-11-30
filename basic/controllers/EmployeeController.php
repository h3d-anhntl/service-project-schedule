<?php
	namespace app\controllers;
 
	
	use app\models\Employee; 	
	use fproject\rest\ActiveController;
	use yii\db\ActiveQuery;

	class EmployeeController extends ActiveController
	{
		public $modelClass = 'app\models\Employee';
		
		/**
	     * Condition to find all resources with relations.
	     * Use '@findAllCondition' as the key for client-side condition
	     * @param array $params
	     * @return ActiveQuery
	     */
	    public function findAllCondition($params)
	    {
	        /** @var ActiveQuery $query */
	        $query = \Yii::createObject(ActiveQuery::className(), [$this->modelClass]);

	        return $query;
	    }
		
	}
?>
