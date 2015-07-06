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
