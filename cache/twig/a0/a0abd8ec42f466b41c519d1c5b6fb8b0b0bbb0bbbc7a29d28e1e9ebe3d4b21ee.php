<?php

/* modular.html.twig */
class __TwigTemplate_c6130a407bca57e93bf0bf058a6031eb3a8ff17f4fa9b782aae4d58a978bc026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'body_content' => array($this, 'block_body_content'),
            'body_js' => array($this, 'block_body_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 4
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_content($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"container sections-wrapper\">
    <div class=\"row\">
      <div class=\"primary col-md-8 col-sm-12 col-xs-12\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($this->getAttribute($context["module"], "header", array()), "section_position", array()) != "sidebar")) {
                // line 13
                echo "          <section class=\"";
                echo (($this->getAttribute($this->getAttribute($context["module"], "header", array(), "any", false, true), "section_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["module"], "header", array(), "any", false, true), "section_class", array()), $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method"))) : ($this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method")));
                echo " section\">
            <div class=\"section-inner\">
              <h2 class=\"heading\">";
                // line 15
                echo $this->getAttribute($context["module"], "title", array());
                echo "</h2>
              <div class=\"content\">";
                // line 16
                echo $this->getAttribute($context["module"], "content", array());
                echo "</div>
            </div>
          </section>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </div>

      <div class=\"secondary col-md-4 col-sm-12 col-xs-12\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($this->getAttribute($context["module"], "header", array()), "section_position", array()) == "sidebar")) {
                // line 24
                echo "          <aside class=\"";
                echo (($this->getAttribute($this->getAttribute($context["module"], "header", array(), "any", false, true), "section_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["module"], "header", array(), "any", false, true), "section_class", array()), $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method"))) : ($this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method")));
                echo " aside section\">
            <div class=\"section-inner\">
              <h2 class=\"heading ";
                // line 26
                if ($this->getAttribute($this->getAttribute($context["module"], "header", array()), "hide_title", array())) {
                    echo "sr-only";
                }
                echo "\">";
                echo $this->getAttribute($context["module"], "title", array());
                echo "</h2>
              <div class=\"content\">";
                // line 27
                echo $this->getAttribute($context["module"], "content", array());
                echo "</div>
            </div>
          </aside>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "      </div>
    </div>
  </div>
";
    }

    // line 36
    public function block_body_js($context, array $blocks = array())
    {
        // line 37
        echo "  ";
        $this->displayParentBlock("body_js", $context, $blocks);
        echo "

  ";
        // line 39
        if ($this->getAttribute(($context["theme_config"] ?? null), "github", array())) {
            // line 40
            echo "    ";
            $this->loadTemplate("plugins/github_activity.html.twig", "modular.html.twig", 40)->display($context);
            // line 41
            echo "  ";
        }
        // line 42
        echo "
  ";
        // line 43
        if ($this->getAttribute(($context["theme_config"] ?? null), "rss_feed", array())) {
            // line 44
            echo "    ";
            $this->loadTemplate("plugins/jquery_rss.html.twig", "modular.html.twig", 44)->display($context);
            // line 45
            echo "  ";
        }
    }

    // line 6
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 6,  135 => 45,  132 => 44,  130 => 43,  127 => 42,  124 => 41,  121 => 40,  119 => 39,  113 => 37,  110 => 36,  103 => 31,  92 => 27,  84 => 26,  78 => 24,  73 => 23,  68 => 20,  57 => 16,  53 => 15,  47 => 13,  42 => 12,  37 => 9,  34 => 8,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default.html.twig' %}

{% set collection = page.collection() %}
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}

{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

{% block body_content %}
  <div class=\"container sections-wrapper\">
    <div class=\"row\">
      <div class=\"primary col-md-8 col-sm-12 col-xs-12\">
        {% for module in collection if module.header.section_position != 'sidebar' %}
          <section class=\"{{ module.header.section_class | default(_self.pageLinkName(module.menu)) }} section\">
            <div class=\"section-inner\">
              <h2 class=\"heading\">{{ module.title }}</h2>
              <div class=\"content\">{{ module.content }}</div>
            </div>
          </section>
        {% endfor %}
      </div>

      <div class=\"secondary col-md-4 col-sm-12 col-xs-12\">
        {% for module in collection if module.header.section_position == 'sidebar' %}
          <aside class=\"{{ module.header.section_class | default(_self.pageLinkName(module.menu)) }} aside section\">
            <div class=\"section-inner\">
              <h2 class=\"heading {% if module.header.hide_title %}sr-only{% endif %}\">{{ module.title }}</h2>
              <div class=\"content\">{{ module.content }}</div>
            </div>
          </aside>
        {% endfor %}
      </div>
    </div>
  </div>
{% endblock %}

{% block body_js %}
  {{ parent() }}

  {% if theme_config.github %}
    {% include 'plugins/github_activity.html.twig' %}
  {% endif %}

  {% if theme_config.rss_feed %}
    {% include 'plugins/jquery_rss.html.twig' %}
  {% endif %}
{% endblock %}
", "modular.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular.html.twig");
    }
}
