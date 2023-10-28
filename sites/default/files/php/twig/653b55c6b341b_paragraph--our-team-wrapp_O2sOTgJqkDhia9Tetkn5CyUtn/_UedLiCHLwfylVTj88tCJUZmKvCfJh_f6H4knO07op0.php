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

/* themes/custom/imperial/paragrapgh/paragraph--our-team-wrapper.html.twig */
class __TwigTemplate_e370119fa494a4c91a87716d3216baec extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_team_content", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1)) {
            // line 2
            echo "<section class=\"ourTeam\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsLeft\">
\t\t\t\t\t ";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_team_content", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source));
            echo "
\t\t\t\t\t<a href=\"";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_read_principle_link", [], "any", false, false, true, 8), "uri", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\" class=\"btnGrey me-2 mb-3\">Read our principles</a>
\t\t\t\t\t<a href=\"";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_hiring_link", [], "any", false, false, true, 9), "uri", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\" class=\"btnImperial blueImp\">We’re hiring!</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t <div class=\"careerRight\">

\t\t\t ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_team_image", [], "any", false, false, true, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 17)) {
                    // line 18
                    echo "\t\t\t\t\t";
                    $context["media_entity"] = twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 18);
                    // line 19
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, ($context["media_entity"] ?? null), "bundle", [], "method", false, false, true, 19) == "image")) {
                        // line 20
                        echo "\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["media_entity"] ?? null), "hasField", [0 => "field_media_image"], "method", false, false, true, 20)) {
                            // line 21
                            echo "\t\t\t\t\t\t\t";
                            $context["image_entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["media_entity"] ?? null), "field_media_image", [], "any", false, false, true, 21), "entity", [], "any", false, false, true, 21);
                            // line 22
                            echo "\t\t\t\t\t\t\t";
                            if (($context["image_entity"] ?? null)) {
                                // line 23
                                echo "\t\t\t\t\t\t\t\t<img src=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image_entity"] ?? null), "uri", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source)), "html", null, true);
                                echo "\" alt=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["media_entity"] ?? null), "field_media_image", [], "any", false, false, true, 23), "alt", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t";
                            }
                            // line 25
                            echo "\t\t\t\t\t\t";
                        }
                        // line 26
                        echo "\t\t\t\t\t";
                    }
                    // line 27
                    echo "\t\t\t\t";
                }
                // line 28
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "


        ";
            // line 33
            echo "    </div>

\t\t\t</div>

\t\t</div>
\t</div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/imperial/paragrapgh/paragraph--our-team-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  111 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  66 => 16,  56 => 9,  52 => 8,  48 => 7,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if paragraph.field_team_content.value %}
<section class=\"ourTeam\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsLeft\">
\t\t\t\t\t {{paragraph.field_team_content.value|raw}}
\t\t\t\t\t<a href=\"{{ paragraph.field_read_principle_link.uri }}\" class=\"btnGrey me-2 mb-3\">Read our principles</a>
\t\t\t\t\t<a href=\"{{ paragraph.field_hiring_link.uri }}\" class=\"btnImperial blueImp\">We’re hiring!</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t <div class=\"careerRight\">

\t\t\t {% for item in paragraph.field_team_image %}
\t\t\t\t{% if item.entity %}
\t\t\t\t\t{% set media_entity = item.entity %}
\t\t\t\t\t{% if media_entity.bundle() == 'image' %}
\t\t\t\t\t\t{% if media_entity.hasField('field_media_image') %}
\t\t\t\t\t\t\t{% set image_entity = media_entity.field_media_image.entity %}
\t\t\t\t\t\t\t{% if image_entity %}
\t\t\t\t\t\t\t\t<img src=\"{{ file_url(image_entity.uri.value) }}\" alt=\"{{ media_entity.field_media_image.alt }}\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}



        {# <img src=\"{{ paragraph.field_team_image.uri }}\" alt=\"Team Image\"> #}
    </div>

\t\t\t</div>

\t\t</div>
\t</div>
</section>
{% endif %}", "themes/custom/imperial/paragrapgh/paragraph--our-team-wrapper.html.twig", "C:\\xampp\\htdocs\\imperial-auto\\themes\\custom\\imperial\\paragrapgh\\paragraph--our-team-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 16, "set" => 18);
        static $filters = array("raw" => 7, "escape" => 8);
        static $functions = array("file_url" => 23);

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
