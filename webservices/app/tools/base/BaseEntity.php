<?php
/**
 * Created by PhpStorm.
 * User: cambara
 * Date: 09/03/16
 * Time: 20:49
 */

namespace App\tools\base;


/** @MappedSuperclass */
abstract class BaseEntity
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="bigint",name="id")
     */
    protected $id;

    /**
     * @Column(type="datetime",name="created_at")
     */
    protected $created_at;

    /**
     * @Column(type="datetime",name="updated_at")
     */
    protected $updated_at;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }


    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }




}