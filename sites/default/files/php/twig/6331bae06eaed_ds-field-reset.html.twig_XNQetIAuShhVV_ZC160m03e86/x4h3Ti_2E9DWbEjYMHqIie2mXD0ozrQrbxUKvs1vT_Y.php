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

/* modules/contrib/ds/templates/ds-field-reset.html.twig */
class __TwigTemplate_89d9a09b8c0e6b8f34432768e96c92f7 extends \Twig\Template
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
        // line 15
        if ( !($context["label_hidden"] ?? null)) {
            // line 16
            echo "  ";
            // line 17
            $context["title_classes"] = [0 => ("field-label-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed((($__internal_compile_0 =             // line 18
($context["element"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#label_display"] ?? null) : null), 18, $this->source))), 1 => ((((($__internal_compile_1 =             // line 19
($context["element"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#label_display"] ?? null) : null) == "visually_hidden")) ? ("visually-hidden") : (""))];
            // line 22
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            echo ">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 23, $this->source), "html", null, true);
            if (($context["show_colon"] ?? null)) {
                echo ":";
            }
            // line 24
            echo "</div>
";
        }
        // line 26
        echo "
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/contrib/ds/templates/ds-field-reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 28,  63 => 27,  60 => 26,  56 => 24,  51 => 23,  47 => 22,  45 => 19,  44 => 18,  43 => 17,  41 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template to reset all HTML for the field.
 *
 * Available variables:
 * - element: The field element.
 * - label: The label of the field.
 * - show_colon: TRUE if colon should be displayed after label.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 */
#}
{% if not label_hidden %}
  {%
    set title_classes = [
      'field-label-' ~ element['#label_display']|clean_class,
      (element['#label_display'] == 'visually_hidden' ? 'visually-hidden'),
    ]
  %}
  <div{{ attributes.addClass(title_classes) }}>
    {{- label }}{% if show_colon %}:{% endif -%}
  </div>
{% endif %}

{% for item in items %}
  {{ item.content }}
{% endfor %}
", "modules/contrib/ds/templates/ds-field-reset.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\contrib\\ds\\templates\\ds-field-reset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15, "set" => 17, "for" => 27);
        static $filters = array("clean_class" => 18, "escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['clean_class', 'escape'],
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
