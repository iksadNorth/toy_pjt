<?php

namespace Toypjt\Statics\Segments;

class Space
{
    public static function render($gap = '10px')
    {
        return <<<EOD
        <style>
            .empty-space {
                margin: $gap; /* 원하는 여백 크기를 설정하세요 */
            }
        </style>
        
        <div class="empty-space"></div>
        EOD;
    }
}