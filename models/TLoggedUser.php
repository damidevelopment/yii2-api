<?php
/**
 * @Author: Martin Štěpánek
 * @Date: 31/03/2019 04:47
 */

namespace app\models;


use yii\web\IdentityInterface;

trait TLoggedUser
{

    /** Gets current logged user
     * @see IdentityInterface
     * @return IdentityInterface|null
     */
    public function getLoggedUser(): IdentityInterface
    {
        return \Yii::$app->user->identity;
    }

}