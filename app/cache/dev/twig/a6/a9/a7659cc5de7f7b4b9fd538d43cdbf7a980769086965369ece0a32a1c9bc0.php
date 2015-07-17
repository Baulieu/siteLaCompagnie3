<?php

/* LcbVitrineBundle:Default:ajout.html.twig */
class __TwigTemplate_a6a9a7659cc5de7f7b4b9fd538d43cdbf7a980769086965369ece0a32a1c9bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LcbVitrineBundle::layout.html.twig", "LcbVitrineBundle:Default:ajout.html.twig", 1);
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
        <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("lcb_ajoutArticle");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

            <div>
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Titre de l'article"));
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
            </div>

            <div>
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label', array("label" => "auteur de l'article"));
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'errors');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget');
        echo "
            </div>

            <div>
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "date de publication de l'article"));
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
            </div>

            <div>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parties", array()), 'label', array("label" => "paragraphes de l'article"));
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parties", array()), 'errors');
        echo "
                <ul>
                    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parties", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["paragraphe"]) {
            // line 32
            echo "                        <li>
                            ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["paragraphe"], 'errors');
            echo "
                            ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["paragraphe"], 'widget');
            echo "
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraphe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </ul>
            </div>

            <div>
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Titre de l'article"));
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
               <ul>
                   ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 45
            echo "                       <li>
                           ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["image"], 'errors');
            echo "
                           ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["image"], 'widget');
            echo "
                       </li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "               </ul>
            </div>


            <input type=\"submit\" class=\"btn btn-primary\">
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "LcbVitrineBundle:Default:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 50,  150 => 47,  146 => 46,  143 => 45,  139 => 44,  134 => 42,  130 => 41,  124 => 37,  115 => 34,  111 => 33,  108 => 32,  104 => 31,  99 => 29,  95 => 28,  88 => 24,  84 => 23,  80 => 22,  73 => 18,  69 => 17,  65 => 16,  58 => 12,  54 => 11,  50 => 10,  44 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
