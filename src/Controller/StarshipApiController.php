<?php

namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(LoggerInterface $logger) : Response
    {
        $logger->info('Fetching starship collection');
        $starships = [

            new starship(
                1,
                 'Millenium Falcon',
                 'YT-1300 light freighter',
                 'Fildrong',
                 'Operational'
            ),

            new starship(
                2,
                 'X-Wing',
                 'T-65B X-wing starfighter',
                 'Luke Skywalker',
                 'Operational'
            ),
            
            new starship(
                3,
                 'TIE Fighter',
                 'Twin Ion Engine/Ln Starfighter',
                 'Darth Vader',
                 'Operational'
            ),
        ];
         return $this->json($starships);
    }

}