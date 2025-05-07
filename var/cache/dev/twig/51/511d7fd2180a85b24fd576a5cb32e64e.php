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

/* controleur/portfolio.html.twig */
class __TwigTemplate_b1a1636c06a9238a65d5eff7f058ea3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controleur/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controleur/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "controleur/portfolio.html.twig", 1);
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
        yield "    <div class=\"container py-5\">
        <!-- Grande carte qui contient toutes les compétences -->
        <div class=\"row mb-5\">
            <div class=\"col-md-12\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-dark text-light\">
                        <h4 class=\"mb-0 text-white\">Mes Compétences</h4>
                    </div>
                    <div class=\"card-body\">
                        <!-- Carte Réseaux -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-12\">
                                <div class=\"card shadow-sm bg-primary text-white\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Réseaux</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul>
                                            <li><strong>AC11.01 :</strong> Maîtriser les lois fondamentales de l’électricité pour intervenir sur des équipements de réseaux et télécommunications.</li>
                                            <li><strong>AC11.03 :</strong> Configurer les fonctions de base du réseau local.</li>
                                            <li><strong>AC11.05 :</strong> Identifier les dysfonctionnements du réseau local.</li>
                                        </ul>
                                        <p>Outils utilisés : Wireshark, Cisco Packet Tracer</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carte Systèmes -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-12\">
                                <div class=\"card shadow-sm bg-info text-white\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Systèmes</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul>
                                            <li><strong>AC11.04 :</strong> Maîtriser les rôles et principes fondamentaux des systèmes d’exploitation pour la configuration et l’administration des réseaux.</li>
                                            <li><strong>AC11.06 :</strong> Installer un poste client et expliquer la procédure mise en place.</li>
                                        </ul>
                                        <p>Outils utilisés : Ubuntu Server, Windows Server, Active Directory, SSH</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carte Virtualisation -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-12\">
                                <div class=\"card shadow-sm bg-success text-white\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Virtualisation</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul>
                                            <li><strong>AC13.01 :</strong> Utiliser un système informatique et ses outils pour la virtualisation.</li>
                                            <li><strong>AC12.03 :</strong> Déployer des supports de transmission dans un environnement virtuel.</li>
                                        </ul>
                                        <p>Outils utilisés : VMware, VirtualBox</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carte Sécurité des réseaux -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-12\">
                                <div class=\"card shadow-sm bg-danger text-white\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Sécurité des réseaux</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul>
                                            <li><strong>AC11.02 :</strong> Comprendre l’architecture et les fondements des systèmes numériques et des communications.</li>
                                            <li><strong>AC12.02 :</strong> Caractériser des systèmes de transmissions élémentaires et leur modélisation mathématique.</li>
                                        </ul>
                                        <p>Outils utilisés : NAT, ACL, Firewall</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
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
        return "controleur/portfolio.html.twig";
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
    <div class=\"container py-5\">
        <!-- Grande carte qui contient toutes les compétences -->
        <div class=\"row mb-5\">
            <div class=\"col-md-12\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-dark text-light\">
                        <h4 class=\"mb-0 text-white\">Mes Compétences</h4>
                    </div>
                    <div class=\"card-body\">
                        <!-- Carte Réseaux -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-12\">
                                <div class=\"card shadow-sm bg-primary text-white\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Réseaux</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul>
                                            <li><strong>AC11.01 :</strong> Maîtriser les lois fondamentales de l’électricité pour intervenir sur des équipements de réseaux et télécommunications.</li>
                                            <li><strong>AC11.03 :</strong> Configurer les fonctions de base du réseau local.</li>
                                            <li><strong>AC11.05 :</strong> Identifier les dysfonctionnements du réseau local.</li>
                                        </ul>
                                        <p>Outils utilisés : Wireshark, Cisco Packet Tracer</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carte Systèmes -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-12\">
                                <div class=\"card shadow-sm bg-info text-white\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Systèmes</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul>
                                            <li><strong>AC11.04 :</strong> Maîtriser les rôles et principes fondamentaux des systèmes d’exploitation pour la configuration et l’administration des réseaux.</li>
                                            <li><strong>AC11.06 :</strong> Installer un poste client et expliquer la procédure mise en place.</li>
                                        </ul>
                                        <p>Outils utilisés : Ubuntu Server, Windows Server, Active Directory, SSH</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carte Virtualisation -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-12\">
                                <div class=\"card shadow-sm bg-success text-white\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Virtualisation</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul>
                                            <li><strong>AC13.01 :</strong> Utiliser un système informatique et ses outils pour la virtualisation.</li>
                                            <li><strong>AC12.03 :</strong> Déployer des supports de transmission dans un environnement virtuel.</li>
                                        </ul>
                                        <p>Outils utilisés : VMware, VirtualBox</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carte Sécurité des réseaux -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-12\">
                                <div class=\"card shadow-sm bg-danger text-white\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Sécurité des réseaux</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul>
                                            <li><strong>AC11.02 :</strong> Comprendre l’architecture et les fondements des systèmes numériques et des communications.</li>
                                            <li><strong>AC12.02 :</strong> Caractériser des systèmes de transmissions élémentaires et leur modélisation mathématique.</li>
                                        </ul>
                                        <p>Outils utilisés : NAT, ACL, Firewall</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}
", "controleur/portfolio.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1 S2 2024_2025\\Projet\\SAE.PORTFOLIO\\HugoPortFolio\\templates\\controleur\\portfolio.html.twig");
    }
}
