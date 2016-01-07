<?php

namespace lo\modules\geo\modules\admin\controllers;

use Yii;
use lo\modules\geo\models\Country;
use yii\web\Controller;
use lo\core\actions\crud;

/**
 * PageController implements the CRUD actions for Country model.
 */
class CountryController extends Controller
{
    /**
     * Действия
     * @return array
     */

    public function actions()
    {
        $class = Country::className();
        return [
            'index'=>[
                'class'=> crud\Index::className(),
                'modelClass'=>$class,
            ],
            'view'=>[
                'class'=> crud\View::className(),
                'modelClass'=>$class,
            ],
            'create'=>[
                'class'=> crud\Create::className(),
                'modelClass'=>$class,
            ],
            'update'=>[
                'class'=> crud\Update::className(),
                'modelClass'=>$class,
            ],
            'delete'=>[
                'class'=> crud\Delete::className(),
                'modelClass'=>$class,
            ],
            'groupdelete'=>[
                'class'=>crud\GroupDelete::className(),
                'modelClass'=>$class,
            ],

            'editable'=>[
                'class'=>crud\XEditable::className(),
                'modelClass'=>$class,
            ],
            'list'=>[
                'class'=>crud\ListId::className(),
                'modelClass'=>$class,
            ],
        ];
    }

}