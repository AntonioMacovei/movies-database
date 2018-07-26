<?php

/* pagination.html.twig */
class __TwigTemplate_ea94992d3b1f24fabf2a900c5364a36c20d72a46a97d4463b175824ac1b87dc4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagination.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 2, $this->source); })()) > 1)) {
            // line 3
            echo "\t<div class=\"pagination\" >
\t\t";
            // line 4
            if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 4, $this->source); })()) - 2) > 0)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 4, $this->source); })()), "html", null, true);
                echo "1\"> << </a> ";
            }
            // line 5
            echo "\t\t";
            if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 5, $this->source); })()) - 1) > 0)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 5, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 5, $this->source); })()) - 1), "html", null, true);
                echo "\"> Previous </a> ";
            }
            // line 6
            echo "\t\t&nbsp;&nbsp;Page ";
            echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 6, $this->source); })()), "html", null, true);
            echo " of ";
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "&nbsp;&nbsp;
\t\t";
            // line 7
            if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 7, $this->source); })()) - 1) > 0)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 7, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 7, $this->source); })()) - 1), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 7, $this->source); })()) - 1), "html", null, true);
                echo " </a> ";
            }
            // line 8
            echo "\t\t";
            if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 8, $this->source); })()) > 0)) {
                echo " <a class=\"current_page\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 8, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 8, $this->source); })()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 8, $this->source); })()), "html", null, true);
                echo "</a> ";
            }
            // line 9
            echo "\t\t";
            if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 9, $this->source); })()) + 1) <= (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 9, $this->source); })()))) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 9, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 9, $this->source); })()) + 1), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 9, $this->source); })()) + 1), "html", null, true);
                echo " </a> ";
            }
            // line 10
            echo "\t\t";
            if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 10, $this->source); })()) + 2) <= (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 10, $this->source); })()))) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 10, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 10, $this->source); })()) + 2), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 10, $this->source); })()) + 2), "html", null, true);
                echo " </a> ";
            }
            // line 11
            echo "\t\t";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 11, $this->source); })()) < (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 11, $this->source); })()))) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 11, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 11, $this->source); })()) + 1), "html", null, true);
                echo "\"> Next </a> ";
            }
            // line 12
            echo "\t\t";
            if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 12, $this->source); })()) + 3) <= (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 12, $this->source); })()))) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 12, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 12, $this->source); })()), "html", null, true);
                echo "\"> >> </a> ";
            }
            // line 13
            echo "\t</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 13,  105 => 12,  97 => 11,  87 => 10,  77 => 9,  67 => 8,  58 => 7,  51 => 6,  43 => 5,  37 => 4,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% if total > 1 %}
\t<div class=\"pagination\" >
\t\t{% if page - 2 > 0 %} <a href=\"{{ link }}1\"> << </a> {% endif %}
\t\t{% if page - 1 > 0 %} <a href=\"{{ link }}{{ page - 1 }}\"> Previous </a> {% endif %}
\t\t&nbsp;&nbsp;Page {{ page }} of {{ total }}&nbsp;&nbsp;
\t\t{% if page - 1 > 0 %} <a href=\"{{ link }}{{ page - 1 }}\"> {{ page - 1 }} </a> {% endif %}
\t\t{% if total > 0 %} <a class=\"current_page\" href=\"{{ link }}{{ page }}\"> {{ page }}</a> {% endif %}
\t\t{% if page + 1 <= total %} <a href=\"{{ link }}{{ page + 1 }}\"> {{ page + 1 }} </a> {% endif %}
\t\t{% if page + 2 <= total %} <a href=\"{{ link }}{{ page + 2 }}\"> {{ page + 2 }} </a> {% endif %}
\t\t{% if page < total %} <a href=\"{{ link }}{{ page + 1 }}\"> Next </a> {% endif %}
\t\t{% if page + 3 <= total %} <a href=\"{{ link }}{{ total }}\"> >> </a> {% endif %}
\t</div>
{% endif %}
", "pagination.html.twig", "C:\\xampp\\htdocs\\antonio\\mindgeek\\templates\\pagination.html.twig");
    }
}
