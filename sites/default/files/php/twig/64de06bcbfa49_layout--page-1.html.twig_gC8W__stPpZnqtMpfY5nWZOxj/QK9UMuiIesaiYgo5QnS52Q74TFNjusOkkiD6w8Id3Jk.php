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

/* themes/custom/em/templates/layouts/page/page_1/layout--page-1.html.twig */
class __TwigTemplate_4e8d539cd98031a164458d545caebaeccccae58cf0997dae70692d03559227ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'page_heading' => [$this, 'block_page_heading'],
            'region_content' => [$this, 'block_region_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 22, "if" => 41];
        $filters = ["escape" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
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
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">



  ";
        // line 20
        echo "  ";
        // line 21
        echo "
  ";
        // line 22
        $this->displayBlock('page_heading', $context, $blocks);
        // line 35
        echo "


  ";
        // line 39
        echo "  ";
        // line 40
        echo "
  ";
        // line 41
        if ($this->getAttribute(($context["content"] ?? null), "content", [])) {
            // line 42
            echo "    <div class=\"layout-region-wrapper--content\">
      ";
            // line 43
            $this->displayBlock('region_content', $context, $blocks);
            // line 52
            echo "    </div>
  ";
        }
        // line 54
        echo "

</div>
";
    }

    // line 22
    public function block_page_heading($context, array $blocks = [])
    {
        // line 23
        echo "    <div class=\"page-heading-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "page_title", [])), "html", null, true);
        echo "
            ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
            ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "tabs", [])), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
  ";
    }

    // line 43
    public function block_region_content($context, array $blocks = [])
    {
        // line 44
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "content", []), "addClass", [0 => "col-12"], "method")), "html", null, true);
        echo ">
              ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "content", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/em/templates/layouts/page/page_1/layout--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 47,  137 => 46,  133 => 44,  130 => 43,  120 => 29,  116 => 28,  112 => 27,  106 => 23,  103 => 22,  96 => 54,  92 => 52,  90 => 43,  87 => 42,  85 => 41,  82 => 40,  80 => 39,  75 => 35,  73 => 22,  70 => 21,  68 => 20,  61 => 15,  57 => 13,);
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



  {# == Heading == #}
  {# ============= #}

  {% block page_heading %}
    <div class=\"page-heading-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            {{ content.page_title }}
            {{ content.breadcrumb }}
            {{ content.tabs }}
          </div>
        </div>
      </div>
    </div>
  {% endblock %}



  {# == Region: Content == #}
  {# ===================== #}

  {% if content.content %}
    <div class=\"layout-region-wrapper--content\">
      {% block region_content %}
        <div class=\"container\">
          <div class=\"row\">
            <div{{ region_attributes.content.addClass('col-12') }}>
              {{ content.content }}
            </div>
          </div>
        </div>
      {% endblock %}
    </div>
  {% endif %}


</div>
", "themes/custom/em/templates/layouts/page/page_1/layout--page-1.html.twig", "/opt/bitnami/drupal/themes/custom/em/templates/layouts/page/page_1/layout--page-1.html.twig");
    }
}
