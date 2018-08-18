<?php

/* modular/skills.html.twig */
class __TwigTemplate_71bd630f6ae944f4965529d6cc09d2a5afb95a4a32aca871ec55ba85f6359d7c extends Twig_Template
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
            echo "  <p class=\"intro\">";
            echo strip_tags($this->getAttribute(($context["page"] ?? null), "summary", array()));
            echo "</p>

  <div class=\"skillset\">
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "      <div class=\"item\">
        <h3 class=\"level-title\">";
                // line 9
                echo $this->getAttribute($context["item"], "title", array());
                echo " <span class=\"level-label\" ";
                if ($this->getAttribute($this->getAttribute($context["item"], "header", array()), "tooltip", array())) {
                    echo "data-toggle=\"tooltip\" data-placement=\"left\" data-animation=\"true\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "header", array()), "tooltip", array()), "html_attr");
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "level", array()), "text", array());
                echo "</span></h3>
        <div class=\"level-bar\">
          <div class=\"level-bar-inner\" data-level=\"";
                // line 11
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "level", array()), "value", array());
                echo "%\">
          </div>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/skills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  53 => 11,  40 => 9,  37 => 8,  33 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
  <p class=\"intro\">{{ page.summary | striptags }}</p>

  <div class=\"skillset\">
    {% for item in collection %}
      <div class=\"item\">
        <h3 class=\"level-title\">{{ item.title }} <span class=\"level-label\" {% if item.header.tooltip %}data-toggle=\"tooltip\" data-placement=\"left\" data-animation=\"true\" title=\"{{ item.header.tooltip | e('html_attr') }}\"{% endif %}>{{ item.header.level.text }}</span></h3>
        <div class=\"level-bar\">
          <div class=\"level-bar-inner\" data-level=\"{{ item.header.level.value }}%\">
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
{% endif %}
", "modular/skills.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular\\skills.html.twig");
    }
}
