<?php

namespace Toypjt\Statics\Segments;

class WeekTable extends Container
{
    private $unit_width = '360px';
    private $unit_height = '110px';
    private $frame_width = '400px';
    private $frame_height = '150px';

    public function __construct() {
        parent::__construct(2, $this->frame_width, $this->frame_height);
    }

    protected function get_html_unit($props) {
        $title = $props['title'] ?? '';
        $tag = $props['tag'] ?? '';
        $writer = $props['writer'] ?? '';
        $image_url = $props['image_url'] ?? '#';
        
        return <<<EOD
            <div class="card">
                <div class="text">
                    <div class="tag">
                        $title
                    </div>
                    <div class="article-title">
                        $tag
                    </div>
                    <div class="writer">
                        By $writer
                    </div>
                </div>

                <div class="image">
                    <image src="$image_url" />
                </div>
            </div>
            EOD;
    }

    protected function get_style_unit() {
        return <<<EOD
        :root {
            --image-size: 50px;
        }
        #$this->table_id .card {
            border: 1px solid gray;

            padding: 10px;

            width: $this->unit_width;
            height: $this->unit_height;

            display: flex;
            direction: row;
            align-items: center;
        }
        #$this->table_id .tag {
            font-size: 0.75rem;
            color: gray;
        }
        #$this->table_id .article-title {
            font-size: 1.25rem;
        }
        #$this->table_id .writer {
            font-size: 0.75rem;
            color: gray;
        }
        #$this->table_id .image {
            height: 90%;
            margin-left: auto;
        }
        #$this->table_id .image > img {
            height: 100%;
            aspect-ratio: 1 / 1;
        }
        EOD;
    }

    protected function get_script_unit() {
        return <<<EOD
        
        EOD;
    }
}