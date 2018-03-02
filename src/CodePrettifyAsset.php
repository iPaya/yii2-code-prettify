<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 */

namespace iPaya\Yii2\CodePrettify;


use yii\web\AssetBundle;

class CodePrettifyAsset extends AssetBundle
{
    public $sourcePath = '@bower/code-prettify/src';
    public $css = [
        'prettify.css'
    ];
    public $js = [
        'run_prettify.js'
    ];
}
