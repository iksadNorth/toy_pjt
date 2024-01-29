<?php
namespace Toypjt\Statics\Templates;

require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Toypjt\Statics\Segments\TagTable as TagTable;
use Toypjt\Statics\Segments\WeekTable as WeekTable;
use Toypjt\Statics\Segments\WriterTable as WriterTable; 
use Toypjt\Statics\Segments\ArticleCarousel as ArticleCarousel; 
use Toypjt\Statics\Segments\Head as Head;
use Toypjt\Statics\Segments\TitleAndSub as TitleAndSub;
use Toypjt\Statics\Segments\Space as Space;
use Toypjt\Statics\Segments\Tab as Tab;

class Main
{
    public function __construct($title, $arr_tag, $arr_week, $arr_writer, $arr_rec_article) {
        echo <<<EOD
            <!DOCTYPE html>
            <html lang="en">
            <head>
        EOD . Head::render() . <<<EOD
                <title>$title</title>

                <style>
                    :root::-webkit-scrollbar {
                        display: none; /* Chrome, Safari, Opera*/
                    }
                </style>
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

        EOD . Space::render("100px") . <<<EOD

        EOD . TitleAndSub::render("Brunch Writers", "브런치 추천 작가") . <<<EOD
        EOD . Space::render("50px") . <<<EOD
        EOD . (new WriterTable())->render($arr_writer) . <<<EOD

        EOD . Space::render("100px") . <<<EOD

        EOD . TitleAndSub::render("Recommended Articles", "브런치의 다양한 글을 만나보세요.") . <<<EOD
        EOD . Space::render("50px") . <<<EOD
        EOD . (new ArticleCarousel())->render($arr_rec_article) . <<<EOD
            </body>
            </html>
        EOD;
    }
}