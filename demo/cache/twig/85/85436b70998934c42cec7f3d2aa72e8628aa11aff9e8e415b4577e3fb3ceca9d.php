<?php

/* @particles/owlcarousel/standard.html.twig */
class __TwigTemplate_fdf1924d0561efddbb69ff046839cf35263eb231a45bd898fceb0eec4582b472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@particles/owlcarousel.html.twig", "@particles/owlcarousel/standard.html.twig", 1);
        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@particles/owlcarousel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_layout($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo " g-owlcarousel-layout-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()));
        echo " g-owlcarousel-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "displayitems", array()), "html", null, true);
        echo "-items\">
    ";
        // line 6
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array()))) {
            // line 7
            echo "    <div class=\"g-grid\">
        <div class=\"g-block\">
            <div class=\"g-content g-owlcarousel-header\">
                ";
            // line 10
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
                echo "<h2 class=\"g-title\">";
                echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
                echo "</h2>";
            }
            // line 11
            echo "                ";
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array())) {
                echo "<div class=\"g-owlcarousel-description\">";
                echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array());
                echo "</div>";
            }
            // line 12
            echo "            </div>
        </div>
    </div>
    ";
        }
        // line 16
        echo "    <div id=\"g-owlcarousel-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" data-owlcarousel-id=\"g-owlcarousel-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"g-owlcarousel owl-carousel ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "width", array()));
        echo "\">

        ";
        // line 18
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
            // line 19
            echo "        <div class=\"item\">
            ";
            // line 20
            if ($this->getAttribute($context["item"], "image", array())) {
                // line 21
                echo "            <div class=\"image\" style=\"background-image: url('";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo "');\">
                <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                echo "\" />
            </div>
            ";
            }
            // line 25
            echo "
            ";
            // line 26
            if (($this->getAttribute($context["item"], "video", array()) && ($this->getAttribute($context["item"], "videosource", array()) == "external"))) {
                // line 27
                echo "            <div class=\"video\" id=\"video-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                <a class=\"owl-video\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "video", array())));
                echo "\"></a>
            </div>
            ";
            }
            // line 31
            echo "
            ";
            // line 32
            if (($this->getAttribute($context["item"], "videolocal", array()) && ($this->getAttribute($context["item"], "videosource", array()) == "local"))) {
                // line 33
                echo "            <div class=\"video\" id=\"video-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                <video ";
                // line 34
                if ($this->getAttribute($context["item"], "videothumb", array())) {
                    echo "poster=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "videothumb", array())));
                    echo "\"";
                }
                echo "  ";
                if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "videoloop", array()) == "enabled")) {
                    echo "loop";
                }
                echo ">
                    <source src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "videolocal", array())));
                echo "\" type=\"video/mp4\">
                    </video>
                    <div class=\"owl-videolocal-play-icon\"></div>
                </div>
                ";
            }
            // line 40
            echo "
                ";
            // line 41
            if ((((($this->getAttribute($context["item"], "subtitle", array()) || $this->getAttribute($context["item"], "title", array())) || $this->getAttribute($context["item"], "desc", array())) || $this->getAttribute($context["item"], "link", array())) || $this->getAttribute($context["item"], "author", array()))) {
                // line 42
                echo "                <div class=\"g-owlcarousel-content\">
                    ";
                // line 43
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo "<div class=\"g-owlcarousel-item-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</div>";
                }
                // line 44
                echo "                    <div class=\"g-owlcarousel-item-subtitle\">";
                if ($this->getAttribute($context["item"], "subtitle", array())) {
                    echo $this->getAttribute($context["item"], "subtitle", array());
                }
                // line 45
                echo "                        ";
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 46
                    echo "                        <div class=\"g-owlcarousel-item-link\">
                            <a target=\"";
                    // line 47
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" class=\"g-owlcarousel-item-button button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\">
                                ";
                    // line 48
                    echo $this->getAttribute($context["item"], "linktext", array());
                    echo "
                            </a>
                        </div>
                        ";
                }
                // line 52
                echo "                    </div>

                    ";
                // line 54
                if ($this->getAttribute($context["item"], "desc", array())) {
                    echo "<div class=\"g-owlcarousel-item-desc\">";
                    echo $this->getAttribute($context["item"], "desc", array());
                    echo "</div>";
                }
                // line 55
                echo "
                    ";
                // line 56
                if ($this->getAttribute($context["item"], "author", array())) {
                    // line 57
                    echo "                    <div class=\"g-owlcarousel-author\">
                        ";
                    // line 58
                    if ($this->getAttribute($context["item"], "authorimage", array())) {
                        // line 59
                        echo "                        <span class=\"author-image\">
                            <img src=\"";
                        // line 60
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "authorimage", array())));
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()));
                        echo "\" />
                        </span>
                        ";
                    }
                    // line 63
                    echo "                        ";
                    if ($this->getAttribute($context["item"], "author", array())) {
                        echo "<span class=\"author-name\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()));
                        echo "</span>";
                    }
                    // line 64
                    echo "                    </div>
                    ";
                }
                // line 66
                echo "                </div>
                ";
            }
            // line 68
            echo "            </div>
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
        // line 70
        echo "        </div>
        <div class=\"g-container-wrapper-panel\">
            <div class=\"g-owlcarousel-panel-container\" id=\"g-owlcarousel-panel-";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">

                ";
        // line 74
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
            // line 75
            echo "                <div class=\"g-owlcarousel-panel ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "selected";
            }
            echo "\" id=\"g-owlcarousel-panel-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                    <div class=\"g-owlcarousel-panel-link\">
                        ";
            // line 77
            if ($this->getAttribute($context["item"], "title", array())) {
                echo "<span class=\"g-owlcarousel-panel-title\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</span>";
            }
            // line 78
            echo "                        ";
            if ($this->getAttribute($context["item"], "icon", array())) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 79
            echo "                    </div>
                </div>
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
        // line 82
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 88
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 89
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
<script type=\"text/javascript\">
jQuery(window).load(function() {
    var owl";
        // line 92
        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["id"]) ? $context["id"] : null), array("-" => "_")), "html", null, true);
        echo " = jQuery('#g-owlcarousel-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
    owl";
        // line 93
        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["id"]) ? $context["id"] : null), array("-" => "_")), "html", null, true);
        echo ".on('changed.owl.carousel', function(event) {
        var currentItem = \"#g-owlcarousel-panel-";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo " #g-owlcarousel-panel-\" + (event.item.index + 1);
        jQuery(currentItem).trigger(\"click\");
    })
    ";
        // line 97
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "nav", array()) == "enabled")) {
            // line 98
            echo "    jQuery('#g-owlcarousel-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "-controls .owl-next').click(function() {
        owl";
            // line 99
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["id"]) ? $context["id"] : null), array("-" => "_")), "html", null, true);
            echo ".trigger('next.owl.carousel');
    })
    jQuery('#g-owlcarousel-";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "-controls .owl-prev').click(function() {
        owl";
            // line 102
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["id"]) ? $context["id"] : null), array("-" => "_")), "html", null, true);
            echo ".trigger('prev.owl.carousel');
    })
    ";
        }
        // line 105
        echo "});

var owlPanelItems";
        // line 107
        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["id"]) ? $context["id"] : null), array("-" => "_")), "html", null, true);
        echo " = jQuery('#g-owlcarousel-panel-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo " .g-owlcarousel-panel');
";
        // line 108
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
            // line 109
            echo "jQuery(\"#g-owlcarousel-panel-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " #g-owlcarousel-panel-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\").click(function(event) {
    var owl";
            // line 110
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["id"]) ? $context["id"] : null), array("-" => "_")), "html", null, true);
            echo " = jQuery('#g-owlcarousel-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "');
    owlPanelItems";
            // line 111
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["id"]) ? $context["id"] : null), array("-" => "_")), "html", null, true);
            echo ".removeClass('selected');
    var toIndex = ";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " - 1;
    owl";
            // line 113
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["id"]) ? $context["id"] : null), array("-" => "_")), "html", null, true);
            echo ".trigger('to.owl.carousel', [toIndex, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " - 1, true]);
    jQuery(this).addClass('selected');
});
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
        // line 117
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel/standard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 117,  427 => 113,  423 => 112,  419 => 111,  413 => 110,  406 => 109,  389 => 108,  383 => 107,  379 => 105,  373 => 102,  369 => 101,  364 => 99,  359 => 98,  357 => 97,  351 => 94,  347 => 93,  341 => 92,  335 => 89,  332 => 88,  324 => 82,  308 => 79,  301 => 78,  295 => 77,  285 => 75,  268 => 74,  263 => 72,  259 => 70,  244 => 68,  240 => 66,  236 => 64,  229 => 63,  221 => 60,  218 => 59,  216 => 58,  213 => 57,  211 => 56,  208 => 55,  202 => 54,  198 => 52,  191 => 48,  183 => 47,  180 => 46,  177 => 45,  172 => 44,  166 => 43,  163 => 42,  161 => 41,  158 => 40,  150 => 35,  138 => 34,  133 => 33,  131 => 32,  128 => 31,  122 => 28,  117 => 27,  115 => 26,  112 => 25,  104 => 22,  99 => 21,  97 => 20,  94 => 19,  77 => 18,  67 => 16,  61 => 12,  54 => 11,  48 => 10,  43 => 7,  41 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@particles/owlcarousel.html.twig' %}

{# Standard Layout #}
{% block layout %}
<div class=\"{{ particle.class|e }} g-owlcarousel-layout-{{ particle.layout|e }} g-owlcarousel-{{ particle.displayitems }}-items\">
    {% if particle.title or particle.description %}
    <div class=\"g-grid\">
        <div class=\"g-block\">
            <div class=\"g-content g-owlcarousel-header\">
                {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}
                {% if particle.description %}<div class=\"g-owlcarousel-description\">{{ particle.description|raw }}</div>{% endif %}
            </div>
        </div>
    </div>
    {% endif %}
    <div id=\"g-owlcarousel-{{ id }}\" data-owlcarousel-id=\"g-owlcarousel-{{ id }}\" class=\"g-owlcarousel owl-carousel {{ particle.width|e }}\">

        {% for item in particle.items %}
        <div class=\"item\">
            {% if item.image %}
            <div class=\"image\" style=\"background-image: url('{{ url(item.image)|e }}');\">
                <img src=\"{{ url(item.image)|e }}\" alt=\"{{ item.title|e }}\" />
            </div>
            {% endif %}

            {% if item.video and item.videosource == 'external' %}
            <div class=\"video\" id=\"video-item-{{ loop.index }}\">
                <a class=\"owl-video\" href=\"{{ url(item.video)|e }}\"></a>
            </div>
            {% endif %}

            {% if item.videolocal and item.videosource == 'local' %}
            <div class=\"video\" id=\"video-item-{{ loop.index }}\">
                <video {% if item.videothumb %}poster=\"{{ url(item.videothumb)|e }}\"{% endif %}  {% if particle.videoloop == 'enabled' %}loop{% endif %}>
                    <source src=\"{{ url(item.videolocal)|e }}\" type=\"video/mp4\">
                    </video>
                    <div class=\"owl-videolocal-play-icon\"></div>
                </div>
                {% endif %}

                {% if item.subtitle or item.title or item.desc or item.link or item.author %}
                <div class=\"g-owlcarousel-content\">
                    {% if item.title %}<div class=\"g-owlcarousel-item-title\">{{ item.title|raw }}</div>{% endif %}
                    <div class=\"g-owlcarousel-item-subtitle\">{% if item.subtitle %}{{ item.subtitle|raw }}{% endif %}
                        {% if item.link %}
                        <div class=\"g-owlcarousel-item-link\">
                            <a target=\"{{ item.buttontarget|default('_self')|e }}\" class=\"g-owlcarousel-item-button button {{ item.buttonclass|e }}\" href=\"{{ item.link|e }}\">
                                {{ item.linktext|raw }}
                            </a>
                        </div>
                        {% endif %}
                    </div>

                    {% if item.desc %}<div class=\"g-owlcarousel-item-desc\">{{ item.desc|raw }}</div>{% endif %}

                    {% if item.author %}
                    <div class=\"g-owlcarousel-author\">
                        {% if item.authorimage %}
                        <span class=\"author-image\">
                            <img src=\"{{ url(item.authorimage)|e }}\" alt=\"{{ item.author|e }}\" />
                        </span>
                        {% endif %}
                        {% if item.author %}<span class=\"author-name\">{{ item.author|e }}</span>{% endif %}
                    </div>
                    {% endif %}
                </div>
                {% endif %}
            </div>
            {% endfor %}
        </div>
        <div class=\"g-container-wrapper-panel\">
            <div class=\"g-owlcarousel-panel-container\" id=\"g-owlcarousel-panel-{{ id }}\">

                {% for item in particle.items %}
                <div class=\"g-owlcarousel-panel {% if loop.first %}selected{% endif %}\" id=\"g-owlcarousel-panel-{{ loop.index }}\">
                    <div class=\"g-owlcarousel-panel-link\">
                        {% if item.title %}<span class=\"g-owlcarousel-panel-title\">{{ item.title|raw }}</span>{% endif %}
                        {% if item.icon %}<i class=\"{{ item.icon }}\"></i>{% endif %}
                    </div>
                </div>
                {% endfor %}

            </div>
        </div>
    </div>
{% endblock %}

{% block javascript_footer %}
{{ parent() }}
<script type=\"text/javascript\">
jQuery(window).load(function() {
    var owl{{ id|replace({'-':'_'}) }} = jQuery('#g-owlcarousel-{{ id }}');
    owl{{ id|replace({'-':'_'}) }}.on('changed.owl.carousel', function(event) {
        var currentItem = \"#g-owlcarousel-panel-{{ id }} #g-owlcarousel-panel-\" + (event.item.index + 1);
        jQuery(currentItem).trigger(\"click\");
    })
    {% if particle.nav == 'enabled' %}
    jQuery('#g-owlcarousel-{{ id }}-controls .owl-next').click(function() {
        owl{{ id|replace({'-':'_'}) }}.trigger('next.owl.carousel');
    })
    jQuery('#g-owlcarousel-{{ id }}-controls .owl-prev').click(function() {
        owl{{ id|replace({'-':'_'}) }}.trigger('prev.owl.carousel');
    })
    {% endif %}
});

var owlPanelItems{{ id|replace({'-':'_'}) }} = jQuery('#g-owlcarousel-panel-{{ id }} .g-owlcarousel-panel');
{% for item in particle.items %}
jQuery(\"#g-owlcarousel-panel-{{ id }} #g-owlcarousel-panel-{{ loop.index }}\").click(function(event) {
    var owl{{ id|replace({'-':'_'}) }} = jQuery('#g-owlcarousel-{{ id }}');
    owlPanelItems{{ id|replace({'-':'_'}) }}.removeClass('selected');
    var toIndex = {{ loop.index }} - 1;
    owl{{ id|replace({'-':'_'}) }}.trigger('to.owl.carousel', [toIndex, {{ loop.index }} - 1, true]);
    jQuery(this).addClass('selected');
});
{% endfor %}
</script>
{% endblock %}
", "@particles/owlcarousel/standard.html.twig", "/var/www/vhosts/smartboater.ca/httpdocs/demo/user/themes/rt_protean/particles/owlcarousel/standard.html.twig");
    }
}
