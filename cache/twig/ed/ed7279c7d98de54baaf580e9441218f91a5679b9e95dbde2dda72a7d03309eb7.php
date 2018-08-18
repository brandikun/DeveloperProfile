<?php

/* plugins/jquery_rss.html.twig */
class __TwigTemplate_f8c561d8ac6d6ff46f693796323167677c749bc77652d8a5305c26afe702e31a extends Twig_Template
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
        echo "<script>
  jQuery(document).ready(function(\$) {
    /* jQuery RSS - https://github.com/sdepold/jquery-rss */
    \$(\"#rss-feeds\").rss(

      //Change this to your own rss feeds
      \"";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "rss_feed", array()), "url", array());
        echo "\",

      {
        // how many entries do you want?
        // default: 4
        // valid values: any integer
        limit: '";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["themes_config"] ?? null), "rss_feed", array()), "limit", array());
        echo "',

        // the effect, which is used to let the entries appear
        // default: 'show'
        // valid values: 'show', 'slide', 'slideFast', 'slideSynced', 'slideFastSynced'
        effect: '";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "rss_feed", array()), "effect", array());
        echo "',

        // outer template for the html transformation
        // default: \"<ul>{entries}</ul>\"
        // valid values: any string
        layoutTemplate: \"<div class='item'>{entries}</div>\",

        // inner template for each entry
        // default: '<li><a href=\"{url}\">[{author}@{date}] {title}</a><br/>{shortBodyPlain}</li>'
        // valid values: any string
        entryTemplate: '<h3 class=\"title\"><a href=\"{url}\" target=\"_blank\">{title}</a></h3><div><p>{shortBodyPlain}</p><a class=\"more-link\" href=\"{url}\" target=\"_blank\"><i class=\"fa fa-external-link\"></i>Read more</a></div>'
      }
    );
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "plugins/jquery_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  36 => 13,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
  jQuery(document).ready(function(\$) {
    /* jQuery RSS - https://github.com/sdepold/jquery-rss */
    \$(\"#rss-feeds\").rss(

      //Change this to your own rss feeds
      \"{{ theme_config.rss_feed.url }}\",

      {
        // how many entries do you want?
        // default: 4
        // valid values: any integer
        limit: '{{ themes_config.rss_feed.limit }}',

        // the effect, which is used to let the entries appear
        // default: 'show'
        // valid values: 'show', 'slide', 'slideFast', 'slideSynced', 'slideFastSynced'
        effect: '{{ theme_config.rss_feed.effect }}',

        // outer template for the html transformation
        // default: \"<ul>{entries}</ul>\"
        // valid values: any string
        layoutTemplate: \"<div class='item'>{entries}</div>\",

        // inner template for each entry
        // default: '<li><a href=\"{url}\">[{author}@{date}] {title}</a><br/>{shortBodyPlain}</li>'
        // valid values: any string
        entryTemplate: '<h3 class=\"title\"><a href=\"{url}\" target=\"_blank\">{title}</a></h3><div><p>{shortBodyPlain}</p><a class=\"more-link\" href=\"{url}\" target=\"_blank\"><i class=\"fa fa-external-link\"></i>Read more</a></div>'
      }
    );
  });
</script>
", "plugins/jquery_rss.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\plugins\\jquery_rss.html.twig");
    }
}
