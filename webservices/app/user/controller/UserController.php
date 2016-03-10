<?php
/**
 * Created by PhpStorm.
 * User: cambara
 * Date: 24/02/16
 * Time: 12:35
 */
namespace App\user\controller;
use App\tools\base\BaseController;
use App\user\model\entity\User;
use App\user\model\repository\UserRepository;
use App\user\model\service\UserService;
use App\tools\Service;
class UserController implements BaseController{
    /** @var  UserRepository */
    private $dao;
    /** @var  UserService */
    private $service;
    public function __construct()
    {
        $this->dao = new UserRepository();
        $this->service = new UserService($this->dao);
    }

    public function get($request, $response, $args){
        $user = $this->dao->getById($args['id']);
        echo json_encode($user);
    }
    public function all($request, $response, $args){
        $users = $this->dao->all();
        echo json_encode($users);
    }
    public function add($request, $response, $args){
        $u = $request->getParsedBody()['user'];
        $user = Service::convertArrayToClass($u,new User());
        $response = $this->service->add($user);
        echo json_encode($response);
    }
    public function update($request, $response, $args){
        $u = $request->getParsedBody()['user'];
        $userL = $this->dao->getById($args['id']);
        $response = '{error:"User 404"}';
        if(isset($userL)){
            $user = Service::convertArrayToClass($u,$userL);
            $response = $this->service->update($user);
        }
        echo json_encode($response);
    }
    public function remove($request, $response, $args){

    }

}