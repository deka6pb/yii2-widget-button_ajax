<?php

namespace deka6pb\button_ajax\assets;

use common\components\AssetBundle;

class Assets extends AssetBundle
{
    public $js = [
        'js/widget.js',
    ];

    public $css = [
        'css/widget.css',
    ];

    public $depends = [
    ];

    public $sourcePath = __DIR__;

    public $publishOptions = [
        'forceCopy' => YII_DEBUG,
    ];
}
