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

/* @em_magazine/base/page--page-manager.html.twig */
class __TwigTemplate_c00ad119fe3ea320a21b9ff032aed83bb7f0d1694b5abc0a647fb9a492984a07 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'offcanvas_sidebar' => [$this, 'block_offcanvas_sidebar'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 47, "block" => 50];
        $filters = ["escape" => 51];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'block'],
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
        // line 45
        echo "
";
        // line 47
        $this->loadTemplate("@em_magazine/header/header.html.twig", "@em_magazine/base/page--page-manager.html.twig", 47)->display($context);
        // line 48
        echo "
";
        // line 50
        $this->displayBlock('offcanvas_sidebar', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "
";
        // line 59
        $this->loadTemplate("@em_magazine/footer/footer.html.twig", "@em_magazine/base/page--page-manager.html.twig", 59)->display($context);
    }

    // line 50
    public function block_offcanvas_sidebar($context, array $blocks = [])
    {
        // line 51
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "offcanvas_sidebar", [])), "html", null, true);
        echo "
";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        // line 55
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@em_magazine/base/page--page-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 55,  89 => 54,  82 => 51,  79 => 50,  75 => 59,  72 => 57,  70 => 54,  67 => 53,  65 => 50,  62 => 48,  60 => 47,  57 => 45,);
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
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

{# -- HEADER -- #}
{% include '@em_magazine/header/header.html.twig' %}

{# -- REGION: OFFCANVAS -- #}
{% block offcanvas_sidebar %}
  {{ page.offcanvas_sidebar }}
{% endblock %}

{% block content %}
  {{ page.content }}
{% endblock %}

{# -- FOOTER -- #}
{% include '@em_magazine/footer/footer.html.twig' %}
", "@em_magazine/base/page--page-manager.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/base/page--page-manager.html.twig");
    }
}
