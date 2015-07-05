<?php

/* LcbVitrineBundle::layout.html.twig */
class __TwigTemplate_99965a1e55d29a6a4017751c9a0473786c71272863a3965ddbd2de5df63ff12c extends Twig_Template
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
    </head>

    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "    </body>
</html>";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "        ";
    }

    public function getTemplateName()
    {
        return "LcbVitrineBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  38 => 10,  33 => 12,  31 => 10,  20 => 1,);
    }
}
