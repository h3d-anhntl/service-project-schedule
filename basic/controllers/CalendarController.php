<?php
	namespace app\controllers;
 
	
	use app\models\Calendar; 	
	use fproject\rest\ActiveController;
	use yii\db\ActiveQuery;
	
	class CalendarController extends ActiveController
	{
		public $modelClass = 'app\models\Calendar';

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