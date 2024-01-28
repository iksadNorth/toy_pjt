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

        <style>
            .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            padding: 10px;
            }

            .grid-item {
            width: 200px;
            padding: 10px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            box-sizing: border-box;
            }

            body {
            margin: 0;
            font-family: Arial, sans-serif;
            }

            /* 스크롤바 예쁘게 스타일링 (선택사항) */
            ::-webkit-scrollbar {
            width: 10px;
            }

            ::-webkit-scrollbar-thumb {
            background-color: #888;
            }

            ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            }
        </style>

        <div class="grid-container">
        <!-- 여러 요소들을 동적으로 추가할 수 있습니다. -->
        <div class="grid-item">1</div>
        <div class="grid-item">2</div>
        <div class="grid-item">3</div>
        <div class="grid-item">4</div>
        <div class="grid-item">4</div>
        <div class="grid-item">4</div>
        <div class="grid-item">4</div>
        <div class="grid-item">4</div>
        <!-- 추가할 요소들... -->
        </div>
            </body>
            </html>
        EOD;
    }
}