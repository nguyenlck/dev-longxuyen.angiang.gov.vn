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

/* themes/gavias_batiz/templates/views/term/views-view-unformatted--taxonomy-term.html.twig */
class __TwigTemplate_fa78811e425b356bf18360bf7087497a extends Template
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
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 23
        echo "
";
        // line 24
        $context["i"] = 0;
        // line 25
        echo "<div class=\"categories-view-content view-content-wrap\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "    ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 28
            echo "     ";
            // line 29
            $context["row_classes"] = [0 => ((            // line 30
($context["default_row_class"] ?? null)) ? ("item") : (""))];
            // line 33
            echo "
    ";
            // line 34
            if ((($context["i"] ?? null) == 1)) {
                echo " ";
                // line 35
                echo "
      <div class=\"item-first\">
        <div";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 37), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
                echo ">
          ";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "
        </div>
      </div>

    ";
            } else {
                // line 43
                echo "
      ";
                // line 44
                if ((($context["i"] ?? null) == 2)) {
                    // line 45
                    echo "        <div class=\"items-second\">
          <div class=\"lg-block-grid-3 md-block-grid-3 sm-block-grid-3 xs-block-grid-2\">
      ";
                }
                // line 48
                echo "          <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 48), "addClass", [0 => "item-post"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 48), 48, $this->source));
                echo "</div>
      ";
                // line 49
                if ((($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null)))) {
                    // line 50
                    echo "          </div>
        </div>  
      ";
                }
                // line 52
                echo " 

    ";
            }
            // line 54
            echo " ";
            echo "  

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_batiz/templates/views/term/views-view-unformatted--taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 57,  118 => 54,  113 => 52,  108 => 50,  106 => 49,  99 => 48,  94 => 45,  92 => 44,  89 => 43,  81 => 38,  77 => 37,  73 => 35,  70 => 34,  67 => 33,  65 => 30,  64 => 29,  62 => 28,  59 => 27,  55 => 26,  52 => 25,  50 => 24,  47 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_batiz/templates/views/term/views-view-unformatted--taxonomy-term.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\themes\\gavias_batiz\\templates\\views\\term\\views-view-unformatted--taxonomy-term.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 24, "for" => 26);
        static $filters = array("escape" => 21, "raw" => 48, "length" => 49);
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
