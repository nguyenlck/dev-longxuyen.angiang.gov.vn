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

/* modules/gavias_views_magazine/templates/views-view-mlayout-4.html.twig */
class __TwigTemplate_86a25eb0d00764f164948a40a73986ab extends Template
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
                echo "      <div class=\"item-first\">
        <div";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 14), 14, $this->source));
                echo "</div>
      </div>
    ";
            } else {
                // line 17
                echo "      
      ";
                // line 18
                if ((($context["i"] ?? null) == 2)) {
                    // line 19
                    echo "        <div class=\"items-second\">
          <div class=\"lg-block-grid-";
                    // line 20
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["class_grid"] ?? null), "items_lg", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo " md-block-grid-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["class_grid"] ?? null), "items_md", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo " sm-block-grid-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["class_grid"] ?? null), "items_sm", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo " xs-block-grid-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["class_grid"] ?? null), "items_xs", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo "\">
      ";
                }
                // line 22
                echo "          <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 22), "addClass", [0 => "item-post"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22), 22, $this->source));
                echo "</div>
      ";
                // line 23
                if ((($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null)))) {
                    // line 24
                    echo "          </div>
        </div>  
      ";
                }
                // line 26
                echo "  

    ";
            }
            // line 28
            echo "  
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        // line 31
        if (($context["attributes"] ?? null)) {
            // line 32
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/gavias_views_magazine/templates/views-view-mlayout-4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 32,  133 => 31,  130 => 30,  123 => 28,  118 => 26,  113 => 24,  111 => 23,  104 => 22,  93 => 20,  90 => 19,  88 => 18,  85 => 17,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  63 => 10,  61 => 9,  58 => 8,  52 => 6,  50 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/gavias_views_magazine/templates/views-view-mlayout-4.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\modules\\gavias_views_magazine\\templates\\views-view-mlayout-4.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 9, "for" => 10);
        static $filters = array("escape" => 2, "raw" => 14, "length" => 23);
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
