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

/* @em_magazine/components/logo.html.twig */
class __TwigTemplate_b611e09174e079ae06112d255b1c413afb349aa566ace10c46d09f7fdc61342b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["t" => 2, "escape" => 3];
        $functions = ["url" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                ['url']
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
        if ((($context["lang"] ?? null) == "tr")) {
            // line 2
            echo "        <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "\" class=\"logo\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\">
          <img src=\"";
            // line 3
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["pd"] ?? null), "base_path", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "logo", []), "light", [])), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid logo-light\">
          <img src=\"";
            // line 4
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["pd"] ?? null), "base_path", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "logo", []), "dark", [])), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid logo-dark\">
        </a>
";
        } elseif ((        // line 6
($context["lang"] ?? null) == "en")) {
            // line 7
            echo "        <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "\" class=\"logo\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\">
          <img src=\"/";
            // line 8
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
            echo "/assets/images/hey-logo-eng.png\" alt=\"\" class=\"img-fluid logo-light\">
          <img src=\"/";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
            echo "/assets/images/hey-logo-eng.png\" alt=\"\" class=\"img-fluid logo-dark\">
        </a>
";
        } else {
            // line 12
            echo "        <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "\" class=\"logo\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\">
          <img src=\"";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["pd"] ?? null), "base_path", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "logo", []), "light", [])), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid logo-light\">
          <img src=\"";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["pd"] ?? null), "base_path", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["pd"] ?? null), "logo", []), "dark", [])), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid logo-dark\">
        </a>
";
        }
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "@em_magazine/components/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 17,  106 => 14,  101 => 13,  94 => 12,  88 => 9,  84 => 8,  77 => 7,  75 => 6,  69 => 4,  64 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if (lang == 'tr') %}
        <a href=\"{{ url('<front>') }}\" class=\"logo\" title=\"{{ 'Home'|t }}\">
          <img src=\"{{ pd.base_path }}{{ pd.logo.light }}\" alt=\"\" class=\"img-fluid logo-light\">
          <img src=\"{{ pd.base_path }}{{ pd.logo.dark}}\" alt=\"\" class=\"img-fluid logo-dark\">
        </a>
{% elseif (lang == 'en') %}
        <a href=\"{{ url('<front>') }}\" class=\"logo\" title=\"{{ 'Home'|t }}\">
          <img src=\"/{{ directory }}/assets/images/hey-logo-eng.png\" alt=\"\" class=\"img-fluid logo-light\">
          <img src=\"/{{ directory }}/assets/images/hey-logo-eng.png\" alt=\"\" class=\"img-fluid logo-dark\">
        </a>
{% else %}
        <a href=\"{{ url('<front>') }}\" class=\"logo\" title=\"{{ 'Home'|t }}\">
          <img src=\"{{ pd.base_path }}{{ pd.logo.light }}\" alt=\"\" class=\"img-fluid logo-light\">
          <img src=\"{{ pd.base_path }}{{ pd.logo.dark}}\" alt=\"\" class=\"img-fluid logo-dark\">
        </a>
{% endif %}

", "@em_magazine/components/logo.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/components/logo.html.twig");
    }
}
