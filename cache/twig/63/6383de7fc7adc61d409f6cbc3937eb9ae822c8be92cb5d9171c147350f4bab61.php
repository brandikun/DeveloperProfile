<?php

/* modular/testimonials.html.twig */
class __TwigTemplate_35a3f75a8c54a464c96960fdd73401e18c70b1f72f0821a8d5b9062b73d35267 extends Twig_Template
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
      <blockquote class=\"quote\">
        <p><i class=\"fa fa-quote-left\"></i>";
                // line 7
                echo strip_tags($this->getAttribute($context["item"], "summary", array()));
                echo "</p>
      </blockquote>
      <p class=\"source\"><span class=\"name\">";
                // line 9
                echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "author", array());
                echo "</span><br /><span class=\"title\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</span></p>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
  ";
            // line 13
            if ($this->getAttribute(($context["theme_config"] ?? null), "linkedin", array())) {
                // line 14
                echo "    <p><a class=\"more-link\" href=\"";
                echo $this->getAttribute(($context["theme_config"] ?? null), "linkedin", array());
                echo "\"><i class=\"fa fa-external-link\"></i> More on Linkedin</a></p>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  54 => 13,  51 => 12,  40 => 9,  35 => 7,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
      <blockquote class=\"quote\">
        <p><i class=\"fa fa-quote-left\"></i>{{ item.summary | striptags }}</p>
      </blockquote>
      <p class=\"source\"><span class=\"name\">{{ item.header.author }}</span><br /><span class=\"title\">{{ item.title }}</span></p>
    </div>
  {% endfor %}

  {% if theme_config.linkedin %}
    <p><a class=\"more-link\" href=\"{{ theme_config.linkedin }}\"><i class=\"fa fa-external-link\"></i> More on Linkedin</a></p>
  {% endif %}
{% endif %}
", "modular/testimonials.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular\\testimonials.html.twig");
    }
}
