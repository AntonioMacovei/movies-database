<?php

/* movie/movie_show.html.twig */
class __TwigTemplate_880c43be8e683883440bd17441264ffb99666988962e26d85f31a49a4d87c587 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base_table.html.twig", "movie/movie_show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movie/movie_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movie/movie_show.html.twig"));

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
\t\t<input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" id=\"searchField\" placeholder=\"Search movies ...\" />
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

        echo "Movie Info";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"table-responsive table-responsive-data2\">
\t\t\t";
        // line 44
        if ((isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "\t\t\t\t<div class=\"au-card\">
\t\t\t\t\t<div class=\"au-card-inner\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h3 class=\"title-2 tm-b-5 font-weight-bold\">
\t\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 49, $this->source); })()), "headline", array()), "html", null, true);
            echo " <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 49, $this->source); })()), "year", array()), "html", null, true);
            echo ")</small>
\t\t\t\t\t\t\t&nbsp;&nbsp;<span class=\"badge badge-secondary\">";
            // line 50
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 50, $this->source); })()), "duration", array()) / 60), "html", null, true);
            echo " mins</span>
\t\t\t\t\t\t\t";
            // line 51
            if (twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 51, $this->source); })()), "rating", array())) {
                echo "&nbsp;&nbsp;<span class=\"badge badge-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 51, $this->source); })()), "rating", array()), "html", null, true);
                echo "&nbsp;<i class=\"fas fa-star\"></i></span>";
            }
            // line 52
            echo "\t\t\t\t\t\t\t&nbsp;&nbsp;<span class=\"badge badge-info\">cert ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 52, $this->source); })()), "cert", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">Director(s)</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 59, $this->source); })()), "getDirectors", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["director"]) {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["director"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ",&nbsp;";
                }
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['director'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">Cast</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 69, $this->source); })()), "getCasts", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cast"]) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cast"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ",&nbsp;";
                }
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cast'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<h4>Genres:&nbsp;
\t\t\t\t\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 79, $this->source); })()), "getGenres", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ",&nbsp;";
                }
                // line 81
                echo "\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-4 no-gutter\">
\t\t\t\t\t\t\t<div class=\"col-xl-6 pl-0\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-2\">Synopsis</h4>
\t\t\t\t\t\t\t\t<p class=\"pl-3 text-justify\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 88, $this->source); })()), "synopsis", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-6 pl-0\">
\t\t\t\t\t\t\t\t";
            // line 91
            if (twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 91, $this->source); })()), "quote", array())) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t<h4 class=\"mb-2\">Quote</h4>
\t\t\t\t\t\t\t\t\t<blockquote class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-left\"></i> ";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 94, $this->source); })()), "quote", array()), "html", null, true);
                echo " <i class=\"fas fa-quote-right\"></i>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t<h4 class=\"mb-2\">Review";
            // line 100
            if (twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 100, $this->source); })()), "reviewAuthor", array())) {
                echo "<small class=\"font-italic\"> by ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 100, $this->source); })()), "reviewAuthor", array()), "name", array()), "html", null, true);
                echo "</small>";
            }
            echo "</h4>
\t\t\t\t\t\t\t<p class=\"pl-3 pr-3 mt-1 text-justify\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 101, $this->source); })()), "body", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"float-right\"><a href=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 103, $this->source); })()), "url", array()), "html", null, true);
            echo "\" target=\"_blank\">Source</a></div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<div class=\"float-right font-italic mt-2\">Last updated: ";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 105, $this->source); })()), "lastUpdated", array()), "m/d/Y"), "html", null, true);
            echo "</div>

\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">Other info</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\tClass: ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 111, $this->source); })()), "class", array()), "html", null, true);
            echo "<br />
\t\t\t\t\t\t\t\t\tID: ";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 112, $this->source); })()), "movieId", array()), "html", null, true);
            echo "<br />
\t\t\t\t\t\t\t\t\tSum: ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 113, $this->source); })()), "sum", array()), "html", null, true);
            echo "<br />
\t\t\t\t\t\t\t\t\t";
            // line 114
            if (twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 114, $this->source); })()), "skyGoId", array())) {
                echo "Sky Go ID: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 114, $this->source); })()), "skyGoId", array()), "html", null, true);
                echo "<br />";
            }
            // line 115
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 115, $this->source); })()), "skyGoUrl", array())) {
                echo "Sky Go URL: <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 115, $this->source); })()), "skyGoUrl", array()), "html", null, true);
                echo "\" target=\"_blank\">Here</a><br />";
            }
            // line 116
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t";
            // line 120
            if (twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 120, $this->source); })()), "getViewingWindow", array())) {
                // line 121
                echo "\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">Viewing window</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t";
                // line 124
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 124, $this->source); })()), "getViewingWindow", array()), "title", array())) {
                    echo "Title: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 124, $this->source); })()), "getViewingWindow", array()), "title", array()), "html", null, true);
                    echo "<br />";
                }
                // line 125
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 125, $this->source); })()), "getViewingWindow", array()), "startDate", array())) {
                    echo "Start date: ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 125, $this->source); })()), "getViewingWindow", array()), "startDate", array()), "m/d/Y"), "html", null, true);
                    echo "<br />";
                }
                // line 126
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 126, $this->source); })()), "getViewingWindow", array()), "endDate", array())) {
                    echo "End date: ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 126, $this->source); })()), "getViewingWindow", array()), "endDate", array()), "m/d/Y"), "html", null, true);
                    echo "<br />";
                }
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 127, $this->source); })()), "getViewingWindow", array()), "wayToWatch", array())) {
                    echo "Way to watch: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 127, $this->source); })()), "getViewingWindow", array()), "wayToWatch", array()), "html", null, true);
                }
                // line 128
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 131
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 132
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 132, $this->source); })()), "getImages", array()))) {
                // line 133
                echo "\t\t\t\t\t\t\t<div class=\"row mt-4 no-gutter\"><h4 class=\"mb-4\">Card Images</h4></div>
\t\t\t\t\t\t\t<div class=\"row mt-2 no-gutter\">
\t\t\t\t\t\t\t\t";
                // line 135
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 135, $this->source); })()), "getImages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, $context["image"], "type", array()) == "card-image") && twig_get_attribute($this->env, $this->source, $context["image"], "localPath", array()))) {
                        // line 137
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 mt-3\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/";
                        // line 138
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "localPath", array()), "html", null, true);
                        echo "\" style=\"height:100px !important\" />\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 141
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-4 no-gutter\"><h4 class=\"mb-4\">Key Art Images</h4></div>
\t\t\t\t\t\t\t<div class=\"row mt-2 no-gutter\">
\t\t\t\t\t\t\t\t";
                // line 145
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 145, $this->source); })()), "getImages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, $context["image"], "type", array()) == "keyart-image") && twig_get_attribute($this->env, $this->source, $context["image"], "localPath", array()))) {
                        // line 147
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 mt-3\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/";
                        // line 148
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "localPath", array()), "html", null, true);
                        echo "\" style=\"height:100px !important\" />\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 151
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 154, $this->source); })()), "getVideos", array()))) {
                // line 155
                echo "\t\t\t\t\t\t\t<div class=\"row mt-4 no-gutter\"><h4 class=\"mb-4\">Videos</h4></div>
\t\t\t\t\t\t\t<div class=\"row mt-1 no-gutter\">
\t\t\t\t\t\t\t\t<ul class=\"pl-5\">
\t\t\t\t\t\t\t\t\t";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 158, $this->source); })()), "getVideos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["video"], "localPath", array())) {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<video width=\"400\" controls>
\t\t\t\t\t\t\t\t\t\t\t\t\t<source src=\"";
                        // line 162
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "localPath", array()), "html", null, true);
                        echo "\" type=\"video/mp4\">
\t\t\t\t\t\t\t\t\t\t\t\t\tYour browser does not support HTML5 video.
\t\t\t\t\t\t\t\t\t\t\t\t</video>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li>This video coudn't be downloaded. Try navigating to&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 168
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "url", array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", array()), "html", null, true);
                        echo "</a> - ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "quality", array()), "html", null, true);
                        echo " quality</li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 174, $this->source); })()), "getGalleries", array()))) {
                // line 175
                echo "\t\t\t\t\t\t\t<div class=\"row mt-4 no-gutter\"><h4 class=\"mb-4\">Galleries</h4></div>
\t\t\t\t\t\t\t<div class=\"row mt-1 no-gutter\">
\t\t\t\t\t\t\t\t<ul class=\"pl-5\">
\t\t\t\t\t\t\t\t\t";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 178, $this->source); })()), "getGalleries", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
                    // line 179
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "url", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "title", array()), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 184
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 187
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 191
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 192
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
        return "movie/movie_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 192,  613 => 191,  600 => 187,  595 => 184,  590 => 181,  579 => 179,  575 => 178,  570 => 175,  567 => 174,  562 => 171,  556 => 170,  547 => 168,  544 => 167,  536 => 162,  532 => 160,  529 => 159,  525 => 158,  520 => 155,  517 => 154,  513 => 152,  507 => 151,  501 => 148,  498 => 147,  495 => 146,  491 => 145,  486 => 142,  480 => 141,  474 => 138,  471 => 137,  468 => 136,  464 => 135,  460 => 133,  458 => 132,  455 => 131,  450 => 128,  444 => 127,  437 => 126,  430 => 125,  424 => 124,  419 => 121,  417 => 120,  411 => 116,  404 => 115,  398 => 114,  394 => 113,  390 => 112,  386 => 111,  377 => 105,  372 => 103,  367 => 101,  359 => 100,  354 => 97,  348 => 94,  344 => 92,  342 => 91,  336 => 88,  328 => 82,  314 => 81,  308 => 80,  291 => 79,  282 => 72,  268 => 71,  262 => 70,  245 => 69,  236 => 62,  222 => 61,  216 => 60,  199 => 59,  188 => 52,  182 => 51,  178 => 50,  172 => 49,  166 => 45,  164 => 44,  159 => 41,  150 => 40,  132 => 38,  116 => 30,  107 => 29,  76 => 6,  67 => 5,  49 => 3,  15 => 1,);
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
\t\t<input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" id=\"searchField\" placeholder=\"Search movies ...\" />
\t\t<button class=\"au-btn--submit\" type=\"submit\" id=\"search\">
\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t</button>
\t</div>
{% endblock %}

{% block pageTitle %}Movie Info{% endblock %}

{% block body %}
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"table-responsive table-responsive-data2\">
\t\t\t{% if movie %}
\t\t\t\t<div class=\"au-card\">
\t\t\t\t\t<div class=\"au-card-inner\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h3 class=\"title-2 tm-b-5 font-weight-bold\">
\t\t\t\t\t\t\t{{ movie.headline }} <small>({{ movie.year }})</small>
\t\t\t\t\t\t\t&nbsp;&nbsp;<span class=\"badge badge-secondary\">{{ movie.duration / 60 }} mins</span>
\t\t\t\t\t\t\t{% if movie.rating %}&nbsp;&nbsp;<span class=\"badge badge-success\">{{ movie.rating }}&nbsp;<i class=\"fas fa-star\"></i></span>{% endif %}
\t\t\t\t\t\t\t&nbsp;&nbsp;<span class=\"badge badge-info\">cert {{ movie.cert }}</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">Director(s)</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t{% for director in movie.getDirectors %}
\t\t\t\t\t\t\t\t\t\t\t{{ director.name }}{% if not loop.last %},&nbsp;{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">Cast</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t{% for cast in movie.getCasts %}
\t\t\t\t\t\t\t\t\t\t\t{{ cast.name }}{% if not loop.last %},&nbsp;{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<h4>Genres:&nbsp;
\t\t\t\t\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t\t\t\t\t{% for genre in movie.getGenres %}
\t\t\t\t\t\t\t\t\t\t{{ genre.name }}{% if not loop.last %},&nbsp;{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-4 no-gutter\">
\t\t\t\t\t\t\t<div class=\"col-xl-6 pl-0\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-2\">Synopsis</h4>
\t\t\t\t\t\t\t\t<p class=\"pl-3 text-justify\">{{ movie.synopsis }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-6 pl-0\">
\t\t\t\t\t\t\t\t{% if movie.quote %}
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-2\">Quote</h4>
\t\t\t\t\t\t\t\t\t<blockquote class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-left\"></i> {{ movie.quote }} <i class=\"fas fa-quote-right\"></i>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t<h4 class=\"mb-2\">Review{% if movie.reviewAuthor %}<small class=\"font-italic\"> by {{ movie.reviewAuthor.name }}</small>{% endif %}</h4>
\t\t\t\t\t\t\t<p class=\"pl-3 pr-3 mt-1 text-justify\">{{ movie.body }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"float-right\"><a href=\"{{ movie.url }}\" target=\"_blank\">Source</a></div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<div class=\"float-right font-italic mt-2\">Last updated: {{ movie.lastUpdated|date(\"m/d/Y\") }}</div>

\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">Other info</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\tClass: {{ movie.class }}<br />
\t\t\t\t\t\t\t\t\tID: {{ movie.movieId }}<br />
\t\t\t\t\t\t\t\t\tSum: {{ movie.sum }}<br />
\t\t\t\t\t\t\t\t\t{% if movie.skyGoId %}Sky Go ID: {{ movie.skyGoId }}<br />{% endif %}
\t\t\t\t\t\t\t\t\t{% if movie.skyGoUrl %}Sky Go URL: <a href=\"{{ movie.skyGoUrl }}\" target=\"_blank\">Here</a><br />{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t{% if movie.getViewingWindow %}
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">Viewing window</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t{% if movie.getViewingWindow.title %}Title: {{ movie.getViewingWindow.title }}<br />{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if movie.getViewingWindow.startDate %}Start date: {{ movie.getViewingWindow.startDate|date(\"m/d/Y\") }}<br />{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if movie.getViewingWindow.endDate %}End date: {{ movie.getViewingWindow.endDate|date(\"m/d/Y\") }}<br />{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if movie.getViewingWindow.wayToWatch %}Way to watch: {{ movie.getViewingWindow.wayToWatch }}{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if movie.getImages|length %}
\t\t\t\t\t\t\t<div class=\"row mt-4 no-gutter\"><h4 class=\"mb-4\">Card Images</h4></div>
\t\t\t\t\t\t\t<div class=\"row mt-2 no-gutter\">
\t\t\t\t\t\t\t\t{% for image in movie.getImages %}
\t\t\t\t\t\t\t\t\t{% if image.type == 'card-image' and image.localPath %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 mt-3\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/{{ image.localPath }}\" style=\"height:100px !important\" />\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-4 no-gutter\"><h4 class=\"mb-4\">Key Art Images</h4></div>
\t\t\t\t\t\t\t<div class=\"row mt-2 no-gutter\">
\t\t\t\t\t\t\t\t{% for image in movie.getImages %}
\t\t\t\t\t\t\t\t\t{% if image.type == 'keyart-image' and image.localPath %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 mt-3\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/{{ image.localPath }}\" style=\"height:100px !important\" />\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if movie.getVideos|length %}
\t\t\t\t\t\t\t<div class=\"row mt-4 no-gutter\"><h4 class=\"mb-4\">Videos</h4></div>
\t\t\t\t\t\t\t<div class=\"row mt-1 no-gutter\">
\t\t\t\t\t\t\t\t<ul class=\"pl-5\">
\t\t\t\t\t\t\t\t\t{% for video in movie.getVideos %}
\t\t\t\t\t\t\t\t\t\t{% if video.localPath %}
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<video width=\"400\" controls>
\t\t\t\t\t\t\t\t\t\t\t\t\t<source src=\"{{ video.localPath }}\" type=\"video/mp4\">
\t\t\t\t\t\t\t\t\t\t\t\t\tYour browser does not support HTML5 video.
\t\t\t\t\t\t\t\t\t\t\t\t</video>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<li>This video coudn't be downloaded. Try navigating to&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ video.url }}\" target=\"_blank\">{{ video.title }}</a> - {{ video.quality }} quality</li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if movie.getGalleries|length %}
\t\t\t\t\t\t\t<div class=\"row mt-4 no-gutter\"><h4 class=\"mb-4\">Galleries</h4></div>
\t\t\t\t\t\t\t<div class=\"row mt-1 no-gutter\">
\t\t\t\t\t\t\t\t<ul class=\"pl-5\">
\t\t\t\t\t\t\t\t\t{% for gallery in movie.getGalleries %}
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ gallery.url }}\" target=\"_blank\">{{ gallery.title }}</a></li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
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
{% endblock %}", "movie/movie_show.html.twig", "C:\\xampp\\htdocs\\antonio\\mindgeek\\templates\\movie\\movie_show.html.twig");
    }
}
