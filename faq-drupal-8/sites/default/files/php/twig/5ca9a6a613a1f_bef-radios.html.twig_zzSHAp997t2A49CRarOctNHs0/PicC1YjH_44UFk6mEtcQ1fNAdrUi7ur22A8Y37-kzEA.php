<?php

/* modules/better_exposed_filters/templates/bef-radios.html.twig */
class __TwigTemplate_a7bf2a5b7334b8f3760143c3bd3f58b2d9adc5307a75707d6cc0f3463805b11e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 13, "for" => 20, "if" => 22, "include" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'if', 'include'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 13
        $context["classes"] = array(0 => "form-radios", 1 => ((        // line 15
($context["isNested"] ?? null)) ? ("bef_nested") : ("")));
        // line 18
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 19
        $context["current_nesting_level"] = 0;
        // line 20
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 21
            echo "    ";
            $context["item"] = $this->getAttribute(($context["element"] ?? null), $context["child"]);
            // line 22
            echo "    ";
            if (($context["isNested"] ?? null)) {
                // line 23
                echo "      ";
                $context["new_nesting_level"] = $this->getAttribute(($context["depth"] ?? null), $context["child"]);
                // line 24
                echo "      ";
                $this->loadTemplate("@better_exposed_filters/bef-nested-elements.html.twig", "modules/better_exposed_filters/templates/bef-radios.html.twig", 24)->display($context);
                // line 25
                echo "      ";
                $context["current_nesting_level"] = ($context["new_nesting_level"] ?? null);
                // line 26
                echo "    ";
            } else {
                // line 27
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["item"] ?? null), "html", null, true));
                echo "
    ";
            }
            // line 29
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/better_exposed_filters/templates/bef-radios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  95 => 29,  89 => 27,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 22,  71 => 21,  53 => 20,  51 => 19,  46 => 18,  44 => 15,  43 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/better_exposed_filters/templates/bef-radios.html.twig", "/var/www/faq-drupal-8/modules/better_exposed_filters/templates/bef-radios.html.twig");
    }
}
