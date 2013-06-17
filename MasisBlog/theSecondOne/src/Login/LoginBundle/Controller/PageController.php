<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Login\LoginBundle\Entity\Contact;
use Login\LoginBundle\Entity\Comment;

class PageController extends Controller {

    public function indexAction() {

        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('LoginLoginBundle:Blog');

        $blogs = $repository->findBy(array(), array('id'=>'desc'));
        return $this->render('LoginLoginBundle:Page:index.html.twig', array(
                    'blogs' => $blogs));
    }

    public function aboutAction() {
        return $this->render('LoginLoginBundle:Page:about.html.twig');
    }

    public function detailsAction($blog_id) {

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $comment = $request->get('comment');

            $session = $this->getRequest()->getSession();

            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                if ($username == null) {
                    $response = $this->forward('LoginLoginBundle:Default:login');
                    return $response;
                } else {
                    $Comment = new Comment();
                    $Comment->setComment($comment);
                    $Comment->setBlog($blog_id);
                    $Comment->setUser($username);
                    $em = $this->getDoctrine()->getEntityManager();
                    $em->persist($Comment);
                    $em->flush();
                    $response = $this->forward('LoginLoginBundle:Page:index');
                    return $response;
                }
            } else {
                return $this->render('LoginLoginBundle:Default:login.html.twig');
            }
        } else {
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('LoginLoginBundle:Blog');

            $Blog = $repository->find($blog_id);


            $repository2 = $em->getRepository('LoginLoginBundle:Comment');

            $Comments = $repository2->findBy(array('blog' => $blog_id));


            return $this->render('LoginLoginBundle:Page:details.html.twig', array('blog' => $Blog, 'comments' => $Comments));
        }
    }

    public function contactAction() {

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {

            $username = $request->get('username');
            $subject = $request->get('subject');
            $email = $request->get('email');
            $body = $request->get('body');

            $contact = new Contact();
            $contact->setUsername($username);
            $contact->setSubject($subject);
            $contact->setEmail($email);
            $contact->setBody($body);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($contact);
            $em->flush();
            $response = $this->forward('LoginLoginBundle:Page:index');
            return $response;
        } else {
            return $this->render('LoginLoginBundle:Page:contact.html.twig');
        }
    }

}