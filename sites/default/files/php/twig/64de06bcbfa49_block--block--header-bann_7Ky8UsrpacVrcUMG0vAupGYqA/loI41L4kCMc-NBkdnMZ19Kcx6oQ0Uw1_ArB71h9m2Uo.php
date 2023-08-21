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

/* themes/custom/em_magazine/templates/block/block--block--header-banner--full.html.twig */
class __TwigTemplate_91efc3312d28ec7e947d2e7d3ec8f0e6df25bf678e4f449f93ad4ba87694cf44 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'block' => [$this, 'block_block'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "block" => 11];
        $filters = ["clean_class" => 4, "escape" => 12, "trim" => 14, "striptags" => 14, "render" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'trim', 'striptags', 'render'],
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
        // line 2
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 4
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["plugin_id"] ?? null))))];
        // line 8
        echo "
";
        // line 9
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method");
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('block', $context, $blocks);
        // line 20
        echo "
";
    }

    // line 11
    public function block_block($context, array $blocks = [])
    {
        // line 12
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "  </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        // line 14
        echo "      <a id=\"bnr\" href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_header_link", []))))), "html", null, true);
        echo "\" style=\"width:100%; height:90px;z-index:11; position: relative;z-index: 99;\">
      \t<img class=\"classTitle\" src=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_header_banner_image", []))))), "html", null, true);
        echo "\">
      </a>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/em_magazine/templates/block/block--block--header-banner--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 15,  94 => 14,  91 => 13,  86 => 18,  84 => 13,  79 => 12,  76 => 11,  71 => 20,  69 => 11,  66 => 10,  64 => 9,  61 => 8,  59 => 5,  58 => 4,  57 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%
set classes = [
'block',
'block-' ~ configuration.provider|clean_class,
'block-' ~ plugin_id|clean_class,
]
%}

{% set attributes = attributes.addClass(classes) %}

{% block block %}
  <div{{ attributes }}>
    {% block content %}
      <a id=\"bnr\" href=\"{{ content.field_header_link|render|striptags|trim }}\" style=\"width:100%; height:90px;z-index:11; position: relative;z-index: 99;\">
      \t<img class=\"classTitle\" src=\"{{ content.field_header_banner_image|render|striptags|trim }}\">
      </a>
    {% endblock %}
  </div>
{% endblock %}

", "themes/custom/em_magazine/templates/block/block--block--header-banner--full.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/block/block--block--header-banner--full.html.twig");
    }
}
