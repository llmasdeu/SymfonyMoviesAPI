<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{Response, JsonResponse, Request};
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController {
    private $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    /**
     * @Route("/list_movies", name="list_movies", methods={"GET", "HEAD"})
     *
     * @param Request $request
     * @param MovieRepository $repository
     * @return void
     */
    public function listMovies(Request $request, MovieRepository $repository) {
        // Retrieves all the movies from the DB
        $movies = $repository->findAll();

        // Converts the results into an array
        $moviesArray = [];

        foreach ($movies as $movie) {
            $moviesArray[] = [
                'id' => $movie->getId(),
                'title' => $movie->getTitle(),
                'director' => $movie->getDirector(),
                'year' => $movie->getYear()
            ];
        }

        // Creates an instance for the response
        $response = new JsonResponse();

        // Sets the retrieved data into the response
        $response->setData([
            'success' => true,
            'total' => count($moviesArray),
            'data' => $moviesArray
        ]);

        return $response;
    }

    /**
     * @Route("/get_movie", name="get_movie", methods={"GET", "HEAD"})
     *
     * @param Request $request
     * @param MovieRepository $repository
     * @return void
     */
    public function getMovie(Request $request, MovieRepository $repository) {
        // Gets the parameters received in the request
        // If they don't exist, their default value will be null
        $id = $request->get('id', null);
        $title = $request->get('title', null);
        $director = $request->get('director', null);
        $year = $request->get('year', null);

        // Creates an instance for the response
        $response = new JsonResponse();

        if (empty($id) && empty($title) && empty($director) && empty($year)) {
            // Notifies the user the query isn't correct
            $response->setData([
                'success' => false,
                'error' => 'There must be, at least, a title, a director or a year field',
                'data' => null
            ]);
        } else {
            // Creates the array for the search criteria
            $searchArray = [];

            if (!empty($id))
                $searchArray['id'] = $id;

            // Sets the array for the search
            if (!empty($title))
                $searchArray['title'] = $title;

            if (!empty($director))
                $searchArray['director'] = $director;

            if (!empty($year))
                $searchArray['year'] = $year;

            // Retrieves the results
            $movies = $repository->findBy($searchArray);

            // Converts the results as an array
            $moviesArray = [];

            foreach ($movies as $movie) {
                $moviesArray[] = [
                    'id' => $movie->getId(),
                    'title' => $movie->getTitle(),
                    'director' => $movie->getDirector(),
                    'year' => $movie->getYear()
                ];
            }

            // Sets the retrieved data into the response
            $response->setData([
                'success' => true,
                'total' => count($moviesArray),
                'data' => $moviesArray
            ]);
        }

        return $response;
    }

    /**
     * @Route("/add_movie", name="add_movie", methods={"POST"})
     *
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return void
     */
    public function addMovie(Request $request, EntityManagerInterface $manager) {
        // Gets the parameters received in the request
        // If they don't exist, their default value will be null
        $title = $request->get('title', null);
        $director = $request->get('director', null);
        $year = $request->get('year', null);

        // Creates an instance for the response
        $response = new JsonResponse();

        // Checks if the parameters are empty
        if (empty($title) || empty($director) || empty($year)) {
            // Notifies the user the query isn't correct
            $response->setData([
                'success' => false,
                'error' => 'There must be a title, director and year fields',
                'data' => null
            ]);
        } else {
            // Creates an instance for the movie data
            $movie = new Movie();
            $movie->setTitle($title);
            $movie->setDirector($director);
            $movie->setYear($year);

            // The manager will hold the movie data, and store it in the DB
            $manager->persist($movie);
            $manager->flush();

            // Notifies the user the query is correct
            $response->setData([
                'success' => true,
                'data' => [
                    [
                        'id' => $movie->getId(),
                        'title' => $movie->getTitle(),
                        'director' => $movie->getDirector(),
                        'year' => $movie->getYear()
                    ]
                ]
            ]);
        }

        return $response;
    }
}