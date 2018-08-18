<?php

/* modular/education.html.twig */
class __TwigTemplate_3103881a8fe7c261c300ccc5555d16f5e54c83904d22cee1d8bf4ac5f7033bf1 extends Twig_Template
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
      <h3 class=\"title\"><i class=\"fa fa-graduation-cap\"></i> ";
                // line 6
                echo $this->getAttribute($context["item"], "title", array());
                echo "</h3>
      <h4 class=\"university\">";
                // line 7
                echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "university", array());
                echo " <span class=\"year\">(";
                echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "year", array());
                echo ")</span></h4>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "modular/education.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
      <h3 class=\"title\"><i class=\"fa fa-graduation-cap\"></i> {{ item.title }}</h3>
      <h4 class=\"university\">{{ item.header.university }} <span class=\"year\">({{ item.header.year }})</span></h4>
    </div>
  {% endfor %}
{% endif %}
", "modular/education.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular\\education.html.twig");
    }
}
