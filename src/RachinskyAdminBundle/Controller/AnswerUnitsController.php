<?php

namespace RachinskyAdminBundle\Controller;

use RachinskyAdminBundle\Entity\AnswerUnit;
use RachinskyAdminBundle\Form\Type\UnitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AnswerUnitsController extends Controller {

    public function listAction()
    {
        $units = $this->getDoctrine()
            ->getRepository('RachinskyAdminBundle:AnswerUnit')
            ->findAll();

        return $this->render(
            ':admin/answer-units:list.html.twig',
            [
                'units' => $units,
            ]
        );
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
        $unit = $this->getDoctrine()
            ->getRepository('RachinskyAdminBundle:AnswerUnit')
            ->find($id);
        if (!$unit) {
            throw new \Exception('AnswerUnit with that ID does not exist');
        }
        $form = $this->createForm(new UnitType(), $unit);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('rachinsky_admin_answer_units_list');
        }

        return $this->render(
            'admin/answer-units/edit.html.twig',
            [
                'unit' => $unit,
                'form' => $form->createView(),
            ]
        );
    }

    public function deleteAction(Request $request, $id)
    {
        return $this->render('admin/answer-units/delete.html.twig', ['id' => $id]);
    }
}