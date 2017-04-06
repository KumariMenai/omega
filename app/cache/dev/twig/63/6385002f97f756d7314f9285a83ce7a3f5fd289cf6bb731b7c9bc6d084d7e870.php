<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_89068065283799b4f4046a2612b7cb361f7c7d4123d507d78ef4b6df798773fc extends Twig_Template
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
        $__internal_0706453e1165b0da89810523f2541ad394a81154a1666653a406041fbf39af59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0706453e1165b0da89810523f2541ad394a81154a1666653a406041fbf39af59->enter($__internal_0706453e1165b0da89810523f2541ad394a81154a1666653a406041fbf39af59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0706453e1165b0da89810523f2541ad394a81154a1666653a406041fbf39af59->leave($__internal_0706453e1165b0da89810523f2541ad394a81154a1666653a406041fbf39af59_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86c94a850d8471af174ce458854f4890f18aa3ab30a83e3b1796fcdb29e07c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c94a850d8471af174ce458854f4890f18aa3ab30a83e3b1796fcdb29e07c3a->enter($__internal_86c94a850d8471af174ce458854f4890f18aa3ab30a83e3b1796fcdb29e07c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_86c94a850d8471af174ce458854f4890f18aa3ab30a83e3b1796fcdb29e07c3a->leave($__internal_86c94a850d8471af174ce458854f4890f18aa3ab30a83e3b1796fcdb29e07c3a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5fe4de128f818e113f4a2cd7b5139a448e1a40c757178124ba670d57cffc66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fe4de128f818e113f4a2cd7b5139a448e1a40c757178124ba670d57cffc66a->enter($__internal_f5fe4de128f818e113f4a2cd7b5139a448e1a40c757178124ba670d57cffc66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5fe4de128f818e113f4a2cd7b5139a448e1a40c757178124ba670d57cffc66a->leave($__internal_f5fe4de128f818e113f4a2cd7b5139a448e1a40c757178124ba670d57cffc66a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d986dee2404c2564802645713d1601e05a682111a62b9e0b7140c66af8be85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d986dee2404c2564802645713d1601e05a682111a62b9e0b7140c66af8be85b->enter($__internal_5d986dee2404c2564802645713d1601e05a682111a62b9e0b7140c66af8be85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5d986dee2404c2564802645713d1601e05a682111a62b9e0b7140c66af8be85b->leave($__internal_5d986dee2404c2564802645713d1601e05a682111a62b9e0b7140c66af8be85b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Applications\\Omega\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
