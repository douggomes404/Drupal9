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

/* modules/contrib/ds/templates/ds-field-expert.html.twig */
class __TwigTemplate_68a85106938bf9eee57f3c8f7646c31b extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["settings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["prefix"] ?? null) : null), 16, $this->source));
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ow", [], "any", false, false, true, 17)) {
            // line 18
            echo "  ";
            if ((($__internal_compile_1 = ($context["settings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["ow-def-at"] ?? null) : null)) {
                // line 19
                echo "    <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["settings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["ow-el"] ?? null) : null), 19, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "mergeAttributes", [0 => ($context["attributes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
                echo ">
  ";
            } elseif ((($__internal_compile_3 =             // line 20
($context["settings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["ow-def-cl"] ?? null) : null)) {
                // line 21
                echo "    <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["settings"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["ow-el"] ?? null) : null), 21, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "mergeAttributes", [0 => twig_get_attribute($this->env, $this->source, ($context["attribute_classes"] ?? null), "offsetGet", [0 => "class"], "method", false, false, true, 21)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
                echo ">
  ";
            } else {
                // line 23
                echo "    <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = ($context["settings"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["ow-el"] ?? null) : null), 23, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 23, $this->source), "html", null, true);
                echo ">
  ";
            }
            // line 25
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_field", [($context["items"] ?? null), ($context["settings"] ?? null), ($context["label"] ?? null), ($context["content_attributes"] ?? null), ($context["field_item_wrapper_attributes"] ?? null), ($context["field_wrapper_attributes"] ?? null), ($context["label_attributes"] ?? null), ($context["label_hidden"] ?? null), ($context["element"] ?? null)], 25, $context, $this->getSourceContext()));
            echo "
    </";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = ($context["settings"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["ow-el"] ?? null) : null), 26, $this->source), "html", null, true);
            echo ">
";
        } else {
            // line 28
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_field", [($context["items"] ?? null), ($context["settings"] ?? null), ($context["label"] ?? null), ($context["content_attributes"] ?? null), ($context["field_item_wrapper_attributes"] ?? null), ($context["field_wrapper_attributes"] ?? null), ($context["label_attributes"] ?? null), ($context["label_hidden"] ?? null), ($context["element"] ?? null)], 28, $context, $this->getSourceContext()));
            echo "
";
        }
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_7 = ($context["settings"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["suffix"] ?? null) : null), 30, $this->source));
        // line 61
        echo "
";
    }

    // line 32
    public function macro_field($__items__ = null, $__settings__ = null, $__label__ = null, $__content_attributes__ = null, $__field_item_wrapper_attributes__ = null, $__field_wrapper_attributes__ = null, $__label_attributes__ = null, $__label_hidden__ = null, $__element__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "settings" => $__settings__,
            "label" => $__label__,
            "content_attributes" => $__content_attributes__,
            "field_item_wrapper_attributes" => $__field_item_wrapper_attributes__,
            "field_wrapper_attributes" => $__field_wrapper_attributes__,
            "label_attributes" => $__label_attributes__,
            "label_hidden" => $__label_hidden__,
            "element" => $__element__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 33
            echo "  ";
            if ( !($context["label_hidden"] ?? null)) {
                // line 34
                echo "    ";
                // line 35
                $context["title_classes"] = [0 => ("field-label-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed((($__internal_compile_8 =                 // line 36
($context["element"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#label_display"] ?? null) : null), 36, $this->source))), 1 => ((((($__internal_compile_9 =                 // line 37
($context["element"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#label_display"] ?? null) : null) == "visually_hidden")) ? ("visually-hidden") : (""))];
                // line 40
                if ((($__internal_compile_10 = ($context["settings"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["lbw-def-at"] ?? null) : null)) {
                    // line 41
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lbw-el", [], "array", true, true, true, 41)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_11 = ($context["settings"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["lbw-el"] ?? null) : null), 41, $this->source), "div")) : ("div")), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 41), "mergeAttributes", [0 => ($context["title_attributes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 43
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lbw-el", [], "array", true, true, true, 43)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_12 = ($context["settings"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["lbw-el"] ?? null) : null), 43, $this->source), "div")) : ("div")), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo ">";
                }
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 45, $this->source), "html", null, true);
                if ((($__internal_compile_13 = ($context["settings"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["lb-col"] ?? null) : null)) {
                    echo ":";
                }
                // line 46
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lbw-el", [], "array", true, true, true, 46)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_14 = ($context["settings"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["lbw-el"] ?? null) : null), 46, $this->source), "div")) : ("div")), "html", null, true);
                echo ">
  ";
            }
            // line 48
            echo "
  ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fis", [], "any", false, false, true, 49)) {
                // line 50
                echo "    ";
                if ((($__internal_compile_15 = ($context["settings"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["fis-def-at"] ?? null) : null)) {
                    // line 51
                    echo "      <";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_16 = ($context["settings"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["fis-el"] ?? null) : null), 51, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field_wrapper_attributes"] ?? null), "mergeAttributes", [0 => ($context["content_attributes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 53
                    echo "      <";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_17 = ($context["settings"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["fis-el"] ?? null) : null), 53, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_wrapper_attributes"] ?? null), 53, $this->source), "html", null, true);
                    echo ">
    ";
                }
                // line 55
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_content", [($context["items"] ?? null), ($context["settings"] ?? null), ($context["field_item_wrapper_attributes"] ?? null), ($context["content_attributes"] ?? null)], 55, $context, $this->getSourceContext()));
                echo "
      </";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_18 = ($context["settings"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["fis-el"] ?? null) : null), 56, $this->source), "html", null, true);
                echo ">
  ";
            } else {
                // line 58
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_content", [($context["items"] ?? null), ($context["settings"] ?? null), ($context["field_item_wrapper_attributes"] ?? null)], 58, $context, $this->getSourceContext()));
                echo "
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 62
    public function macro_content($__items__ = null, $__settings__ = null, $__field_item_wrapper_attributes__ = null, $__content_attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "settings" => $__settings__,
            "field_item_wrapper_attributes" => $__field_item_wrapper_attributes__,
            "content_attributes" => $__content_attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 63
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fi", [], "any", false, false, true, 64)) {
                    // line 65
                    echo "      ";
                    if ((($__internal_compile_19 = ($context["settings"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["fi-def-at"] ?? null) : null)) {
                        // line 66
                        echo "        <";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_20 = ($context["settings"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["fi-el"] ?? null) : null), 66, $this->source), "html", null, true);
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field_item_wrapper_attributes"] ?? null), "mergeAttributes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 66)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                        echo " >
      ";
                    } else {
                        // line 68
                        echo "        <";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_21 = ($context["settings"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["fi-el"] ?? null) : null), 68, $this->source), "html", null, true);
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_item_wrapper_attributes"] ?? null), 68, $this->source), "html", null, true);
                        echo " >
      ";
                    }
                    // line 70
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                    // line 71
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_22 = ($context["settings"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["fi-el"] ?? null) : null), 71, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 73
                    echo "      ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                    echo "
    ";
                }
                // line 75
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/ds/templates/ds-field-expert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 75,  250 => 73,  244 => 71,  242 => 70,  234 => 68,  226 => 66,  223 => 65,  220 => 64,  215 => 63,  199 => 62,  186 => 58,  181 => 56,  176 => 55,  168 => 53,  160 => 51,  157 => 50,  155 => 49,  152 => 48,  146 => 46,  141 => 45,  134 => 43,  127 => 41,  125 => 40,  123 => 37,  122 => 36,  121 => 35,  119 => 34,  116 => 33,  95 => 32,  90 => 61,  88 => 30,  82 => 28,  77 => 26,  72 => 25,  64 => 23,  56 => 21,  54 => 20,  47 => 19,  44 => 18,  42 => 17,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template to provide expert HTML for the field.
 *
 * Available variables:
 * - element: The field element.
 * - label: The label of the field.
 * - settings: The settings for the field.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 */
#}

{{- settings['prefix']|raw -}}
{% if settings.ow %}
  {% if settings['ow-def-at'] %}
    <{{ settings['ow-el'] }} {{ wrapper_attributes.mergeAttributes(attributes) }}>
  {% elseif settings['ow-def-cl'] %}
    <{{ settings['ow-el'] }} {{ wrapper_attributes.mergeAttributes(attribute_classes.offsetGet('class')) }}>
  {% else %}
    <{{ settings['ow-el'] }} {{ wrapper_attributes }}>
  {% endif %}
    {{ _self.field(items, settings, label, content_attributes, field_item_wrapper_attributes, field_wrapper_attributes, label_attributes, label_hidden, element) }}
    </{{ settings['ow-el'] }}>
{% else %}
  {{ _self.field(items, settings, label, content_attributes, field_item_wrapper_attributes, field_wrapper_attributes, label_attributes, label_hidden, element) }}
{% endif %}
{{- settings['suffix']|raw -}}

{% macro field(items, settings, label, content_attributes, field_item_wrapper_attributes, field_wrapper_attributes, label_attributes, label_hidden, element) %}
  {% if not label_hidden %}
    {%
      set title_classes = [
        'field-label-' ~ element['#label_display']|clean_class,
         (element['#label_display'] == 'visually_hidden' ? 'visually-hidden'),
      ]
    %}
    {%- if settings['lbw-def-at'] -%}
      <{{ settings['lbw-el']|default('div') }} {{ label_attributes.addClass(title_classes).mergeAttributes(title_attributes) }}>
    {%- else -%}
      <{{ settings['lbw-el']|default('div') }} {{ label_attributes.addClass(title_classes) }}>
    {%- endif -%}
        {{- label -}}{%- if settings['lb-col'] -%}:{%- endif -%}
      </{{ settings['lbw-el']|default('div') }}>
  {% endif %}

  {% if settings.fis %}
    {% if settings['fis-def-at'] %}
      <{{ settings['fis-el'] }} {{ field_wrapper_attributes.mergeAttributes(content_attributes) }}>
    {% else %}
      <{{ settings['fis-el'] }} {{ field_wrapper_attributes }}>
    {% endif %}
        {{ _self.content(items, settings, field_item_wrapper_attributes, content_attributes) }}
      </{{ settings['fis-el'] }}>
  {% else %}
    {{ _self.content(items, settings, field_item_wrapper_attributes) }}
  {% endif %}
{% endmacro %}

{% macro content(items, settings, field_item_wrapper_attributes, content_attributes) %}
  {% for item in items %}
    {% if settings.fi %}
      {% if settings['fi-def-at'] %}
        <{{ settings['fi-el'] }} {{ field_item_wrapper_attributes.mergeAttributes(item.attributes) }} >
      {% else %}
        <{{ settings['fi-el'] }} {{ field_item_wrapper_attributes }} >
      {% endif %}
          {{- item.content -}}
        </{{ settings['fi-el'] }}>
    {% else %}
      {{ item.content }}
    {% endif %}
  {% endfor %}
{% endmacro %}
", "modules/contrib/ds/templates/ds-field-expert.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\contrib\\ds\\templates\\ds-field-expert.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "macro" => 32, "set" => 35, "for" => 63);
        static $filters = array("raw" => 16, "escape" => 19, "clean_class" => 36, "default" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'macro', 'set', 'for', 'import'],
                ['raw', 'escape', 'clean_class', 'default'],
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
