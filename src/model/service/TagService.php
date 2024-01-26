<?php
namespace Toypjt\Model\Service;

require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Toypjt\Model\Db\Connection as Con;


class TagService
{
    public function get_tag_list()
    {
        return ['123', 4243, '562','123', 4243, '562','123', 4243, '123', 4243, '562','123', 4243, '562','123'];
    }
}