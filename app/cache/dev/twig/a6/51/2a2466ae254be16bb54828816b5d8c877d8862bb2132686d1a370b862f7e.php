<?php

/* LcbVitrineBundle:Default:soute.html.twig */
class __TwigTemplate_a6512a2466ae254be16bb54828816b5d8c877d8862bb2132686d1a370b862f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LcbVitrineBundle::layout.html.twig", "LcbVitrineBundle:Default:soute.html.twig", 1);
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
        echo "    <p>
        remplir avec des fonbouseries sur la tessou
    </p>
";
    }

    public function getTemplateName()
    {
        return "LcbVitrineBundle:Default:soute.html.twig";
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
