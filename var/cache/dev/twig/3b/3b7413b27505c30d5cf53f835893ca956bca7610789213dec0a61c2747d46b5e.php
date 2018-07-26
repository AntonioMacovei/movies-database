<?php

/* base_table.html.twig */
class __TwigTemplate_bc9c76bb1aae9a43156945ee08182efda7e1ec1a0e763bbf9c95c5b12fcb00c1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'searchbox' => array($this, 'block_searchbox'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base_table.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
</head>

<body class=\"animsition\">
    <div class=\"page-wrapper\">
        <!-- HEADER MOBILE-->
        <header class=\"header-mobile d-block d-lg-none\">
            <div class=\"header-mobile__bar\">
                <div class=\"container-fluid\">
                    <div class=\"header-mobile-inner\">
                        <a class=\"logo\" href=\"index.html\">
                            Movie Database
                        </a>
                        <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class=\"navbar-mobile\">
                <div class=\"container-fluid\">
                    <ul class=\"navbar-mobile__list list-unstyled\">
                        <li>
                            <a href=\"/movies\"><i class=\"fas fa-film\"></i>Movies</a>
                        </li>
\t\t\t\t\t\t <li>
                            <a href=\"/database/fetch\"><i class=\"fas fa-plus\"></i>Fetch Database</a>
                        </li>
\t\t\t\t\t\t <li>
                            <a href=\"/database/empty\"><i class=\"fas fa-trash\"></i>Empty Database</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class=\"menu-sidebar d-none d-lg-block\">
            <div class=\"logo\">
                <a href=\"/movies\">
                    Movie Database
                </a>
            </div>
            <div class=\"menu-sidebar__content js-scrollbar1\">
                <nav class=\"navbar-sidebar\">
                    <ul class=\"list-unstyled navbar__list\">
                        <li>
                            <a href=\"/movies\"><i class=\"fas fa-film\"></i>Movies</a>
                        </li>
\t\t\t\t\t\t <li>
                            <a href=\"/database/fetch\"><i class=\"fas fa-plus\"></i>Fetch Database</a>
                        </li>
\t\t\t\t\t\t <li>
                            <a href=\"/database/empty\"><i class=\"fas fa-trash\"></i>Empty Database</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class=\"page-container\">
            <!-- HEADER DESKTOP-->
            <header class=\"header-desktop\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"header-wrap\">
\t\t\t\t\t\t\t";
        // line 87
        $this->displayBlock('searchbox', $context, $blocks);
        // line 88
        echo "                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class=\"main-content\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
\t\t\t\t\t\t<h3 class=\"title-5 m-b-35\">";
        // line 98
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</h3>
\t\t\t\t\t\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 99, $this->source); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 100
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 101
                echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
\t\t\t\t\t\t\t\t\t";
                // line 102
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"copyright\">
                                    <p>Copyright © 2018 Antonio Macovei. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

\t";
        // line 121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "
</body>
</html>
<!-- end document-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_searchbox($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 121,  279 => 106,  262 => 98,  245 => 87,  228 => 15,  211 => 13,  197 => 122,  195 => 121,  179 => 107,  176 => 106,  170 => 105,  161 => 102,  156 => 101,  151 => 100,  147 => 99,  143 => 98,  131 => 88,  129 => 87,  56 => 16,  54 => 15,  49 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>{% block title %}{% endblock %}</title>

\t{% block stylesheets %}{% endblock %}

</head>

<body class=\"animsition\">
    <div class=\"page-wrapper\">
        <!-- HEADER MOBILE-->
        <header class=\"header-mobile d-block d-lg-none\">
            <div class=\"header-mobile__bar\">
                <div class=\"container-fluid\">
                    <div class=\"header-mobile-inner\">
                        <a class=\"logo\" href=\"index.html\">
                            Movie Database
                        </a>
                        <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class=\"navbar-mobile\">
                <div class=\"container-fluid\">
                    <ul class=\"navbar-mobile__list list-unstyled\">
                        <li>
                            <a href=\"/movies\"><i class=\"fas fa-film\"></i>Movies</a>
                        </li>
\t\t\t\t\t\t <li>
                            <a href=\"/database/fetch\"><i class=\"fas fa-plus\"></i>Fetch Database</a>
                        </li>
\t\t\t\t\t\t <li>
                            <a href=\"/database/empty\"><i class=\"fas fa-trash\"></i>Empty Database</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class=\"menu-sidebar d-none d-lg-block\">
            <div class=\"logo\">
                <a href=\"/movies\">
                    Movie Database
                </a>
            </div>
            <div class=\"menu-sidebar__content js-scrollbar1\">
                <nav class=\"navbar-sidebar\">
                    <ul class=\"list-unstyled navbar__list\">
                        <li>
                            <a href=\"/movies\"><i class=\"fas fa-film\"></i>Movies</a>
                        </li>
\t\t\t\t\t\t <li>
                            <a href=\"/database/fetch\"><i class=\"fas fa-plus\"></i>Fetch Database</a>
                        </li>
\t\t\t\t\t\t <li>
                            <a href=\"/database/empty\"><i class=\"fas fa-trash\"></i>Empty Database</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class=\"page-container\">
            <!-- HEADER DESKTOP-->
            <header class=\"header-desktop\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"header-wrap\">
\t\t\t\t\t\t\t{% block searchbox %}{% endblock %}
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class=\"main-content\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
\t\t\t\t\t\t<h3 class=\"title-5 m-b-35\">{% block pageTitle %}{% endblock %}</h3>
\t\t\t\t\t\t{% for label, messages in app.flashes %}
\t\t\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-{{ label }}\" role=\"alert\">
\t\t\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% block body %}{% endblock %}
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"copyright\">
                                    <p>Copyright © 2018 Antonio Macovei. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

\t{% block javascripts %}{% endblock %}

</body>
</html>
<!-- end document-->
", "base_table.html.twig", "C:\\xampp\\htdocs\\antonio\\mindgeek\\templates\\base_table.html.twig");
    }
}
