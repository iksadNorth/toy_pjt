<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Toypjt\Model\Service\TagService as TagService;
use Toypjt\Statics\Templates\Main as Main;

$tag_service = new TagService();
$arr_tag = $tag_service->get_tag_list();

$arr_week = [
    [
        'title' => '나는 말하듯이 쓴다',
        'tag' => '책 속으로 떠나는 여행',
        'writer' => '김별',
        'image_url' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/fiLX/image/vlDi1qg3FiDTR_P5O8Bw081DCNs',
    ],
    [
        'title' => '나는 말하듯이 쓴다',
        'tag' => '책 속으로 떠나는 여행',
        'writer' => '김별',
        'image_url' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/fiLX/image/vlDi1qg3FiDTR_P5O8Bw081DCNs',
    ],
    [
        'title' => '나는 말하듯이 쓴다',
        'tag' => '책 속으로 떠나는 여행',
        'writer' => '김별',
        'image_url' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/fiLX/image/vlDi1qg3FiDTR_P5O8Bw081DCNs',
    ],
    [
        'title' => '나는 말하듯이 쓴다',
        'tag' => '책 속으로 떠나는 여행',
        'writer' => '김별',
        'image_url' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/fiLX/image/vlDi1qg3FiDTR_P5O8Bw081DCNs',
    ],
    [
        'title' => '나는 말하듯이 쓴다',
        'tag' => '책 속으로 떠나는 여행',
        'writer' => '김별',
        'image_url' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/fiLX/image/vlDi1qg3FiDTR_P5O8Bw081DCNs',
    ],
];

$arr_writer = [
    [
        'profile' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'name' => '조명광',
        'intro' => 'dttrees(디트리스), conace(코네이스) CEO, 한양사이버대학원 가톨릭대학교 겸임교수 - Everything is Marketing',
    ],
    [
        'profile' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'name' => '조명광',
        'intro' => 'dttrees(디트리스), conace(코네이스) CEO, 한양사이버대학원 가톨릭대학교 겸임교수 - Everything is Marketing',
    ],
    [
        'profile' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'name' => '조명광',
        'intro' => 'dttrees(디트리스), conace(코네이스) CEO, 한양사이버대학원 가톨릭대학교 겸임교수 - Everything is Marketing',
    ],
    [
        'profile' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'name' => '조명광',
        'intro' => 'dttrees(디트리스), conace(코네이스) CEO, 한양사이버대학원 가톨릭대학교 겸임교수 - Everything is Marketing',
    ],
];

new Main("메인 페이지", $arr_tag, $arr_week, $arr_writer);