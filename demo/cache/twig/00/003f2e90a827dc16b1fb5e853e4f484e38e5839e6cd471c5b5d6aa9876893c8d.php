<?php

/* @particles/contenttabs.html.twig */
class __TwigTemplate_baf4f25167240ebb8bde1b644987f2b1fbfbaf7c8e92d2fcdb7957df47fdd333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contenttabs.html.twig", 1);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/juitabs.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 7
    public function block_particle($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
    ";
        // line 9
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 10
        echo "
    <div class=\"g-contenttabs\">
        <div id=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"g-contenttabs-container\">
            <div class=\"g-contenttabs-navigation\">
                <ul class=\"g-contenttabs-tab-wrapper-container\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "                    <li class=\"g-contenttabs-tab-wrapper\">
                        <span class=\"g-contenttabs-tab-wrapper-head\">
                            <a class=\"g-contenttabs-tab\" href=\"#g-contenttab-";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                <span class=\"g-contenttabs-tab-title\">";
            // line 19
            echo $this->getAttribute($context["item"], "tabname", array());
            echo "</span>
                            </a>
                        </span>
                    </li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </ul>
            </div>
            <div class=\"g-contenttabs-tabs\">
                <ul class=\"g-contenttabs-content-wrapper-container\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "                    <li class=\"g-contenttabs-tab-wrapper\">
                        <div class=\"g-contenttabs-tab-wrapper-body\">
                            <div id=\"g-contenttab-";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"g-contenttabs-content\">
                                <div class=\"g-contenttabs-blocks\">
                                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "blocks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 34
                echo "                                    <div class=\"g-contenttabs-block g-contenttabs-block-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "accent", array()), "html", null, true);
                echo "\">
                                        <div class=\"g-contenttabs-block-title\">
                                            ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "title", array()), "html", null, true);
                echo "
                                        </div>
                                        <div class=\"g-contenttabs-block-description\">
                                            ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "description", array()), "html", null, true);
                echo "
                                        </div>
                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                                </div>
                            </div>
                        </div>
                    </li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </ul>
            </div>
        </div>
    </div>

</div>

";
    }

    // line 57
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 58
        echo "<script type=\"text/javascript\">
jQuery(window).load(function(){
    jQuery('#";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').tabs({
        show: {
            ";
        // line 62
        if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array()) == "up") || ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array()) == "down")) || ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array()) == "left")) || ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array()) == "right"))) {
            // line 63
            echo "            effect: 'slide',
            direction: '";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array()), "html", null, true);
            echo "',
            ";
        } else {
            // line 66
            echo "            effect: '";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array()), "slide")) : ("slide")), "html", null, true);
            echo "',
            ";
        }
        // line 68
        echo "            duration: ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "duration", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "duration", array()), "500")) : ("500")), "html", null, true);
        echo "
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "@particles/contenttabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 68,  217 => 66,  212 => 64,  209 => 63,  207 => 62,  202 => 60,  198 => 58,  195 => 57,  184 => 48,  166 => 43,  156 => 39,  150 => 36,  144 => 34,  140 => 33,  135 => 31,  131 => 29,  114 => 28,  108 => 24,  89 => 19,  85 => 18,  81 => 16,  64 => 15,  58 => 12,  54 => 10,  48 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

{% block javascript %}
<script src=\"{{ url('gantry-theme://js/juitabs.js') }}\"></script>
{% endblock %}

{% block particle %}
<div class=\"{{ particle.class|e }}\">
    {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

    <div class=\"g-contenttabs\">
        <div id=\"{{ id }}\" class=\"g-contenttabs-container\">
            <div class=\"g-contenttabs-navigation\">
                <ul class=\"g-contenttabs-tab-wrapper-container\">
                    {% for item in particle.items %}
                    <li class=\"g-contenttabs-tab-wrapper\">
                        <span class=\"g-contenttabs-tab-wrapper-head\">
                            <a class=\"g-contenttabs-tab\" href=\"#g-contenttab-{{ loop.index }}\">
                                <span class=\"g-contenttabs-tab-title\">{{ item.tabname|raw }}</span>
                            </a>
                        </span>
                    </li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"g-contenttabs-tabs\">
                <ul class=\"g-contenttabs-content-wrapper-container\">
                    {% for item in particle.items %}
                    <li class=\"g-contenttabs-tab-wrapper\">
                        <div class=\"g-contenttabs-tab-wrapper-body\">
                            <div id=\"g-contenttab-{{ loop.index }}\" class=\"g-contenttabs-content\">
                                <div class=\"g-contenttabs-blocks\">
                                    {% for block in item.blocks %}
                                    <div class=\"g-contenttabs-block g-contenttabs-block-{{ block.accent }}\">
                                        <div class=\"g-contenttabs-block-title\">
                                            {{ block.title }}
                                        </div>
                                        <div class=\"g-contenttabs-block-description\">
                                            {{ block.description }}
                                        </div>
                                    </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>

</div>

{% endblock %}

{% block javascript_footer %}
<script type=\"text/javascript\">
jQuery(window).load(function(){
    jQuery('#{{ id }}').tabs({
        show: {
            {% if particle.animation == 'up' or particle.animation == 'down' or particle.animation == 'left' or particle.animation == 'right' %}
            effect: 'slide',
            direction: '{{ particle.animation }}',
            {% else %}
            effect: '{{ particle.animation|default('slide') }}',
            {% endif %}
            duration: {{ particle.duration|default('500') }}
        }
    });
});
</script>
{% endblock %}
", "@particles/contenttabs.html.twig", "/var/www/vhosts/smartboater.ca/httpdocs/demo/user/themes/rt_protean/particles/contenttabs.html.twig");
    }
}
