<?php

declare(strict_types=1);

namespace App\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TesteWebController extends AbstractController
{
    public function list(): Response
    {
        return $this->render('portal/index.html.twig');
    }
}
