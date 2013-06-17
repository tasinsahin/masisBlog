<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Login\LoginBundle\Entity\Blog;

class BlogController extends Controller {

    public function newAction() {
        $session = $this->getRequest()->getSession();
        $request = $this->getRequest();

        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            if ($username == null) {
                $response = $this->forward('LoginLoginBundle:Default:login');
                return $response;
            } else {
                if ($request->getMethod() == 'POST') {

                    $title = $request->get('title');
                    $blog = $request->get('blog');
                    $author = 'admin';

                    $Blog = new Blog();
                    $Blog->setTitle($title);
                    $Blog->setBlog($blog);
                    $Blog->setAuthor($author);
                    $em = $this->getDoctrine()->getEntityManager();
                    $em->persist($Blog);
                    $em->flush();
                    return $this->render('LoginLoginBundle:Blog:blog.html.twig');
                }
                return $this->render('LoginLoginBundle:Blog:blog.html.twig');
            }
        }
        return $this->render('LoginLoginBundle:Default:login.html.twig');
    }

    public function listAction() {
        $session = $this->getRequest()->getSession();
        $request = $this->getRequest();

        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            if ($username == null) {
                $response = $this->forward('LoginLoginBundle:Default:login');
                return $response;
            } else {

                $em = $this->getDoctrine()->getEntityManager();
                $repository = $em->getRepository('LoginLoginBundle:Contact');

                $contacts = $repository->findBy(array(), array('id'=>'desc'));
                return $this->render('LoginLoginBundle:Blog:contactList.html.twig', array(
                            'contacts' => $contacts));
            }
        }
        $response = $this->forward('LoginLoginBundle:Default:login');
        return $response;
    }

}