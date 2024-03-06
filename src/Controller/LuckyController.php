<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class LuckyController extends AbstractController
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'nb' => $number,
        ]);
    }
    #[Route('/lucky/somme')]
    public function somme(): Response
    {
        $a = random_int(0,10);
        $b = random_int(0,20);
$somme=$a+$b;
        return $this->render('lucky/somme.html.twig', [
            'nb' => $somme,
        ]);
    }
    #[Route('/lucky/hello/{max}')]
    public function hello(int $max): Response
    {
        $number =$max * $max;

        return $this->render('lucky/hello.html.twig', [
            'hello' => $number,
        ]);
    
    }

    
}
