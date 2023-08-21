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

/* __string_template__3dfc95f8a13802b2c796eb45f06c839bd0f2d9b374cf0677c020e379b01b8bd6 */
class __TwigTemplate_2e2c782f357d8cf2c2990322cd252a11e012af395f172e6041a2fccc4ef27da1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 1];
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
        // line 1
        echo "<div class=\"teaser teaser--compact teaser--medium-compact\" data-background=\"image\" data-src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_teaser_media"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"teaser__content\">
      <header>
        <div class=\"teaser__channel d-inline-flex align-items-center\" data-color=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_channel_1"] ?? null)), "html", null, true);
        echo "\">
          ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_channel"] ?? null)), "html", null, true);
        echo " 
        </div>
        <h2 class=\"teaser__headline\">
          ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "
        </h2>
      </header>
    </div>
    <a class=\"teaser__link\" href=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null)), "html", null, true);
        echo "\"></a>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3dfc95f8a13802b2c796eb45f06c839bd0f2d9b374cf0677c020e379b01b8bd6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 12,  72 => 8,  66 => 5,  62 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"teaser teaser--compact teaser--medium-compact\" data-background=\"image\" data-src=\"{{ field_teaser_media }}\">
    <div class=\"teaser__content\">
      <header>
        <div class=\"teaser__channel d-inline-flex align-items-center\" data-color=\"{{ field_channel_1 }}\">
          {{ field_channel }} 
        </div>
        <h2 class=\"teaser__headline\">
          {{ title }}
        </h2>
      </header>
    </div>
    <a class=\"teaser__link\" href=\"{{ view_node }}\"></a>
</div>", "__string_template__3dfc95f8a13802b2c796eb45f06c839bd0f2d9b374cf0677c020e379b01b8bd6", "");
    }
}
