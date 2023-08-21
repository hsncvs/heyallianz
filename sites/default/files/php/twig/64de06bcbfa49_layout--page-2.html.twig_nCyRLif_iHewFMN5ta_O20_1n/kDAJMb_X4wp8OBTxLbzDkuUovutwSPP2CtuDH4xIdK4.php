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

/* themes/custom/em/templates/layouts/page/page_2/layout--page-2.html.twig */
class __TwigTemplate_195319ebe2b32e63bdf73789cb55ed2ccc3f498f4d0c60e08076ca2bd1331d23 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'region_content' => [$this, 'block_region_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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

    protected function doGetParent(array $context)
    {
        // line 14
        return "@em/layouts/page/page_1/layout--page-1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@em/layouts/page/page_1/layout--page-1.html.twig", "themes/custom/em/templates/layouts/page/page_2/layout--page-2.html.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_region_content($context, array $blocks = [])
    {
        // line 20
        echo "  <div class=\"container\">
    <div class=\"row\">
      <div";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "content", []), "addClass", [0 => "col-12 col-lg-8"], "method")), "html", null, true);
        echo ">
        ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "content", [])), "html", null, true);
        echo "
      </div>
      <div";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "right", []), "addClass", [0 => "col-12 col-lg-4 js-sticky-elements"], "method")), "html", null, true);
        echo ">
        ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "right", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/em/templates/layouts/page/page_2/layout--page-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  80 => 25,  75 => 23,  71 => 22,  67 => 20,  64 => 19,  54 => 14,);
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
 * Default theme implementation for layout.
 *
 * Available variables:
 * - content: The content for this layout.
 * - attributes: HTML attributes for the layout <div>.
 *
 * @ingroup themeable
 */
#}

{% extends \"@em/layouts/page/page_1/layout--page-1.html.twig\" %}

{# == Region: Content == #}
{# ===================== #}

{% block region_content %}
  <div class=\"container\">
    <div class=\"row\">
      <div{{ region_attributes.content.addClass('col-12 col-lg-8') }}>
        {{ content.content }}
      </div>
      <div{{ region_attributes.right.addClass('col-12 col-lg-4 js-sticky-elements') }}>
        {{ content.right }}
      </div>
    </div>
  </div>
{% endblock %}
", "themes/custom/em/templates/layouts/page/page_2/layout--page-2.html.twig", "/opt/bitnami/drupal/themes/custom/em/templates/layouts/page/page_2/layout--page-2.html.twig");
    }
}
