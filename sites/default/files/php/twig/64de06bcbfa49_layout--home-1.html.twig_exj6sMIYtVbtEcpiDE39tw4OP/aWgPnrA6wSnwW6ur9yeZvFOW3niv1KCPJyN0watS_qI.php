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

/* themes/custom/em/templates/layouts/home/home_1/layout--home-1.html.twig */
class __TwigTemplate_b59121518de3f5f6032d41892d858f951edf550e0767e770ecfe3d5c9366833e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'region_featured' => [$this, 'block_region_featured'],
            'region_top' => [$this, 'block_region_top'],
            'region_top_below' => [$this, 'block_region_top_below'],
            'region_above_midle' => [$this, 'block_region_above_midle'],
            'region_middle' => [$this, 'block_region_middle'],
            'region_middle_below' => [$this, 'block_region_middle_below'],
            'region_bottom_above' => [$this, 'block_region_bottom_above'],
            'region_bottom' => [$this, 'block_region_bottom'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 19, "if" => 32, "set" => 77];
        $filters = ["escape" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set'],
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
<div";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">

  ";
        // line 17
        echo "  ";
        // line 18
        echo "
  ";
        // line 19
        $this->displayBlock('region_featured', $context, $blocks);
        // line 26
        echo "


  ";
        // line 30
        echo "  ";
        // line 31
        echo "
  ";
        // line 32
        if ($this->getAttribute(($context["content"] ?? null), "top", [])) {
            // line 33
            echo "    <div class=\"layout-region-wrapper--top\">
      ";
            // line 34
            $this->displayBlock('region_top', $context, $blocks);
            // line 43
            echo "    </div>
  ";
        }
        // line 45
        echo "


  ";
        // line 49
        echo "  ";
        // line 50
        echo "
  ";
        // line 51
        if ((($this->getAttribute(($context["content"] ?? null), "top_below_first", []) || $this->getAttribute(($context["content"] ?? null), "top_below_second", [])) || $this->getAttribute(($context["content"] ?? null), "top_below_third", []))) {
            // line 52
            echo "    <div class=\"layout-region-wrapper--top-below\">
      ";
            // line 53
            $this->displayBlock('region_top_below', $context, $blocks);
            // line 68
            echo "    </div>
  ";
        }
        // line 70
        echo "  


  ";
        // line 74
        echo "  ";
        // line 75
        echo "
  ";
        // line 77
        echo "  ";
        $context["maf_classes"] = [0 => "col-12", 1 => "col-lg-8"];
        // line 78
        echo "  ";
        $context["mas_classes"] = [0 => "col-12", 1 => "col-lg-4", 2 => "js-sticky-elements"];
        // line 79
        echo "
  ";
        // line 80
        if (($this->getAttribute(($context["content"] ?? null), "middle_above_first", []) || $this->getAttribute(($context["content"] ?? null), "middle_above_second", []))) {
            // line 81
            echo "    <div class=\"layout-region-wrapper--middle-above\">
      ";
            // line 82
            $this->displayBlock('region_above_midle', $context, $blocks);
            // line 94
            echo "    </div>
  ";
        }
        // line 96
        echo "


  ";
        // line 100
        echo "  ";
        // line 101
        echo "
  ";
        // line 102
        if ($this->getAttribute(($context["content"] ?? null), "middle", [])) {
            // line 103
            echo "    <div class=\"layout-region-wrapper--middle\">
      ";
            // line 104
            $this->displayBlock('region_middle', $context, $blocks);
            // line 113
            echo "    </div>
  ";
        }
        // line 115
        echo "


  ";
        // line 119
        echo "  ";
        // line 120
        echo "
  ";
        // line 121
        if ((($this->getAttribute(($context["content"] ?? null), "middle_below_first", []) || $this->getAttribute(($context["content"] ?? null), "middle_below_second", [])) || $this->getAttribute(($context["content"] ?? null), "middle_below_third", []))) {
            // line 122
            echo "    <div class=\"layout-region-wrapper--middle-below\">
      ";
            // line 123
            $this->displayBlock('region_middle_below', $context, $blocks);
            // line 138
            echo "    </div>
  ";
        }
        // line 140
        echo "


  ";
        // line 144
        echo "  ";
        // line 145
        echo "
  ";
        // line 147
        echo "  ";
        $context["baf_classes"] = [0 => "col-12", 1 => "col-lg-8"];
        // line 148
        echo "  ";
        $context["bas_classes"] = [0 => "col-12", 1 => "col-lg-4", 2 => "js-sticky-elements"];
        // line 149
        echo "
  ";
        // line 150
        if (($this->getAttribute(($context["content"] ?? null), "bottom_above_first", []) || $this->getAttribute(($context["content"] ?? null), "bottom_above_second", []))) {
            // line 151
            echo "    <div class=\"layout-region-wrapper--bottom-above\">
      ";
            // line 152
            $this->displayBlock('region_bottom_above', $context, $blocks);
            // line 164
            echo "    </div>
  ";
        }
        // line 166
        echo "


  ";
        // line 170
        echo "  ";
        // line 171
        echo "
  ";
        // line 172
        if ($this->getAttribute(($context["content"] ?? null), "bottom", [])) {
            // line 173
            echo "    <div class=\"layout-region-wrapper--bottom\">
      ";
            // line 174
            $this->displayBlock('region_bottom', $context, $blocks);
            // line 183
            echo "    </div>
  ";
        }
        // line 185
        echo "

</div>
";
    }

    // line 19
    public function block_region_featured($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        if ($this->getAttribute(($context["content"] ?? null), "featured", [])) {
            // line 21
            echo "      <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_attributes"] ?? null), "featured", [])), "html", null, true);
            echo ">
        ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "featured", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 25
        echo "  ";
    }

    // line 34
    public function block_region_top($context, array $blocks = [])
    {
        // line 35
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "top", []), "addClass", [0 => "col-12"], "method")), "html", null, true);
        echo ">
              ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "top", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      ";
    }

    // line 53
    public function block_region_top_below($context, array $blocks = [])
    {
        // line 54
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "top_below_first", []), "addClass", [0 => "col-12", 1 => "col-lg-4"], "method")), "html", null, true);
        echo ">
              ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "top_below_first", [])), "html", null, true);
        echo "
            </div>
            <div";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "top_below_second", []), "addClass", [0 => "col-12", 1 => "col-lg-4"], "method")), "html", null, true);
        echo ">
              ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "top_below_second", [])), "html", null, true);
        echo "
            </div>
            <div";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "top_below_third", []), "addClass", [0 => "col-12", 1 => "col-lg-4"], "method")), "html", null, true);
        echo ">
              ";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "top_below_third", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      ";
    }

    // line 82
    public function block_region_above_midle($context, array $blocks = [])
    {
        // line 83
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "middle_above_first", []), "addClass", [0 => ($context["maf_classes"] ?? null)], "method")), "html", null, true);
        echo ">
              ";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "middle_above_first", [])), "html", null, true);
        echo "
            </div>
            <div";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "middle_above_second", []), "addClass", [0 => ($context["mas_classes"] ?? null)], "method")), "html", null, true);
        echo ">
              ";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "middle_above_second", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      ";
    }

    // line 104
    public function block_region_middle($context, array $blocks = [])
    {
        // line 105
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "middle", []), "addClass", [0 => "col-12"], "method")), "html", null, true);
        echo ">
              ";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "middle", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      ";
    }

    // line 123
    public function block_region_middle_below($context, array $blocks = [])
    {
        // line 124
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "middle_below_first", []), "addClass", [0 => "col-12", 1 => "col-lg-4"], "method")), "html", null, true);
        echo ">
              ";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "middle_below_first", [])), "html", null, true);
        echo "
            </div>
            <div";
        // line 129
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "middle_below_second", []), "addClass", [0 => "col-12", 1 => "col-lg-4"], "method")), "html", null, true);
        echo ">
              ";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "middle_below_second", [])), "html", null, true);
        echo "
            </div>
            <div";
        // line 132
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "middle_below_third", []), "addClass", [0 => "col-12", 1 => "col-lg-4"], "method")), "html", null, true);
        echo ">
              ";
        // line 133
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "middle_below_third", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      ";
    }

    // line 152
    public function block_region_bottom_above($context, array $blocks = [])
    {
        // line 153
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div";
        // line 155
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "bottom_above_first", []), "addClass", [0 => ($context["baf_classes"] ?? null)], "method")), "html", null, true);
        echo ">
              ";
        // line 156
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "bottom_above_first", [])), "html", null, true);
        echo "
            </div>
            <div";
        // line 158
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "bottom_above_second", []), "addClass", [0 => ($context["bas_classes"] ?? null)], "method")), "html", null, true);
        echo " >
              ";
        // line 159
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "bottom_above_second", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      ";
    }

    // line 174
    public function block_region_bottom($context, array $blocks = [])
    {
        // line 175
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div";
        // line 177
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "bottom", []), "addClass", [0 => "col-12"], "method")), "html", null, true);
        echo ">
              ";
        // line 178
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "bottom", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/em/templates/layouts/home/home_1/layout--home-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 178,  452 => 177,  448 => 175,  445 => 174,  436 => 159,  432 => 158,  427 => 156,  423 => 155,  419 => 153,  416 => 152,  407 => 133,  403 => 132,  398 => 130,  394 => 129,  389 => 127,  385 => 126,  381 => 124,  378 => 123,  369 => 108,  365 => 107,  361 => 105,  358 => 104,  349 => 89,  345 => 88,  340 => 86,  336 => 85,  332 => 83,  329 => 82,  320 => 63,  316 => 62,  311 => 60,  307 => 59,  302 => 57,  298 => 56,  294 => 54,  291 => 53,  282 => 38,  278 => 37,  274 => 35,  271 => 34,  267 => 25,  261 => 22,  256 => 21,  253 => 20,  250 => 19,  243 => 185,  239 => 183,  237 => 174,  234 => 173,  232 => 172,  229 => 171,  227 => 170,  222 => 166,  218 => 164,  216 => 152,  213 => 151,  211 => 150,  208 => 149,  205 => 148,  202 => 147,  199 => 145,  197 => 144,  192 => 140,  188 => 138,  186 => 123,  183 => 122,  181 => 121,  178 => 120,  176 => 119,  171 => 115,  167 => 113,  165 => 104,  162 => 103,  160 => 102,  157 => 101,  155 => 100,  150 => 96,  146 => 94,  144 => 82,  141 => 81,  139 => 80,  136 => 79,  133 => 78,  130 => 77,  127 => 75,  125 => 74,  120 => 70,  116 => 68,  114 => 53,  111 => 52,  109 => 51,  106 => 50,  104 => 49,  99 => 45,  95 => 43,  93 => 34,  90 => 33,  88 => 32,  85 => 31,  83 => 30,  78 => 26,  76 => 19,  73 => 18,  71 => 17,  66 => 14,  63 => 13,);
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

<div{{ attributes }}>

  {# == Region: Featured == #}
  {# ====================== #}

  {% block region_featured %}
    {% if(content.featured) %}
      <div{{ region_attributes.featured }}>
        {{ content.featured }}
      </div>
    {% endif %}
  {% endblock %}



  {# == Region: Top == #}
  {# ================= #}

  {% if content.top %}
    <div class=\"layout-region-wrapper--top\">
      {% block region_top %}
        <div class=\"container\">
          <div class=\"row\">
            <div{{ region_attributes.top.addClass('col-12') }}>
              {{ content.top }}
            </div>
          </div>
        </div>
      {% endblock %}
    </div>
  {% endif %}



  {# == Region: Top Below == #}
  {# ======================= #}

  {% if content.top_below_first or content.top_below_second or content.top_below_third %}
    <div class=\"layout-region-wrapper--top-below\">
      {% block region_top_below %}
        <div class=\"container\">
          <div class=\"row\">
            <div{{ region_attributes.top_below_first.addClass('col-12', 'col-lg-4') }}>
              {{ content.top_below_first }}
            </div>
            <div{{ region_attributes.top_below_second.addClass('col-12', 'col-lg-4') }}>
              {{ content.top_below_second }}
            </div>
            <div{{ region_attributes.top_below_third.addClass('col-12', 'col-lg-4') }}>
              {{ content.top_below_third }}
            </div>
          </div>
        </div>
      {% endblock %}
    </div>
  {% endif %}
  


  {# == Region: Above middle  == #}
  {# =========================== #}

  {# Setting up attributes #}
  {% set maf_classes = ['col-12', 'col-lg-8'] %}
  {% set mas_classes = ['col-12', 'col-lg-4', 'js-sticky-elements'] %}

  {% if content.middle_above_first or content.middle_above_second %}
    <div class=\"layout-region-wrapper--middle-above\">
      {% block region_above_midle %}
        <div class=\"container\">
          <div class=\"row\">
            <div{{ region_attributes.middle_above_first.addClass(maf_classes) }}>
              {{ content.middle_above_first }}
            </div>
            <div{{ region_attributes.middle_above_second.addClass(mas_classes) }}>
              {{ content.middle_above_second }}
            </div>
          </div>
        </div>
      {% endblock %}
    </div>
  {% endif %}



  {# == Region: Middle == #}
  {# ==================== #}

  {% if content.middle %}
    <div class=\"layout-region-wrapper--middle\">
      {% block region_middle %}
        <div class=\"container\">
          <div class=\"row\">
            <div{{ region_attributes.middle.addClass('col-12') }}>
              {{ content.middle }}
            </div>
          </div>
        </div>
      {% endblock %}
    </div>
  {% endif %}



  {# == Region: Middle Below == #}
  {# ========================== #}

  {% if content.middle_below_first or content.middle_below_second or content.middle_below_third %}
    <div class=\"layout-region-wrapper--middle-below\">
      {% block region_middle_below %}
        <div class=\"container\">
          <div class=\"row\">
            <div{{ region_attributes.middle_below_first.addClass('col-12', 'col-lg-4') }}>
              {{ content.middle_below_first }}
            </div>
            <div{{ region_attributes.middle_below_second.addClass('col-12', 'col-lg-4') }}>
              {{ content.middle_below_second }}
            </div>
            <div{{ region_attributes.middle_below_third.addClass('col-12', 'col-lg-4') }}>
              {{ content.middle_below_third }}
            </div>
          </div>
        </div>
      {% endblock %}
    </div>
  {% endif %}



  {# == Region: Above bottom == #}
  {# =========================== #}

  {# Setting up attributes #}
  {% set baf_classes = ['col-12', 'col-lg-8'] %}
  {% set bas_classes = ['col-12', 'col-lg-4', 'js-sticky-elements'] %}

  {% if content.bottom_above_first or content.bottom_above_second %}
    <div class=\"layout-region-wrapper--bottom-above\">
      {% block region_bottom_above %}
        <div class=\"container\">
          <div class=\"row\">
            <div{{ region_attributes.bottom_above_first.addClass(baf_classes) }}>
              {{ content.bottom_above_first }}
            </div>
            <div{{ region_attributes.bottom_above_second.addClass(bas_classes) }} >
              {{ content.bottom_above_second }}
            </div>
          </div>
        </div>
      {% endblock %}
    </div>
  {% endif %}



  {# == Region: Bottom == #}
  {# ==================== #}

  {% if content.bottom %}
    <div class=\"layout-region-wrapper--bottom\">
      {% block region_bottom %}
        <div class=\"container\">
          <div class=\"row\">
            <div{{ region_attributes.bottom.addClass('col-12') }}>
              {{ content.bottom }}
            </div>
          </div>
        </div>
      {% endblock %}
    </div>
  {% endif %}


</div>
", "themes/custom/em/templates/layouts/home/home_1/layout--home-1.html.twig", "/opt/bitnami/drupal/themes/custom/em/templates/layouts/home/home_1/layout--home-1.html.twig");
    }
}
