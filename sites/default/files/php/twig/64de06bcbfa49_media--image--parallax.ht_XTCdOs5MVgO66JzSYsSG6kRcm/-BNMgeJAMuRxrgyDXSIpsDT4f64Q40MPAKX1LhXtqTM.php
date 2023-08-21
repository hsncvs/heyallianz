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

/* themes/custom/em/templates/content/media/media--image--parallax.html.twig */
class __TwigTemplate_81bf43338cafe41066e1d84880e806459fa143bf889bc3d8b39a2242cc5bb297 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 35];
        $filters = ["escape" => 38];
        $functions = ["attach_library" => 38];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 34
        echo "
";
        // line 35
        if (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", [], "array"), "#formatter", [], "array") == "image_url")) {
            // line 36
            echo "
  ";
            // line 38
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("charm/parallax-js"), "html", null, true);
            echo "

  <div";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
    <div class=\"parallax\" data-parallax=\"scroll\"
         data-image-src=\"";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", [], "array"), 0, [], "array"), "#markup", [], "array")), "html", null, true);
            echo "\">
    </div>
  </div>
";
        } else {
            // line 46
            echo "  <div class=\"pt-6\">
    Image should be formatted as ImageURL in order Parallax to work properly.
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/em/templates/content/media/media--image--parallax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 46,  74 => 42,  69 => 40,  63 => 38,  60 => 36,  58 => 35,  55 => 34,);
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
 * Default theme implementation to present a media item.
 *
 * Available variables:
 * - media: The media item, with limited access to object properties and
 *   methods. Only method names starting with \"get\", \"has\", or \"is\" and
 *   a few common methods such as \"id\", \"label\", and \"bundle\" are available.
 *   For example:
 *   - entity.getEntityTypeId() will return the entity type ID.
 *   - entity.hasField('field_example') returns TRUE if the entity includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   Calling other methods, such as entity.delete(), will result in
 *   an exception.
 *   See \\Drupal\\Core\\Entity\\EntityInterface for a full list of methods.
 * - name: Name of the media item.
 * - content: Media content.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - attributes: HTML attributes for the containing element.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 *
 * @see template_preprocess_media()
 *
 * @ingroup themeable
 */
#}

{% if content['field_image']['#formatter'] == \"image_url\" %}

  {# Attach parralax library #}
  {{ attach_library(\"charm/parallax-js\") }}

  <div{{ attributes }}>
    <div class=\"parallax\" data-parallax=\"scroll\"
         data-image-src=\"{{ content['field_image'][0]['#markup'] }}\">
    </div>
  </div>
{% else %}
  <div class=\"pt-6\">
    Image should be formatted as ImageURL in order Parallax to work properly.
  </div>
{% endif %}", "themes/custom/em/templates/content/media/media--image--parallax.html.twig", "/opt/bitnami/drupal/themes/custom/em/templates/content/media/media--image--parallax.html.twig");
    }
}
