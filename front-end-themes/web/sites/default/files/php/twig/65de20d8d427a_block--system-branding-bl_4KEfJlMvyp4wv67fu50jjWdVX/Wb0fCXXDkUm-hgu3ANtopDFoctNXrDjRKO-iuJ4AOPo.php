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

/* core/themes/stable9/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_53dcfc372d3304e251228201976b8504 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/stable9/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_name", "site_slogan"]);    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 18
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 19, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" fetchpriority=\"high\" />
    </a>
  ";
        }
        // line 22
        echo "  ";
        if (($context["site_name"] ?? null)) {
            // line 23
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" rel=\"home\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 23, $this->source), "html", null, true);
            echo "</a>
  ";
        }
        // line 25
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 25, $this->source), "html", null, true);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/stable9/templates/block/block--system-branding-block.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  80 => 25,  72 => 23,  69 => 22,  61 => 19,  56 => 18,  53 => 17,  49 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% block content %}
  {% if site_logo %}
    <a href=\"{{ path('<front>') }}\" rel=\"home\">
      <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" fetchpriority=\"high\" />
    </a>
  {% endif %}
  {% if site_name %}
    <a href=\"{{ path('<front>') }}\" rel=\"home\">{{ site_name }}</a>
  {% endif %}
  {{ site_slogan }}
{% endblock %}
", "core/themes/stable9/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/core/themes/stable9/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17);
        static $filters = array("escape" => 19, "t" => 19);
        static $functions = array("path" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['path']
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
