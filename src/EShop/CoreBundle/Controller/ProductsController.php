<?php

namespace EShop\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductsController extends Controller {
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('EShopCoreBundle:Product')
            ->getLatestProducts(6);
        return $this->render('EShopCoreBundle:Products:index.html.twig', array(
            'products' => $products
        ));
    }

    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        $comments = $em->getRepository('BloggerBlogBundle:Comment')
            ->getCommentsForBlog($blog->getId());

        return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
            'blog' => $blog,
            'comments' => $comments
        ));
    }
}
