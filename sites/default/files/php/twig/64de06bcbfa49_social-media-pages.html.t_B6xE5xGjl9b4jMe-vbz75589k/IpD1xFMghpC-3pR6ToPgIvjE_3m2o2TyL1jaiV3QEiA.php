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

/* @em_magazine/components/social-media-pages.html.twig */
class __TwigTemplate_83bb804baa7b27773c5174d53fa31edd084c9c49c3a764945552183ed2e831bb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 4, "if" => 7];
        $filters = ["escape" => 5, "raw" => 6, "trim" => 7, "striptags" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'raw', 'trim', 'striptags'],
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
<div class=\"d-flex align-items-center social-menu\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pd"] ?? null), "social_media_pages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["social_page"]) {
            // line 5
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["social_page"], "url", [])), "html", null, true);
            echo "\" target=\"_blank\">
      ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["social_page"], "icon", [])));
            echo "
      ";
            // line 7
            if (twig_trim_filter(strip_tags($this->getAttribute($context["social_page"], "title", [])))) {
                // line 8
                echo "        <span class=\"social-menu--link-title d-none d-lg-inline-block\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["social_page"], "title", [])), "html", null, true);
                echo "</span>
      ";
            }
            // line 10
            echo "    </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@em_magazine/components/social-media-pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 12,  80 => 10,  74 => 8,  72 => 7,  68 => 6,  63 => 5,  59 => 4,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Header social media pages #}

<div class=\"d-flex align-items-center social-menu\">
  {% for social_page in pd.social_media_pages %}
    <a href=\"{{ social_page.url }}\" target=\"_blank\">
      {{ social_page.icon|raw }}
      {% if social_page.title|striptags|trim  %}
        <span class=\"social-menu--link-title d-none d-lg-inline-block\">{{ social_page.title }}</span>
      {% endif %}
    </a>
  {% endfor %}
</div>", "@em_magazine/components/social-media-pages.html.twig", "/opt/bitnami/drupal/themes/custom/em_magazine/templates/components/social-media-pages.html.twig");
    }
}
