<?php

/* @particles/simplemenu.html.twig */
class __TwigTemplate_bf42857152ffc428eac0978f1e83dc7e8225158d9a983a41f56f59456d7ebc06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/simplemenu.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"g-simplemenu-particle ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
    ";
        // line 5
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "menus", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 8
            echo "    <div class=\"g-simplemenu-container\">
        <h6>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "title", array()), "html", null, true);
            echo "</h6>
        <ul class=\"g-simplemenu\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "            <li>
                ";
                // line 13
                if ($this->getAttribute($context["item"], "icon", array())) {
                    // line 14
                    echo "                <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                    echo "\"></i>
                ";
                }
                // line 16
                echo "                <a target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_blank")) : ("_blank")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/simplemenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  88 => 19,  72 => 16,  66 => 14,  64 => 13,  61 => 12,  57 => 11,  52 => 9,  49 => 8,  45 => 7,  42 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% block particle %}
<div class=\"g-simplemenu-particle {{ particle.class|e }}\">
    {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

    {% for menu in particle.menus %}
    <div class=\"g-simplemenu-container\">
        <h6>{{ menu.title }}</h6>
        <ul class=\"g-simplemenu\">
            {% for item in menu.items %}
            <li>
                {% if item.icon %}
                <i class=\"{{ item.icon }}\"></i>
                {% endif %}
                <a target=\"{{ item.target|default('_blank') }}\" href=\"{{ item.link|e }}\" title=\"{{ item.title }}\">{{ item.title|raw }}</a>
            </li>
            {% endfor %}
        </ul>
    </div>
{% endfor %}

</div>

{% endblock %}
", "@particles/simplemenu.html.twig", "/var/www/vhosts/smartboater.ca/httpdocs/demo/user/themes/rt_protean/particles/simplemenu.html.twig");
    }
}
