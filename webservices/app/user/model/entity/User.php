<?php
/**
 * Created by PhpStorm.
 * User: cambara
 * Date: 07/03/16
 * Time: 21:52
 */

namespace App\user\model\entity;
use App\tools\base\BaseEntity;

/**
 * @Entity
 * @Table(name="user")
 */
class User extends BaseEntity implements \JsonSerializable
{
    /**
     * @Column(type="string",name="email")
     */
    protected $email;

    /**
     * @Column(type="string",name="password")
     */
    protected $password;

    /**
     * @Column(type="string",name="name")
     */
    protected $name;

    /**
     * @OneToOne(targetEntity="App\oauth\model\entity\Oauth", mappedBy="user")
     */
    protected $oauth;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getOauth()
    {
        return $this->oauth;
    }

    public function setOauth($oauth)
    {
        $this->oauth = $oauth;
    }
    public function jsonSerialize()
    {
        return [
                'id' => $this->id,
                'email' => $this->email,
                'name' => $this->name
        ];

    }

}