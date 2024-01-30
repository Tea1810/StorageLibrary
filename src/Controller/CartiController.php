<?php

namespace App\Controller;

use App\Entity\Carti;
use App\Form\CartiType;
use App\Repository\CartiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/carti')]
class CartiController extends AbstractController
{
    #[Route('/', name: 'app_carti_index', methods: ['GET'])]
    public function index(CartiRepository $cartiRepository): Response
    {
        return $this->render('carti/index.html.twig', [
            'cartis' => $cartiRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_carti_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $carti = new Carti();
        $form = $this->createForm(CartiType::class, $carti);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($carti);
            $entityManager->flush();

            return $this->redirectToRoute('app_carti_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('carti/new.html.twig', [
            'carti' => $carti,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_carti_show', methods: ['GET'])]
    public function show(Carti $carti): Response
    {
        return $this->render('carti/show.html.twig', [
            'carti' => $carti,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_carti_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Carti $carti, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CartiType::class, $carti);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_carti_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('carti/edit.html.twig', [
            'carti' => $carti,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_carti_delete', methods: ['POST'])]
    public function delete(Request $request, Carti $carti, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carti->getId(), $request->request->get('_token'))) {
            $entityManager->remove($carti);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_carti_index', [], Response::HTTP_SEE_OTHER);
    }
}
