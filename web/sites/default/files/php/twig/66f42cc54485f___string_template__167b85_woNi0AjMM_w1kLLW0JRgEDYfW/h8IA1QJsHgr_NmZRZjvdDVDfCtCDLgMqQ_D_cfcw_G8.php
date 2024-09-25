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

/* __string_template__167b85158d0125195aedf21a5a557697d210bbd0d74cb358abe555b82fabaff9 */
class __TwigTemplate_aad1bec2df8be5654d708f8e115dbb4677b6a328087df421ea692730a49b54d8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<div class=\"tab-slider-item\">
<div class=\"zoom\">
";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null)), "html", null, true);
        echo "
";
        // line 4
        if (($context["field_logo"] ?? null)) {
            // line 5
            echo "<div class=\"triangle-container\">
";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_logo"] ?? null)), "html", null, true);
            echo "
</div>
";
        }
        // line 9
        if (($context["field_price"] ?? null)) {
            // line 10
            if ((($context["field_price"] ?? null) == "FREE")) {
                // line 11
                echo "<span class=\"field-price-tag\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_price"] ?? null)), "html", null, true);
                echo " </span>
";
            } else {
                // line 13
                echo "<span class=\"field-price-tag\">₹ ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_price"] ?? null)), "html", null, true);
                echo " </span>
";
            }
        }
        // line 16
        echo "</div>
<div class=\"card-description\">
                <p>";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_content_title"] ?? null)), "html", null, true);
        echo "</p>
";
        // line 19
        if (($context["field_title"] ?? null)) {
            echo "<span class=\"slider-item-tag\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_title"] ?? null)), "html", null, true);
            echo " </span>";
        }
        // line 20
        echo "                
                ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_description"] ?? null)), "html", null, true);
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__167b85158d0125195aedf21a5a557697d210bbd0d74cb358abe555b82fabaff9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 21,  105 => 20,  99 => 19,  95 => 18,  91 => 16,  84 => 13,  78 => 11,  76 => 10,  74 => 9,  68 => 6,  65 => 5,  63 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__167b85158d0125195aedf21a5a557697d210bbd0d74cb358abe555b82fabaff9", "");
    }
}
