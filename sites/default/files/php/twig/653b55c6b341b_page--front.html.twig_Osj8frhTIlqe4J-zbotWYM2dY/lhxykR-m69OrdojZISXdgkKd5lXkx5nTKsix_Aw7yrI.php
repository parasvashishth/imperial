<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/imperial/templates/page--front.html.twig */
class __TwigTemplate_8c1d66dd1447443be887c2a1f7e03a90 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "

";
        // line 30
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/custom/imperial/templates/page--front.html.twig", 30)->display($context);
        // line 31
        echo "

<div class=\"main content\">
";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
</div>

<style>
\t.header_logo a svg path:nth-of-type(1) {
\t\tfill: #fff;
\t}
\t.nav-menu > li > a {
\t\tcolor: #fff;
\t}
\t.header.sticky_header .nav-menu > li > a {
\t\tcolor: #041521;
\t}
\t.submenu-indicator-chevron {
\t\tborder-color: transparent #fff #fff transparent;
\t}
\t.header.sticky_header .submenu-indicator-chevron {
\t\tborder-color: transparent #041521 #041521 transparent;
\t}
\t.header{
\t\tposition: fixed;
\t\tbox-shadow: none;
\t\tbackground: transparent;
\t}
\t.nav-search-button i {
\t\tcolor: #fff;
\t}
\t
\t.header.sticky_header .nav-toggle:before {
    background-color: #000;
    box-shadow: 0 0.5em 0 0 #000, 0 1em 0 0 #000;
}
\t
\t
\t@media(max-width: 991px){
\t.nav-toggle:before {
    background-color: #fff;
    box-shadow: 0 0.5em 0 0 #fff, 0 1em 0 0 #fff;
}
\t\t.nav-menu > li > a {
    color: #000;
}
\t\t.submenu-indicator-chevron {
    border-color: transparent #000 #000 transparent;
}
\t}
\t
\tdiv#content {
    display: block;
}
</style>




";
        // line 89
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/custom/imperial/templates/page--front.html.twig", 89)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/imperial/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 89,  50 => 34,  45 => 31,  43 => 30,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 * - olivero_path: Returns the path to an Olivero theme.
 * - noscript_styles: <noscript> content.
 *
 * @see template_preprocess_html()
 */
#}


{% include directory ~ '/templates/includes/header.html.twig' %}


<div class=\"main content\">
{{page.content}}
</div>

<style>
\t.header_logo a svg path:nth-of-type(1) {
\t\tfill: #fff;
\t}
\t.nav-menu > li > a {
\t\tcolor: #fff;
\t}
\t.header.sticky_header .nav-menu > li > a {
\t\tcolor: #041521;
\t}
\t.submenu-indicator-chevron {
\t\tborder-color: transparent #fff #fff transparent;
\t}
\t.header.sticky_header .submenu-indicator-chevron {
\t\tborder-color: transparent #041521 #041521 transparent;
\t}
\t.header{
\t\tposition: fixed;
\t\tbox-shadow: none;
\t\tbackground: transparent;
\t}
\t.nav-search-button i {
\t\tcolor: #fff;
\t}
\t
\t.header.sticky_header .nav-toggle:before {
    background-color: #000;
    box-shadow: 0 0.5em 0 0 #000, 0 1em 0 0 #000;
}
\t
\t
\t@media(max-width: 991px){
\t.nav-toggle:before {
    background-color: #fff;
    box-shadow: 0 0.5em 0 0 #fff, 0 1em 0 0 #fff;
}
\t\t.nav-menu > li > a {
    color: #000;
}
\t\t.submenu-indicator-chevron {
    border-color: transparent #000 #000 transparent;
}
\t}
\t
\tdiv#content {
    display: block;
}
</style>




{% include directory ~ '/templates/includes/footer.html.twig' %}
", "themes/custom/imperial/templates/page--front.html.twig", "C:\\xampp\\htdocs\\imperial-auto\\themes\\custom\\imperial\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 30);
        static $filters = array("escape" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
