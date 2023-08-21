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

/* themes/custom/em_magazine/templates/layouts/article/article_layout_1/layout--article-layout-1.html.twig */
class __TwigTemplate_c4c6ec14421c52ab49515380fb9baeb06794ea90d17a4e0b5483573c7b7a705b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'article' => [$this, 'block_article'],
            'article_header_wrapper' => [$this, 'block_article_header_wrapper'],
            'article_media' => [$this, 'block_article_media'],
            'article_header' => [$this, 'block_article_header'],
            'content_top' => [$this, 'block_content_top'],
            'article_content' => [$this, 'block_article_content'],
            'article_comments' => [$this, 'block_article_comments'],
            'content_bottom' => [$this, 'block_content_bottom'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 14, "block" => 17];
        $filters = ["escape" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 13
        echo "
";
        // line 14
        if (($context["content"] ?? null)) {
            // line 15
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">

    ";
            // line 17
            $this->displayBlock('article', $context, $blocks);
            // line 88
            echo "\t
\t";
            // line 90
            echo "    ";
            // line 91
            echo "
    ";
            // line 92
            $this->displayBlock('article_comments', $context, $blocks);
            // line 105
            echo "\t
\t";
            // line 107
            echo "    ";
            // line 108
            echo "
    ";
            // line 109
            $this->displayBlock('content_bottom', $context, $blocks);
            // line 122
            echo "
  </div>
";
        }
    }

    // line 17
    public function block_article($context, array $blocks = [])
    {
        // line 18
        echo "      <article>


        ";
        // line 22
        echo "        ";
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('article_header_wrapper', $context, $blocks);
        // line 51
        echo "

        ";
        // line 54
        echo "        ";
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('content_top', $context, $blocks);
        // line 69
        echo "

        ";
        // line 72
        echo "        ";
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('article_content', $context, $blocks);
        // line 85
        echo "
      </article>
    ";
    }

    // line 24
    public function block_article_header_wrapper($context, array $blocks = [])
    {
        // line 25
        echo "          <div class=\"article-header-wrapper align-items-center js-article-header-wrapper\">

            ";
        // line 28
        echo "            ";
        $this->displayBlock('article_media', $context, $blocks);
        // line 33
        echo "
            ";
        // line 35
        echo "            ";
        $this->displayBlock('article_header', $context, $blocks);
        // line 47
        echo "          </div>
\t\t  
\t\t  <div class=\"single-header-shape\"></div>
        ";
    }

    // line 28
    public function block_article_media($context, array $blocks = [])
    {
        // line 29
        echo "              <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_attributes"] ?? null), "article_media", [])), "html", null, true);
        echo ">
                ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "article_media", [])), "html", null, true);
        echo "
              </div>
            ";
    }

    // line 35
    public function block_article_header($context, array $blocks = [])
    {
        // line 36
        echo "              <header class=\"container article-header\">
                <div class=\"row align-items-center\">
                  <div";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "article_header", []), "addClass", [0 => "col-12", 1 => "col-lg-8", 2 => "pr-lg-5"], "method")), "html", null, true);
        echo ">
                    ";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "article_header", [])), "html", null, true);
        echo "
                  </div>
                  <div";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "article_header_second", []), "addClass", [0 => "col-12", 1 => "col-lg-4", 2 => "mt-4", 3 => "mt-lg-0"], "method")), "html", null, true);
        echo " >
                    ";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "article_header_second", [])), "html", null, true);
        echo "
                  </div>
                </div>
              </header>
            ";
    }

    // line 56
    public function block_content_top($context, array $blocks = [])
    {
        // line 57
        echo "          ";
        if ($this->getAttribute(($context["content"] ?? null), "top", [])) {
            // line 58
            echo "            <div class=\"content-top-wrapper\">
              <div class=\"container\">
                <div class=\"row\">
                  <div";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "top", []), "addClass", [0 => "col-12"], "method")), "html", null, true);
            echo ">
                    ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "top", [])), "html", null, true);
            echo "
                  </div>
                </div>
              </div>
            </div>
          ";
        }
        // line 68
        echo "        ";
    }

    // line 74
    public function block_article_content($context, array $blocks = [])
    {
        // line 75
        echo "          <div class=\"article-content-wrapper\">
            <div class=\"container\">
              <div class=\"row\">
                <div";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "article_content", []), "addClass", [0 => "col-12 col-lg-8 mx-auto"], "method")), "html", null, true);
        echo ">
                  ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "article_content", [])), "html", null, true);
        echo "
                </div>
              </div>
            </div>
          </div>
        ";
    }

    // line 92
    public function block_article_comments($context, array $blocks = [])
    {
        // line 93
        echo "      ";
        if ($this->getAttribute(($context["content"] ?? null), "article_comments", [])) {
            // line 94
            echo "        <div class=\"comments-wrapper\">
          <div class=\"container\">
            <div class=\"row\">
              <div";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "article_comments", []), "addClass", [0 => "col-12", 1 => "col-lg-8", 2 => "mx-lg-auto", 3 => "py-8"], "method")), "html", null, true);
            echo ">
                ";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "article_comments", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 104
        echo "    ";
    }

    // line 109
    public function block_content_bottom($context, array $blocks = [])
    {
        // line 110
        echo "      ";
        if ($this->getAttribute(($context["content"] ?? null), "bottom", [])) {
            // line 111
            echo "        <div class=\"content-bottom-wrapper\">
          <div class=\"container\">
            <div class=\"row\">
              <div";
            // line 114
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "bottom", []), "addClass", [0 => "col-12"], "method")), "html", null, true);
            echo ">
                ";
            // line 115
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 121
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/em_magazine/templates/layouts/article/article_layout_1/layout--article-layout-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 121,  306 => 115,  302 => 114,  297 => 111,  294 => 110,  291 => 109,  287 => 104,  278 => 98,  274 => 97,  269 => 94,  266 => 93,  263 => 92,  253 => 79,  249 => 78,  244 => 75,  241 => 74,  237 => 68,  228 => 62,  224 => 61,  219 => 58,  216 => 57,  213 => 56,  204 => 42,  200 => 41,  195 => 39,  191 => 38,  187 => 36,  184 => 35,  177 => 30,  172 => 29,  169 => 28,  162 => 47,  159 => 35,  156 => 33,  153 => 28,  149 => 25,  146 => 24,  140 => 85,  138 => 74,  135 => 73,  133 => 72,  129 => 69,  127 => 56,  124 => 55,  122 => 54,  118 => 51,  116 => 24,  113 => 23,  111 => 22,  106 => 18,  103 => 17,  96 => 122,  94 => 109,  91 => 108,  89 => 107,  86 => 105,  84 => 92,  81 => 91,  79 => 90,  76 => 88,  74 => 17,  68 => 15,  66 => 14,  63 => 13,);
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
 * Default theme implementation for a post layout.
 *
 * Available variables:
 * - content: The content for this layout.
 * - attributes: HTML attributes for the layout <div>.
 *
 * @ingroup themeable
 */
#}

{% if content %}
  <div{{ attributes }}>

    {% block article %}
      <article>


        {# == Media & Header == #}
        {# ==================== #}

        {% block article_header_wrapper %}
          <div class=\"article-header-wrapper align-items-center js-article-header-wrapper\">

            {# == Article media == #}
            {% block article_media %}
              <div{{ region_attributes.article_media }}>
                {{ content.article_media }}
              </div>
            {% endblock %}

            {# == Article header == #}
            {% block article_header %}
              <header class=\"container article-header\">
                <div class=\"row align-items-center\">
                  <div{{ region_attributes.article_header.addClass('col-12', 'col-lg-8', 'pr-lg-5') }}>
                    {{ content.article_header }}
                  </div>
                  <div{{ region_attributes.article_header_second.addClass('col-12', 'col-lg-4', 'mt-4', 'mt-lg-0') }} >
                    {{ content.article_header_second }}
                  </div>
                </div>
              </header>
            {% endblock %}
          </div>
\t\t  
\t\t  <div class=\"single-header-shape\"></div>
        {% endblock %}


        {# == Content top == #}
        {# ================= #}

        {% block content_top %}
          {% if content.top %}
            <div class=\"content-top-wrapper\">
              <div class=\"container\">
                <div class=\"row\">
                  <div{{ region_attributes.top.addClass('col-12') }}>
                    {{ content.top }}
                  </div>
                </div>
              </div>
            </div>
          {% endif %}
        {% endblock %}


        {# == Article content == #}
        {# ====================== #}

        {% block article_content %}
          <div class=\"article-content-wrapper\">
            <div class=\"container\">
              <div class=\"row\">
                <div{{ region_attributes.article_content.addClass('col-12 col-lg-8 mx-auto') }}>
                  {{ content.article_content }}
                </div>
              </div>
            </div>
          </div>
        {% endblock %}

      </article>
    {% endblock %}
\t
\t{# == Article comments == #}
    {# ====================== #}

    {% block article_comments %}
      {% if content.article_comments %}
        <div class=\"comments-wrapper\">
          <div class=\"container\">
            <div class=\"row\">
              <div{{ region_attributes.article_comments.addClass('col-12', 'col-lg-8', 'mx-lg-auto', 'py-8') }}>
                {{ content.article_comments }}
              </div>
            </div>
          </div>
        </div>
      {% endif %}
    {% endblock %}
\t
\t{# == Content bottom == #}
    {# ==================== #}

    {% block content_bottom %}
      {% if content.bottom %}
        <div class=\"content-bottom-wrapper\">
          <div class=\"container\">
            <div class=\"row\">
              <div{{ region_attributes.bottom.addClass('col-12') }}>
                {{ content.bottom }}
              </div>
            </div>
          </div>
        </div>
      {% endif %}
    {% endblock %}

  </div>
{% endif %}
", "themes/custom/em_magazine/templates/layouts/article/article_layout_1/layout--article-layout-1.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/layouts/article/article_layout_1/layout--article-layout-1.html.twig");
    }
}
