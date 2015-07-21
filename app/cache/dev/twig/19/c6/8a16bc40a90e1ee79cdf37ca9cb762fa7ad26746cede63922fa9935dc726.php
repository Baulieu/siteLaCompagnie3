<?php

/* LcbVitrineBundle:Default:boutique.html.twig */
class __TwigTemplate_19c68a16bc40a90e1ee79cdf37ca9cb762fa7ad26746cede63922fa9935dc726 extends Twig_Template
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
    <title>page boutique</title>
    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
        .deco-none {
            text-decoration: none !important;
        }
    </style>
</head>
<body>

<div class=\"container\">

    <ul class=\"nav nav-tabs responsive\" id=\"myTab\">
        <li class=\"test-class active\"><a class=\"deco-none misc-class\" href=\"#openDesk\"><span class=\"glyphicon glyphicon-globe\"></span>  openDesk</a></li>
        <li class=\"test-class\"><a href=\"#catalogue\"><span class=\"glyphicon glyphicon-book\"></span>  notre catalogue</a></li>
        <li><a class=\"deco-none\" href=\"#vosIdees\"><span class=\"glyphicon glyphicon-pencil\"></span>  vos Idées</a></li>
    </ul>

    <div class=\"tab-content responsive\">
        <div class=\"tab-pane active\" id=\"openDesk\">
            <br>
            <p>la Compagnie est maker officiel du réseau OpenDesk depuis plus d'un an. N'hésitez pas à fouiller leur catalogue pour trouver votre bonheur!</p>
        </div>
        <div class=\"tab-pane\" id=\"catalogue\">
            <br>
            <p>La Compagnie est fière de vous présenter ses créations originales, ou issues d'autres réseaux qu'OpenDesk!</p>
        </div>
        <div class=\"tab-pane\" id=\"vosIdees\">
            <br>
            <p>Vous avez une idée précise à mettre en forme?</p>
            <p>Vous avez un projet complet à faire réaliser?</p>
            <p>Vous voulez réaliser un objet qui n'est pas encore dans le catalogue?</p>
            <p>La Compagnie sera heureuse de travailler avec vous à la réalisation de votre projet!<br>Dites-nous ce qui vous ferait plaisir:</p>
        </div>
    </div>



</div> <!-- /container -->

<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lcbvitrine/js/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$( '#myTab a' ).click( function ( e ) {
        e.preventDefault();
        \$( this ).tab( 'show' );
    } );

    \$( '#moreTabs a' ).click( function ( e ) {
        e.preventDefault();
        \$( this ).tab( 'show' );
    } );

    ( function( \$ ) {
        // Test for making sure event are maintained
        \$( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
        } );
        fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
    } )( jQuery );

</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-17600125-2', 'openam.github.io');
    ga('send', 'pageview');
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "LcbVitrineBundle:Default:boutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 45,  19 => 1,);
    }
}
