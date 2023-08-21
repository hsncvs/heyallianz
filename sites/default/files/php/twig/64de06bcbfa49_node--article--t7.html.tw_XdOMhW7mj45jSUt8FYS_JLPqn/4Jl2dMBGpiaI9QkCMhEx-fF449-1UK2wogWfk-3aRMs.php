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

/* themes/custom/em_magazine/templates/content/node/article/teaser/node--article--t7.html.twig */
class __TwigTemplate_1fa10211450238ecc463e4a1727f71b3def923b5e48867ecec965f41f5266c17 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "if" => 25];
        $filters = ["escape" => 19, "raw" => 27, "t" => 61, "without" => 68];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw', 't', 'without'],
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
        $context["article_classes"] = [0 => "teaser", 1 => "teaser--item", 2 => (($this->getAttribute($this->getAttribute(        // line 13
($context["node"] ?? null), "teaser_highlighted", []), "getString", [], "method")) ? ("is--highlighted") : (""))];
        // line 16
        echo "
";
        // line 19
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["article_classes"] ?? null)], "method")), "html", null, true);
        echo ">

  ";
        // line 22
        echo "  ";
        // line 23
        echo "  <div class=\"teaser__media\">
    <div class=\"relative\">
      ";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "article", []), "media_contained", []), "html", [])) {
            // line 26
            echo "        <div class=\"teaser__media-icons\">
          ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "article", []), "media_contained", []), "html", [])));
            echo "
        </div>
      ";
        }
        // line 30
        echo "      ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_channel", []), 0, [])) {
            // line 31
            echo "        <div class=\"channel channel--boxed teaser__channel\">
          ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_channel", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 35
        echo "      <div class=\"image teaser__image\">
        <a href=\"";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">
          ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_media", [])), "html", null, true);
        echo "
        </a>
      </div>
    </div>
  </div>

  <div";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "teaser__content"], "method")), "html", null, true);
        echo ">

    <header>
      ";
        // line 47
        echo "      ";
        // line 48
        echo "      <h2 class=\"teaser__headline\">
        <a href=\"";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</a>
      </h2>
    </header>

    ";
        // line 54
        echo "    ";
        // line 55
        echo "    <footer class=\"teaser__authored\">
      ";
        // line 56
        if ($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "teaser", []), "show_post_date", [])) {
            // line 57
            echo "        <span class=\"date\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
            echo "</span>
      ";
        }
        // line 59
        echo "
      ";
        // line 60
        if ($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "teaser", []), "show_author_info", [])) {
            // line 61
            echo "        , <span class=\"author\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("by"));
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null)), "html", null, true);
            echo "</span>
      ";
        }
        // line 63
        echo "    </footer>

    ";
        // line 66
        echo "    ";
        // line 67
        echo "    <div class=\"teaser__body\">
      ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_teaser_media", "field_channel"), "html", null, true);
        echo "
    </div>

    ";
        // line 72
        echo "    ";
        // line 73
        echo "    <div class=\"teaser__link\">
      <a href=\"";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read more"));
        echo " <i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
      </a>
    </div>
  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/em_magazine/templates/content/node/article/teaser/node--article--t7.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 75,  181 => 74,  178 => 73,  176 => 72,  170 => 68,  167 => 67,  165 => 66,  161 => 63,  153 => 61,  151 => 60,  148 => 59,  142 => 57,  140 => 56,  137 => 55,  135 => 54,  126 => 49,  123 => 48,  121 => 47,  115 => 43,  106 => 37,  102 => 36,  99 => 35,  93 => 32,  90 => 31,  87 => 30,  81 => 27,  78 => 26,  76 => 25,  72 => 23,  70 => 22,  64 => 19,  61 => 16,  59 => 13,  58 => 9,  55 => 7,);
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
 * Teaser Style: List
 */
#}

{%
  set article_classes =
  [
    'teaser',
    'teaser--item',
    node.teaser_highlighted.getString() ? 'is--highlighted',
  ]
%}

{# Teaser Markup #}
{# ============= #}
<article{{ attributes.addClass(article_classes) }}>

  {# == Media == #}
  {# =========== #}
  <div class=\"teaser__media\">
    <div class=\"relative\">
      {% if pd.article.media_contained.html %}
        <div class=\"teaser__media-icons\">
          {{ pd.article.media_contained.html|raw }}
        </div>
      {% endif %}
      {% if content.field_channel.0 %}
        <div class=\"channel channel--boxed teaser__channel\">
          {{ content.field_channel }}
        </div>
      {% endif %}
      <div class=\"image teaser__image\">
        <a href=\"{{ url }}\">
          {{ content.field_teaser_media }}
        </a>
      </div>
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

    {# == Teaser text (content) == #}
    {# =========================== #}
    <div class=\"teaser__body\">
      {{ content|without('field_teaser_media', 'field_channel') }}
    </div>

    {# == Read more link == #}
    {# ==================== #}
    <div class=\"teaser__link\">
      <a href=\"{{ url }}\">
        {{ 'Read more'|t }} <i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
      </a>
    </div>
  </div>

</article>
", "themes/custom/em_magazine/templates/content/node/article/teaser/node--article--t7.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/content/node/article/teaser/node--article--t7.html.twig");
    }
}
