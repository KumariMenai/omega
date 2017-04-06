<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_767b7d06288d7d508d20502b625ebe724efbe92784cd7d7855acff6eeccadcf9 extends Twig_Template
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
        $__internal_d12b9eb236532806b3928d84db93aec91698021001d6bbdf97fa7b6cf7a0f5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12b9eb236532806b3928d84db93aec91698021001d6bbdf97fa7b6cf7a0f5ef->enter($__internal_d12b9eb236532806b3928d84db93aec91698021001d6bbdf97fa7b6cf7a0f5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d12b9eb236532806b3928d84db93aec91698021001d6bbdf97fa7b6cf7a0f5ef->leave($__internal_d12b9eb236532806b3928d84db93aec91698021001d6bbdf97fa7b6cf7a0f5ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8fb9a3cac3407798a24623c5ebb6f49db069746392817f277b562fe35c716c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb9a3cac3407798a24623c5ebb6f49db069746392817f277b562fe35c716c6a->enter($__internal_8fb9a3cac3407798a24623c5ebb6f49db069746392817f277b562fe35c716c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8fb9a3cac3407798a24623c5ebb6f49db069746392817f277b562fe35c716c6a->leave($__internal_8fb9a3cac3407798a24623c5ebb6f49db069746392817f277b562fe35c716c6a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_100a44f289cfe0acc518d98f8d3b0c4ed660e0ff514bd9bdc2dfbca8e0ae8154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100a44f289cfe0acc518d98f8d3b0c4ed660e0ff514bd9bdc2dfbca8e0ae8154->enter($__internal_100a44f289cfe0acc518d98f8d3b0c4ed660e0ff514bd9bdc2dfbca8e0ae8154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_100a44f289cfe0acc518d98f8d3b0c4ed660e0ff514bd9bdc2dfbca8e0ae8154->leave($__internal_100a44f289cfe0acc518d98f8d3b0c4ed660e0ff514bd9bdc2dfbca8e0ae8154_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f2d7d0a7060526fa4eb16a2b3e10e8bdba6ad1b2c3383ddb4318f12b96c0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f2d7d0a7060526fa4eb16a2b3e10e8bdba6ad1b2c3383ddb4318f12b96c0a3->enter($__internal_20f2d7d0a7060526fa4eb16a2b3e10e8bdba6ad1b2c3383ddb4318f12b96c0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_20f2d7d0a7060526fa4eb16a2b3e10e8bdba6ad1b2c3383ddb4318f12b96c0a3->leave($__internal_20f2d7d0a7060526fa4eb16a2b3e10e8bdba6ad1b2c3383ddb4318f12b96c0a3_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Applications\\Omega\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
