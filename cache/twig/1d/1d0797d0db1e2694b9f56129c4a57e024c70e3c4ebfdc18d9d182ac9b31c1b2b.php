<?php

/* modular/projects.html.twig */
class __TwigTemplate_af1d7b4cad2f88ac68e580f18c412e89c549c7667751c3d3757f347ef14e0dac extends Twig_Template
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
        if (($context["collection"] ?? null)) {
            // line 4
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "    <div class=\"item\">
      <h3 class=\"title\">
        <a ";
                // line 7
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array())) {
                    echo "href=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
        ";
                // line 8
                if ($this->getAttribute($this->getAttribute($context["item"], "header", array()), "label", array())) {
                    echo "<span class=\"label label-theme\">";
                    echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "label", array());
                    echo "</span>";
                }
                // line 9
                echo "      </h3>
      <p class=\"summary\">";
                // line 10
                echo strip_tags($this->getAttribute($context["item"], "summary", array()));
                echo "</p>

      ";
                // line 12
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array()) && $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "title", array()))) {
                    // line 13
                    echo "        <p><a class=\"more-link\" href=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array());
                    echo "\"><i class=\"fa fa-external-link\"></i> ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "title", array());
                    echo "</a></p>
      ";
                }
                // line 15
                echo "    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "modular/projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  61 => 13,  59 => 12,  54 => 10,  51 => 9,  45 => 8,  35 => 7,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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

{% if collection %}
  {% for item in collection %}
    <div class=\"item\">
      <h3 class=\"title\">
        <a {% if item.header.link.url %}href=\"{{ item.header.link.url }}\"{% endif %}>{{ item.title }}</a>
        {% if item.header.label %}<span class=\"label label-theme\">{{ item.header.label }}</span>{% endif %}
      </h3>
      <p class=\"summary\">{{ item.summary | striptags }}</p>

      {% if item.header.link.url and item.header.link.title %}
        <p><a class=\"more-link\" href=\"{{ item.header.link.url }}\"><i class=\"fa fa-external-link\"></i> {{ item.header.link.title }}</a></p>
      {% endif %}
    </div>
  {% endfor %}
{% endif %}
", "modular/projects.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular\\projects.html.twig");
    }
}
