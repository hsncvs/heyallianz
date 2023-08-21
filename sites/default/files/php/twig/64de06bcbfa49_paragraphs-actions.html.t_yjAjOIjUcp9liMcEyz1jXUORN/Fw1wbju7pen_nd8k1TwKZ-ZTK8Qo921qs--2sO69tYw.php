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

/* modules/contrib/paragraphs/templates/paragraphs-actions.html.twig */
class __TwigTemplate_e676223c2bdf567ccdb1315bf46db8706bef6ef4b746a775040a704f0608a606 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 20, "if" => 21, "trans" => 23];
        $filters = ["escape" => 16];
        $functions = ["render_var" => 20];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape'],
                ['render_var']
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
        // line 15
        echo "<div class=\"paragraphs-actions\">
  ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["actions"] ?? null)), "html", null, true);
        echo "
  ";
        // line 20
        echo "  ";
        $context["dropdown_actions_output"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["dropdown_actions"] ?? null)));
        // line 21
        echo "  ";
        if (($context["dropdown_actions_output"] ?? null)) {
            // line 22
            echo "    <div class=\"paragraphs-dropdown\">
      <button class=\"paragraphs-dropdown-toggle\"><span class=\"visually-hidden\">";
            // line 23
            echo t("Toggle Actions", array());
            echo "</span></button>
      <div class=\"paragraphs-dropdown-actions\">
        ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dropdown_actions_output"] ?? null)), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/paragraphs/templates/paragraphs-actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  76 => 25,  71 => 23,  68 => 22,  65 => 21,  62 => 20,  58 => 16,  55 => 15,);
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
 * Default theme implementation for a paragraphs actions component.
 *
 * Available variables:
 * - actions - default actions, always visible and not in dropdown.
 * - dropdown_actions - actions for dropdown subcomponent.
 *
 * @see template_preprocess()
 *
 * @ingroup themeable
 */
#}
<div class=\"paragraphs-actions\">
  {{ actions }}
  {# We are still using access attribute on some places to disable dropdown
     actions and that is why we will first render dropdown_actions and then
     render dropdown subcomoponent if needed. #}
  {% set dropdown_actions_output = render_var(dropdown_actions) %}
  {% if dropdown_actions_output %}
    <div class=\"paragraphs-dropdown\">
      <button class=\"paragraphs-dropdown-toggle\"><span class=\"visually-hidden\">{% trans %}Toggle Actions{% endtrans %}</span></button>
      <div class=\"paragraphs-dropdown-actions\">
        {{ dropdown_actions_output }}
      </div>
    </div>
  {% endif %}
</div>
", "modules/contrib/paragraphs/templates/paragraphs-actions.html.twig", "/opt/bitnami/drupal/modules/contrib/paragraphs/templates/paragraphs-actions.html.twig");
    }
}
