<?php

/* LcbVitrineBundle:Default:ajoutMeubles.html.twig */
class __TwigTemplate_0f687ad9a78d9357c67d3bc7454f0e31e78f8e9ea635cca70ac2d6d5afcf3998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LcbVitrineBundle::layout.html.twig", "LcbVitrineBundle:Default:ajoutMeubles.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LcbVitrineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"well\">
        <form method=\"post\" role=\"form\">
            <div class=\"form-group\">
                <label for=\"nom\"></label>
                <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"nom du meublezer\" required>
            </div>

            <div class=\"form-group\">
                <label for=\"prix\"></label>
                <input type=\"number\" name=\"prix\" class=\"form-control\" placeholder=\"40000\" required>
            </div>

            <div class=\"form-group\">
                <label for=\"nb_plaques\"></label>
                <input type=\"number\" name=\"nb_plaques\" class=\"form-control\" placeholder=\"1\" required>
            </div>

            <p>TODO : ajouter un uploader de photo carrée 200x200px pour faire l'image dans la galerie de sélection.</p>

            <input type=\"submit\" name=\"ajout\" value=\"Ajouter\" class=\"btn btn-primary\">
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "LcbVitrineBundle:Default:ajoutMeubles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
