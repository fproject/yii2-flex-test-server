<?php
/* @var $this yii\web\View */

    use fproject\widgets\FlexWidget;
    $baseUrl = Yii::getAlias("@web");
    $userToken = 'usertoken_00_000';
    $loginUserId = '1001';
    FlexWidget::widget([
        'name'=>'APOM',
        'baseUrl'=>$baseUrl.Yii::$app->params['flexAppBasePath'],
        'rslBaseUrl'=>$baseUrl.Yii::$app->params['flexRSLBasePath'],
        'moduleBaseUrl'=>$baseUrl.Yii::$app->params['flexModuleBasePath'],
        'width'=>'100%',
        'height'=>'100%',
        'align'=>'left',
        'enableHistory'=>'false',
        'allowFullScreen'=>'true',
        'allowFullScreenInteractive'=>'true',
        'flashVars'=>[
            'loginUserId'=>$loginUserId,
            'userToken'=>str_replace('"', '\\"', $userToken),
        ],
    ]);
?>