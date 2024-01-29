<?php

namespace Toypjt\Statics\Segments;

class WriterTable extends Container
{
    private $unit_width = '240px';
    private $unit_height = '260px';
    private $frame_width = '267px';
    private $frame_height = '300px';

    public function __construct() {
        parent::__construct(3, $this->frame_width, $this->frame_height);
    }

    protected function get_html_unit($props) {
        $profile = $props['profile'] ?? '';
        $name = $props['name'] ?? '';
        $intro = $props['intro'] ?? '';
        
        return <<<EOD
            <div class="card">
                <div class="profile">
                    <img src="$profile"/>
                </div>

                <div class="name">
                    $name
                </div>

                <div class="intro">
                    $intro
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
            flex-direction: column;
            align-items: center;
        }
        #$this->table_id .profile {
            width: 40%;
            height: 40%;
            border-radius: 70%;
            overflow: hidden;
        }
        #$this->table_id .profile > img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        #$this->table_id .name {
            font-size: 1.25rem;

            padding: 10px;
        }
        #$this->table_id .intro {
            font-size: 0.75rem;
            color: gray;

            padding: 10px;
        }
        EOD;
    }

    protected function get_script_unit() {
        return <<<EOD
        
        EOD;
    }
}