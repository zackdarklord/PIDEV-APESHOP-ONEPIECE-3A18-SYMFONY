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

/* Back/assets/vendor/tinymce/plugins/toc/plugin.js */
class __TwigTemplate_62a4bd03d28f5e80e44071ca49aafcd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/toc/plugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/toc/plugin.js"));

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

    var global\$3 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global\$2 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');

    var global\$1 = tinymce.util.Tools.resolve('tinymce.util.I18n');

    var global = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var getTocClass = function (editor) {
      return editor.getParam('toc_class', 'mce-toc');
    };
    var getTocHeader = function (editor) {
      var tagName = editor.getParam('toc_header', 'h2');
      return /^h[1-6]\$/.test(tagName) ? tagName : 'h2';
    };
    var getTocDepth = function (editor) {
      var depth = parseInt(editor.getParam('toc_depth', '3'), 10);
      return depth >= 1 && depth <= 9 ? depth : 3;
    };

    var create = function (prefix) {
      var counter = 0;
      return function () {
        var guid = new Date().getTime().toString(32);
        return prefix + guid + (counter++).toString(32);
      };
    };

    var tocId = create('mcetoc_');
    var generateSelector = function (depth) {
      var i;
      var selector = [];
      for (i = 1; i <= depth; i++) {
        selector.push('h' + i);
      }
      return selector.join(',');
    };
    var hasHeaders = function (editor) {
      return readHeaders(editor).length > 0;
    };
    var readHeaders = function (editor) {
      var tocClass = getTocClass(editor);
      var headerTag = getTocHeader(editor);
      var selector = generateSelector(getTocDepth(editor));
      var headers = editor.\$(selector);
      if (headers.length && /^h[1-9]\$/i.test(headerTag)) {
        headers = headers.filter(function (i, el) {
          return !editor.dom.hasClass(el.parentNode, tocClass);
        });
      }
      return global.map(headers, function (h) {
        var id = h.id;
        return {
          id: id ? id : tocId(),
          level: parseInt(h.nodeName.replace(/^H/i, ''), 10),
          title: editor.\$.text(h),
          element: h
        };
      });
    };
    var getMinLevel = function (headers) {
      var minLevel = 9;
      for (var i = 0; i < headers.length; i++) {
        if (headers[i].level < minLevel) {
          minLevel = headers[i].level;
        }
        if (minLevel === 1) {
          return minLevel;
        }
      }
      return minLevel;
    };
    var generateTitle = function (tag, title) {
      var openTag = '<' + tag + ' contenteditable=\"true\">';
      var closeTag = '</' + tag + '>';
      return openTag + global\$2.DOM.encode(title) + closeTag;
    };
    var generateTocHtml = function (editor) {
      var html = generateTocContentHtml(editor);
      return '<div class=\"' + editor.dom.encode(getTocClass(editor)) + '\" contenteditable=\"false\">' + html + '</div>';
    };
    var generateTocContentHtml = function (editor) {
      var html = '';
      var headers = readHeaders(editor);
      var prevLevel = getMinLevel(headers) - 1;
      if (!headers.length) {
        return '';
      }
      html += generateTitle(getTocHeader(editor), global\$1.translate('Table of Contents'));
      for (var i = 0; i < headers.length; i++) {
        var h = headers[i];
        h.element.id = h.id;
        var nextLevel = headers[i + 1] && headers[i + 1].level;
        if (prevLevel === h.level) {
          html += '<li>';
        } else {
          for (var ii = prevLevel; ii < h.level; ii++) {
            html += '<ul><li>';
          }
        }
        html += '<a href=\"#' + h.id + '\">' + h.title + '</a>';
        if (nextLevel === h.level || !nextLevel) {
          html += '</li>';
          if (!nextLevel) {
            html += '</ul>';
          }
        } else {
          for (var ii = h.level; ii > nextLevel; ii--) {
            if (ii === nextLevel + 1) {
              html += '</li></ul><li>';
            } else {
              html += '</li></ul>';
            }
          }
        }
        prevLevel = h.level;
      }
      return html;
    };
    var isEmptyOrOffscreen = function (editor, nodes) {
      return !nodes.length || editor.dom.getParents(nodes[0], '.mce-offscreen-selection').length > 0;
    };
    var insertToc = function (editor) {
      var tocClass = getTocClass(editor);
      var \$tocElm = editor.\$('.' + tocClass);
      if (isEmptyOrOffscreen(editor, \$tocElm)) {
        editor.insertContent(generateTocHtml(editor));
      } else {
        updateToc(editor);
      }
    };
    var updateToc = function (editor) {
      var tocClass = getTocClass(editor);
      var \$tocElm = editor.\$('.' + tocClass);
      if (\$tocElm.length) {
        editor.undoManager.transact(function () {
          \$tocElm.html(generateTocContentHtml(editor));
        });
      }
    };

    var register\$1 = function (editor) {
      editor.addCommand('mceInsertToc', function () {
        insertToc(editor);
      });
      editor.addCommand('mceUpdateToc', function () {
        updateToc(editor);
      });
    };

    var setup = function (editor) {
      var \$ = editor.\$, tocClass = getTocClass(editor);
      editor.on('PreProcess', function (e) {
        var \$tocElm = \$('.' + tocClass, e.node);
        if (\$tocElm.length) {
          \$tocElm.removeAttr('contentEditable');
          \$tocElm.find('[contenteditable]').removeAttr('contentEditable');
        }
      });
      editor.on('SetContent', function () {
        var \$tocElm = \$('.' + tocClass);
        if (\$tocElm.length) {
          \$tocElm.attr('contentEditable', false);
          \$tocElm.children(':first-child').attr('contentEditable', true);
        }
      });
    };

    var toggleState = function (editor) {
      return function (api) {
        var toggleDisabledState = function () {
          return api.setDisabled(editor.mode.isReadOnly() || !hasHeaders(editor));
        };
        toggleDisabledState();
        editor.on('LoadContent SetContent change', toggleDisabledState);
        return function () {
          return editor.on('LoadContent SetContent change', toggleDisabledState);
        };
      };
    };
    var isToc = function (editor) {
      return function (elm) {
        return elm && editor.dom.is(elm, '.' + getTocClass(editor)) && editor.getBody().contains(elm);
      };
    };
    var register = function (editor) {
      var insertTocAction = function () {
        return editor.execCommand('mceInsertToc');
      };
      editor.ui.registry.addButton('toc', {
        icon: 'toc',
        tooltip: 'Table of contents',
        onAction: insertTocAction,
        onSetup: toggleState(editor)
      });
      editor.ui.registry.addButton('tocupdate', {
        icon: 'reload',
        tooltip: 'Update',
        onAction: function () {
          return editor.execCommand('mceUpdateToc');
        }
      });
      editor.ui.registry.addMenuItem('toc', {
        icon: 'toc',
        text: 'Table of contents',
        onAction: insertTocAction,
        onSetup: toggleState(editor)
      });
      editor.ui.registry.addContextToolbar('toc', {
        items: 'tocupdate',
        predicate: isToc(editor),
        scope: 'node',
        position: 'node'
      });
    };

    function Plugin () {
      global\$3.add('toc', function (editor) {
        register\$1(editor);
        register(editor);
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
        return "Back/assets/vendor/tinymce/plugins/toc/plugin.js";
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

    var global\$3 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global\$2 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');

    var global\$1 = tinymce.util.Tools.resolve('tinymce.util.I18n');

    var global = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var getTocClass = function (editor) {
      return editor.getParam('toc_class', 'mce-toc');
    };
    var getTocHeader = function (editor) {
      var tagName = editor.getParam('toc_header', 'h2');
      return /^h[1-6]\$/.test(tagName) ? tagName : 'h2';
    };
    var getTocDepth = function (editor) {
      var depth = parseInt(editor.getParam('toc_depth', '3'), 10);
      return depth >= 1 && depth <= 9 ? depth : 3;
    };

    var create = function (prefix) {
      var counter = 0;
      return function () {
        var guid = new Date().getTime().toString(32);
        return prefix + guid + (counter++).toString(32);
      };
    };

    var tocId = create('mcetoc_');
    var generateSelector = function (depth) {
      var i;
      var selector = [];
      for (i = 1; i <= depth; i++) {
        selector.push('h' + i);
      }
      return selector.join(',');
    };
    var hasHeaders = function (editor) {
      return readHeaders(editor).length > 0;
    };
    var readHeaders = function (editor) {
      var tocClass = getTocClass(editor);
      var headerTag = getTocHeader(editor);
      var selector = generateSelector(getTocDepth(editor));
      var headers = editor.\$(selector);
      if (headers.length && /^h[1-9]\$/i.test(headerTag)) {
        headers = headers.filter(function (i, el) {
          return !editor.dom.hasClass(el.parentNode, tocClass);
        });
      }
      return global.map(headers, function (h) {
        var id = h.id;
        return {
          id: id ? id : tocId(),
          level: parseInt(h.nodeName.replace(/^H/i, ''), 10),
          title: editor.\$.text(h),
          element: h
        };
      });
    };
    var getMinLevel = function (headers) {
      var minLevel = 9;
      for (var i = 0; i < headers.length; i++) {
        if (headers[i].level < minLevel) {
          minLevel = headers[i].level;
        }
        if (minLevel === 1) {
          return minLevel;
        }
      }
      return minLevel;
    };
    var generateTitle = function (tag, title) {
      var openTag = '<' + tag + ' contenteditable=\"true\">';
      var closeTag = '</' + tag + '>';
      return openTag + global\$2.DOM.encode(title) + closeTag;
    };
    var generateTocHtml = function (editor) {
      var html = generateTocContentHtml(editor);
      return '<div class=\"' + editor.dom.encode(getTocClass(editor)) + '\" contenteditable=\"false\">' + html + '</div>';
    };
    var generateTocContentHtml = function (editor) {
      var html = '';
      var headers = readHeaders(editor);
      var prevLevel = getMinLevel(headers) - 1;
      if (!headers.length) {
        return '';
      }
      html += generateTitle(getTocHeader(editor), global\$1.translate('Table of Contents'));
      for (var i = 0; i < headers.length; i++) {
        var h = headers[i];
        h.element.id = h.id;
        var nextLevel = headers[i + 1] && headers[i + 1].level;
        if (prevLevel === h.level) {
          html += '<li>';
        } else {
          for (var ii = prevLevel; ii < h.level; ii++) {
            html += '<ul><li>';
          }
        }
        html += '<a href=\"#' + h.id + '\">' + h.title + '</a>';
        if (nextLevel === h.level || !nextLevel) {
          html += '</li>';
          if (!nextLevel) {
            html += '</ul>';
          }
        } else {
          for (var ii = h.level; ii > nextLevel; ii--) {
            if (ii === nextLevel + 1) {
              html += '</li></ul><li>';
            } else {
              html += '</li></ul>';
            }
          }
        }
        prevLevel = h.level;
      }
      return html;
    };
    var isEmptyOrOffscreen = function (editor, nodes) {
      return !nodes.length || editor.dom.getParents(nodes[0], '.mce-offscreen-selection').length > 0;
    };
    var insertToc = function (editor) {
      var tocClass = getTocClass(editor);
      var \$tocElm = editor.\$('.' + tocClass);
      if (isEmptyOrOffscreen(editor, \$tocElm)) {
        editor.insertContent(generateTocHtml(editor));
      } else {
        updateToc(editor);
      }
    };
    var updateToc = function (editor) {
      var tocClass = getTocClass(editor);
      var \$tocElm = editor.\$('.' + tocClass);
      if (\$tocElm.length) {
        editor.undoManager.transact(function () {
          \$tocElm.html(generateTocContentHtml(editor));
        });
      }
    };

    var register\$1 = function (editor) {
      editor.addCommand('mceInsertToc', function () {
        insertToc(editor);
      });
      editor.addCommand('mceUpdateToc', function () {
        updateToc(editor);
      });
    };

    var setup = function (editor) {
      var \$ = editor.\$, tocClass = getTocClass(editor);
      editor.on('PreProcess', function (e) {
        var \$tocElm = \$('.' + tocClass, e.node);
        if (\$tocElm.length) {
          \$tocElm.removeAttr('contentEditable');
          \$tocElm.find('[contenteditable]').removeAttr('contentEditable');
        }
      });
      editor.on('SetContent', function () {
        var \$tocElm = \$('.' + tocClass);
        if (\$tocElm.length) {
          \$tocElm.attr('contentEditable', false);
          \$tocElm.children(':first-child').attr('contentEditable', true);
        }
      });
    };

    var toggleState = function (editor) {
      return function (api) {
        var toggleDisabledState = function () {
          return api.setDisabled(editor.mode.isReadOnly() || !hasHeaders(editor));
        };
        toggleDisabledState();
        editor.on('LoadContent SetContent change', toggleDisabledState);
        return function () {
          return editor.on('LoadContent SetContent change', toggleDisabledState);
        };
      };
    };
    var isToc = function (editor) {
      return function (elm) {
        return elm && editor.dom.is(elm, '.' + getTocClass(editor)) && editor.getBody().contains(elm);
      };
    };
    var register = function (editor) {
      var insertTocAction = function () {
        return editor.execCommand('mceInsertToc');
      };
      editor.ui.registry.addButton('toc', {
        icon: 'toc',
        tooltip: 'Table of contents',
        onAction: insertTocAction,
        onSetup: toggleState(editor)
      });
      editor.ui.registry.addButton('tocupdate', {
        icon: 'reload',
        tooltip: 'Update',
        onAction: function () {
          return editor.execCommand('mceUpdateToc');
        }
      });
      editor.ui.registry.addMenuItem('toc', {
        icon: 'toc',
        text: 'Table of contents',
        onAction: insertTocAction,
        onSetup: toggleState(editor)
      });
      editor.ui.registry.addContextToolbar('toc', {
        items: 'tocupdate',
        predicate: isToc(editor),
        scope: 'node',
        position: 'node'
      });
    };

    function Plugin () {
      global\$3.add('toc', function (editor) {
        register\$1(editor);
        register(editor);
        setup(editor);
      });
    }

    Plugin();

}());
", "Back/assets/vendor/tinymce/plugins/toc/plugin.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\toc\\plugin.js");
    }
}
