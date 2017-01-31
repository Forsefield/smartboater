<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_388aa97debaddddb27af3a6a915f4b9e1e81836d6b90877fac16c45054b45929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_764f0f347d6e1f5e78b02594d8ff5cab1b96e1a8a10da9cf816b0e93ebc394b0 = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_dab4f8117f247634886f509df42d0715888861ff97af7ad40e432f211441c066 = "5.4") && ('' === $__internal_dab4f8117f247634886f509df42d0715888861ff97af7ad40e432f211441c066 || 0 === strpos($__internal_764f0f347d6e1f5e78b02594d8ff5cab1b96e1a8a10da9cf816b0e93ebc394b0, $__internal_dab4f8117f247634886f509df42d0715888861ff97af7ad40e432f211441c066)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", (isset($context["php_version"]) ? $context["php_version"] : null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
