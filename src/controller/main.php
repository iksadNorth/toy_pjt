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

$arr_rec_article = [
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
    [
        'main_image' => 'https://img1.daumcdn.net/thumb/C120x120.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/1ecC/image/cyp_n2TIurTI17MY_zpT2iI36wI',
        'title' => '일요일 대치동 스타벅스의 풍경',
        'content' => '수학학원 한번 다니지 않고 집에서 문제집과 인강으로 수학 선행을 한 우리 집 에비 중학생은 이번 겨울방학 내내 이 레벨테스트를 보기 위해서 중학교 2학년 1학기 수학 진도를 모두 마치기 위해서 고군분투했다. 학기중과 다르게 수학 인강 수업을 많이 듣고, 혼자 문제집을 풀며 수학 학습시간을 대폭 늘렸다. 물론 이번 겨울 방학 내낸 수학화의 시간을 보낸 것은 아니다. 일주일간 치앙마이 여행도 다녀왔고, 모루인형 만들기 재료를 사기 위해 동대문 시장도 가봤고, 대부도에 가서 겨울바다도 구형하고, 친구들과 디즈니에서 새로 나온 영화<위시>도 보았고, 키즈카페도 다녀왔다.',
    ],
];

new Main("메인 페이지", $arr_tag, $arr_week, $arr_writer, $arr_rec_article);