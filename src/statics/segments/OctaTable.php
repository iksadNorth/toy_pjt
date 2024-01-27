<?php

namespace Toypjt\Statics\Segments;

abstract class OctaTable
{
    private $num_col;


    public function __construct($num_col = 8) {
        $this->num_col = $num_col;
    }

    abstract protected function get_cell_unit();
    abstract protected function get_style_unit();
    abstract protected function get_script_unit();

    public function render($data)
    {
        $arr = OctaTable::arr_php_to_js($data);
        return <<<EOD
        <div class="container">
            <style>
        EOD . $this->get_style() . <<<EOD
        EOD . $this->get_style_unit() . <<<EOD
            </style>

            <table id="OctaTable"></table>

            <script>
        EOD . $this->get_script($arr) . <<<EOD
        EOD . $this->get_script_unit() . <<<EOD
            </script>
        </div>
        EOD;
    }

    private function get_style() {
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
        EOD;
    }

    private function get_script($arr, $num_col = 8) {
        $cell_unit = $this->get_cell_unit();

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
                        var props = data[i + j];
                        cell.append($cell_unit);
                    }
                    row.append(cell);
                }
                table.append(row);
            }
        });
        EOD;
    }

    public static function arr_php_to_js($arr) 
    {
        $jsonString = json_encode($arr);
        return 'JSON.parse(\'' . $jsonString . '\')';
    }
}