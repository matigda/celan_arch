<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{

    public function indexAction()
    {
        $posts = $this->get('interactor.post.get_latest')->execute(5);

        return $this->render('@App/Blog/index.html.twig', array(
            'posts' => $posts
        ));
    }

    public function createAction(Request $request)
    {
        $form = $this->createForm(new PostType());
        $form->handleRequest($request);

        if($form->isValid()) {

            $postData = $request->request->get('appbundle_post');

            $requestDTO = $this->get('transformer.post.request.create_new')->createDTO($postData);
            $this->get('interactor.post.create_and_save')->execute($requestDTO);

            return $this->redirect($this->generateUrl('homepage'));
        }

        return $this->render('@App/Blog/create.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function showAction($id)
    {
        $requestDTO = $this->get('transformer.post.request.get_post')->createDTO(compact('id'));

        return $this->render('@App/Blog/show.html.twig', array(
            'post' => $this->get('interactor.post.show_post')->execute($requestDTO)
        ));
    }

    public function contactAction()
    {

    }
}
