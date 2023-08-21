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

/* themes/custom/em_magazine/templates/block/block--entity-field--node--field-comments.html.twig */
class __TwigTemplate_1fef98ff0d6a148606beb0db2513898a3aab4a13eb7b3df5b6550f7ba329248e extends \Twig\Template
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
        $tags = ["if" => 1, "set" => 4, "block" => 14];
        $filters = ["clean_class" => 6, "escape" => 15];
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
        } elseif ((        // line 2
($context["lang"] ?? null) == "en")) {
            // line 4
            $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 6
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 7
($context["plugin_id"] ?? null))))];
            // line 10
            echo "
";
            // line 11
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method");
            // line 12
            $context["title_classes"] = [0 => "block-title"];
            // line 13
            echo "
";
            // line 14
            $this->displayBlock('block', $context, $blocks);
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

    // line 14
    public function block_block($context, array $blocks = [])
    {
        // line 15
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "  </div>
";
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        // line 17
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
      ";
        // line 18
        if (($context["label"] ?? null)) {
            // line 19
            echo "        <div class=\"block-title-wrapper\">
          <h2";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">
            ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
          </h2>
        </div>
      ";
        }
        // line 25
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
    ";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/em_magazine/templates/block/block--entity-field--node--field-comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 28,  140 => 27,  133 => 25,  126 => 21,  122 => 20,  119 => 19,  117 => 18,  112 => 17,  109 => 16,  104 => 30,  101 => 27,  99 => 16,  94 => 15,  91 => 14,  86 => 36,  82 => 34,  78 => 32,  76 => 14,  73 => 13,  71 => 12,  69 => 11,  66 => 10,  64 => 7,  63 => 6,  62 => 4,  60 => 2,  58 => 1,);
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
{% elseif (lang == 'en') %}
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

{% else %}

{% endif %}

", "themes/custom/em_magazine/templates/block/block--entity-field--node--field-comments.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/block/block--entity-field--node--field-comments.html.twig");
    }
}
