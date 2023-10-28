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

/* themes/custom/imperial/paragrapgh/paragraph--home-blogs.html.twig */
class __TwigTemplate_30a5435ce88a04cbeb69cd05faae1a6d extends \Twig\Template
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
        // line 41
        echo "
";
        // line 42
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_select_blogs", [], "any", false, false, true, 42)) > 0)) {
            // line 43
            echo "<section class=\"news_media\">
\t<div class=\"container\">
\t\t <div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"newsCont\">
\t\t\t\t\t<div class=\"newsContInner\">
\t\t\t\t\t\t<h6>News and Media</h6>
\t\t\t\t\t\t<h3>Latest News</h3>
\t\t\t\t\t\t<p>Get information</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"newsBtn\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/\" class=\"btnImperial blueImp\">View all posts</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            // line 59
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_select_blogs", [], "any", false, false, true, 59)) > 0)) {
                // line 60
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_select_blogs", [], "any", false, false, true, 60));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 61
                    echo "\t\t\t\t";
                    // line 62
                    echo "\t\t\t\t";
                    $context["blogNode"] = twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 62);
                    // line 63
                    echo "\t\t\t\t";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dump"] ?? null), 63, $this->source), "html", null, true);
                    echo "
\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_img\">
\t\t\t\t\t\t<a href=\"";
                    // line 67
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogNode"] ?? null), "field_blog_image", [], "any", false, false, true, 67), "entity", [], "any", false, false, true, 67), "field_media_image", [], "any", false, false, true, 67), "entity", [], "any", false, false, true, 67), "fileuri", [], "any", false, false, true, 67), 67, $this->source)), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 68
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogNode"] ?? null), "field_blog_image", [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "field_media_image", [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "fileuri", [], "any", false, false, true, 68), 68, $this->source)), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span>News</span>
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/warburg-pincus-buys-out-imperial-auto/\"><h4>";
                    // line 73
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogNode"] ?? null), "title", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                    echo "</h4></a>
\t\t\t\t\t\t<p>";
                    // line 74
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogNode"] ?? null), "field_description", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                    echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "\t\t\t";
            }
            // line 80
            echo "\t\t</div> 
\t</div>
</section>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/imperial/paragrapgh/paragraph--home-blogs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 80,  109 => 79,  98 => 74,  94 => 73,  86 => 68,  82 => 67,  74 => 63,  71 => 62,  69 => 61,  64 => 60,  62 => 59,  44 => 43,  42 => 42,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}

{% if paragraph.field_select_blogs|length > 0 %}
<section class=\"news_media\">
\t<div class=\"container\">
\t\t <div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"newsCont\">
\t\t\t\t\t<div class=\"newsContInner\">
\t\t\t\t\t\t<h6>News and Media</h6>
\t\t\t\t\t\t<h3>Latest News</h3>
\t\t\t\t\t\t<p>Get information</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"newsBtn\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/\" class=\"btnImperial blueImp\">View all posts</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% if paragraph.field_select_blogs|length > 0 %}
\t\t\t\t{% for item in paragraph.field_select_blogs %}
\t\t\t\t{# Access the referenced node/entity using item.entity #}
\t\t\t\t{% set blogNode = item.entity %}
\t\t\t\t{{dump}}
\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_img\">
\t\t\t\t\t\t<a href=\"{{ file_url(blogNode.field_blog_image.entity.field_media_image.entity.fileuri) }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ file_url(blogNode.field_blog_image.entity.field_media_image.entity.fileuri) }}\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span>News</span>
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/warburg-pincus-buys-out-imperial-auto/\"><h4>{{ blogNode.title.value }}</h4></a>
\t\t\t\t\t\t<p>{{ blogNode.field_description.value }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</div> 
\t</div>
</section>

{% endif %}", "themes/custom/imperial/paragrapgh/paragraph--home-blogs.html.twig", "C:\\xampp\\htdocs\\imperial-auto\\themes\\custom\\imperial\\paragrapgh\\paragraph--home-blogs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 42, "for" => 60, "set" => 62);
        static $filters = array("length" => 42, "escape" => 63);
        static $functions = array("file_url" => 67);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['length', 'escape'],
                ['file_url']
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
