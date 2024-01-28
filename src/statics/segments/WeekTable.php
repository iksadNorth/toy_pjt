<?php

namespace Toypjt\Statics\Segments;

class WeekTable extends OctaTable
{
    public function __construct() {
        parent::__construct(2, '500px', '100px');
    }

    protected function get_cell_unit() {
        return '
            `<div class="card">
                <div class="text">
                    <div class="tag">
                        asdf
                    </div>
                    <div class="title">
                        asdf
                    </div>
                    <div class="writer">
                        asdf
                    </div>
                </div>

                <div class="image">
                    asdf
                </div>
            </div>`
        ';
    }

    protected function get_style_unit() {
        return <<<EOD
        :root {
            --image-size: 50px;
        }

        .card {
            display: flex;
            align-items: center;

            border: 1px solid gray;

            margin: 10px;
            padding: 10px;
          }
          
          .text {
            display: flex;
            flex-direction: column;
          }
          
          .title,
          .writer,
          .tag {
            margin-bottom: 10px;
          }
          
          .image {
            margin-left: auto;
          }
          
          .image img {
            width: var(--image-size);
            height: var(--image-size);
            object-fit: cover;
          }
        EOD;
    }

    protected function get_script_unit() {
        return <<<EOD
        
        EOD;
    }
}