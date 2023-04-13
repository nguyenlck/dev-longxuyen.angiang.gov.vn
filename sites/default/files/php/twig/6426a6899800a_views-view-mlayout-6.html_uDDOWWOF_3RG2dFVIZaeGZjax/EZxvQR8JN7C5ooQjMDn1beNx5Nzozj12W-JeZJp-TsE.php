<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/gavias_views_magazine/templates/views-view-mlayout-6.html.twig */
class __TwigTemplate_8fa02218db7ffbc6ec5853c5cf8e0d1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 2, $this->source), "html", null, true);
            echo ">
";
        }
        // line 4
        echo "   
  ";
        // line 5
        if (($context["title"] ?? null)) {
            // line 6
            echo "    <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 6, $this->source), "html", null, true);
            echo "</h3>
  ";
        }
        // line 8
        echo "
  ";
        // line 9
        $context["i"] = 0;
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 11
            echo "    ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 12
            echo "    ";
            if ((($context["i"] ?? null) == 1)) {
                // line 13
                echo "      
      <div class=\"item-first\">
        <div class=\"content-inner\">
          <div";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 16), 16, $this->source));
                echo "</div>
        </div>
      </div>

    ";
            } elseif ((            // line 20
($context["i"] ?? null) <= (($context["number_post_column"] ?? null) + 1))) {
                // line 21
                echo "
      ";
                // line 22
                if ((($context["i"] ?? null) == 2)) {
                    echo "<div class=\"items-second column-small-1\"><div class=\"content-inner\">";
                }
                // line 23
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 23), "addClass", [0 => "item-post"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 23), 23, $this->source));
                echo "</div>
      ";
                // line 24
                if (((($context["i"] ?? null) == (($context["number_post_column"] ?? null) + 1)) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    echo "</div></div>";
                }
                echo " 

    ";
            } else {
                // line 26
                echo "  

      ";
                // line 28
                if ((($context["i"] ?? null) == (($context["number_post_column"] ?? null) + 2))) {
                    echo "<div class=\"items-second column-small-2\"><div class=\"content-inner\">";
                }
                // line 29
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 29), "addClass", [0 => "item-post"], "method", false, false, true, 29), 29, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29), 29, $this->source));
                echo "</div>
      ";
                // line 30
                if ((($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null)))) {
                    echo "</div></div>";
                }
                echo " 

    ";
            }
            // line 32
            echo "  

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
";
        // line 36
        if (($context["attributes"] ?? null)) {
            // line 37
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/gavias_views_magazine/templates/views-view-mlayout-6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 37,  146 => 36,  143 => 35,  135 => 32,  127 => 30,  120 => 29,  116 => 28,  112 => 26,  104 => 24,  97 => 23,  93 => 22,  90 => 21,  88 => 20,  79 => 16,  74 => 13,  71 => 12,  68 => 11,  63 => 10,  61 => 9,  58 => 8,  52 => 6,  50 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/gavias_views_magazine/templates/views-view-mlayout-6.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\modules\\gavias_views_magazine\\templates\\views-view-mlayout-6.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 9, "for" => 10);
        static $filters = array("escape" => 2, "raw" => 16, "length" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'raw', 'length'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
