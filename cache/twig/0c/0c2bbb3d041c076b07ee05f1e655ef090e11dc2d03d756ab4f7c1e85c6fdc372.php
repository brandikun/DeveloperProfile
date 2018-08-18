<?php

/* modular/experience.html.twig */
class __TwigTemplate_6203773428f8f3692a23f0639a5d89ae53723de83b41b3328235b15312caca3c extends Twig_Template
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
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 2
        echo "
";
        // line 3
        if (twig_length_filter($this->env, ($context["collection"] ?? null))) {
            // line 4
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "    <div class=\"item\">
      <h3 class=\"title\">";
                // line 6
                echo $this->getAttribute($context["item"], "title", array());
                echo " - <span class=\"place\"><a href=\"#\">";
                echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "place", array());
                echo "</a></span> <span class=\"year\">(";
                echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "year", array());
                echo ")</span></h3>
      ";
                // line 7
                echo $this->getAttribute($context["item"], "content", array());
                echo "
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "modular/experience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  42 => 7,  34 => 6,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set collection = page.collection() %}

{% if collection | length %}
  {% for item in collection %}
    <div class=\"item\">
      <h3 class=\"title\">{{ item.title }} - <span class=\"place\"><a href=\"#\">{{ item.header.place }}</a></span> <span class=\"year\">({{ item.header.year }})</span></h3>
      {{ item.content }}
    </div>
  {% endfor %}

  {# % if theme_config.coderwall %}
     <p><a class=\"more-link\" href=\"https://coderwall.com/{{ theme_config.coderwall }}\"><i class=\"fa fa-external-link\"></i> More on Coderwall</a></p>
  {% endif % #}
{% endif %}
", "modular/experience.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular\\experience.html.twig");
    }
}
