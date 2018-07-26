<?php

/* movie/movie_list.html.twig */
class __TwigTemplate_c734426bbc5781474ab8d96082b9100d56fc82a2ff4c0f689c07480fcb8fac23 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base_table.html.twig", "movie/movie_list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'searchbox' => array($this, 'block_searchbox'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movie/movie_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movie/movie_list.html.twig"));

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

        echo "Movie Database";
        
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

    // line 29
    public function block_searchbox($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        // line 30
        echo "\t<div class=\"form-header\">
\t\t<input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" id=\"searchField\" placeholder=\"Search movies&hellip;\" />
\t\t<button class=\"au-btn--submit\" type=\"submit\" id=\"search\">
\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t</button>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Movies List";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"table-responsive table-responsive-data2\">
\t\t\t";
        // line 43
        if ((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new Twig_Error_Runtime('Variable "movies" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "\t\t\t\t<table class=\"table table-data2\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>headline</th>
\t\t\t\t\t\t\t<th>directors</th>
\t\t\t\t\t\t\t<th>year</th>
\t\t\t\t\t\t\t<th>duration</th>
\t\t\t\t\t\t\t<th>cert</th>
\t\t\t\t\t\t\t<th>last updated</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new Twig_Error_Runtime('Variable "movies" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 57
                echo "\t\t\t\t\t\t\t<tr class=\"tr-shadow\">
\t\t\t\t\t\t\t\t<td><a href=\"/movies/show/";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "friendlyUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "headline", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "getDirectors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["director"]) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["director"], "name", array()), "html", null, true);
                    echo "<br />
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['director'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"block-email\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"desc\">";
                // line 67
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["movie"], "duration", array()) / 60), "html", null, true);
                echo " mins</td>
\t\t\t\t\t\t\t\t<td><span class=\"block-email\">";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "cert", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t\t\t<td>";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "lastUpdated", array()), "m/d/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<tr class=\"spacer\"></tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t\t";
            // line 74
            echo twig_include($this->env, $context, "pagination.html.twig");
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\tOops! It seems that either your search didn't return any hits or our database is empty! Maybe you can try again later.
\t\t\t\t</div>
\t\t\t";
        }
        // line 84
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
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
\t<script src=\"/js/custom.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "movie/movie_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 89,  265 => 88,  252 => 84,  246 => 80,  237 => 74,  233 => 72,  224 => 69,  220 => 68,  216 => 67,  211 => 65,  207 => 63,  198 => 61,  194 => 60,  187 => 58,  184 => 57,  180 => 56,  166 => 44,  164 => 43,  159 => 40,  150 => 39,  132 => 38,  116 => 30,  107 => 29,  76 => 6,  67 => 5,  49 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base_table.html.twig' %}

{% block title %}Movie Database{% endblock %}

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

{% block searchbox %}
\t<div class=\"form-header\">
\t\t<input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" id=\"searchField\" placeholder=\"Search movies&hellip;\" />
\t\t<button class=\"au-btn--submit\" type=\"submit\" id=\"search\">
\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t</button>
\t</div>
{% endblock %}

{% block pageTitle %}Movies List{% endblock %}
{% block body %}
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"table-responsive table-responsive-data2\">
\t\t\t{% if movies %}
\t\t\t\t<table class=\"table table-data2\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>headline</th>
\t\t\t\t\t\t\t<th>directors</th>
\t\t\t\t\t\t\t<th>year</th>
\t\t\t\t\t\t\t<th>duration</th>
\t\t\t\t\t\t\t<th>cert</th>
\t\t\t\t\t\t\t<th>last updated</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for movie in movies %}
\t\t\t\t\t\t\t<tr class=\"tr-shadow\">
\t\t\t\t\t\t\t\t<td><a href=\"/movies/show/{{ movie.friendlyUrl }}\">{{ movie.headline }}</a></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% for director in movie.getDirectors %}
\t\t\t\t\t\t\t\t\t\t{{ director.name }}<br />
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"block-email\">{{ movie.year }}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"desc\">{{ movie.duration / 60 }} mins</td>
\t\t\t\t\t\t\t\t<td><span class=\"block-email\">{{ movie.cert }}</span></td>
\t\t\t\t\t\t\t\t<td>{{ movie.lastUpdated|date(\"m/d/Y\") }}</td>
\t\t\t\t\t\t\t<tr class=\"spacer\"></tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t\t{{ include('pagination.html.twig') }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t{% else %}
\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\tOops! It seems that either your search didn't return any hits or our database is empty! Maybe you can try again later.
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
\t<script src=\"/js/custom.js\"></script>
{% endblock %}", "movie/movie_list.html.twig", "C:\\xampp\\htdocs\\antonio\\mindgeek\\templates\\movie\\movie_list.html.twig");
    }
}
