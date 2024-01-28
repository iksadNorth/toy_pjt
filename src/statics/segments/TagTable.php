<?php

namespace Toypjt\Statics\Segments;

class TagTable extends OctaTable
{
    public function __construct() {
        parent::__construct(8, '100px', '100px');
    }

    protected function get_cell_unit() {
        return '
            `<div class="square">${props.name}</div>`
        ';
    }

    protected function get_style_unit() {
        return <<<EOD
        /* 변수 정의 */
        :root {
            --cell-width: $this->cell_width;
            --num-col: $this->num_col;
            --hover-color: #3CA400;
        }

        /* unit 스타일 */
        .square {
            width: var(--cell-width);
            height: var(--cell-width);
            border: 1px solid #E4E4E4;
            transition: border-color 0.3s;

            display: flex;
            justify-content: center; /* 가로 가운데 정렬 */
            align-items: center; /* 세로 가운데 정렬 */
            text-align: center; /* 텍스트 가운데 정렬 */

            font-family: "Poor Story", system-ui;
            font-weight: 400;
            font-style: normal;
        }

        /* 마우스를 올렸을 때의 스타일 */
        .square:hover {
            border-color: var(--hover-color);
            color: var(--hover-color);
        }
        EOD;
    }

    protected function get_script_unit() {
        return <<<EOD
        
        EOD;
    }
}