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
        <li class=\"test-class active\"><a class=\"deco-none misc-class\" href=\"#how-to\"><span class=\"glyphicon glyphicon-cog\"></span> How To</a></li>
        <li class=\"test-class\"><a href=\"#features\">Key Features</a></li>
        <li><a class=\"deco-none\" href=\"#source\">Source</a></li>
    </ul>

    <div class=\"tab-content responsive\">
        <div class=\"tab-pane active\" id=\"how-to\">
            <h3>Steps</h3>
            <ol>
                <li>Include bootstrap css and js.</li>
                <li>Include responsive-tabs.js.</li>
                <li>Setup tabs per the bootstrap <a href=\"//getbootstrap.com/javascript/#tabs\">documents</a>.</li>
                <li>Add a <code>responsive</code> class to the <code>ul</code> that is used to create the tabs.</li>
                <li>Add a <code>responsive</code> class to the <code>div</code> that is used to create the tab-content.</li>
                <li>Call <code>fakewaffle.responsiveTabs(['xs', 'sm']);</code> in your load up script, while passing an array of bootstrap sizes that you want the to be displayed as accordions, e.g. ['xs', 'sm'] which is used by default.</li>
            </ol>
            <h3>Example Markup</h3>
            <div class=\"alert alert-info\">
                <strong>Note:</strong> The only difference from the standard bootstrap tab markup to the responsive markup is the addition of the <em class=\"text-danger\">responsive</em>, and calling the <code>fakewaffle.responsiveTabs();</code> function.
            </div>
          <pre>
&lt;ul class=\"nav nav-tabs <span class=\"text-danger\">responsive</span>\" id=\"myTab\"&gt;
  &lt;li class=\"active\"&gt;&lt;a href=\"#home\"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=\"#profile\"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=\"#messages\"&gt;Messages&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div class=\"tab-content <span class=\"text-danger\">responsive</span>\"&gt;
  &lt;div class=\"tab-pane active\" id=\"home\"&gt;...content...&lt;/div&gt;
  &lt;div class=\"tab-pane\" id=\"profile\"&gt;...content...&lt;/div&gt;
  &lt;div class=\"tab-pane\" id=\"messages\"&gt;...content...&lt;/div&gt;
&lt;/div&gt;

&lt;script type=\"text/javascript\"&gt;
  (function(\$) {
      fakewaffle.responsiveTabs(['xs', 'sm']);
  })(jQuery);
&lt;/script&gt;</pre>
            <button class='btn btn-primary js-alert-test'>Test Event Maintained</button>
        </div>
        <div class=\"tab-pane\" id=\"features\">
            <br>
            <ul>
                <li>Uses standard bootstrap tab markup</li>
                <li>Accordion is created with jquery</li>
                <li>Tabs and Accordion are the fully accessible via keyboard</li>
                <li>Supports multiple tabs on a page, with or without being responsive</li>
            </ul>
        </div>
        <div class=\"tab-pane\" id=\"source\">
            <h3>Source code</h3>
            <p>You may download the source code from <a href=\"https://github.com/openam/bootstrap-responsive-tabs/archive/master.zip\">github</a>.</p>
            <h3>Reporting issues</h3>
            <p>If you have any issues with this please report in on <a href=\"https://github.com/openam/bootstrap-responsive-tabs/issues\">github</a>.</p>
            <h3>Contributing</h3>
            <p>If you'd like to contribute to this project, you can fork the project send a pull request.</p>
        </div>
    </div>
    


</div> <!-- /container -->

<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
<script src=\"js/responsive-tabs.js\"></script>
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

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
