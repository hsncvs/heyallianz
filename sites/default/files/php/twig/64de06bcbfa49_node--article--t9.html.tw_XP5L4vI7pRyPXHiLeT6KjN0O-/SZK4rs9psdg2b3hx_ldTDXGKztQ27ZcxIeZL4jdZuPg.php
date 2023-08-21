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

/* themes/custom/em_magazine/templates/content/node/article/teaser/node--article--t9.html.twig */
class __TwigTemplate_f8b9e0d0ca1f99423e9a599ccf506c08eaa81834a672f9fc740a1e542dffc6fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "if" => 46];
        $filters = ["escape" => 21, "t" => 51];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
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
        // line 7
        echo "
";
        // line 9
        $context["article_classes"] = [0 => "teaser", 1 => "teaser--item", 2 => "teaser--item--small", 3 => "align-items-center", 4 => (($this->getAttribute($this->getAttribute(        // line 15
($context["node"] ?? null), "teaser_highlighted", []), "getString", [], "method")) ? ("is--highlighted") : (""))];
        // line 18
        echo "
";
        // line 21
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["article_classes"] ?? null)], "method")), "html", null, true);
        echo ">

  ";
        // line 24
        echo "  ";
        // line 25
        echo "  <div class=\"teaser__media\">
    <div class=\"image image--circular teaser__image\">
      <a href=\"";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_media", [])), "html", null, true);
        echo "
      </a>
    </div>
  </div>

  <div";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "teaser__content"], "method")), "html", null, true);
        echo ">

    <header>
      ";
        // line 37
        echo "      ";
        // line 38
        echo "      <h2 class=\"teaser__headline\">
        <a href=\"";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</a>
      </h2>
    </header>

    ";
        // line 44
        echo "    ";
        // line 45
        echo "    <footer class=\"teaser__authored\">
      ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "teaser", []), "show_post_date", [])) {
            // line 47
            echo "        <span class=\"date\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
            echo "</span>
      ";
        }
        // line 49
        echo "
      ";
        // line 50
        if ($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "teaser", []), "show_author_info", [])) {
            // line 51
            echo "        , <span class=\"author\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("by"));
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null)), "html", null, true);
            echo "</span>
      ";
        }
        // line 53
        echo "    </footer>

  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/em_magazine/templates/content/node/article/teaser/node--article--t9.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 53,  126 => 51,  124 => 50,  121 => 49,  115 => 47,  113 => 46,  110 => 45,  108 => 44,  99 => 39,  96 => 38,  94 => 37,  88 => 33,  80 => 28,  76 => 27,  72 => 25,  70 => 24,  64 => 21,  61 => 18,  59 => 15,  58 => 9,  55 => 7,);
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
 * Teaser Style: List Small
 */
#}

{%
  set article_classes =
  [
    'teaser',
    'teaser--item',
    'teaser--item--small',
    'align-items-center',
    node.teaser_highlighted.getString() ? 'is--highlighted',
  ]
%}

{# Teaser Markup #}
{# ============= #}
<article{{ attributes.addClass(article_classes) }}>

  {# == Media == #}
  {# =========== #}
  <div class=\"teaser__media\">
    <div class=\"image image--circular teaser__image\">
      <a href=\"{{ url }}\">
        {{ content.field_teaser_media }}
      </a>
    </div>
  </div>

  <div{{ content_attributes.addClass('teaser__content') }}>

    <header>
      {# == Teaser title == #}
      {# ================== #}
      <h2 class=\"teaser__headline\">
        <a href=\"{{ url }}\">{{ label }}</a>
      </h2>
    </header>

    {# == Meta (author info) == #}
    {# ======================== #}
    <footer class=\"teaser__authored\">
      {% if pd.teaser.show_post_date %}
        <span class=\"date\">{{ date }}</span>
      {% endif %}

      {% if pd.teaser.show_author_info %}
        , <span class=\"author\">{{ 'by'|t }} {{ author_name }}</span>
      {% endif %}
    </footer>

  </div>
</article>
", "themes/custom/em_magazine/templates/content/node/article/teaser/node--article--t9.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/content/node/article/teaser/node--article--t9.html.twig");
    }
}
