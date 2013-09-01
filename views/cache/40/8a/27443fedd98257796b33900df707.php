<?php

/* index.twig */
class __TwigTemplate_408a27443fedd98257796b33900df707 extends Twig_Template
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
        $this->env->loadTemplate("partials/header.twig")->display($context);
        // line 2
        echo "
<h1>Hello, world!</h1>

";
        // line 5
        $this->env->loadTemplate("partials/footer.twig")->display($context);
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
