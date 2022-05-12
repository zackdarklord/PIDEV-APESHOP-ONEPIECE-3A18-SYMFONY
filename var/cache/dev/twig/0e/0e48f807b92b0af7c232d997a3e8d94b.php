<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Back/assets/vendor/tinymce/plugins/noneditable/plugin.js */
class __TwigTemplate_e70ce006bee81155dec64561140fad37 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/noneditable/plugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/noneditable/plugin.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
(function () {
    'use strict';

    var global\$1 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var getNonEditableClass = function (editor) {
      return editor.getParam('noneditable_noneditable_class', 'mceNonEditable');
    };
    var getEditableClass = function (editor) {
      return editor.getParam('noneditable_editable_class', 'mceEditable');
    };
    var getNonEditableRegExps = function (editor) {
      var nonEditableRegExps = editor.getParam('noneditable_regexp', []);
      if (nonEditableRegExps && nonEditableRegExps.constructor === RegExp) {
        return [nonEditableRegExps];
      } else {
        return nonEditableRegExps;
      }
    };

    var hasClass = function (checkClassName) {
      return function (node) {
        return (' ' + node.attr('class') + ' ').indexOf(checkClassName) !== -1;
      };
    };
    var replaceMatchWithSpan = function (editor, content, cls) {
      return function (match) {
        var args = arguments, index = args[args.length - 2];
        var prevChar = index > 0 ? content.charAt(index - 1) : '';
        if (prevChar === '\"') {
          return match;
        }
        if (prevChar === '>') {
          var findStartTagIndex = content.lastIndexOf('<', index);
          if (findStartTagIndex !== -1) {
            var tagHtml = content.substring(findStartTagIndex, index);
            if (tagHtml.indexOf('contenteditable=\"false\"') !== -1) {
              return match;
            }
          }
        }
        return '<span class=\"' + cls + '\" data-mce-content=\"' + editor.dom.encode(args[0]) + '\">' + editor.dom.encode(typeof args[1] === 'string' ? args[1] : args[0]) + '</span>';
      };
    };
    var convertRegExpsToNonEditable = function (editor, nonEditableRegExps, e) {
      var i = nonEditableRegExps.length, content = e.content;
      if (e.format === 'raw') {
        return;
      }
      while (i--) {
        content = content.replace(nonEditableRegExps[i], replaceMatchWithSpan(editor, content, getNonEditableClass(editor)));
      }
      e.content = content;
    };
    var setup = function (editor) {
      var contentEditableAttrName = 'contenteditable';
      var editClass = ' ' + global.trim(getEditableClass(editor)) + ' ';
      var nonEditClass = ' ' + global.trim(getNonEditableClass(editor)) + ' ';
      var hasEditClass = hasClass(editClass);
      var hasNonEditClass = hasClass(nonEditClass);
      var nonEditableRegExps = getNonEditableRegExps(editor);
      editor.on('PreInit', function () {
        if (nonEditableRegExps.length > 0) {
          editor.on('BeforeSetContent', function (e) {
            convertRegExpsToNonEditable(editor, nonEditableRegExps, e);
          });
        }
        editor.parser.addAttributeFilter('class', function (nodes) {
          var i = nodes.length, node;
          while (i--) {
            node = nodes[i];
            if (hasEditClass(node)) {
              node.attr(contentEditableAttrName, 'true');
            } else if (hasNonEditClass(node)) {
              node.attr(contentEditableAttrName, 'false');
            }
          }
        });
        editor.serializer.addAttributeFilter(contentEditableAttrName, function (nodes) {
          var i = nodes.length, node;
          while (i--) {
            node = nodes[i];
            if (!hasEditClass(node) && !hasNonEditClass(node)) {
              continue;
            }
            if (nonEditableRegExps.length > 0 && node.attr('data-mce-content')) {
              node.name = '#text';
              node.type = 3;
              node.raw = true;
              node.value = node.attr('data-mce-content');
            } else {
              node.attr(contentEditableAttrName, null);
            }
          }
        });
      });
    };

    function Plugin () {
      global\$1.add('noneditable', function (editor) {
        setup(editor);
      });
    }

    Plugin();

}());
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/noneditable/plugin.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
(function () {
    'use strict';

    var global\$1 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var getNonEditableClass = function (editor) {
      return editor.getParam('noneditable_noneditable_class', 'mceNonEditable');
    };
    var getEditableClass = function (editor) {
      return editor.getParam('noneditable_editable_class', 'mceEditable');
    };
    var getNonEditableRegExps = function (editor) {
      var nonEditableRegExps = editor.getParam('noneditable_regexp', []);
      if (nonEditableRegExps && nonEditableRegExps.constructor === RegExp) {
        return [nonEditableRegExps];
      } else {
        return nonEditableRegExps;
      }
    };

    var hasClass = function (checkClassName) {
      return function (node) {
        return (' ' + node.attr('class') + ' ').indexOf(checkClassName) !== -1;
      };
    };
    var replaceMatchWithSpan = function (editor, content, cls) {
      return function (match) {
        var args = arguments, index = args[args.length - 2];
        var prevChar = index > 0 ? content.charAt(index - 1) : '';
        if (prevChar === '\"') {
          return match;
        }
        if (prevChar === '>') {
          var findStartTagIndex = content.lastIndexOf('<', index);
          if (findStartTagIndex !== -1) {
            var tagHtml = content.substring(findStartTagIndex, index);
            if (tagHtml.indexOf('contenteditable=\"false\"') !== -1) {
              return match;
            }
          }
        }
        return '<span class=\"' + cls + '\" data-mce-content=\"' + editor.dom.encode(args[0]) + '\">' + editor.dom.encode(typeof args[1] === 'string' ? args[1] : args[0]) + '</span>';
      };
    };
    var convertRegExpsToNonEditable = function (editor, nonEditableRegExps, e) {
      var i = nonEditableRegExps.length, content = e.content;
      if (e.format === 'raw') {
        return;
      }
      while (i--) {
        content = content.replace(nonEditableRegExps[i], replaceMatchWithSpan(editor, content, getNonEditableClass(editor)));
      }
      e.content = content;
    };
    var setup = function (editor) {
      var contentEditableAttrName = 'contenteditable';
      var editClass = ' ' + global.trim(getEditableClass(editor)) + ' ';
      var nonEditClass = ' ' + global.trim(getNonEditableClass(editor)) + ' ';
      var hasEditClass = hasClass(editClass);
      var hasNonEditClass = hasClass(nonEditClass);
      var nonEditableRegExps = getNonEditableRegExps(editor);
      editor.on('PreInit', function () {
        if (nonEditableRegExps.length > 0) {
          editor.on('BeforeSetContent', function (e) {
            convertRegExpsToNonEditable(editor, nonEditableRegExps, e);
          });
        }
        editor.parser.addAttributeFilter('class', function (nodes) {
          var i = nodes.length, node;
          while (i--) {
            node = nodes[i];
            if (hasEditClass(node)) {
              node.attr(contentEditableAttrName, 'true');
            } else if (hasNonEditClass(node)) {
              node.attr(contentEditableAttrName, 'false');
            }
          }
        });
        editor.serializer.addAttributeFilter(contentEditableAttrName, function (nodes) {
          var i = nodes.length, node;
          while (i--) {
            node = nodes[i];
            if (!hasEditClass(node) && !hasNonEditClass(node)) {
              continue;
            }
            if (nonEditableRegExps.length > 0 && node.attr('data-mce-content')) {
              node.name = '#text';
              node.type = 3;
              node.raw = true;
              node.value = node.attr('data-mce-content');
            } else {
              node.attr(contentEditableAttrName, null);
            }
          }
        });
      });
    };

    function Plugin () {
      global\$1.add('noneditable', function (editor) {
        setup(editor);
      });
    }

    Plugin();

}());
", "Back/assets/vendor/tinymce/plugins/noneditable/plugin.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\noneditable\\plugin.js");
    }
}
