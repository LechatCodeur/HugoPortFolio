<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* controleur/accueil.html.twig */
class __TwigTemplate_086da381d6254a4cce8e57ba7fd7183f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controleur/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controleur/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "controleur/accueil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <!-- Section d'introduction avec un fond blanc et espacement confortable -->
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-12 col-lg-10\"> <!-- Augmenter la largeur encore ici -->
                <!-- Première section (Introduction) -->
                <div class=\"bg-white shadow-sm p-4 mb-4 rounded\">
                    <h2 class=\"text-center\">Bienvenue sur mon SAE Portfolio</h2>
                    <p class=\"lead mb-4\">Ce portfolio est dédié à mon projet dans le cadre du BUT Réseaux et Télécommunications (RT). Ce projet présente une introduction à mes compétences et à ma formation, en mettant l'accent sur des domaines clés tels que les réseaux, l'administration des systèmes, et la cybersécurité.</p>
                    <p class=\"text-center\">Vous y trouverez une présentation détaillée de mes connaissances et des compétences acquises tout au long de ma formation. J'y aborde aussi bien la gestion des infrastructures réseau que la cybersécurité, tout en partageant des projets pratiques et des réalisations concrètes.</p>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "controleur/accueil.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Portfolio{% endblock %}

{% block body %}
    <!-- Section d'introduction avec un fond blanc et espacement confortable -->
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-12 col-lg-10\"> <!-- Augmenter la largeur encore ici -->
                <!-- Première section (Introduction) -->
                <div class=\"bg-white shadow-sm p-4 mb-4 rounded\">
                    <h2 class=\"text-center\">Bienvenue sur mon SAE Portfolio</h2>
                    <p class=\"lead mb-4\">Ce portfolio est dédié à mon projet dans le cadre du BUT Réseaux et Télécommunications (RT). Ce projet présente une introduction à mes compétences et à ma formation, en mettant l'accent sur des domaines clés tels que les réseaux, l'administration des systèmes, et la cybersécurité.</p>
                    <p class=\"text-center\">Vous y trouverez une présentation détaillée de mes connaissances et des compétences acquises tout au long de ma formation. J'y aborde aussi bien la gestion des infrastructures réseau que la cybersécurité, tout en partageant des projets pratiques et des réalisations concrètes.</p>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "controleur/accueil.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1 S2 2024_2025\\Projet\\SAE.PORTFOLIO\\HugoPortFolio\\templates\\controleur\\accueil.html.twig");
    }
}
