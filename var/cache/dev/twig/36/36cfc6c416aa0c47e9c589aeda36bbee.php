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

/* Back/assets/vendor/tinymce/skins/ui/oxide-dark/skin.css */
class __TwigTemplate_c2b3bd57c6be153680361eb5dc6b9b61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/skins/ui/oxide-dark/skin.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/skins/ui/oxide-dark/skin.css"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 */
.tox {
  box-shadow: none;
  box-sizing: content-box;
  color: #2A3746;
  cursor: auto;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 16px;
  font-style: normal;
  font-weight: normal;
  line-height: normal;
  -webkit-tap-highlight-color: transparent;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  vertical-align: initial;
  white-space: normal;
}
.tox *:not(svg):not(rect) {
  box-sizing: inherit;
  color: inherit;
  cursor: inherit;
  direction: inherit;
  font-family: inherit;
  font-size: inherit;
  font-style: inherit;
  font-weight: inherit;
  line-height: inherit;
  -webkit-tap-highlight-color: inherit;
  text-align: inherit;
  text-decoration: inherit;
  text-shadow: inherit;
  text-transform: inherit;
  vertical-align: inherit;
  white-space: inherit;
}
.tox *:not(svg):not(rect) {
  /* stylelint-disable-line no-duplicate-selectors */
  background: transparent;
  border: 0;
  box-shadow: none;
  float: none;
  height: auto;
  margin: 0;
  max-width: none;
  outline: 0;
  padding: 0;
  position: static;
  width: auto;
}
.tox:not([dir=rtl]) {
  direction: ltr;
  text-align: left;
}
.tox[dir=rtl] {
  direction: rtl;
  text-align: right;
}
.tox-tinymce {
  border: 1px solid #000000;
  border-radius: 0;
  box-shadow: none;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  overflow: hidden;
  position: relative;
  visibility: inherit !important;
}
.tox-tinymce-inline {
  border: none;
  box-shadow: none;
}
.tox-tinymce-inline .tox-editor-header {
  background-color: transparent;
  border: 1px solid #000000;
  border-radius: 0;
  box-shadow: none;
}
.tox-tinymce-aux {
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  z-index: 1300;
}
.tox-tinymce *:focus,
.tox-tinymce-aux *:focus {
  outline: none;
}
button::-moz-focus-inner {
  border: 0;
}
.tox[dir=rtl] .tox-icon--flip svg {
  transform: rotateY(180deg);
}
.tox .accessibility-issue__header {
  align-items: center;
  display: flex;
  margin-bottom: 4px;
}
.tox .accessibility-issue__description {
  align-items: stretch;
  border: 1px solid #000000;
  border-radius: 3px;
  display: flex;
  justify-content: space-between;
}
.tox .accessibility-issue__description > div {
  padding-bottom: 4px;
}
.tox .accessibility-issue__description > div > div {
  align-items: center;
  display: flex;
  margin-bottom: 4px;
}
.tox .accessibility-issue__description > *:last-child:not(:only-child) {
  border-color: #000000;
  border-style: solid;
}
.tox .accessibility-issue__repair {
  margin-top: 16px;
}
.tox .tox-dialog__body-content .accessibility-issue--info .accessibility-issue__description {
  background-color: rgba(32, 122, 183, 0.5);
  border-color: #207ab7;
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--info .accessibility-issue__description > *:last-child {
  border-color: #207ab7;
}
.tox .tox-dialog__body-content .accessibility-issue--info .tox-form__group h2 {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--info .tox-icon svg {
  fill: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--info a .tox-icon {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--warn .accessibility-issue__description {
  background-color: rgba(255, 165, 0, 0.5);
  border-color: rgba(255, 165, 0, 0.8);
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--warn .accessibility-issue__description > *:last-child {
  border-color: rgba(255, 165, 0, 0.8);
}
.tox .tox-dialog__body-content .accessibility-issue--warn .tox-form__group h2 {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--warn .tox-icon svg {
  fill: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--warn a .tox-icon {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--error .accessibility-issue__description {
  background-color: rgba(204, 0, 0, 0.5);
  border-color: rgba(204, 0, 0, 0.8);
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--error .accessibility-issue__description > *:last-child {
  border-color: rgba(204, 0, 0, 0.8);
}
.tox .tox-dialog__body-content .accessibility-issue--error .tox-form__group h2 {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--error .tox-icon svg {
  fill: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--error a .tox-icon {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--success .accessibility-issue__description {
  background-color: rgba(120, 171, 70, 0.5);
  border-color: rgba(120, 171, 70, 0.8);
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--success .accessibility-issue__description > *:last-child {
  border-color: rgba(120, 171, 70, 0.8);
}
.tox .tox-dialog__body-content .accessibility-issue--success .tox-form__group h2 {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--success .tox-icon svg {
  fill: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--success a .tox-icon {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue__header h1,
.tox .tox-dialog__body-content .tox-form__group .accessibility-issue__description h2 {
  margin-top: 0;
}
.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__header .tox-button {
  margin-left: 4px;
}
.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__header > *:nth-last-child(2) {
  margin-left: auto;
}
.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__description {
  padding: 4px 4px 4px 8px;
}
.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__description > *:last-child {
  border-left-width: 1px;
  padding-left: 4px;
}
.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__header .tox-button {
  margin-right: 4px;
}
.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__header > *:nth-last-child(2) {
  margin-right: auto;
}
.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__description {
  padding: 4px 8px 4px 4px;
}
.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__description > *:last-child {
  border-right-width: 1px;
  padding-right: 4px;
}
.tox .tox-anchorbar {
  display: flex;
  flex: 0 0 auto;
}
.tox .tox-bar {
  display: flex;
  flex: 0 0 auto;
}
.tox .tox-button {
  background-color: #207ab7;
  background-image: none;
  background-position: 0 0;
  background-repeat: repeat;
  border-color: #207ab7;
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 14px;
  font-style: normal;
  font-weight: bold;
  letter-spacing: normal;
  line-height: 24px;
  margin: 0;
  outline: none;
  padding: 4px 16px;
  text-align: center;
  text-decoration: none;
  text-transform: none;
  white-space: nowrap;
}
.tox .tox-button[disabled] {
  background-color: #207ab7;
  background-image: none;
  border-color: #207ab7;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
  cursor: not-allowed;
}
.tox .tox-button:focus:not(:disabled) {
  background-color: #1c6ca1;
  background-image: none;
  border-color: #1c6ca1;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button:hover:not(:disabled) {
  background-color: #1c6ca1;
  background-image: none;
  border-color: #1c6ca1;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button:active:not(:disabled) {
  background-color: #185d8c;
  background-image: none;
  border-color: #185d8c;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--secondary {
  background-color: #3d546f;
  background-image: none;
  background-position: 0 0;
  background-repeat: repeat;
  border-color: #3d546f;
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  color: #fff;
  font-size: 14px;
  font-style: normal;
  font-weight: bold;
  letter-spacing: normal;
  outline: none;
  padding: 4px 16px;
  text-decoration: none;
  text-transform: none;
}
.tox .tox-button--secondary[disabled] {
  background-color: #3d546f;
  background-image: none;
  border-color: #3d546f;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
}
.tox .tox-button--secondary:focus:not(:disabled) {
  background-color: #34485f;
  background-image: none;
  border-color: #34485f;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--secondary:hover:not(:disabled) {
  background-color: #34485f;
  background-image: none;
  border-color: #34485f;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--secondary:active:not(:disabled) {
  background-color: #2b3b4e;
  background-image: none;
  border-color: #2b3b4e;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--icon,
.tox .tox-button.tox-button--icon,
.tox .tox-button.tox-button--secondary.tox-button--icon {
  padding: 4px;
}
.tox .tox-button--icon .tox-icon svg,
.tox .tox-button.tox-button--icon .tox-icon svg,
.tox .tox-button.tox-button--secondary.tox-button--icon .tox-icon svg {
  display: block;
  fill: currentColor;
}
.tox .tox-button-link {
  background: 0;
  border: none;
  box-sizing: border-box;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 16px;
  font-weight: normal;
  line-height: 1.3;
  margin: 0;
  padding: 0;
  white-space: nowrap;
}
.tox .tox-button-link--sm {
  font-size: 14px;
}
.tox .tox-button--naked {
  background-color: transparent;
  border-color: transparent;
  box-shadow: unset;
  color: #fff;
}
.tox .tox-button--naked[disabled] {
  background-color: #3d546f;
  border-color: #3d546f;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
}
.tox .tox-button--naked:hover:not(:disabled) {
  background-color: #34485f;
  border-color: #34485f;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--naked:focus:not(:disabled) {
  background-color: #34485f;
  border-color: #34485f;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--naked:active:not(:disabled) {
  background-color: #2b3b4e;
  border-color: #2b3b4e;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--naked .tox-icon svg {
  fill: currentColor;
}
.tox .tox-button--naked.tox-button--icon:hover:not(:disabled) {
  color: #fff;
}
.tox .tox-checkbox {
  align-items: center;
  border-radius: 3px;
  cursor: pointer;
  display: flex;
  height: 36px;
  min-width: 36px;
}
.tox .tox-checkbox__input {
  /* Hide from view but visible to screen readers */
  height: 1px;
  overflow: hidden;
  position: absolute;
  top: auto;
  width: 1px;
}
.tox .tox-checkbox__icons {
  align-items: center;
  border-radius: 3px;
  box-shadow: 0 0 0 2px transparent;
  box-sizing: content-box;
  display: flex;
  height: 24px;
  justify-content: center;
  padding: calc(4px - 1px);
  width: 24px;
}
.tox .tox-checkbox__icons .tox-checkbox-icon__unchecked svg {
  display: block;
  fill: rgba(255, 255, 255, 0.2);
}
.tox .tox-checkbox__icons .tox-checkbox-icon__indeterminate svg {
  display: none;
  fill: #207ab7;
}
.tox .tox-checkbox__icons .tox-checkbox-icon__checked svg {
  display: none;
  fill: #207ab7;
}
.tox .tox-checkbox--disabled {
  color: rgba(255, 255, 255, 0.5);
  cursor: not-allowed;
}
.tox .tox-checkbox--disabled .tox-checkbox__icons .tox-checkbox-icon__checked svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-checkbox--disabled .tox-checkbox__icons .tox-checkbox-icon__unchecked svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-checkbox--disabled .tox-checkbox__icons .tox-checkbox-icon__indeterminate svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox input.tox-checkbox__input:checked + .tox-checkbox__icons .tox-checkbox-icon__unchecked svg {
  display: none;
}
.tox input.tox-checkbox__input:checked + .tox-checkbox__icons .tox-checkbox-icon__checked svg {
  display: block;
}
.tox input.tox-checkbox__input:indeterminate + .tox-checkbox__icons .tox-checkbox-icon__unchecked svg {
  display: none;
}
.tox input.tox-checkbox__input:indeterminate + .tox-checkbox__icons .tox-checkbox-icon__indeterminate svg {
  display: block;
}
.tox input.tox-checkbox__input:focus + .tox-checkbox__icons {
  border-radius: 3px;
  box-shadow: inset 0 0 0 1px #207ab7;
  padding: calc(4px - 1px);
}
.tox:not([dir=rtl]) .tox-checkbox__label {
  margin-left: 4px;
}
.tox:not([dir=rtl]) .tox-checkbox__input {
  left: -10000px;
}
.tox:not([dir=rtl]) .tox-bar .tox-checkbox {
  margin-left: 4px;
}
.tox[dir=rtl] .tox-checkbox__label {
  margin-right: 4px;
}
.tox[dir=rtl] .tox-checkbox__input {
  right: -10000px;
}
.tox[dir=rtl] .tox-bar .tox-checkbox {
  margin-right: 4px;
}
.tox {
  /* stylelint-disable-next-line no-descending-specificity */
}
.tox .tox-collection--toolbar .tox-collection__group {
  display: flex;
  padding: 0;
}
.tox .tox-collection--grid .tox-collection__group {
  display: flex;
  flex-wrap: wrap;
  max-height: 208px;
  overflow-x: hidden;
  overflow-y: auto;
  padding: 0;
}
.tox .tox-collection--list .tox-collection__group {
  border-bottom-width: 0;
  border-color: #1a1a1a;
  border-left-width: 0;
  border-right-width: 0;
  border-style: solid;
  border-top-width: 1px;
  padding: 4px 0;
}
.tox .tox-collection--list .tox-collection__group:first-child {
  border-top-width: 0;
}
.tox .tox-collection__group-heading {
  background-color: #333333;
  color: #fff;
  cursor: default;
  font-size: 12px;
  font-style: normal;
  font-weight: normal;
  margin-bottom: 4px;
  margin-top: -4px;
  padding: 4px 8px;
  text-transform: none;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.tox .tox-collection__item {
  align-items: center;
  color: #fff;
  cursor: pointer;
  display: flex;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.tox .tox-collection--list .tox-collection__item {
  padding: 4px 8px;
}
.tox .tox-collection--toolbar .tox-collection__item {
  border-radius: 3px;
  padding: 4px;
}
.tox .tox-collection--grid .tox-collection__item {
  border-radius: 3px;
  padding: 4px;
}
.tox .tox-collection--list .tox-collection__item--enabled {
  background-color: #2b3b4e;
  color: #fff;
}
.tox .tox-collection--list .tox-collection__item--active {
  background-color: #4a5562;
}
.tox .tox-collection--toolbar .tox-collection__item--enabled {
  background-color: #757d87;
  color: #fff;
}
.tox .tox-collection--toolbar .tox-collection__item--active {
  background-color: #4a5562;
}
.tox .tox-collection--grid .tox-collection__item--enabled {
  background-color: #757d87;
  color: #fff;
}
.tox .tox-collection--grid .tox-collection__item--active:not(.tox-collection__item--state-disabled) {
  background-color: #4a5562;
  color: #fff;
}
.tox .tox-collection--list .tox-collection__item--active:not(.tox-collection__item--state-disabled) {
  color: #fff;
}
.tox .tox-collection--toolbar .tox-collection__item--active:not(.tox-collection__item--state-disabled) {
  color: #fff;
}
.tox .tox-collection__item-icon,
.tox .tox-collection__item-checkmark {
  align-items: center;
  display: flex;
  height: 24px;
  justify-content: center;
  width: 24px;
}
.tox .tox-collection__item-icon svg,
.tox .tox-collection__item-checkmark svg {
  fill: currentColor;
}
.tox .tox-collection--toolbar-lg .tox-collection__item-icon {
  height: 48px;
  width: 48px;
}
.tox .tox-collection__item-label {
  color: currentColor;
  display: inline-block;
  flex: 1;
  -ms-flex-preferred-size: auto;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  line-height: 24px;
  text-transform: none;
  word-break: break-all;
}
.tox .tox-collection__item-accessory {
  color: rgba(255, 255, 255, 0.5);
  display: inline-block;
  font-size: 14px;
  height: 24px;
  line-height: 24px;
  text-transform: none;
}
.tox .tox-collection__item-caret {
  align-items: center;
  display: flex;
  min-height: 24px;
}
.tox .tox-collection__item-caret::after {
  content: '';
  font-size: 0;
  min-height: inherit;
}
.tox .tox-collection__item-caret svg {
  fill: #fff;
}
.tox .tox-collection__item--state-disabled {
  background-color: transparent;
  color: rgba(255, 255, 255, 0.5);
  cursor: not-allowed;
}
.tox .tox-collection__item--state-disabled .tox-collection__item-caret svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-collection--list .tox-collection__item:not(.tox-collection__item--enabled) .tox-collection__item-checkmark svg {
  display: none;
}
.tox .tox-collection--list .tox-collection__item:not(.tox-collection__item--enabled) .tox-collection__item-accessory + .tox-collection__item-checkmark {
  display: none;
}
.tox .tox-collection--horizontal {
  background-color: #2b3b4e;
  border: 1px solid #1a1a1a;
  border-radius: 3px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
  display: flex;
  flex: 0 0 auto;
  flex-shrink: 0;
  flex-wrap: nowrap;
  margin-bottom: 0;
  overflow-x: auto;
  padding: 0;
}
.tox .tox-collection--horizontal .tox-collection__group {
  align-items: center;
  display: flex;
  flex-wrap: nowrap;
  margin: 0;
  padding: 0 4px;
}
.tox .tox-collection--horizontal .tox-collection__item {
  height: 34px;
  margin: 2px 0 3px 0;
  padding: 0 4px;
}
.tox .tox-collection--horizontal .tox-collection__item-label {
  white-space: nowrap;
}
.tox .tox-collection--horizontal .tox-collection__item-caret {
  margin-left: 4px;
}
.tox .tox-collection__item-container {
  display: flex;
}
.tox .tox-collection__item-container--row {
  align-items: center;
  flex: 1 1 auto;
  flex-direction: row;
}
.tox .tox-collection__item-container--row.tox-collection__item-container--align-left {
  margin-right: auto;
}
.tox .tox-collection__item-container--row.tox-collection__item-container--align-right {
  justify-content: flex-end;
  margin-left: auto;
}
.tox .tox-collection__item-container--row.tox-collection__item-container--valign-top {
  align-items: flex-start;
  margin-bottom: auto;
}
.tox .tox-collection__item-container--row.tox-collection__item-container--valign-middle {
  align-items: center;
}
.tox .tox-collection__item-container--row.tox-collection__item-container--valign-bottom {
  align-items: flex-end;
  margin-top: auto;
}
.tox .tox-collection__item-container--column {
  -ms-grid-row-align: center;
      align-self: center;
  flex: 1 1 auto;
  flex-direction: column;
}
.tox .tox-collection__item-container--column.tox-collection__item-container--align-left {
  align-items: flex-start;
}
.tox .tox-collection__item-container--column.tox-collection__item-container--align-right {
  align-items: flex-end;
}
.tox .tox-collection__item-container--column.tox-collection__item-container--valign-top {
  align-self: flex-start;
}
.tox .tox-collection__item-container--column.tox-collection__item-container--valign-middle {
  -ms-grid-row-align: center;
      align-self: center;
}
.tox .tox-collection__item-container--column.tox-collection__item-container--valign-bottom {
  align-self: flex-end;
}
.tox:not([dir=rtl]) .tox-collection--horizontal .tox-collection__group:not(:last-of-type) {
  border-right: 1px solid #000000;
}
.tox:not([dir=rtl]) .tox-collection--list .tox-collection__item > *:not(:first-child) {
  margin-left: 8px;
}
.tox:not([dir=rtl]) .tox-collection--list .tox-collection__item > .tox-collection__item-label:first-child {
  margin-left: 4px;
}
.tox:not([dir=rtl]) .tox-collection__item-accessory {
  margin-left: 16px;
  text-align: right;
}
.tox:not([dir=rtl]) .tox-collection .tox-collection__item-caret {
  margin-left: 16px;
}
.tox[dir=rtl] .tox-collection--horizontal .tox-collection__group:not(:last-of-type) {
  border-left: 1px solid #000000;
}
.tox[dir=rtl] .tox-collection--list .tox-collection__item > *:not(:first-child) {
  margin-right: 8px;
}
.tox[dir=rtl] .tox-collection--list .tox-collection__item > .tox-collection__item-label:first-child {
  margin-right: 4px;
}
.tox[dir=rtl] .tox-collection__item-accessory {
  margin-right: 16px;
  text-align: left;
}
.tox[dir=rtl] .tox-collection .tox-collection__item-caret {
  margin-right: 16px;
  transform: rotateY(180deg);
}
.tox[dir=rtl] .tox-collection--horizontal .tox-collection__item-caret {
  margin-right: 4px;
}
.tox .tox-color-picker-container {
  display: flex;
  flex-direction: row;
  height: 225px;
  margin: 0;
}
.tox .tox-sv-palette {
  box-sizing: border-box;
  display: flex;
  height: 100%;
}
.tox .tox-sv-palette-spectrum {
  height: 100%;
}
.tox .tox-sv-palette,
.tox .tox-sv-palette-spectrum {
  width: 225px;
}
.tox .tox-sv-palette-thumb {
  background: none;
  border: 1px solid black;
  border-radius: 50%;
  box-sizing: content-box;
  height: 12px;
  position: absolute;
  width: 12px;
}
.tox .tox-sv-palette-inner-thumb {
  border: 1px solid white;
  border-radius: 50%;
  height: 10px;
  position: absolute;
  width: 10px;
}
.tox .tox-hue-slider {
  box-sizing: border-box;
  height: 100%;
  width: 25px;
}
.tox .tox-hue-slider-spectrum {
  background: linear-gradient(to bottom, #f00, #ff0080, #f0f, #8000ff, #00f, #0080ff, #0ff, #00ff80, #0f0, #80ff00, #ff0, #ff8000, #f00);
  height: 100%;
  width: 100%;
}
.tox .tox-hue-slider,
.tox .tox-hue-slider-spectrum {
  width: 20px;
}
.tox .tox-hue-slider-thumb {
  background: white;
  border: 1px solid black;
  box-sizing: content-box;
  height: 4px;
  width: 100%;
}
.tox .tox-rgb-form {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.tox .tox-rgb-form div {
  align-items: center;
  display: flex;
  justify-content: space-between;
  margin-bottom: 5px;
  width: inherit;
}
.tox .tox-rgb-form input {
  width: 6em;
}
.tox .tox-rgb-form input.tox-invalid {
  /* Need !important to override Chrome's focus styling unfortunately */
  border: 1px solid red !important;
}
.tox .tox-rgb-form .tox-rgba-preview {
  border: 1px solid black;
  flex-grow: 2;
  margin-bottom: 0;
}
.tox:not([dir=rtl]) .tox-sv-palette {
  margin-right: 15px;
}
.tox:not([dir=rtl]) .tox-hue-slider {
  margin-right: 15px;
}
.tox:not([dir=rtl]) .tox-hue-slider-thumb {
  margin-left: -1px;
}
.tox:not([dir=rtl]) .tox-rgb-form label {
  margin-right: 0.5em;
}
.tox[dir=rtl] .tox-sv-palette {
  margin-left: 15px;
}
.tox[dir=rtl] .tox-hue-slider {
  margin-left: 15px;
}
.tox[dir=rtl] .tox-hue-slider-thumb {
  margin-right: -1px;
}
.tox[dir=rtl] .tox-rgb-form label {
  margin-left: 0.5em;
}
.tox .tox-toolbar .tox-swatches,
.tox .tox-toolbar__primary .tox-swatches,
.tox .tox-toolbar__overflow .tox-swatches {
  margin: 2px 0 3px 4px;
}
.tox .tox-collection--list .tox-collection__group .tox-swatches-menu {
  border: 0;
  margin: -4px 0;
}
.tox .tox-swatches__row {
  display: flex;
}
.tox .tox-swatch {
  height: 30px;
  transition: transform 0.15s, box-shadow 0.15s;
  width: 30px;
}
.tox .tox-swatch:hover,
.tox .tox-swatch:focus {
  box-shadow: 0 0 0 1px rgba(127, 127, 127, 0.3) inset;
  transform: scale(0.8);
}
.tox .tox-swatch--remove {
  align-items: center;
  display: flex;
  justify-content: center;
}
.tox .tox-swatch--remove svg path {
  stroke: #e74c3c;
}
.tox .tox-swatches__picker-btn {
  align-items: center;
  background-color: transparent;
  border: 0;
  cursor: pointer;
  display: flex;
  height: 30px;
  justify-content: center;
  outline: none;
  padding: 0;
  width: 30px;
}
.tox .tox-swatches__picker-btn svg {
  height: 24px;
  width: 24px;
}
.tox .tox-swatches__picker-btn:hover {
  background: #4a5562;
}
.tox:not([dir=rtl]) .tox-swatches__picker-btn {
  margin-left: auto;
}
.tox[dir=rtl] .tox-swatches__picker-btn {
  margin-right: auto;
}
.tox .tox-comment-thread {
  background: #2b3b4e;
  position: relative;
}
.tox .tox-comment-thread > *:not(:first-child) {
  margin-top: 8px;
}
.tox .tox-comment {
  background: #2b3b4e;
  border: 1px solid #000000;
  border-radius: 3px;
  box-shadow: 0 4px 8px 0 rgba(42, 55, 70, 0.1);
  padding: 8px 8px 16px 8px;
  position: relative;
}
.tox .tox-comment__header {
  align-items: center;
  color: #fff;
  display: flex;
  justify-content: space-between;
}
.tox .tox-comment__date {
  color: rgba(255, 255, 255, 0.5);
  font-size: 12px;
}
.tox .tox-comment__body {
  color: #fff;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.3;
  margin-top: 8px;
  position: relative;
  text-transform: initial;
}
.tox .tox-comment__body textarea {
  resize: none;
  white-space: normal;
  width: 100%;
}
.tox .tox-comment__expander {
  padding-top: 8px;
}
.tox .tox-comment__expander p {
  color: rgba(255, 255, 255, 0.5);
  font-size: 14px;
  font-style: normal;
}
.tox .tox-comment__body p {
  margin: 0;
}
.tox .tox-comment__buttonspacing {
  padding-top: 16px;
  text-align: center;
}
.tox .tox-comment-thread__overlay::after {
  background: #2b3b4e;
  bottom: 0;
  content: \"\";
  display: flex;
  left: 0;
  opacity: 0.9;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 5;
}
.tox .tox-comment__reply {
  display: flex;
  flex-shrink: 0;
  flex-wrap: wrap;
  justify-content: flex-end;
  margin-top: 8px;
}
.tox .tox-comment__reply > *:first-child {
  margin-bottom: 8px;
  width: 100%;
}
.tox .tox-comment__edit {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-end;
  margin-top: 16px;
}
.tox .tox-comment__gradient::after {
  background: linear-gradient(rgba(43, 59, 78, 0), #2b3b4e);
  bottom: 0;
  content: \"\";
  display: block;
  height: 5em;
  margin-top: -40px;
  position: absolute;
  width: 100%;
}
.tox .tox-comment__overlay {
  background: #2b3b4e;
  bottom: 0;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  left: 0;
  opacity: 0.9;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  z-index: 5;
}
.tox .tox-comment__loading-text {
  align-items: center;
  color: #fff;
  display: flex;
  flex-direction: column;
  position: relative;
}
.tox .tox-comment__loading-text > div {
  padding-bottom: 16px;
}
.tox .tox-comment__overlaytext {
  bottom: 0;
  flex-direction: column;
  font-size: 14px;
  left: 0;
  padding: 1em;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 10;
}
.tox .tox-comment__overlaytext p {
  background-color: #2b3b4e;
  box-shadow: 0 0 8px 8px #2b3b4e;
  color: #fff;
  text-align: center;
}
.tox .tox-comment__overlaytext div:nth-of-type(2) {
  font-size: 0.8em;
}
.tox .tox-comment__busy-spinner {
  align-items: center;
  background-color: #2b3b4e;
  bottom: 0;
  display: flex;
  justify-content: center;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 20;
}
.tox .tox-comment__scroll {
  display: flex;
  flex-direction: column;
  flex-shrink: 1;
  overflow: auto;
}
.tox .tox-conversations {
  margin: 8px;
}
.tox:not([dir=rtl]) .tox-comment__edit {
  margin-left: 8px;
}
.tox:not([dir=rtl]) .tox-comment__buttonspacing > *:last-child,
.tox:not([dir=rtl]) .tox-comment__edit > *:last-child,
.tox:not([dir=rtl]) .tox-comment__reply > *:last-child {
  margin-left: 8px;
}
.tox[dir=rtl] .tox-comment__edit {
  margin-right: 8px;
}
.tox[dir=rtl] .tox-comment__buttonspacing > *:last-child,
.tox[dir=rtl] .tox-comment__edit > *:last-child,
.tox[dir=rtl] .tox-comment__reply > *:last-child {
  margin-right: 8px;
}
.tox .tox-user {
  align-items: center;
  display: flex;
}
.tox .tox-user__avatar svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-user__name {
  color: rgba(255, 255, 255, 0.5);
  font-size: 12px;
  font-style: normal;
  font-weight: bold;
  text-transform: uppercase;
}
.tox:not([dir=rtl]) .tox-user__avatar svg {
  margin-right: 8px;
}
.tox:not([dir=rtl]) .tox-user__avatar + .tox-user__name {
  margin-left: 8px;
}
.tox[dir=rtl] .tox-user__avatar svg {
  margin-left: 8px;
}
.tox[dir=rtl] .tox-user__avatar + .tox-user__name {
  margin-right: 8px;
}
.tox .tox-dialog-wrap {
  align-items: center;
  bottom: 0;
  display: flex;
  justify-content: center;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  z-index: 1100;
}
.tox .tox-dialog-wrap__backdrop {
  background-color: rgba(34, 47, 62, 0.75);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1;
}
.tox .tox-dialog-wrap__backdrop--opaque {
  background-color: #222f3e;
}
.tox .tox-dialog {
  background-color: #2b3b4e;
  border-color: #000000;
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: 0 16px 16px -10px rgba(42, 55, 70, 0.15), 0 0 40px 1px rgba(42, 55, 70, 0.15);
  display: flex;
  flex-direction: column;
  max-height: 100%;
  max-width: 480px;
  overflow: hidden;
  position: relative;
  width: 95vw;
  z-index: 2;
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox .tox-dialog {
    align-self: flex-start;
    margin: 8px auto;
    width: calc(100vw - 16px);
  }
}
.tox .tox-dialog-inline {
  z-index: 1100;
}
.tox .tox-dialog__header {
  align-items: center;
  background-color: #2b3b4e;
  border-bottom: none;
  color: #fff;
  display: flex;
  font-size: 16px;
  justify-content: space-between;
  padding: 8px 16px 0 16px;
  position: relative;
}
.tox .tox-dialog__header .tox-button {
  z-index: 1;
}
.tox .tox-dialog__draghandle {
  cursor: grab;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.tox .tox-dialog__draghandle:active {
  cursor: grabbing;
}
.tox .tox-dialog__dismiss {
  margin-left: auto;
}
.tox .tox-dialog__title {
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 20px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.3;
  margin: 0;
  text-transform: none;
}
.tox .tox-dialog__body {
  color: #fff;
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
  font-size: 16px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.3;
  min-width: 0;
  text-align: left;
  text-transform: none;
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox .tox-dialog__body {
    flex-direction: column;
  }
}
.tox .tox-dialog__body-nav {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  padding: 16px 16px;
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox .tox-dialog__body-nav {
    flex-direction: row;
    -webkit-overflow-scrolling: touch;
    overflow-x: auto;
    padding-bottom: 0;
  }
}
.tox .tox-dialog__body-nav-item {
  border-bottom: 2px solid transparent;
  color: rgba(255, 255, 255, 0.5);
  display: inline-block;
  font-size: 14px;
  line-height: 1.3;
  margin-bottom: 8px;
  text-decoration: none;
  white-space: nowrap;
}
.tox .tox-dialog__body-nav-item:focus {
  background-color: rgba(32, 122, 183, 0.1);
}
.tox .tox-dialog__body-nav-item--active {
  border-bottom: 2px solid #207ab7;
  color: #207ab7;
}
.tox .tox-dialog__body-content {
  box-sizing: border-box;
  display: flex;
  flex: 1;
  flex-direction: column;
  -ms-flex-preferred-size: auto;
  max-height: 650px;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  padding: 16px 16px;
}
.tox .tox-dialog__body-content > * {
  margin-bottom: 0;
  margin-top: 16px;
}
.tox .tox-dialog__body-content > *:first-child {
  margin-top: 0;
}
.tox .tox-dialog__body-content > *:last-child {
  margin-bottom: 0;
}
.tox .tox-dialog__body-content > *:only-child {
  margin-bottom: 0;
  margin-top: 0;
}
.tox .tox-dialog__body-content a {
  color: #207ab7;
  cursor: pointer;
  text-decoration: none;
}
.tox .tox-dialog__body-content a:hover,
.tox .tox-dialog__body-content a:focus {
  color: #185d8c;
  text-decoration: none;
}
.tox .tox-dialog__body-content a:active {
  color: #185d8c;
  text-decoration: none;
}
.tox .tox-dialog__body-content svg {
  fill: #fff;
}
.tox .tox-dialog__body-content ul {
  display: block;
  list-style-type: disc;
  margin-bottom: 16px;
  -webkit-margin-end: 0;
          margin-inline-end: 0;
  -webkit-margin-start: 0;
          margin-inline-start: 0;
  -webkit-padding-start: 2.5rem;
          padding-inline-start: 2.5rem;
}
.tox .tox-dialog__body-content .tox-form__group h1 {
  color: #fff;
  font-size: 20px;
  font-style: normal;
  font-weight: bold;
  letter-spacing: normal;
  margin-bottom: 16px;
  margin-top: 2rem;
  text-transform: none;
}
.tox .tox-dialog__body-content .tox-form__group h2 {
  color: #fff;
  font-size: 16px;
  font-style: normal;
  font-weight: bold;
  letter-spacing: normal;
  margin-bottom: 16px;
  margin-top: 2rem;
  text-transform: none;
}
.tox .tox-dialog__body-content .tox-form__group p {
  margin-bottom: 16px;
}
.tox .tox-dialog__body-content .tox-form__group h1:first-child,
.tox .tox-dialog__body-content .tox-form__group h2:first-child,
.tox .tox-dialog__body-content .tox-form__group p:first-child {
  margin-top: 0;
}
.tox .tox-dialog__body-content .tox-form__group h1:last-child,
.tox .tox-dialog__body-content .tox-form__group h2:last-child,
.tox .tox-dialog__body-content .tox-form__group p:last-child {
  margin-bottom: 0;
}
.tox .tox-dialog__body-content .tox-form__group h1:only-child,
.tox .tox-dialog__body-content .tox-form__group h2:only-child,
.tox .tox-dialog__body-content .tox-form__group p:only-child {
  margin-bottom: 0;
  margin-top: 0;
}
.tox .tox-dialog--width-lg {
  height: 650px;
  max-width: 1200px;
}
.tox .tox-dialog--width-md {
  max-width: 800px;
}
.tox .tox-dialog--width-md .tox-dialog__body-content {
  overflow: auto;
}
.tox .tox-dialog__body-content--centered {
  text-align: center;
}
.tox .tox-dialog__footer {
  align-items: center;
  background-color: #2b3b4e;
  border-top: 1px solid #000000;
  display: flex;
  justify-content: space-between;
  padding: 8px 16px;
}
.tox .tox-dialog__footer-start,
.tox .tox-dialog__footer-end {
  display: flex;
}
.tox .tox-dialog__busy-spinner {
  align-items: center;
  background-color: rgba(34, 47, 62, 0.75);
  bottom: 0;
  display: flex;
  justify-content: center;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 3;
}
.tox .tox-dialog__table {
  border-collapse: collapse;
  width: 100%;
}
.tox .tox-dialog__table thead th {
  font-weight: bold;
  padding-bottom: 8px;
}
.tox .tox-dialog__table tbody tr {
  border-bottom: 1px solid #000000;
}
.tox .tox-dialog__table tbody tr:last-child {
  border-bottom: none;
}
.tox .tox-dialog__table td {
  padding-bottom: 8px;
  padding-top: 8px;
}
.tox .tox-dialog__popups {
  position: absolute;
  width: 100%;
  z-index: 1100;
}
.tox .tox-dialog__body-iframe {
  display: flex;
  flex: 1;
  flex-direction: column;
  -ms-flex-preferred-size: auto;
}
.tox .tox-dialog__body-iframe .tox-navobj {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-dialog__body-iframe .tox-navobj :nth-child(2) {
  flex: 1;
  -ms-flex-preferred-size: auto;
  height: 100%;
}
.tox .tox-dialog-dock-fadeout {
  opacity: 0;
  visibility: hidden;
}
.tox .tox-dialog-dock-fadein {
  opacity: 1;
  visibility: visible;
}
.tox .tox-dialog-dock-transition {
  transition: visibility 0s linear 0.3s, opacity 0.3s ease;
}
.tox .tox-dialog-dock-transition.tox-dialog-dock-fadein {
  transition-delay: 0s;
}
.tox.tox-platform-ie {
  /* IE11 CSS styles go here */
}
.tox.tox-platform-ie .tox-dialog-wrap {
  position: -ms-device-fixed;
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox:not([dir=rtl]) .tox-dialog__body-nav {
    margin-right: 0;
  }
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox:not([dir=rtl]) .tox-dialog__body-nav-item:not(:first-child) {
    margin-left: 8px;
  }
}
.tox:not([dir=rtl]) .tox-dialog__footer .tox-dialog__footer-start > *,
.tox:not([dir=rtl]) .tox-dialog__footer .tox-dialog__footer-end > * {
  margin-left: 8px;
}
.tox[dir=rtl] .tox-dialog__body {
  text-align: right;
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox[dir=rtl] .tox-dialog__body-nav {
    margin-left: 0;
  }
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox[dir=rtl] .tox-dialog__body-nav-item:not(:first-child) {
    margin-right: 8px;
  }
}
.tox[dir=rtl] .tox-dialog__footer .tox-dialog__footer-start > *,
.tox[dir=rtl] .tox-dialog__footer .tox-dialog__footer-end > * {
  margin-right: 8px;
}
body.tox-dialog__disable-scroll {
  overflow: hidden;
}
.tox .tox-dropzone-container {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-dropzone {
  align-items: center;
  background: #fff;
  border: 2px dashed #000000;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  justify-content: center;
  min-height: 100px;
  padding: 10px;
}
.tox .tox-dropzone p {
  color: rgba(255, 255, 255, 0.5);
  margin: 0 0 16px 0;
}
.tox .tox-edit-area {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
  overflow: hidden;
  position: relative;
}
.tox .tox-edit-area__iframe {
  background-color: #fff;
  border: 0;
  box-sizing: border-box;
  flex: 1;
  -ms-flex-preferred-size: auto;
  height: 100%;
  position: absolute;
  width: 100%;
}
.tox.tox-inline-edit-area {
  border: 1px dotted #000000;
}
.tox .tox-editor-container {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  overflow: hidden;
}
.tox .tox-editor-header {
  z-index: 1;
}
.tox:not(.tox-tinymce-inline) .tox-editor-header {
  box-shadow: none;
  transition: box-shadow 0.5s;
}
.tox.tox-tinymce--toolbar-bottom .tox-editor-header,
.tox.tox-tinymce-inline .tox-editor-header {
  margin-bottom: -1px;
}
.tox.tox-tinymce--toolbar-sticky-on .tox-editor-header {
  background-color: transparent;
  box-shadow: 0 4px 4px -3px rgba(0, 0, 0, 0.25);
}
.tox-editor-dock-fadeout {
  opacity: 0;
  visibility: hidden;
}
.tox-editor-dock-fadein {
  opacity: 1;
  visibility: visible;
}
.tox-editor-dock-transition {
  transition: visibility 0s linear 0.25s, opacity 0.25s ease;
}
.tox-editor-dock-transition.tox-editor-dock-fadein {
  transition-delay: 0s;
}
.tox .tox-control-wrap {
  flex: 1;
  position: relative;
}
.tox .tox-control-wrap:not(.tox-control-wrap--status-invalid) .tox-control-wrap__status-icon-invalid,
.tox .tox-control-wrap:not(.tox-control-wrap--status-unknown) .tox-control-wrap__status-icon-unknown,
.tox .tox-control-wrap:not(.tox-control-wrap--status-valid) .tox-control-wrap__status-icon-valid {
  display: none;
}
.tox .tox-control-wrap svg {
  display: block;
}
.tox .tox-control-wrap__status-icon-wrap {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.tox .tox-control-wrap__status-icon-invalid svg {
  fill: #c00;
}
.tox .tox-control-wrap__status-icon-unknown svg {
  fill: orange;
}
.tox .tox-control-wrap__status-icon-valid svg {
  fill: green;
}
.tox:not([dir=rtl]) .tox-control-wrap--status-invalid .tox-textfield,
.tox:not([dir=rtl]) .tox-control-wrap--status-unknown .tox-textfield,
.tox:not([dir=rtl]) .tox-control-wrap--status-valid .tox-textfield {
  padding-right: 32px;
}
.tox:not([dir=rtl]) .tox-control-wrap__status-icon-wrap {
  right: 4px;
}
.tox[dir=rtl] .tox-control-wrap--status-invalid .tox-textfield,
.tox[dir=rtl] .tox-control-wrap--status-unknown .tox-textfield,
.tox[dir=rtl] .tox-control-wrap--status-valid .tox-textfield {
  padding-left: 32px;
}
.tox[dir=rtl] .tox-control-wrap__status-icon-wrap {
  left: 4px;
}
.tox .tox-autocompleter {
  max-width: 25em;
}
.tox .tox-autocompleter .tox-menu {
  max-width: 25em;
}
.tox .tox-autocompleter .tox-autocompleter-highlight {
  font-weight: bold;
}
.tox .tox-color-input {
  display: flex;
  position: relative;
  z-index: 1;
}
.tox .tox-color-input .tox-textfield {
  z-index: -1;
}
.tox .tox-color-input span {
  border-color: rgba(42, 55, 70, 0.2);
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  box-sizing: border-box;
  height: 24px;
  position: absolute;
  top: 6px;
  width: 24px;
}
.tox .tox-color-input span:hover:not([aria-disabled=true]),
.tox .tox-color-input span:focus:not([aria-disabled=true]) {
  border-color: #207ab7;
  cursor: pointer;
}
.tox .tox-color-input span::before {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.25) 25%, transparent 25%), linear-gradient(-45deg, rgba(255, 255, 255, 0.25) 25%, transparent 25%), linear-gradient(45deg, transparent 75%, rgba(255, 255, 255, 0.25) 75%), linear-gradient(-45deg, transparent 75%, rgba(255, 255, 255, 0.25) 75%);
  background-position: 0 0, 0 6px, 6px -6px, -6px 0;
  background-size: 12px 12px;
  border: 1px solid #2b3b4e;
  border-radius: 3px;
  box-sizing: border-box;
  content: '';
  height: 24px;
  left: -1px;
  position: absolute;
  top: -1px;
  width: 24px;
  z-index: -1;
}
.tox .tox-color-input span[aria-disabled=true] {
  cursor: not-allowed;
}
.tox:not([dir=rtl]) .tox-color-input {
  /* stylelint-disable-next-line no-descending-specificity */
}
.tox:not([dir=rtl]) .tox-color-input .tox-textfield {
  padding-left: 36px;
}
.tox:not([dir=rtl]) .tox-color-input span {
  left: 6px;
}
.tox[dir=\"rtl\"] .tox-color-input {
  /* stylelint-disable-next-line no-descending-specificity */
}
.tox[dir=\"rtl\"] .tox-color-input .tox-textfield {
  padding-right: 36px;
}
.tox[dir=\"rtl\"] .tox-color-input span {
  right: 6px;
}
.tox .tox-label,
.tox .tox-toolbar-label {
  color: rgba(255, 255, 255, 0.5);
  display: block;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.3;
  padding: 0 8px 0 0;
  text-transform: none;
  white-space: nowrap;
}
.tox .tox-toolbar-label {
  padding: 0 8px;
}
.tox[dir=rtl] .tox-label {
  padding: 0 0 0 8px;
}
.tox .tox-form {
  display: flex;
  flex: 1;
  flex-direction: column;
  -ms-flex-preferred-size: auto;
}
.tox .tox-form__group {
  box-sizing: border-box;
  margin-bottom: 4px;
}
.tox .tox-form-group--maximize {
  flex: 1;
}
.tox .tox-form__group--error {
  color: #c00;
}
.tox .tox-form__group--collection {
  display: flex;
}
.tox .tox-form__grid {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-between;
}
.tox .tox-form__grid--2col > .tox-form__group {
  width: calc(50% - (8px / 2));
}
.tox .tox-form__grid--3col > .tox-form__group {
  width: calc(100% / 3 - (8px / 2));
}
.tox .tox-form__grid--4col > .tox-form__group {
  width: calc(25% - (8px / 2));
}
.tox .tox-form__controls-h-stack {
  align-items: center;
  display: flex;
}
.tox .tox-form__group--inline {
  align-items: center;
  display: flex;
}
.tox .tox-form__group--stretched {
  display: flex;
  flex: 1;
  flex-direction: column;
  -ms-flex-preferred-size: auto;
}
.tox .tox-form__group--stretched .tox-textarea {
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-form__group--stretched .tox-navobj {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-form__group--stretched .tox-navobj :nth-child(2) {
  flex: 1;
  -ms-flex-preferred-size: auto;
  height: 100%;
}
.tox:not([dir=rtl]) .tox-form__controls-h-stack > *:not(:first-child) {
  margin-left: 4px;
}
.tox[dir=rtl] .tox-form__controls-h-stack > *:not(:first-child) {
  margin-right: 4px;
}
.tox .tox-lock.tox-locked .tox-lock-icon__unlock,
.tox .tox-lock:not(.tox-locked) .tox-lock-icon__lock {
  display: none;
}
.tox .tox-textfield,
.tox .tox-toolbar-textfield,
.tox .tox-listboxfield .tox-listbox--select,
.tox .tox-textarea {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #2b3b4e;
  border-color: #000000;
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  box-sizing: border-box;
  color: #fff;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 16px;
  line-height: 24px;
  margin: 0;
  min-height: 34px;
  outline: none;
  padding: 5px 4.75px;
  resize: none;
  width: 100%;
}
.tox .tox-textfield[disabled],
.tox .tox-textarea[disabled] {
  background-color: #222f3e;
  color: rgba(255, 255, 255, 0.85);
  cursor: not-allowed;
}
.tox .tox-textfield:focus,
.tox .tox-listboxfield .tox-listbox--select:focus,
.tox .tox-textarea:focus {
  background-color: #2b3b4e;
  border-color: #207ab7;
  box-shadow: none;
  outline: none;
}
.tox .tox-toolbar-textfield {
  border-width: 0;
  margin-bottom: 3px;
  margin-top: 2px;
  max-width: 250px;
}
.tox .tox-naked-btn {
  background-color: transparent;
  border: 0;
  border-color: transparent;
  box-shadow: unset;
  color: #207ab7;
  cursor: pointer;
  display: block;
  margin: 0;
  padding: 0;
}
.tox .tox-naked-btn svg {
  display: block;
  fill: #fff;
}
.tox:not([dir=rtl]) .tox-toolbar-textfield + * {
  margin-left: 4px;
}
.tox[dir=rtl] .tox-toolbar-textfield + * {
  margin-right: 4px;
}
.tox .tox-listboxfield {
  cursor: pointer;
  position: relative;
}
.tox .tox-listboxfield .tox-listbox--select[disabled] {
  background-color: #19232e;
  color: rgba(255, 255, 255, 0.85);
  cursor: not-allowed;
}
.tox .tox-listbox__select-label {
  cursor: default;
  flex: 1;
  margin: 0 4px;
}
.tox .tox-listbox__select-chevron {
  align-items: center;
  display: flex;
  justify-content: center;
  width: 16px;
}
.tox .tox-listbox__select-chevron svg {
  fill: #fff;
}
.tox .tox-listboxfield .tox-listbox--select {
  align-items: center;
  display: flex;
}
.tox:not([dir=rtl]) .tox-listboxfield svg {
  right: 8px;
}
.tox[dir=rtl] .tox-listboxfield svg {
  left: 8px;
}
.tox .tox-selectfield {
  cursor: pointer;
  position: relative;
}
.tox .tox-selectfield select {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #2b3b4e;
  border-color: #000000;
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  box-sizing: border-box;
  color: #fff;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 16px;
  line-height: 24px;
  margin: 0;
  min-height: 34px;
  outline: none;
  padding: 5px 4.75px;
  resize: none;
  width: 100%;
}
.tox .tox-selectfield select[disabled] {
  background-color: #19232e;
  color: rgba(255, 255, 255, 0.85);
  cursor: not-allowed;
}
.tox .tox-selectfield select::-ms-expand {
  display: none;
}
.tox .tox-selectfield select:focus {
  background-color: #2b3b4e;
  border-color: #207ab7;
  box-shadow: none;
  outline: none;
}
.tox .tox-selectfield svg {
  pointer-events: none;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.tox:not([dir=rtl]) .tox-selectfield select[size=\"0\"],
.tox:not([dir=rtl]) .tox-selectfield select[size=\"1\"] {
  padding-right: 24px;
}
.tox:not([dir=rtl]) .tox-selectfield svg {
  right: 8px;
}
.tox[dir=rtl] .tox-selectfield select[size=\"0\"],
.tox[dir=rtl] .tox-selectfield select[size=\"1\"] {
  padding-left: 24px;
}
.tox[dir=rtl] .tox-selectfield svg {
  left: 8px;
}
.tox .tox-textarea {
  -webkit-appearance: textarea;
     -moz-appearance: textarea;
          appearance: textarea;
  white-space: pre-wrap;
}
.tox-fullscreen {
  border: 0;
  height: 100%;
  margin: 0;
  overflow: hidden;
  -ms-scroll-chaining: none;
      overscroll-behavior: none;
  padding: 0;
  touch-action: pinch-zoom;
  width: 100%;
}
.tox.tox-tinymce.tox-fullscreen .tox-statusbar__resize-handle {
  display: none;
}
.tox.tox-tinymce.tox-fullscreen,
.tox-shadowhost.tox-fullscreen {
  left: 0;
  position: fixed;
  top: 0;
  z-index: 1200;
}
.tox.tox-tinymce.tox-fullscreen {
  background-color: transparent;
}
.tox-fullscreen .tox.tox-tinymce-aux,
.tox-fullscreen ~ .tox.tox-tinymce-aux {
  z-index: 1201;
}
.tox .tox-help__more-link {
  list-style: none;
  margin-top: 1em;
}
.tox .tox-image-tools {
  width: 100%;
}
.tox .tox-image-tools__toolbar {
  align-items: center;
  display: flex;
  justify-content: center;
}
.tox .tox-image-tools__image {
  background-color: #666;
  height: 380px;
  overflow: auto;
  position: relative;
  width: 100%;
}
.tox .tox-image-tools__image,
.tox .tox-image-tools__image + .tox-image-tools__toolbar {
  margin-top: 8px;
}
.tox .tox-image-tools__image-bg {
  background: url(data:image/gif;base64,R0lGODdhDAAMAIABAMzMzP///ywAAAAADAAMAAACFoQfqYeabNyDMkBQb81Uat85nxguUAEAOw==);
}
.tox .tox-image-tools__toolbar > .tox-spacer {
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-croprect-block {
  background: black;
  filter: alpha(opacity=50);
  opacity: 0.5;
  position: absolute;
  zoom: 1;
}
.tox .tox-croprect-handle {
  border: 2px solid white;
  height: 20px;
  left: 0;
  position: absolute;
  top: 0;
  width: 20px;
}
.tox .tox-croprect-handle-move {
  border: 0;
  cursor: move;
  position: absolute;
}
.tox .tox-croprect-handle-nw {
  border-width: 2px 0 0 2px;
  cursor: nw-resize;
  left: 100px;
  margin: -2px 0 0 -2px;
  top: 100px;
}
.tox .tox-croprect-handle-ne {
  border-width: 2px 2px 0 0;
  cursor: ne-resize;
  left: 200px;
  margin: -2px 0 0 -20px;
  top: 100px;
}
.tox .tox-croprect-handle-sw {
  border-width: 0 0 2px 2px;
  cursor: sw-resize;
  left: 100px;
  margin: -20px 2px 0 -2px;
  top: 200px;
}
.tox .tox-croprect-handle-se {
  border-width: 0 2px 2px 0;
  cursor: se-resize;
  left: 200px;
  margin: -20px 0 0 -20px;
  top: 200px;
}
.tox:not([dir=rtl]) .tox-image-tools__toolbar > .tox-slider:not(:first-of-type) {
  margin-left: 8px;
}
.tox:not([dir=rtl]) .tox-image-tools__toolbar > .tox-button + .tox-slider {
  margin-left: 32px;
}
.tox:not([dir=rtl]) .tox-image-tools__toolbar > .tox-slider + .tox-button {
  margin-left: 32px;
}
.tox[dir=rtl] .tox-image-tools__toolbar > .tox-slider:not(:first-of-type) {
  margin-right: 8px;
}
.tox[dir=rtl] .tox-image-tools__toolbar > .tox-button + .tox-slider {
  margin-right: 32px;
}
.tox[dir=rtl] .tox-image-tools__toolbar > .tox-slider + .tox-button {
  margin-right: 32px;
}
.tox .tox-insert-table-picker {
  display: flex;
  flex-wrap: wrap;
  width: 170px;
}
.tox .tox-insert-table-picker > div {
  border-color: #000000;
  border-style: solid;
  border-width: 0 1px 1px 0;
  box-sizing: border-box;
  height: 17px;
  width: 17px;
}
.tox .tox-collection--list .tox-collection__group .tox-insert-table-picker {
  margin: -4px 0;
}
.tox .tox-insert-table-picker .tox-insert-table-picker__selected {
  background-color: rgba(32, 122, 183, 0.5);
  border-color: rgba(32, 122, 183, 0.5);
}
.tox .tox-insert-table-picker__label {
  color: #fff;
  display: block;
  font-size: 14px;
  padding: 4px;
  text-align: center;
  width: 100%;
}
.tox:not([dir=rtl]) {
  /* stylelint-disable-next-line no-descending-specificity */
}
.tox:not([dir=rtl]) .tox-insert-table-picker > div:nth-child(10n) {
  border-right: 0;
}
.tox[dir=rtl] {
  /* stylelint-disable-next-line no-descending-specificity */
}
.tox[dir=rtl] .tox-insert-table-picker > div:nth-child(10n+1) {
  border-right: 0;
}
.tox {
  /* stylelint-disable */
  /* stylelint-enable */
}
.tox .tox-menu {
  background-color: #2b3b4e;
  border: 1px solid #000000;
  border-radius: 3px;
  box-shadow: 0 4px 8px 0 rgba(42, 55, 70, 0.1);
  display: inline-block;
  overflow: hidden;
  vertical-align: top;
  z-index: 1150;
}
.tox .tox-menu.tox-collection.tox-collection--list {
  padding: 0;
}
.tox .tox-menu.tox-collection.tox-collection--toolbar {
  padding: 4px;
}
.tox .tox-menu.tox-collection.tox-collection--grid {
  padding: 4px;
}
.tox .tox-menu__label h1,
.tox .tox-menu__label h2,
.tox .tox-menu__label h3,
.tox .tox-menu__label h4,
.tox .tox-menu__label h5,
.tox .tox-menu__label h6,
.tox .tox-menu__label p,
.tox .tox-menu__label blockquote,
.tox .tox-menu__label code {
  margin: 0;
}
.tox .tox-menubar {
  background: url(\"data:image/svg+xml;charset=utf8,%3Csvg height='39px' viewBox='0 0 40 39px' width='40' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='0' y='38px' width='100' height='1' fill='%23000000'/%3E%3C/svg%3E\") left 0 top 0 #222f3e;
  background-color: #222f3e;
  display: flex;
  flex: 0 0 auto;
  flex-shrink: 0;
  flex-wrap: wrap;
  padding: 0 4px 0 4px;
}
.tox.tox-tinymce:not(.tox-tinymce-inline) .tox-editor-header:not(:first-child) .tox-menubar {
  border-top: 1px solid #000000;
}
/* Deprecated. Remove in next major release */
.tox .tox-mbtn {
  align-items: center;
  background: transparent;
  border: 0;
  border-radius: 3px;
  box-shadow: none;
  color: #fff;
  display: flex;
  flex: 0 0 auto;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  height: 34px;
  justify-content: center;
  margin: 2px 0 3px 0;
  outline: none;
  overflow: hidden;
  padding: 0 4px;
  text-transform: none;
  width: auto;
}
.tox .tox-mbtn[disabled] {
  background-color: transparent;
  border: 0;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
  cursor: not-allowed;
}
.tox .tox-mbtn:focus:not(:disabled) {
  background: #4a5562;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-mbtn--active {
  background: #757d87;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-mbtn:hover:not(:disabled):not(.tox-mbtn--active) {
  background: #4a5562;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-mbtn__select-label {
  cursor: default;
  font-weight: normal;
  margin: 0 4px;
}
.tox .tox-mbtn[disabled] .tox-mbtn__select-label {
  cursor: not-allowed;
}
.tox .tox-mbtn__select-chevron {
  align-items: center;
  display: flex;
  justify-content: center;
  width: 16px;
  display: none;
}
.tox .tox-notification {
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  box-sizing: border-box;
  display: -ms-grid;
  display: grid;
  font-size: 14px;
  font-weight: normal;
  -ms-grid-columns: minmax(40px, 1fr) auto minmax(40px, 1fr);
      grid-template-columns: minmax(40px, 1fr) auto minmax(40px, 1fr);
  margin-top: 4px;
  opacity: 0;
  padding: 4px;
  transition: transform 100ms ease-in, opacity 150ms ease-in;
}
.tox .tox-notification p {
  font-size: 14px;
  font-weight: normal;
}
.tox .tox-notification a {
  cursor: pointer;
  text-decoration: underline;
}
.tox .tox-notification--in {
  opacity: 1;
}
.tox .tox-notification--success {
  background-color: #e4eeda;
  border-color: #d7e6c8;
  color: #fff;
}
.tox .tox-notification--success p {
  color: #fff;
}
.tox .tox-notification--success a {
  color: #547831;
}
.tox .tox-notification--success svg {
  fill: #fff;
}
.tox .tox-notification--error {
  background-color: #f8dede;
  border-color: #f2bfbf;
  color: #fff;
}
.tox .tox-notification--error p {
  color: #fff;
}
.tox .tox-notification--error a {
  color: #c00;
}
.tox .tox-notification--error svg {
  fill: #fff;
}
.tox .tox-notification--warn,
.tox .tox-notification--warning {
  background-color: #fffaea;
  border-color: #ffe89d;
  color: #fff;
}
.tox .tox-notification--warn p,
.tox .tox-notification--warning p {
  color: #fff;
}
.tox .tox-notification--warn a,
.tox .tox-notification--warning a {
  color: #fff;
}
.tox .tox-notification--warn svg,
.tox .tox-notification--warning svg {
  fill: #fff;
}
.tox .tox-notification--info {
  background-color: #d9edf7;
  border-color: #779ecb;
  color: #fff;
}
.tox .tox-notification--info p {
  color: #fff;
}
.tox .tox-notification--info a {
  color: #fff;
}
.tox .tox-notification--info svg {
  fill: #fff;
}
.tox .tox-notification__body {
  -ms-grid-row-align: center;
      align-self: center;
  color: #fff;
  font-size: 14px;
  -ms-grid-column-span: 1;
  grid-column-end: 3;
  -ms-grid-column: 2;
      grid-column-start: 2;
  -ms-grid-row-span: 1;
  grid-row-end: 2;
  -ms-grid-row: 1;
      grid-row-start: 1;
  text-align: center;
  white-space: normal;
  word-break: break-all;
  word-break: break-word;
}
.tox .tox-notification__body > * {
  margin: 0;
}
.tox .tox-notification__body > * + * {
  margin-top: 1rem;
}
.tox .tox-notification__icon {
  -ms-grid-row-align: center;
      align-self: center;
  -ms-grid-column-span: 1;
  grid-column-end: 2;
  -ms-grid-column: 1;
      grid-column-start: 1;
  -ms-grid-row-span: 1;
  grid-row-end: 2;
  -ms-grid-row: 1;
      grid-row-start: 1;
  -ms-grid-column-align: end;
      justify-self: end;
}
.tox .tox-notification__icon svg {
  display: block;
}
.tox .tox-notification__dismiss {
  -ms-grid-row-align: start;
      align-self: start;
  -ms-grid-column-span: 1;
  grid-column-end: 4;
  -ms-grid-column: 3;
      grid-column-start: 3;
  -ms-grid-row-span: 1;
  grid-row-end: 2;
  -ms-grid-row: 1;
      grid-row-start: 1;
  -ms-grid-column-align: end;
      justify-self: end;
}
.tox .tox-notification .tox-progress-bar {
  -ms-grid-column-span: 3;
  grid-column-end: 4;
  -ms-grid-column: 1;
      grid-column-start: 1;
  -ms-grid-row-span: 1;
  grid-row-end: 3;
  -ms-grid-row: 2;
      grid-row-start: 2;
  -ms-grid-column-align: center;
      justify-self: center;
}
.tox .tox-pop {
  display: inline-block;
  position: relative;
}
.tox .tox-pop--resizing {
  transition: width 0.1s ease;
}
.tox .tox-pop--resizing .tox-toolbar,
.tox .tox-pop--resizing .tox-toolbar__group {
  flex-wrap: nowrap;
}
.tox .tox-pop--transition {
  transition: 0.15s ease;
  transition-property: left, right, top, bottom;
}
.tox .tox-pop--transition::before,
.tox .tox-pop--transition::after {
  transition: all 0.15s, visibility 0s, opacity 0.075s ease 0.075s;
}
.tox .tox-pop__dialog {
  background-color: #222f3e;
  border: 1px solid #000000;
  border-radius: 3px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
  min-width: 0;
  overflow: hidden;
}
.tox .tox-pop__dialog > *:not(.tox-toolbar) {
  margin: 4px 4px 4px 8px;
}
.tox .tox-pop__dialog .tox-toolbar {
  background-color: transparent;
  margin-bottom: -1px;
}
.tox .tox-pop::before,
.tox .tox-pop::after {
  border-style: solid;
  content: '';
  display: block;
  height: 0;
  opacity: 1;
  position: absolute;
  width: 0;
}
.tox .tox-pop.tox-pop--inset::before,
.tox .tox-pop.tox-pop--inset::after {
  opacity: 0;
  transition: all 0s 0.15s, visibility 0s, opacity 0.075s ease;
}
.tox .tox-pop.tox-pop--bottom::before,
.tox .tox-pop.tox-pop--bottom::after {
  left: 50%;
  top: 100%;
}
.tox .tox-pop.tox-pop--bottom::after {
  border-color: #222f3e transparent transparent transparent;
  border-width: 8px;
  margin-left: -8px;
  margin-top: -1px;
}
.tox .tox-pop.tox-pop--bottom::before {
  border-color: #000000 transparent transparent transparent;
  border-width: 9px;
  margin-left: -9px;
}
.tox .tox-pop.tox-pop--top::before,
.tox .tox-pop.tox-pop--top::after {
  left: 50%;
  top: 0;
  transform: translateY(-100%);
}
.tox .tox-pop.tox-pop--top::after {
  border-color: transparent transparent #222f3e transparent;
  border-width: 8px;
  margin-left: -8px;
  margin-top: 1px;
}
.tox .tox-pop.tox-pop--top::before {
  border-color: transparent transparent #000000 transparent;
  border-width: 9px;
  margin-left: -9px;
}
.tox .tox-pop.tox-pop--left::before,
.tox .tox-pop.tox-pop--left::after {
  left: 0;
  top: calc(50% - 1px);
  transform: translateY(-50%);
}
.tox .tox-pop.tox-pop--left::after {
  border-color: transparent #222f3e transparent transparent;
  border-width: 8px;
  margin-left: -15px;
}
.tox .tox-pop.tox-pop--left::before {
  border-color: transparent #000000 transparent transparent;
  border-width: 10px;
  margin-left: -19px;
}
.tox .tox-pop.tox-pop--right::before,
.tox .tox-pop.tox-pop--right::after {
  left: 100%;
  top: calc(50% + 1px);
  transform: translateY(-50%);
}
.tox .tox-pop.tox-pop--right::after {
  border-color: transparent transparent transparent #222f3e;
  border-width: 8px;
  margin-left: -1px;
}
.tox .tox-pop.tox-pop--right::before {
  border-color: transparent transparent transparent #000000;
  border-width: 10px;
  margin-left: -1px;
}
.tox .tox-pop.tox-pop--align-left::before,
.tox .tox-pop.tox-pop--align-left::after {
  left: 20px;
}
.tox .tox-pop.tox-pop--align-right::before,
.tox .tox-pop.tox-pop--align-right::after {
  left: calc(100% - 20px);
}
.tox .tox-sidebar-wrap {
  display: flex;
  flex-direction: row;
  flex-grow: 1;
  -ms-flex-preferred-size: 0;
  min-height: 0;
}
.tox .tox-sidebar {
  background-color: #222f3e;
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
}
.tox .tox-sidebar__slider {
  display: flex;
  overflow: hidden;
}
.tox .tox-sidebar__pane-container {
  display: flex;
}
.tox .tox-sidebar__pane {
  display: flex;
}
.tox .tox-sidebar--sliding-closed {
  opacity: 0;
}
.tox .tox-sidebar--sliding-open {
  opacity: 1;
}
.tox .tox-sidebar--sliding-growing,
.tox .tox-sidebar--sliding-shrinking {
  transition: width 0.5s ease, opacity 0.5s ease;
}
.tox .tox-selector {
  background-color: #4099ff;
  border-color: #4099ff;
  border-style: solid;
  border-width: 1px;
  box-sizing: border-box;
  display: inline-block;
  height: 10px;
  position: absolute;
  width: 10px;
}
.tox.tox-platform-touch .tox-selector {
  height: 12px;
  width: 12px;
}
.tox .tox-slider {
  align-items: center;
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
  height: 24px;
  justify-content: center;
  position: relative;
}
.tox .tox-slider__rail {
  background-color: transparent;
  border: 1px solid #000000;
  border-radius: 3px;
  height: 10px;
  min-width: 120px;
  width: 100%;
}
.tox .tox-slider__handle {
  background-color: #207ab7;
  border: 2px solid #185d8c;
  border-radius: 3px;
  box-shadow: none;
  height: 24px;
  left: 50%;
  position: absolute;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  width: 14px;
}
.tox .tox-source-code {
  overflow: auto;
}
.tox .tox-spinner {
  display: flex;
}
.tox .tox-spinner > div {
  animation: tam-bouncing-dots 1.5s ease-in-out 0s infinite both;
  background-color: rgba(255, 255, 255, 0.5);
  border-radius: 100%;
  height: 8px;
  width: 8px;
}
.tox .tox-spinner > div:nth-child(1) {
  animation-delay: -0.32s;
}
.tox .tox-spinner > div:nth-child(2) {
  animation-delay: -0.16s;
}
@keyframes tam-bouncing-dots {
  0%,
  80%,
  100% {
    transform: scale(0);
  }
  40% {
    transform: scale(1);
  }
}
.tox:not([dir=rtl]) .tox-spinner > div:not(:first-child) {
  margin-left: 4px;
}
.tox[dir=rtl] .tox-spinner > div:not(:first-child) {
  margin-right: 4px;
}
.tox .tox-statusbar {
  align-items: center;
  background-color: #222f3e;
  border-top: 1px solid #000000;
  color: #fff;
  display: flex;
  flex: 0 0 auto;
  font-size: 12px;
  font-weight: normal;
  height: 18px;
  overflow: hidden;
  padding: 0 8px;
  position: relative;
  text-transform: uppercase;
}
.tox .tox-statusbar__text-container {
  display: flex;
  flex: 1 1 auto;
  justify-content: flex-end;
  overflow: hidden;
}
.tox .tox-statusbar__path {
  display: flex;
  flex: 1 1 auto;
  margin-right: auto;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.tox .tox-statusbar__path > * {
  display: inline;
  white-space: nowrap;
}
.tox .tox-statusbar__wordcount {
  flex: 0 0 auto;
  margin-left: 1ch;
}
.tox .tox-statusbar a,
.tox .tox-statusbar__path-item,
.tox .tox-statusbar__wordcount {
  color: #fff;
  text-decoration: none;
}
.tox .tox-statusbar a:hover:not(:disabled):not([aria-disabled=true]),
.tox .tox-statusbar__path-item:hover:not(:disabled):not([aria-disabled=true]),
.tox .tox-statusbar__wordcount:hover:not(:disabled):not([aria-disabled=true]),
.tox .tox-statusbar a:focus:not(:disabled):not([aria-disabled=true]),
.tox .tox-statusbar__path-item:focus:not(:disabled):not([aria-disabled=true]),
.tox .tox-statusbar__wordcount:focus:not(:disabled):not([aria-disabled=true]) {
  cursor: pointer;
  text-decoration: underline;
}
.tox .tox-statusbar__resize-handle {
  align-items: flex-end;
  align-self: stretch;
  cursor: nwse-resize;
  display: flex;
  flex: 0 0 auto;
  justify-content: flex-end;
  margin-left: auto;
  margin-right: -8px;
  padding-left: 1ch;
}
.tox .tox-statusbar__resize-handle svg {
  display: block;
  fill: #fff;
}
.tox .tox-statusbar__resize-handle:focus svg {
  background-color: #4a5562;
  border-radius: 1px;
  box-shadow: 0 0 0 2px #4a5562;
}
.tox:not([dir=rtl]) .tox-statusbar__path > * {
  margin-right: 4px;
}
.tox:not([dir=rtl]) .tox-statusbar__branding {
  margin-left: 1ch;
}
.tox[dir=rtl] .tox-statusbar {
  flex-direction: row-reverse;
}
.tox[dir=rtl] .tox-statusbar__path > * {
  margin-left: 4px;
}
.tox .tox-throbber {
  z-index: 1299;
}
.tox .tox-throbber__busy-spinner {
  align-items: center;
  background-color: rgba(34, 47, 62, 0.6);
  bottom: 0;
  display: flex;
  justify-content: center;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}
.tox .tox-tbtn {
  align-items: center;
  background: transparent;
  border: 0;
  border-radius: 3px;
  box-shadow: none;
  color: #fff;
  display: flex;
  flex: 0 0 auto;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  height: 34px;
  justify-content: center;
  margin: 2px 0 3px 0;
  outline: none;
  overflow: hidden;
  padding: 0;
  text-transform: none;
  width: 34px;
}
.tox .tox-tbtn svg {
  display: block;
  fill: #fff;
}
.tox .tox-tbtn.tox-tbtn-more {
  padding-left: 5px;
  padding-right: 5px;
  width: inherit;
}
.tox .tox-tbtn:focus {
  background: #4a5562;
  border: 0;
  box-shadow: none;
}
.tox .tox-tbtn:hover {
  background: #4a5562;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-tbtn:hover svg {
  fill: #fff;
}
.tox .tox-tbtn:active {
  background: #757d87;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-tbtn:active svg {
  fill: #fff;
}
.tox .tox-tbtn--disabled,
.tox .tox-tbtn--disabled:hover,
.tox .tox-tbtn:disabled,
.tox .tox-tbtn:disabled:hover {
  background: transparent;
  border: 0;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
  cursor: not-allowed;
}
.tox .tox-tbtn--disabled svg,
.tox .tox-tbtn--disabled:hover svg,
.tox .tox-tbtn:disabled svg,
.tox .tox-tbtn:disabled:hover svg {
  /* stylelint-disable-line no-descending-specificity */
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-tbtn--enabled,
.tox .tox-tbtn--enabled:hover {
  background: #757d87;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-tbtn--enabled > *,
.tox .tox-tbtn--enabled:hover > * {
  transform: none;
}
.tox .tox-tbtn--enabled svg,
.tox .tox-tbtn--enabled:hover svg {
  /* stylelint-disable-line no-descending-specificity */
  fill: #fff;
}
.tox .tox-tbtn:focus:not(.tox-tbtn--disabled) {
  color: #fff;
}
.tox .tox-tbtn:focus:not(.tox-tbtn--disabled) svg {
  fill: #fff;
}
.tox .tox-tbtn:active > * {
  transform: none;
}
.tox .tox-tbtn--md {
  height: 51px;
  width: 51px;
}
.tox .tox-tbtn--lg {
  flex-direction: column;
  height: 68px;
  width: 68px;
}
.tox .tox-tbtn--return {
  -ms-grid-row-align: stretch;
      align-self: stretch;
  height: unset;
  width: 16px;
}
.tox .tox-tbtn--labeled {
  padding: 0 4px;
  width: unset;
}
.tox .tox-tbtn__vlabel {
  display: block;
  font-size: 10px;
  font-weight: normal;
  letter-spacing: -0.025em;
  margin-bottom: 4px;
  white-space: nowrap;
}
.tox .tox-tbtn--select {
  margin: 2px 0 3px 0;
  padding: 0 4px;
  width: auto;
}
.tox .tox-tbtn__select-label {
  cursor: default;
  font-weight: normal;
  margin: 0 4px;
}
.tox .tox-tbtn__select-chevron {
  align-items: center;
  display: flex;
  justify-content: center;
  width: 16px;
}
.tox .tox-tbtn__select-chevron svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-tbtn--bespoke .tox-tbtn__select-label {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  width: 7em;
}
.tox .tox-split-button {
  border: 0;
  border-radius: 3px;
  box-sizing: border-box;
  display: flex;
  margin: 2px 0 3px 0;
  overflow: hidden;
}
.tox .tox-split-button:hover {
  box-shadow: 0 0 0 1px #4a5562 inset;
}
.tox .tox-split-button:focus {
  background: #4a5562;
  box-shadow: none;
  color: #fff;
}
.tox .tox-split-button > * {
  border-radius: 0;
}
.tox .tox-split-button__chevron {
  width: 16px;
}
.tox .tox-split-button__chevron svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-split-button .tox-tbtn {
  margin: 0;
}
.tox.tox-platform-touch .tox-split-button .tox-tbtn:first-child {
  width: 30px;
}
.tox.tox-platform-touch .tox-split-button__chevron {
  width: 20px;
}
.tox .tox-split-button.tox-tbtn--disabled:hover,
.tox .tox-split-button.tox-tbtn--disabled:focus,
.tox .tox-split-button.tox-tbtn--disabled .tox-tbtn:hover,
.tox .tox-split-button.tox-tbtn--disabled .tox-tbtn:focus {
  background: transparent;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
}
.tox .tox-toolbar-overlord {
  background-color: #222f3e;
}
.tox .tox-toolbar,
.tox .tox-toolbar__primary,
.tox .tox-toolbar__overflow {
  background: url(\"data:image/svg+xml;charset=utf8,%3Csvg height='39px' viewBox='0 0 40 39px' width='40' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='0' y='38px' width='100' height='1' fill='%23000000'/%3E%3C/svg%3E\") left 0 top 0 #222f3e;
  background-color: #222f3e;
  display: flex;
  flex: 0 0 auto;
  flex-shrink: 0;
  flex-wrap: wrap;
  padding: 0 0;
}
.tox .tox-toolbar__overflow.tox-toolbar__overflow--closed {
  height: 0;
  opacity: 0;
  padding-bottom: 0;
  padding-top: 0;
  visibility: hidden;
}
.tox .tox-toolbar__overflow--growing {
  transition: height 0.3s ease, opacity 0.2s linear 0.1s;
}
.tox .tox-toolbar__overflow--shrinking {
  transition: opacity 0.3s ease, height 0.2s linear 0.1s, visibility 0s linear 0.3s;
}
.tox .tox-menubar + .tox-toolbar,
.tox .tox-menubar + .tox-toolbar-overlord .tox-toolbar__primary {
  border-top: 1px solid #000000;
  margin-top: -1px;
}
.tox .tox-toolbar--scrolling {
  flex-wrap: nowrap;
  overflow-x: auto;
}
.tox .tox-pop .tox-toolbar {
  border-width: 0;
}
.tox .tox-toolbar--no-divider {
  background-image: none;
}
.tox-tinymce:not(.tox-tinymce-inline) .tox-editor-header:not(:first-child) .tox-toolbar:first-child,
.tox-tinymce:not(.tox-tinymce-inline) .tox-editor-header:not(:first-child) .tox-toolbar-overlord:first-child .tox-toolbar__primary {
  border-top: 1px solid #000000;
}
.tox.tox-tinymce-aux .tox-toolbar__overflow {
  background-color: #222f3e;
  border: 1px solid #000000;
  border-radius: 3px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
}
.tox .tox-toolbar__group {
  align-items: center;
  display: flex;
  flex-wrap: wrap;
  margin: 0 0;
  padding: 0 4px 0 4px;
}
.tox .tox-toolbar__group--pull-right {
  margin-left: auto;
}
.tox .tox-toolbar--scrolling .tox-toolbar__group {
  flex-shrink: 0;
  flex-wrap: nowrap;
}
.tox:not([dir=rtl]) .tox-toolbar__group:not(:last-of-type) {
  border-right: 1px solid #000000;
}
.tox[dir=rtl] .tox-toolbar__group:not(:last-of-type) {
  border-left: 1px solid #000000;
}
.tox .tox-tooltip {
  display: inline-block;
  padding: 8px;
  position: relative;
}
.tox .tox-tooltip__body {
  background-color: #3d546f;
  border-radius: 3px;
  box-shadow: 0 2px 4px rgba(42, 55, 70, 0.3);
  color: rgba(255, 255, 255, 0.75);
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  padding: 4px 8px;
  text-transform: none;
}
.tox .tox-tooltip__arrow {
  position: absolute;
}
.tox .tox-tooltip--down .tox-tooltip__arrow {
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-top: 8px solid #3d546f;
  bottom: 0;
  left: 50%;
  position: absolute;
  transform: translateX(-50%);
}
.tox .tox-tooltip--up .tox-tooltip__arrow {
  border-bottom: 8px solid #3d546f;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  left: 50%;
  position: absolute;
  top: 0;
  transform: translateX(-50%);
}
.tox .tox-tooltip--right .tox-tooltip__arrow {
  border-bottom: 8px solid transparent;
  border-left: 8px solid #3d546f;
  border-top: 8px solid transparent;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
}
.tox .tox-tooltip--left .tox-tooltip__arrow {
  border-bottom: 8px solid transparent;
  border-right: 8px solid #3d546f;
  border-top: 8px solid transparent;
  left: 0;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.tox .tox-well {
  border: 1px solid #000000;
  border-radius: 3px;
  padding: 8px;
  width: 100%;
}
.tox .tox-well > *:first-child {
  margin-top: 0;
}
.tox .tox-well > *:last-child {
  margin-bottom: 0;
}
.tox .tox-well > *:only-child {
  margin: 0;
}
.tox .tox-custom-editor {
  border: 1px solid #000000;
  border-radius: 3px;
  display: flex;
  flex: 1;
  position: relative;
}
/* stylelint-disable */
.tox {
  /* stylelint-enable */
}
.tox .tox-dialog-loading::before {
  background-color: rgba(0, 0, 0, 0.5);
  content: \"\";
  height: 100%;
  position: absolute;
  width: 100%;
  z-index: 1000;
}
.tox .tox-tab {
  cursor: pointer;
}
.tox .tox-dialog__content-js {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-dialog__body-content .tox-collection {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-image-tools-edit-panel {
  height: 60px;
}
.tox .tox-image-tools__sidebar {
  height: 60px;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/skins/ui/oxide-dark/skin.css";
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
 */
.tox {
  box-shadow: none;
  box-sizing: content-box;
  color: #2A3746;
  cursor: auto;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 16px;
  font-style: normal;
  font-weight: normal;
  line-height: normal;
  -webkit-tap-highlight-color: transparent;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  vertical-align: initial;
  white-space: normal;
}
.tox *:not(svg):not(rect) {
  box-sizing: inherit;
  color: inherit;
  cursor: inherit;
  direction: inherit;
  font-family: inherit;
  font-size: inherit;
  font-style: inherit;
  font-weight: inherit;
  line-height: inherit;
  -webkit-tap-highlight-color: inherit;
  text-align: inherit;
  text-decoration: inherit;
  text-shadow: inherit;
  text-transform: inherit;
  vertical-align: inherit;
  white-space: inherit;
}
.tox *:not(svg):not(rect) {
  /* stylelint-disable-line no-duplicate-selectors */
  background: transparent;
  border: 0;
  box-shadow: none;
  float: none;
  height: auto;
  margin: 0;
  max-width: none;
  outline: 0;
  padding: 0;
  position: static;
  width: auto;
}
.tox:not([dir=rtl]) {
  direction: ltr;
  text-align: left;
}
.tox[dir=rtl] {
  direction: rtl;
  text-align: right;
}
.tox-tinymce {
  border: 1px solid #000000;
  border-radius: 0;
  box-shadow: none;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  overflow: hidden;
  position: relative;
  visibility: inherit !important;
}
.tox-tinymce-inline {
  border: none;
  box-shadow: none;
}
.tox-tinymce-inline .tox-editor-header {
  background-color: transparent;
  border: 1px solid #000000;
  border-radius: 0;
  box-shadow: none;
}
.tox-tinymce-aux {
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  z-index: 1300;
}
.tox-tinymce *:focus,
.tox-tinymce-aux *:focus {
  outline: none;
}
button::-moz-focus-inner {
  border: 0;
}
.tox[dir=rtl] .tox-icon--flip svg {
  transform: rotateY(180deg);
}
.tox .accessibility-issue__header {
  align-items: center;
  display: flex;
  margin-bottom: 4px;
}
.tox .accessibility-issue__description {
  align-items: stretch;
  border: 1px solid #000000;
  border-radius: 3px;
  display: flex;
  justify-content: space-between;
}
.tox .accessibility-issue__description > div {
  padding-bottom: 4px;
}
.tox .accessibility-issue__description > div > div {
  align-items: center;
  display: flex;
  margin-bottom: 4px;
}
.tox .accessibility-issue__description > *:last-child:not(:only-child) {
  border-color: #000000;
  border-style: solid;
}
.tox .accessibility-issue__repair {
  margin-top: 16px;
}
.tox .tox-dialog__body-content .accessibility-issue--info .accessibility-issue__description {
  background-color: rgba(32, 122, 183, 0.5);
  border-color: #207ab7;
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--info .accessibility-issue__description > *:last-child {
  border-color: #207ab7;
}
.tox .tox-dialog__body-content .accessibility-issue--info .tox-form__group h2 {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--info .tox-icon svg {
  fill: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--info a .tox-icon {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--warn .accessibility-issue__description {
  background-color: rgba(255, 165, 0, 0.5);
  border-color: rgba(255, 165, 0, 0.8);
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--warn .accessibility-issue__description > *:last-child {
  border-color: rgba(255, 165, 0, 0.8);
}
.tox .tox-dialog__body-content .accessibility-issue--warn .tox-form__group h2 {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--warn .tox-icon svg {
  fill: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--warn a .tox-icon {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--error .accessibility-issue__description {
  background-color: rgba(204, 0, 0, 0.5);
  border-color: rgba(204, 0, 0, 0.8);
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--error .accessibility-issue__description > *:last-child {
  border-color: rgba(204, 0, 0, 0.8);
}
.tox .tox-dialog__body-content .accessibility-issue--error .tox-form__group h2 {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--error .tox-icon svg {
  fill: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--error a .tox-icon {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--success .accessibility-issue__description {
  background-color: rgba(120, 171, 70, 0.5);
  border-color: rgba(120, 171, 70, 0.8);
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--success .accessibility-issue__description > *:last-child {
  border-color: rgba(120, 171, 70, 0.8);
}
.tox .tox-dialog__body-content .accessibility-issue--success .tox-form__group h2 {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--success .tox-icon svg {
  fill: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue--success a .tox-icon {
  color: #fff;
}
.tox .tox-dialog__body-content .accessibility-issue__header h1,
.tox .tox-dialog__body-content .tox-form__group .accessibility-issue__description h2 {
  margin-top: 0;
}
.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__header .tox-button {
  margin-left: 4px;
}
.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__header > *:nth-last-child(2) {
  margin-left: auto;
}
.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__description {
  padding: 4px 4px 4px 8px;
}
.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__description > *:last-child {
  border-left-width: 1px;
  padding-left: 4px;
}
.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__header .tox-button {
  margin-right: 4px;
}
.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__header > *:nth-last-child(2) {
  margin-right: auto;
}
.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__description {
  padding: 4px 8px 4px 4px;
}
.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__description > *:last-child {
  border-right-width: 1px;
  padding-right: 4px;
}
.tox .tox-anchorbar {
  display: flex;
  flex: 0 0 auto;
}
.tox .tox-bar {
  display: flex;
  flex: 0 0 auto;
}
.tox .tox-button {
  background-color: #207ab7;
  background-image: none;
  background-position: 0 0;
  background-repeat: repeat;
  border-color: #207ab7;
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 14px;
  font-style: normal;
  font-weight: bold;
  letter-spacing: normal;
  line-height: 24px;
  margin: 0;
  outline: none;
  padding: 4px 16px;
  text-align: center;
  text-decoration: none;
  text-transform: none;
  white-space: nowrap;
}
.tox .tox-button[disabled] {
  background-color: #207ab7;
  background-image: none;
  border-color: #207ab7;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
  cursor: not-allowed;
}
.tox .tox-button:focus:not(:disabled) {
  background-color: #1c6ca1;
  background-image: none;
  border-color: #1c6ca1;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button:hover:not(:disabled) {
  background-color: #1c6ca1;
  background-image: none;
  border-color: #1c6ca1;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button:active:not(:disabled) {
  background-color: #185d8c;
  background-image: none;
  border-color: #185d8c;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--secondary {
  background-color: #3d546f;
  background-image: none;
  background-position: 0 0;
  background-repeat: repeat;
  border-color: #3d546f;
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  color: #fff;
  font-size: 14px;
  font-style: normal;
  font-weight: bold;
  letter-spacing: normal;
  outline: none;
  padding: 4px 16px;
  text-decoration: none;
  text-transform: none;
}
.tox .tox-button--secondary[disabled] {
  background-color: #3d546f;
  background-image: none;
  border-color: #3d546f;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
}
.tox .tox-button--secondary:focus:not(:disabled) {
  background-color: #34485f;
  background-image: none;
  border-color: #34485f;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--secondary:hover:not(:disabled) {
  background-color: #34485f;
  background-image: none;
  border-color: #34485f;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--secondary:active:not(:disabled) {
  background-color: #2b3b4e;
  background-image: none;
  border-color: #2b3b4e;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--icon,
.tox .tox-button.tox-button--icon,
.tox .tox-button.tox-button--secondary.tox-button--icon {
  padding: 4px;
}
.tox .tox-button--icon .tox-icon svg,
.tox .tox-button.tox-button--icon .tox-icon svg,
.tox .tox-button.tox-button--secondary.tox-button--icon .tox-icon svg {
  display: block;
  fill: currentColor;
}
.tox .tox-button-link {
  background: 0;
  border: none;
  box-sizing: border-box;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 16px;
  font-weight: normal;
  line-height: 1.3;
  margin: 0;
  padding: 0;
  white-space: nowrap;
}
.tox .tox-button-link--sm {
  font-size: 14px;
}
.tox .tox-button--naked {
  background-color: transparent;
  border-color: transparent;
  box-shadow: unset;
  color: #fff;
}
.tox .tox-button--naked[disabled] {
  background-color: #3d546f;
  border-color: #3d546f;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
}
.tox .tox-button--naked:hover:not(:disabled) {
  background-color: #34485f;
  border-color: #34485f;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--naked:focus:not(:disabled) {
  background-color: #34485f;
  border-color: #34485f;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--naked:active:not(:disabled) {
  background-color: #2b3b4e;
  border-color: #2b3b4e;
  box-shadow: none;
  color: #fff;
}
.tox .tox-button--naked .tox-icon svg {
  fill: currentColor;
}
.tox .tox-button--naked.tox-button--icon:hover:not(:disabled) {
  color: #fff;
}
.tox .tox-checkbox {
  align-items: center;
  border-radius: 3px;
  cursor: pointer;
  display: flex;
  height: 36px;
  min-width: 36px;
}
.tox .tox-checkbox__input {
  /* Hide from view but visible to screen readers */
  height: 1px;
  overflow: hidden;
  position: absolute;
  top: auto;
  width: 1px;
}
.tox .tox-checkbox__icons {
  align-items: center;
  border-radius: 3px;
  box-shadow: 0 0 0 2px transparent;
  box-sizing: content-box;
  display: flex;
  height: 24px;
  justify-content: center;
  padding: calc(4px - 1px);
  width: 24px;
}
.tox .tox-checkbox__icons .tox-checkbox-icon__unchecked svg {
  display: block;
  fill: rgba(255, 255, 255, 0.2);
}
.tox .tox-checkbox__icons .tox-checkbox-icon__indeterminate svg {
  display: none;
  fill: #207ab7;
}
.tox .tox-checkbox__icons .tox-checkbox-icon__checked svg {
  display: none;
  fill: #207ab7;
}
.tox .tox-checkbox--disabled {
  color: rgba(255, 255, 255, 0.5);
  cursor: not-allowed;
}
.tox .tox-checkbox--disabled .tox-checkbox__icons .tox-checkbox-icon__checked svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-checkbox--disabled .tox-checkbox__icons .tox-checkbox-icon__unchecked svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-checkbox--disabled .tox-checkbox__icons .tox-checkbox-icon__indeterminate svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox input.tox-checkbox__input:checked + .tox-checkbox__icons .tox-checkbox-icon__unchecked svg {
  display: none;
}
.tox input.tox-checkbox__input:checked + .tox-checkbox__icons .tox-checkbox-icon__checked svg {
  display: block;
}
.tox input.tox-checkbox__input:indeterminate + .tox-checkbox__icons .tox-checkbox-icon__unchecked svg {
  display: none;
}
.tox input.tox-checkbox__input:indeterminate + .tox-checkbox__icons .tox-checkbox-icon__indeterminate svg {
  display: block;
}
.tox input.tox-checkbox__input:focus + .tox-checkbox__icons {
  border-radius: 3px;
  box-shadow: inset 0 0 0 1px #207ab7;
  padding: calc(4px - 1px);
}
.tox:not([dir=rtl]) .tox-checkbox__label {
  margin-left: 4px;
}
.tox:not([dir=rtl]) .tox-checkbox__input {
  left: -10000px;
}
.tox:not([dir=rtl]) .tox-bar .tox-checkbox {
  margin-left: 4px;
}
.tox[dir=rtl] .tox-checkbox__label {
  margin-right: 4px;
}
.tox[dir=rtl] .tox-checkbox__input {
  right: -10000px;
}
.tox[dir=rtl] .tox-bar .tox-checkbox {
  margin-right: 4px;
}
.tox {
  /* stylelint-disable-next-line no-descending-specificity */
}
.tox .tox-collection--toolbar .tox-collection__group {
  display: flex;
  padding: 0;
}
.tox .tox-collection--grid .tox-collection__group {
  display: flex;
  flex-wrap: wrap;
  max-height: 208px;
  overflow-x: hidden;
  overflow-y: auto;
  padding: 0;
}
.tox .tox-collection--list .tox-collection__group {
  border-bottom-width: 0;
  border-color: #1a1a1a;
  border-left-width: 0;
  border-right-width: 0;
  border-style: solid;
  border-top-width: 1px;
  padding: 4px 0;
}
.tox .tox-collection--list .tox-collection__group:first-child {
  border-top-width: 0;
}
.tox .tox-collection__group-heading {
  background-color: #333333;
  color: #fff;
  cursor: default;
  font-size: 12px;
  font-style: normal;
  font-weight: normal;
  margin-bottom: 4px;
  margin-top: -4px;
  padding: 4px 8px;
  text-transform: none;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.tox .tox-collection__item {
  align-items: center;
  color: #fff;
  cursor: pointer;
  display: flex;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.tox .tox-collection--list .tox-collection__item {
  padding: 4px 8px;
}
.tox .tox-collection--toolbar .tox-collection__item {
  border-radius: 3px;
  padding: 4px;
}
.tox .tox-collection--grid .tox-collection__item {
  border-radius: 3px;
  padding: 4px;
}
.tox .tox-collection--list .tox-collection__item--enabled {
  background-color: #2b3b4e;
  color: #fff;
}
.tox .tox-collection--list .tox-collection__item--active {
  background-color: #4a5562;
}
.tox .tox-collection--toolbar .tox-collection__item--enabled {
  background-color: #757d87;
  color: #fff;
}
.tox .tox-collection--toolbar .tox-collection__item--active {
  background-color: #4a5562;
}
.tox .tox-collection--grid .tox-collection__item--enabled {
  background-color: #757d87;
  color: #fff;
}
.tox .tox-collection--grid .tox-collection__item--active:not(.tox-collection__item--state-disabled) {
  background-color: #4a5562;
  color: #fff;
}
.tox .tox-collection--list .tox-collection__item--active:not(.tox-collection__item--state-disabled) {
  color: #fff;
}
.tox .tox-collection--toolbar .tox-collection__item--active:not(.tox-collection__item--state-disabled) {
  color: #fff;
}
.tox .tox-collection__item-icon,
.tox .tox-collection__item-checkmark {
  align-items: center;
  display: flex;
  height: 24px;
  justify-content: center;
  width: 24px;
}
.tox .tox-collection__item-icon svg,
.tox .tox-collection__item-checkmark svg {
  fill: currentColor;
}
.tox .tox-collection--toolbar-lg .tox-collection__item-icon {
  height: 48px;
  width: 48px;
}
.tox .tox-collection__item-label {
  color: currentColor;
  display: inline-block;
  flex: 1;
  -ms-flex-preferred-size: auto;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  line-height: 24px;
  text-transform: none;
  word-break: break-all;
}
.tox .tox-collection__item-accessory {
  color: rgba(255, 255, 255, 0.5);
  display: inline-block;
  font-size: 14px;
  height: 24px;
  line-height: 24px;
  text-transform: none;
}
.tox .tox-collection__item-caret {
  align-items: center;
  display: flex;
  min-height: 24px;
}
.tox .tox-collection__item-caret::after {
  content: '';
  font-size: 0;
  min-height: inherit;
}
.tox .tox-collection__item-caret svg {
  fill: #fff;
}
.tox .tox-collection__item--state-disabled {
  background-color: transparent;
  color: rgba(255, 255, 255, 0.5);
  cursor: not-allowed;
}
.tox .tox-collection__item--state-disabled .tox-collection__item-caret svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-collection--list .tox-collection__item:not(.tox-collection__item--enabled) .tox-collection__item-checkmark svg {
  display: none;
}
.tox .tox-collection--list .tox-collection__item:not(.tox-collection__item--enabled) .tox-collection__item-accessory + .tox-collection__item-checkmark {
  display: none;
}
.tox .tox-collection--horizontal {
  background-color: #2b3b4e;
  border: 1px solid #1a1a1a;
  border-radius: 3px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
  display: flex;
  flex: 0 0 auto;
  flex-shrink: 0;
  flex-wrap: nowrap;
  margin-bottom: 0;
  overflow-x: auto;
  padding: 0;
}
.tox .tox-collection--horizontal .tox-collection__group {
  align-items: center;
  display: flex;
  flex-wrap: nowrap;
  margin: 0;
  padding: 0 4px;
}
.tox .tox-collection--horizontal .tox-collection__item {
  height: 34px;
  margin: 2px 0 3px 0;
  padding: 0 4px;
}
.tox .tox-collection--horizontal .tox-collection__item-label {
  white-space: nowrap;
}
.tox .tox-collection--horizontal .tox-collection__item-caret {
  margin-left: 4px;
}
.tox .tox-collection__item-container {
  display: flex;
}
.tox .tox-collection__item-container--row {
  align-items: center;
  flex: 1 1 auto;
  flex-direction: row;
}
.tox .tox-collection__item-container--row.tox-collection__item-container--align-left {
  margin-right: auto;
}
.tox .tox-collection__item-container--row.tox-collection__item-container--align-right {
  justify-content: flex-end;
  margin-left: auto;
}
.tox .tox-collection__item-container--row.tox-collection__item-container--valign-top {
  align-items: flex-start;
  margin-bottom: auto;
}
.tox .tox-collection__item-container--row.tox-collection__item-container--valign-middle {
  align-items: center;
}
.tox .tox-collection__item-container--row.tox-collection__item-container--valign-bottom {
  align-items: flex-end;
  margin-top: auto;
}
.tox .tox-collection__item-container--column {
  -ms-grid-row-align: center;
      align-self: center;
  flex: 1 1 auto;
  flex-direction: column;
}
.tox .tox-collection__item-container--column.tox-collection__item-container--align-left {
  align-items: flex-start;
}
.tox .tox-collection__item-container--column.tox-collection__item-container--align-right {
  align-items: flex-end;
}
.tox .tox-collection__item-container--column.tox-collection__item-container--valign-top {
  align-self: flex-start;
}
.tox .tox-collection__item-container--column.tox-collection__item-container--valign-middle {
  -ms-grid-row-align: center;
      align-self: center;
}
.tox .tox-collection__item-container--column.tox-collection__item-container--valign-bottom {
  align-self: flex-end;
}
.tox:not([dir=rtl]) .tox-collection--horizontal .tox-collection__group:not(:last-of-type) {
  border-right: 1px solid #000000;
}
.tox:not([dir=rtl]) .tox-collection--list .tox-collection__item > *:not(:first-child) {
  margin-left: 8px;
}
.tox:not([dir=rtl]) .tox-collection--list .tox-collection__item > .tox-collection__item-label:first-child {
  margin-left: 4px;
}
.tox:not([dir=rtl]) .tox-collection__item-accessory {
  margin-left: 16px;
  text-align: right;
}
.tox:not([dir=rtl]) .tox-collection .tox-collection__item-caret {
  margin-left: 16px;
}
.tox[dir=rtl] .tox-collection--horizontal .tox-collection__group:not(:last-of-type) {
  border-left: 1px solid #000000;
}
.tox[dir=rtl] .tox-collection--list .tox-collection__item > *:not(:first-child) {
  margin-right: 8px;
}
.tox[dir=rtl] .tox-collection--list .tox-collection__item > .tox-collection__item-label:first-child {
  margin-right: 4px;
}
.tox[dir=rtl] .tox-collection__item-accessory {
  margin-right: 16px;
  text-align: left;
}
.tox[dir=rtl] .tox-collection .tox-collection__item-caret {
  margin-right: 16px;
  transform: rotateY(180deg);
}
.tox[dir=rtl] .tox-collection--horizontal .tox-collection__item-caret {
  margin-right: 4px;
}
.tox .tox-color-picker-container {
  display: flex;
  flex-direction: row;
  height: 225px;
  margin: 0;
}
.tox .tox-sv-palette {
  box-sizing: border-box;
  display: flex;
  height: 100%;
}
.tox .tox-sv-palette-spectrum {
  height: 100%;
}
.tox .tox-sv-palette,
.tox .tox-sv-palette-spectrum {
  width: 225px;
}
.tox .tox-sv-palette-thumb {
  background: none;
  border: 1px solid black;
  border-radius: 50%;
  box-sizing: content-box;
  height: 12px;
  position: absolute;
  width: 12px;
}
.tox .tox-sv-palette-inner-thumb {
  border: 1px solid white;
  border-radius: 50%;
  height: 10px;
  position: absolute;
  width: 10px;
}
.tox .tox-hue-slider {
  box-sizing: border-box;
  height: 100%;
  width: 25px;
}
.tox .tox-hue-slider-spectrum {
  background: linear-gradient(to bottom, #f00, #ff0080, #f0f, #8000ff, #00f, #0080ff, #0ff, #00ff80, #0f0, #80ff00, #ff0, #ff8000, #f00);
  height: 100%;
  width: 100%;
}
.tox .tox-hue-slider,
.tox .tox-hue-slider-spectrum {
  width: 20px;
}
.tox .tox-hue-slider-thumb {
  background: white;
  border: 1px solid black;
  box-sizing: content-box;
  height: 4px;
  width: 100%;
}
.tox .tox-rgb-form {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.tox .tox-rgb-form div {
  align-items: center;
  display: flex;
  justify-content: space-between;
  margin-bottom: 5px;
  width: inherit;
}
.tox .tox-rgb-form input {
  width: 6em;
}
.tox .tox-rgb-form input.tox-invalid {
  /* Need !important to override Chrome's focus styling unfortunately */
  border: 1px solid red !important;
}
.tox .tox-rgb-form .tox-rgba-preview {
  border: 1px solid black;
  flex-grow: 2;
  margin-bottom: 0;
}
.tox:not([dir=rtl]) .tox-sv-palette {
  margin-right: 15px;
}
.tox:not([dir=rtl]) .tox-hue-slider {
  margin-right: 15px;
}
.tox:not([dir=rtl]) .tox-hue-slider-thumb {
  margin-left: -1px;
}
.tox:not([dir=rtl]) .tox-rgb-form label {
  margin-right: 0.5em;
}
.tox[dir=rtl] .tox-sv-palette {
  margin-left: 15px;
}
.tox[dir=rtl] .tox-hue-slider {
  margin-left: 15px;
}
.tox[dir=rtl] .tox-hue-slider-thumb {
  margin-right: -1px;
}
.tox[dir=rtl] .tox-rgb-form label {
  margin-left: 0.5em;
}
.tox .tox-toolbar .tox-swatches,
.tox .tox-toolbar__primary .tox-swatches,
.tox .tox-toolbar__overflow .tox-swatches {
  margin: 2px 0 3px 4px;
}
.tox .tox-collection--list .tox-collection__group .tox-swatches-menu {
  border: 0;
  margin: -4px 0;
}
.tox .tox-swatches__row {
  display: flex;
}
.tox .tox-swatch {
  height: 30px;
  transition: transform 0.15s, box-shadow 0.15s;
  width: 30px;
}
.tox .tox-swatch:hover,
.tox .tox-swatch:focus {
  box-shadow: 0 0 0 1px rgba(127, 127, 127, 0.3) inset;
  transform: scale(0.8);
}
.tox .tox-swatch--remove {
  align-items: center;
  display: flex;
  justify-content: center;
}
.tox .tox-swatch--remove svg path {
  stroke: #e74c3c;
}
.tox .tox-swatches__picker-btn {
  align-items: center;
  background-color: transparent;
  border: 0;
  cursor: pointer;
  display: flex;
  height: 30px;
  justify-content: center;
  outline: none;
  padding: 0;
  width: 30px;
}
.tox .tox-swatches__picker-btn svg {
  height: 24px;
  width: 24px;
}
.tox .tox-swatches__picker-btn:hover {
  background: #4a5562;
}
.tox:not([dir=rtl]) .tox-swatches__picker-btn {
  margin-left: auto;
}
.tox[dir=rtl] .tox-swatches__picker-btn {
  margin-right: auto;
}
.tox .tox-comment-thread {
  background: #2b3b4e;
  position: relative;
}
.tox .tox-comment-thread > *:not(:first-child) {
  margin-top: 8px;
}
.tox .tox-comment {
  background: #2b3b4e;
  border: 1px solid #000000;
  border-radius: 3px;
  box-shadow: 0 4px 8px 0 rgba(42, 55, 70, 0.1);
  padding: 8px 8px 16px 8px;
  position: relative;
}
.tox .tox-comment__header {
  align-items: center;
  color: #fff;
  display: flex;
  justify-content: space-between;
}
.tox .tox-comment__date {
  color: rgba(255, 255, 255, 0.5);
  font-size: 12px;
}
.tox .tox-comment__body {
  color: #fff;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.3;
  margin-top: 8px;
  position: relative;
  text-transform: initial;
}
.tox .tox-comment__body textarea {
  resize: none;
  white-space: normal;
  width: 100%;
}
.tox .tox-comment__expander {
  padding-top: 8px;
}
.tox .tox-comment__expander p {
  color: rgba(255, 255, 255, 0.5);
  font-size: 14px;
  font-style: normal;
}
.tox .tox-comment__body p {
  margin: 0;
}
.tox .tox-comment__buttonspacing {
  padding-top: 16px;
  text-align: center;
}
.tox .tox-comment-thread__overlay::after {
  background: #2b3b4e;
  bottom: 0;
  content: \"\";
  display: flex;
  left: 0;
  opacity: 0.9;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 5;
}
.tox .tox-comment__reply {
  display: flex;
  flex-shrink: 0;
  flex-wrap: wrap;
  justify-content: flex-end;
  margin-top: 8px;
}
.tox .tox-comment__reply > *:first-child {
  margin-bottom: 8px;
  width: 100%;
}
.tox .tox-comment__edit {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-end;
  margin-top: 16px;
}
.tox .tox-comment__gradient::after {
  background: linear-gradient(rgba(43, 59, 78, 0), #2b3b4e);
  bottom: 0;
  content: \"\";
  display: block;
  height: 5em;
  margin-top: -40px;
  position: absolute;
  width: 100%;
}
.tox .tox-comment__overlay {
  background: #2b3b4e;
  bottom: 0;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  left: 0;
  opacity: 0.9;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  z-index: 5;
}
.tox .tox-comment__loading-text {
  align-items: center;
  color: #fff;
  display: flex;
  flex-direction: column;
  position: relative;
}
.tox .tox-comment__loading-text > div {
  padding-bottom: 16px;
}
.tox .tox-comment__overlaytext {
  bottom: 0;
  flex-direction: column;
  font-size: 14px;
  left: 0;
  padding: 1em;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 10;
}
.tox .tox-comment__overlaytext p {
  background-color: #2b3b4e;
  box-shadow: 0 0 8px 8px #2b3b4e;
  color: #fff;
  text-align: center;
}
.tox .tox-comment__overlaytext div:nth-of-type(2) {
  font-size: 0.8em;
}
.tox .tox-comment__busy-spinner {
  align-items: center;
  background-color: #2b3b4e;
  bottom: 0;
  display: flex;
  justify-content: center;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 20;
}
.tox .tox-comment__scroll {
  display: flex;
  flex-direction: column;
  flex-shrink: 1;
  overflow: auto;
}
.tox .tox-conversations {
  margin: 8px;
}
.tox:not([dir=rtl]) .tox-comment__edit {
  margin-left: 8px;
}
.tox:not([dir=rtl]) .tox-comment__buttonspacing > *:last-child,
.tox:not([dir=rtl]) .tox-comment__edit > *:last-child,
.tox:not([dir=rtl]) .tox-comment__reply > *:last-child {
  margin-left: 8px;
}
.tox[dir=rtl] .tox-comment__edit {
  margin-right: 8px;
}
.tox[dir=rtl] .tox-comment__buttonspacing > *:last-child,
.tox[dir=rtl] .tox-comment__edit > *:last-child,
.tox[dir=rtl] .tox-comment__reply > *:last-child {
  margin-right: 8px;
}
.tox .tox-user {
  align-items: center;
  display: flex;
}
.tox .tox-user__avatar svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-user__name {
  color: rgba(255, 255, 255, 0.5);
  font-size: 12px;
  font-style: normal;
  font-weight: bold;
  text-transform: uppercase;
}
.tox:not([dir=rtl]) .tox-user__avatar svg {
  margin-right: 8px;
}
.tox:not([dir=rtl]) .tox-user__avatar + .tox-user__name {
  margin-left: 8px;
}
.tox[dir=rtl] .tox-user__avatar svg {
  margin-left: 8px;
}
.tox[dir=rtl] .tox-user__avatar + .tox-user__name {
  margin-right: 8px;
}
.tox .tox-dialog-wrap {
  align-items: center;
  bottom: 0;
  display: flex;
  justify-content: center;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  z-index: 1100;
}
.tox .tox-dialog-wrap__backdrop {
  background-color: rgba(34, 47, 62, 0.75);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1;
}
.tox .tox-dialog-wrap__backdrop--opaque {
  background-color: #222f3e;
}
.tox .tox-dialog {
  background-color: #2b3b4e;
  border-color: #000000;
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: 0 16px 16px -10px rgba(42, 55, 70, 0.15), 0 0 40px 1px rgba(42, 55, 70, 0.15);
  display: flex;
  flex-direction: column;
  max-height: 100%;
  max-width: 480px;
  overflow: hidden;
  position: relative;
  width: 95vw;
  z-index: 2;
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox .tox-dialog {
    align-self: flex-start;
    margin: 8px auto;
    width: calc(100vw - 16px);
  }
}
.tox .tox-dialog-inline {
  z-index: 1100;
}
.tox .tox-dialog__header {
  align-items: center;
  background-color: #2b3b4e;
  border-bottom: none;
  color: #fff;
  display: flex;
  font-size: 16px;
  justify-content: space-between;
  padding: 8px 16px 0 16px;
  position: relative;
}
.tox .tox-dialog__header .tox-button {
  z-index: 1;
}
.tox .tox-dialog__draghandle {
  cursor: grab;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.tox .tox-dialog__draghandle:active {
  cursor: grabbing;
}
.tox .tox-dialog__dismiss {
  margin-left: auto;
}
.tox .tox-dialog__title {
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 20px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.3;
  margin: 0;
  text-transform: none;
}
.tox .tox-dialog__body {
  color: #fff;
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
  font-size: 16px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.3;
  min-width: 0;
  text-align: left;
  text-transform: none;
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox .tox-dialog__body {
    flex-direction: column;
  }
}
.tox .tox-dialog__body-nav {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  padding: 16px 16px;
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox .tox-dialog__body-nav {
    flex-direction: row;
    -webkit-overflow-scrolling: touch;
    overflow-x: auto;
    padding-bottom: 0;
  }
}
.tox .tox-dialog__body-nav-item {
  border-bottom: 2px solid transparent;
  color: rgba(255, 255, 255, 0.5);
  display: inline-block;
  font-size: 14px;
  line-height: 1.3;
  margin-bottom: 8px;
  text-decoration: none;
  white-space: nowrap;
}
.tox .tox-dialog__body-nav-item:focus {
  background-color: rgba(32, 122, 183, 0.1);
}
.tox .tox-dialog__body-nav-item--active {
  border-bottom: 2px solid #207ab7;
  color: #207ab7;
}
.tox .tox-dialog__body-content {
  box-sizing: border-box;
  display: flex;
  flex: 1;
  flex-direction: column;
  -ms-flex-preferred-size: auto;
  max-height: 650px;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  padding: 16px 16px;
}
.tox .tox-dialog__body-content > * {
  margin-bottom: 0;
  margin-top: 16px;
}
.tox .tox-dialog__body-content > *:first-child {
  margin-top: 0;
}
.tox .tox-dialog__body-content > *:last-child {
  margin-bottom: 0;
}
.tox .tox-dialog__body-content > *:only-child {
  margin-bottom: 0;
  margin-top: 0;
}
.tox .tox-dialog__body-content a {
  color: #207ab7;
  cursor: pointer;
  text-decoration: none;
}
.tox .tox-dialog__body-content a:hover,
.tox .tox-dialog__body-content a:focus {
  color: #185d8c;
  text-decoration: none;
}
.tox .tox-dialog__body-content a:active {
  color: #185d8c;
  text-decoration: none;
}
.tox .tox-dialog__body-content svg {
  fill: #fff;
}
.tox .tox-dialog__body-content ul {
  display: block;
  list-style-type: disc;
  margin-bottom: 16px;
  -webkit-margin-end: 0;
          margin-inline-end: 0;
  -webkit-margin-start: 0;
          margin-inline-start: 0;
  -webkit-padding-start: 2.5rem;
          padding-inline-start: 2.5rem;
}
.tox .tox-dialog__body-content .tox-form__group h1 {
  color: #fff;
  font-size: 20px;
  font-style: normal;
  font-weight: bold;
  letter-spacing: normal;
  margin-bottom: 16px;
  margin-top: 2rem;
  text-transform: none;
}
.tox .tox-dialog__body-content .tox-form__group h2 {
  color: #fff;
  font-size: 16px;
  font-style: normal;
  font-weight: bold;
  letter-spacing: normal;
  margin-bottom: 16px;
  margin-top: 2rem;
  text-transform: none;
}
.tox .tox-dialog__body-content .tox-form__group p {
  margin-bottom: 16px;
}
.tox .tox-dialog__body-content .tox-form__group h1:first-child,
.tox .tox-dialog__body-content .tox-form__group h2:first-child,
.tox .tox-dialog__body-content .tox-form__group p:first-child {
  margin-top: 0;
}
.tox .tox-dialog__body-content .tox-form__group h1:last-child,
.tox .tox-dialog__body-content .tox-form__group h2:last-child,
.tox .tox-dialog__body-content .tox-form__group p:last-child {
  margin-bottom: 0;
}
.tox .tox-dialog__body-content .tox-form__group h1:only-child,
.tox .tox-dialog__body-content .tox-form__group h2:only-child,
.tox .tox-dialog__body-content .tox-form__group p:only-child {
  margin-bottom: 0;
  margin-top: 0;
}
.tox .tox-dialog--width-lg {
  height: 650px;
  max-width: 1200px;
}
.tox .tox-dialog--width-md {
  max-width: 800px;
}
.tox .tox-dialog--width-md .tox-dialog__body-content {
  overflow: auto;
}
.tox .tox-dialog__body-content--centered {
  text-align: center;
}
.tox .tox-dialog__footer {
  align-items: center;
  background-color: #2b3b4e;
  border-top: 1px solid #000000;
  display: flex;
  justify-content: space-between;
  padding: 8px 16px;
}
.tox .tox-dialog__footer-start,
.tox .tox-dialog__footer-end {
  display: flex;
}
.tox .tox-dialog__busy-spinner {
  align-items: center;
  background-color: rgba(34, 47, 62, 0.75);
  bottom: 0;
  display: flex;
  justify-content: center;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 3;
}
.tox .tox-dialog__table {
  border-collapse: collapse;
  width: 100%;
}
.tox .tox-dialog__table thead th {
  font-weight: bold;
  padding-bottom: 8px;
}
.tox .tox-dialog__table tbody tr {
  border-bottom: 1px solid #000000;
}
.tox .tox-dialog__table tbody tr:last-child {
  border-bottom: none;
}
.tox .tox-dialog__table td {
  padding-bottom: 8px;
  padding-top: 8px;
}
.tox .tox-dialog__popups {
  position: absolute;
  width: 100%;
  z-index: 1100;
}
.tox .tox-dialog__body-iframe {
  display: flex;
  flex: 1;
  flex-direction: column;
  -ms-flex-preferred-size: auto;
}
.tox .tox-dialog__body-iframe .tox-navobj {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-dialog__body-iframe .tox-navobj :nth-child(2) {
  flex: 1;
  -ms-flex-preferred-size: auto;
  height: 100%;
}
.tox .tox-dialog-dock-fadeout {
  opacity: 0;
  visibility: hidden;
}
.tox .tox-dialog-dock-fadein {
  opacity: 1;
  visibility: visible;
}
.tox .tox-dialog-dock-transition {
  transition: visibility 0s linear 0.3s, opacity 0.3s ease;
}
.tox .tox-dialog-dock-transition.tox-dialog-dock-fadein {
  transition-delay: 0s;
}
.tox.tox-platform-ie {
  /* IE11 CSS styles go here */
}
.tox.tox-platform-ie .tox-dialog-wrap {
  position: -ms-device-fixed;
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox:not([dir=rtl]) .tox-dialog__body-nav {
    margin-right: 0;
  }
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox:not([dir=rtl]) .tox-dialog__body-nav-item:not(:first-child) {
    margin-left: 8px;
  }
}
.tox:not([dir=rtl]) .tox-dialog__footer .tox-dialog__footer-start > *,
.tox:not([dir=rtl]) .tox-dialog__footer .tox-dialog__footer-end > * {
  margin-left: 8px;
}
.tox[dir=rtl] .tox-dialog__body {
  text-align: right;
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox[dir=rtl] .tox-dialog__body-nav {
    margin-left: 0;
  }
}
@media only screen and (max-width:767px) {
  body:not(.tox-force-desktop) .tox[dir=rtl] .tox-dialog__body-nav-item:not(:first-child) {
    margin-right: 8px;
  }
}
.tox[dir=rtl] .tox-dialog__footer .tox-dialog__footer-start > *,
.tox[dir=rtl] .tox-dialog__footer .tox-dialog__footer-end > * {
  margin-right: 8px;
}
body.tox-dialog__disable-scroll {
  overflow: hidden;
}
.tox .tox-dropzone-container {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-dropzone {
  align-items: center;
  background: #fff;
  border: 2px dashed #000000;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  justify-content: center;
  min-height: 100px;
  padding: 10px;
}
.tox .tox-dropzone p {
  color: rgba(255, 255, 255, 0.5);
  margin: 0 0 16px 0;
}
.tox .tox-edit-area {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
  overflow: hidden;
  position: relative;
}
.tox .tox-edit-area__iframe {
  background-color: #fff;
  border: 0;
  box-sizing: border-box;
  flex: 1;
  -ms-flex-preferred-size: auto;
  height: 100%;
  position: absolute;
  width: 100%;
}
.tox.tox-inline-edit-area {
  border: 1px dotted #000000;
}
.tox .tox-editor-container {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  overflow: hidden;
}
.tox .tox-editor-header {
  z-index: 1;
}
.tox:not(.tox-tinymce-inline) .tox-editor-header {
  box-shadow: none;
  transition: box-shadow 0.5s;
}
.tox.tox-tinymce--toolbar-bottom .tox-editor-header,
.tox.tox-tinymce-inline .tox-editor-header {
  margin-bottom: -1px;
}
.tox.tox-tinymce--toolbar-sticky-on .tox-editor-header {
  background-color: transparent;
  box-shadow: 0 4px 4px -3px rgba(0, 0, 0, 0.25);
}
.tox-editor-dock-fadeout {
  opacity: 0;
  visibility: hidden;
}
.tox-editor-dock-fadein {
  opacity: 1;
  visibility: visible;
}
.tox-editor-dock-transition {
  transition: visibility 0s linear 0.25s, opacity 0.25s ease;
}
.tox-editor-dock-transition.tox-editor-dock-fadein {
  transition-delay: 0s;
}
.tox .tox-control-wrap {
  flex: 1;
  position: relative;
}
.tox .tox-control-wrap:not(.tox-control-wrap--status-invalid) .tox-control-wrap__status-icon-invalid,
.tox .tox-control-wrap:not(.tox-control-wrap--status-unknown) .tox-control-wrap__status-icon-unknown,
.tox .tox-control-wrap:not(.tox-control-wrap--status-valid) .tox-control-wrap__status-icon-valid {
  display: none;
}
.tox .tox-control-wrap svg {
  display: block;
}
.tox .tox-control-wrap__status-icon-wrap {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.tox .tox-control-wrap__status-icon-invalid svg {
  fill: #c00;
}
.tox .tox-control-wrap__status-icon-unknown svg {
  fill: orange;
}
.tox .tox-control-wrap__status-icon-valid svg {
  fill: green;
}
.tox:not([dir=rtl]) .tox-control-wrap--status-invalid .tox-textfield,
.tox:not([dir=rtl]) .tox-control-wrap--status-unknown .tox-textfield,
.tox:not([dir=rtl]) .tox-control-wrap--status-valid .tox-textfield {
  padding-right: 32px;
}
.tox:not([dir=rtl]) .tox-control-wrap__status-icon-wrap {
  right: 4px;
}
.tox[dir=rtl] .tox-control-wrap--status-invalid .tox-textfield,
.tox[dir=rtl] .tox-control-wrap--status-unknown .tox-textfield,
.tox[dir=rtl] .tox-control-wrap--status-valid .tox-textfield {
  padding-left: 32px;
}
.tox[dir=rtl] .tox-control-wrap__status-icon-wrap {
  left: 4px;
}
.tox .tox-autocompleter {
  max-width: 25em;
}
.tox .tox-autocompleter .tox-menu {
  max-width: 25em;
}
.tox .tox-autocompleter .tox-autocompleter-highlight {
  font-weight: bold;
}
.tox .tox-color-input {
  display: flex;
  position: relative;
  z-index: 1;
}
.tox .tox-color-input .tox-textfield {
  z-index: -1;
}
.tox .tox-color-input span {
  border-color: rgba(42, 55, 70, 0.2);
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  box-sizing: border-box;
  height: 24px;
  position: absolute;
  top: 6px;
  width: 24px;
}
.tox .tox-color-input span:hover:not([aria-disabled=true]),
.tox .tox-color-input span:focus:not([aria-disabled=true]) {
  border-color: #207ab7;
  cursor: pointer;
}
.tox .tox-color-input span::before {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.25) 25%, transparent 25%), linear-gradient(-45deg, rgba(255, 255, 255, 0.25) 25%, transparent 25%), linear-gradient(45deg, transparent 75%, rgba(255, 255, 255, 0.25) 75%), linear-gradient(-45deg, transparent 75%, rgba(255, 255, 255, 0.25) 75%);
  background-position: 0 0, 0 6px, 6px -6px, -6px 0;
  background-size: 12px 12px;
  border: 1px solid #2b3b4e;
  border-radius: 3px;
  box-sizing: border-box;
  content: '';
  height: 24px;
  left: -1px;
  position: absolute;
  top: -1px;
  width: 24px;
  z-index: -1;
}
.tox .tox-color-input span[aria-disabled=true] {
  cursor: not-allowed;
}
.tox:not([dir=rtl]) .tox-color-input {
  /* stylelint-disable-next-line no-descending-specificity */
}
.tox:not([dir=rtl]) .tox-color-input .tox-textfield {
  padding-left: 36px;
}
.tox:not([dir=rtl]) .tox-color-input span {
  left: 6px;
}
.tox[dir=\"rtl\"] .tox-color-input {
  /* stylelint-disable-next-line no-descending-specificity */
}
.tox[dir=\"rtl\"] .tox-color-input .tox-textfield {
  padding-right: 36px;
}
.tox[dir=\"rtl\"] .tox-color-input span {
  right: 6px;
}
.tox .tox-label,
.tox .tox-toolbar-label {
  color: rgba(255, 255, 255, 0.5);
  display: block;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.3;
  padding: 0 8px 0 0;
  text-transform: none;
  white-space: nowrap;
}
.tox .tox-toolbar-label {
  padding: 0 8px;
}
.tox[dir=rtl] .tox-label {
  padding: 0 0 0 8px;
}
.tox .tox-form {
  display: flex;
  flex: 1;
  flex-direction: column;
  -ms-flex-preferred-size: auto;
}
.tox .tox-form__group {
  box-sizing: border-box;
  margin-bottom: 4px;
}
.tox .tox-form-group--maximize {
  flex: 1;
}
.tox .tox-form__group--error {
  color: #c00;
}
.tox .tox-form__group--collection {
  display: flex;
}
.tox .tox-form__grid {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-between;
}
.tox .tox-form__grid--2col > .tox-form__group {
  width: calc(50% - (8px / 2));
}
.tox .tox-form__grid--3col > .tox-form__group {
  width: calc(100% / 3 - (8px / 2));
}
.tox .tox-form__grid--4col > .tox-form__group {
  width: calc(25% - (8px / 2));
}
.tox .tox-form__controls-h-stack {
  align-items: center;
  display: flex;
}
.tox .tox-form__group--inline {
  align-items: center;
  display: flex;
}
.tox .tox-form__group--stretched {
  display: flex;
  flex: 1;
  flex-direction: column;
  -ms-flex-preferred-size: auto;
}
.tox .tox-form__group--stretched .tox-textarea {
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-form__group--stretched .tox-navobj {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-form__group--stretched .tox-navobj :nth-child(2) {
  flex: 1;
  -ms-flex-preferred-size: auto;
  height: 100%;
}
.tox:not([dir=rtl]) .tox-form__controls-h-stack > *:not(:first-child) {
  margin-left: 4px;
}
.tox[dir=rtl] .tox-form__controls-h-stack > *:not(:first-child) {
  margin-right: 4px;
}
.tox .tox-lock.tox-locked .tox-lock-icon__unlock,
.tox .tox-lock:not(.tox-locked) .tox-lock-icon__lock {
  display: none;
}
.tox .tox-textfield,
.tox .tox-toolbar-textfield,
.tox .tox-listboxfield .tox-listbox--select,
.tox .tox-textarea {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #2b3b4e;
  border-color: #000000;
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  box-sizing: border-box;
  color: #fff;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 16px;
  line-height: 24px;
  margin: 0;
  min-height: 34px;
  outline: none;
  padding: 5px 4.75px;
  resize: none;
  width: 100%;
}
.tox .tox-textfield[disabled],
.tox .tox-textarea[disabled] {
  background-color: #222f3e;
  color: rgba(255, 255, 255, 0.85);
  cursor: not-allowed;
}
.tox .tox-textfield:focus,
.tox .tox-listboxfield .tox-listbox--select:focus,
.tox .tox-textarea:focus {
  background-color: #2b3b4e;
  border-color: #207ab7;
  box-shadow: none;
  outline: none;
}
.tox .tox-toolbar-textfield {
  border-width: 0;
  margin-bottom: 3px;
  margin-top: 2px;
  max-width: 250px;
}
.tox .tox-naked-btn {
  background-color: transparent;
  border: 0;
  border-color: transparent;
  box-shadow: unset;
  color: #207ab7;
  cursor: pointer;
  display: block;
  margin: 0;
  padding: 0;
}
.tox .tox-naked-btn svg {
  display: block;
  fill: #fff;
}
.tox:not([dir=rtl]) .tox-toolbar-textfield + * {
  margin-left: 4px;
}
.tox[dir=rtl] .tox-toolbar-textfield + * {
  margin-right: 4px;
}
.tox .tox-listboxfield {
  cursor: pointer;
  position: relative;
}
.tox .tox-listboxfield .tox-listbox--select[disabled] {
  background-color: #19232e;
  color: rgba(255, 255, 255, 0.85);
  cursor: not-allowed;
}
.tox .tox-listbox__select-label {
  cursor: default;
  flex: 1;
  margin: 0 4px;
}
.tox .tox-listbox__select-chevron {
  align-items: center;
  display: flex;
  justify-content: center;
  width: 16px;
}
.tox .tox-listbox__select-chevron svg {
  fill: #fff;
}
.tox .tox-listboxfield .tox-listbox--select {
  align-items: center;
  display: flex;
}
.tox:not([dir=rtl]) .tox-listboxfield svg {
  right: 8px;
}
.tox[dir=rtl] .tox-listboxfield svg {
  left: 8px;
}
.tox .tox-selectfield {
  cursor: pointer;
  position: relative;
}
.tox .tox-selectfield select {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #2b3b4e;
  border-color: #000000;
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  box-sizing: border-box;
  color: #fff;
  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif;
  font-size: 16px;
  line-height: 24px;
  margin: 0;
  min-height: 34px;
  outline: none;
  padding: 5px 4.75px;
  resize: none;
  width: 100%;
}
.tox .tox-selectfield select[disabled] {
  background-color: #19232e;
  color: rgba(255, 255, 255, 0.85);
  cursor: not-allowed;
}
.tox .tox-selectfield select::-ms-expand {
  display: none;
}
.tox .tox-selectfield select:focus {
  background-color: #2b3b4e;
  border-color: #207ab7;
  box-shadow: none;
  outline: none;
}
.tox .tox-selectfield svg {
  pointer-events: none;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.tox:not([dir=rtl]) .tox-selectfield select[size=\"0\"],
.tox:not([dir=rtl]) .tox-selectfield select[size=\"1\"] {
  padding-right: 24px;
}
.tox:not([dir=rtl]) .tox-selectfield svg {
  right: 8px;
}
.tox[dir=rtl] .tox-selectfield select[size=\"0\"],
.tox[dir=rtl] .tox-selectfield select[size=\"1\"] {
  padding-left: 24px;
}
.tox[dir=rtl] .tox-selectfield svg {
  left: 8px;
}
.tox .tox-textarea {
  -webkit-appearance: textarea;
     -moz-appearance: textarea;
          appearance: textarea;
  white-space: pre-wrap;
}
.tox-fullscreen {
  border: 0;
  height: 100%;
  margin: 0;
  overflow: hidden;
  -ms-scroll-chaining: none;
      overscroll-behavior: none;
  padding: 0;
  touch-action: pinch-zoom;
  width: 100%;
}
.tox.tox-tinymce.tox-fullscreen .tox-statusbar__resize-handle {
  display: none;
}
.tox.tox-tinymce.tox-fullscreen,
.tox-shadowhost.tox-fullscreen {
  left: 0;
  position: fixed;
  top: 0;
  z-index: 1200;
}
.tox.tox-tinymce.tox-fullscreen {
  background-color: transparent;
}
.tox-fullscreen .tox.tox-tinymce-aux,
.tox-fullscreen ~ .tox.tox-tinymce-aux {
  z-index: 1201;
}
.tox .tox-help__more-link {
  list-style: none;
  margin-top: 1em;
}
.tox .tox-image-tools {
  width: 100%;
}
.tox .tox-image-tools__toolbar {
  align-items: center;
  display: flex;
  justify-content: center;
}
.tox .tox-image-tools__image {
  background-color: #666;
  height: 380px;
  overflow: auto;
  position: relative;
  width: 100%;
}
.tox .tox-image-tools__image,
.tox .tox-image-tools__image + .tox-image-tools__toolbar {
  margin-top: 8px;
}
.tox .tox-image-tools__image-bg {
  background: url(data:image/gif;base64,R0lGODdhDAAMAIABAMzMzP///ywAAAAADAAMAAACFoQfqYeabNyDMkBQb81Uat85nxguUAEAOw==);
}
.tox .tox-image-tools__toolbar > .tox-spacer {
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-croprect-block {
  background: black;
  filter: alpha(opacity=50);
  opacity: 0.5;
  position: absolute;
  zoom: 1;
}
.tox .tox-croprect-handle {
  border: 2px solid white;
  height: 20px;
  left: 0;
  position: absolute;
  top: 0;
  width: 20px;
}
.tox .tox-croprect-handle-move {
  border: 0;
  cursor: move;
  position: absolute;
}
.tox .tox-croprect-handle-nw {
  border-width: 2px 0 0 2px;
  cursor: nw-resize;
  left: 100px;
  margin: -2px 0 0 -2px;
  top: 100px;
}
.tox .tox-croprect-handle-ne {
  border-width: 2px 2px 0 0;
  cursor: ne-resize;
  left: 200px;
  margin: -2px 0 0 -20px;
  top: 100px;
}
.tox .tox-croprect-handle-sw {
  border-width: 0 0 2px 2px;
  cursor: sw-resize;
  left: 100px;
  margin: -20px 2px 0 -2px;
  top: 200px;
}
.tox .tox-croprect-handle-se {
  border-width: 0 2px 2px 0;
  cursor: se-resize;
  left: 200px;
  margin: -20px 0 0 -20px;
  top: 200px;
}
.tox:not([dir=rtl]) .tox-image-tools__toolbar > .tox-slider:not(:first-of-type) {
  margin-left: 8px;
}
.tox:not([dir=rtl]) .tox-image-tools__toolbar > .tox-button + .tox-slider {
  margin-left: 32px;
}
.tox:not([dir=rtl]) .tox-image-tools__toolbar > .tox-slider + .tox-button {
  margin-left: 32px;
}
.tox[dir=rtl] .tox-image-tools__toolbar > .tox-slider:not(:first-of-type) {
  margin-right: 8px;
}
.tox[dir=rtl] .tox-image-tools__toolbar > .tox-button + .tox-slider {
  margin-right: 32px;
}
.tox[dir=rtl] .tox-image-tools__toolbar > .tox-slider + .tox-button {
  margin-right: 32px;
}
.tox .tox-insert-table-picker {
  display: flex;
  flex-wrap: wrap;
  width: 170px;
}
.tox .tox-insert-table-picker > div {
  border-color: #000000;
  border-style: solid;
  border-width: 0 1px 1px 0;
  box-sizing: border-box;
  height: 17px;
  width: 17px;
}
.tox .tox-collection--list .tox-collection__group .tox-insert-table-picker {
  margin: -4px 0;
}
.tox .tox-insert-table-picker .tox-insert-table-picker__selected {
  background-color: rgba(32, 122, 183, 0.5);
  border-color: rgba(32, 122, 183, 0.5);
}
.tox .tox-insert-table-picker__label {
  color: #fff;
  display: block;
  font-size: 14px;
  padding: 4px;
  text-align: center;
  width: 100%;
}
.tox:not([dir=rtl]) {
  /* stylelint-disable-next-line no-descending-specificity */
}
.tox:not([dir=rtl]) .tox-insert-table-picker > div:nth-child(10n) {
  border-right: 0;
}
.tox[dir=rtl] {
  /* stylelint-disable-next-line no-descending-specificity */
}
.tox[dir=rtl] .tox-insert-table-picker > div:nth-child(10n+1) {
  border-right: 0;
}
.tox {
  /* stylelint-disable */
  /* stylelint-enable */
}
.tox .tox-menu {
  background-color: #2b3b4e;
  border: 1px solid #000000;
  border-radius: 3px;
  box-shadow: 0 4px 8px 0 rgba(42, 55, 70, 0.1);
  display: inline-block;
  overflow: hidden;
  vertical-align: top;
  z-index: 1150;
}
.tox .tox-menu.tox-collection.tox-collection--list {
  padding: 0;
}
.tox .tox-menu.tox-collection.tox-collection--toolbar {
  padding: 4px;
}
.tox .tox-menu.tox-collection.tox-collection--grid {
  padding: 4px;
}
.tox .tox-menu__label h1,
.tox .tox-menu__label h2,
.tox .tox-menu__label h3,
.tox .tox-menu__label h4,
.tox .tox-menu__label h5,
.tox .tox-menu__label h6,
.tox .tox-menu__label p,
.tox .tox-menu__label blockquote,
.tox .tox-menu__label code {
  margin: 0;
}
.tox .tox-menubar {
  background: url(\"data:image/svg+xml;charset=utf8,%3Csvg height='39px' viewBox='0 0 40 39px' width='40' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='0' y='38px' width='100' height='1' fill='%23000000'/%3E%3C/svg%3E\") left 0 top 0 #222f3e;
  background-color: #222f3e;
  display: flex;
  flex: 0 0 auto;
  flex-shrink: 0;
  flex-wrap: wrap;
  padding: 0 4px 0 4px;
}
.tox.tox-tinymce:not(.tox-tinymce-inline) .tox-editor-header:not(:first-child) .tox-menubar {
  border-top: 1px solid #000000;
}
/* Deprecated. Remove in next major release */
.tox .tox-mbtn {
  align-items: center;
  background: transparent;
  border: 0;
  border-radius: 3px;
  box-shadow: none;
  color: #fff;
  display: flex;
  flex: 0 0 auto;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  height: 34px;
  justify-content: center;
  margin: 2px 0 3px 0;
  outline: none;
  overflow: hidden;
  padding: 0 4px;
  text-transform: none;
  width: auto;
}
.tox .tox-mbtn[disabled] {
  background-color: transparent;
  border: 0;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
  cursor: not-allowed;
}
.tox .tox-mbtn:focus:not(:disabled) {
  background: #4a5562;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-mbtn--active {
  background: #757d87;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-mbtn:hover:not(:disabled):not(.tox-mbtn--active) {
  background: #4a5562;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-mbtn__select-label {
  cursor: default;
  font-weight: normal;
  margin: 0 4px;
}
.tox .tox-mbtn[disabled] .tox-mbtn__select-label {
  cursor: not-allowed;
}
.tox .tox-mbtn__select-chevron {
  align-items: center;
  display: flex;
  justify-content: center;
  width: 16px;
  display: none;
}
.tox .tox-notification {
  border-radius: 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  box-sizing: border-box;
  display: -ms-grid;
  display: grid;
  font-size: 14px;
  font-weight: normal;
  -ms-grid-columns: minmax(40px, 1fr) auto minmax(40px, 1fr);
      grid-template-columns: minmax(40px, 1fr) auto minmax(40px, 1fr);
  margin-top: 4px;
  opacity: 0;
  padding: 4px;
  transition: transform 100ms ease-in, opacity 150ms ease-in;
}
.tox .tox-notification p {
  font-size: 14px;
  font-weight: normal;
}
.tox .tox-notification a {
  cursor: pointer;
  text-decoration: underline;
}
.tox .tox-notification--in {
  opacity: 1;
}
.tox .tox-notification--success {
  background-color: #e4eeda;
  border-color: #d7e6c8;
  color: #fff;
}
.tox .tox-notification--success p {
  color: #fff;
}
.tox .tox-notification--success a {
  color: #547831;
}
.tox .tox-notification--success svg {
  fill: #fff;
}
.tox .tox-notification--error {
  background-color: #f8dede;
  border-color: #f2bfbf;
  color: #fff;
}
.tox .tox-notification--error p {
  color: #fff;
}
.tox .tox-notification--error a {
  color: #c00;
}
.tox .tox-notification--error svg {
  fill: #fff;
}
.tox .tox-notification--warn,
.tox .tox-notification--warning {
  background-color: #fffaea;
  border-color: #ffe89d;
  color: #fff;
}
.tox .tox-notification--warn p,
.tox .tox-notification--warning p {
  color: #fff;
}
.tox .tox-notification--warn a,
.tox .tox-notification--warning a {
  color: #fff;
}
.tox .tox-notification--warn svg,
.tox .tox-notification--warning svg {
  fill: #fff;
}
.tox .tox-notification--info {
  background-color: #d9edf7;
  border-color: #779ecb;
  color: #fff;
}
.tox .tox-notification--info p {
  color: #fff;
}
.tox .tox-notification--info a {
  color: #fff;
}
.tox .tox-notification--info svg {
  fill: #fff;
}
.tox .tox-notification__body {
  -ms-grid-row-align: center;
      align-self: center;
  color: #fff;
  font-size: 14px;
  -ms-grid-column-span: 1;
  grid-column-end: 3;
  -ms-grid-column: 2;
      grid-column-start: 2;
  -ms-grid-row-span: 1;
  grid-row-end: 2;
  -ms-grid-row: 1;
      grid-row-start: 1;
  text-align: center;
  white-space: normal;
  word-break: break-all;
  word-break: break-word;
}
.tox .tox-notification__body > * {
  margin: 0;
}
.tox .tox-notification__body > * + * {
  margin-top: 1rem;
}
.tox .tox-notification__icon {
  -ms-grid-row-align: center;
      align-self: center;
  -ms-grid-column-span: 1;
  grid-column-end: 2;
  -ms-grid-column: 1;
      grid-column-start: 1;
  -ms-grid-row-span: 1;
  grid-row-end: 2;
  -ms-grid-row: 1;
      grid-row-start: 1;
  -ms-grid-column-align: end;
      justify-self: end;
}
.tox .tox-notification__icon svg {
  display: block;
}
.tox .tox-notification__dismiss {
  -ms-grid-row-align: start;
      align-self: start;
  -ms-grid-column-span: 1;
  grid-column-end: 4;
  -ms-grid-column: 3;
      grid-column-start: 3;
  -ms-grid-row-span: 1;
  grid-row-end: 2;
  -ms-grid-row: 1;
      grid-row-start: 1;
  -ms-grid-column-align: end;
      justify-self: end;
}
.tox .tox-notification .tox-progress-bar {
  -ms-grid-column-span: 3;
  grid-column-end: 4;
  -ms-grid-column: 1;
      grid-column-start: 1;
  -ms-grid-row-span: 1;
  grid-row-end: 3;
  -ms-grid-row: 2;
      grid-row-start: 2;
  -ms-grid-column-align: center;
      justify-self: center;
}
.tox .tox-pop {
  display: inline-block;
  position: relative;
}
.tox .tox-pop--resizing {
  transition: width 0.1s ease;
}
.tox .tox-pop--resizing .tox-toolbar,
.tox .tox-pop--resizing .tox-toolbar__group {
  flex-wrap: nowrap;
}
.tox .tox-pop--transition {
  transition: 0.15s ease;
  transition-property: left, right, top, bottom;
}
.tox .tox-pop--transition::before,
.tox .tox-pop--transition::after {
  transition: all 0.15s, visibility 0s, opacity 0.075s ease 0.075s;
}
.tox .tox-pop__dialog {
  background-color: #222f3e;
  border: 1px solid #000000;
  border-radius: 3px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
  min-width: 0;
  overflow: hidden;
}
.tox .tox-pop__dialog > *:not(.tox-toolbar) {
  margin: 4px 4px 4px 8px;
}
.tox .tox-pop__dialog .tox-toolbar {
  background-color: transparent;
  margin-bottom: -1px;
}
.tox .tox-pop::before,
.tox .tox-pop::after {
  border-style: solid;
  content: '';
  display: block;
  height: 0;
  opacity: 1;
  position: absolute;
  width: 0;
}
.tox .tox-pop.tox-pop--inset::before,
.tox .tox-pop.tox-pop--inset::after {
  opacity: 0;
  transition: all 0s 0.15s, visibility 0s, opacity 0.075s ease;
}
.tox .tox-pop.tox-pop--bottom::before,
.tox .tox-pop.tox-pop--bottom::after {
  left: 50%;
  top: 100%;
}
.tox .tox-pop.tox-pop--bottom::after {
  border-color: #222f3e transparent transparent transparent;
  border-width: 8px;
  margin-left: -8px;
  margin-top: -1px;
}
.tox .tox-pop.tox-pop--bottom::before {
  border-color: #000000 transparent transparent transparent;
  border-width: 9px;
  margin-left: -9px;
}
.tox .tox-pop.tox-pop--top::before,
.tox .tox-pop.tox-pop--top::after {
  left: 50%;
  top: 0;
  transform: translateY(-100%);
}
.tox .tox-pop.tox-pop--top::after {
  border-color: transparent transparent #222f3e transparent;
  border-width: 8px;
  margin-left: -8px;
  margin-top: 1px;
}
.tox .tox-pop.tox-pop--top::before {
  border-color: transparent transparent #000000 transparent;
  border-width: 9px;
  margin-left: -9px;
}
.tox .tox-pop.tox-pop--left::before,
.tox .tox-pop.tox-pop--left::after {
  left: 0;
  top: calc(50% - 1px);
  transform: translateY(-50%);
}
.tox .tox-pop.tox-pop--left::after {
  border-color: transparent #222f3e transparent transparent;
  border-width: 8px;
  margin-left: -15px;
}
.tox .tox-pop.tox-pop--left::before {
  border-color: transparent #000000 transparent transparent;
  border-width: 10px;
  margin-left: -19px;
}
.tox .tox-pop.tox-pop--right::before,
.tox .tox-pop.tox-pop--right::after {
  left: 100%;
  top: calc(50% + 1px);
  transform: translateY(-50%);
}
.tox .tox-pop.tox-pop--right::after {
  border-color: transparent transparent transparent #222f3e;
  border-width: 8px;
  margin-left: -1px;
}
.tox .tox-pop.tox-pop--right::before {
  border-color: transparent transparent transparent #000000;
  border-width: 10px;
  margin-left: -1px;
}
.tox .tox-pop.tox-pop--align-left::before,
.tox .tox-pop.tox-pop--align-left::after {
  left: 20px;
}
.tox .tox-pop.tox-pop--align-right::before,
.tox .tox-pop.tox-pop--align-right::after {
  left: calc(100% - 20px);
}
.tox .tox-sidebar-wrap {
  display: flex;
  flex-direction: row;
  flex-grow: 1;
  -ms-flex-preferred-size: 0;
  min-height: 0;
}
.tox .tox-sidebar {
  background-color: #222f3e;
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
}
.tox .tox-sidebar__slider {
  display: flex;
  overflow: hidden;
}
.tox .tox-sidebar__pane-container {
  display: flex;
}
.tox .tox-sidebar__pane {
  display: flex;
}
.tox .tox-sidebar--sliding-closed {
  opacity: 0;
}
.tox .tox-sidebar--sliding-open {
  opacity: 1;
}
.tox .tox-sidebar--sliding-growing,
.tox .tox-sidebar--sliding-shrinking {
  transition: width 0.5s ease, opacity 0.5s ease;
}
.tox .tox-selector {
  background-color: #4099ff;
  border-color: #4099ff;
  border-style: solid;
  border-width: 1px;
  box-sizing: border-box;
  display: inline-block;
  height: 10px;
  position: absolute;
  width: 10px;
}
.tox.tox-platform-touch .tox-selector {
  height: 12px;
  width: 12px;
}
.tox .tox-slider {
  align-items: center;
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
  height: 24px;
  justify-content: center;
  position: relative;
}
.tox .tox-slider__rail {
  background-color: transparent;
  border: 1px solid #000000;
  border-radius: 3px;
  height: 10px;
  min-width: 120px;
  width: 100%;
}
.tox .tox-slider__handle {
  background-color: #207ab7;
  border: 2px solid #185d8c;
  border-radius: 3px;
  box-shadow: none;
  height: 24px;
  left: 50%;
  position: absolute;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  width: 14px;
}
.tox .tox-source-code {
  overflow: auto;
}
.tox .tox-spinner {
  display: flex;
}
.tox .tox-spinner > div {
  animation: tam-bouncing-dots 1.5s ease-in-out 0s infinite both;
  background-color: rgba(255, 255, 255, 0.5);
  border-radius: 100%;
  height: 8px;
  width: 8px;
}
.tox .tox-spinner > div:nth-child(1) {
  animation-delay: -0.32s;
}
.tox .tox-spinner > div:nth-child(2) {
  animation-delay: -0.16s;
}
@keyframes tam-bouncing-dots {
  0%,
  80%,
  100% {
    transform: scale(0);
  }
  40% {
    transform: scale(1);
  }
}
.tox:not([dir=rtl]) .tox-spinner > div:not(:first-child) {
  margin-left: 4px;
}
.tox[dir=rtl] .tox-spinner > div:not(:first-child) {
  margin-right: 4px;
}
.tox .tox-statusbar {
  align-items: center;
  background-color: #222f3e;
  border-top: 1px solid #000000;
  color: #fff;
  display: flex;
  flex: 0 0 auto;
  font-size: 12px;
  font-weight: normal;
  height: 18px;
  overflow: hidden;
  padding: 0 8px;
  position: relative;
  text-transform: uppercase;
}
.tox .tox-statusbar__text-container {
  display: flex;
  flex: 1 1 auto;
  justify-content: flex-end;
  overflow: hidden;
}
.tox .tox-statusbar__path {
  display: flex;
  flex: 1 1 auto;
  margin-right: auto;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.tox .tox-statusbar__path > * {
  display: inline;
  white-space: nowrap;
}
.tox .tox-statusbar__wordcount {
  flex: 0 0 auto;
  margin-left: 1ch;
}
.tox .tox-statusbar a,
.tox .tox-statusbar__path-item,
.tox .tox-statusbar__wordcount {
  color: #fff;
  text-decoration: none;
}
.tox .tox-statusbar a:hover:not(:disabled):not([aria-disabled=true]),
.tox .tox-statusbar__path-item:hover:not(:disabled):not([aria-disabled=true]),
.tox .tox-statusbar__wordcount:hover:not(:disabled):not([aria-disabled=true]),
.tox .tox-statusbar a:focus:not(:disabled):not([aria-disabled=true]),
.tox .tox-statusbar__path-item:focus:not(:disabled):not([aria-disabled=true]),
.tox .tox-statusbar__wordcount:focus:not(:disabled):not([aria-disabled=true]) {
  cursor: pointer;
  text-decoration: underline;
}
.tox .tox-statusbar__resize-handle {
  align-items: flex-end;
  align-self: stretch;
  cursor: nwse-resize;
  display: flex;
  flex: 0 0 auto;
  justify-content: flex-end;
  margin-left: auto;
  margin-right: -8px;
  padding-left: 1ch;
}
.tox .tox-statusbar__resize-handle svg {
  display: block;
  fill: #fff;
}
.tox .tox-statusbar__resize-handle:focus svg {
  background-color: #4a5562;
  border-radius: 1px;
  box-shadow: 0 0 0 2px #4a5562;
}
.tox:not([dir=rtl]) .tox-statusbar__path > * {
  margin-right: 4px;
}
.tox:not([dir=rtl]) .tox-statusbar__branding {
  margin-left: 1ch;
}
.tox[dir=rtl] .tox-statusbar {
  flex-direction: row-reverse;
}
.tox[dir=rtl] .tox-statusbar__path > * {
  margin-left: 4px;
}
.tox .tox-throbber {
  z-index: 1299;
}
.tox .tox-throbber__busy-spinner {
  align-items: center;
  background-color: rgba(34, 47, 62, 0.6);
  bottom: 0;
  display: flex;
  justify-content: center;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}
.tox .tox-tbtn {
  align-items: center;
  background: transparent;
  border: 0;
  border-radius: 3px;
  box-shadow: none;
  color: #fff;
  display: flex;
  flex: 0 0 auto;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  height: 34px;
  justify-content: center;
  margin: 2px 0 3px 0;
  outline: none;
  overflow: hidden;
  padding: 0;
  text-transform: none;
  width: 34px;
}
.tox .tox-tbtn svg {
  display: block;
  fill: #fff;
}
.tox .tox-tbtn.tox-tbtn-more {
  padding-left: 5px;
  padding-right: 5px;
  width: inherit;
}
.tox .tox-tbtn:focus {
  background: #4a5562;
  border: 0;
  box-shadow: none;
}
.tox .tox-tbtn:hover {
  background: #4a5562;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-tbtn:hover svg {
  fill: #fff;
}
.tox .tox-tbtn:active {
  background: #757d87;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-tbtn:active svg {
  fill: #fff;
}
.tox .tox-tbtn--disabled,
.tox .tox-tbtn--disabled:hover,
.tox .tox-tbtn:disabled,
.tox .tox-tbtn:disabled:hover {
  background: transparent;
  border: 0;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
  cursor: not-allowed;
}
.tox .tox-tbtn--disabled svg,
.tox .tox-tbtn--disabled:hover svg,
.tox .tox-tbtn:disabled svg,
.tox .tox-tbtn:disabled:hover svg {
  /* stylelint-disable-line no-descending-specificity */
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-tbtn--enabled,
.tox .tox-tbtn--enabled:hover {
  background: #757d87;
  border: 0;
  box-shadow: none;
  color: #fff;
}
.tox .tox-tbtn--enabled > *,
.tox .tox-tbtn--enabled:hover > * {
  transform: none;
}
.tox .tox-tbtn--enabled svg,
.tox .tox-tbtn--enabled:hover svg {
  /* stylelint-disable-line no-descending-specificity */
  fill: #fff;
}
.tox .tox-tbtn:focus:not(.tox-tbtn--disabled) {
  color: #fff;
}
.tox .tox-tbtn:focus:not(.tox-tbtn--disabled) svg {
  fill: #fff;
}
.tox .tox-tbtn:active > * {
  transform: none;
}
.tox .tox-tbtn--md {
  height: 51px;
  width: 51px;
}
.tox .tox-tbtn--lg {
  flex-direction: column;
  height: 68px;
  width: 68px;
}
.tox .tox-tbtn--return {
  -ms-grid-row-align: stretch;
      align-self: stretch;
  height: unset;
  width: 16px;
}
.tox .tox-tbtn--labeled {
  padding: 0 4px;
  width: unset;
}
.tox .tox-tbtn__vlabel {
  display: block;
  font-size: 10px;
  font-weight: normal;
  letter-spacing: -0.025em;
  margin-bottom: 4px;
  white-space: nowrap;
}
.tox .tox-tbtn--select {
  margin: 2px 0 3px 0;
  padding: 0 4px;
  width: auto;
}
.tox .tox-tbtn__select-label {
  cursor: default;
  font-weight: normal;
  margin: 0 4px;
}
.tox .tox-tbtn__select-chevron {
  align-items: center;
  display: flex;
  justify-content: center;
  width: 16px;
}
.tox .tox-tbtn__select-chevron svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-tbtn--bespoke .tox-tbtn__select-label {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  width: 7em;
}
.tox .tox-split-button {
  border: 0;
  border-radius: 3px;
  box-sizing: border-box;
  display: flex;
  margin: 2px 0 3px 0;
  overflow: hidden;
}
.tox .tox-split-button:hover {
  box-shadow: 0 0 0 1px #4a5562 inset;
}
.tox .tox-split-button:focus {
  background: #4a5562;
  box-shadow: none;
  color: #fff;
}
.tox .tox-split-button > * {
  border-radius: 0;
}
.tox .tox-split-button__chevron {
  width: 16px;
}
.tox .tox-split-button__chevron svg {
  fill: rgba(255, 255, 255, 0.5);
}
.tox .tox-split-button .tox-tbtn {
  margin: 0;
}
.tox.tox-platform-touch .tox-split-button .tox-tbtn:first-child {
  width: 30px;
}
.tox.tox-platform-touch .tox-split-button__chevron {
  width: 20px;
}
.tox .tox-split-button.tox-tbtn--disabled:hover,
.tox .tox-split-button.tox-tbtn--disabled:focus,
.tox .tox-split-button.tox-tbtn--disabled .tox-tbtn:hover,
.tox .tox-split-button.tox-tbtn--disabled .tox-tbtn:focus {
  background: transparent;
  box-shadow: none;
  color: rgba(255, 255, 255, 0.5);
}
.tox .tox-toolbar-overlord {
  background-color: #222f3e;
}
.tox .tox-toolbar,
.tox .tox-toolbar__primary,
.tox .tox-toolbar__overflow {
  background: url(\"data:image/svg+xml;charset=utf8,%3Csvg height='39px' viewBox='0 0 40 39px' width='40' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='0' y='38px' width='100' height='1' fill='%23000000'/%3E%3C/svg%3E\") left 0 top 0 #222f3e;
  background-color: #222f3e;
  display: flex;
  flex: 0 0 auto;
  flex-shrink: 0;
  flex-wrap: wrap;
  padding: 0 0;
}
.tox .tox-toolbar__overflow.tox-toolbar__overflow--closed {
  height: 0;
  opacity: 0;
  padding-bottom: 0;
  padding-top: 0;
  visibility: hidden;
}
.tox .tox-toolbar__overflow--growing {
  transition: height 0.3s ease, opacity 0.2s linear 0.1s;
}
.tox .tox-toolbar__overflow--shrinking {
  transition: opacity 0.3s ease, height 0.2s linear 0.1s, visibility 0s linear 0.3s;
}
.tox .tox-menubar + .tox-toolbar,
.tox .tox-menubar + .tox-toolbar-overlord .tox-toolbar__primary {
  border-top: 1px solid #000000;
  margin-top: -1px;
}
.tox .tox-toolbar--scrolling {
  flex-wrap: nowrap;
  overflow-x: auto;
}
.tox .tox-pop .tox-toolbar {
  border-width: 0;
}
.tox .tox-toolbar--no-divider {
  background-image: none;
}
.tox-tinymce:not(.tox-tinymce-inline) .tox-editor-header:not(:first-child) .tox-toolbar:first-child,
.tox-tinymce:not(.tox-tinymce-inline) .tox-editor-header:not(:first-child) .tox-toolbar-overlord:first-child .tox-toolbar__primary {
  border-top: 1px solid #000000;
}
.tox.tox-tinymce-aux .tox-toolbar__overflow {
  background-color: #222f3e;
  border: 1px solid #000000;
  border-radius: 3px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
}
.tox .tox-toolbar__group {
  align-items: center;
  display: flex;
  flex-wrap: wrap;
  margin: 0 0;
  padding: 0 4px 0 4px;
}
.tox .tox-toolbar__group--pull-right {
  margin-left: auto;
}
.tox .tox-toolbar--scrolling .tox-toolbar__group {
  flex-shrink: 0;
  flex-wrap: nowrap;
}
.tox:not([dir=rtl]) .tox-toolbar__group:not(:last-of-type) {
  border-right: 1px solid #000000;
}
.tox[dir=rtl] .tox-toolbar__group:not(:last-of-type) {
  border-left: 1px solid #000000;
}
.tox .tox-tooltip {
  display: inline-block;
  padding: 8px;
  position: relative;
}
.tox .tox-tooltip__body {
  background-color: #3d546f;
  border-radius: 3px;
  box-shadow: 0 2px 4px rgba(42, 55, 70, 0.3);
  color: rgba(255, 255, 255, 0.75);
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  padding: 4px 8px;
  text-transform: none;
}
.tox .tox-tooltip__arrow {
  position: absolute;
}
.tox .tox-tooltip--down .tox-tooltip__arrow {
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-top: 8px solid #3d546f;
  bottom: 0;
  left: 50%;
  position: absolute;
  transform: translateX(-50%);
}
.tox .tox-tooltip--up .tox-tooltip__arrow {
  border-bottom: 8px solid #3d546f;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  left: 50%;
  position: absolute;
  top: 0;
  transform: translateX(-50%);
}
.tox .tox-tooltip--right .tox-tooltip__arrow {
  border-bottom: 8px solid transparent;
  border-left: 8px solid #3d546f;
  border-top: 8px solid transparent;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
}
.tox .tox-tooltip--left .tox-tooltip__arrow {
  border-bottom: 8px solid transparent;
  border-right: 8px solid #3d546f;
  border-top: 8px solid transparent;
  left: 0;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.tox .tox-well {
  border: 1px solid #000000;
  border-radius: 3px;
  padding: 8px;
  width: 100%;
}
.tox .tox-well > *:first-child {
  margin-top: 0;
}
.tox .tox-well > *:last-child {
  margin-bottom: 0;
}
.tox .tox-well > *:only-child {
  margin: 0;
}
.tox .tox-custom-editor {
  border: 1px solid #000000;
  border-radius: 3px;
  display: flex;
  flex: 1;
  position: relative;
}
/* stylelint-disable */
.tox {
  /* stylelint-enable */
}
.tox .tox-dialog-loading::before {
  background-color: rgba(0, 0, 0, 0.5);
  content: \"\";
  height: 100%;
  position: absolute;
  width: 100%;
  z-index: 1000;
}
.tox .tox-tab {
  cursor: pointer;
}
.tox .tox-dialog__content-js {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-dialog__body-content .tox-collection {
  display: flex;
  flex: 1;
  -ms-flex-preferred-size: auto;
}
.tox .tox-image-tools-edit-panel {
  height: 60px;
}
.tox .tox-image-tools__sidebar {
  height: 60px;
}
", "Back/assets/vendor/tinymce/skins/ui/oxide-dark/skin.css", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\skins\\ui\\oxide-dark\\skin.css");
    }
}
