<?php
namespace App\tools\base;

interface BaseController{
    public function get($request, $response, $args);
    public function all($request, $response, $args);
    public function add($request, $response, $args);
    public function update($request, $response, $args);
    public function remove($request, $response, $args);
}