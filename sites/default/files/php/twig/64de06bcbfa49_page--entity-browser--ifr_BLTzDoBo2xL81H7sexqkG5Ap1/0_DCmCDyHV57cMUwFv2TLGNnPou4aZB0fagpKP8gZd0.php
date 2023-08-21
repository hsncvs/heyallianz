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

/* modules/contrib/entity_browser/templates/page--entity-browser--iframe.html.twig */
class __TwigTemplate_b92ed27dc358186a07e6b12777b1b3406e302b82dbc85d21302a1ccf112fc252 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 19];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 10
        echo "<div class=\"layout-container\">

    ";
        // line 19
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
        echo "

    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 23
        echo "
        <div class=\"layout-content\">

            ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "

        </div>";
        // line 29
        echo "
    </main>

</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/entity_browser/templates/page--entity-browser--iframe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  71 => 26,  66 => 23,  59 => 19,  55 => 10,);
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
 * Theme override for the IFrame entity browser. Template copied from core/modules/system/templates/page.html.twig
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"layout-container\">

    {#
      We ommit most of the regions in this template, which generally includes
      messages too. Since this is not desired we try to figure out where messages
      live and display them separately.

      @see entity_browser_preprocess_page__entity_browser__iframe()
    #}
    {{ messages }}

    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

        <div class=\"layout-content\">

            {{ page.content }}

        </div>{# /.layout-content #}

    </main>

</div>{# /.layout-container #}
", "modules/contrib/entity_browser/templates/page--entity-browser--iframe.html.twig", "/opt/bitnami/drupal/modules/contrib/entity_browser/templates/page--entity-browser--iframe.html.twig");
    }
}
