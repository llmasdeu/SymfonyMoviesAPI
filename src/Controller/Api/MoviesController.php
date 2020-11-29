<?php

namespace App\Controller\Api;

use App\Entity\Movie;
use App\Form\Type\MovieFormType;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MoviesController extends AbstractFOSRestController {
    /**
     * @Rest\Get(path="/list_movies")
     * @Rest\View(serializerGroups={"movie"}, serializerEnableMaxDepthChecks=true)
     *
     * @param MovieRepository $repository
     * @return void
     */
    public function getAction(MovieRepository $repository) {
        return $repository->findAll();
    }

    /**
     * @Rest\Post(path="/movies")
     * @Rest\View(serializerGroups={"movie"}, serializerEnableMaxDepthChecks=true)
     *
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return void
     */
    public function postAction(Request $request, EntityManagerInterface $manager) {
        // Creates an instance for the response
        $response = new JsonResponse();

        // Creates an instance in charge of handling the movie data of the form
        $movie = new Movie();

        // Sets the object in charge of the data handling
        $form = $this->createForm(MovieFormType::class, $movie);

        // Sets that the form will be handled by the request
        $form->handleRequest($request);

        // Checks if everything's OK
        if ($form->isSubmitted() && $form->isValid()) {
            // The manager will hold the movie data, and store it in the DB
            $manager->persist($movie);
            $manager->flush();

            return $movie;
        }

        return $form;
    }
}