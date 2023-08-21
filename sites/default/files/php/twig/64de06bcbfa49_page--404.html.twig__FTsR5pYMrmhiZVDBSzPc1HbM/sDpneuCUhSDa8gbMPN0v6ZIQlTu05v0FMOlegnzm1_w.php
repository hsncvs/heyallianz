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

/* themes/custom/em_magazine/templates/error-pages/page--404.html.twig */
class __TwigTemplate_fc0bd668219aa824333ab2d9073108cfc1e4a316f8b48d9d02df677625a258bc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 8];
        $functions = ["attach_library" => 8];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library']
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
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("em/error-pages"), "html", null, true);
        echo "

<div class=\"d-flex align-items-center vh-100\">

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-8 mx-auto\">

        <div class=\"error-message-wrapper\">
          <div class=\"text-center\">

            <h1>
              <div class=\"error-code d-inline-block mb-3 mb-md-0\">404</div>
              <div class=\"d-md-inline-block\">";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "#title", [], "array")), "html", null, true);
        echo "</div>
            </h1>
            ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\" class=\"button mt-4\">Ana Sayfaya Dön</a>
          </div>
        </div>

      </div>
    </div>
  </div>";
        // line 31
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/em_magazine/templates/error-pages/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  83 => 24,  79 => 23,  74 => 21,  58 => 8,  55 => 7,);
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
 * Error 404 page.
 */
#}

{{ attach_library('em/error-pages') }}

<div class=\"d-flex align-items-center vh-100\">

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-8 mx-auto\">

        <div class=\"error-message-wrapper\">
          <div class=\"text-center\">

            <h1>
              <div class=\"error-code d-inline-block mb-3 mb-md-0\">404</div>
              <div class=\"d-md-inline-block\">{{ page['#title'] }}</div>
            </h1>
            {{ page.content }}
            <a href=\"{{ front_page }}\" class=\"button mt-4\">Ana Sayfaya Dön</a>
          </div>
        </div>

      </div>
    </div>
  </div>{# /.layout-container #}

</div>
", "themes/custom/em_magazine/templates/error-pages/page--404.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/error-pages/page--404.html.twig");
    }
}
