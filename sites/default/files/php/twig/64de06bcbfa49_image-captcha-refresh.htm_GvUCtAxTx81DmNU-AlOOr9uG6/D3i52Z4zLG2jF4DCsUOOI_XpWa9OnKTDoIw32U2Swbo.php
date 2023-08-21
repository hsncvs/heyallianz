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

/* modules/captcha/image_captcha/templates/image-captcha-refresh.html.twig */
class __TwigTemplate_0a77b7d21210d80869f27d2405ccffeaa1ff41713404ce7f041a5aa09597bad4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 16];
        $functions = ["attach_library" => 16];

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
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("image_captcha/image-captcha-refresh"), "html", null, true);
        echo "
<div class=\"reload-captcha-wrapper\">
    ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["captcha_refresh_link"] ?? null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/captcha/image_captcha/templates/image-captcha-refresh.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  55 => 16,);
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
 * Custom theme implementation for custom field type defined.
 *
 * Available variables:
 * - uri: An optional URL the image can be linked to.
 * - title: An optional Title value which will be shown as text.
 * - link_value: Value used to open the link in new or same tab.
 *
 * @see template_preprocess_custom_zipang_link_formatter()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('image_captcha/image-captcha-refresh') }}
<div class=\"reload-captcha-wrapper\">
    {{captcha_refresh_link}}
</div>
", "modules/captcha/image_captcha/templates/image-captcha-refresh.html.twig", "/opt/bitnami/drupal/modules/captcha/image_captcha/templates/image-captcha-refresh.html.twig");
    }
}
