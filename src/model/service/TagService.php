<?php
namespace Toypjt\Model\Service;

require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Toypjt\Model\Db\Connection as Con;


class TagService
{
    private $repository;

    public function __construct() {
        $this->repository = new Con();
    }

    public function get_tag_list()
    {
        $tag_list = $this->repository->db_select('select * from tag');
        $tag_list = array_map(function ($value) {
            return [
                'id' => $value['id'],
                'name' => $value['name'],
            ];
        }, $tag_list);
        return $tag_list;
    }
}