<?php

namespace Toypjt\Statics\Segments;

class TitleAndSub
{
    public static function render($title, $sub)
    {
        return <<<EOD
            <div>
                <style>
        EOD . TitleAndSub::get_style() . <<<EOD
                </style>
                <div class="title">
                    $title
                </div>
                <div class="sub">
                    $sub
                </div>
            </div>
        EOD;
    }

    private static function get_style()
    {
        return <<<EOD
        .title {
            display: flex;
            justify-content: center; /* 가로 가운데 정렬 */
            align-items: center; /* 세로 가운데 정렬 */
            text-align: center; /* 텍스트 가운데 정렬 */
            
            font-family: "Poor Story", system-ui;
            font-weight: 1000;
            font-style: normal;
            font-size: 2.0em;
        }
        
        .sub {
            display: flex;
            justify-content: center; /* 가로 가운데 정렬 */
            align-items: center; /* 세로 가운데 정렬 */
            text-align: center; /* 텍스트 가운데 정렬 */

            font-family: "Josefin Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-size: 0.2em;

            color: #9A9A9A;
        }
        EOD;
    }
}