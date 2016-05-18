# yii2-widget-button_ajax

Description
============
Simple button in grid

For example:
-----------------------------------------
```
ButtonWidget::widget([
    'model'       => $model,
    'uniqueClass' => 'btn-send-link-to-telegram',
    'btnClass'    => 'btn-xs btn-primary',
    'iconClass'   => 'glyphicon-send',
    'action'      => '/users/send-link-with-telegram-hash',
    'data'        => '{"id": "' . $model->id . '"}',
])
```
