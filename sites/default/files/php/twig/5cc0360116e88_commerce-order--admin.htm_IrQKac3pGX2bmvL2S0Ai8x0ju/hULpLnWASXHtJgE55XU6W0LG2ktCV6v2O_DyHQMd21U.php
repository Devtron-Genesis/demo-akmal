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

/* modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig */
class __TwigTemplate_b2ee2155209284037fb93c95fdd32604be3e9ec607110e052bd1f483170e9543 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 22, "if" => 29, "trans" => 30, "for" => 40];
        $filters = ["t" => 50];
        $functions = ["attach_library" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'for'],
                ['t'],
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
        // line 20
        echo "
";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("commerce_order/form"), "html", null, true);
        echo "
";
        // line 22
        $context["order_state"] = $this->getAttribute($this->getAttribute(($context["order_entity"] ?? null), "getState", []), "getLabel", []);
        // line 23
        echo "
<div class=\"layout-order-form clearfix\">
  <div class=\"layout-region layout-region-order-main\">
    ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["order"] ?? null), "order_items", [])), "html", null, true);
        echo "
    ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["order"] ?? null), "total_price", [])), "html", null, true);
        echo "

    ";
        // line 29
        if ($this->getAttribute(($context["order"] ?? null), "activity", [])) {
            // line 30
            echo "      <h2>";
            echo t("Order activity", array());
            echo "</h2>
      ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["order"] ?? null), "activity", [])), "html", null, true);
            echo "
    ";
        }
        // line 33
        echo "  </div>
  <div class=\"layout-region layout-region-order-secondary\">
    <div class=\"entity-meta\">
      <div class=\"entity-meta__header\">
        <h3 class=\"entity-meta__title\">
          ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_state"] ?? null)), "html", null, true);
        echo "
        </h3>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "completed", 1 => "placed", 2 => "changed"]);
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 41
            echo "          ";
            if ($this->getAttribute(($context["order"] ?? null), $context["key"], [], "array")) {
                // line 42
                echo "            <div class=\"form-item\">
              ";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["order"] ?? null), $context["key"], [], "array")), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 46
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "      </div>
      <details open class=\"seven-details\">
        <summary role=\"button\" class=\"seven-details__summary\">
          ";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Customer Information"));
        echo "
        </summary>
        <div class=\"details-wrapper seven-details__wrapper\">
          ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "uid", 1 => "mail", 2 => "ip_address"]);
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 54
            echo "            ";
            if ($this->getAttribute(($context["order"] ?? null), $context["key"], [], "array")) {
                // line 55
                echo "              <div class=\"form-item\">
                ";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["order"] ?? null), $context["key"], [], "array")), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 59
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>
      </details>
      ";
        // line 62
        if ($this->getAttribute(($context["order"] ?? null), "billing_information", [])) {
            // line 63
            echo "        <details open class=\"seven-details\">
          <summary role=\"button\" class=\"seven-details__summary\">
            ";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Billing information"));
            echo "
          </summary>
          <div class=\"details-wrapper seven-details__wrapper\">
            ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["order"] ?? null), "billing_information", [])), "html", null, true);
            echo "
          </div>
        </details>
      ";
        }
        // line 72
        echo "      ";
        if ($this->getAttribute(($context["order"] ?? null), "shipping_information", [])) {
            // line 73
            echo "        <details open class=\"seven-details\">
          <summary role=\"button\" class=\"seven-details__summary\">
            ";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping information"));
            echo "
          </summary>
          <div class=\"details-wrapper seven-details__wrapper\">
            ";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["order"] ?? null), "shipping_information", [])), "html", null, true);
            echo "
          </div>
        </details>
      ";
        }
        // line 82
        echo "      ";
        // line 83
        echo "      ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["order_entity"] ?? null), "getState", []), "getTransitions", []))) {
            // line 84
            echo "        <div class=\"entity-meta__header\">
          ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["order"] ?? null), "state", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 88
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 88,  208 => 85,  205 => 84,  202 => 83,  200 => 82,  193 => 78,  187 => 75,  183 => 73,  180 => 72,  173 => 68,  167 => 65,  163 => 63,  161 => 62,  157 => 60,  151 => 59,  145 => 56,  142 => 55,  139 => 54,  135 => 53,  129 => 50,  124 => 47,  118 => 46,  112 => 43,  109 => 42,  106 => 41,  102 => 40,  97 => 38,  90 => 33,  85 => 31,  80 => 30,  78 => 29,  73 => 27,  69 => 26,  64 => 23,  62 => 22,  58 => 21,  55 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig", "/var/www/demo-site/modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig");
    }
}
