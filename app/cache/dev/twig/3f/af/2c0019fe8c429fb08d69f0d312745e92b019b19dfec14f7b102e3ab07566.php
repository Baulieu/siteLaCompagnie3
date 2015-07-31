<?php

/* LcbVitrineBundle:Default:contact.html.twig */
class __TwigTemplate_3faf2c0019fe8c429fb08d69f0d312745e92b019b19dfec14f7b102e3ab07566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LcbVitrineBundle::layout.html.twig", "LcbVitrineBundle:Default:contact.html.twig", 1);
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
        <form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            <div class=\"form-group\">
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                ";
        // line 12
        echo "                <input type=\"text\" name=\"prenom\" class=\"form-control\" placeholder=\"Votre prénom\" required>
            </div>

            <div class=\"form-group\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom"));
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                ";
        // line 19
        echo "                <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Votre nom\" required>
            </div>

            <div class=\"form-group\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "date"));
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
                ";
        // line 26
        echo "                <input type=\"date\" name=\"date\" class=\"form-control\" placeholder=\"Date\" required>
            </div>

            <div class=\"form-group\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'label', array("label" => "Adresse mail"));
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'errors');
        echo "
                ";
        // line 33
        echo "                <input type=\"email\" name=\"mail\" class=\"form-control\" placeholder=\"Votre mail\" required>
            </div>

            <div class=\"form-group\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'label', array("label" => "Votre message"));
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'errors');
        echo "
                <input type=\"text\" name=\"text\" class=\"form-control\" placeholder=\"Votre message\" required>
            </div>

            ";
        // line 43
        echo "            <input type=\"submit\" class=\"btn btn-primary\">
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "LcbVitrineBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  104 => 38,  100 => 37,  94 => 33,  90 => 31,  86 => 30,  80 => 26,  76 => 24,  72 => 23,  66 => 19,  62 => 17,  58 => 16,  52 => 12,  48 => 10,  44 => 9,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
