<?php

/* default.html.twig */
class __TwigTemplate_a072f7951327b91334683148a129f0646bb5343cf0de90f40f4cba86be17bfc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'head_meta' => array($this, 'block_head_meta'),
            'head_title' => array($this, 'block_head_title'),
            'head_css' => array($this, 'block_head_css'),
            'head_css_extra' => array($this, 'block_head_css_extra'),
            'head_js' => array($this, 'block_head_js'),
            'body' => array($this, 'block_body'),
            'body_header' => array($this, 'block_body_header'),
            'body_content' => array($this, 'block_body_content'),
            'body_footer' => array($this, 'block_body_footer'),
            'body_js' => array($this, 'block_body_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 54
        echo "  </head>

  ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "    ";
        $this->displayBlock('body_header', $context, $blocks);
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock('body_content', $context, $blocks);
        // line 94
        echo "
    ";
        // line 95
        $this->displayBlock('body_footer', $context, $blocks);
        // line 102
        echo "
    ";
        // line 103
        $this->displayBlock('body_js', $context, $blocks);
        // line 121
        echo "  </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "      ";
        $this->displayBlock('head_meta', $context, $blocks);
        // line 17
        echo "
      ";
        // line 18
        $this->displayBlock('head_title', $context, $blocks);
        // line 21
        echo "
      <link rel=\"canonical\" href=\"";
        // line 22
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "\" />
      <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo ($context["theme_url"] ?? null);
        echo "/assets/images/favicon.ico\" />

      ";
        // line 25
        $this->displayBlock('head_css', $context, $blocks);
        // line 42
        echo "
      ";
        // line 43
        $this->displayBlock('head_css_extra', $context, $blocks);
        // line 44
        echo "
      ";
        // line 45
        $this->displayBlock('head_js', $context, $blocks);
        // line 53
        echo "    ";
    }

    // line 6
    public function block_head_meta($context, array $blocks = array())
    {
        // line 7
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 11
            echo "          <meta ";
            if ($this->getAttribute($context["meta"], "name", array())) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            echo "/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"";
        // line 15
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", array()), "description", array());
        echo "\" />
      ";
    }

    // line 18
    public function block_head_title($context, array $blocks = array())
    {
        // line 19
        echo "        <title>";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array()) && (($this->getAttribute(($context["page"] ?? null), "url", array()) != ($context["base_url"] ?? null)) || ("error" == $this->getAttribute(($context["page"] ?? null), "template", array()))))) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
      ";
    }

    // line 25
    public function block_head_css($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/plugins/bootstrap/css/bootstrap.min.css", 1 => 106), "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/plugins/font-awesome/css/font-awesome.css", 1 => 105), "method");
        // line 28
        echo "
        ";
        // line 29
        if ($this->getAttribute(($context["theme_config"] ?? null), "github", array())) {
            // line 30
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/plugins/octicons/octicons.min.css", 1 => 104), "method");
            // line 31
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/plugins/github-activity/css/github-activity.min.css", 1 => 103), "method");
            // line 32
            echo "        ";
        }
        // line 33
        echo "
        ";
        // line 34
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/css/styles.css", 1 => 102), "method");
        // line 35
        echo "
        ";
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "//fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic", 1 => 101), "method");
        // line 38
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "//fonts.googleapis.com/css?family=Montserrat:400,700", 1 => 100), "method");
        // line 39
        echo "
        ";
        // line 40
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
      ";
    }

    // line 43
    public function block_head_css_extra($context, array $blocks = array())
    {
    }

    // line 45
    public function block_head_js($context, array $blocks = array())
    {
        // line 46
        echo "        ";
        // line 47
        echo "        ";
        // line 48
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 49
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "method");
            // line 50
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "method");
            // line 51
            echo "        ";
        }
        // line 52
        echo "      ";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        echo "<body id=\"page-top\" class=\"index\">";
    }

    // line 57
    public function block_body_header($context, array $blocks = array())
    {
        // line 58
        echo "      <header class=\"header\">
        <div class=\"container\">
          ";
        // line 60
        $context["profile_image"] = (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", array()), "avatar_url", array())) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", array()), "avatar_url", array())) : ((("//gravatar.com/avatar/" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "email", array()))) . "?s=180")));
        // line 61
        echo "          <img class=\"profile-image img-responsive pull-left img-circle\" src=\"";
        echo ($context["profile_image"] ?? null);
        echo "\" alt=\"";
        echo (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", array(), "any", false, true), "name", array()), $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array()))) : ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array())));
        echo "\" height=\"180\" />

          <div class=\"profile-content pull-left\">
            <h1 class=\"name\">";
        // line 64
        echo (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", array(), "any", false, true), "name", array()), $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array()))) : ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array())));
        echo "</h1>
            <h2 class=\"desc\">";
        // line 65
        echo (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", array(), "any", false, true), "desc", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", array(), "any", false, true), "desc", array()), $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", array()), "description", array()))) : ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", array()), "description", array())));
        echo "</h2>

            ";
        // line 67
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "networks", array()))) {
            // line 68
            echo "              <ul class=\"social list-inline\">
                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "networks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
                // line 70
                echo "                  <li class=\"";
                if (($context["network"] == twig_last($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "networks", array())))) {
                    echo "last-item";
                }
                echo "\"><a href=\"";
                echo $this->getAttribute($context["network"], "url", array());
                echo "\"><i class=\"fa fa-";
                echo $this->getAttribute($context["network"], "icon", array());
                echo "\"></i>";
                echo $this->getAttribute($context["network"], "title", array());
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "              </ul>
            ";
        }
        // line 74
        echo "          </div>
          <a class=\"btn btn-cta-primary pull-right\" href=\"";
        // line 75
        echo (($this->getAttribute(($context["theme_config"] ?? null), "contact_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["theme_config"] ?? null), "contact_url", array()), ($context["base_url"] ?? null))) : (($context["base_url"] ?? null)));
        echo "\"><i class=\"fa fa-paper-plane\"></i> Contact Me</a>
        </div>
      </header>
    ";
    }

    // line 80
    public function block_body_content($context, array $blocks = array())
    {
        // line 81
        echo "      <div class=\"container sections-wrapper\">
        <div class=\"row\">
          <div class=\"primary col-md-12 col-sm-12 col-xs-12\">
            <section class=\"";
        // line 84
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "section_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "section_class", array()), $this->getAttribute(($context["page"] ?? null), "slug", array()))) : ($this->getAttribute(($context["page"] ?? null), "slug", array())));
        echo " section\">
              <div class=\"section-inner\">
                <h2 class=\"heading\">";
        // line 86
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
                <div class=\"content\">";
        // line 87
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</div>
              </div>
            </section>
          </div>
        </div>
      </div>
    ";
    }

    // line 95
    public function block_body_footer($context, array $blocks = array())
    {
        // line 96
        echo "      <footer class=\"footer\">
        <div class=\"container text-center\">
          <small class=\"copyright\">Copyright &copy; ";
        // line 98
        echo twig_date_format_filter($this->env, "NOW", "Y");
        echo " ";
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo " | Design: <a href=\"//themes.3rdwavemedia.com\">3rd Wave Media</a> | Grav Theme: <a href=\"//nunopress.com\">NunoPress LLC</a></small>
        </div>
      </footer>
    ";
    }

    // line 103
    public function block_body_js($context, array $blocks = array())
    {
        // line 104
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/plugins/jquery-1.11.1.min.js", 1 => 106), "method");
        // line 105
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/plugins/jquery-migrate-1.2.1.min.js", 1 => 105), "method");
        // line 106
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/plugins/bootstrap/js/bootstrap.min.js", 1 => 104), "method");
        // line 107
        echo "
      ";
        // line 108
        if ($this->getAttribute(($context["theme_config"] ?? null), "rss_feed", array())) {
            // line 109
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/plugins/jquery-rss/dist/jquery.rss.min.js", 1 => 103), "method");
            // line 110
            echo "      ";
        }
        // line 111
        echo "
      ";
        // line 112
        if ($this->getAttribute(($context["theme_config"] ?? null), "github", array())) {
            // line 113
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/plugins/mustache-0.7.2.min.js", 1 => 102), "method");
            // line 114
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/plugins/github-activity/js/github-activity.min.js", 1 => 101), "method");
            // line 115
            echo "      ";
        }
        // line 116
        echo "
      ";
        // line 117
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/js/main.js", 1 => 100), "method");
        // line 118
        echo "
      ";
        // line 119
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 119,  412 => 118,  410 => 117,  407 => 116,  404 => 115,  401 => 114,  398 => 113,  396 => 112,  393 => 111,  390 => 110,  387 => 109,  385 => 108,  382 => 107,  379 => 106,  376 => 105,  373 => 104,  370 => 103,  360 => 98,  356 => 96,  353 => 95,  342 => 87,  338 => 86,  333 => 84,  328 => 81,  325 => 80,  317 => 75,  314 => 74,  310 => 72,  293 => 70,  289 => 69,  286 => 68,  284 => 67,  279 => 65,  275 => 64,  266 => 61,  264 => 60,  260 => 58,  257 => 57,  251 => 56,  247 => 52,  244 => 51,  241 => 50,  238 => 49,  235 => 48,  233 => 47,  231 => 46,  228 => 45,  223 => 43,  217 => 40,  214 => 39,  211 => 38,  208 => 37,  205 => 35,  203 => 34,  200 => 33,  197 => 32,  194 => 31,  191 => 30,  189 => 29,  186 => 28,  183 => 27,  180 => 26,  177 => 25,  166 => 19,  163 => 18,  157 => 15,  153 => 13,  120 => 11,  116 => 10,  111 => 7,  108 => 6,  104 => 53,  102 => 45,  99 => 44,  97 => 43,  94 => 42,  92 => 25,  87 => 23,  83 => 22,  80 => 21,  78 => 18,  75 => 17,  72 => 6,  69 => 5,  63 => 121,  61 => 103,  58 => 102,  56 => 95,  53 => 94,  51 => 80,  48 => 79,  45 => 57,  43 => 56,  39 => 54,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    {% block head %}
      {% block head_meta %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        {% for meta in page.metadata %}
          <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
        {% endfor %}

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"{{ site.metadata.description }}\" />
      {% endblock %}

      {% block head_title %}
        <title>{% if page.header.title and (page.url != base_url or 'error' == page.template) %}{{ page.header.title }} | {% endif %}{{ site.title }}</title>
      {% endblock %}

      <link rel=\"canonical\" href=\"{{ page.url(true) }}\" />
      <link rel=\"shortcut icon\" href=\"{{ theme_url }}/assets/images/favicon.ico\" />

      {% block head_css %}
        {% do assets.add('theme://assets/plugins/bootstrap/css/bootstrap.min.css', 106) %}
        {% do assets.add('theme://assets/plugins/font-awesome/css/font-awesome.css', 105) %}

        {% if theme_config.github %}
          {% do assets.add('theme://assets/plugins/octicons/octicons.min.css', 104) %}
          {% do assets.add('theme://assets/plugins/github-activity/css/github-activity.min.css', 103) %}
        {% endif %}

        {% do assets.add('theme://assets/css/styles.css', 102) %}

        {# Webfonts #}
        {% do assets.addCss('//fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic', 101) %}
        {% do assets.addCss('//fonts.googleapis.com/css?family=Montserrat:400,700', 100) %}

        {{ assets.css() }}
      {% endblock %}

      {% block head_css_extra %}{% endblock %}

      {% block head_js %}
        {# HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries #}
        {# WARNING: Respond.js doesn't work if you view the page via file:// #}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
          {% do assets.addJs('//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') %}
          {% do assets.addJs('//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') %}
        {% endif %}
      {% endblock %}
    {% endblock %}
  </head>

  {% block body %}<body id=\"page-top\" class=\"index\">{% endblock %}
    {% block body_header %}
      <header class=\"header\">
        <div class=\"container\">
          {% set profile_image = (theme_config.profile.avatar_url) ?: '//gravatar.com/avatar/' ~ site.author.email | md5 ~ '?s=180' %}
          <img class=\"profile-image img-responsive pull-left img-circle\" src=\"{{ profile_image }}\" alt=\"{{ theme_config.profile.name | default(site.author.name) }}\" height=\"180\" />

          <div class=\"profile-content pull-left\">
            <h1 class=\"name\">{{ theme_config.profile.name | default(site.author.name) }}</h1>
            <h2 class=\"desc\">{{ theme_config.profile.desc | default(site.metadata.description) }}</h2>

            {% if theme_config.social.networks | length %}
              <ul class=\"social list-inline\">
                {% for network in theme_config.social.networks %}
                  <li class=\"{% if network == theme_config.social.networks | last %}last-item{% endif %}\"><a href=\"{{ network.url }}\"><i class=\"fa fa-{{ network.icon }}\"></i>{{ network.title }}</a></li>
                {% endfor %}
              </ul>
            {% endif %}
          </div>
          <a class=\"btn btn-cta-primary pull-right\" href=\"{{ theme_config.contact_url | default(base_url) }}\"><i class=\"fa fa-paper-plane\"></i> Contact Me</a>
        </div>
      </header>
    {% endblock %}

    {% block body_content %}
      <div class=\"container sections-wrapper\">
        <div class=\"row\">
          <div class=\"primary col-md-12 col-sm-12 col-xs-12\">
            <section class=\"{{ page.header.section_class | default(page.slug) }} section\">
              <div class=\"section-inner\">
                <h2 class=\"heading\">{{ page.title }}</h2>
                <div class=\"content\">{{ page.content }}</div>
              </div>
            </section>
          </div>
        </div>
      </div>
    {% endblock %}

    {% block body_footer %}
      <footer class=\"footer\">
        <div class=\"container text-center\">
          <small class=\"copyright\">Copyright &copy; {{ 'NOW' | date('Y') }} {{ site.title }} | Design: <a href=\"//themes.3rdwavemedia.com\">3rd Wave Media</a> | Grav Theme: <a href=\"//nunopress.com\">NunoPress LLC</a></small>
        </div>
      </footer>
    {% endblock %}

    {% block body_js %}
      {% do assets.add('theme://assets/plugins/jquery-1.11.1.min.js', 106) %}
      {% do assets.add('theme://assets/plugins/jquery-migrate-1.2.1.min.js', 105) %}
      {% do assets.add('theme://assets/plugins/bootstrap/js/bootstrap.min.js', 104) %}

      {% if theme_config.rss_feed %}
        {% do assets.add('theme://assets/plugins/jquery-rss/dist/jquery.rss.min.js', 103) %}
      {% endif %}

      {% if theme_config.github %}
        {% do assets.add('theme://assets/plugins/mustache-0.7.2.min.js', 102) %}
        {% do assets.add('theme://assets/plugins/github-activity/js/github-activity.min.js', 101) %}
      {% endif %}

      {% do assets.add('theme://assets/js/main.js', 100) %}

      {{ assets.js() }}
    {% endblock %}
  </body>
</html>
", "default.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\default.html.twig");
    }
}
