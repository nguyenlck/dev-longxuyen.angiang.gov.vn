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

/* themes/gavias_batiz/templates/page/header-2.html.twig */
class __TwigTemplate_b67fd0fc650bddce8419cfed950a4770 extends Template
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
        echo "<header id=\"header\" class=\"header-v2\">
  
  <!-- ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/topbar.html.twig"), "themes/gavias_batiz/templates/page/header-2.html.twig", 3)->display($context);
        echo " -->

  <div class=\"header-main\">
    <div class=\"container\">
       <div class=\"header-main-inner\">
          <div class=\"row\">
               <div class=\"col-lg-2 col-md-4 col-xs-4 branding-region\">
               ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 10)) {
            // line 11
            echo "                  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
               ";
        }
        // line 13
        echo "               </div>

               <div class=\"col-lg-10 col-md-8 col-xs-8 header-right\">
                  ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 16)) {
            // line 17
            echo "                     <div class=\"header-right-inner\">
                        ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
                     </div>
                   ";
        }
        // line 21
        echo "               </div>
            </div>
       </div>
    </div>
  </div>

  <div class=\"header-bottom ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_menu"] ?? null), 27, $this->source), "html", null, true);
        echo "\">
    <div class=\"main-menu\">
        <div class=\"container\">
           <div class=\"row\">
              <div class=\"col-xs-12 area-main-menu\">
                <div class=\"area-inner menu-hover\">
                  <div class=\"gva-offcanvas-inner\">
                    <div class=\"close-offcanvas hidden-lg hidden-md\"><a><i class=\"gv-icon-4\"></i></a></div>
                    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 35)) {
            // line 36
            echo "                      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 37
        echo "  
                    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 38)) {
            // line 39
            echo "                      <div class=\"after-offcanvas hidden-lg hidden-md\">
                        ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
                      </div>
                   ";
        }
        // line 43
        echo "                  </div> 
                  
                  <div id=\"menu-bar\" class=\"menu-bar mobile hidden-lg hidden-md\">
                    <span class=\"one\"></span>
                    <span class=\"two\"></span>
                    <span class=\"three\"></span>
                  </div>

                 

                  ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 53)) {
            // line 54
            echo "                    <div class=\"gva-search-region search-region\">
                      <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                      <div class=\"search-content\">
                        <a class=\"close\"><i class=\"gv-icon-4\"></i></a> 
                        <div class=\"content-inner\"> 
                          ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "
                        </div>
                      </div>  
                    </div>
                  ";
        }
        // line 64
        echo "
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
        return "themes/gavias_batiz/templates/page/header-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 64,  139 => 59,  132 => 54,  130 => 53,  118 => 43,  112 => 40,  109 => 39,  107 => 38,  104 => 37,  98 => 36,  96 => 35,  85 => 27,  77 => 21,  71 => 18,  68 => 17,  66 => 16,  61 => 13,  55 => 11,  53 => 10,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_batiz/templates/page/header-2.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\themes\\gavias_batiz\\templates\\page\\header-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 3, "if" => 10);
        static $filters = array("escape" => 11);
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
