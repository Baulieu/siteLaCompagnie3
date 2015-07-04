<?php

/* LcbVitrineBundle:Default:accueil.html.twig */
class __TwigTemplate_ddbbe92b248a7dfec47203c565c5fb78ce2f30d1df3ec2b7e61cd6e182edd91d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>La compagnie du Bátar</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/css/landing-page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 21
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

    <!-- Navigation -->
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
                <a class=\"navbar-brand topnav\" href=\"#\">Bienvenue à bord, Bátar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("lcb_news");
        echo "\">Les News</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("lcb_projet");
        echo "\">Le Projet</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("lcb_boutique");
        echo "\">La Boutique</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("lcb_batars");
        echo "\">Les Bátars</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("lcb_contact");
        echo "\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name=\"about\"></a>
    <div class=\"intro-header\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"intro-message\">
                        <h1>La Compagnie du Bátar</h1>
                        <h3>Welcome to Valhalla</h3>
                        <hr class=\"intro-divider\">
                        <ul class=\"list-inline intro-social-buttons\">
                            <li>
                                <a href=\"https://twitter.com/DuBatar\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-twitter fa-fw\"></i> <span class=\"network-name\">Twitter</span></a>
                            </li>
                            <li>
                                <a href=\"https://www.facebook.com/pages/La-Compagnie-du-B%C3%A1tar/490761787601139?fref=ts\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-facebook fa-fw\"></i> <span class=\"network-name\">Facebook</span></a>
                            </li>
                            <li>
                                <a href=\"https://www.youtube.com/user/LaCompagnieDuBatar\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-youtube fa-fw\"></i> <span class=\"network-name\">Youtube</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

\t<a  name=\"services\"></a>
    <div class=\"content-section-a\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 col-sm-6\">
                    <hr class=\"section-heading-spacer\">
                    <div class=\"clearfix\"></div>
                    <h2 class=\"section-heading\">Death to the Stock Photo:<br>Special Thanks</h2>
                    <p class=\"lead\">A special thanks to <a target=\"_blank\" href=\"http://join.deathtothestockphoto.com/\">Death to the Stock Photo</a> for providing the photographs that you see in this template. Visit their website to become a member.</p>
                </div>
                <div class=\"col-lg-5 col-lg-offset-2 col-sm-6\">
                    <img class=\"img-responsive\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/img/ipad.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
    <div class=\"content-section-b\" id=\"secondPart\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 textes\">
                    <hr class=\"section-heading-spacer\">
                    <div class=\"clearfix\"></div>
                    <h2 class=\"section-heading\">3D Device Mockups<br>by PSDCovers</h2>
                    <p class=\"lead\">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target=\"_blank\" href=\"http://www.psdcovers.com/\">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
                </div>
                <div class=\"col-lg-5 col-sm-pull-6  col-sm-6\">
                    <!--<img class=\"img-responsive\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/img/dog.png"), "html", null, true);
        echo "\" alt=\"\">-->
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class=\"content-section-a\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-5 col-sm-6\">
                    <hr class=\"section-heading-spacer\">
                    <div class=\"clearfix\"></div>
                    <h2 class=\"section-heading\">Google Web Fonts and<br>Font Awesome Icons</h2>
                    <p class=\"lead\">This template features the 'Lato' font, part of the <a target=\"_blank\" href=\"http://www.google.com/fonts\">Google Web Font library</a>, as well as <a target=\"_blank\" href=\"http://fontawesome.io\">icons from Font Awesome</a>.</p>
                </div>
                <div class=\"col-lg-5 col-lg-offset-2 col-sm-6\">
                    <img class=\"img-responsive\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/img/phones.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

\t<a  name=\"contact\"></a>
    <div class=\"banner\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <h2>Connect to Start Bootstrap:</h2>
                </div>
                <div class=\"col-lg-6\">
                    <ul class=\"list-inline banner-social-buttons\">
                        <li>
                            <a href=\"https://twitter.com/SBootstrap\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-twitter fa-fw\"></i> <span class=\"network-name\">Twitter</span></a>
                        </li>
                        <li>
                            <a href=\"https://github.com/IronSummitMedia/startbootstrap\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-github fa-fw\"></i> <span class=\"network-name\">Github</span></a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-linkedin fa-fw\"></i> <span class=\"network-name\">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ul class=\"list-inline\">
                        <li>
                            <a href=\"#\">Home</a>
                        </li>
                        <li class=\"footer-menu-divider\">&sdot;</li>
                        <li>
                            <a href=\"#about\">About</a>
                        </li>
                        <li class=\"footer-menu-divider\">&sdot;</li>
                        <li>
                            <a href=\"#services\">Services</a>
                        </li>
                        <li class=\"footer-menu-divider\">&sdot;</li>
                        <li>
                            <a href=\"#contact\">Contact</a>
                        </li>
                    </ul>
                    <p class=\"copyright text-muted small\">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Special Scripts for this page -->
    <!--<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/accueil.js"), "html", null, true);
        echo "\"></script>-->
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>

    <script type = \"text/javascript\">
        \$(document).ready(function(){
            \$('.secondPart').parallax(\"50%\", 0.4);
        })
    </script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "LcbVitrineBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 239,  297 => 238,  291 => 235,  285 => 232,  213 => 163,  188 => 141,  164 => 120,  105 => 64,  99 => 61,  93 => 58,  87 => 55,  81 => 52,  47 => 21,  41 => 18,  35 => 15,  19 => 1,);
    }
}
