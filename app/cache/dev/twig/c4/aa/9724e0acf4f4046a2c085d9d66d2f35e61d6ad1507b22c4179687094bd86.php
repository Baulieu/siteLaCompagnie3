<?php

/* LcbVitrineBundle:Default:merci.html.twig */
class __TwigTemplate_c4aa9724e0acf4f4046a2c085d9d66d2f35e61d6ad1507b22c4179687094bd86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Merci!</title>
    </head>

<body>
    <h1>Merci pour votre message! À bientôt pour de nouvelles aventures.</h1>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("lcb_accueil");
        echo "\">retoour à la page d'accueil</a>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "LcbVitrineBundle:Default:merci.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }
}
