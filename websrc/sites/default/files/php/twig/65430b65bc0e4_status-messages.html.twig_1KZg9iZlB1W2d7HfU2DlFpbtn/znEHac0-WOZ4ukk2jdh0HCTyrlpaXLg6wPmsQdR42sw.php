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

/* core/themes/claro/templates/misc/status-messages.html.twig */
class __TwigTemplate_688ec68f0064ce0ad68d0d8a2d58de73 extends Template
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
        // line 25
        echo "<div data-drupal-messages class=\"messages-list\">
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  ";
            // line 28
            $context["classes"] = [0 => "messages-list__item", 1 => "messages", 2 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 31
$context["type"], 31, $this->source))];
            // line 34
            echo "  ";
            // line 35
            $context["is_message_with_title"] = (($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null);
            // line 37
            echo "  ";
            // line 38
            $context["is_message_with_icon"] = twig_in_filter($context["type"], [0 => "error", 1 => "status", 2 => "warning"]);
            // line 40
            echo "
  <div role=\"contentinfo\" aria-labelledby=\"";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["title_ids"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null), 41, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
    ";
            // line 42
            if (($context["type"] == "error")) {
                // line 43
                echo "      <div role=\"alert\">
    ";
            }
            // line 45
            echo "      ";
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 46
                echo "        <div class=\"messages__header\">
          ";
                // line 47
                if (($context["is_message_with_title"] ?? null)) {
                    // line 48
                    echo "            <h2 id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["title_ids"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 48, $this->source), "html", null, true);
                    echo "\" class=\"messages__title\">
              ";
                    // line 49
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["type"]] ?? null) : null), 49, $this->source), "html", null, true);
                    echo "
            </h2>
          ";
                }
                // line 52
                echo "        </div>
      ";
            }
            // line 54
            echo "      <div class=\"messages__content\">
        ";
            // line 55
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 56
                echo "          <ul class=\"messages__list\">
            ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 58
                    echo "              <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 58, $this->source), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "          </ul>
        ";
            } else {
                // line 62
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 62, $this->source)), "html", null, true);
                echo "
        ";
            }
            // line 64
            echo "      </div>
    ";
            // line 65
            if (($context["type"] == "error")) {
                // line 66
                echo "      </div>
    ";
            }
            // line 68
            echo "  </div>
  ";
            // line 70
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 70);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 72,  140 => 70,  137 => 68,  133 => 66,  131 => 65,  128 => 64,  122 => 62,  118 => 60,  109 => 58,  105 => 57,  102 => 56,  100 => 55,  97 => 54,  93 => 52,  87 => 49,  82 => 48,  80 => 47,  77 => 46,  74 => 45,  70 => 43,  68 => 42,  62 => 41,  59 => 40,  57 => 38,  55 => 37,  53 => 35,  51 => 34,  49 => 31,  48 => 28,  46 => 27,  42 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/misc/status-messages.html.twig", "/var/www/html/drupal/core/themes/claro/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 26, "set" => 28, "if" => 42);
        static $filters = array("escape" => 41, "without" => 41, "length" => 55, "first" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
