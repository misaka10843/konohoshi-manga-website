<?php

/* table/chart/tbl_chart.twig */
class __TwigTemplate_932397de339e2684741d07cb1db8acf39575665da235872b07b3ce65b7df3258 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    url_query = '";
        // line 2
        echo twig_escape_filter($this->env, ($context["url_query"] ?? null), "html", null, true);
        echo "';
</script>
";
        // line 5
        echo "<div id=\"div_view_options\">
    <form method=\"post\" id=\"tblchartform\" action=\"tbl_chart.php\" class=\"ajax\">
        ";
        // line 7
        echo PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        echo "
        <fieldset>
            <legend>
                ";
        // line 10
        echo _gettext("Display chart");
        // line 11
        echo "            </legend>
            <div class=\"chartOption\">
                <div class=\"formelement\">
                    <input type=\"radio\" name=\"chartType\" value=\"bar\" id=\"radio_bar\" />
                    <label for =\"radio_bar\">";
        // line 15
        echo _pgettext(        "Chart type", "Bar");
        echo "</label>
                </div>
                <div class=\"formelement\">
                    <input type=\"radio\" name=\"chartType\" value=\"column\" id=\"radio_column\" />
                    <label for =\"radio_column\">";
        // line 19
        echo _pgettext(        "Chart type", "Column");
        echo "</label>
                </div>
                <div class=\"formelement\">
                    <input type=\"radio\" name=\"chartType\" value=\"line\" id=\"radio_line\" checked=\"checked\" />
                    <label for =\"radio_line\">";
        // line 23
        echo _pgettext(        "Chart type", "Line");
        echo "</label>
                </div>
                <div class=\"formelement\">
                    <input type=\"radio\" name=\"chartType\" value=\"spline\" id=\"radio_spline\" />
                    <label for =\"radio_spline\">";
        // line 27
        echo _pgettext(        "Chart type", "Spline");
        echo "</label>
                </div>
                <div class=\"formelement\">
                    <input type=\"radio\" name=\"chartType\" value=\"area\" id=\"radio_area\" />
                    <label for =\"radio_area\">";
        // line 31
        echo _pgettext(        "Chart type", "Area");
        echo "</label>
                </div>
                <span class=\"span_pie hide\">
                    <input type=\"radio\" name=\"chartType\" value=\"pie\" id=\"radio_pie\" />
                    <label for =\"radio_pie\">";
        // line 35
        echo _pgettext(        "Chart type", "Pie");
        echo "</label>
                </span>
                <span class=\"span_timeline hide\">
                    <input type=\"radio\" name=\"chartType\" value=\"timeline\" id=\"radio_timeline\" />
                    <label for =\"radio_timeline\">";
        // line 39
        echo _pgettext(        "Chart type", "Timeline");
        echo "</label>
                </span>
                <span class=\"span_scatter hide\">
                <input type=\"radio\" name=\"chartType\" value=\"scatter\" id=\"radio_scatter\" />
                <label for =\"radio_scatter\">";
        // line 43
        echo _pgettext(        "Chart type", "Scatter");
        echo "</label>
                </span>
                <br /><br />
                <span class=\"barStacked hide\">
                    <input type=\"checkbox\" name=\"barStacked\" value=\"1\" id=\"checkbox_barStacked\" />
                    <label for =\"checkbox_barStacked\">";
        // line 48
        echo _gettext("Stacked");
        echo "</label>
                </span>
                <br /><br />
                <label for =\"chartTitle\">";
        // line 51
        echo _gettext("Chart title:");
        echo "</label>
                <input type=\"text\" name=\"chartTitle\" id=\"chartTitle\" />
            </div>
            ";
        // line 54
        $context["xaxis"] = null;
        // line 55
        echo "            <div class=\"chartOption\">
                <label for=\"select_chartXAxis\">";
        // line 56
        echo _gettext("X-Axis:");
        echo "</label>
                <select name=\"chartXAxis\" id=\"select_chartXAxis\">
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 59
            echo "                        ";
            if ((($context["xaxis"] ?? null) === null)) {
                // line 60
                echo "                            ";
                $context["xaxis"] = $context["idx"];
                // line 61
                echo "                        ";
            }
            // line 62
            echo "                        ";
            if ((($context["xaxis"] ?? null) === $context["idx"])) {
                // line 63
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</option>
                        ";
            } else {
                // line 65
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</option>
                        ";
            }
            // line 67
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </select>
                <br />
                <label for=\"select_chartSeries\">
                    ";
        // line 71
        echo _gettext("Series:");
        // line 72
        echo "                </label>
                <select name=\"chartSeries\" id=\"select_chartSeries\" multiple=\"multiple\">
                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 75
            echo "                        ";
            if (twig_in_filter($this->getAttribute($this->getAttribute(($context["fields_meta"] ?? null), $context["idx"], [], "array"), "type", []), ($context["numeric_types"] ?? null))) {
                // line 76
                echo "                            ";
                if ((($context["idx"] == ($context["xaxis"] ?? null)) && (($context["numeric_column_count"] ?? null) > 1))) {
                    // line 77
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 79
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                    echo "\" selected=\"selected\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</option>
                            ";
                }
                // line 81
                echo "                        ";
            }
            // line 82
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </select>
                <input type=\"hidden\" name=\"dateTimeCols\" value=\"
                    ";
        // line 85
        $context["date_time_types"] = [0 => "date", 1 => "datetime", 2 => "timestamp"];
        // line 86
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 87
            echo "                        ";
            if (twig_in_filter($this->getAttribute($this->getAttribute(($context["fields_meta"] ?? null), $context["idx"], [], "array"), "type", []), ($context["date_time_types"] ?? null))) {
                // line 88
                echo "                            ";
                echo twig_escape_filter($this->env, ($context["idx"] . " "), "html", null, true);
                echo "
                        ";
            }
            // line 90
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"
                />
                <input type=\"hidden\" name=\"numericCols\" value=\"
                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 94
            echo "                        ";
            if (twig_in_filter($this->getAttribute($this->getAttribute(($context["fields_meta"] ?? null), $context["idx"], [], "array"), "type", []), ($context["numeric_types"] ?? null))) {
                // line 95
                echo "                            ";
                echo twig_escape_filter($this->env, ($context["idx"] . " "), "html", null, true);
                echo "
                        ";
            }
            // line 97
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"
                />
            </div>
            <div class=\"chartOption\">
                <label for=\"xaxis_panel\">
                    ";
        // line 102
        echo _gettext("X-Axis label:");
        // line 103
        echo "                </label>
                <input style=\"margin-top:0;\" type=\"text\" name=\"xaxis_label\" id=\"xaxis_label\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, (((($context["xaxis"] ?? null) ==  -1)) ? (_gettext("X Values")) : ($this->getAttribute(($context["keys"] ?? null), ($context["xaxis"] ?? null), [], "array"))), "html", null, true);
        echo "\" />
                <br />
                <label for=\"yaxis_label\">
                    ";
        // line 107
        echo _gettext("Y-Axis label:");
        // line 108
        echo "                </label>
                <input type=\"text\" name=\"yaxis_label\" id=\"yaxis_label\" value=\"";
        // line 109
        echo _gettext("Y Values");
        echo "\" />
                <br />
            </div>
            <div class=\"clearfloat\"></div>
            <div>
                <input type=\"checkbox\" id=\"chkAlternative\" name=\"chkAlternative\" value=\"alternativeFormat\" />
                <label for=\"chkAlternative\">";
        // line 115
        echo _gettext("Series names are in a column");
        echo "</label>
                <br />
                <label for=\"select_seriesColumn\">
                    ";
        // line 118
        echo _gettext("Series column:");
        // line 119
        echo "                </label>
                <select name=\"chartSeriesColumn\" id=\"select_seriesColumn\" disabled>
                    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 122
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
            echo "\"
                            ";
            // line 123
            if (($context["idx"] == 1)) {
                // line 124
                echo "                                selected=\"selected\"
                            ";
            }
            // line 125
            echo ">
                                ";
            // line 126
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "
                        </option>
                        ";
            // line 128
            $context["series_column"] = $context["idx"];
            // line 129
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                </select>
                <label for=\"select_valueColumn\">
                    ";
        // line 132
        echo _gettext("Value Column:");
        // line 133
        echo "                </label>
                <select name=\"chartValueColumn\" id=\"select_valueColumn\" disabled>
                    ";
        // line 135
        $context["selected"] = false;
        // line 136
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 137
            echo "                        ";
            if (twig_in_filter($this->getAttribute($this->getAttribute(($context["fields_meta"] ?? null), $context["idx"], [], "array"), "type", []), ($context["numeric_types"] ?? null))) {
                // line 138
                echo "                            ";
                if ((( !($context["selected"] ?? null) && ($context["idx"] != ($context["xaxis"] ?? null))) && ($context["idx"] != ($context["series_column"] ?? null)))) {
                    // line 139
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                    echo "\" selected=\"selected\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</option>
                                ";
                    // line 140
                    $context["selected"] = true;
                    // line 141
                    echo "                            ";
                } else {
                    // line 142
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</option>
                            ";
                }
                // line 144
                echo "                        ";
            }
            // line 145
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                </select>
            </div>
            ";
        // line 148
        echo PhpMyAdmin\Util::getStartAndNumberOfRowsPanel(($context["sql_query"] ?? null));
        echo "
            <div class=\"clearfloat\"></div>
            <div id=\"resizer\" style=\"width:600px; height:400px;\">
                <div style=\"position: absolute; right: 10px; top: 10px; cursor: pointer; z-index: 1000;\">
                    <a class=\"disableAjax\" id=\"saveChart\" href=\"#\" download=\"chart.png\">
                        ";
        // line 153
        echo PhpMyAdmin\Util::getImage("b_saveimage", _gettext("Save chart as image"));
        echo "
                    </a>
                </div>
                <div id=\"querychart\" dir=\"ltr\">
                </div>
            </div>
        </fieldset>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "table/chart/tbl_chart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 153,  387 => 148,  383 => 146,  377 => 145,  374 => 144,  366 => 142,  363 => 141,  361 => 140,  354 => 139,  351 => 138,  348 => 137,  343 => 136,  341 => 135,  337 => 133,  335 => 132,  331 => 130,  325 => 129,  323 => 128,  318 => 126,  315 => 125,  311 => 124,  309 => 123,  304 => 122,  300 => 121,  296 => 119,  294 => 118,  288 => 115,  279 => 109,  276 => 108,  274 => 107,  268 => 104,  265 => 103,  263 => 102,  251 => 97,  245 => 95,  242 => 94,  238 => 93,  228 => 90,  222 => 88,  219 => 87,  214 => 86,  212 => 85,  208 => 83,  202 => 82,  199 => 81,  191 => 79,  183 => 77,  180 => 76,  177 => 75,  173 => 74,  169 => 72,  167 => 71,  162 => 68,  156 => 67,  148 => 65,  140 => 63,  137 => 62,  134 => 61,  131 => 60,  128 => 59,  124 => 58,  119 => 56,  116 => 55,  114 => 54,  108 => 51,  102 => 48,  94 => 43,  87 => 39,  80 => 35,  73 => 31,  66 => 27,  59 => 23,  52 => 19,  45 => 15,  39 => 11,  37 => 10,  31 => 7,  27 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table/chart/tbl_chart.twig", "C:\\Users\\misak\\Desktop\\manga\\phpMyAdmin4.8.5\\templates\\table\\chart\\tbl_chart.twig");
    }
}
