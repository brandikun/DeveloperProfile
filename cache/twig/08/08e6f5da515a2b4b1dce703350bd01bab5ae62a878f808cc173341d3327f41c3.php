<?php

/* modular/github.html.twig */
class __TwigTemplate_ab1886aba3986f3e2935cd2c12e808b69003299a311347217e461ad2007c54a1 extends Twig_Template
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

";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "chart", array())) {
            // line 4
            echo "  <p><a href=\"https://github.com/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "github", array());
            echo "?tab=repositories\"><img class=\"img-responsive\" src=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "chart", array());
            echo "\" alt=\"GitHub Contributions Chart\" /></a></p>
";
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute(($context["theme_config"] ?? null), "github", array())) {
            // line 8
            echo "  <div id=\"ghfeed\" class=\"ghfeed\"></div>
";
        } else {
            // line 10
            echo "  <p>This theme use <a href=\"http://caseyscarborough.com/projects/github-activity/\">this plugin</a> for view the Github activity stream.</p>
  <p>Update your theme config on the key:<br /><code>github: \"github username\"</code></p>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/github.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  39 => 8,  37 => 7,  34 => 6,  26 => 4,  24 => 3,  19 => 1,);
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

{% if page.header.chart %}
  <p><a href=\"https://github.com/{{ theme_config.github }}?tab=repositories\"><img class=\"img-responsive\" src=\"{{ page.header.chart }}\" alt=\"GitHub Contributions Chart\" /></a></p>
{% endif %}

{% if theme_config.github %}
  <div id=\"ghfeed\" class=\"ghfeed\"></div>
{% else %}
  <p>This theme use <a href=\"http://caseyscarborough.com/projects/github-activity/\">this plugin</a> for view the Github activity stream.</p>
  <p>Update your theme config on the key:<br /><code>github: \"github username\"</code></p>
{% endif %}
", "modular/github.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular\\github.html.twig");
    }
}
