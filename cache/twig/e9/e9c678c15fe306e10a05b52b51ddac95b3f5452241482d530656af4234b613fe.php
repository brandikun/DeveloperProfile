<?php

/* modular/basic_informations.html.twig */
class __TwigTemplate_8883cd9513ec84eccc0f1f348f47b1095a8f2488603c362e7066d15d2e21689b extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", array()), "informations", array()))) {
            // line 2
            echo "  <ul class=\"list-unstyled\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", array()), "informations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 4
                echo "      <li>
        ";
                // line 5
                if ($this->getAttribute($context["info"], "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($context["info"], "icon", array());
                    echo "\"></i>";
                }
                // line 6
                echo "        ";
                if ($this->getAttribute($context["info"], "label", array())) {
                    echo "<span class=\"sr-only\">";
                    echo $this->getAttribute($context["info"], "label", array());
                    echo ":</span>";
                }
                echo " ";
                if ($this->getAttribute($context["info"], "url", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["info"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["info"], "text", array());
                    echo "</a>";
                } else {
                    echo $this->getAttribute($context["info"], "text", array());
                }
                // line 7
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/basic_informations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  54 => 7,  37 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if theme_config.profile.informations | length %}
  <ul class=\"list-unstyled\">
    {% for info in theme_config.profile.informations %}
      <li>
        {% if info.icon %}<i class=\"fa fa-{{ info.icon }}\"></i>{% endif %}
        {% if info.label %}<span class=\"sr-only\">{{ info.label }}:</span>{% endif %} {% if info.url %}<a href=\"{{ info.url }}\">{{ info.text }}</a>{% else %}{{ info.text }}{% endif %}
      </li>
    {% endfor %}
  </ul>
{% endif %}
", "modular/basic_informations.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular\\basic_informations.html.twig");
    }
}
