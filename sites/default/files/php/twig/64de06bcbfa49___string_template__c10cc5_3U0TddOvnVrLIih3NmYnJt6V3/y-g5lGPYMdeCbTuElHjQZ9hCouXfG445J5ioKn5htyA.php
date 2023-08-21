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

/* __string_template__c10cc5e24714f06be65de3e4e91b7649fc54ba66145d7320a4767c1b48a35a37 */
class __TwigTemplate_5ae8ecac918be603e8a73ae5c42cf1edee59607d803e31b27204991d0b5cf7ce extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2];
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
        echo "<div class=\"post-meta d-flex align-items-center\">
  <i class=\"fa fa-calendar\"></i> ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nothing_1"] ?? null)), "html", null, true);
        echo "
  <i class=\"fa fa-comments\"></i> <span class=\"comments-count\">";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null)), "html", null, true);
        echo " Yorum</span>
  <div class=\"reading-time\">
     <span class=\"reading-time__label\"></span>
     <span class=\"reading-time__duration\"></span>
     <span class=\"reading-time__word-count\"></span>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__c10cc5e24714f06be65de3e4e91b7649fc54ba66145d7320a4767c1b48a35a37";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"post-meta d-flex align-items-center\">
  <i class=\"fa fa-calendar\"></i> {{ nothing_1 }}
  <i class=\"fa fa-comments\"></i> <span class=\"comments-count\">{{ comment_count }} Yorum</span>
  <div class=\"reading-time\">
     <span class=\"reading-time__label\"></span>
     <span class=\"reading-time__duration\"></span>
     <span class=\"reading-time__word-count\"></span>
  </div>
</div>", "__string_template__c10cc5e24714f06be65de3e4e91b7649fc54ba66145d7320a4767c1b48a35a37", "");
    }
}
