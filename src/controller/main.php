<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Toypjt\Model\Service\TagService as TagService;
use Toypjt\Statics\Templates\Main as Main;

$tag_service = new TagService();
$arr_tag = $tag_service->get_tag_list();

$arr_week = [
    '1', '2'
];

new Main("메인 페이지", $arr_tag, $arr_week);