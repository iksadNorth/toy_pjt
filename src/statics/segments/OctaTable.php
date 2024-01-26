<?php

namespace Toypjt\Statics\Segments;

class OctaTable
{
    private static function get_cell_unit() {
        return '
            `<div class="square">${unit}</div>`
        ';
    }

    public static function render($data)
    {
        $arr = OctaTable::arr_php_to_js($data);
        return <<<EOD
        <div class="container">
            <style>
        EOD . OctaTable::get_style() . <<<EOD
            </style>

            <table id="OctaTable"></table>

            <script>
        EOD . OctaTable::get_script($arr) . <<<EOD
            </script>
        </div>
        EOD;
    }

    private static function get_style_unit() {
        return <<<EOD
        /* 변수 정의 */
        :root {
            --cell-width: 100px;
            --num-col: 8;
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

    private static function get_style() {
        return <<<EOD
        /* 루트 태그 스타일 */
        .container {
            text-align: center;
        }

        /* 기본 테이블 스타일 */
        table {
            border-spacing: 0px;
            width: calc(var(--num-col) * var(--cell-width));

            margin: auto;
        }
        
        /* 테이블 헤더 스타일 */
        th {
            background-color: #f2f2f2;
            border: 1px solid #dddddd;
            text-align: left;
        }
        
        /* 테이블 셀 스타일 */
        td {}

        /* unit 스타일 */
        EOD . OctaTable::get_style_unit();
    }

    private static function get_script($arr, $num_col = 8) {
        $cell_unit = OctaTable::get_cell_unit();

        return <<<EOD
        $(document).ready(function() {
            // 데이터 배열
            var data = $arr;

            // 테이블 가져오기
            var table = $("#OctaTable");

            // 데이터 배열을 $num_col 개씩 나누어 행을 추가
            for (var i = 0; i < data.length; i += $num_col) {
                var row = $("<tr></tr>");
                for (var j = 0; j < $num_col; j++) {
                    var cell = $("<td></td>");
                    if (i + j < data.length) {
                        var unit = data[i + j];
                        cell.append($cell_unit);
                    }
                    row.append(cell);
                }
                table.append(row);
            }
        });
        EOD;
    }

    private static function arr_php_to_js($arr) 
    {
        $jsonString = json_encode($arr);
        return 'JSON.parse(\'' . $jsonString . '\')';
    }
}