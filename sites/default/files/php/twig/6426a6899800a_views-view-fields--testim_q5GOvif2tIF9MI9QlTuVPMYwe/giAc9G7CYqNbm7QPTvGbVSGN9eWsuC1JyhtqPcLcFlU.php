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

/* themes/gavias_batiz/templates/views/testimonial/views-view-fields--testimonial-v1.html.twig */
class __TwigTemplate_bf8718a999e148f6b04e5d8d90295652 extends Template
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
        echo "<article class=\"testimonial-item testimonial-node-1\">  
   <div class=\"testimonial-content\">    
      <div class=\"info\">
         <div class=\"info-content\">
            <div class=\"avatar\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_testimonial_avatar", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</div>
            <div class=\"title\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_testimonial_name", [], "any", false, false, true, 6), "content", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</div>
            <div class=\"job\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_testimonial_job", [], "any", false, false, true, 7), "content", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</div>
         </div>
      </div>  
      <div class=\"testimonial-body\">
         <div class=\"quote\">";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", false, false, true, 11), "content", [], "any", false, false, true, 11), 11, $this->source))), "html", null, true);
        echo "</div>  
      </div>
   </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_batiz/templates/views/testimonial/views-view-fields--testimonial-v1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  53 => 7,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_batiz/templates/views/testimonial/views-view-fields--testimonial-v1.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\themes\\gavias_batiz\\templates\\views\\testimonial\\views-view-fields--testimonial-v1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5, "trim" => 11, "striptags" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trim', 'striptags'],
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
