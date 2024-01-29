<?php

namespace Toypjt\Statics\Segments;

class ArticleCarousel extends Carousel
{
    private $width = '200px';

    public function __construct() {
        parent::__construct($this->width);
    }

    protected function get_html_unit($props) {
        $image = $props['main_image'] ?? '#';
        $title = $props['title'] ?? '';
        $content = $props['content'] ?? '';

        return <<<EOD
        <div class="card">
            <div class="image">
                <img src="$image"/>
            </div>

            <div class="article-title">
                $title
            </div>

            <div class="content">
                $content
            </div>
        </div>
        EOD;
    }
    protected function get_style_unit() {
        return <<<EOD
        /* 프레임 스타일 */
        #$this->table_id .card {
            width: $this->width;
            height: 100%;

            overflow-y: hidden;

            display: flex;
            flex-direction: column;
            align-items: center;
        }
        /* 이미지 프레임 스타일 */
        #$this->table_id .image {
            width: 100%;
        }
        /* 이미지 스타일 */
        #$this->table_id .image > img {
            width: 100%;
            aspect-ratio: 1 / 1;
        }
        /* 제목 스타일 */
        #$this->table_id .article-title {
            font-size: 1.25rem;
            color: gray;
        }
        /* 내용 스타일 */
        #$this->table_id .content {
            text-overflow: ellipsis;
            height: 200px;
        }
        EOD;
    }
    protected function get_script_unit() {
        return <<<EOD
        EOD;
    }
}