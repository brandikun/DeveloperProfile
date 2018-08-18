<?php

/* modular/latest_projects.html.twig */
class __TwigTemplate_e6009bcb74dfecb8ba542027e81be62c25deef04e94f1e26b31853141e0ded44 extends Twig_Template
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
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "    ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 6
                    echo "      <div class=\"item featured text-center\">
        <h3 class=\"title\">
          <a ";
                    // line 8
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array())) {
                        echo "href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array());
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
          ";
                    // line 9
                    if ($this->getAttribute($this->getAttribute($context["item"], "header", array()), "label", array())) {
                        echo "<span class=\"label label-theme\">";
                        echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "label", array());
                        echo "</span>";
                    }
                    // line 10
                    echo "        </h3>

        <p class=\"summary\">";
                    // line 12
                    echo strip_tags($this->getAttribute($context["item"], "summary", array()));
                    echo "</p>

        ";
                    // line 14
                    if ($this->getAttribute($this->getAttribute($context["item"], "header", array()), "cover", array())) {
                        // line 15
                        echo "          <div class=\"featured-image\">
            <a ";
                        // line 16
                        if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array())) {
                            echo "href=\"";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array());
                            echo "\"";
                        }
                        echo ">
              <img class=\"img-responsive project-image\" src=\"";
                        // line 17
                        echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "cover", array());
                        echo "\" alt=\"project ";
                        echo $this->getAttribute($context["item"], "slug", array());
                        echo "\" />
            </a>

            ";
                        // line 20
                        if ($this->getAttribute($this->getAttribute($context["item"], "header", array()), "ribbon", array())) {
                            // line 21
                            echo "              <div class=\"ribbon\">
                <div class=\"text\">";
                            // line 22
                            echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "ribbon", array());
                            echo "</div>
              </div>
            ";
                        }
                        // line 25
                        echo "          </div>
        ";
                    }
                    // line 27
                    echo "
        <div class=\"desc text-left\">";
                    // line 28
                    echo $this->getAttribute($context["item"], "content", array());
                    echo "</div>

        ";
                    // line 30
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array()) && $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "title", array()))) {
                        // line 31
                        echo "          <a class=\"btn btn-cta-secondary\" href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array());
                        echo "\"><i class=\"fa fa-thumbs-o-up\"></i> ";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "title", array());
                        echo "</a>
        ";
                    }
                    // line 33
                    echo "      </div>

    ";
                } else {
                    // line 36
                    echo "
      <div class=\"item row\">
        <a class=\"col-md-4 col-sm-4 col-xs-12\" ";
                    // line 38
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array())) {
                        echo "href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array());
                        echo "\"";
                    }
                    echo ">
          ";
                    // line 39
                    if ($this->getAttribute($this->getAttribute($context["item"], "header", array()), "cover", array())) {
                        // line 40
                        echo "            <img class=\"img-responsive project-image\" src=\"";
                        echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "cover", array());
                        echo "\" alt=\"project ";
                        echo $this->getAttribute($context["item"], "slug", array());
                        echo "\" />
          ";
                    }
                    // line 42
                    echo "        </a>
        <div class=\"desc col-md-8 col-sm-8 col-xs-12\">
          <h3 class=\"title\">
            <a ";
                    // line 45
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array())) {
                        echo "href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array());
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
            ";
                    // line 46
                    if ($this->getAttribute($this->getAttribute($context["item"], "header", array()), "label", array())) {
                        echo "<span class=\"label label-theme\">";
                        echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "label", array());
                        echo "</span>";
                    }
                    // line 47
                    echo "          </h3>

          <div>";
                    // line 49
                    echo $this->getAttribute($context["item"], "content", array());
                    echo "</div>

          ";
                    // line 51
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "url", array()) && $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "title", array()))) {
                        // line 52
                        echo "            <p><a class=\"more-link\" href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["project"] ?? null), "header", array()), "link", array()), "url", array());
                        echo "\"><i class=\"fa fa-external-link\"></i> ";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "header", array()), "link", array()), "title", array());
                        echo "</a></p>
          ";
                    }
                    // line 54
                    echo "        </div>
      </div>
    ";
                }
                // line 57
                echo "
    ";
                // line 58
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    // line 59
                    echo "      <hr class=\"divider\" />
    ";
                }
                // line 61
                echo "  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "modular/latest_projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 61,  207 => 59,  205 => 58,  202 => 57,  197 => 54,  189 => 52,  187 => 51,  182 => 49,  178 => 47,  172 => 46,  162 => 45,  157 => 42,  149 => 40,  147 => 39,  139 => 38,  135 => 36,  130 => 33,  122 => 31,  120 => 30,  115 => 28,  112 => 27,  108 => 25,  102 => 22,  99 => 21,  97 => 20,  89 => 17,  81 => 16,  78 => 15,  76 => 14,  71 => 12,  67 => 10,  61 => 9,  51 => 8,  47 => 6,  44 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
    {% if loop.first %}
      <div class=\"item featured text-center\">
        <h3 class=\"title\">
          <a {% if item.header.link.url %}href=\"{{ item.header.link.url }}\"{% endif %}>{{ item.title }}</a>
          {% if item.header.label %}<span class=\"label label-theme\">{{ item.header.label }}</span>{% endif %}
        </h3>

        <p class=\"summary\">{{ item.summary | striptags }}</p>

        {% if item.header.cover %}
          <div class=\"featured-image\">
            <a {% if item.header.link.url %}href=\"{{ item.header.link.url }}\"{% endif %}>
              <img class=\"img-responsive project-image\" src=\"{{ item.header.cover }}\" alt=\"project {{ item.slug }}\" />
            </a>

            {% if item.header.ribbon %}
              <div class=\"ribbon\">
                <div class=\"text\">{{ item.header.ribbon }}</div>
              </div>
            {% endif %}
          </div>
        {% endif %}

        <div class=\"desc text-left\">{{ item.content }}</div>

        {% if item.header.link.url and item.header.link.title %}
          <a class=\"btn btn-cta-secondary\" href=\"{{ item.header.link.url }}\"><i class=\"fa fa-thumbs-o-up\"></i> {{ item.header.link.title }}</a>
        {% endif %}
      </div>

    {% else %}

      <div class=\"item row\">
        <a class=\"col-md-4 col-sm-4 col-xs-12\" {% if item.header.link.url %}href=\"{{ item.header.link.url }}\"{% endif %}>
          {% if item.header.cover %}
            <img class=\"img-responsive project-image\" src=\"{{ item.header.cover }}\" alt=\"project {{ item.slug }}\" />
          {% endif %}
        </a>
        <div class=\"desc col-md-8 col-sm-8 col-xs-12\">
          <h3 class=\"title\">
            <a {% if item.header.link.url %}href=\"{{ item.header.link.url }}\"{% endif %}>{{ item.title }}</a>
            {% if item.header.label %}<span class=\"label label-theme\">{{ item.header.label }}</span>{% endif %}
          </h3>

          <div>{{ item.content }}</div>

          {% if item.header.link.url and item.header.link.title %}
            <p><a class=\"more-link\" href=\"{{ project.header.link.url }}\"><i class=\"fa fa-external-link\"></i> {{ item.header.link.title }}</a></p>
          {% endif %}
        </div>
      </div>
    {% endif %}

    {% if not loop.last %}
      <hr class=\"divider\" />
    {% endif %}
  {% endfor %}
{% endif %}
", "modular/latest_projects.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\modular\\latest_projects.html.twig");
    }
}
