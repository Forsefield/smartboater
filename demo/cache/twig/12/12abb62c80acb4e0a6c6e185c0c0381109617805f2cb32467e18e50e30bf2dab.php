<?php

/* @particles/flipster.html.twig */
class __TwigTemplate_09426154a6340be5e38054160c2d6b3bc3e29c26c3c0ea52951ea3d3b9b4dd5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/flipster.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"";
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
    <div id=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" data-flipster-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" data-flipster-start=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "start", array()), "html", null, true);
        echo "\" data-flipster-fadein=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "fadein", array()), "html", null, true);
        echo "\" data-flipster-loop=\"";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "loop", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-flipster-autoplay=\"";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()), "html", null, true);
        } else {
            echo "false";
        }
        echo "\" data-flipster-pauseonhover=\"";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pauseonhover", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-flipster-style=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "html", null, true);
        echo "\" data-flipster-spacing=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "spacing", array()), "html", null, true);
        echo "\" data-flipster-click=\"";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "click", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-flipster-keyboard=\"";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "keyboard", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-flipster-scrollwheel=\"";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "scrollwheel", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"  data-flipster-touch=\"";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "touch", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" class=\"g-flipster\">
        <div class=\"g-flipster-cards\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 10
            echo "            <div class=\"g-flipster-card g-flipster-card-accent-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "accent", array()), "html", null, true);
            echo "\">
                <div class=\"g-flipster-card-container ";
            // line 11
            if ($this->getAttribute($context["card"], "image", array())) {
                echo "g-flipster-card-image";
            }
            echo "\" ";
            if ($this->getAttribute($context["card"], "width", array())) {
                echo "style=\"width: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "width", array()), "html", null, true);
                echo ";\"";
            }
            echo ">
                    ";
            // line 12
            if ( !$this->getAttribute($context["card"], "image", array())) {
                // line 13
                echo "                    <div class=\"g-flipster-title\">
                        ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "title", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"g-flipster-description\">
                        ";
                // line 17
                echo $this->getAttribute($context["card"], "desc", array());
                echo "
                    </div>
                    ";
                // line 19
                if ($this->getAttribute($context["card"], "buttontext", array())) {
                    // line 20
                    echo "                    <div class=\"g-flipster-button\">
                        <a target=\"";
                    // line 21
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["card"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["card"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "buttonlink", array()));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "buttontext", array()));
                    echo "\" class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "buttonclass", array()));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "buttontext", array()));
                    echo "</a>
                    </div>
                    ";
                }
                // line 24
                echo "                    ";
            } else {
                // line 25
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["card"], "image", array())));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, $this->getAttribute($context["card"], "title", array())), $this->getAttribute($context["card"], "image", array())), "html", null, true);
                echo "\" />
                    ";
            }
            // line 27
            echo "                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>
    </div>

</div>

";
    }

    // line 37
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 38
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.flipster.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.flipster.init.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@particles/flipster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 39,  190 => 38,  187 => 37,  178 => 30,  170 => 27,  162 => 25,  159 => 24,  145 => 21,  142 => 20,  140 => 19,  135 => 17,  129 => 14,  126 => 13,  124 => 12,  112 => 11,  107 => 10,  103 => 9,  46 => 7,  43 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
<div class=\"{{ particle.class|e }}\">
    {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

    <div id=\"{{ id }}\" data-flipster-id=\"{{ id }}\" data-flipster-start=\"{{ particle.start }}\" data-flipster-fadein=\"{{ particle.fadein }}\" data-flipster-loop=\"{% if particle.loop == 'enabled' %}true{% else %}false{% endif %}\" data-flipster-autoplay=\"{% if particle.autoplay > 0 %}{{ particle.autoplay }}{% else %}false{% endif %}\" data-flipster-pauseonhover=\"{% if particle.pauseonhover == 'enabled' %}true{% else %}false{% endif %}\" data-flipster-style=\"{{ particle.style }}\" data-flipster-spacing=\"{{ particle.spacing }}\" data-flipster-click=\"{% if particle.click == 'enabled' %}true{% else %}false{% endif %}\" data-flipster-keyboard=\"{% if particle.keyboard == 'enabled' %}true{% else %}false{% endif %}\" data-flipster-scrollwheel=\"{% if particle.scrollwheel == 'enabled' %}true{% else %}false{% endif %}\"  data-flipster-touch=\"{% if particle.touch == 'enabled' %}true{% else %}false{% endif %}\" class=\"g-flipster\">
        <div class=\"g-flipster-cards\">
            {% for card in particle.items %}
            <div class=\"g-flipster-card g-flipster-card-accent-{{ card.accent }}\">
                <div class=\"g-flipster-card-container {% if card.image %}g-flipster-card-image{% endif %}\" {% if card.width %}style=\"width: {{ card.width }};\"{% endif %}>
                    {% if not card.image %}
                    <div class=\"g-flipster-title\">
                        {{ card.title }}
                    </div>
                    <div class=\"g-flipster-description\">
                        {{ card.desc|raw }}
                    </div>
                    {% if card.buttontext %}
                    <div class=\"g-flipster-button\">
                        <a target=\"{{ card.buttontarget|default('_self')|e }}\" href=\"{{ card.buttonlink|e }}\" title=\"{{ card.buttontext|e }}\" class=\"button {{ card.buttonclass|e }}\">{{ card.buttontext|e }}</a>
                    </div>
                    {% endif %}
                    {% else %}
                    <img src=\"{{ url(card.image)|e }}\" alt=\"{{ card.title|e|default(card.image) }}\" />
                    {% endif %}
                </div>
            </div>
            {% endfor %}
        </div>
    </div>

</div>

{% endblock %}

{% block javascript_footer %}
<script src=\"{{ url('gantry-theme://js/jquery.flipster.js') }}\"></script>
<script src=\"{{ url('gantry-theme://js/jquery.flipster.init.js') }}\"></script>
{% endblock %}
", "@particles/flipster.html.twig", "/var/www/vhosts/smartboater.ca/httpdocs/demo/user/themes/rt_protean/particles/flipster.html.twig");
    }
}
