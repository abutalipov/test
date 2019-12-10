<?php

namespace app\controllers;

use app\models\News;
use Yii;
use yii\web\HttpException;

class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $path=Yii::$app->request->get('path');
        $news= new News();

        if($path) {
            $res = $news->getNews($path);
            if ($res)
                return $this->render('index', ['res' => $res]);
            else
                throw new HttpException(404, 'News not found');
        }else{
            $res = $news->getAllNews($path);
            return $this->render('index', ['res' => $res,'all'=>true]);
        }
    }

}
