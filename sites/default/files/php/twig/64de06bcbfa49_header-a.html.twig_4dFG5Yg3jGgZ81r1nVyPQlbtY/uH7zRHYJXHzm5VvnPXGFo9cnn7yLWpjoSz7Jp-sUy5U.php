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

/* @em_magazine/header/header-a.html.twig */
class __TwigTemplate_b06cc9fbd8ae4aca70ce39d2d5d59bca83975b22eacbdd62c0793bf5a06dda46 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 16, "if" => 49];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
        // line 1
        echo "<div class=\"header header-a\">

";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_banner", [])), "html", null, true);
        echo "


  ";
        // line 7
        echo "  ";
        // line 8
        echo "\t

  <div class=\"header--top-wrapper\">
    <div class=\"container\">
      <div class=\"row justify-content-between align-items-center header-top\">
        <div class=\"col-auto\">
       
        </div>
        <div class=\"col-auto\">";
        // line 16
        $this->loadTemplate("@em_magazine/components/social-media-pages.html.twig", "@em_magazine/header/header-a.html.twig", 16)->display($context);
        echo "</div>
      </div>
    </div>
  </div>


  ";
        // line 23
        echo "  ";
        // line 24
        echo "
  <div class=\"header--bottom-wrapper js-sticky-header-element\">
    <div class=\"container\">
      <div class=\"row justify-content-between align-items-center header-bottom\">
        <div class=\"col-auto\">";
        // line 28
        $this->loadTemplate("@em_magazine/components/logo.html.twig", "@em_magazine/header/header-a.html.twig", 28)->display($context);
        echo "</div>
        <div class=\"col-auto\">
          <div class=\"row justify-content-end align-items-center\">
            <div class=\"col-auto d-none d-lg-block\">";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_main_menu", [])), "html", null, true);
        echo "</div>
            <div class=\"col-auto d-flex\">
            
   \t\t \t\t";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "languages", [])), "html", null, true);
        echo "

              ";
        // line 36
        $this->loadTemplate("@em_magazine/header/components/action-menu.html.twig", "@em_magazine/header/header-a.html.twig", 36)->display($context);
        // line 37
        echo "              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  ";
        // line 47
        echo "  ";
        // line 48
        echo "
  ";
        // line 49
        if ($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "modules", []), "search", [])) {
            // line 50
            echo "    <div class=\"search-block-wrapper js-search-block-wrapper\">
      ";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "block", []), "search", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@em_magazine/header/header-a.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 54,  134 => 51,  131 => 50,  129 => 49,  126 => 48,  124 => 47,  113 => 37,  111 => 36,  106 => 34,  100 => 31,  94 => 28,  88 => 24,  86 => 23,  77 => 16,  67 => 8,  65 => 7,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header header-a\">

{{ page.header_banner }}


  {# Header Top #}
  {# ---------- #}
\t

  <div class=\"header--top-wrapper\">
    <div class=\"container\">
      <div class=\"row justify-content-between align-items-center header-top\">
        <div class=\"col-auto\">
       
        </div>
        <div class=\"col-auto\">{% include '@em_magazine/components/social-media-pages.html.twig' %}</div>
      </div>
    </div>
  </div>


  {# Header Bottom #}
  {# ------------- #}

  <div class=\"header--bottom-wrapper js-sticky-header-element\">
    <div class=\"container\">
      <div class=\"row justify-content-between align-items-center header-bottom\">
        <div class=\"col-auto\">{% include '@em_magazine/components/logo.html.twig' %}</div>
        <div class=\"col-auto\">
          <div class=\"row justify-content-end align-items-center\">
            <div class=\"col-auto d-none d-lg-block\">{{ page.header_main_menu }}</div>
            <div class=\"col-auto d-flex\">
            
   \t\t \t\t{{ page.languages }}

              {% include '@em_magazine/header/components/action-menu.html.twig' %}
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  {# Search block #}
  {# ------------ #}

  {% if pd.modules.search %}
    <div class=\"search-block-wrapper js-search-block-wrapper\">
      {{ pd.block.search }}
    </div>
  {% endif %}
</div>
", "@em_magazine/header/header-a.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/header/header-a.html.twig");
    }
}
