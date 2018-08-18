<?php

/* modular/languages.html.twig */
class __TwigTemplate_5a64812a8673195660d97ed9ab800676d19fd7fa26300160bb49c0b44104f9aa extends Twig_Template
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
            echo "  <ul class=\"list-unstyled\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "      <li class=\"item\">
        <span class=\"title\"><strong>";
                // line 7
                echo $this->getAttribute($context["item"], "title", array());
                echo ":</strong></span>
        <span class=\"level\">
          ";
                // line 9
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "level", array()), "text", array());
                echo " <br class=\"visible-xs\"/>
          ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "level", array()), "value", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
                    // line 11
                    echo "            <i class=\"fa fa-star\"></i>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "        </span>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/languages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  56 => 13,  49 => 11,  45 => 10,  41 => 9,  36 => 7,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
  <ul class=\"list-unstyled\">
    {% for item in collection %}
      <li class=\"item\">
        <span class=\"title\"><strong>{{ item.title }}:</strong></span>
        <span class=\"level\">
          {{ item.header.level.text }} <br class=\"visible-xs\"/>
          {% for star in 1..item.header.level.value %}
            <i class=\"fa fa-star\"></i>
          {% endfor %}
        </span>
      </li>
    {% endfor %}
  </ul>
{% endif %}
", "modular/languages.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular\\languages.html.twig");
    }
}
