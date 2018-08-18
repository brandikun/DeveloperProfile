<?php

/* modular/listen_music.html.twig */
class __TwigTemplate_15e4c1ade45c25a2e370ab80b54f653d0a118afb65d0c6cfc2d35484a6e876a8 extends Twig_Template
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
                echo "      <li><i class=\"fa fa-headphones\"></i> <a href=\"";
                echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/listen_music.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
      <li><i class=\"fa fa-headphones\"></i> <a href=\"{{ item.header.link }}\">{{ item.title }}</a></li>
    {% endfor %}
  </ul>
{% endif %}
", "modular/listen_music.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular\\listen_music.html.twig");
    }
}