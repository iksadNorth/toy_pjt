<?php

namespace Toypjt\Statics\Segments;

abstract class Carousel
{
    protected $table_id;
    protected $width_unit;


    public function __construct($width_unit) {
        $this->table_id = $this->get_random_id();
        $this->width_unit = $width_unit;
    }

    abstract protected function get_html_unit($props);
    abstract protected function get_style_unit();
    abstract protected function get_script_unit();

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

    private function get_html_prev_button() {
        return <<<EOD
        <div class="prev button">
            <
        </div>
        EOD;
    }

    private function get_html_next_button() {
        return <<<EOD
        <div class="next button">
            >
        </div>
        EOD;
    }

    private function get_random_id() {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = str_shuffle($characters);
        return $randomString;
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
        
            <div class="buttons">
        EOD . $this->get_html_prev_button() . <<<EOD
        EOD . $this->get_html_next_button() . <<<EOD
            </div>

            <script>
        EOD . $this->get_script() . <<<EOD
        EOD . $this->get_script_unit() . <<<EOD
            </script>
        </div>
        EOD;
    }

    private function get_style()
    {
        return <<<EOD
        /* 루트 태그 스타일 */
        #$this->table_id {
            position: relative;

            margin: 0 auto;

            width: 75%;
            height: 500px;
        }

        /* 기본 테이블 스타일 */
        #$this->table_id .table {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            display: flex;
            flex-wrap: nowrap;
        }

        /* 요소 스타일 */
        #$this->table_id .unit {
            display: inline-block;

            padding: 10px;
        }

        /* 버튼 스타일 */
        #$this->table_id .buttons {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            width: 100%;
            margin: 10px;

            display: flex;
            justify-content: space-between;
        }

        /* 이전, 다음 버튼 스타일 */
        #$this->table_id .buttons > * {
            display: inline-block;
            padding: 10px 20px;
            font-size: 30px;
            cursor: pointer;
            text-align: center;
            border-radius: 35%;

            opacity: 0.5;

            background-color: gray;
            color: #ffffff;
        }
        EOD;
    }

    private function get_script()
    {
        return <<<EOD
        $(document).ready(function () {
            let range = 0;
            const move_range = $("#$this->table_id .unit").width();
            const cnt_unit = $('#$this->table_id .table .unit').length;
            const max_range = cnt_unit * move_range;

            $("#$this->table_id .buttons .next").click(function () {
                range -= move_range;
                range = Math.max(range, -max_range);

                $("#$this->table_id .table").css('transform', 'translateX(' + range + 'px)');
            });
            
            $("#$this->table_id .buttons .prev").click(function () {
                range += move_range;
                range = Math.min(range, 0);

                $("#$this->table_id .table").css('transform', 'translateX(' + range + 'px)');
            });
        });
        EOD;
    }
}