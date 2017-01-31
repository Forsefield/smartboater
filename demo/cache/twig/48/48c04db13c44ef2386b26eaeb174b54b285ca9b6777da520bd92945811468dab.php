<?php

/* @particles/owlcarousel.html.twig */
class __TwigTemplate_220f56a4348cc00b6a510a0e230f2edf88ada098da47361d8c6c768127aeecda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/owlcarousel.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
            'layout' => array($this, 'block_layout'),
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
        echo "    ";
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array();
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 5
        echo "        ";
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
            // line 6
            echo "            ";
            if ($this->getAttribute($context["item"], "videothumb", array())) {
                // line 7
                echo "                <style>
                    #g-owlcarousel-";
                // line 8
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo " #video-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " .owl-video-tn {
                        background: url('";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "videothumb", array())));
                echo "') !important;
                        background-size: cover !important;
                    }
                    #g-owlcarousel-";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo " #video-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " .owl-video-tn img {
                        opacity: 0;
                    }
                </style>
            ";
            }
            // line 17
            echo "        ";
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
        // line 18
        echo "    ";
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('layout', $context, $blocks);
    }

    public function block_layout($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        // line 22
        echo "        ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "source", array()) && ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "source", array()) != "particle"))) {
            // line 23
            echo "            ";
            $this->loadTemplate((((("@particles/owlcarousel/" . $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array())) . "-") . $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "source", array())) . ".html.twig"), "@particles/owlcarousel.html.twig", 23)->display($context);
            // line 24
            echo "        ";
        } else {
            // line 25
            echo "            ";
            $this->loadTemplate((("@particles/owlcarousel/" . $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array())) . ".html.twig"), "@particles/owlcarousel.html.twig", 25)->display($context);
            // line 26
            echo "        ";
        }
        // line 27
        echo "
    ";
    }

    // line 31
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 32
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owlcarousel.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    jQuery(window).load(function() {
        var owl";
        // line 35
        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["id"]) ? $context["id"] : null), array("-" => "_")), "html", null, true);
        echo " = jQuery('#g-owlcarousel-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
        owl";
        // line 36
        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["id"]) ? $context["id"] : null), array("-" => "_")), "html", null, true);
        echo ".owlCarousel({
            items: ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "displayitems", array()), "html", null, true);
        echo ",
            rtl: ";
        // line 38
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "page", array()), "direction", array()) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
            ";
        // line 39
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animateOut", array()) && ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animateOut", array()) != "default"))) {
            // line 40
            echo "            animateOut: '";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animateOut", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animateOut", array()), "fadeOut")) : ("fadeOut")));
            echo "',
            ";
        }
        // line 42
        echo "            ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animateIn", array()) && ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animateIn", array()) != "default"))) {
            // line 43
            echo "            animateIn: '";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animateIn", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animateIn", array()), "fadeIn")) : ("fadeIn")));
            echo "',
            ";
        }
        // line 45
        echo "            ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "nav", array()) == "enabled")) {
            // line 46
            echo "            nav: true,
            navText: ['";
            // line 47
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "prevText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "prevText", array()), "<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "nextText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "nextText", array()), "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "'],
            ";
        } else {
            // line 49
            echo "            nav: false,
            ";
        }
        // line 51
        echo "            video:true,
            videoLoop: ";
        // line 52
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "videoloop", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
            ";
        // line 53
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "dots", array()) == "enabled")) {
            // line 54
            echo "            dots: true,
            ";
        } else {
            // line 56
            echo "            dots: false,
            ";
        }
        // line 58
        echo "            ";
        if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "loop", array()) == "enabled") && ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "testimonial"))) {
            // line 59
            echo "            loop: true,
            ";
        } else {
            // line 61
            echo "            loop: false,
            ";
        }
        // line 63
        echo "            ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()) == "enabled")) {
            // line 64
            echo "            autoplay: true,
            autoplayTimeout: ";
            // line 65
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", array()), "5000")) : ("5000")), "html", null, true);
            echo ",
            ";
            // line 66
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pauseOnHover", array()) == "enabled")) {
                // line 67
                echo "            autoplayHoverPause: true,
            ";
            } else {
                // line 69
                echo "            autoplayHoverPause: false,
            ";
            }
            // line 71
            echo "            ";
        } else {
            // line 72
            echo "            autoplay: false,
            ";
        }
        // line 74
        echo "            ";
        if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "standard") || (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "testimonial") && ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "displayitems", array()) > "1")))) {
            // line 75
            echo "            responsive:{
                0:{
                    items:1,
                },
                750:{
                    items:";
            // line 80
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "displayitems", array()) / 2), (isset($context["ceil"]) ? $context["ceil"] : null)), "html", null, true);
            echo ",
                },
                1300:{
                    items:";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "displayitems", array()), "html", null, true);
            echo "
                }
            },
            ";
        }
        // line 87
        echo "            ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "presets", array()) == "enabled")) {
            // line 88
            echo "            startPosition: '";
            echo twig_escape_filter($this->env, (twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "preset", array()), array("preset" => "")) - 1), "html", null, true);
            echo "',
            ";
        }
        // line 90
        echo "            ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "videoautoplay", array()) == "enabled")) {
            // line 91
            echo "            onInitialized: callback
            ";
        }
        // line 93
        echo "        })

        ";
        // line 95
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "videoautoplay", array()) == "enabled")) {
            // line 96
            echo "        function callback(event) {
             owl";
            // line 97
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["id"]) ? $context["id"] : null), array("-" => "_")), "html", null, true);
            echo ".find('video').get(0).play();
        }
        ";
        }
        // line 100
        echo "    });
    </script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owlcarousel.video.init.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 102,  320 => 100,  314 => 97,  311 => 96,  309 => 95,  305 => 93,  301 => 91,  298 => 90,  292 => 88,  289 => 87,  282 => 83,  276 => 80,  269 => 75,  266 => 74,  262 => 72,  259 => 71,  255 => 69,  251 => 67,  249 => 66,  245 => 65,  242 => 64,  239 => 63,  235 => 61,  231 => 59,  228 => 58,  224 => 56,  220 => 54,  218 => 53,  210 => 52,  207 => 51,  203 => 49,  196 => 47,  193 => 46,  190 => 45,  184 => 43,  181 => 42,  175 => 40,  173 => 39,  165 => 38,  161 => 37,  157 => 36,  151 => 35,  144 => 32,  141 => 31,  136 => 27,  133 => 26,  130 => 25,  127 => 24,  124 => 23,  121 => 22,  119 => 21,  113 => 20,  110 => 19,  106 => 18,  92 => 17,  82 => 12,  76 => 9,  70 => 8,  67 => 7,  64 => 6,  46 => 5,  33 => 4,  30 => 3,  11 => 1,);
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
    {% styles %}
        {% for item in particle.items %}
            {% if item.videothumb %}
                <style>
                    #g-owlcarousel-{{ id }} #video-item-{{ loop.index }} .owl-video-tn {
                        background: url('{{ url(item.videothumb)|e }}') !important;
                        background-size: cover !important;
                    }
                    #g-owlcarousel-{{ id }} #video-item-{{ loop.index }} .owl-video-tn img {
                        opacity: 0;
                    }
                </style>
            {% endif %}
        {% endfor %}
    {% endstyles %}

    {% block layout %}
        {# Include Particle Layouts #}
        {% if particle.source and particle.source != 'particle' %}
            {% include '@particles/owlcarousel/' ~ particle.layout ~ '-' ~ particle.source ~ '.html.twig' %}
        {% else %}
            {% include '@particles/owlcarousel/' ~ particle.layout ~ '.html.twig' %}
        {% endif %}

    {% endblock %}
{% endblock %}

{% block javascript_footer %}
    <script src=\"{{ url('gantry-theme://js/owlcarousel.js') }}\"></script>
    <script type=\"text/javascript\">
    jQuery(window).load(function() {
        var owl{{ id|replace({'-':'_'}) }} = jQuery('#g-owlcarousel-{{ id }}');
        owl{{ id|replace({'-':'_'}) }}.owlCarousel({
            items: {{ particle.displayitems }},
            rtl: {% if gantry.page.direction == 'rtl' %}true{% else %}false{% endif %},
            {% if particle.animateOut and particle.animateOut != 'default' %}
            animateOut: '{{ particle.animateOut|default('fadeOut')|e }}',
            {% endif %}
            {% if particle.animateIn and particle.animateIn != 'default' %}
            animateIn: '{{ particle.animateIn|default('fadeIn')|e }}',
            {% endif %}
            {% if particle.nav == 'enabled' %}
            nav: true,
            navText: ['{{ particle.prevText|default('<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>')|e('js') }}', '{{ particle.nextText|default('<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>')|e('js') }}'],
            {% else %}
            nav: false,
            {% endif %}
            video:true,
            videoLoop: {% if particle.videoloop == 'enabled' %}true{% else %}false{% endif %},
            {% if particle.dots == 'enabled' %}
            dots: true,
            {% else %}
            dots: false,
            {% endif %}
            {% if particle.loop == 'enabled' and particle.layout == \"testimonial\" %}
            loop: true,
            {% else %}
            loop: false,
            {% endif %}
            {% if particle.autoplay == 'enabled' %}
            autoplay: true,
            autoplayTimeout: {{ particle.autoplaySpeed|default('5000') }},
            {% if particle.pauseOnHover == 'enabled' %}
            autoplayHoverPause: true,
            {% else %}
            autoplayHoverPause: false,
            {% endif %}
            {% else %}
            autoplay: false,
            {% endif %}
            {% if particle.layout == \"standard\" or particle.layout == \"testimonial\" and particle.displayitems > \"1\" %}
            responsive:{
                0:{
                    items:1,
                },
                750:{
                    items:{{ (particle.displayitems/2)|round(ceil) }},
                },
                1300:{
                    items:{{ particle.displayitems }}
                }
            },
            {% endif %}
            {% if particle.presets == 'enabled' %}
            startPosition: '{{ gantry.theme.preset|replace({'preset':''}) - 1 }}',
            {% endif %}
            {% if particle.videoautoplay == 'enabled' %}
            onInitialized: callback
            {% endif %}
        })

        {% if particle.videoautoplay == 'enabled' %}
        function callback(event) {
             owl{{ id|replace({'-':'_'}) }}.find('video').get(0).play();
        }
        {% endif %}
    });
    </script>
    <script src=\"{{ url('gantry-theme://js/owlcarousel.video.init.js') }}\"></script>
{% endblock %}
", "@particles/owlcarousel.html.twig", "/var/www/vhosts/smartboater.ca/httpdocs/demo/user/themes/rt_protean/particles/owlcarousel.html.twig");
    }
}
