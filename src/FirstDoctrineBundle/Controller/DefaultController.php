<?php

namespace FirstDoctrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        /*
        $post = new Post();
        $post
            ->setTitle('Title')
            ->setContent('foo')
        ;
        $comment = new Comment();
        $comment
            ->setPost($post)
            ->setText('bla bla bla')
        ;

        $post->addComment($comment);

        $em = $this->getDoctrine()->getManager(); // $entityManager
        $em->persist($post);
        $em->persist($comment);
        $em->flush();

        $em->remove($post);
        $em->flush();

        $postRepository = $em->getRepository(Post::class);
        $findPost = $postRepository->find(1);
        $postRepository->findOneBy([
            'title' => 'Title 1',
        ]);
        $postRepository->findBy([
            'title' => 'Title 1',
        ]);
        $findPost->setTitle('foo');
        $em->flush();
        */
        return $this->render('FirstDoctrineBundle:Default:index.html.twig');
    }
}

