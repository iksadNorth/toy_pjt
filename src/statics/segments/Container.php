<?php

namespace Toypjt\Statics\Segments;

abstract class Container
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

    abstract protected function get_html_unit($props);
    abstract protected function get_style_unit();
    abstract protected function get_script_unit();

    private function get_random_id() {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = str_shuffle($characters);
        return $randomString;
    }

    private function get_html_total($arr) {
        $result = array_map([$this, 'get_html_unit'], $arr);
        $result = array_map([$this, 'get_html_unit_wrapper'], $result);
        return array_reduce($result, function ($carry, $item) {
            return $carry . $item;
        }, '');
    }

    private function get_html_unit_wrapper($item) {
        return <<<EOD
        <div class="unit">
        EOD . $item . <<<EOD
        </div>
        EOD;
    }

    public function render($arr)
    {
        return <<<EOD
        <div id="$this->table_id">
            <style>
        EOD . $this->get_style() . <<<EOD
        EOD . $this->get_style_unit() . <<<EOD
            </style>

            <div class="table">
        EOD . $this->get_html_total($arr) . <<<EOD
            </div>

            <script>
        EOD . $this->get_script_unit() . <<<EOD
            </script>
        </div>
        EOD;
    }

    private function get_style() {
        return <<<EOD
        /* 루트 태그 스타일 */
        #$this->table_id {
            width: calc($this->num_col * $this->cell_width);

            margin: 0 auto;
        }

        /* 기본 테이블 스타일 */
        #$this->table_id .table {
            display: grid;
            grid-template-columns: repeat($this->num_col, 1fr);
        }

        /* 요소 스타일 */
        #$this->table_id .unit {
            width: $this->cell_width;
            height: $this->cell_height;
            box-sizing: border-box;
        }
        EOD;
    }
}