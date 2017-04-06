<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a3bcdeff04c2d08a3674239c292dacfe944e4160e569a84f8c1eaf53ef5f7e62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2aa9e53914cf71ed97605478885e48c0c1916e1544f155b71695e6bec7d3f360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa9e53914cf71ed97605478885e48c0c1916e1544f155b71695e6bec7d3f360->enter($__internal_2aa9e53914cf71ed97605478885e48c0c1916e1544f155b71695e6bec7d3f360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aa9e53914cf71ed97605478885e48c0c1916e1544f155b71695e6bec7d3f360->leave($__internal_2aa9e53914cf71ed97605478885e48c0c1916e1544f155b71695e6bec7d3f360_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_baa2d8b2a66c95ee31e0bcb60b71e8cb3b7183936d8b21acdc5b9f303172f9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa2d8b2a66c95ee31e0bcb60b71e8cb3b7183936d8b21acdc5b9f303172f9eb->enter($__internal_baa2d8b2a66c95ee31e0bcb60b71e8cb3b7183936d8b21acdc5b9f303172f9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_baa2d8b2a66c95ee31e0bcb60b71e8cb3b7183936d8b21acdc5b9f303172f9eb->leave($__internal_baa2d8b2a66c95ee31e0bcb60b71e8cb3b7183936d8b21acdc5b9f303172f9eb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c629a88fd063f47fdb249533cf6c7a11b6c30e921affa0101d352f079cfcf0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c629a88fd063f47fdb249533cf6c7a11b6c30e921affa0101d352f079cfcf0e1->enter($__internal_c629a88fd063f47fdb249533cf6c7a11b6c30e921affa0101d352f079cfcf0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c629a88fd063f47fdb249533cf6c7a11b6c30e921affa0101d352f079cfcf0e1->leave($__internal_c629a88fd063f47fdb249533cf6c7a11b6c30e921affa0101d352f079cfcf0e1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a2ebf9bd0bdd166950c7940650cf969c641acc35534c65d758a84fd159dad29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2ebf9bd0bdd166950c7940650cf969c641acc35534c65d758a84fd159dad29->enter($__internal_4a2ebf9bd0bdd166950c7940650cf969c641acc35534c65d758a84fd159dad29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a2ebf9bd0bdd166950c7940650cf969c641acc35534c65d758a84fd159dad29->leave($__internal_4a2ebf9bd0bdd166950c7940650cf969c641acc35534c65d758a84fd159dad29_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/user/Desktop/OMEGA/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
