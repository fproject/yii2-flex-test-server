<?php
/* @var $this yii\web\View */

    use fproject\widgets\FlexWidget;

    $this->registerJs("
    $('#w0').remove();
    $('.wrap').css('width','100%').css('height','100%').css('top','0px').css('bottom','0px').css('left','0px').css('right','0px').css('padding-top','0px').css('padding-right','0px').css('padding-left','0px').css('padding-bottom','0px');
    $('#APOM').closest('div').css('width','100%').css('height','100%').css('top','0px').css('bottom','0px').css('left','0px').css('right','0px').css('padding-top','0px').css('padding-right','0px').css('padding-left','0px').css('padding-bottom','0px');
    ",\yii\web\View::POS_READY, 'flex.app');

    $baseUrl = Yii::getAlias("@web");
    $userToken = 'usertoken_00_000';
    $loginUserId = '1001';
    FlexWidget::begin([
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
    FlexWidget::end();
?>