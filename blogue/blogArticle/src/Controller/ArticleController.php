<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/article')]
class ArticleController extends AbstractController
{
    #[Route('/', name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository,PaginatorInterface $paginator, Request $request): Response
    {
        $pagination = $paginator->paginate(
            $articleRepository->filter(), /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3 /*limit per page*/
    );
        return $this->render('article/index.html.twig', [
            // 'articles' => $articleRepository->getLastInserted('App:Article',5),
            // 'articles' => $articleRepository->getLastInserted('App:Article',5),
            'articles' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            // Recuperation du user connecté

            $article->setUser($this->getUser());

            $entityManager->persist($article);
            $entityManager->flush();

            // Message Flach

                $this->addFlash('success', 'votre article à été bien créé ');

            // Fin Message Flach


            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

             

        $this->addFlash('danger', 'Oops ko ');
        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_show', methods: ['GET','POST'])]
    public function show(Article $article,Request $request, EntityManagerInterface $entityManager, CommentRepository $commentRepository): Response
    { 

        //  AJout Comment 
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $comment->setArticle($article);
            $comment->setUser($this->getUser());


            $entityManager->persist($comment);

            $entityManager->flush();

            // return $this->redirectToRoute('app_comment_index', [], Response::HTTP_SEE_OTHER);

            // la rederection
            return $this->redirectToRoute('app_article_show', ['id'=> $article->getId()]);
        }

        // fIN Ajout Comment 

        $comments = $entityManager->getRepository(comment::class);


        return $this->render('article/show.html.twig', [
            'article' => $article,
            'form' => $form,
            'comments' => $comments->findBy(['Article'=>$article]),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {

        // access control avec voter 
        $this->denyAccessUnlessGranted('EDIT', $article);
        // fin access control


        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
    }
}
