<?php

/* columns_definitions/column_virtuality.twig */
class __TwigTemplate_f180a024901348157fb3b2d0d798602307de65e44e37a6860a573b0aae96bf21 extends Twig_Template
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
        echo "<select name=\"field_virtuality[";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\"
    id=\"field_";
        // line 2
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\"
    class=\"virtuality\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 5
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            // line 6
            if ((($this->getAttribute(($context["column_meta"] ?? null), "Extra", [], "array", true, true) && (            // line 7
$context["key"] != "")) && (strpos($this->getAttribute(            // line 8
($context["column_meta"] ?? null), "Extra", [], "array"), $context["key"]) === 0))) {
                // line 9
                echo "                selected=\"selected\"";
            }
            // line 10
            echo ">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</select>

";
        // line 16
        if ((($context["char_editing"] ?? null) == "textarea")) {
            // line 17
            echo "    ";
            ob_start();
            // line 18
            echo "    <textarea name=\"field_expression[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\"
        cols=\"15\"
        class=\"textfield expression\">
        ";
            // line 21
            echo twig_escape_filter($this->env, ($context["expression"] ?? null), "html", null, true);
            echo "
    </textarea>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } else {
            // line 25
            echo "    <input type=\"text\"
        name=\"field_expression[";
            // line 26
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\"
        size=\"12\"
        value=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["expression"] ?? null), "html", null, true);
            echo "\"
        placeholder=\"";
            // line 29
            echo _gettext("Expression");
            echo "\"
        class=\"textfield expression\" />
";
        }
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_virtuality.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  89 => 28,  84 => 26,  81 => 25,  74 => 21,  67 => 18,  64 => 17,  62 => 16,  58 => 14,  49 => 11,  46 => 10,  43 => 9,  41 => 8,  40 => 7,  39 => 6,  35 => 5,  31 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "columns_definitions/column_virtuality.twig", "C:\\Users\\misak\\Desktop\\manga\\phpMyAdmin4.8.5\\templates\\columns_definitions\\column_virtuality.twig");
    }
}
