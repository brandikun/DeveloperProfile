<?php

/* modular/blog.html.twig */
class __TwigTemplate_85137f98f2b8b7d1ea64f57adf5beb4dd07227bcccd2ccfa40b78a2a9bf27267 extends Twig_Template
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
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
<div id=\"rss-feeds\"></div>
";
    }

    public function getTemplateName()
    {
        return "modular/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ page.content }}
<div id=\"rss-feeds\"></div>
", "modular/blog.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular\\blog.html.twig");
    }
}
