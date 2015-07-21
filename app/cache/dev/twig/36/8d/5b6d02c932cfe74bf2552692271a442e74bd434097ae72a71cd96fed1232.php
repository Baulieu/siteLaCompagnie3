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
            'end_block' => array($this, 'block_end_block'),
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
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\" ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/css/landing-page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"";
        // line 20
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
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
        <!-- jQuery -->
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <!--<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/jquery.js"), "html", null, true);
        echo "\"></script>-->

        <!-- Bootstrap Core JavaScript -->
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
        <!--<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>-->

        <!-- Special Scripts for this page -->
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/accueil.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 46
        $this->displayBlock('end_block', $context, $blocks);
        // line 48
        echo "    </body>
</html>";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "        ";
    }

    // line 46
    public function block_end_block($context, array $blocks = array())
    {
        // line 47
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
        return array (  108 => 47,  105 => 46,  101 => 33,  98 => 32,  93 => 48,  91 => 46,  87 => 45,  83 => 44,  77 => 41,  70 => 37,  65 => 34,  63 => 32,  48 => 20,  42 => 17,  36 => 14,  21 => 1,);
    }
}
