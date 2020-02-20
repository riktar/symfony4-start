<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use App\Entity\Book;



class BookController {

    /**
     * @param Request $request
     * @return JsonResponse
     *
     * @Route("/api/v1/books", methods={"get"})
     *
     * @SWG\Get(
     *      description="Recupera tutti i libri",
     *      @SWG\Response(
     *          response=200,
     *          description="La lista di tutti i libri",
     *          @SWG\Items(@Model(type=Book::class))
     *     )
     * )
     * @SWG\Tag(name="Books")
     *
     * */
    public function getBooks(Request $request) {
        /*...*/
        return new JsonResponse(["method" => "getBooks"]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     *
     * @Route("/api/v1/books/{id}", methods={"get"})
     *
     * @SWG\Get(
     *      description="Recupera un libro avendo un id",
     *      @SWG\Parameter(
     *          name="id",
     *          description="id del libro",
     *          in="path",
     *          type="integer",
     *          required=true,
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="il libro trovato",
     *          @SWG\Schema(ref=@Model(type=Book::class))
     *     )
     * )
     * @SWG\Tag(name="Books")
     *
     * */
    public function getOneBook(Request $request) {
        /*...*/
        return new JsonResponse(["method" => "getOneBook"]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     *
     * @Route("/api/v1/books", methods={"post"})
     *
     * @SWG\Post(
     *      description="Inserisce un libro",
     *      @SWG\Parameter(
     *          name="body",
     *          description="dati di un libro",
     *          in="body",
     *          required=true,
     *          @SWG\Schema(ref=@Model(type=Book::class))
     *     ),
     * @SWG\Response(
     *          response=200,
     *          description="i dati del libro inserito",
     *          @Model(type=Book::class)
     *     )
     * )
     * @SWG\Tag(name="Books")
     *
     * */
    public function postBook(Request $request) {
        /*...*/
        return new JsonResponse(["method" => "postBook"]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     *
     * @Route("/api/v1/books", methods={"put"})
     *
     * @SWG\Put(
     *      description="Inserisce un libro",
     *       @SWG\Parameter(
     *          name="body",
     *          description="dati di un libro",
     *          in="body",
     *          required=true,
     *          @SWG\Schema(ref=@Model(type=Book::class))
     *     )
     *     ),
     * @SWG\Response(
     *          response=200,
     *          description="i dati del libro modificato",
     *          @Model(type=Book::class)
     *     )
     * )
     * @SWG\Tag(name="Books")
     *
     * */
    public function putBook(Request $request) {
        /*...*/
        return new JsonResponse(["method" => "putBook"]);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @Route("/api/v1/books/{id}", methods={"delete"})
     *
     * @SWG\Delete(
     *      description="Recupera un libro avendo un id",
     *      @SWG\Parameter(
     *          name="id",
     *          description="id del libro",
     *          in="path",
     *          type="integer",
     *          required=true,
     *      ),
     *      @SWG\Response(
     *          response=204,
     *          description="Operazione effettuata correttamente"
     *     )
     * )
     * @SWG\Tag(name="Books")
     *
     * */
    public function deleteOneBook(Request $request) {
        /*...*/
        return new Response(null, 204);
    }

}