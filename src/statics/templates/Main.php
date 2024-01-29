<?php
namespace Toypjt\Statics\Templates;

require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Toypjt\Statics\Segments\TagTable as TagTable;
use Toypjt\Statics\Segments\WeekTable as WeekTable;
use Toypjt\Statics\Segments\Head as Head;
use Toypjt\Statics\Segments\TitleAndSub as TitleAndSub;
use Toypjt\Statics\Segments\Space as Space;
use Toypjt\Statics\Segments\Tab as Tab;

class Main
{
    public function __construct($title, $arr_tag, $arr_week) {
        echo <<<EOD
            <!DOCTYPE html>
            <html lang="en">
            <head>
        EOD . Head::render() . <<<EOD
                <title>$title</title>
            </head>
            <body>
        EOD . TitleAndSub::render("BRUNCH KEYWORD", "키워드로 분류된 다양한 글 모음") . <<<EOD
        EOD . Space::render("50px") . <<<EOD
        EOD . (new TagTable())->render($arr_tag) . <<<EOD
        EOD . Space::render("100px") . <<<EOD
        EOD . TitleAndSub::render("요일별 연재", "브런치북 오리지널 연재를 만나 보세요.") . <<<EOD
        EOD . Space::render("50px") . <<<EOD
        EOD . Tab::render() . <<<EOD
        EOD . (new WeekTable())->render($arr_week) . <<<EOD
            </body>
            </html>
        EOD;
    }
}