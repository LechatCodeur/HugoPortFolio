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

/* base.html.twig */
class __TwigTemplate_913fb2b98e00639c771db3719e16c76b extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/zephyr/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" rel=\"stylesheet\">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            position: relative;
            overflow: visible; 
        }
        .flag-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none; 
            z-index: -1; 
        }
        .flag {
            position: absolute;
            width: 60px;
            height: 40px;
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/c/c3/Flag_of_France.svg');
            background-size: cover;
        }

        .content-wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .main-content {
            flex: 1;
        }

        footer {
            position: relative;
            z-index: 2;
        }
    </style>
</head>
<body>

    <div class=\"content-wrapper\">
        <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
            <div class=\"container-fluid\">
                <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
        yield "\">Profil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portfolio");
        yield "\">Portfolio</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choix_parcours");
        yield "\">Choix Parcours</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class=\"main-content container mt-4\">
            ";
        // line 80
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 81
        yield "        </div>

        <footer class=\"bg-dark text-light text-center py-3 mt-4\">
            <p>SanchezDurante_Hugo_2025_Copyright</p>
        </footer>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-cu1w5z9t8E9mB1Isr7BBt6jodfskEKwzMkp0ZIk1Z8TZvzy1wU3TxGp7mc0T0PUh\" crossorigin=\"anonymous\"></script>

    
    <script>
        const numFlags = 18;  
        const flagContainer = document.createElement('div');
        flagContainer.classList.add('flag-container');
        document.body.appendChild(flagContainer);

        // Classe Flag pour chaque drapeau
        class Flag {
            constructor() {
                this.flag = document.createElement('div');
                this.flag.classList.add('flag');
                
                // Image du drapeau
                this.flag.style.backgroundImage = 'url(\"https://upload.wikimedia.org/wikipedia/commons/c/c3/Flag_of_France.svg\")';
                
                // Calculer les positions initiales de manière à éviter les bords
                this.x = Math.random() * (window.innerWidth - 60); // Largeur du drapeau = 60px
                this.y = Math.random() * (window.innerHeight - 40); // Hauteur du drapeau = 40px
                
                // Définir la vitesse initiale du drapeau
                this.vx = (Math.random() * 2 + 1) * (Math.random() > 0.5 ? 1 : -1); // Vitesse aléatoire en x
                this.vy = (Math.random() * 2 + 1) * (Math.random() > 0.5 ? 1 : -1); // Vitesse aléatoire en y
                
                this.width = 60;
                this.height = 40;
                
                // Appliquer la position initiale au drapeau
                this.flag.style.left = `\${this.x}px`;
                this.flag.style.top = `\${this.y}px`;
                
                // Ajouter le drapeau à la page
                flagContainer.appendChild(this.flag);
            }

            move() {
                // Obtenons la taille totale du document (même lorsqu'on fait défiler)
                const docWidth = document.documentElement.scrollWidth;
                const docHeight = document.documentElement.scrollHeight;

                // Mettre à jour la position du drapeau avec sa vitesse
                this.x += this.vx;
                this.y += this.vy;

                // Vérifier si le drapeau touche un bord et inverser la direction
                if (this.x <= 0 || this.x >= docWidth - this.width) {
                    this.vx = -this.vx; // Inverser la direction horizontale
                }

                if (this.y <= 0 || this.y >= docHeight - this.height) {
                    this.vy = -this.vy; // Inverser la direction verticale
                }

                // Mettre à jour la position du drapeau
                this.flag.style.left = `\${this.x}px`;
                this.flag.style.top = `\${this.y}px`;
            }
        }

        // Création de plusieurs drapeaux
        const flags = [];
        for (let i = 0; i < numFlags; i++) {
            flags.push(new Flag());
        }

        // Animation des drapeaux
        function animateFlags() {
            flags.forEach(flag => flag.move());
            requestAnimationFrame(animateFlags); // Appel récursif pour la prochaine frame
        }

        animateFlags(); // Lancer l'animation
    </script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Mon application Symfony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  270 => 80,  247 => 6,  151 => 81,  149 => 80,  138 => 72,  132 => 69,  126 => 66,  120 => 63,  114 => 60,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Mon application Symfony{% endblock %}</title>
    
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/zephyr/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" rel=\"stylesheet\">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            position: relative;
            overflow: visible; 
        }
        .flag-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none; 
            z-index: -1; 
        }
        .flag {
            position: absolute;
            width: 60px;
            height: 40px;
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/c/c3/Flag_of_France.svg');
            background-size: cover;
        }

        .content-wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .main-content {
            flex: 1;
        }

        footer {
            position: relative;
            z-index: 2;
        }
    </style>
</head>
<body>

    <div class=\"content-wrapper\">
        <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
            <div class=\"container-fluid\">
                <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('accueil') }}\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('profil') }}\">Profil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('portfolio') }}\">Portfolio</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('choix_parcours') }}\">Choix Parcours</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class=\"main-content container mt-4\">
            {% block body %}{% endblock %}
        </div>

        <footer class=\"bg-dark text-light text-center py-3 mt-4\">
            <p>SanchezDurante_Hugo_2025_Copyright</p>
        </footer>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-cu1w5z9t8E9mB1Isr7BBt6jodfskEKwzMkp0ZIk1Z8TZvzy1wU3TxGp7mc0T0PUh\" crossorigin=\"anonymous\"></script>

    
    <script>
        const numFlags = 18;  
        const flagContainer = document.createElement('div');
        flagContainer.classList.add('flag-container');
        document.body.appendChild(flagContainer);

        // Classe Flag pour chaque drapeau
        class Flag {
            constructor() {
                this.flag = document.createElement('div');
                this.flag.classList.add('flag');
                
                // Image du drapeau
                this.flag.style.backgroundImage = 'url(\"https://upload.wikimedia.org/wikipedia/commons/c/c3/Flag_of_France.svg\")';
                
                // Calculer les positions initiales de manière à éviter les bords
                this.x = Math.random() * (window.innerWidth - 60); // Largeur du drapeau = 60px
                this.y = Math.random() * (window.innerHeight - 40); // Hauteur du drapeau = 40px
                
                // Définir la vitesse initiale du drapeau
                this.vx = (Math.random() * 2 + 1) * (Math.random() > 0.5 ? 1 : -1); // Vitesse aléatoire en x
                this.vy = (Math.random() * 2 + 1) * (Math.random() > 0.5 ? 1 : -1); // Vitesse aléatoire en y
                
                this.width = 60;
                this.height = 40;
                
                // Appliquer la position initiale au drapeau
                this.flag.style.left = `\${this.x}px`;
                this.flag.style.top = `\${this.y}px`;
                
                // Ajouter le drapeau à la page
                flagContainer.appendChild(this.flag);
            }

            move() {
                // Obtenons la taille totale du document (même lorsqu'on fait défiler)
                const docWidth = document.documentElement.scrollWidth;
                const docHeight = document.documentElement.scrollHeight;

                // Mettre à jour la position du drapeau avec sa vitesse
                this.x += this.vx;
                this.y += this.vy;

                // Vérifier si le drapeau touche un bord et inverser la direction
                if (this.x <= 0 || this.x >= docWidth - this.width) {
                    this.vx = -this.vx; // Inverser la direction horizontale
                }

                if (this.y <= 0 || this.y >= docHeight - this.height) {
                    this.vy = -this.vy; // Inverser la direction verticale
                }

                // Mettre à jour la position du drapeau
                this.flag.style.left = `\${this.x}px`;
                this.flag.style.top = `\${this.y}px`;
            }
        }

        // Création de plusieurs drapeaux
        const flags = [];
        for (let i = 0; i < numFlags; i++) {
            flags.push(new Flag());
        }

        // Animation des drapeaux
        function animateFlags() {
            flags.forEach(flag => flag.move());
            requestAnimationFrame(animateFlags); // Appel récursif pour la prochaine frame
        }

        animateFlags(); // Lancer l'animation
    </script>

</body>
</html>
", "base.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1 S2 2024_2025\\Projet\\SAE.PORTFOLIO\\HugoPortFolio\\templates\\base.html.twig");
    }
}
