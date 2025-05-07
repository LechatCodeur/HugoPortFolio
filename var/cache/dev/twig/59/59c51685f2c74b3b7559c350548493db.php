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

/* controleur/contact.html.twig */
class __TwigTemplate_d96d088d79cf69872667df1a41defcd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controleur/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controleur/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "controleur/contact.html.twig", 1);
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

        yield "Contact";
        
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
        yield "    <div class=\"container py-5\">
        <h1 class=\"text-center mb-4\">Contact</h1>

        <div class=\"row\">
            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-dark text-light\">
                        <h4 class=\"mb-0 text-white\">Mes coordonnées</h4> 
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-3\">
                                <i class=\"fas fa-user me-2\"></i><strong>Nom :</strong> Hugo Sanchez-Durante
                            </li>
                            <li class=\"mb-3\">
                                <i class=\"fas fa-map-marker-alt me-2\"></i><strong>Adresse :</strong> 15bis Rue Fontenille, Roanne
                            </li>
                            <li class=\"mb-3\">
                                <i class=\"fas fa-phone-alt me-2\"></i><strong>Téléphone :</strong> +33 06 77 64 23 74
                            </li>
                            <li class=\"mb-3\">
                                <i class=\"fas fa-envelope me-2\"></i><strong>Email :</strong> <a href=\"mailto:hsanchezdurante@gmail.com\" class=\"contact-link\">hsanchezdurante@gmail.com</a>
                            </li>
                            <li class=\"mb-3\">
                                <i class=\"fab fa-linkedin me-2\"></i><strong>LinkedIn :</strong> <a href=\"https://www.linkedin.com/in/hugo-sanchez-durante-660739352/\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"contact-link\">Mon profil LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-dark text-light\">
                        <h4 class=\"mb-0 text-white\">Envoyez-moi un message</h4> 
                    </div>
                    <div class=\"card-body\">
                        <p>Si vous avez une question ou souhaitez discuter de mes projets, n'hésitez pas à m'envoyer un email en cliquant sur le bouton ci-dessous :</p>
                        <a href=\"mailto:hsanchezdurante@gmail.com\" class=\"btn btn-dark btn-lg w-100\">
                            <i class=\"fas fa-paper-plane me-2\"></i>Envoyer un email
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-dark text-light\">
                        <h4 class=\"mb-0 text-white\">Téléchargez mon CV</h4>
                    </div>
                    <div class=\"card-body\">
                        <p>Vous pouvez télécharger mon CV en cliquant sur le bouton ci-dessous :</p>
                        <a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("SanchezDurante_Hugo_CV.docx"), "html", null, true);
        yield "\" class=\"btn btn-primary btn-lg w-100\" download>
                            <i class=\"fas fa-download me-2\"></i>Mon CV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .contact-link {
            color: inherit; 
            font-weight: bold;  
            text-decoration: none;  
        }

        .contact-link:hover {
            text-decoration: underline;  
        }
    </style>
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
        return "controleur/contact.html.twig";
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
        return array (  156 => 60,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <h1 class=\"text-center mb-4\">Contact</h1>

        <div class=\"row\">
            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-dark text-light\">
                        <h4 class=\"mb-0 text-white\">Mes coordonnées</h4> 
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-3\">
                                <i class=\"fas fa-user me-2\"></i><strong>Nom :</strong> Hugo Sanchez-Durante
                            </li>
                            <li class=\"mb-3\">
                                <i class=\"fas fa-map-marker-alt me-2\"></i><strong>Adresse :</strong> 15bis Rue Fontenille, Roanne
                            </li>
                            <li class=\"mb-3\">
                                <i class=\"fas fa-phone-alt me-2\"></i><strong>Téléphone :</strong> +33 06 77 64 23 74
                            </li>
                            <li class=\"mb-3\">
                                <i class=\"fas fa-envelope me-2\"></i><strong>Email :</strong> <a href=\"mailto:hsanchezdurante@gmail.com\" class=\"contact-link\">hsanchezdurante@gmail.com</a>
                            </li>
                            <li class=\"mb-3\">
                                <i class=\"fab fa-linkedin me-2\"></i><strong>LinkedIn :</strong> <a href=\"https://www.linkedin.com/in/hugo-sanchez-durante-660739352/\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"contact-link\">Mon profil LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-dark text-light\">
                        <h4 class=\"mb-0 text-white\">Envoyez-moi un message</h4> 
                    </div>
                    <div class=\"card-body\">
                        <p>Si vous avez une question ou souhaitez discuter de mes projets, n'hésitez pas à m'envoyer un email en cliquant sur le bouton ci-dessous :</p>
                        <a href=\"mailto:hsanchezdurante@gmail.com\" class=\"btn btn-dark btn-lg w-100\">
                            <i class=\"fas fa-paper-plane me-2\"></i>Envoyer un email
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-dark text-light\">
                        <h4 class=\"mb-0 text-white\">Téléchargez mon CV</h4>
                    </div>
                    <div class=\"card-body\">
                        <p>Vous pouvez télécharger mon CV en cliquant sur le bouton ci-dessous :</p>
                        <a href=\"{{ asset('SanchezDurante_Hugo_CV.docx') }}\" class=\"btn btn-primary btn-lg w-100\" download>
                            <i class=\"fas fa-download me-2\"></i>Mon CV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .contact-link {
            color: inherit; 
            font-weight: bold;  
            text-decoration: none;  
        }

        .contact-link:hover {
            text-decoration: underline;  
        }
    </style>
{% endblock %}
", "controleur/contact.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1 S2 2024_2025\\Projet\\SAE.PORTFOLIO\\HugoPortFolio\\templates\\controleur\\contact.html.twig");
    }
}
