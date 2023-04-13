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

/* themes/gavias_batiz/templates/views/slideshows/views-view-gvaowl--slider-v1.html.twig */
class __TwigTemplate_40c431dad3b63cf44a0d56659b50d9c5 extends Template
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
        $context["i"] = 0;
        // line 6
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "      ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 8
            echo "
      ";
            // line 9
            if (((($context["i"] ?? null) % 3) == 1)) {
                echo "<div class=\"item\"><div class=\"clearfix\">";
            }
            // line 10
            echo "
         ";
            // line 11
            if (((($context["i"] ?? null) % 3) == 1)) {
                // line 12
                echo "            <div class=\"post-large post-item no-padding col-sm-8 col-xs-12\">
               <div class=\"item content\">";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "</div>
            </div>
         ";
            }
            // line 15
            echo "  

         ";
            // line 17
            if ((((($context["i"] ?? null) % 3) == 2) || ((($context["i"] ?? null) % 3) == 0))) {
                // line 18
                echo "            
            ";
                // line 19
                if (((($context["i"] ?? null) % 3) == 2)) {
                    echo "<div class=\"post-small post-item no-padding col-sm-4 col-xs-12\">";
                }
                // line 20
                echo "               <div class=\"item content post-small-item\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</div>
            ";
                // line 21
                if ((((($context["i"] ?? null) % 3) == 0) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    echo "</div>";
                }
                // line 22
                echo "
         ";
            }
            // line 23
            echo "  

      ";
            // line 25
            if ((((($context["i"] ?? null) % 3) == 0) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                echo "</div></div>";
            }
            // line 26
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "   

";
        // line 28
        if (($context["attributes"] ?? null)) {
            // line 29
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_batiz/templates/views/slideshows/views-view-gvaowl--slider-v1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 29,  124 => 28,  115 => 26,  111 => 25,  107 => 23,  103 => 22,  99 => 21,  94 => 20,  90 => 19,  87 => 18,  85 => 17,  81 => 15,  75 => 13,  72 => 12,  70 => 11,  67 => 10,  63 => 9,  60 => 8,  57 => 7,  52 => 6,  50 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_batiz/templates/views/slideshows/views-view-gvaowl--slider-v1.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\themes\\gavias_batiz\\templates\\views\\slideshows\\views-view-gvaowl--slider-v1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 5, "for" => 6);
        static $filters = array("escape" => 2, "length" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
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
