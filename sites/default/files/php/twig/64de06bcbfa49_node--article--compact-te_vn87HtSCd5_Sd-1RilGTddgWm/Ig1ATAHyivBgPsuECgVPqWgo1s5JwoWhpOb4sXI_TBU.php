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

/* themes/custom/em_magazine/templates/content/node/article/teaser/node--article--compact-teaser.html.twig */
class __TwigTemplate_7783e4ac9cdc504a2c969b45281f984baba28de45fa843501ce0344c8e73b451 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "if" => 26];
        $filters = ["escape" => 20, "t" => 21, "raw" => 28, "without" => 67];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't', 'raw', 'without'],
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
        $context["article_classes"] = [0 => "teaser", 1 => "teaser--compact", 2 => (($this->getAttribute($this->getAttribute(        // line 13
($context["node"] ?? null), "teaser_highlighted", []), "getString", [], "method")) ? ("is--highlighted") : (""))];
        // line 16
        echo "

";
        // line 20
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["article_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <a class=\"teaser__link\" href=\"";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read more"));
        echo "</a>

  ";
        // line 24
        echo "  ";
        // line 25
        echo "  <div class=\"teaser__media\">
    ";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "article", []), "media_contained", []), "html", [])) {
            // line 27
            echo "      <div class=\"teaser__media-icons\">
        ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "article", []), "media_contained", []), "html", [])));
            echo "
      </div>
    ";
        }
        // line 31
        echo "
    <div class=\"image teaser__image\">
      ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_media", [])), "html", null, true);
        echo "
    </div>
  </div>
  
  ";
        // line 38
        echo "  ";
        // line 39
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "teaser__content"], "method")), "html", null, true);
        echo ">

    ";
        // line 42
        echo "    ";
        // line 43
        echo "    <header>
      ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_channel", []), 0, [])) {
            // line 45
            echo "        <div class=\"channel channel--bordered teaser__channel\" style=\"background-color: ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_channel", []), "entity", []), "field_color", []), "value", [])), "html", null, true);
            echo "\">
          ";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_channel", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 49
        echo "
      <h2 class=\"teaser__headline\">
        <a href=\"";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</a>
      </h2>
    </header>

    ";
        // line 56
        echo "    ";
        // line 57
        echo "    <footer class=\"teaser__authored\">
      ";
        // line 58
        if ($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "teaser", []), "show_post_date", [])) {
            // line 59
            echo "        <span class=\"date\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
            echo "</span>
      ";
        }
        // line 61
        echo "
      ";
        // line 62
        if ($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "teaser", []), "show_author_info", [])) {
            // line 63
            echo "        , <span class=\"author\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("by"));
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null)), "html", null, true);
            echo "</span>
      ";
        }
        // line 65
        echo "    </footer>

    ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_teaser_media", "field_channel"), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/em_magazine/templates/content/node/article/teaser/node--article--compact-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 67,  169 => 65,  161 => 63,  159 => 62,  156 => 61,  150 => 59,  148 => 58,  145 => 57,  143 => 56,  134 => 51,  130 => 49,  124 => 46,  119 => 45,  117 => 44,  114 => 43,  112 => 42,  106 => 39,  104 => 38,  97 => 33,  93 => 31,  87 => 28,  84 => 27,  82 => 26,  79 => 25,  77 => 24,  70 => 21,  65 => 20,  61 => 16,  59 => 13,  58 => 9,  55 => 7,);
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
 * Teaser Style: Compact Extra Large
 */
#}

{%
  set article_classes =
  [
    'teaser',
    'teaser--compact',
    node.teaser_highlighted.getString() ? 'is--highlighted',
  ]
%}


{# Teaser Markup #}
{# ============= #}
<article{{ attributes.addClass(article_classes) }}>
  <a class=\"teaser__link\" href=\"{{ url }}\">{{ 'Read more'|t }}</a>

  {# == Teaser media wrapper == #}
  {# ========================== #}
  <div class=\"teaser__media\">
    {% if pd.article.media_contained.html %}
      <div class=\"teaser__media-icons\">
        {{ pd.article.media_contained.html|raw }}
      </div>
    {% endif %}

    <div class=\"image teaser__image\">
      {{ content.field_teaser_media }}
    </div>
  </div>
  
  {# == Teaser content wrapper == #}
  {# ============================ #}
  <div{{ content_attributes.addClass('teaser__content') }}>

    {# == Teaser title == #}
    {# ================== #}
    <header>
      {% if content.field_channel.0 %}
        <div class=\"channel channel--bordered teaser__channel\" style=\"background-color: {{ node.field_channel.entity.field_color.value }}\">
          {{ content.field_channel }}
        </div>
      {% endif %}

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

    {{ content|without('field_teaser_media','field_channel') }}
  </div>
</article>
", "themes/custom/em_magazine/templates/content/node/article/teaser/node--article--compact-teaser.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/content/node/article/teaser/node--article--compact-teaser.html.twig");
    }
}
