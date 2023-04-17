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

/* themes/gavias_batiz/templates/page/header-4.html.twig */
class __TwigTemplate_fbb7d9b469dc44f331f063db092b8d4e extends Template
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
        echo "<header id=\"header\" class=\"header-v4\">
  
  ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/topbar.html.twig"), "themes/gavias_batiz/templates/page/header-4.html.twig", 3)->display($context);
        // line 4
        echo "
  <div class=\"header-bottom ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_menu"] ?? null), 5, $this->source), "html", null, true);
        echo "\">
    <div class=\"main-menu\">
      <div class=\"container\">
        <div class=\"header-main-inner\">
          <div class=\"row\">
            <div class=\"col-lg-2 col-md-2 col-xs-5\">
              ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 11)) {
            // line 12
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "
              ";
        }
        // line 13
        echo "    
            </div>
            <div class=\"col-lg-10 col-md-10 col-xs-7 area-main-menu\">
              <div class=\"area-inner menu-hover\">
                <div class=\"gva-offcanvas-inner\">
                  <div class=\"close-offcanvas hidden-lg hidden-md\"><a><i class=\"gv-icon-4\"></i></a></div>
                  ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 19)) {
            // line 20
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
                  ";
        }
        // line 21
        echo "  
                  ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 22)) {
            // line 23
            echo "                    <div class=\"after-offcanvas hidden-lg hidden-md\">
                      ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
                    </div>
                 ";
        }
        // line 27
        echo "                </div>
                
                <div id=\"menu-bar\" class=\"menu-bar mobile hidden-lg hidden-md\">
                  <span class=\"one\"></span>
                  <span class=\"two\"></span>
                  <span class=\"three\"></span>
                </div>

                ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu_another", [], "any", false, false, true, 35)) {
            // line 36
            echo "                  <div class=\"menu-another hidden-xs hidden-sm\">
                    <div id=\"menu-bar-another\" class=\"menu-bar\">
                      <span class=\"one\"></span>
                      <span class=\"two\"></span>
                      <span class=\"three\"></span>
                    </div>
                    <div class=\"content-inner\">
                      ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu_another", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
                    </div>
                  </div>  
                ";
        }
        // line 47
        echo "
                ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 48)) {
            // line 49
            echo "                  <div class=\"gva-search-region search-region\">
                    <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                    <div class=\"search-content\">
                      <a class=\"close\"><i class=\"gv-icon-4\"></i></a> 
                      <div class=\"content-inner\"> 
                        ";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "
                      </div>
                    </div>  
                  </div>
               ";
        }
        // line 59
        echo "                
              </div>   
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
  
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_batiz/templates/page/header-4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  135 => 54,  128 => 49,  126 => 48,  123 => 47,  116 => 43,  107 => 36,  105 => 35,  95 => 27,  89 => 24,  86 => 23,  84 => 22,  81 => 21,  75 => 20,  73 => 19,  65 => 13,  59 => 12,  57 => 11,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_batiz/templates/page/header-4.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\themes\\gavias_batiz\\templates\\page\\header-4.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 3, "if" => 11);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
