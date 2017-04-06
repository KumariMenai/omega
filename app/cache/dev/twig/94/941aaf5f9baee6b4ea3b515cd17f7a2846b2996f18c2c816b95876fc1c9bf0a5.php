<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d153334270306af16220be219b501a96798ad58fb6a63fa015a513e3e5068571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecd52ae76280661ffea9b8b8d88fe05b4eb1166c1a99f44c5f7920264a792065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd52ae76280661ffea9b8b8d88fe05b4eb1166c1a99f44c5f7920264a792065->enter($__internal_ecd52ae76280661ffea9b8b8d88fe05b4eb1166c1a99f44c5f7920264a792065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd52ae76280661ffea9b8b8d88fe05b4eb1166c1a99f44c5f7920264a792065->leave($__internal_ecd52ae76280661ffea9b8b8d88fe05b4eb1166c1a99f44c5f7920264a792065_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fed0a88f990a39682239f56537f1fbcbee76a930e2266c52850c16a634849061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed0a88f990a39682239f56537f1fbcbee76a930e2266c52850c16a634849061->enter($__internal_fed0a88f990a39682239f56537f1fbcbee76a930e2266c52850c16a634849061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fed0a88f990a39682239f56537f1fbcbee76a930e2266c52850c16a634849061->leave($__internal_fed0a88f990a39682239f56537f1fbcbee76a930e2266c52850c16a634849061_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee2433a49106dae0d66282770c94d5662af0921c9c3d5ae5009d7a069d06780c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2433a49106dae0d66282770c94d5662af0921c9c3d5ae5009d7a069d06780c->enter($__internal_ee2433a49106dae0d66282770c94d5662af0921c9c3d5ae5009d7a069d06780c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee2433a49106dae0d66282770c94d5662af0921c9c3d5ae5009d7a069d06780c->leave($__internal_ee2433a49106dae0d66282770c94d5662af0921c9c3d5ae5009d7a069d06780c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f177419f75cc2ae3fcb8fe1e56a6cc40f50278f482c074ff6b986b33bcdfb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f177419f75cc2ae3fcb8fe1e56a6cc40f50278f482c074ff6b986b33bcdfb7->enter($__internal_20f177419f75cc2ae3fcb8fe1e56a6cc40f50278f482c074ff6b986b33bcdfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_20f177419f75cc2ae3fcb8fe1e56a6cc40f50278f482c074ff6b986b33bcdfb7->leave($__internal_20f177419f75cc2ae3fcb8fe1e56a6cc40f50278f482c074ff6b986b33bcdfb7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/user/Desktop/OMEGA/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
