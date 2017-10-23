<?php
namespace app\modules\menu\components;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use app\modules\menu\models\Menu;

class BlockMenu
{
	public static function main($type = 1, $lang_id = 1)
	{
		$return = '';
		
		$menu = Menu::find()->where(['status' => 1, 'parent_id' => 0, 'lang_id' => $lang_id])->orderBy('weight')->all();
		
		/* if(Yii::$app->user->can('adminPanel'))
		{
			$return .= '<p class="edit-link">';
			$return .= Html::a('<span class="glyphicon glyphicon-pencil" aria-hidden="true">', '/admin/menu', ['target' => '_blank', 'title' => 'Редактировать']);
			$return .= '</p>';
		} */
		
		if($menu)
		{
			foreach($menu as $key => $value)
			{
				$pathArr = explode('/', Yii::$app->getRequest()->getPathInfo());
				$urlArr = explode('/', $value->url);
				
				$return .= '<li class="';
				
				if(isset($urlArr[1]) && $pathArr[0] == $urlArr[1]) // Yii::$app->getRequest()->getUrl() полный url с "/" в начале
				{
					$return .= 'active';
				}
				$return .= '"><a href="'.$value->url.'">'.$value->title.'</a></li>';
			}
		}
		return $return;
	}
}