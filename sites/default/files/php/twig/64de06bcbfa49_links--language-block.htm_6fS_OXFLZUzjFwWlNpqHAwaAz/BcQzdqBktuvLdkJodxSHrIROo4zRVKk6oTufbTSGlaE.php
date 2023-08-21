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

/* themes/custom/em_magazine/templates/navigation/links--language-block.html.twig */
class __TwigTemplate_6f321ca18cf454ded186d88f27da0adad2685ff6667624e6705a94432240f571 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "for" => 3, "set" => 9];
        $filters = ["length" => 1, "escape" => 6, "upper" => 28];
        $functions = ["path" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['length', 'escape', 'upper'],
                ['path']
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
        if ((($context["links"] ?? null) && (twig_length_filter($this->env, ($context["links"] ?? null)) > 1))) {
            // line 2
            echo "<div class=\"d-flex mr-1\">";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                if ($this->getAttribute($context["item"], "link", [])) {
                    // line 6
                    echo "<!--";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "link", [])), "html", null, true);
                    echo "-->

          ";
                    // line 8
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "#options", [], "array"), "language", []), "id", []) == ($context["current_language"] ?? null))) {
                        // line 9
                        echo "            ";
                        $context["classes"] = [0 => "is-active"];
                        // line 10
                        echo "          ";
                    } else {
                        // line 11
                        echo "            ";
                        $context["classes"] = [0 => ""];
                        // line 12
                        echo "          ";
                    }
                    // line 13
                    echo "          ";
                    $context["url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "#url", [], "array"), "routeName", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "#url", [], "array"), "routeParameters", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "#url", [], "array"), "options", [])));
                } else {
                    // line 16
                    $context["classes"] = [0 => "disabled"];
                    // line 17
                    echo "          ";
                    $context["url"] = "#";
                }
                // line 21
                echo "<div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null), 1 => "nav-link"], "method")), "html", null, true);
                echo ">

        <a href=\"";
                // line 23
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
                echo "\"
          ";
                // line 24
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "language-link"], "method"), "removeClass", [0 => "nav-link"], "method")), "html", null, true);
                echo "
          ";
                // line 25
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "setAttribute", [0 => "title", 1 => $this->getAttribute($context["item"], "text", [])], "method")), "html", null, true);
                echo "
          ";
                // line 26
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "setAttribute", [0 => "lang", 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "#options", [], "array"), "language", []), "id", [])], "method")), "html", null, true);
                echo "
          ";
                // line 27
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "setAttribute", [0 => "aria-label", 1 => $this->getAttribute($context["item"], "text", [])], "method")), "html", null, true);
                echo ">
            ";
                // line 28
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "#options", [], "array"), "language", []), "id", []))), "html", null, true);
                echo "
        </a>
      </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/em_magazine/templates/navigation/links--language-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  95 => 21,  91 => 17,  89 => 16,  85 => 13,  82 => 12,  79 => 11,  76 => 10,  73 => 9,  71 => 8,  65 => 6,  63 => 4,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if links and links|length > 1 -%}
  <div class=\"d-flex mr-1\">
    {%- for item in links -%}
        {%- if item.link -%}

          <!--{{ item.link }}-->

          {% if item.link['#options'].language.id == current_language %}
            {% set classes = ['is-active'] %}
          {% else %}
            {% set classes = [''] %}
          {% endif %}
          {% set url = path(item.link['#url'].routeName, item.link['#url'].routeParameters, item.link['#url'].options) %}

        {%- else -%}
          {% set classes = ['disabled'] %}
          {% set url = '#' %}
        {%- endif -%}


      \t<div{{ item.attributes.addClass(classes, 'nav-link') }}>

        <a href=\"{{ url }}\"
          {{ item.attributes.addClass('language-link').removeClass('nav-link') }}
          {{ item.attributes.setAttribute('title', item.text ) }}
          {{ item.attributes.setAttribute('lang', item.link['#options'].language.id ) }}
          {{ item.attributes.setAttribute('aria-label', item.text ) }}>
            {{ item.link['#options'].language.id | upper }}
        </a>
      </div>
    {%- endfor -%}
  </div>
{%- endif %}", "themes/custom/em_magazine/templates/navigation/links--language-block.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/navigation/links--language-block.html.twig");
    }
}
