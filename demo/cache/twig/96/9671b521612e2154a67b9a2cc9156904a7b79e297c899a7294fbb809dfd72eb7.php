<?php

/* @particles/imagegrid.html.twig */
class __TwigTemplate_8759d33bd802476a254c8ede736cb85ea23cc0b31f86aaf8ada001a1fb1919b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/imagegrid.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "load", array(0 => "lightcase.init"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_particle($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 8
        echo "
<div class=\"g-imagegrid ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">

    ";
        // line 11
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array())) {
            echo "<div class=\"g-imagegrid-desc\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array());
            echo "</div>";
        }
        // line 12
        echo "
    <div class=\"g-imagegrid-wrapper ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "cols", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "html", null, true);
        echo "\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "imagegriditems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["imagegriditem"]) {
            // line 15
            echo "        <div class=\"g-imagegrid-item\">
            <a class=\"g-imagegrid-link\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["imagegriditem"], "image", array())));
            echo "\" data-rel=\"lightcase";
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "album", array())) {
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "album", array()), "html", null, true);
            }
            echo "\">
                ";
            // line 17
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "g-imagegrid-captions")) {
                // line 18
                echo "                ";
            }
            // line 19
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["imagegriditem"], "image", array())));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagegriditem"], "caption", array()));
            echo "\" />
                <div class=\"indicator\">
                    <div>
                        ";
            // line 22
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "g-imagegrid-standard")) {
                // line 23
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["imagegriditem"], "caption", array()), "html", null, true);
                echo "
                        ";
            } else {
                // line 25
                echo "                        <div class=\"g-imagegrid-caption\">
                            ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["imagegriditem"], "caption", array()), "html", null, true);
                echo "
                        </div>
                        ";
            }
            // line 29
            echo "                    </div>
                    <span class=\"g-imagegrid-plus\">+</span>
                </div>
            </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagegriditem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    </div>
</div>

";
    }

    // line 41
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 42
        echo "<script type=\"text/javascript\">
window.getSize = function() {
    return {
        x: window.innerWidth,
        y: window.innerHeight
    }
};
</script>
";
    }

    public function getTemplateName()
    {
        return "@particles/imagegrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  133 => 41,  125 => 35,  114 => 29,  108 => 26,  105 => 25,  99 => 23,  97 => 22,  88 => 19,  85 => 18,  83 => 17,  74 => 16,  71 => 15,  67 => 14,  61 => 13,  58 => 12,  52 => 11,  47 => 9,  44 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
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

{% do gantry.load('lightcase.init') %}

{% block particle %}

{% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

<div class=\"g-imagegrid {{ particle.class|e }}\">

    {% if particle.desc %}<div class=\"g-imagegrid-desc\">{{ particle.desc|raw }}</div>{% endif %}

    <div class=\"g-imagegrid-wrapper {{ particle.cols|e }} {{ particle.layout }}\">
        {% for imagegriditem in particle.imagegriditems %}
        <div class=\"g-imagegrid-item\">
            <a class=\"g-imagegrid-link\" href=\"{{ url(imagegriditem.image)|e }}\" data-rel=\"lightcase{% if particle.album %}:{{ particle.album }}{% endif %}\">
                {% if particle.layout == 'g-imagegrid-captions' %}
                {% endif %}
                <img src=\"{{ url(imagegriditem.image)|e }}\" alt=\"{{ imagegriditem.caption|e }}\" />
                <div class=\"indicator\">
                    <div>
                        {% if particle.layout == 'g-imagegrid-standard' %}
                        {{ imagegriditem.caption }}
                        {% else %}
                        <div class=\"g-imagegrid-caption\">
                            {{ imagegriditem.caption }}
                        </div>
                        {% endif %}
                    </div>
                    <span class=\"g-imagegrid-plus\">+</span>
                </div>
            </a>
        </div>
        {% endfor %}

    </div>
</div>

{% endblock %}

{% block javascript_footer %}
<script type=\"text/javascript\">
window.getSize = function() {
    return {
        x: window.innerWidth,
        y: window.innerHeight
    }
};
</script>
{% endblock %}
", "@particles/imagegrid.html.twig", "/var/www/vhosts/smartboater.ca/httpdocs/demo/user/themes/rt_protean/particles/imagegrid.html.twig");
    }
}
