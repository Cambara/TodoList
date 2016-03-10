<?php
/**
 * Created by PhpStorm.
 * User: cambara
 * Date: 09/03/16
 * Time: 20:59
 */

namespace App\tools\base;


interface BaseRepository
{
    public function getById($id);
    public function all();
    public function put($obj);
    public function remove($id);
}