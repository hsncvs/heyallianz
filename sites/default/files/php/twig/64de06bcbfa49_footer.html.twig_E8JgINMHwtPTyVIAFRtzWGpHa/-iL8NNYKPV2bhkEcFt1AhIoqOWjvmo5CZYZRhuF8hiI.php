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

/* @em_magazine/footer/footer.html.twig */
class __TwigTemplate_c3ba9ed2c805eabe0b500ca6968fe9a00ee09677e365f990312f08a2e6379247 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 9, "if" => 16];
        $filters = ["escape" => 10];
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
        echo "<footer class=\"page-footer\">

  <div class=\"page-footer__top-shape\"></div>

  <div class=\"page-footer__top-wrapper\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-12 col-lg-8 mx-auto\">
          ";
        // line 9
        $this->loadTemplate("@em_magazine/components/social-media-pages.html.twig", "@em_magazine/footer/footer.html.twig", 9)->display($context);
        // line 10
        echo "\t\t  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
\t<div class=\"footer-terms\">
\t
\t\t";
        // line 16
        if ($this->getAttribute(($context["page"] ?? null), "footer_term", [])) {
            // line 17
            echo "\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_term", [])), "html", null, true);
            echo "
\t\t";
        }
        // line 19
        echo "\t
        </div>
\t<div class=\"footer-logo\">
          <a href=\"https://www.allianz.com.tr\" target=\"_blank\">
            <img src=\"";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["pd"] ?? null), "base_path", [])), "html", null, true);
        echo "themes/custom/em_magazine/branding/allianz-logo.png\" alt=\"Allianz\" />
          </a>
        </div>
  </div>

</footer>
";
    }

    public function getTemplateName()
    {
        return "@em_magazine/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  85 => 19,  79 => 17,  77 => 16,  67 => 10,  65 => 9,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"page-footer\">

  <div class=\"page-footer__top-shape\"></div>

  <div class=\"page-footer__top-wrapper\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-12 col-lg-8 mx-auto\">
          {% include '@em_magazine/components/social-media-pages.html.twig' %}
\t\t  {{ page.footer_top }}
        </div>
      </div>
    </div>
\t<div class=\"footer-terms\">
\t
\t\t{% if page.footer_term %}
\t\t\t{{ page.footer_term }}
\t\t{% endif %}
\t
        </div>
\t<div class=\"footer-logo\">
          <a href=\"https://www.allianz.com.tr\" target=\"_blank\">
            <img src=\"{{ pd.base_path }}themes/custom/em_magazine/branding/allianz-logo.png\" alt=\"Allianz\" />
          </a>
        </div>
  </div>

</footer>
", "@em_magazine/footer/footer.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/footer/footer.html.twig");
    }
}
