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

/* themes/custom/imperial/paragrapgh/paragraph--hompage-hero-area.html.twig */
class __TwigTemplate_a861435c80a4231345f561ce08aef155 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_image", [], "any", false, false, true, 42), "entity", [], "any", false, false, true, 42) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_field_banner_", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42))) {
            // line 43
            echo "
";
            // line 45
            $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 47
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 47), 47, $this->source))), 2 => ((            // line 48
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 48, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,             // line 49
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 49)) ? ("paragraph--unpublished") : (""))];
            // line 52
            $this->displayBlock('paragraph', $context, $blocks);
            // line 100
            echo "
";
        }
    }

    // line 52
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 53), 53, $this->source), "html", null, true);
        echo ">

 <div class=\"banner_sec\" style=\"background-image: url('";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_image", [], "any", false, false, true, 55), "entity", [], "any", false, false, true, 55), "fileuri", [], "any", false, false, true, 55), 55, $this->source)), "html", null, true);
        echo "');\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"banner_content\">
\t\t\t\t\t<div class=\"banner_left\">
\t\t\t\t        ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_field_banner_", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61), 61, $this->source));
        echo "
\t\t\t\t\t\t<div class=\"bannerBtn\">
\t\t\t\t\t\t<a href=\"";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_link", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), 63, $this->source));
        echo "\" class=\"btn_imperial\">Know More</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn_imperial wtBtn banner_right\"><i class=\"fas fa-video\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

 ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_image", [], "any", false, false, true, 72), "entity", [], "any", false, false, true, 72)) {
            // line 73
            echo "    ";
            // line 74
            echo "    ";
            $context["media_entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_image", [], "any", false, false, true, 74), "entity", [], "any", false, false, true, 74);
            // line 75
            echo "    
    ";
            // line 77
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["media_entity"] ?? null), "bundle", [], "any", false, false, true, 77) == "video")) {
                // line 78
                echo "      <video autoplay muted loop class=\"small_video\">
        ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["media_entity"] ?? null), "field_media_video", [], "any", false, false, true, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                    // line 80
                    echo "          <source src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["source"], "entity", [], "any", false, false, true, 80), "uri", [], "any", false, false, true, 80), "value", [], "any", false, false, true, 80), 80, $this->source)), "html", null, true);
                    echo "\" type=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["source"], "entity", [], "any", false, false, true, 80), "filemime", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                    echo "\">
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "      </video>
    ";
            }
            // line 84
            echo "  ";
        } else {
            // line 85
            echo "    <p>No video provided.</p>
  ";
        }
        // line 87
        echo "
\t";
        // line 92
        echo "\t
\t";
        // line 94
        echo "\t";
        // line 95
        echo "\t";
        // line 96
        echo "\t";
        // line 97
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/imperial/paragrapgh/paragraph--hompage-hero-area.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 97,  149 => 96,  147 => 95,  145 => 94,  142 => 92,  139 => 87,  135 => 85,  132 => 84,  128 => 82,  117 => 80,  113 => 79,  110 => 78,  107 => 77,  104 => 75,  101 => 74,  99 => 73,  97 => 72,  85 => 63,  80 => 61,  71 => 55,  65 => 53,  61 => 52,  55 => 100,  53 => 52,  51 => 49,  50 => 48,  49 => 47,  48 => 45,  45 => 43,  43 => 42,  40 => 41,);
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

{% if paragraph.field_banner_image.entity and paragraph.field_field_banner_.value %}

{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}
<div {{ attributes.addClass(classes) }}>

 <div class=\"banner_sec\" style=\"background-image: url('{{ file_url(paragraph.field_banner_image.entity.fileuri) }}');\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"banner_content\">
\t\t\t\t\t<div class=\"banner_left\">
\t\t\t\t        {{paragraph.field_field_banner_.value|raw }}
\t\t\t\t\t\t<div class=\"bannerBtn\">
\t\t\t\t\t\t<a href=\"{{paragraph.field_banner_link.value|raw }}\" class=\"btn_imperial\">Know More</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn_imperial wtBtn banner_right\"><i class=\"fas fa-video\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

 {% if paragraph.field_banner_image.entity %}
    {# Assuming field_banner_image is an entity reference field pointing to a media entity with video files #}
    {% set media_entity = paragraph.field_banner_image.entity %}
    
    {# Check if the referenced media entity is of type 'video' #}
    {% if media_entity.bundle == 'video' %}
      <video autoplay muted loop class=\"small_video\">
        {% for source in media_entity.field_media_video %}
          <source src=\"{{ file_url(source.entity.uri.value) }}\" type=\"{{ source.entity.filemime }}\">
        {% endfor %}
      </video>
    {% endif %}
  {% else %}
    <p>No video provided.</p>
  {% endif %}

\t{# <video autoplay=\"\" muted=\"\" loop=\"\" class=\"small_video\">
\t<source src=\"https://imperialauto.in/wp-content/uploads/2023/01/imperial-video-1.mp4\" type=\"video/mp4\">
\t<source src=\"https://imperialauto.in/wp-content/uploads/2023/01/imperial-video-1.mp4\" type=\"video/ogg\">
\t</video> #}
\t
\t{#<video autoplay=\"\" muted=\"\" loop=\"\" class=\"banner_video\">#}
\t{#\t<source src=\"https://imperialauto.in/wp-content/uploads/2022/11/video.mp4\" type=\"video/mp4\">#}
\t{#\t<source src=\"https://imperialauto.in/wp-content/uploads/2022/11/video.mp4\" type=\"video/ogg\">#}
\t{#</video#}
</div>
</div>
{% endblock paragraph %}

{% endif %}", "themes/custom/imperial/paragrapgh/paragraph--hompage-hero-area.html.twig", "C:\\xampp\\htdocs\\imperial-auto\\themes\\custom\\imperial\\paragrapgh\\paragraph--hompage-hero-area.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 42, "set" => 45, "block" => 52, "for" => 79);
        static $filters = array("clean_class" => 47, "escape" => 53, "raw" => 61);
        static $functions = array("file_url" => 55);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block', 'for'],
                ['clean_class', 'escape', 'raw'],
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
