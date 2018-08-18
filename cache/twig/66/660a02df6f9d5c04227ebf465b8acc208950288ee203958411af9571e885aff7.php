<?php

/* plugins/github_activity.html.twig */
class __TwigTemplate_62ad082d9092fc8b2136384ab94d3eceba073611a451b5ec3b044a53669d6ed8 extends Twig_Template
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
    /* Github Activity Feed - https://github.com/brandikun/github-activity */
    if (typeof GitHubActivity != 'undefined') {
      GitHubActivity.feed({ username: \"";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "developer", array()), "github", array());
        echo "\", selector: \"#ghfeed\" });
    }
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "plugins/github_activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
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
    /* Github Activity Feed - https://github.com/brandikun/github-activity */
    if (typeof GitHubActivity != 'undefined') {
      GitHubActivity.feed({ username: \"{{ config.themes.developer.github }}\", selector: \"#ghfeed\" });
    }
  });
</script>
", "plugins/github_activity.html.twig", "E:\\xampp\\htdocs\\user\\themes\\developer\\templates\\plugins\\github_activity.html.twig");
    }
}
