<?php

/* LcbVitrineBundle::layout.html.twig */
class __TwigTemplate_368d5b6d02c932cfe74bf2552692271a442e74bd434097ae72a71cd96fed1232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <title>a base de layout</title>
        <meta charset=\"'utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\" ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/css/landing-page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Special Scripts for this page -->
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/accueil.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "        ";
    }

    public function getTemplateName()
    {
        return "LcbVitrineBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  88 => 30,  81 => 40,  77 => 39,  71 => 36,  65 => 33,  62 => 32,  60 => 30,  45 => 18,  39 => 15,  33 => 12,  20 => 1,);
    }
}
