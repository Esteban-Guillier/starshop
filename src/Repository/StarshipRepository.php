<?php

namespace App\Repository;

use App\Model\Starship;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use App\Model\StarshipStatusEnum;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {

    }

    public function findAll(): array
    {

        $this->logger->info('Fetching starship collection from repository');

        return [
            new Starship(
                1,
                'Millenium Falcon',
                'YT-1300 light freighter',
                'Fildrong',
                StarshipStatusEnum::IN_PROGRESS
            ),

            new Starship(
                2,
                'X-Wing',
                'T-65B X-wing starfighter',
                'Luke Skywalker',
                StarshipStatusEnum::COMPLETED
            ),
            
            new Starship(
                3,
                'TIE Fighter',
                'Twin Ion Engine/Ln Starfighter',
                'Darth Vader',
                StarshipStatusEnum::WAITING
            ),
        ];

    }
    public function find(int $id): ?Starship
        {
            $this->logger->info(sprintf('Fetching starship with id %d from repository', $id));

            return match ($id) {
                1 => new Starship(
                    1,
                    'Millenium Falcon',
                    'YT-1300 light freighter',
                    'Fildrong',
                    StarshipStatusEnum::IN_PROGRESS
                ),
                2 => new Starship(
                    2,
                    'X-Wing',
                    'T-65B X-wing starfighter',
                    'Luke Skywalker',
                    StarshipStatusEnum::COMPLETED
                ),
                3 => new Starship(
                    3,
                    'TIE Fighter',
                    'Twin Ion Engine/Ln Starfighter',
                    'Darth Vader',
                    StarshipStatusEnum::WAITING
                ),
                default => null
            };
    }    

}