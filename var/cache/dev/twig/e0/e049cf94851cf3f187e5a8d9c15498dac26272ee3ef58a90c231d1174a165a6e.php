<?php

/* database/fetch_database.html.twig */
class __TwigTemplate_2d0c1648853bf138a404bb020a2a72122e9a1e2cf2b2fad522ebf9b11910c369 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base_table.html.twig", "database/fetch_database.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "database/fetch_database.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "database/fetch_database.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movie Database - Fetch Database";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <!-- Fontfaces CSS-->
    <link href=\"/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Vendor CSS-->
    <link href=\"/vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
    <link href=\"/css/theme.css\" rel=\"stylesheet\" media=\"all\">
\t<link href=\"/css/custom.css\" rel=\"stylesheet\" media=\"all\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Database Control Panel";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"table-responsive table-responsive-data2\">
\t\t\t";
        // line 33
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 33, $this->source); })()) > 0)) {
            // line 34
            echo "\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\tCongratulations! You have successfully imported ";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 35, $this->source); })()), "html", null, true);
            echo " movies!
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\tThe database is up to date! No movies were imported!
\t\t\t\t</div>
\t\t\t";
        }
        // line 42
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "\t<!-- Jquery JS-->
    <script src=\"/vendor/jquery-3.2.1.min.js\"></script>
    <!-- Bootstrap JS-->
    <script src=\"/vendor/bootstrap-4.1/popper.min.js\"></script>
    <script src=\"/vendor/bootstrap-4.1/bootstrap.min.js\"></script>
    <!-- Vendor JS       -->
    <script src=\"/vendor/slick/slick.min.js\">
    </script>
    <script src=\"/vendor/wow/wow.min.js\"></script>
    <script src=\"/vendor/animsition/animsition.min.js\"></script>
    <script src=\"/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
    </script>
    <script src=\"/vendor/counter-up/jquery.waypoints.min.js\"></script>
    <script src=\"/vendor/counter-up/jquery.counterup.min.js\">
    </script>
    <script src=\"/vendor/circle-progress/circle-progress.min.js\"></script>
    <script src=\"/vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"/vendor/chartjs/Chart.bundle.min.js\"></script>
    <script src=\"/vendor/select2/select2.min.js\">
    </script>

    <!-- Main JS-->
    <script src=\"/js/main.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "database/fetch_database.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 47,  168 => 46,  155 => 42,  149 => 38,  143 => 35,  140 => 34,  138 => 33,  133 => 30,  124 => 29,  106 => 28,  75 => 6,  66 => 5,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base_table.html.twig' %}

{% block title %}Movie Database - Fetch Database{% endblock %}

{% block stylesheets %}
    <!-- Fontfaces CSS-->
    <link href=\"/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Vendor CSS-->
    <link href=\"/vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
    <link href=\"/css/theme.css\" rel=\"stylesheet\" media=\"all\">
\t<link href=\"/css/custom.css\" rel=\"stylesheet\" media=\"all\">
{% endblock %}
{% block pageTitle %}Database Control Panel{% endblock %}
{% block body %}
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"table-responsive table-responsive-data2\">
\t\t\t{% if count > 0 %}
\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\tCongratulations! You have successfully imported {{ count }} movies!
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\tThe database is up to date! No movies were imported!
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
</div>
{% endblock %}
{% block javascripts %}
\t<!-- Jquery JS-->
    <script src=\"/vendor/jquery-3.2.1.min.js\"></script>
    <!-- Bootstrap JS-->
    <script src=\"/vendor/bootstrap-4.1/popper.min.js\"></script>
    <script src=\"/vendor/bootstrap-4.1/bootstrap.min.js\"></script>
    <!-- Vendor JS       -->
    <script src=\"/vendor/slick/slick.min.js\">
    </script>
    <script src=\"/vendor/wow/wow.min.js\"></script>
    <script src=\"/vendor/animsition/animsition.min.js\"></script>
    <script src=\"/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
    </script>
    <script src=\"/vendor/counter-up/jquery.waypoints.min.js\"></script>
    <script src=\"/vendor/counter-up/jquery.counterup.min.js\">
    </script>
    <script src=\"/vendor/circle-progress/circle-progress.min.js\"></script>
    <script src=\"/vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"/vendor/chartjs/Chart.bundle.min.js\"></script>
    <script src=\"/vendor/select2/select2.min.js\">
    </script>

    <!-- Main JS-->
    <script src=\"/js/main.js\"></script>
{% endblock %}", "database/fetch_database.html.twig", "C:\\xampp\\htdocs\\antonio\\mindgeek\\templates\\database\\fetch_database.html.twig");
    }
}
