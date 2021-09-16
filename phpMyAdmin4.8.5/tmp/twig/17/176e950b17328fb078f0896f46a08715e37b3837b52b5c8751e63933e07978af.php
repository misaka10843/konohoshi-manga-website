<?php

/* start_and_number_of_rows_panel.twig */
class __TwigTemplate_34e43218839ee380161f891f1401a7cd3e6b92aceed9dfb430c876286f8905ba extends Twig_Template
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
        // line 1
        echo "<fieldset>
    <div>
        <label for=\"pos\">";
        // line 3
        echo _gettext("Start row:");
        echo "</label>
        <input type=\"number\" name=\"pos\" min=\"0\" required=\"required\"
            ";
        // line 5
        if ((($context["unlim_num_rows"] ?? null) > 0)) {
            // line 6
            echo "max=\"";
            echo twig_escape_filter($this->env, (($context["unlim_num_rows"] ?? null) - 1), "html", null, true);
            echo "\"";
        }
        // line 8
        echo "            value=\"";
        echo twig_escape_filter($this->env, ($context["pos"] ?? null), "html", null, true);
        echo "\" />

        <label for=\"session_max_rows\">";
        // line 10
        echo _gettext("Number of rows:");
        echo "</label>
        <input type=\"number\" name=\"session_max_rows\" min=\"1\"
               value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
        echo "\" required=\"required\" />
        <input type=\"submit\" name=\"submit\" class=\"Go\"
               value=\"";
        // line 14
        echo _gettext("Go");
        echo "\" />
        <input type=\"hidden\" name=\"sql_query\"
               value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"unlim_num_rows\"
               value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["unlim_num_rows"] ?? null), "html", null, true);
        echo "\" />
    </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "start_and_number_of_rows_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  56 => 16,  51 => 14,  46 => 12,  41 => 10,  35 => 8,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "start_and_number_of_rows_panel.twig", "C:\\Users\\misak\\Desktop\\manga\\phpMyAdmin4.8.5\\templates\\start_and_number_of_rows_panel.twig");
    }
}
