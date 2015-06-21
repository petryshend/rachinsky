<?php

namespace RachinskyAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AnswerUnitsController extends Controller {

    public function listAction()
    {
        return $this->render(':admin/answer-units:list.html.twig');
    }

    public function newAction(Request $request)
    {
        return $this->render('admin/answer-units/new.html.twig');
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