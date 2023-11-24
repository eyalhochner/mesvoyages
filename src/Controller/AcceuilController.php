<?php



namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

/* Description of AcceuilController
 *
 * @author eyalh
 */
class AcceuilController {
/**
 * @Route ("/", name="acceuil") Description
 * @return Response
 */
public function index(): Response{
    return new Response ('Hello World');
}
}
