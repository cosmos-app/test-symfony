<?php

namespace App\Controller;

use App\Entity\Province;
use App\Entity\Region;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CommunesController extends AbstractController
{
    /**
     * @Route("/communes", name="communes")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $filter = $request->request->get('filter', []);

        if (!is_array($filter)) {
            return $this->json([], JsonResponse::HTTP_BAD_REQUEST);
        }

        $region = isset($filter[0]) ? (string) $filter[0] : null;
        $province = isset($filter[1]) ? (string) $filter[1] : null;

        $response[] = $this->getDoctrine()
            ->getRepository(Region::class)
            ->findForApi($region);

        $response[] = $this->getDoctrine()
            ->getRepository(Province::class)
            ->findForApi($province);

        return $this->json($response);
    }
}
