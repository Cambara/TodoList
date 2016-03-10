<?php
/**
 * Created by PhpStorm.
 * User: cambara
 * Date: 09/03/16
 * Time: 21:26
 */

namespace App\user\model\service;


use App\tools\Service;
use App\user\model\repository\UserRepository;
use App\user\model\entity\User;

class UserService
{
    /**
     * @var UserRepository
     */
    private $dao;

    public function __construct($dao)
    {
        $this->dao = $dao;
    }
    /*
     * @param $user User
     * @return User
     */
    public function add(User $user){
        $time = new \DateTime('now');
        $user->setUpdatedAt($time);
        $user->setCreatedAt($time);
        $password = Service::encryptPassword($user->getPassword());
        $user->setPassword($password);
        return $this->dao->put($user);
    }
    /*
     * @param $user User
     * @return User
     */
    public function update(User $user){
        $time = new \DateTime('now');
        $user->setUpdatedAt($time);
        return $this->dao->put($user);
    }
}