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

/* _navbar.html.twig */
class __TwigTemplate_7d3e44cee0ae0363f8fe0f19ba3cb548f596bf2f5c2bbe177f07814fe46f4fb9 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-dark bg-dark navbar-expand-lg\">
    <div class=\"container-fluid nav\">
        <a class=\"navbar-brand\" href=\"/\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/wild_series_logo.png"), "html", null, true);
        echo "\" alt=\"logo\"/>Wild Series</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
            <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/programs\">Index <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <div class=\"dropdown\">
                        <button class=\"btn dropdown dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Category
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a class=\"dropdown-item\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">Action</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">Sci-Fi</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">Romance</a>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/actors\">Actors</a>
                </li>
                <li class=\"nav-item\">
                    <div class=\"dropdown\">
                        <button class=\"btn dropdown dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Admin
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a class=\"dropdown-item\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("program_new");
        echo "\">Ajouter une série</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("season_new");
        echo "\">Ajouter une saison</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("episode_new");
        echo "\">Ajouter un épisode</a>
                        </div>
                    </div>
                </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
            <svg width=\"2em\" height=\"2em\" viewBox=\"0 0 16 16\" class=\"bi bi-star\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/>
            </svg>
            <svg width=\"2em\" height=\"2em\" viewBox=\"0 0 16 16\" class=\"bi bi-person\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" d=\"M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"></path>
            </svg>
        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  94 => 35,  90 => 34,  74 => 21,  70 => 20,  66 => 19,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-dark bg-dark navbar-expand-lg\">
    <div class=\"container-fluid nav\">
        <a class=\"navbar-brand\" href=\"/\"><img src=\"{{ asset('build/wild_series_logo.png') }}\" alt=\"logo\"/>Wild Series</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
            <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/programs\">Index <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <div class=\"dropdown\">
                        <button class=\"btn dropdown dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Category
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a class=\"dropdown-item\" href=\"{{ path(\"category_index\") }}\">Action</a>
                            <a class=\"dropdown-item\" href=\"{{ path(\"category_index\") }}\">Sci-Fi</a>
                            <a class=\"dropdown-item\" href=\"{{ path(\"category_index\") }}\">Romance</a>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/actors\">Actors</a>
                </li>
                <li class=\"nav-item\">
                    <div class=\"dropdown\">
                        <button class=\"btn dropdown dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Admin
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a class=\"dropdown-item\" href=\"{{ path(\"program_new\") }}\">Ajouter une série</a>
                            <a class=\"dropdown-item\" href=\"{{ path(\"season_new\") }}\">Ajouter une saison</a>
                            <a class=\"dropdown-item\" href=\"{{ path(\"episode_new\") }}\">Ajouter un épisode</a>
                        </div>
                    </div>
                </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
            <svg width=\"2em\" height=\"2em\" viewBox=\"0 0 16 16\" class=\"bi bi-star\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/>
            </svg>
            <svg width=\"2em\" height=\"2em\" viewBox=\"0 0 16 16\" class=\"bi bi-person\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" d=\"M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"></path>
            </svg>
        </div>
    </div>
</nav>", "_navbar.html.twig", "/home/christophe/Documents/Wild Code School/Quêtes Symfony/wild-series/templates/_navbar.html.twig");
    }
}
