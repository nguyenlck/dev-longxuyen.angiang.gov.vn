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

/* themes/gavias_batiz/templates/user/page--user--login.html.twig */
class __TwigTemplate_c8e4600976fa46c7b209d0ff1673f77f extends Template
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
        // line 7
        echo "
<div class=\"page-user-login gva-body-page\">
   ";
        // line 9
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/preloader.html.twig"), "themes/gavias_batiz/templates/user/page--user--login.html.twig", 9)->display($context);
        // line 10
        echo "   <div class=\"bg\"></div>
   <div role=\"main\" class=\"main main-page\">
      <div class=\"branding text-center\">
         ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 13)) {
            // line 14
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
         ";
        }
        // line 16
        echo "      </div>
      <div id=\"page-main-content\">
         ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 18)) {
            // line 19
            echo "            <div class=\"help show\">
               <div class=\"container\">
                  <div class=\"content-inner\">
                     ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
                  </div>
               </div>
            </div>
         ";
        }
        // line 27
        echo "         <div class=\"clearfix\"></div>
         <div id=\"content\" class=\"content content-full\">
            ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 29)) {
            // line 30
            echo "               <div class=\"content-main\">
                  ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 34
        echo "         </div>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_batiz/templates/user/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  86 => 31,  83 => 30,  81 => 29,  77 => 27,  69 => 22,  64 => 19,  62 => 18,  58 => 16,  52 => 14,  50 => 13,  45 => 10,  43 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_batiz/templates/user/page--user--login.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\themes\\gavias_batiz\\templates\\user\\page--user--login.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 9, "if" => 13);
        static $filters = array("escape" => 14);
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
