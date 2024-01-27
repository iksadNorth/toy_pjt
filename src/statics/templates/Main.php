<?php
namespace Toypjt\Statics\Templates;

require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Toypjt\Statics\Segments\TagTable as TagTable;
use Toypjt\Statics\Segments\Head as Head;
use Toypjt\Statics\Segments\TitleAndSub as TitleAndSub;
use Toypjt\Statics\Segments\Space as Space;

class Main
{
    public function __construct($title, $arr) {
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
        EOD . (new TagTable())->render($arr) . <<<EOD
            </body>
            </html>
        EOD;
    }
}