<?php
/**
 * Created by PhpStorm.
 * User: mikhailmaklashov
 * Date: 15.01.16
 * Time: 11:32
 */

namespace deka6pb\button_ajax;

use yii\base\Widget;

class AjaxButtonWidget extends Widget
{
    public $model;
    public $uniqueClass;
    public $action;
    public $type      = 'GET';
    public $data      = '';
    public $iconClass = '';
    public $btnClass  = '';
    public $title     = '';
    public $confirm   = '';

    public function run()
    {
        return $this->render('_button', [
            'model'       => $this->model,
            'uniqueClass' => $this->uniqueClass,
            'iconClass'   => $this->iconClass,
            'btnClass'    => $this->btnClass,
            'action'      => $this->action,
            'data'        => $this->data,
            'title'       => $this->title,
            'type'        => $this->type,
            'confirm'     => $this->confirm,
        ]);
    }
}
