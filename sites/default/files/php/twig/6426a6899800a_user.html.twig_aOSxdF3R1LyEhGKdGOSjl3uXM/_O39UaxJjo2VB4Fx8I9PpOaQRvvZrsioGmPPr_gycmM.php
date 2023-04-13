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

/* themes/gavias_batiz/templates/user/user.html.twig */
class __TwigTemplate_a14918e8e33da3e8ce17ee436405f8ed extends Template
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
        // line 19
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "profile user-profile"], "method", false, false, true, 19), 19, $this->source), "html", null, true);
        echo ">
   <div class=\"row\">
      ";
        // line 21
        if (($context["user_content"] ?? null)) {
            // line 22
            echo "         <div class=\"col-md-8 col-xs-12\">
            ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_content"] ?? null), 23, $this->source), "html", null, true);
            echo "
         </div>
      ";
        }
        // line 26
        echo "
      ";
        // line 27
        if (($context["user_content"] ?? null)) {
            // line 28
            echo "         <div class=\"col-md-4 col-xs-12\">
      ";
        } else {
            // line 29
            echo "   
         <div class=\"col-md-12 col-xs-12\">
      ";
        }
        // line 31
        echo "   
         ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "user_picture", [], "any", false, false, true, 32)) {
            // line 33
            echo "            <div class=\"user-picture\">
               ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "user_picture", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 36
        echo "    
         ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_full_name", [], "any", false, false, true, 37)) {
            // line 38
            echo "            <div class=\"user-fullname\">
               ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_full_name", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 41
        echo "      
         ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_user_position", [], "any", false, false, true, 42)) {
            // line 43
            echo "            <div class=\"user-position\">
               ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_user_position", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 46
        echo "     
         ";
        // line 47
        if (($context["content"] ?? null)) {
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 48, $this->source), "user_picture", "field_full_name", "field_user_position"), "html", null, true);
        }
        // line 50
        echo "      </div>
   </div>  
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_batiz/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 50,  117 => 48,  115 => 47,  112 => 46,  106 => 44,  103 => 43,  101 => 42,  98 => 41,  92 => 39,  89 => 38,  87 => 37,  84 => 36,  78 => 34,  75 => 33,  73 => 32,  70 => 31,  65 => 29,  61 => 28,  59 => 27,  56 => 26,  50 => 23,  47 => 22,  45 => 21,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_batiz/templates/user/user.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\themes\\gavias_batiz\\templates\\user\\user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21);
        static $filters = array("escape" => 19, "without" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without'],
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
