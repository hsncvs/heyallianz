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

/* themes/custom/em_magazine/templates/block/block--entity-field--node--field-yorumlar.html.twig */
class __TwigTemplate_dab84dae9c857d1e5e50f04f479abdbf55b7ede29f79333530aed9b027b010c6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'block' => [$this, 'block_block'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "set" => 3, "block" => 13];
        $filters = ["clean_class" => 5, "escape" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
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
        // line 1
        if ((($context["lang"] ?? null) == "tr")) {
            // line 3
            $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 5
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 6
($context["plugin_id"] ?? null))))];
            // line 9
            echo "
";
            // line 10
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method");
            // line 11
            $context["title_classes"] = [0 => "block-title"];
            // line 12
            echo "
";
            // line 13
            $this->displayBlock('block', $context, $blocks);
        } elseif ((        // line 31
($context["lang"] ?? null) == "en")) {
            // line 32
            echo "
";
        } else {
            // line 34
            echo "
";
        }
        // line 36
        echo "
";
    }

    // line 13
    public function block_block($context, array $blocks = [])
    {
        // line 14
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        // line 26
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "  </div>
";
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        // line 16
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
      ";
        // line 17
        if (($context["label"] ?? null)) {
            // line 18
            echo "        <div class=\"block-title-wrapper\">
          <h2";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">
            ";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
          </h2>
        </div>
      ";
        }
        // line 24
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
    ";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        // line 27
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/em_magazine/templates/block/block--entity-field--node--field-yorumlar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 27,  140 => 26,  133 => 24,  126 => 20,  122 => 19,  119 => 18,  117 => 17,  112 => 16,  109 => 15,  104 => 29,  101 => 26,  99 => 15,  94 => 14,  91 => 13,  86 => 36,  82 => 34,  78 => 32,  76 => 31,  74 => 13,  71 => 12,  69 => 11,  67 => 10,  64 => 9,  62 => 6,  61 => 5,  60 => 3,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if (lang == 'tr') %}
{%
set classes = [
'block',
'block-' ~ configuration.provider|clean_class,
'block-' ~ plugin_id|clean_class,
]
%}

{% set attributes = attributes.addClass(classes) %}
{% set title_classes = ['block-title'] %}

{% block block %}
  <div{{ attributes }}>
    {% block title %}
      {{ title_prefix }}
      {% if label %}
        <div class=\"block-title-wrapper\">
          <h2{{ title_attributes.addClass(title_classes) }}>
            {{ label }}
          </h2>
        </div>
      {% endif %}
      {{ title_suffix }}
    {% endblock %}
    {% block content %}
      {{ content }}
    {% endblock %}
  </div>
{% endblock %}
{% elseif (lang == 'en') %}

{% else %}

{% endif %}

", "themes/custom/em_magazine/templates/block/block--entity-field--node--field-yorumlar.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/block/block--entity-field--node--field-yorumlar.html.twig");
    }
}
