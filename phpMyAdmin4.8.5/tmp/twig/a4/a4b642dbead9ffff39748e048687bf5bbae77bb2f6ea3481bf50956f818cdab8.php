<?php

/* table/search/input_box.twig */
class __TwigTemplate_680807abf978b2f0dac2801a66d14f330479757a38a150daa30759fc8178c7aa extends Twig_Template
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
        if ((($context["foreigners"] ?? null) && call_user_func_array($this->env->getFunction('Relation_searchColumnInForeigners')->getCallable(), [($context["foreigners"] ?? null), ($context["column_name"] ?? null)]))) {
            // line 3
            echo "    ";
            if (twig_test_iterable($this->getAttribute(($context["foreign_data"] ?? null), "disp_row", [], "array"))) {
                // line 4
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "]\"
            id=\"";
                // line 5
                echo twig_escape_filter($this->env, ($context["column_id"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "\">
            ";
                // line 6
                echo call_user_func_array($this->env->getFunction('Relation_foreignDropdown')->getCallable(), [$this->getAttribute(                // line 7
($context["foreign_data"] ?? null), "disp_row", [], "array"), $this->getAttribute(                // line 8
($context["foreign_data"] ?? null), "foreign_field", [], "array"), $this->getAttribute(                // line 9
($context["foreign_data"] ?? null), "foreign_display", [], "array"), "",                 // line 11
($context["foreign_max_limit"] ?? null)]);
                // line 12
                echo "
        </select>
    ";
            } elseif (($this->getAttribute(            // line 14
($context["foreign_data"] ?? null), "foreign_link", [], "array") == true)) {
                // line 15
                echo "        <input type=\"text\"
            id=\"";
                // line 16
                echo twig_escape_filter($this->env, ($context["column_id"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "\"
            name=\"criteriaValues[";
                // line 17
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "]\"
            id=\"field_";
                // line 18
                echo twig_escape_filter($this->env, ($context["column_name_hash"] ?? null), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "]\"
            class=\"textfield\"
            ";
                // line 20
                if ($this->getAttribute(($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true)) {
                    // line 21
                    echo "                value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array"), "html", null, true);
                    echo "\"
            ";
                }
                // line 22
                echo " />
        <a class=\"ajax browse_foreign\" href=\"browse_foreigners.php\" data-post=\"";
                // line 24
                echo PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)], "");
                // line 25
                echo "&amp;field=";
                echo twig_escape_filter($this->env, twig_urlencode_filter(($context["column_name"] ?? null)), "html", null, true);
                echo "&amp;fieldkey=";
                // line 26
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "&amp;fromsearch=1\">
            ";
                // line 27
                echo twig_replace_filter($this->getAttribute(($context["titles"] ?? null), "Browse", [], "array"), ["'" => "\\'"]);
                echo "
        </a>
    ";
            }
        } elseif (twig_in_filter(        // line 30
($context["column_type"] ?? null), PhpMyAdmin\Util::getGISDatatypes())) {
            // line 31
            echo "    <input type=\"text\"
        name=\"criteriaValues[";
            // line 32
            echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
            echo "]\"
        size=\"40\"
        class=\"textfield\"
        id=\"field_";
            // line 35
            echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
            echo "\" />
    ";
            // line 36
            if (($context["in_fbs"] ?? null)) {
                // line 37
                echo "        ";
                $context["edit_url"] = ("gis_data_editor.php" . PhpMyAdmin\Url::getCommon());
                // line 38
                echo "        ";
                $context["edit_str"] = PhpMyAdmin\Util::getIcon("b_edit", _gettext("Edit/Insert"));
                // line 39
                echo "        <span class=\"open_search_gis_editor\">
            ";
                // line 40
                echo PhpMyAdmin\Util::linkOrButton(($context["edit_url"] ?? null), ($context["edit_str"] ?? null), [], "_blank");
                echo "
        </span>
    ";
            }
        } elseif (((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 =         // line 43
($context["column_type"] ?? null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "enum") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a))) || ((is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 =         // line 44
($context["column_type"] ?? null)) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "set") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || 0 === strpos($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))) && ($context["in_zoom_search_edit"] ?? null)))) {
            // line 45
            echo "    ";
            $context["in_zoom_search_edit"] = false;
            // line 46
            echo "    ";
            $context["value"] = twig_split_filter($this->env, twig_replace_filter(twig_slice($this->env, twig_escape_filter($this->env, ($context["column_type"] ?? null)), 5,  -1), ["&#039;" => ""]), ", ");
            // line 47
            echo "    ";
            $context["cnt_value"] = twig_length_filter($this->env, ($context["value"] ?? null));
            // line 48
            echo "    ";
            // line 54
            echo "    ";
            if ((((is_string($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["column_type"] ?? null)) && is_string($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = "enum") && ('' === $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 || 0 === strpos($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217, $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105))) &&  !($context["in_zoom_search_edit"] ?? null)) || ((is_string($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 =             // line 55
($context["column_type"] ?? null)) && is_string($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = "set") && ('' === $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 || 0 === strpos($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779, $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1))) && ($context["in_zoom_search_edit"] ?? null)))) {
                // line 56
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "]\"
            id=\"";
                // line 57
                echo twig_escape_filter($this->env, ($context["column_id"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "\">
    ";
            } else {
                // line 59
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "]\"
            id=\"";
                // line 60
                echo twig_escape_filter($this->env, ($context["column_id"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "\"
            multiple=\"multiple\"
            size=\"";
                // line 62
                echo twig_escape_filter($this->env, min(3, ($context["cnt_value"] ?? null)), "html", null, true);
                echo "\">
    ";
            }
            // line 64
            echo "    ";
            // line 65
            echo "    <option value=\"\"></option>
    ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($context["cnt_value"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 67
                echo "        ";
                if ((($this->getAttribute(($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true) && twig_test_iterable($this->getAttribute(                // line 68
($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array"))) && twig_in_filter($this->getAttribute(                // line 69
($context["value"] ?? null), $context["i"], [], "array"), $this->getAttribute(($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array")))) {
                    // line 70
                    echo "            <option value=\"";
                    echo $this->getAttribute(($context["value"] ?? null), $context["i"], [], "array");
                    echo "\" selected>
                ";
                    // line 71
                    echo $this->getAttribute(($context["value"] ?? null), $context["i"], [], "array");
                    echo "
            </option>
        ";
                } else {
                    // line 74
                    echo "            <option value=\"";
                    echo $this->getAttribute(($context["value"] ?? null), $context["i"], [], "array");
                    echo "\">
                ";
                    // line 75
                    echo $this->getAttribute(($context["value"] ?? null), $context["i"], [], "array");
                    echo "
            </option>
        ";
                }
                // line 78
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    </select>
";
        } else {
            // line 81
            echo "    ";
            $context["the_class"] = "textfield";
            // line 82
            echo "    ";
            if ((($context["column_type"] ?? null) == "date")) {
                // line 83
                echo "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " datefield");
                // line 84
                echo "    ";
            } elseif (((($context["column_type"] ?? null) == "datetime") || (is_string($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["column_type"] ?? null)) && is_string($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = "timestamp") && ('' === $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 || 0 === strpos($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0, $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866))))) {
                // line 85
                echo "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " datetimefield");
                // line 86
                echo "    ";
            } elseif ((is_string($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["column_type"] ?? null)) && is_string($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = "bit") && ('' === $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 || 0 === strpos($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f, $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7)))) {
                // line 87
                echo "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " bit");
                // line 88
                echo "    ";
            }
            // line 89
            echo "    <input type=\"text\"
        name=\"criteriaValues[";
            // line 90
            echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
            echo "]\"
        size=\"40\"
        class=\"";
            // line 92
            echo twig_escape_filter($this->env, ($context["the_class"] ?? null), "html", null, true);
            echo "\"
        id=\"";
            // line 93
            echo twig_escape_filter($this->env, ($context["column_id"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
            echo "\"
        ";
            // line 94
            if ($this->getAttribute(($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true)) {
                // line 95
                echo "           value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array"), "html", null, true);
                echo "\"";
            }
            // line 96
            echo " />
";
        }
    }

    public function getTemplateName()
    {
        return "table/search/input_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 96,  258 => 95,  256 => 94,  251 => 93,  247 => 92,  242 => 90,  239 => 89,  236 => 88,  233 => 87,  230 => 86,  227 => 85,  224 => 84,  221 => 83,  218 => 82,  215 => 81,  211 => 79,  205 => 78,  199 => 75,  194 => 74,  188 => 71,  183 => 70,  181 => 69,  180 => 68,  178 => 67,  174 => 66,  171 => 65,  169 => 64,  164 => 62,  158 => 60,  153 => 59,  147 => 57,  142 => 56,  140 => 55,  138 => 54,  136 => 48,  133 => 47,  130 => 46,  127 => 45,  125 => 44,  124 => 43,  118 => 40,  115 => 39,  112 => 38,  109 => 37,  107 => 36,  103 => 35,  97 => 32,  94 => 31,  92 => 30,  86 => 27,  82 => 26,  78 => 25,  76 => 24,  73 => 22,  67 => 21,  65 => 20,  58 => 18,  54 => 17,  49 => 16,  46 => 15,  44 => 14,  40 => 12,  38 => 11,  37 => 9,  36 => 8,  35 => 7,  34 => 6,  29 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table/search/input_box.twig", "C:\\Users\\misak\\Desktop\\manga\\phpMyAdmin4.8.5\\templates\\table\\search\\input_box.twig");
    }
}
