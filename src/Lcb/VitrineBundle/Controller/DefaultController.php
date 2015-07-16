<?php

namespace Lcb\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lcb\VitrineBundle\Entity\message;

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
		return $this->render('LcbVitrineBundle:Default:accueil.html.twig');
	}

	public function newsAction()
	{
		/**
		* premier article affiché en grand #lagrosseactu
		* articles suivants en un peu plus petit, avec l'image associée qui change de côté à chaque fois.
		* à peu près semblable à la version 2.0
		**/
		return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => "news"));
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
		* en principe: faire une redirection simple vers "boutique.lacompagniedubatar.fr"
		*/
		return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => "boutique"));
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

        $formbuilder = $this->createFormBuilder($message);
        $formbuilder
            ->add('prenom',     'text')
            ->add('nom',        'text')
            ->add('date',       'date')
            ->add('mail',       'text')
            ->add('text',    'textarea');
        $form = $formbuilder->getForm();

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
}
