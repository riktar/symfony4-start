<?php
namespace App\Entity;

use Swagger\Annotations as SWG;
use Doctrine\ORM\Mapping as ORM;


class Book {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @SWG\Property(type="integer", description="id del libro")
     */
    public $id;

    /**
     * @SWG\Property(type="string", maxLength=255)
     * @ORM\Column(name="title", type="string", length=255)
     */
    public $title;

    /**
     * @SWG\Property(type="number")
     * @ORM\Column(name="price", type="float")
     */
    public $price;

}