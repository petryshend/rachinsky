<?php

namespace RachinskyAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProblemsController extends Controller
{
    public function listAction()
    {
        return $this->render(':admin/problems:list.html.twig');
    }

    public function newAction()
    {
        return $this->render(':admin/problems:new.html.twig');
    }

    public function editAction(Request $request, $id)
    {
        return $this->render(':admin/problems:edit.html.twig', ['id' => $id]);
    }

    public function deleteAction(Request $request, $id)
    {
        return $this->render(':admin/problems:delete.html.twig', ['id' => $id]);
    }
}
