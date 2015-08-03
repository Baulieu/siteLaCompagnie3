<?php

namespace Lcb\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lcb\VitrineBundle\Entity\message;
use Lcb\VitrineBundle\Entity\Article;
use Lcb\VitrineBundle\Entity\Meuble;

class DefaultController extends Controller
{

	public function accueilAction()
	{
		/**
		* page d'accueil : enchaînement de panneaux avec parallaxe.
		*
		* dans l'ordre:
		* -> welcome to Valhalla
		* -> les news
		* -> le projet
		* -> la boutique (trouver un autre nom)
		* -> les batars
		* -> la soute (devrait évoluer bientôt...)
		*
		* trois boutons de redirection:
		* -> facebook
		* -> youtube
		* -> twitter
		**/
		return $this->render('LcbVitrineBundle:Default:accueil2.html.twig');
	}

	public function newsAction()
	{
		/**
		* premier article affiché en grand #lagrosseactu
		* articles suivants en un peu plus petit, avec l'image associée qui change de côté à chaque fois.
		* à peu près semblable à la version 2.0
		**/

        /**
        * stratégie de construction de l'entité Article:
        * on ne peut avoir que cinq paragraphes + photos. Au max.
        * on a deux tableaux: un de cinq paragraphes, un de six strings.
        * le mec a le choix. Soit il uploade une photo, soit il met un lien.
        * dans tous les cas, le controller importe l'image en enregistre un string qui contient la balise img complète ou l'iframe.
        * au moment de faire le render, le twig se contente d'enchainer les trucs, en mettant les vidéos et les photos dans un bon format. #css
        **/

		return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => "news"));
	}

    public function newAction()
    {
        return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => "new"));
    }

	public function projetAction()
	{
		/**
		* présentation du projet
		* faire simplement:
		*    d'abord un paragraphe introductif
		*    puis des bandeaux larges de photos GH3 avec parallaxe, recouvert par un calque semi transparent et l'écriture dessus
		*    à la fin -> lien vers la galerie photo
		**/
		return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => "projet"));
	}

	public function boutiqueAction()
	{
		/**
         * En principe: faire une redirection simple vers "boutique.lacompagniedubatar.fr" -> ce sera le cas dans le turfu.
         * Pour l'instant on garde tout dans le même projet pour simplifier le développement.
		*/

        // TODO chercher les meubles openDesk depuis leur sitezer.
        $repository = $this->getDoctrine()->getManager()->getRepository('LcbVitrineBundle:Meuble');
        $meubles_compagnie_temp = $repository->findAll();
        $meubles_compagnie = array();
        foreach($meubles_compagnie_temp as $m)
            $meubles_compagnie [] = $m->getNom();

        $meubles_odesk = array('chaise1', 'chaise2', 'chaise3', 'chaise4', 'chaise5', 'chaise6', 'chaise7');
        //$meubles_compagnie = array('table1', 'table2', 'table3', 'table4', 'table5');

        $message = new message();

        $message->setDate(new \DateTime(date('Y-m-d H:i:s')));

        $request = $this->get('request');

        if ($request->getMethod() != 'POST')
        {
            return $this->render('LcbVitrineBundle:Default:boutique.html.twig', array('meubles_odesk' => $meubles_odesk, 'meubles_compagnie' => $meubles_compagnie));
        }

        if (isset($_POST['openDesk']))
        {
            $message->setMail($_POST['mail']);
            $message->setNom($_POST['nom']);
            $message->setPrenom($_POST['prenom']);

            $contenu = "**********  Nouveau message pour une commande pour un meuble OpenDesk!  **********\n";

            foreach ($meubles_odesk as $meuble)
            {
                if (isset($_POST[$meuble]))
                    $contenu = $contenu."\nIntéressé par : ".$meuble;
            }
            $contenu = $contenu."\n\n\n".$_POST['message'];

            $message->setText($contenu);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($message);
            $em->flush();
            return $this->redirect($this->generateUrl('lcb_merci'));
        }

        if (isset($_POST['catalogue']))
        {
            $message->setMail($_POST['mail']);
            $message->setNom($_POST['nom']);
            $message->setPrenom($_POST['prenom']);

            $contenu = "**********  Nouveau message pour une commande pour un meuble sue le catalogue hors OpenDesk!  **********\n\n\n".$_POST['message'];
            $message->setText($contenu);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($message);
            $em->flush();
            return $this->redirect($this->generateUrl('lcb_merci'));
        }

        if (isset($_POST['vosIdees']))
        {
            $message->setMail($_POST['mail']);
            $message->setNom($_POST['nom']);
            $message->setPrenom($_POST['prenom']);

            $contenu = "**********  Nouveau message pour un projet particulier!  **********\n\n\n".$_POST['message'];
            $message->setText($contenu);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($message);
            $em->flush();
            return $this->redirect($this->generateUrl('lcb_merci'));
        }

		return $this->render('LcbVitrineBundle:Default:boutique.html.twig', array('meubles_odesk' => $meubles_odesk, 'meubles_compagnie' => $meubles_compagnie));
	}

	public function batarsAction()
	{
		/**
		* reprendre la page de la version 2.1
		**/
		return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => "batars"));
	}

	public function souteAction() // TODO fill soute
	{
		/**
		* même principe que pour le projet:
		*    premier paragraphe introductif sur une photo large de la soute actuelle
		*    enchaînement de bandeaux retraçant l'histoire de la tessou
		**/
		return $this->render('LcbVitrineBundle:Default:soute.html.twig');
	}

	public function photosAction() // TODO fill photos
	{
		/**
		* tu veux que je te fasse un dessin? -> gallerie bootstrap? Ou trouver un truc moins connu..
		**/
		return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => "photos"));
	}

	public function contactAction()  // TODO ajouter envoi de mail à l'adresse de la compagnie
	{
		/**
		* reprendre le même principe que pour la version 2.0
		* ATTENTION dans le message envoyés ensuite à la compagnie, bien marquer le nom, le message et l'adresse!!
		**/
        $message = new message();

        $formBuilder = $this->createFormBuilder($message);
        $formBuilder
            ->add('prenom',     'text')
            ->add('nom',        'text')
            ->add('date',       'date')
            ->add('mail',       'text')
            ->add('text',   'textarea');
        $form = $formBuilder->getForm();

        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($message);
                $em->flush();
                return $this->redirect($this->generateUrl('lcb_acceuil'));
            }
        }

        return $this->render('LcbVitrineBundle:Default:contact.html.twig', array('form' => $form->createView()));
	}

    public function messagesAction() // RAS
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN'))
            return $this->redirect($this->generateUrl('lcb_accueil'));

        $repository = $this->getDoctrine()->getManager()->getRepository('LcbVitrineBundle:message');
        $messages = $repository->findAll();
        return $this->render('LcbVitrineBundle:Default:messages.html.twig', array('messages' => $messages));
    }

    public function ajoutArticleAction()
    {
        $article = new Article();

        $formBuilder = $this->createFormBuilder($article);
        $formBuilder
            ->add('titre',     'text')
            ->add('author',    'text')
            ->add('date',      'date')
            ->add('parties',   'collection', array('type' => 'text'))
            ->add('images',    'collection', array('type' => 'text'));
        $form = $formBuilder->getForm();

        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($article);
                $em->flush();
                return $this->redirect($this->generateUrl('lcb_news'));
            }
        }
        return $this->render('LcbVitrineBundle:Default:ajout.html.twig', array('form' => $form->createView()));
    }

    public function fichesAction()
    {
        return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => 'fiches'));
    }

    public function merciAction()
    {
        return $this->render('LcbVitrineBundle:Default:merci.html.twig');
    }

    public function ajoutFichesAction()
    {
        return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => 'ajoutFiches'));
    }

    public function ajoutMeubleAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN'))
            return $this->redirect($this->generateUrl('lcb_accueil'));

        $meuble = new Meuble();
        $meuble->setPhoto("tabouret1.jpg");

        $request = $this->get('request');

        if ($request->getMethod() != 'POST')
        {
            return $this->render('LcbVitrineBundle:Default:ajoutMeubles.html.twig');
        }

        $meuble->setNom($_POST['nom']);
        $meuble->setNbPlaques($_POST['nb_plaques']);
        $meuble->setPrix($_POST['prix']);

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($meuble);
        $em->flush();

        return $this->redirect($this->generateUrl('lcb_accueil'));
    }
}
