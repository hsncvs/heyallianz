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

/* themes/custom/em_magazine/templates/user/page--user--login.html.twig */
class __TwigTemplate_7b3e11843e313bcf22eb3ae138a18291a80918ee33379748245e856f4f53680a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content_main' => [$this, 'block_content_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 47, "block" => 49];
        $filters = ["escape" => 55];
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
        $this->loadTemplate("@em_magazine/header/header.html.twig", "themes/custom/em_magazine/templates/user/page--user--login.html.twig", 47)->display($context);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('content_main', $context, $blocks);
        // line 64
        echo "

";
        // line 67
        $this->loadTemplate("@em_magazine/footer/footer.html.twig", "themes/custom/em_magazine/templates/user/page--user--login.html.twig", 67)->display($context);
    }

    // line 49
    public function block_content_main($context, array $blocks = [])
    {
        // line 50
        echo "  <div class=\"login-register-wrapper\">
   <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-6 mx-auto\">
        <div class=\"mb-3\">
          <div class=\"mb-4\">";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
        echo "</div>
          <div style=\"position:relative;\">";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tabs", [])), "html", null, true);
        echo "</div>
        </div>
        ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      </div>
    </div>
   </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/em_magazine/templates/user/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 58,  88 => 56,  84 => 55,  77 => 50,  74 => 49,  70 => 67,  66 => 64,  64 => 49,  61 => 48,  59 => 47,  56 => 45,);
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

{% block content_main %}
  <div class=\"login-register-wrapper\">
   <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-6 mx-auto\">
        <div class=\"mb-3\">
          <div class=\"mb-4\">{{ page.page_title }}</div>
          <div style=\"position:relative;\">{{ page.tabs }}</div>
        </div>
        {{ page.content }}
      </div>
    </div>
   </div>
  </div>
{% endblock %}


{# -- FOOTER -- #}
{% include '@em_magazine/footer/footer.html.twig' %}
", "themes/custom/em_magazine/templates/user/page--user--login.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/user/page--user--login.html.twig");
    }
}
