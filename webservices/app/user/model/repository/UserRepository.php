<?php

/**
 * Created by PhpStorm.
 * User: cambara
 * Date: 09/03/16
 * Time: 21:02
 */
namespace App\user\model\repository;
use App\tools\base\BaseRepository;
class UserRepository implements BaseRepository
{
    private static $USERLOCATION = 'App\user\model\entity\User';
    private $em;
    public function __construct()
    {
        global $entityManager;
        $this->em  = $entityManager;
    }

    public function getById($id)
    {
        return $this->em->getRepository($this::$USERLOCATION)->find($id);
    }

    public function all()
    {
        return $this->em->getRepository($this::$USERLOCATION)->findAll();
    }

    public function put($obj)
    {
        if($obj->getId() > 0){
            $this->em->merge($obj);
        }else{
            $this->em->persist($obj);
        }
        $this->em->flush();
        return $obj;
    }

    public function remove($id)
    {
        $obj = $this->getById($id);
        $this->em->remove($obj);
        return $obj->getId() < 1? true:false;
    }
}