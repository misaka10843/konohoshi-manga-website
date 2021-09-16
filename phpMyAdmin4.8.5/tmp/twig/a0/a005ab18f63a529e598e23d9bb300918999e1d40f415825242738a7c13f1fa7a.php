<?php

/* server/databases/index.twig */
class __TwigTemplate_aef3e04e39422f09d49614f98d1f2acc95ac7f53c459969ef975f49f14cbe48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $this->loadTemplate("server/sub_page_header.twig", "server/databases/index.twig", 2)->display(["type" => ((        // line 3
($context["dbstats"] ?? null)) ? ("database_statistics") : ("databases"))]);
        // line 5
        echo "
";
        // line 7
        if (($context["show_create_db"] ?? null)) {
            // line 8
            echo "    ";
            $this->loadTemplate("server/databases/create.twig", "server/databases/index.twig", 8)->display(["is_create_db_priv" =>             // line 9
($context["is_create_db_priv"] ?? null), "dbstats" =>             // line 10
($context["dbstats"] ?? null), "db_to_create" =>             // line 11
($context["db_to_create"] ?? null), "server_collation" =>             // line 12
($context["server_collation"] ?? null), "dbi" =>             // line 13
($context["dbi"] ?? null), "disable_is" =>             // line 14
($context["disable_is"] ?? null)]);
        }
        // line 17
        echo "
";
        // line 18
        $this->loadTemplate("filter.twig", "server/databases/index.twig", 18)->display(["filter_value" => ""]);
        // line 19
        echo "
";
        // line 21
        if ( !(null === ($context["databases"] ?? null))) {
            // line 22
            echo "    ";
            echo ($context["databases"] ?? null);
            echo "
";
        } else {
            // line 24
            echo "    <p>";
            echo _gettext("No databases");
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "server/databases/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 24,  47 => 22,  45 => 21,  42 => 19,  40 => 18,  37 => 17,  34 => 14,  33 => 13,  32 => 12,  31 => 11,  30 => 10,  29 => 9,  27 => 8,  25 => 7,  22 => 5,  20 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/databases/index.twig", "C:\\Users\\misak\\Desktop\\manga\\phpMyAdmin4.8.5\\templates\\server\\databases\\index.twig");
    }
}
