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
        $class = Country::class;
        return [
            'index'=>[
                'class'=> crud\Index::class,
                'modelClass'=>$class,
            ],
            'view'=>[
                'class'=> crud\View::class,
                'modelClass'=>$class,
            ],
            'create'=>[
                'class'=> crud\Create::class,
                'modelClass'=>$class,
            ],
            'update'=>[
                'class'=> crud\Update::class,
                'modelClass'=>$class,
            ],
            'delete'=>[
                'class'=> crud\Delete::class,
                'modelClass'=>$class,
            ],
            'groupdelete'=>[
                'class'=>crud\GroupDelete::class,
                'modelClass'=>$class,
            ],

            'editable'=>[
                'class'=>crud\XEditable::class,
                'modelClass'=>$class,
            ],
            'list'=>[
                'class'=>crud\ListId::class,
                'modelClass'=>$class,
            ],
        ];
    }

}
