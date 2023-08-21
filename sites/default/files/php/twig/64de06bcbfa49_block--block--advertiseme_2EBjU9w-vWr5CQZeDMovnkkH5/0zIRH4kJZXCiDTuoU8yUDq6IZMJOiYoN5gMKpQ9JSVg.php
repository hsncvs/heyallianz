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

/* themes/custom/em/templates/block/block--block--advertisement.html.twig */
class __TwigTemplate_873f5a3e6097bcc40a136c537119ac0c01f070ed1d130c9d26b78782715cafbe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 30];
        $filters = ["escape" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
        // line 29
        return "@em/block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 30
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "block-advertisement"], "method");
        // line 29
        $this->parent = $this->loadTemplate("@em/block/block.html.twig", "themes/custom/em/templates/block/block--block--advertisement.html.twig", 29);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_title($context, array $blocks = [])
    {
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        // line 37
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/em/templates/block/block--block--advertisement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 37,  73 => 36,  68 => 33,  63 => 29,  61 => 30,  55 => 29,);
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
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}

{% extends \"@em/block/block.html.twig\" %}
{% set attributes = attributes.addClass('block-advertisement') %}

{# Remove block titile #}
{% block title %}
{% endblock %}

{% block content %}
  {{ content }}
  {#<div class=\"small text-muted\">Advertisement</div>#}
{% endblock %}
", "themes/custom/em/templates/block/block--block--advertisement.html.twig", "/opt/bitnami/drupal/themes/custom/em/templates/block/block--block--advertisement.html.twig");
    }
}
