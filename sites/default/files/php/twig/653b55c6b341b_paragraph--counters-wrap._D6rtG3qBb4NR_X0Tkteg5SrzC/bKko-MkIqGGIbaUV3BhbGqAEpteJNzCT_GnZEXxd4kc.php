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

/* themes/custom/imperial/paragrapgh/paragraph--counters-wrap.html.twig */
class __TwigTemplate_ffe38d8cbfd8471ca5d24cbc2d0c744d extends \Twig\Template
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_counters", [], "any", false, false, true, 1)) > 0)) {
            // line 2
            echo "<section class=\"opportunity\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"opportunity_right\">
\t\t\t\t<div class=\"row\">
\t\t\t\t    
\t\t\t\t    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_counters", [], "any", false, false, true, 9));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 10
                echo "
\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 14), "field_counter_number", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source));
                echo "\"></div><span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 16), "field_counter_heading", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/imperial/paragrapgh/paragraph--counters-wrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  65 => 16,  60 => 14,  54 => 10,  50 => 9,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if paragraph.field_counters|length > 0 %}
<section class=\"opportunity\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"opportunity_right\">
\t\t\t\t<div class=\"row\">
\t\t\t\t    
\t\t\t\t    {% for key, item in paragraph.field_counters %}

\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"{{item.entity.field_counter_number.value|raw }}\"></div><span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{item.entity.field_counter_heading.value|raw }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</section>
{% endif %}", "themes/custom/imperial/paragrapgh/paragraph--counters-wrap.html.twig", "C:\\xampp\\htdocs\\imperial-auto\\themes\\custom\\imperial\\paragrapgh\\paragraph--counters-wrap.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 9);
        static $filters = array("length" => 1, "raw" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length', 'raw'],
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
