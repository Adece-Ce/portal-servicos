<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Profile;
use App\Repository\Interface\ProfileRepositoryInterface;
use Doctrine\Persistence\ManagerRegistry;

class ProfileRepository extends AbstractRepository implements ProfileRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Profile::class);
    }

    public function save(Profile $profile): Profile
    {
        $this->getEntityManager()->persist($profile);
        $this->getEntityManager()->flush();

        return $profile;
    }
}
