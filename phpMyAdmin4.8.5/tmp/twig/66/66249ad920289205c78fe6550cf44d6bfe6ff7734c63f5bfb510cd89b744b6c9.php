<?php

/* radio_fields.twig */
class __TwigTemplate_8d22233f2de494b3833e60533fab4c4ec61774ae2eb7693e6121e20602513034 extends Twig_Template
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
        if ( !twig_test_empty(($context["class"] ?? null))) {
            // line 2
            echo "<div class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\">
";
        }
        // line 4
        echo "<input type=\"radio\" name=\"";
        echo twig_escape_filter($this->env, ($context["html_field_name"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo ($context["html_field_id"] ?? null);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["choice_value"] ?? null), "html", null, true);
        echo "\"";
        echo ((($context["checked"] ?? null)) ? (" checked=\"checked\"") : (""));
        echo " />
<label for=\"";
        // line 5
        echo ($context["html_field_id"] ?? null);
        echo "\">";
        echo ((($context["escape_label"] ?? null)) ? (twig_escape_filter($this->env, ($context["choice_label"] ?? null))) : (($context["choice_label"] ?? null)));
        echo "</label>
";
        // line 6
        if (($context["is_line_break"] ?? null)) {
            // line 7
            echo "<br />
";
        }
        // line 9
        if ( !twig_test_empty(($context["class"] ?? null))) {
            // line 10
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "radio_fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  50 => 9,  46 => 7,  44 => 6,  38 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "radio_fields.twig", "C:\\Users\\misak\\Desktop\\manga\\phpMyAdmin4.8.5\\templates\\radio_fields.twig");
    }
}
