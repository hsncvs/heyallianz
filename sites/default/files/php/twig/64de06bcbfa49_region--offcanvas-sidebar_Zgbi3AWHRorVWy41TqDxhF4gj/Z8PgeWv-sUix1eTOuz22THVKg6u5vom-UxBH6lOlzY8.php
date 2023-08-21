<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/em_magazine/templates/navigation/region--offcanvas-sidebar.html.twig */
class __TwigTemplate_574711042cf1a0501b354bc37c8cde0f8666728c367c3a4bff8e41c43571b7b7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 19, "if" => 25];
        $filters = ["clean_class" => 21, "escape" => 26];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 17
        echo "
";
        // line 19
        $context["classes"] = [0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 21
($context["region"] ?? null))))];
        // line 24
        echo "
";
        // line 25
        if (($context["content"] ?? null)) {
            // line 26
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
    <div class=\"sidr js-offcanvas-sidebar\" id=\"offcanvas-sidebar\" style=\"display: none;\">
\t  <a href=\"javascript:;\" class=\"sidebar-close\"><i class=\"fa fa-times\"></i></a>
      ";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
    </div>
  </div>
  <div class=\"offcanvas-sidebar-overlay\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/em_magazine/templates/navigation/region--offcanvas-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 29,  66 => 26,  64 => 25,  61 => 24,  59 => 21,  58 => 19,  55 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region <div>.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 *
 * @ingroup themeable
 */
#}

{%
set classes = [
  'region',
  'region-' ~ region|clean_class,
]
%}

{% if content %}
  <div{{ attributes.addClass(classes) }}>
    <div class=\"sidr js-offcanvas-sidebar\" id=\"offcanvas-sidebar\" style=\"display: none;\">
\t  <a href=\"javascript:;\" class=\"sidebar-close\"><i class=\"fa fa-times\"></i></a>
      {{ content }}
    </div>
  </div>
  <div class=\"offcanvas-sidebar-overlay\"></div>
{% endif %}
", "themes/custom/em_magazine/templates/navigation/region--offcanvas-sidebar.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/navigation/region--offcanvas-sidebar.html.twig");
    }
}
