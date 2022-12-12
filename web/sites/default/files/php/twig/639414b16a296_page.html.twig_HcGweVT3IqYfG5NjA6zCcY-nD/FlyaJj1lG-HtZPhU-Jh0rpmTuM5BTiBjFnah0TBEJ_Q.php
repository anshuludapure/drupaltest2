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

/* themes/contrib/vani/templates/layout/page.html.twig */
class __TwigTemplate_d5bed2526f504f98b8b611069612688a3ca28116b7213a0fa7d58ac7e961070b extends \Twig\Template
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
        $tags = array("include" => 52);
        $filters = array("escape" => 61);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        $this->loadTemplate("@vani/template-parts/header.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 52)->display($context);
        // line 53
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
  <div class=\"main-container\">
    <main id=\"main\" class=\"page-content\">
      
      ";
        // line 58
        $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 58)->display($context);
        // line 59
        echo "\t  
      <div class=\"node-content\">
        ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 63
        $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 63)->display($context);
        // line 64
        echo "    </main>
    ";
        // line 65
        $this->loadTemplate("@vani/template-parts/sidebar_left.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 65)->display($context);
        // line 66
        echo "    ";
        $this->loadTemplate("@vani/template-parts/sidebar_right.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 66)->display($context);
        // line 67
        echo "  </div> ";
        // line 68
        echo "  </div> ";
        // line 69
        echo "</div>";
        // line 70
        $this->loadTemplate("@vani/template-parts/footer.html.twig", "themes/contrib/vani/templates/layout/page.html.twig", 70)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/vani/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 70,  96 => 69,  94 => 68,  92 => 67,  89 => 66,  87 => 65,  84 => 64,  82 => 63,  77 => 61,  73 => 59,  71 => 58,  64 => 53,  62 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/vani/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupaltest\\web\\themes\\contrib\\vani\\templates\\layout\\page.html.twig");
    }
}
