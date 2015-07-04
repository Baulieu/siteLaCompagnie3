<?php

namespace Lcb\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
		return $this->render('LcbVitrineBundle:Default:index-bootstrap.html.twig');
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

	public function souteAction()
	{
		/**
		* même principe que pour le projet:
		*    premier paragraphe introductif sur une photo large de la soute actuelle
		*    enchaînement de bandeaux retraçant l'histoire de la tessou
		**/
		return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => "soute"));
	}

	public function photosAction()
	{
		/**
		* tu veux que je te fasse un dessin? -> gallerie bootstrap? Ou trouver un truc moins connu..
		**/
		return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => "photos"));
	}

	public function contactAction()
	{
		/**
		* reprendre le même principe que pour la version 2.0
		* ATTENTION dans le message envoyés ensuite à la compagnie, bien marquer le nom, le message et l'adresse!!
		**/
		return $this->render('LcbVitrineBundle:Default:index.html.twig', array('name' => "contact"));
	}
}
