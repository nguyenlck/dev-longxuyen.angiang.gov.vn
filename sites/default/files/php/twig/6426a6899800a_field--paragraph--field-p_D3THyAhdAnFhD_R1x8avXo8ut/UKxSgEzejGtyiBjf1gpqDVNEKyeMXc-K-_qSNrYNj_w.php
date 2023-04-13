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

/* themes/gavias_batiz/templates/fields/field--paragraph--field-paragraph-images--gallery.html.twig */
class __TwigTemplate_06789471fb6d06caa000669374f055f9 extends Template
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
        $context["i"] = 0;
        // line 2
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "lightGallery"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        echo ">
   
   ";
        // line 4
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) == 1)) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "<div class=\"image-item item-columns\">
            <a href=\"";
                // line 7
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#item"] ?? null) : null), "entity", [], "any", false, false, true, 7), "uri", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source)), "html", null, true);
                echo "\" class=\"zoomGallery\" title=\"\" data-rel=\"lightGallery\" data-sub-html=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 7)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#item"] ?? null) : null), "alt", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "\">
               <span class=\"icon-expand\"><i class=\"fa fa-expand\"></i></span>
               <img src=\"";
                // line 9
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 9)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#item"] ?? null) : null), "entity", [], "any", false, false, true, 9), "uri", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source)), "html", null, true);
                echo "\" alt=\"\" />
            </a>
         </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 13
        echo "   

   ";
        // line 15
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) == 2)) {
            // line 16
            echo "      <div class=\"lg-block-grid-2 md-block-grid-2 sm-block-grid-2 xs-block-grid-2 gutter-10\">";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "<div class=\"image-item item-columns\">
               <a href=\"";
                // line 19
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 19)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#item"] ?? null) : null), "entity", [], "any", false, false, true, 19), "uri", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source)), "html", null, true);
                echo "\" class=\"zoomGallery\" title=\"\" data-rel=\"lightGallery\" data-sub-html=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 19)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#item"] ?? null) : null), "alt", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\">
                  <span class=\"icon-expand\"><i class=\"fa fa-expand\"></i></span>
                  <img src=\"";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->extensions['Drupal\gavias_hook_themer\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 21)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#item"] ?? null) : null), "entity", [], "any", false, false, true, 21), "uri", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source), "medium")), "html", null, true);
                echo "\" alt=\"\" />
               </a>
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</div>
   ";
        }
        // line 26
        echo " 

   ";
        // line 28
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) == 3)) {
            // line 29
            echo "      <div class=\"lg-block-grid-3 md-block-grid-3 sm-block-grid-3 xs-block-grid-3 gutter-10\">";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "<div class=\"image-item item-columns\">
               <a href=\"";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 32)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#item"] ?? null) : null), "entity", [], "any", false, false, true, 32), "uri", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source)), "html", null, true);
                echo "\" class=\"zoomGallery\" title=\"\" data-rel=\"lightGallery\" data-sub-html=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 32)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#item"] ?? null) : null), "alt", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\">
                  <span class=\"icon-expand\"><i class=\"fa fa-expand\"></i></span>
                  <img src=\"";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->extensions['Drupal\gavias_hook_themer\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 34)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#item"] ?? null) : null), "entity", [], "any", false, false, true, 34), "uri", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34), 34, $this->source), "medium")), "html", null, true);
                echo "\" alt=\"\"  />
               </a>
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "</div>
   ";
        }
        // line 40
        echo "
   ";
        // line 41
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) > 3)) {
            // line 42
            echo "      <div class=\"lg-block-grid-4 md-block-grid-4 sm-block-grid-4 xs-block-grid-2 gutter-10\">";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 44
                echo "<div class=\"image-item item-columns\">
               <a href=\"";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 45)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#item"] ?? null) : null), "entity", [], "any", false, false, true, 45), "uri", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45), 45, $this->source)), "html", null, true);
                echo "\" class=\"zoomGallery\" title=\"\" data-rel=\"lightGallery\" data-sub-html=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 45)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#item"] ?? null) : null), "alt", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "\">
                  <span class=\"icon-expand\"><i class=\"fa fa-expand\"></i></span>
                  <img src=\"";
                // line 47
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->extensions['Drupal\gavias_hook_themer\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 47)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#item"] ?? null) : null), "entity", [], "any", false, false, true, 47), "uri", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), 47, $this->source), "small")), "html", null, true);
                echo "\" alt=\"\" />
               </a>
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "</div>
   ";
        }
        // line 53
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_batiz/templates/fields/field--paragraph--field-paragraph-images--gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 53,  173 => 51,  164 => 47,  157 => 45,  154 => 44,  150 => 43,  148 => 42,  146 => 41,  143 => 40,  139 => 38,  130 => 34,  123 => 32,  120 => 31,  116 => 30,  114 => 29,  112 => 28,  108 => 26,  104 => 25,  95 => 21,  88 => 19,  85 => 18,  81 => 17,  79 => 16,  77 => 15,  73 => 13,  63 => 9,  56 => 7,  53 => 6,  49 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_batiz/templates/fields/field--paragraph--field-paragraph-images--gallery.html.twig", "C:\\wamp64\\www\\dev-longxuyen.angiang.gov.vn\\themes\\gavias_batiz\\templates\\fields\\field--paragraph--field-paragraph-images--gallery.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 4, "for" => 5);
        static $filters = array("escape" => 2, "length" => 4, "image_style" => 21);
        static $functions = array("file_url" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'length', 'image_style'],
                ['file_url']
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
