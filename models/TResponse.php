<?php
/**
 * @Author: Martin Štěpánek
 * @Date: 31/03/2019 14:21
 */

namespace app\models;


use yii\web\Response;

trait TResponse
{

    /**
     * @return Response
     */
    public function getResponse(): Response
    {
        return \Yii::$app->response;
    }

}