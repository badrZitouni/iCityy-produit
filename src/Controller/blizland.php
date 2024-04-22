<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpClient\HttpClient;

#[Route('/blizland')]
class blizland extends AbstractController
{
    #[Route('/', name: 'app_blizland_index', methods: ['GET'])]

    public function index(EntityManagerInterface $entityManager) : Response 
    {
        return $this->render('bizland/index.html', []);
    }
}
