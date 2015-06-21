<?php

namespace RachinskyAdminBundle\Controller;

use RachinskyAdminBundle\Entity\AnswerUnit;
use RachinskyAdminBundle\Form\Type\UnitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AnswerUnitsController extends Controller {

    public function listAction()
    {
        return $this->render(':admin/answer-units:list.html.twig');
    }

    public function newAction(Request $request)
    {
        $unit = new AnswerUnit();
        $form = $this->createForm(new UnitType(), $unit);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($unit);
            $em->flush();

            return $this->redirectToRoute('rachinsky_admin_answer_units_list');
        }

        return $this->render(
            'admin/answer-units/new.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

    public function editAction(Request $request, $id)
    {
        return $this->render('admin/answer-units/edit.html.twig', ['id' => $id]);
    }

    public function deleteAction(Request $request, $id)
    {
        return $this->render('admin/answer-units/delete.html.twig', ['id' => $id]);
    }
}