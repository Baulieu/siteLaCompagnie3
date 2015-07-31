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
    <nav class=\"navbar navbar-default navbar-fixed-top topnav\" role=\"navigation\">
        <div class=\"container topnav\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand topnav\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("lcb_accueil");
        echo "\">Bienvenue à bord, Bátar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("lcb_news");
        echo "\">Les News</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("lcb_projet");
        echo "\">Le Projet</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("lcb_boutique");
        echo "\">La Boutique</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("lcb_batars");
        echo "\">Les Bátars</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("lcb_contact");
        echo "\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "
        <!-- jQuery -->
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <!--<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/jquery.js"), "html", null, true);
        echo "\"></script>-->

        <!-- Bootstrap Core JavaScript -->
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
        <!--<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>-->

        <!-- Special Scripts for this page -->
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/accueil.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 82
        $this->displayBlock('end_block', $context, $blocks);
        // line 84
        echo "    </body>
</html>";
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        // line 69
        echo "        ";
    }

    // line 82
    public function block_end_block($context, array $blocks = array())
    {
        // line 83
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
        return array (  162 => 83,  159 => 82,  155 => 69,  152 => 68,  147 => 84,  145 => 82,  141 => 81,  137 => 80,  131 => 77,  124 => 73,  119 => 70,  117 => 68,  106 => 60,  100 => 57,  94 => 54,  88 => 51,  82 => 48,  73 => 42,  48 => 20,  42 => 17,  36 => 14,  21 => 1,);
    }
}
