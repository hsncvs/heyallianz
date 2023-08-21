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

/* @em_magazine/header/components/action-menu.html.twig */
class __TwigTemplate_b9a3a0d93eaa41a4db822a22e5e28576893cd5c126e4c9c97805446375110dc0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 2
        echo "
<ul class=\"header--action-menu list-unstyled mb-0 d-flex align-items-center\">
  ";
        // line 4
        if (($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "modules", []), "commerce_cart", []) && $this->getAttribute($this->getAttribute(($context["pd"] ?? null), "header", []), "show_cart_button", []))) {
            // line 5
            echo "    <li class=\"header-cart\">
      ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "block", []), "commerce_cart", [])), "html", null, true);
            echo "
    </li>
  ";
        }
        // line 9
        echo "  ";
        if (($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "modules", []), "search", []) && $this->getAttribute($this->getAttribute(($context["pd"] ?? null), "header", []), "show_search_button", []))) {
            // line 10
            echo "    <li class=\"header-search\">
      <button class=\"js-toggle-search\">
        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
      </button>
    </li>
  ";
        }
        // line 16
        echo "  <li class=\"header-menu ";
        if ( !$this->getAttribute($this->getAttribute(($context["pd"] ?? null), "header", []), "show_hamburger_menu", [])) {
            echo " d-block d-lg-none ";
        }
        echo "\">
    <button class=\"toggle-sidebar js-toggle-sidebar\">
      <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
    </button>
  </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "@em_magazine/header/components/action-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  73 => 10,  70 => 9,  64 => 6,  61 => 5,  59 => 4,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Header action menu #}

<ul class=\"header--action-menu list-unstyled mb-0 d-flex align-items-center\">
  {% if pd.modules.commerce_cart and pd.header.show_cart_button %}
    <li class=\"header-cart\">
      {{ pd.block.commerce_cart }}
    </li>
  {% endif %}
  {% if pd.modules.search and pd.header.show_search_button %}
    <li class=\"header-search\">
      <button class=\"js-toggle-search\">
        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
      </button>
    </li>
  {% endif %}
  <li class=\"header-menu {% if not pd.header.show_hamburger_menu %} d-block d-lg-none {% endif  %}\">
    <button class=\"toggle-sidebar js-toggle-sidebar\">
      <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
    </button>
  </li>
</ul>
", "@em_magazine/header/components/action-menu.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/header/components/action-menu.html.twig");
    }
}
