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

/* themes/gavias_batiz/templates/node/node--article--teaser-4.html.twig */
class __TwigTemplate_2a45e4b8dbff7ae3abf890868e93ae1a extends Template
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
        // line 2
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 5)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 6)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : ("")), 6 => "clearfix post-block"];
        // line 12
        echo "

";
        // line 14
        if ((($context["gva_node_index"] ?? null) == 1)) {
            // line 15
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 15), "addClass", [0 => "node-index-1"], "method", false, false, true, 15), 15, $this->source), "html", null, true);
            echo ">
    <div class=\"post-thumbnail\">
      ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "
      <div class=\"icons-format\">
        ";
            // line 19
            if (twig_in_filter("video", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_post_format", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19))) {
                echo "<span class=\"icon-video fa fa-video-camera\"></span>";
            }
            // line 20
            echo "        ";
            if (twig_in_filter("gallery", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_post_format", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20))) {
                echo "<span class=\"icon-gallery fa fa-camera\"></span>";
            }
            // line 21
            echo "      </div>
    </div>
    <div class=\"post-content\">
      <h3";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source), "html", null, true);
            echo "</a></h3>
      <div class=\"post-meta\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_post_category", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "<span class=\"post-created\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 25, $this->source), "html", null, true);
            echo "</span></div>
      <div class=\"post-body\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</div>
    </div>
  </div>  
";
        } else {
            // line 30
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30), "addClass", [0 => "node-index-grid"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ">
    <div class=\"post-thumbnail\">
      <a href=\"";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 32, $this->source), "html", null, true);
            echo "\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\gavias_hook_themer\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 32), "entity", [], "any", false, false, true, 32), "uri", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source), "normal_size"), "html", null, true);
            echo "\" alt=\"\" /></a>
      <div class=\"icons-format\">
        ";
            // line 34
            if (twig_in_filter("video", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_post_format", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34))) {
                echo "<span class=\"icon-video fa fa-video-camera\"></span>";
            }
            // line 35
            echo "        ";
            if (twig_in_filter("gallery", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_post_format", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35))) {
                echo "<span class=\"icon-gallery fa fa-camera\"></span>";
            }
            // line 36
            echo "      </div>
    </div> 
    <div class=\"post-content\">
      <div class=\"post-title\"><a href=\"";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 39, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 39, $this->source), "html", null, true);
            echo "</a></div>
      <div class=\"post-meta\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_post_category", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "<span class=\"post-created\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 40, $this->source), "html", null, true);
            echo "</span> </div>
    </div>
  </div> 
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_batiz/templates/node/node--article--teaser-4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 40,  125 => 39,  120 => 36,  115 => 35,  111 => 34,  104 => 32,  98 => 30,  91 => 26,  85 => 25,  77 => 24,  72 => 21,  67 => 20,  63 => 19,  58 => 17,  52 => 15,  50 => 14,  46 => 12,  44 => 8,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_batiz/templates/node/node--article--teaser-4.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\themes\\gavias_batiz\\templates\\node\\node--article--teaser-4.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 14);
        static $filters = array("clean_class" => 4, "escape" => 15, "image_style" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'image_style'],
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
