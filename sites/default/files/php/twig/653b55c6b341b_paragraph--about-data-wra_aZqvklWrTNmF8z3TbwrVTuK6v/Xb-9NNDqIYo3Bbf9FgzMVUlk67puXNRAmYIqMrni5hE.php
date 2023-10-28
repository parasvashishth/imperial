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

/* themes/custom/imperial/paragrapgh/paragraph--about-data-wrapper.html.twig */
class __TwigTemplate_e63dc4ac6a64ca22f7c26d49d6a56d4a extends \Twig\Template
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
        // line 1
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_about_content", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1)) {
            // line 2
            echo "<section class=\"aboutUs\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsLeft\">
\t\t\t\t\t  ";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_about_content", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source));
            echo "
\t\t\t\t\t<a href=\"";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_about_link", [], "any", false, false, true, 8), "uri", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\" class=\"btnImperial blueImp\">Know more</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsRight\">
\t\t\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_about_pointers_wrapper", [], "any", false, false, true, 14));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 15
                echo "\t\t\t\t\t";
                $context["entity"] = twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 15);
                // line 16
                echo "\t\t\t\t\t\t<div class=\"aboutRightBox\">
\t\t\t\t\t\t\t<div class=\"aboutRightFlexBox\">
\t\t\t\t\t\t\t\t<div class=\"aboutRightBoxImg\">
\t\t\t\t\t\t\t\t\t<a href=\"https://imperialauto.in/product_range/on-highway/\">
\t\t\t\t\t\t\t\t";
                // line 20
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_about_icon", [], "any", false, false, true, 20), "entity", [], "any", false, false, true, 20)) {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["media_entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_about_icon", [], "any", false, false, true, 21), "entity", [], "any", false, false, true, 21);
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["image_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["media_entity"] ?? null), "field_media_image", [], "any", false, false, true, 22), "entity", [], "any", false, false, true, 22), "uri", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source));
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 23, $this->source), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t";
                }
                // line 25
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"aboutRightBoxHead\">
\t\t\t\t\t\t\t\t\t";
                // line 29
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_about_icon_content", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29)) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_about_icon_content", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30), 30, $this->source));
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/imperial/paragrapgh/paragraph--about-data-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  102 => 32,  96 => 30,  94 => 29,  88 => 25,  82 => 23,  79 => 22,  76 => 21,  74 => 20,  68 => 16,  65 => 15,  61 => 14,  52 => 8,  48 => 7,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if paragraph.field_about_content.value  %}
<section class=\"aboutUs\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsLeft\">
\t\t\t\t\t  {{paragraph.field_about_content.value|raw}}
\t\t\t\t\t<a href=\"{{ paragraph.field_about_link.uri }}\" class=\"btnImperial blueImp\">Know more</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsRight\">
\t\t\t\t{% for key, item in paragraph.field_about_pointers_wrapper %}
\t\t\t\t\t{% set entity = item.entity %}
\t\t\t\t\t\t<div class=\"aboutRightBox\">
\t\t\t\t\t\t\t<div class=\"aboutRightFlexBox\">
\t\t\t\t\t\t\t\t<div class=\"aboutRightBoxImg\">
\t\t\t\t\t\t\t\t\t<a href=\"https://imperialauto.in/product_range/on-highway/\">
\t\t\t\t\t\t\t\t{% if entity.field_about_icon.entity %}
\t\t\t\t\t\t\t\t\t{% set media_entity = entity.field_about_icon.entity %}
\t\t\t\t\t\t\t\t\t{% set image_url = file_url(media_entity.field_media_image.entity.uri.value) %}
\t\t\t\t\t\t\t\t\t<img src=\"{{ image_url }}\" alt=\"\">
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"aboutRightBoxHead\">
\t\t\t\t\t\t\t\t\t{% if entity.field_about_icon_content.value %}
\t\t\t\t\t\t\t\t\t\t{{ entity.field_about_icon_content.value|raw }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}


\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>

{% endif %}", "themes/custom/imperial/paragrapgh/paragraph--about-data-wrapper.html.twig", "C:\\xampp\\htdocs\\imperial-auto\\themes\\custom\\imperial\\paragrapgh\\paragraph--about-data-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 14, "set" => 15);
        static $filters = array("raw" => 7, "escape" => 8);
        static $functions = array("file_url" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['raw', 'escape'],
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
