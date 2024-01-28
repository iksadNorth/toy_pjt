<?php

namespace Toypjt\Statics\Segments;

abstract class OctaTable
{
    protected $num_col;
    protected $table_id;
    protected $cell_width;
    protected $cell_height;


    public function __construct($num_col = 8, $cell_width = '100px', $cell_height = '100px') {
        $this->num_col = $num_col;
        $this->cell_width = $cell_width;
        $this->cell_height = $cell_height;

        $this->table_id = $this->get_random_id();
    }

    abstract protected function get_cell_unit();
    abstract protected function get_style_unit();
    abstract protected function get_script_unit();

    private function get_random_id() {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = str_shuffle($characters);
        return $randomString;
    }

    public function render($data)
    {
        $arr = OctaTable::arr_php_to_js($data);
        return <<<EOD
        <div class="container">
            <style>
        EOD . $this->get_style() . <<<EOD
        EOD . $this->get_style_unit() . <<<EOD
            </style>

            <div class="table" id="$this->table_id"></div>

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
        #$this->table_id .container {
            text-align: center;
            overflow: auto;
        }

        /* 기본 테이블 스타일 */
        #$this->table_id .table {
            border-spacing: 0px;
            overflow: auto;
            width: 100%;

            margin: auto;
        }
        
        /* 테이블 헤더 스타일 */
        #$this->table_id .th {
            display: block;

            background-color: #f2f2f2;
            border: 1px solid #dddddd;
            text-align: left;
        }
        
        /* 테이블 셀 스타일 */
        #$this->table_id .td {
            display: inline-block;
            vertical-align: top;

            width: $this->cell_width;
            height: $this->cell_height;
        }
        EOD;
    }

    private function get_script($arr) {
        $cell_unit = $this->get_cell_unit();

        return <<<EOD
        $(document).ready(function() {
            // 데이터 배열
            var data = $arr;

            // 테이블 가져오기
            var table = $("#$this->table_id");

            // 데이터 배열을 $this->num_col 개씩 나누어 행을 추가
            for (var i = 0; i < data.length; i += $this->num_col) {
                var row = $("<div class='tr'></div>");

                for (var j = 0; j < $this->num_col; j++) {
                    var cell = $("<div class='td'></div>");

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