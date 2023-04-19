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

/* themes/gavias_batiz/templates/page/parts/topbar.html.twig */
class __TwigTemplate_69d8593dd1b4e59eccee5b0f90f75f9f extends Template
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
        echo "<div class=\"topbar\">
  <div class=\"container\">
    <div class=\"row\">
      
      <div class=\"topbar-left col-sm-8 col-xs-12\">
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breaking_news", [], "any", false, false, true, 6)) {
            // line 7
            echo "          <div class=\"breaking-news\">
            <div class=\"clearfix\">
              <div class=\"content-inner\">";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breaking_news", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</div> 
            </div> 
          </div>
        ";
        }
        // line 13
        echo "      </div>

      <div class=\"topbar-right col-sm-4 col-xs-12\">
        <div class=\"social-list\">
          ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "facebook", [], "any", false, false, true, 17)) {
            // line 18
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "facebook", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a>
          ";
        }
        // line 19
        echo " 
          ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "twitter", [], "any", false, false, true, 20)) {
            // line 21
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "twitter", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-twitter-square\"></i></a>
          ";
        }
        // line 22
        echo " 
          ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "skype", [], "any", false, false, true, 23)) {
            // line 24
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "skype", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-skype\"></i></a>
          ";
        }
        // line 25
        echo " 
          ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "instagram", [], "any", false, false, true, 26)) {
            // line 27
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "instagram", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a>
          ";
        }
        // line 28
        echo " 
          ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "dribbble", [], "any", false, false, true, 29)) {
            // line 30
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "dribbble", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-dribbble\"></i></a>
          ";
        }
        // line 31
        echo " 
          ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "linkedin", [], "any", false, false, true, 32)) {
            // line 33
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "linkedin", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin-square\"></i></a>
          ";
        }
        // line 34
        echo " 
          ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "pinterest", [], "any", false, false, true, 35)) {
            // line 36
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "pinterest", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-pinterest\"></i></a>
          ";
        }
        // line 37
        echo " 
          ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "google", [], "any", false, false, true, 38)) {
            // line 39
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "google", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-google-plus-square\"></i></a>
          ";
        }
        // line 40
        echo " 
          ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "youtube", [], "any", false, false, true, 41)) {
            // line 42
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "youtube", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-youtube-square\"></i></a>
          ";
        }
        // line 43
        echo " 
          ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "vimeo", [], "any", false, false, true, 44)) {
            // line 45
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "vimeo", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-vimeo-square\"></i></a>
          ";
        }
        // line 46
        echo "  
          ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "tumblr", [], "any", false, false, true, 47)) {
            // line 48
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "tumblr", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-tumblr-square\"></i></a>
          ";
        }
        // line 49
        echo "  
        </div>  
      </div>
    </div>
  </div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_batiz/templates/page/parts/topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 49,  177 => 48,  175 => 47,  172 => 46,  166 => 45,  164 => 44,  161 => 43,  155 => 42,  153 => 41,  150 => 40,  144 => 39,  142 => 38,  139 => 37,  133 => 36,  131 => 35,  128 => 34,  122 => 33,  120 => 32,  117 => 31,  111 => 30,  109 => 29,  106 => 28,  100 => 27,  98 => 26,  95 => 25,  89 => 24,  87 => 23,  84 => 22,  78 => 21,  76 => 20,  73 => 19,  67 => 18,  65 => 17,  59 => 13,  52 => 9,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_batiz/templates/page/parts/topbar.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\themes\\gavias_batiz\\templates\\page\\parts\\topbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
