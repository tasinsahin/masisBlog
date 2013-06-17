<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Login\LoginBundle\Entity\Users;
use Login\LoginBundle\Modals\Login;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('LoginLoginBundle:Page:index.html.twig');
    }

    public function loginAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('LoginLoginBundle:Users');

        if ($request->getMethod() == 'POST') {
            $session->clear();
            $username = $request->get('username');
            $password = $request->get('password');
            $remember = $request->get('remember');

            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('LoginLoginBundle:Users');

            $user = $repository->findOneBy(array('userName' => $username, 'password' => $password));

            if ($user) {
                if ($username == 'admin' && $password == 'admin') {
                    $login = new Login();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $session->set('login', $login);
                    $response = $this->forward('LoginLoginBundle:Blog:list');
                    return $response;
                } else {
                    $login = new Login();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $session->set('login', $login);

                    $response = $this->forward('LoginLoginBundle:Page:index');
                    return $response;
                }
            } else {
                return $this->render('LoginLoginBundle:Default:login.html.twig');
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('userName' => $username, 'password' => $password));
                if ($user) {
                    $response = $this->forward('LoginLoginBundle:Page:index');
                    return $response;
                }
            }
            return $this->render('LoginLoginBundle:Default:login.html.twig');
        }
            return $this->render('LoginLoginBundle:Default:login.html.twig');
    }

    public function signupAction(Request $request) {
        if ($request->getMethod() == 'POST') {

            $username = $request->get('username');
            $firstname = $request->get('firstname');
            $password = $request->get('password');

            $user = new Users();
            $user->setFirstName($firstname);
            $user->setPassword($password);
            $user->setUserName($username);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $em->flush();
            return $this->render('LoginLoginBundle:Default:login.html.twig');
        }
        return $this->render('LoginLoginBundle:Default:signup.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('LoginLoginBundle:Default:login.html.twig');
    }

}
