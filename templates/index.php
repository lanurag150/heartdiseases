<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Premedic-Heart Analysis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <style>
      /*!
 * Bootstrap v4.1.0 (https://getbootstrap.com/)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #78d5ef;
  --secondary: #6c757d;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: "Work Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

@-ms-viewport {
  width: device-width; }

article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block; }

body {
  margin: 0;
  font-family: "Work Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff; }

[tabindex="-1"]:focus {
  outline: 0 !important; }

hr {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
  overflow: visible; }

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

dfn {
  font-style: italic; }

b,
strong {
  font-weight: bolder; }

small {
  font-size: 80%; }

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #78d5ef;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects; }
  a:hover {
    color: #34c0e7;
    text-decoration: underline; }

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none; }
  a:not([href]):not([tabindex]):focus {
    outline: 0; }

pre,
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle;
  border-style: none; }

svg:not(:root) {
  overflow: hidden; }

table {
  border-collapse: collapse; }

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom; }

th {
  text-align: inherit; }

label {
  display: inline-block;
  margin-bottom: 0.5rem; }

button {
  border-radius: 0; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none; }

input[type="radio"],
input[type="checkbox"] {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0; }

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox; }

textarea {
  overflow: auto;
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal; }

progress {
  vertical-align: baseline; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none; }

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

summary {
  display: list-item;
  cursor: pointer; }

template {
  display: none; }

[hidden] {
  display: none !important; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 500;
  line-height: 1.2;
  color: inherit; }

h1, .h1 {
  font-size: 2.5rem; }

h2, .h2 {
  font-size: 2rem; }

h3, .h3 {
  font-size: 1.75rem; }

h4, .h4 {
  font-size: 1.5rem; }

h5, .h5 {
  font-size: 1.25rem; }

h6, .h6 {
  font-size: 1rem; }

.lead {
  font-size: 1.25rem;
  font-weight: 300; }

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2; }

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2; }

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

small,
.small {
  font-size: 80%;
  font-weight: 400; }

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 90%;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem; }

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d; }
  .blockquote-footer::before {
    content: "\2014 \00A0"; }

.img-fluid {
  max-width: 100%;
  height: auto; }

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 90%;
  color: #6c757d; }

code,
kbd,
pre,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-break: break-word; }
  a > code {
    color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem; }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700; }

pre {
  display: block;
  font-size: 87.5%;
  color: #212529; }
  pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px; }

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%; }

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: none; }

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 8.33333%;
  flex: 0 0 8.33333%;
  max-width: 8.33333%; }

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 16.66667%;
  flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 33.33333%;
  flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 41.66667%;
  flex: 0 0 41.66667%;
  max-width: 41.66667%; }

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 58.33333%;
  flex: 0 0 58.33333%;
  max-width: 58.33333%; }

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 66.66667%;
  flex: 0 0 66.66667%;
  max-width: 66.66667%; }

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 83.33333%;
  flex: 0 0 83.33333%;
  max-width: 83.33333%; }

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 91.66667%;
  flex: 0 0 91.66667%;
  max-width: 91.66667%; }

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%; }

.order-first {
  -webkit-box-ordinal-group: 0;
  -ms-flex-order: -1;
  order: -1; }

.order-last {
  -webkit-box-ordinal-group: 14;
  -ms-flex-order: 13;
  order: 13; }

.order-0 {
  -webkit-box-ordinal-group: 1;
  -ms-flex-order: 0;
  order: 0; }

.order-1 {
  -webkit-box-ordinal-group: 2;
  -ms-flex-order: 1;
  order: 1; }

.order-2 {
  -webkit-box-ordinal-group: 3;
  -ms-flex-order: 2;
  order: 2; }

.order-3 {
  -webkit-box-ordinal-group: 4;
  -ms-flex-order: 3;
  order: 3; }

.order-4 {
  -webkit-box-ordinal-group: 5;
  -ms-flex-order: 4;
  order: 4; }

.order-5 {
  -webkit-box-ordinal-group: 6;
  -ms-flex-order: 5;
  order: 5; }

.order-6 {
  -webkit-box-ordinal-group: 7;
  -ms-flex-order: 6;
  order: 6; }

.order-7 {
  -webkit-box-ordinal-group: 8;
  -ms-flex-order: 7;
  order: 7; }

.order-8 {
  -webkit-box-ordinal-group: 9;
  -ms-flex-order: 8;
  order: 8; }

.order-9 {
  -webkit-box-ordinal-group: 10;
  -ms-flex-order: 9;
  order: 9; }

.order-10 {
  -webkit-box-ordinal-group: 11;
  -ms-flex-order: 10;
  order: 10; }

.order-11 {
  -webkit-box-ordinal-group: 12;
  -ms-flex-order: 11;
  order: 11; }

.order-12 {
  -webkit-box-ordinal-group: 13;
  -ms-flex-order: 12;
  order: 12; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-sm-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-sm-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-sm-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-sm-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-sm-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-sm-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-sm-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-sm-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-sm-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; } }

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-md-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-md-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-md-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-md-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-md-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-md-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-md-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-md-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-md-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-md-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-md-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-md-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-md-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-md-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-md-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; } }

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-lg-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-lg-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-lg-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-lg-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-lg-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-lg-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-lg-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-lg-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-lg-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-xl-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-xl-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-xl-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-xl-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-xl-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-xl-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-xl-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-xl-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-xl-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; } }

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent; }
  .table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6; }
  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6; }
  .table tbody + tbody {
    border-top: 2px solid #dee2e6; }
  .table .table {
    background-color: #fff; }

.table-sm th,
.table-sm td {
  padding: 0.3rem; }

.table-bordered {
  border: 1px solid #dee2e6; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6; }
  .table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px; }

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05); }

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075); }

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #d9f3fb; }

.table-hover .table-primary:hover {
  background-color: #c2ecf9; }
  .table-hover .table-primary:hover > td,
  .table-hover .table-primary:hover > th {
    background-color: #c2ecf9; }

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db; }

.table-hover .table-secondary:hover {
  background-color: #c8cbcf; }
  .table-hover .table-secondary:hover > td,
  .table-hover .table-secondary:hover > th {
    background-color: #c8cbcf; }

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb; }

.table-hover .table-success:hover {
  background-color: #b1dfbb; }
  .table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #b1dfbb; }

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb; }

.table-hover .table-info:hover {
  background-color: #abdde5; }
  .table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #abdde5; }

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeba; }

.table-hover .table-warning:hover {
  background-color: #ffe8a1; }
  .table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #ffe8a1; }

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb; }

.table-hover .table-danger:hover {
  background-color: #f1b0b7; }
  .table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #f1b0b7; }

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe; }

.table-hover .table-light:hover {
  background-color: #ececf6; }
  .table-hover .table-light:hover > td,
  .table-hover .table-light:hover > th {
    background-color: #ececf6; }

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca; }

.table-hover .table-dark:hover {
  background-color: #b9bbbe; }
  .table-hover .table-dark:hover > td,
  .table-hover .table-dark:hover > th {
    background-color: #b9bbbe; }

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075); }

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075); }
  .table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075); }

.table .thead-dark th {
  color: #fff;
  background-color: #212529;
  border-color: #32383e; }

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6; }

.table-dark {
  color: #fff;
  background-color: #212529; }
  .table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #32383e; }
  .table-dark.table-bordered {
    border: 0; }
  .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05); }
  .table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.075); }

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-sm > .table-bordered {
      border: 0; } }

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-md > .table-bordered {
      border: 0; } }

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-lg > .table-bordered {
      border: 0; } }

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-xl > .table-bordered {
      border: 0; } }

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar; }
  .table-responsive > .table-bordered {
    border: 0; }

.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media screen and (prefers-reduced-motion: reduce) {
    .form-control {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .form-control::-ms-expand {
    background-color: transparent;
    border: 0; }
  .form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #eaf8fd;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.25); }
  .form-control::-webkit-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control:-ms-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control::-ms-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control::placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1; }

select.form-control:not([size]):not([multiple]) {
  height: calc(2.25rem + 2px); }

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff; }

.form-control-file,
.form-control-range {
  display: block;
  width: 100%; }

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5; }

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5; }

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5; }

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  margin-bottom: 0;
  line-height: 1.5;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0; }
  .form-control-plaintext.form-control-sm, .input-group-sm > .form-control-plaintext.form-control,
  .input-group-sm > .input-group-prepend > .form-control-plaintext.input-group-text,
  .input-group-sm > .input-group-append > .form-control-plaintext.input-group-text,
  .input-group-sm > .input-group-prepend > .form-control-plaintext.btn,
  .input-group-sm > .input-group-append > .form-control-plaintext.btn, .form-control-plaintext.form-control-lg, .input-group-lg > .form-control-plaintext.form-control,
  .input-group-lg > .input-group-prepend > .form-control-plaintext.input-group-text,
  .input-group-lg > .input-group-append > .form-control-plaintext.input-group-text,
  .input-group-lg > .input-group-prepend > .form-control-plaintext.btn,
  .input-group-lg > .input-group-append > .form-control-plaintext.btn {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm, .input-group-sm > .form-control,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]) {
  height: calc(1.8125rem + 2px); }

.form-control-lg, .input-group-lg > .form-control,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.btn:not([size]):not([multiple]) {
  height: calc(2.875rem + 2px); }

.form-group {
  margin-bottom: 1rem; }

.form-text {
  display: block;
  margin-top: 0.25rem; }

.form-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px; }
  .form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px; }

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem; }

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem; }
  .form-check-input:disabled ~ .form-check-label {
    color: #6c757d; }

.form-check-label {
  margin-bottom: 0; }

.form-check-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem; }
  .form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0; }

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745; }

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(40, 167, 69, 0.8);
  border-radius: .2rem; }

.was-validated .form-control:valid, .form-control.is-valid, .was-validated
.custom-select:valid,
.custom-select.is-valid {
  border-color: #28a745; }
  .was-validated .form-control:valid:focus, .form-control.is-valid:focus, .was-validated
  .custom-select:valid:focus,
  .custom-select.is-valid:focus {
    border-color: #28a745;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }
  .was-validated .form-control:valid ~ .valid-feedback,
  .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
  .form-control.is-valid ~ .valid-tooltip, .was-validated
  .custom-select:valid ~ .valid-feedback,
  .was-validated
  .custom-select:valid ~ .valid-tooltip,
  .custom-select.is-valid ~ .valid-feedback,
  .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #28a745; }

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745; }
  .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
    background-color: #71dd8a; }

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #34ce57; }

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745; }
  .was-validated .custom-file-input:valid ~ .custom-file-label::before, .custom-file-input.is-valid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545; }

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.8);
  border-radius: .2rem; }

.was-validated .form-control:invalid, .form-control.is-invalid, .was-validated
.custom-select:invalid,
.custom-select.is-invalid {
  border-color: #dc3545; }
  .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus, .was-validated
  .custom-select:invalid:focus,
  .custom-select.is-invalid:focus {
    border-color: #dc3545;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }
  .was-validated .form-control:invalid ~ .invalid-feedback,
  .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
  .form-control.is-invalid ~ .invalid-tooltip, .was-validated
  .custom-select:invalid ~ .invalid-feedback,
  .was-validated
  .custom-select:invalid ~ .invalid-tooltip,
  .custom-select.is-invalid ~ .invalid-feedback,
  .custom-select.is-invalid ~ .invalid-tooltip {
    display: block; }

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545; }

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545; }
  .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
    background-color: #efa2a9; }

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  background-color: #e4606d; }

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545; }
  .was-validated .custom-file-input:invalid ~ .custom-file-label::before, .custom-file-input.is-invalid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

.form-inline {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }
  .form-inline .form-check {
    width: 100%; }
  @media (min-width: 576px) {
    .form-inline label {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      margin-bottom: 0; }
    .form-inline .form-group {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
      flex: 0 0 auto;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin-bottom: 0; }
    .form-inline .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .form-inline .form-control-plaintext {
      display: inline-block; }
    .form-inline .input-group,
    .form-inline .custom-select {
      width: auto; }
    .form-inline .form-check {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      width: auto;
      padding-left: 0; }
    .form-inline .form-check-input {
      position: relative;
      margin-top: 0;
      margin-right: 0.25rem;
      margin-left: 0; }
    .form-inline .custom-control {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
    .form-inline .custom-control-label {
      margin-bottom: 0; } }

.btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media screen and (prefers-reduced-motion: reduce) {
    .btn {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .btn:hover, .btn:focus {
    text-decoration: none; }
  .btn:focus, .btn.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.25); }
  .btn.disabled, .btn:disabled {
    opacity: 0.65; }
  .btn:not(:disabled):not(.disabled) {
    cursor: pointer; }
  .btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active {
    background-image: none; }

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none; }

.btn-primary {
  color: #212529;
  background-color: #78d5ef;
  border-color: #78d5ef; }
  .btn-primary:hover {
    color: #212529;
    background-color: #56caeb;
    border-color: #4ac7ea; }
  .btn-primary:focus, .btn-primary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.5); }
  .btn-primary.disabled, .btn-primary:disabled {
    color: #212529;
    background-color: #78d5ef;
    border-color: #78d5ef; }
  .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #212529;
    background-color: #4ac7ea;
    border-color: #3fc3e8; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.5); }

.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d; }
  .btn-secondary:hover {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62; }
  .btn-secondary:focus, .btn-secondary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
  .btn-secondary.disabled, .btn-secondary:disabled {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d; }
  .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

.btn-success {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745; }
  .btn-success:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34; }
  .btn-success:focus, .btn-success.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745; }
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #1e7e34;
    border-color: #1c7430; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }

.btn-info {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8; }
  .btn-info:hover {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b; }
  .btn-info:focus, .btn-info.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }
  .btn-info.disabled, .btn-info:disabled {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8; }
  .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #117a8b;
    border-color: #10707f; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }

.btn-warning {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107; }
  .btn-warning:hover {
    color: #212529;
    background-color: #e0a800;
    border-color: #d39e00; }
  .btn-warning:focus, .btn-warning.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }
  .btn-warning.disabled, .btn-warning:disabled {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107; }
  .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #d39e00;
    border-color: #c69500; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545; }
  .btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130; }
  .btn-danger:focus, .btn-danger.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }
  .btn-danger.disabled, .btn-danger:disabled {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545; }
  .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #bd2130;
    border-color: #b21f2d; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5; }
  .btn-light:focus, .btn-light.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40; }
  .btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124; }
  .btn-dark:focus, .btn-dark.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
  .btn-dark.disabled, .btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40; }
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

.btn-outline-primary {
  color: #78d5ef;
  background-color: transparent;
  background-image: none;
  border-color: #78d5ef; }
  .btn-outline-primary:hover {
    color: #212529;
    background-color: #78d5ef;
    border-color: #78d5ef; }
  .btn-outline-primary:focus, .btn-outline-primary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.5); }
  .btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #78d5ef;
    background-color: transparent; }
  .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #212529;
    background-color: #78d5ef;
    border-color: #78d5ef; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.5); }

.btn-outline-secondary {
  color: #6c757d;
  background-color: transparent;
  background-image: none;
  border-color: #6c757d; }
  .btn-outline-secondary:hover {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d; }
  .btn-outline-secondary:focus, .btn-outline-secondary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
  .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent; }
  .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

.btn-outline-success {
  color: #28a745;
  background-color: transparent;
  background-image: none;
  border-color: #28a745; }
  .btn-outline-success:hover {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745; }
  .btn-outline-success:focus, .btn-outline-success.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }
  .btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #28a745;
    background-color: transparent; }
  .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }

.btn-outline-info {
  color: #17a2b8;
  background-color: transparent;
  background-image: none;
  border-color: #17a2b8; }
  .btn-outline-info:hover {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8; }
  .btn-outline-info:focus, .btn-outline-info.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }
  .btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #17a2b8;
    background-color: transparent; }
  .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }

.btn-outline-warning {
  color: #ffc107;
  background-color: transparent;
  background-image: none;
  border-color: #ffc107; }
  .btn-outline-warning:hover {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107; }
  .btn-outline-warning:focus, .btn-outline-warning.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #ffc107;
    background-color: transparent; }
  .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }

.btn-outline-danger {
  color: #dc3545;
  background-color: transparent;
  background-image: none;
  border-color: #dc3545; }
  .btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545; }
  .btn-outline-danger:focus, .btn-outline-danger.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #dc3545;
    background-color: transparent; }
  .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }

.btn-outline-light {
  color: #f8f9fa;
  background-color: transparent;
  background-image: none;
  border-color: #f8f9fa; }
  .btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-outline-light:focus, .btn-outline-light.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent; }
  .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-outline-dark {
  color: #343a40;
  background-color: transparent;
  background-image: none;
  border-color: #343a40; }
  .btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40; }
  .btn-outline-dark:focus, .btn-outline-dark.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
  .btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent; }
  .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

.btn-link {
  font-weight: 400;
  color: #78d5ef;
  background-color: transparent; }
  .btn-link:hover {
    color: #34c0e7;
    text-decoration: underline;
    background-color: transparent;
    border-color: transparent; }
  .btn-link:focus, .btn-link.focus {
    text-decoration: underline;
    border-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none; }
  .btn-link:disabled, .btn-link.disabled {
    color: #6c757d;
    pointer-events: none; }

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.btn-block {
  display: block;
  width: 100%; }
  .btn-block + .btn-block {
    margin-top: 0.5rem; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }
  @media screen and (prefers-reduced-motion: reduce) {
    .fade {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .fade:not(.show) {
    opacity: 0; }

.collapse:not(.show) {
  display: none; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  -o-transition: height 0.35s ease;
  transition: height 0.35s ease; }
  @media screen and (prefers-reduced-motion: reduce) {
    .collapsing {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative; }

.dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent; }

.dropdown-toggle:empty::after {
  margin-left: 0; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem; }

.dropdown-menu-right {
  right: 0;
  left: auto; }

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem; }

.dropup .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent; }

.dropup .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem; }

.dropright .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid; }

.dropright .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-toggle::after {
  vertical-align: 0; }

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem; }

.dropleft .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: ""; }

.dropleft .dropdown-toggle::after {
  display: none; }

.dropleft .dropdown-toggle::before {
  display: inline-block;
  width: 0;
  height: 0;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent; }

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropleft .dropdown-toggle::before {
  vertical-align: 0; }

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto; }

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef; }

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0; }
  .dropdown-item:hover, .dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa; }
  .dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #78d5ef; }
  .dropdown-item.disabled, .dropdown-item:disabled {
    color: #6c757d;
    background-color: transparent; }

.dropdown-menu.show {
  display: block; }

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap; }

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #212529; }

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle; }
  .btn-group > .btn,
  .btn-group-vertical > .btn {
    position: relative;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto; }
    .btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
      z-index: 1; }
    .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
      z-index: 1; }
  .btn-group .btn + .btn,
  .btn-group .btn + .btn-group,
  .btn-group .btn-group + .btn,
  .btn-group .btn-group + .btn-group,
  .btn-group-vertical .btn + .btn,
  .btn-group-vertical .btn + .btn-group,
  .btn-group-vertical .btn-group + .btn,
  .btn-group-vertical .btn-group + .btn-group {
    margin-left: -1px; }

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }
  .btn-toolbar .input-group {
    width: auto; }

.btn-group > .btn:first-child {
  margin-left: 0; }

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem; }
  .dropdown-toggle-split::after,
  .dropup .dropdown-toggle-split::after,
  .dropright .dropdown-toggle-split::after {
    margin-left: 0; }
  .dropleft .dropdown-toggle-split::before {
    margin-right: 0; }

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem; }

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem; }

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center; }
  .btn-group-vertical .btn,
  .btn-group-vertical .btn-group {
    width: 100%; }
  .btn-group-vertical > .btn + .btn,
  .btn-group-vertical > .btn + .btn-group,
  .btn-group-vertical > .btn-group + .btn,
  .btn-group-vertical > .btn-group + .btn-group {
    margin-top: -1px;
    margin-left: 0; }
  .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
  .btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0; }
  .btn-group-toggle > .btn input[type="radio"],
  .btn-group-toggle > .btn input[type="checkbox"],
  .btn-group-toggle > .btn-group > .btn input[type="radio"],
  .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none; }

.input-group {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%; }
  .input-group > .form-control,
  .input-group > .custom-select,
  .input-group > .custom-file {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0; }
    .input-group > .form-control:focus,
    .input-group > .custom-select:focus,
    .input-group > .custom-file:focus {
      z-index: 3; }
    .input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
      margin-left: -1px; }
  .input-group > .form-control:not(:last-child),
  .input-group > .custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }
  .input-group > .form-control:not(:first-child),
  .input-group > .custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }
  .input-group > .custom-file {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center; }
    .input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::after {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0; }
    .input-group > .custom-file:not(:first-child) .custom-file-label,
    .input-group > .custom-file:not(:first-child) .custom-file-label::after {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0; }

.input-group-prepend,
.input-group-append {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }
  .input-group-prepend .btn,
  .input-group-append .btn {
    position: relative;
    z-index: 2; }
  .input-group-prepend .btn + .btn,
  .input-group-prepend .btn + .input-group-text,
  .input-group-prepend .input-group-text + .input-group-text,
  .input-group-prepend .input-group-text + .btn,
  .input-group-append .btn + .btn,
  .input-group-append .btn + .input-group-text,
  .input-group-append .input-group-text + .input-group-text,
  .input-group-append .input-group-text + .btn {
    margin-left: -1px; }

.input-group-prepend {
  margin-right: -1px; }

.input-group-append {
  margin-left: -1px; }

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem; }
  .input-group-text input[type="radio"],
  .input-group-text input[type="checkbox"] {
    margin-top: 0; }

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem; }

.custom-control-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem; }

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0; }
  .custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    background-color: #78d5ef; }
  .custom-control-input:focus ~ .custom-control-label::before {
    -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(120, 213, 239, 0.25);
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(120, 213, 239, 0.25); }
  .custom-control-input:active ~ .custom-control-label::before {
    color: #fff;
    background-color: white; }
  .custom-control-input:disabled ~ .custom-control-label {
    color: #6c757d; }
    .custom-control-input:disabled ~ .custom-control-label::before {
      background-color: #e9ecef; }

.custom-control-label {
  margin-bottom: 0; }
  .custom-control-label::before {
    position: absolute;
    top: 0.25rem;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #dee2e6; }
  .custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%; }

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #78d5ef; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E"); }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  background-color: #78d5ef; }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E"); }

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(120, 213, 239, 0.5); }

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(120, 213, 239, 0.5); }

.custom-radio .custom-control-label::before {
  border-radius: 50%; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #78d5ef; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E"); }

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(120, 213, 239, 0.5); }

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
  background-size: 8px 10px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  .custom-select:focus {
    border-color: #eaf8fd;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(234, 248, 253, 0.5);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(234, 248, 253, 0.5); }
    .custom-select:focus::-ms-value {
      color: #495057;
      background-color: #fff; }
  .custom-select[multiple], .custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none; }
  .custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef; }
  .custom-select::-ms-expand {
    opacity: 0; }

.custom-select-sm {
  height: calc(1.8125rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 75%; }

.custom-select-lg {
  height: calc(2.875rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 125%; }

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(2.25rem + 2px);
  margin-bottom: 0; }

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(2.25rem + 2px);
  margin: 0;
  opacity: 0; }
  .custom-file-input:focus ~ .custom-file-label {
    border-color: #eaf8fd;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.25); }
    .custom-file-input:focus ~ .custom-file-label::after {
      border-color: #eaf8fd; }
  .custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse"; }

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem; }
  .custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(calc(2.25rem + 2px) - 1px * 2);
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: 1px solid #ced4da;
    border-radius: 0 0.25rem 0.25rem 0; }

.custom-range {
  width: 100%;
  padding-left: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  .custom-range:focus {
    outline: none; }
  .custom-range::-moz-focus-outer {
    border: 0; }
  .custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #78d5ef;
    border: 0;
    border-radius: 1rem;
    -webkit-appearance: none;
    appearance: none; }
    .custom-range::-webkit-slider-thumb:focus {
      outline: none;
      -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(120, 213, 239, 0.25);
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(120, 213, 239, 0.25); }
    .custom-range::-webkit-slider-thumb:active {
      background-color: white; }
  .custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #78d5ef;
    border: 0;
    border-radius: 1rem;
    -moz-appearance: none;
    appearance: none; }
    .custom-range::-moz-range-thumb:focus {
      outline: none;
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(120, 213, 239, 0.25); }
    .custom-range::-moz-range-thumb:active {
      background-color: white; }
  .custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #78d5ef;
    border: 0;
    border-radius: 1rem;
    appearance: none; }
    .custom-range::-ms-thumb:focus {
      outline: none;
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(120, 213, 239, 0.25); }
    .custom-range::-ms-thumb:active {
      background-color: white; }
  .custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem; }
  .custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem; }
  .custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem; }

.nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.nav-link {
  display: block;
  padding: 0.5rem 1rem; }
  .nav-link:hover, .nav-link:focus {
    text-decoration: none; }
  .nav-link.disabled {
    color: #6c757d; }

.nav-tabs {
  border-bottom: 1px solid #dee2e6; }
  .nav-tabs .nav-item {
    margin-bottom: -1px; }
  .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
      border-color: #e9ecef #e9ecef #dee2e6; }
    .nav-tabs .nav-link.disabled {
      color: #6c757d;
      background-color: transparent;
      border-color: transparent; }
  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff; }
  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav-pills .nav-link {
  border-radius: 0.25rem; }

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #78d5ef; }

.nav-fill .nav-item {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center; }

.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center; }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.navbar {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0.5rem 1rem; }
  .navbar > .container,
  .navbar > .container-fluid {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between; }

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }

.navbar-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0; }
  .navbar-nav .dropdown-menu {
    position: static;
    float: none; }

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem; }
  .navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none; }
  .navbar-toggler:not(:disabled):not(.disabled) {
    cursor: pointer; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%; }

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 576px) {
  .navbar-expand-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-sm .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-sm .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-sm .navbar-toggler {
      display: none; } }

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 768px) {
  .navbar-expand-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-md .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-md .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-md .navbar-toggler {
      display: none; } }

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 992px) {
  .navbar-expand-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-lg .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-lg .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-lg .navbar-toggler {
      display: none; } }

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1200px) {
  .navbar-expand-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-xl .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-xl .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-xl .navbar-toggler {
      display: none; } }

.navbar-expand {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    padding-right: 0;
    padding-left: 0; }
  .navbar-expand .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute; }
    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap; }
  .navbar-expand .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto; }
  .navbar-expand .navbar-toggler {
    display: none; }

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9); }
  .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7); }
  .navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3); }

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
      color: rgba(0, 0, 0, 0.9); }

.navbar-dark .navbar-brand {
  color: #fff; }
  .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff; }

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75); }
  .navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25); }

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff; }

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-text a {
    color: #fff; }
    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
      color: #fff; }

.card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }

.card-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem; }

.card-title {
  margin-bottom: 0.75rem; }

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.25rem; }

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
  .card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }
  .card-header + .list-group .list-group-item:first-child {
    border-top: 0; }

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125); }
  .card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px); }

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px); }

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px); }

.card-deck {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column; }
  .card-deck .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-deck {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap;
      margin-right: -15px;
      margin-left: -15px; }
      .card-deck .card {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px; } }

.card-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column; }
  .card-group > .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-group {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap; }
      .card-group > .card {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-bottom: 0; }
        .card-group > .card + .card {
          margin-left: 0;
          border-left: 0; }
        .card-group > .card:first-child {
          border-top-right-radius: 0;
          border-bottom-right-radius: 0; }
          .card-group > .card:first-child .card-img-top,
          .card-group > .card:first-child .card-header {
            border-top-right-radius: 0; }
          .card-group > .card:first-child .card-img-bottom,
          .card-group > .card:first-child .card-footer {
            border-bottom-right-radius: 0; }
        .card-group > .card:last-child {
          border-top-left-radius: 0;
          border-bottom-left-radius: 0; }
          .card-group > .card:last-child .card-img-top,
          .card-group > .card:last-child .card-header {
            border-top-left-radius: 0; }
          .card-group > .card:last-child .card-img-bottom,
          .card-group > .card:last-child .card-footer {
            border-bottom-left-radius: 0; }
        .card-group > .card:only-child {
          border-radius: 0.25rem; }
          .card-group > .card:only-child .card-img-top,
          .card-group > .card:only-child .card-header {
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem; }
          .card-group > .card:only-child .card-img-bottom,
          .card-group > .card:only-child .card-footer {
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem; }
        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
          border-radius: 0; }
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
            border-radius: 0; } }

.card-columns .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1.25rem;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1; }
    .card-columns .card {
      display: inline-block;
      width: 100%; } }

.accordion .card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 0;
  border-radius: 0; }

.accordion .card:not(:first-of-type) .card-header:first-child {
  border-radius: 0; }

.accordion .card:first-of-type {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

.accordion .card:last-of-type {
  border-top-left-radius: 0;
  border-top-right-radius: 0; }

.breadcrumb {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.25rem; }

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem; }
  .breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #6c757d;
    content: "/"; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none; }

.breadcrumb-item.active {
  color: #6c757d; }

.pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem; }

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #78d5ef;
  background-color: #fff;
  border: 1px solid #dee2e6; }
  .page-link:hover {
    z-index: 2;
    color: #34c0e7;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6; }
  .page-link:focus {
    z-index: 2;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(120, 213, 239, 0.25); }
  .page-link:not(:disabled):not(.disabled) {
    cursor: pointer; }

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem; }

.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #78d5ef;
  border-color: #78d5ef; }

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6; }

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5; }

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem; }

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5; }

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem; }

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem; }

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem; }
  .badge:empty {
    display: none; }

.btn .badge {
  position: relative;
  top: -1px; }

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem; }

.badge-primary {
  color: #212529;
  background-color: #78d5ef; }
  .badge-primary[href]:hover, .badge-primary[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #4ac7ea; }

.badge-secondary {
  color: #fff;
  background-color: #6c757d; }
  .badge-secondary[href]:hover, .badge-secondary[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #545b62; }

.badge-success {
  color: #fff;
  background-color: #28a745; }
  .badge-success[href]:hover, .badge-success[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #1e7e34; }

.badge-info {
  color: #fff;
  background-color: #17a2b8; }
  .badge-info[href]:hover, .badge-info[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #117a8b; }

.badge-warning {
  color: #212529;
  background-color: #ffc107; }
  .badge-warning[href]:hover, .badge-warning[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #d39e00; }

.badge-danger {
  color: #fff;
  background-color: #dc3545; }
  .badge-danger[href]:hover, .badge-danger[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #bd2130; }

.badge-light {
  color: #212529;
  background-color: #f8f9fa; }
  .badge-light[href]:hover, .badge-light[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #dae0e5; }

.badge-dark {
  color: #fff;
  background-color: #343a40; }
  .badge-dark[href]:hover, .badge-dark[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #1d2124; }

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem; }
  @media (min-width: 576px) {
    .jumbotron {
      padding: 4rem 2rem; } }

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0; }

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: 700; }

.alert-dismissible {
  padding-right: 4rem; }
  .alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit; }

.alert-primary {
  color: #3e6f7c;
  background-color: #e4f7fc;
  border-color: #d9f3fb; }
  .alert-primary hr {
    border-top-color: #c2ecf9; }
  .alert-primary .alert-link {
    color: #2d515a; }

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db; }
  .alert-secondary hr {
    border-top-color: #c8cbcf; }
  .alert-secondary .alert-link {
    color: #202326; }

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb; }
  .alert-success hr {
    border-top-color: #b1dfbb; }
  .alert-success .alert-link {
    color: #0b2e13; }

.alert-info {
  color: #0c5460;
  background-color: #d1ecf1;
  border-color: #bee5eb; }
  .alert-info hr {
    border-top-color: #abdde5; }
  .alert-info .alert-link {
    color: #062c33; }

.alert-warning {
  color: #856404;
  background-color: #fff3cd;
  border-color: #ffeeba; }
  .alert-warning hr {
    border-top-color: #ffe8a1; }
  .alert-warning .alert-link {
    color: #533f03; }

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb; }
  .alert-danger hr {
    border-top-color: #f1b0b7; }
  .alert-danger .alert-link {
    color: #491217; }

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe; }
  .alert-light hr {
    border-top-color: #ececf6; }
  .alert-light .alert-link {
    color: #686868; }

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca; }
  .alert-dark hr {
    border-top-color: #b9bbbe; }
  .alert-dark .alert-link {
    color: #040505; }

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

.progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem; }

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #78d5ef;
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease; }
  @media screen and (prefers-reduced-motion: reduce) {
    .progress-bar {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem; }

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
  animation: progress-bar-stripes 1s linear infinite; }

.media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start; }

.media-body {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1; }

.list-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0; }

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit; }
  .list-group-item-action:hover, .list-group-item-action:focus {
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa; }
  .list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef; }

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }
  .list-group-item:hover, .list-group-item:focus {
    z-index: 1;
    text-decoration: none; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    background-color: #fff; }
  .list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #78d5ef;
    border-color: #78d5ef; }

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0; }

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0; }

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0; }

.list-group-item-primary {
  color: #3e6f7c;
  background-color: #d9f3fb; }
  .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #3e6f7c;
    background-color: #c2ecf9; }
  .list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #3e6f7c;
    border-color: #3e6f7c; }

.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db; }
  .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #383d41;
    background-color: #c8cbcf; }
  .list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #383d41;
    border-color: #383d41; }

.list-group-item-success {
  color: #155724;
  background-color: #c3e6cb; }
  .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #155724;
    background-color: #b1dfbb; }
  .list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #155724;
    border-color: #155724; }

.list-group-item-info {
  color: #0c5460;
  background-color: #bee5eb; }
  .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #0c5460;
    background-color: #abdde5; }
  .list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #0c5460;
    border-color: #0c5460; }

.list-group-item-warning {
  color: #856404;
  background-color: #ffeeba; }
  .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #856404;
    background-color: #ffe8a1; }
  .list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #856404;
    border-color: #856404; }

.list-group-item-danger {
  color: #721c24;
  background-color: #f5c6cb; }
  .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #721c24;
    background-color: #f1b0b7; }
  .list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #721c24;
    border-color: #721c24; }

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe; }
  .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6; }
  .list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182; }

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca; }
  .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbe; }
  .list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21; }

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5; }
  .close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    opacity: .75; }
  .close:not(:disabled):not(.disabled) {
    cursor: pointer; }

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none; }

.modal-open {
  overflow: hidden; }

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0; }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform 0.3s ease-out;
    transition: -webkit-transform 0.3s ease-out;
    -o-transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
    -webkit-transform: translate(0, -25%);
    -ms-transform: translate(0, -25%);
    transform: translate(0, -25%); }
    @media screen and (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .modal.show .modal-dialog {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0); }

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - (0.5rem * 2)); }

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #e9ecef;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem; }
  .modal-header .close {
    padding: 1rem;
    margin: -1rem -1rem -1rem auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem; }

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #e9ecef; }
  .modal-footer > :not(:first-child) {
    margin-left: .25rem; }
  .modal-footer > :not(:last-child) {
    margin-right: .25rem; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto; }
  .modal-dialog-centered {
    min-height: calc(100% - (1.75rem * 2)); }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px; } }

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: "Work Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem; }
    .tooltip .arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0; }
  .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0; }
    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
      top: 0;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000; }

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem; }
  .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
      right: 0;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000; }

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0; }
  .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0; }
    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      bottom: 0;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000; }

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem; }
  .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
      left: 0;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000; }

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem; }

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: "Work Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem; }
  .popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem; }
    .popover .arrow::before, .popover .arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem; }
  .bs-popover-top .arrow, .bs-popover-auto[x-placement^="top"] .arrow {
    bottom: calc((0.5rem + 1px) * -1); }
  .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before,
  .bs-popover-top .arrow::after,
  .bs-popover-auto[x-placement^="top"] .arrow::after {
    border-width: 0.5rem 0.5rem 0; }
  .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before {
    bottom: 0;
    border-top-color: rgba(0, 0, 0, 0.25); }
  
  .bs-popover-top .arrow::after,
  .bs-popover-auto[x-placement^="top"] .arrow::after {
    bottom: 1px;
    border-top-color: #fff; }

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem; }
  .bs-popover-right .arrow, .bs-popover-auto[x-placement^="right"] .arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
  .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before,
  .bs-popover-right .arrow::after,
  .bs-popover-auto[x-placement^="right"] .arrow::after {
    border-width: 0.5rem 0.5rem 0.5rem 0; }
  .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before {
    left: 0;
    border-right-color: rgba(0, 0, 0, 0.25); }
  
  .bs-popover-right .arrow::after,
  .bs-popover-auto[x-placement^="right"] .arrow::after {
    left: 1px;
    border-right-color: #fff; }

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem; }
  .bs-popover-bottom .arrow, .bs-popover-auto[x-placement^="bottom"] .arrow {
    top: calc((0.5rem + 1px) * -1); }
  .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before,
  .bs-popover-bottom .arrow::after,
  .bs-popover-auto[x-placement^="bottom"] .arrow::after {
    border-width: 0 0.5rem 0.5rem 0.5rem; }
  .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before {
    top: 0;
    border-bottom-color: rgba(0, 0, 0, 0.25); }
  
  .bs-popover-bottom .arrow::after,
  .bs-popover-auto[x-placement^="bottom"] .arrow::after {
    top: 1px;
    border-bottom-color: #fff; }
  .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7; }

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem; }
  .bs-popover-left .arrow, .bs-popover-auto[x-placement^="left"] .arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
  .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before,
  .bs-popover-left .arrow::after,
  .bs-popover-auto[x-placement^="left"] .arrow::after {
    border-width: 0.5rem 0 0.5rem 0.5rem; }
  .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before {
    right: 0;
    border-left-color: rgba(0, 0, 0, 0.25); }
  
  .bs-popover-left .arrow::after,
  .bs-popover-auto[x-placement^="left"] .arrow::after {
    right: 1px;
    border-left-color: #fff; }

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  color: inherit;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .popover-header:empty {
    display: none; }

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529; }

.carousel {
  position: relative; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }

.carousel-item {
  position: relative;
  display: none;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  -webkit-transition: -webkit-transform 0.6s ease;
  transition: -webkit-transform 0.6s ease;
  -o-transition: transform 0.6s ease;
  transition: transform 0.6s ease;
  transition: transform 0.6s ease, -webkit-transform 0.6s ease;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-perspective: 1000px;
  perspective: 1000px; }
  @media screen and (prefers-reduced-motion: reduce) {
    .carousel-item {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block; }

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0; }

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
  -webkit-transform: translateX(0);
  -ms-transform: translateX(0);
  transform: translateX(0); }
  @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0); } }

.carousel-item-next,
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%); }
  @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
    .carousel-item-next,
    .active.carousel-item-right {
      -webkit-transform: translate3d(100%, 0, 0);
      transform: translate3d(100%, 0, 0); } }

.carousel-item-prev,
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  transform: translateX(-100%); }
  @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
    .carousel-item-prev,
    .active.carousel-item-left {
      -webkit-transform: translate3d(-100%, 0, 0);
      transform: translate3d(-100%, 0, 0); } }

.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-duration: .6s;
  -o-transition-duration: .6s;
  transition-duration: .6s;
  -webkit-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity; }

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  opacity: 1; }

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  opacity: 0; }

.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-prev {
  -webkit-transform: translateX(0);
  -ms-transform: translateX(0);
  transform: translateX(0); }
  @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active,
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0); } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5; }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%; }

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators li {
    position: relative;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgba(255, 255, 255, 0.5); }
    .carousel-indicators li::before {
      position: absolute;
      top: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
    .carousel-indicators li::after {
      position: absolute;
      bottom: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
  .carousel-indicators .active {
    background-color: #fff; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.bg-primary {
  background-color: #78d5ef !important; }

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #4ac7ea !important; }

.bg-secondary {
  background-color: #6c757d !important; }

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important; }

.bg-success {
  background-color: #28a745 !important; }

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #1e7e34 !important; }

.bg-info {
  background-color: #17a2b8 !important; }

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #117a8b !important; }

.bg-warning {
  background-color: #ffc107 !important; }

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #d39e00 !important; }

.bg-danger {
  background-color: #dc3545 !important; }

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #bd2130 !important; }

.bg-light {
  background-color: #f8f9fa !important; }

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important; }

.bg-dark {
  background-color: #343a40 !important; }

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important; }

.bg-white {
  background-color: #fff !important; }

.bg-transparent {
  background-color: transparent !important; }

.border {
  border: 1px solid #dee2e6 !important; }

.border-top {
  border-top: 1px solid #dee2e6 !important; }

.border-right {
  border-right: 1px solid #dee2e6 !important; }

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important; }

.border-left {
  border-left: 1px solid #dee2e6 !important; }

.border-0 {
  border: 0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-right-0 {
  border-right: 0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-left-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #78d5ef !important; }

.border-secondary {
  border-color: #6c757d !important; }

.border-success {
  border-color: #28a745 !important; }

.border-info {
  border-color: #17a2b8 !important; }

.border-warning {
  border-color: #ffc107 !important; }

.border-danger {
  border-color: #dc3545 !important; }

.border-light {
  border-color: #f8f9fa !important; }

.border-dark {
  border-color: #343a40 !important; }

.border-white {
  border-color: #fff !important; }

.rounded {
  border-radius: 0.25rem !important; }

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important; }

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important; }

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-circle {
  border-radius: 50% !important; }

.rounded-0 {
  border-radius: 0 !important; }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important; }

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden; }
  .embed-responsive::before {
    display: block;
    content: ""; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important; }

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important; }

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important; }

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important; }

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important; }

.flex-fill {
  -webkit-box-flex: 1 !important;
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important; }

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important; }

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important; }

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important; }

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important; }

.justify-content-start {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important; }

.justify-content-end {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important; }

.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important; }

.justify-content-between {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important; }

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important; }

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important; }

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important; }

.align-items-center {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important; }

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important; }

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important; }

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important; }

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important; }

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important; }

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important; }

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important; }

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important; }

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important; }

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important; }

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important; }

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important; }

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important; }

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-md-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

.float-left {
  float: left !important; }

.float-right {
  float: right !important; }

.float-none {
  float: none !important; }

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important; }
  .float-sm-right {
    float: right !important; }
  .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .float-md-left {
    float: left !important; }
  .float-md-right {
    float: right !important; }
  .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important; }
  .float-lg-right {
    float: right !important; }
  .float-lg-none {
    float: none !important; } }

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important; }
  .float-xl-right {
    float: right !important; }
  .float-xl-none {
    float: none !important; } }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important; }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal; }

.shadow-sm {
  -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

.shadow {
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

.shadow-lg {
  -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

.shadow-none {
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.w-auto {
  width: auto !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.h-auto {
  height: auto !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.m-0 {
  margin: 0 !important; }

.mt-0,
.my-0 {
  margin-top: 0 !important; }

.mr-0,
.mx-0 {
  margin-right: 0 !important; }

.mb-0,
.my-0 {
  margin-bottom: 0 !important; }

.ml-0,
.mx-0 {
  margin-left: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.mt-1,
.my-1 {
  margin-top: 0.25rem !important; }

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important; }

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important; }

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.mt-2,
.my-2 {
  margin-top: 0.5rem !important; }

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important; }

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important; }

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.mt-3,
.my-3 {
  margin-top: 1rem !important; }

.mr-3,
.mx-3 {
  margin-right: 1rem !important; }

.mb-3,
.my-3 {
  margin-bottom: 1rem !important; }

.ml-3,
.mx-3 {
  margin-left: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.mt-4,
.my-4 {
  margin-top: 1.5rem !important; }

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important; }

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important; }

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.mt-5,
.my-5 {
  margin-top: 3rem !important; }

.mr-5,
.mx-5 {
  margin-right: 3rem !important; }

.mb-5,
.my-5 {
  margin-bottom: 3rem !important; }

.ml-5,
.mx-5 {
  margin-left: 3rem !important; }

.p-0 {
  padding: 0 !important; }

.pt-0,
.py-0 {
  padding-top: 0 !important; }

.pr-0,
.px-0 {
  padding-right: 0 !important; }

.pb-0,
.py-0 {
  padding-bottom: 0 !important; }

.pl-0,
.px-0 {
  padding-left: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.pt-1,
.py-1 {
  padding-top: 0.25rem !important; }

.pr-1,
.px-1 {
  padding-right: 0.25rem !important; }

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important; }

.pl-1,
.px-1 {
  padding-left: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.pt-2,
.py-2 {
  padding-top: 0.5rem !important; }

.pr-2,
.px-2 {
  padding-right: 0.5rem !important; }

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important; }

.pl-2,
.px-2 {
  padding-left: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.pt-3,
.py-3 {
  padding-top: 1rem !important; }

.pr-3,
.px-3 {
  padding-right: 1rem !important; }

.pb-3,
.py-3 {
  padding-bottom: 1rem !important; }

.pl-3,
.px-3 {
  padding-left: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.pt-4,
.py-4 {
  padding-top: 1.5rem !important; }

.pr-4,
.px-4 {
  padding-right: 1.5rem !important; }

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important; }

.pl-4,
.px-4 {
  padding-left: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.pt-5,
.py-5 {
  padding-top: 3rem !important; }

.pr-5,
.px-5 {
  padding-right: 3rem !important; }

.pb-5,
.py-5 {
  padding-bottom: 3rem !important; }

.pl-5,
.px-5 {
  padding-left: 3rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto,
.my-auto {
  margin-top: auto !important; }

.mr-auto,
.mx-auto {
  margin-right: auto !important; }

.mb-auto,
.my-auto {
  margin-bottom: auto !important; }

.ml-auto,
.mx-auto {
  margin-left: auto !important; }

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important; }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important; }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important; }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important; }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important; }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important; }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important; }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important; }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important; }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important; }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important; }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important; }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important; }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important; }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important; }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important; }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important; }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important; }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important; }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important; }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important; }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important; }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important; }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important; }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important; }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important; }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important; }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important; }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important; }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important; }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important; }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important; }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important; }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important; }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important; }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important; }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important; }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important; }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important; }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important; }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important; }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important; }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important; }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important; }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important; }
  .p-md-0 {
    padding: 0 !important; }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important; }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important; }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important; }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important; }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important; }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important; }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important; }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important; }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important; }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important; }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important; }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important; }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important; }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important; }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important; }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important; }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important; }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important; }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important; }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important; }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important; }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important; }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important; }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important; }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important; }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important; }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important; }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important; }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important; }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important; }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important; }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important; }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important; }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important; }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important; }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important; }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important; }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important; }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important; }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important; }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important; }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important; }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important; }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important; }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important; }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important; } }

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important; }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important; }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important; }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important; }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important; }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important; }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important; }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important; }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important; }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important; }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important; }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important; }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important; }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important; }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important; }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important; }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important; }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important; }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important; }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important; }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important; }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important; }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important; }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important; }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important; } }

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

.text-justify {
  text-align: justify !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-light {
  font-weight: 300 !important; }

.font-weight-normal {
  font-weight: 400 !important; }

.font-weight-bold {
  font-weight: 700 !important; }

.font-italic {
  font-style: italic !important; }

.text-white {
  color: #fff !important; }

.text-primary {
  color: #78d5ef !important; }

a.text-primary:hover, a.text-primary:focus {
  color: #4ac7ea !important; }

.text-secondary {
  color: #6c757d !important; }

a.text-secondary:hover, a.text-secondary:focus {
  color: #545b62 !important; }

.text-success {
  color: #28a745 !important; }

a.text-success:hover, a.text-success:focus {
  color: #1e7e34 !important; }

.text-info {
  color: #17a2b8 !important; }

a.text-info:hover, a.text-info:focus {
  color: #117a8b !important; }

.text-warning {
  color: #ffc107 !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #d39e00 !important; }

.text-danger {
  color: #dc3545 !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #bd2130 !important; }

.text-light {
  color: #f8f9fa !important; }

a.text-light:hover, a.text-light:focus {
  color: #dae0e5 !important; }

.text-dark {
  color: #343a40 !important; }

a.text-dark:hover, a.text-dark:focus {
  color: #1d2124 !important; }

.text-body {
  color: #212529 !important; }

.text-muted {
  color: #6c757d !important; }

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important; }

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }
  a:not(.btn) {
    text-decoration: underline; }
  abbr[title]::after {
    content: " (" attr(title) ")"; }
  pre {
    white-space: pre-wrap !important; }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid; }
  thead {
    display: table-header-group; }
  tr,
  img {
    page-break-inside: avoid; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }
  h2,
  h3 {
    page-break-after: avoid; }
  @page {
    size: a3; }
  body {
    min-width: 992px !important; }
  .container {
    min-width: 992px !important; }
  .navbar {
    display: none; }
  .badge {
    border: 1px solid #000; }
  .table {
    border-collapse: collapse !important; }
    .table td,
    .table th {
      background-color: #fff !important; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important; } }

body {
  font-family: "Roboto", Arial, sans-serif;
  background: #fff;
  font-size: 15px;
  line-height: 1.8;
  font-weight: 400;
  color: #7782aa; }
  body.menu-show {
    overflow: hidden;
    position: fixed;
    height: 100%;
    width: 100%; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  color: #167ce9; }
  a:hover {
    text-decoration: none;
    color: #167ce9; }

h1, h2, h3, h4, h5,
.h1, .h2, .h3, .h4, .h5 {
  line-height: 1.5;
  color: #39345a;
  font-weight: 400; }

.text-primary {
  color: #167ce9 !important; }

.ftco-navbar-light {
  z-index: 3;
  background: #fff !important;
  position: relative; }
  @media (max-width: 991.98px) {
    .ftco-navbar-light {
      background: #39345a !important;
      position: relative;
      top: 0; } }
  .ftco-navbar-light .navbar-brand {
    color: #fff; }
    @media (min-width: 768px) {
      .ftco-navbar-light .navbar-brand {
        color: #39345a; } }
  .ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    font-size: 16px;
    padding-top: .9rem;
    padding-bottom: .9rem;
    padding-left: 20px;
    padding-right: 20px;
    color: #7e77b0;
    font-weight: 400;
    opacity: 1 !important; }
    .ftco-navbar-light .navbar-nav > .nav-item > .nav-link:hover {
      color: #39345a; }
  .ftco-navbar-light .navbar-nav > .nav-item .dropdown-menu {
    border: none;
    background: #fff;
    -webkit-box-shadow: 0px 10px 34px -20px rgba(0, 0, 0, 0.41);
    -moz-box-shadow: 0px 10px 34px -20px rgba(0, 0, 0, 0.41);
    box-shadow: 0px 10px 34px -20px rgba(0, 0, 0, 0.41); }
  .ftco-navbar-light .navbar-nav > .nav-item.ftco-seperator {
    position: relative;
    margin-left: 20px;
    padding-left: 20px; }
    @media (max-width: 991.98px) {
      .ftco-navbar-light .navbar-nav > .nav-item.ftco-seperator {
        padding-left: 0;
        margin-left: 0; } }
    .ftco-navbar-light .navbar-nav > .nav-item.ftco-seperator:before {
      position: absolute;
      content: "";
      top: 10px;
      bottom: 10px;
      left: 0;
      width: 2px;
      background: rgba(255, 255, 255, 0.05); }
      @media (max-width: 991.98px) {
        .ftco-navbar-light .navbar-nav > .nav-item.ftco-seperator:before {
          display: none; } }
  @media (max-width: 767.98px) {
    .ftco-navbar-light .navbar-nav > .nav-item.cta {
      margin-bottom: 20px; } }
  .ftco-navbar-light .navbar-nav > .nav-item.cta > a {
    color: #fff;
    border: 1px solid #167ce9;
    background: #167ce9;
    padding-top: .5rem;
    padding-bottom: .5rem;
    padding-left: 20px;
    padding-right: 20px;
    margin-top: 4px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    border-radius: 30px; }
    .ftco-navbar-light .navbar-nav > .nav-item.cta > a span {
      display: inline-block;
      color: #fff; }
    .ftco-navbar-light .navbar-nav > .nav-item.cta > a:hover {
      background: #167ce9;
      border: 1px solid #167ce9; }
  .ftco-navbar-light .navbar-nav > .nav-item.cta.cta-colored span {
    border-color: #167ce9; }
  .ftco-navbar-light .navbar-nav > .nav-item.active > a {
    color: #167ce9; }
  .ftco-navbar-light .navbar-toggler {
    border: none;
    color: rgba(255, 255, 255, 0.5) !important;
    cursor: pointer;
    padding-right: 0;
    text-transform: uppercase;
    font-size: 16px;
    letter-spacing: .1em; }
  .ftco-navbar-light.scrolled {
    position: fixed;
    right: 0;
    left: 0;
    top: 0;
    margin-top: -130px;
    background: #fff !important;
    -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1); }
    .ftco-navbar-light.scrolled .nav-item.active > a {
      color: #167ce9 !important; }
    .ftco-navbar-light.scrolled .nav-item.cta > a {
      color: #fff !important;
      background: #167ce9;
      border: none !important;
      padding-top: 0.5rem !important;
      padding-bottom: .5rem !important;
      padding-left: 20px;
      padding-right: 20px;
      margin-top: 6px !important;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      -ms-border-radius: 30px;
      border-radius: 30px; }
      .ftco-navbar-light.scrolled .nav-item.cta > a span {
        display: inline-block;
        color: #fff !important; }
    .ftco-navbar-light.scrolled .nav-item.cta.cta-colored span {
      border-color: #167ce9; }
    @media (max-width: 991.98px) {
      .ftco-navbar-light.scrolled .navbar-nav {
        background: none;
        border-radius: 0px;
        padding-left: 0rem !important;
        padding-right: 0rem !important; } }
    @media (max-width: 767.98px) {
      .ftco-navbar-light.scrolled .navbar-nav {
        background: none;
        padding-left: 0 !important;
        padding-right: 0 !important; } }
    .ftco-navbar-light.scrolled .navbar-toggler {
      border: none;
      color: rgba(0, 0, 0, 0.5) !important;
      border-color: rgba(0, 0, 0, 0.5) !important;
      cursor: pointer;
      padding-right: 0;
      text-transform: uppercase;
      font-size: 16px;
      letter-spacing: .1em; }
    .ftco-navbar-light.scrolled .nav-link {
      padding-top: 0.9rem !important;
      padding-bottom: 0.9rem !important;
      color: #39345a !important; }
      .ftco-navbar-light.scrolled .nav-link.active {
        color: #167ce9 !important; }
    .ftco-navbar-light.scrolled.awake {
      margin-top: 0px;
      -webkit-transition: .3s all ease-out;
      -o-transition: .3s all ease-out;
      transition: .3s all ease-out; }
    .ftco-navbar-light.scrolled.sleep {
      -webkit-transition: .3s all ease-out;
      -o-transition: .3s all ease-out;
      transition: .3s all ease-out; }
    .ftco-navbar-light.scrolled .navbar-brand {
      color: #39345a; }

.navbar-brand {
  font-weight: 700;
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1px; }
  .navbar-brand span {
    font-weight: 300;
    color: #167ce9; }
  .navbar-brand i {
    color: #167ce9;
    font-size: 24px; }

.hero-wrap {
  width: 100%;
  height: 650px;
  position: relative; }
  .hero-wrap .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: .7;
    background: #167ce9;
    background: -moz-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: -webkit-gradient(left bottom, right top, color-stop(0%, #167ce9), color-stop(100%, #79efb4));
    background: -webkit-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: -o-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: -ms-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#167ce9', endColorstr='#79efb4', GradientType=1 ); }

.slider-text {
  color: #fff;
  height: 650px; }
  .slider-text h1 {
    font-size: 60px;
    color: #fff;
    line-height: 1.2;
    font-weight: 400;
    text-transform: uppercase; }
    @media (max-width: 991.98px) {
      .slider-text h1 {
        font-size: 40px; } }
  .slider-text p {
    font-size: 20px;
    line-height: 1.5;
    font-weight: 300;
    color: rgba(255, 255, 255, 0.8); }
    .slider-text p strong {
      font-weight: 700; }
      .slider-text p strong a {
        color: #39345a; }
  .slider-text .breadcrumbs {
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 1px;
    margin-bottom: 20px;
    z-index: 99; }
    .slider-text .breadcrumbs span {
      border-bottom: 2px solid rgba(255, 255, 255, 0.1);
      color: rgba(255, 255, 255, 0.7); }
      .slider-text .breadcrumbs span a {
        color: #fff; }
  .slider-text .bread {
    font-weight: 400 !important; }
  .slider-text .btn-primary {
    border: 1px solid rgba(255, 255, 255, 0.4);
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    border-radius: 30px; }
    .slider-text .btn-primary:hover, .slider-text .btn-primary:focus {
      background: #fff !important;
      color: #39345a; }

.owl-carousel {
  position: relative; }
  .owl-carousel .owl-item {
    opacity: .4; }
    .owl-carousel .owl-item.active {
      opacity: 1; }
  .owl-carousel .owl-nav {
    position: absolute;
    top: 50%;
    width: 100%; }
    .owl-carousel .owl-nav .owl-prev,
    .owl-carousel .owl-nav .owl-next {
      position: absolute;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      margin-top: -10px;
      color: #167ce9 !important;
      -moz-transition: all 0.7s ease;
      -o-transition: all 0.7s ease;
      -webkit-transition: all 0.7s ease;
      -ms-transition: all 0.7s ease;
      transition: all 0.7s ease;
      opacity: 0; }
      .owl-carousel .owl-nav .owl-prev span:before,
      .owl-carousel .owl-nav .owl-next span:before {
        font-size: 30px; }
    .owl-carousel .owl-nav .owl-prev {
      left: 0; }
    .owl-carousel .owl-nav .owl-next {
      right: 0; }
  .owl-carousel .owl-dots {
    text-align: center; }
    .owl-carousel .owl-dots .owl-dot {
      width: 10px;
      height: 10px;
      margin: 5px;
      border-radius: 50%;
      background: #dad8e8;
      position: relative; }
      .owl-carousel .owl-dots .owl-dot:after {
        position: absolute;
        top: -2px;
        left: -2px;
        right: 0;
        bottom: 0;
        width: 14px;
        height: 14px;
        content: '';
        border: 1px solid #dad8e8;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%; }
      .owl-carousel .owl-dots .owl-dot.active {
        background: #7e77b0; }
  .owl-carousel:hover .owl-nav .owl-prev,
  .owl-carousel:hover .owl-nav .owl-next {
    opacity: 1; }
  .owl-carousel:hover .owl-nav .owl-prev {
    left: -25px; }
  .owl-carousel:hover .owl-nav .owl-next {
    right: -25px; }

.owl-custom-nav {
  float: right;
  position: relative;
  z-index: 10;
  border: 1px solid red; }
  .owl-custom-nav .owl-custom-prev,
  .owl-custom-nav .owl-custom-next {
    padding: 10px;
    font-size: 30px;
    background: #ccc;
    line-height: 0;
    width: 60px;
    text-align: center;
    display: inline-block; }

.bg-light {
  background: #f8faff !important; }

.bg-primary {
  background: #167ce9; }

.btn {
  cursor: pointer;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  -ms-border-radius: 30px;
  border-radius: 30px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }
  .btn:hover, .btn:active, .btn:focus {
    outline: none; }
  .btn.btn-primary {
    background: #167ce9;
    border: 1px solid #167ce9;
    color: #fff; }
    .btn.btn-primary:hover {
      border: 1px solid #167ce9;
      background: transparent;
      color: #167ce9; }
    .btn.btn-primary.btn-outline-primary {
      border: 1px solid #167ce9;
      background: transparent;
      color: #167ce9; }
      .btn.btn-primary.btn-outline-primary:hover {
        border: 1px solid transparent;
        background: #167ce9;
        color: #fff; }
  .btn.btn-outline-white {
    border-color: rgba(255, 255, 255, 0.8);
    background: none;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    border-radius: 30px;
    border-width: 1px;
    color: #fff; }
    .btn.btn-outline-white:hover, .btn.btn-outline-white:focus, .btn.btn-outline-white:active {
      background: #fff;
      border-color: #fff;
      color: #167ce9; }

.ftco-services .nav-link-wrap {
  background: #167ce9; }
  @media (min-width: 768px) {
    .ftco-services .nav-link-wrap {
      margin-top: -40px; } }
  @media (max-width: 767.98px) {
    .ftco-services .nav-link-wrap {
      background: #167ce9;
      margin-top: 30px; } }

.ftco-services .nav-pills p {
  margin-bottom: 0; }

.ftco-services .nav-pills .nav-link {
  float: left;
  border-radius: 0;
  margin-bottom: 0;
  color: rgba(255, 255, 255, 0.6);
  font-size: 20px;
  font-weight: 400;
  position: relative; }
  .ftco-services .nav-pills .nav-link:after {
    position: absolute;
    top: 20px;
    bottom: 10px;
    right: 0;
    width: 0;
    height: 0;
    content: '';
    border-style: solid;
    border-width: 10px 10px 10px 0;
    border-color: transparent #fafafa transparent transparent;
    opacity: 0; }
  .ftco-services .nav-pills .nav-link span {
    font-size: 24px;
    margin-right: 5px;
    color: rgba(255, 255, 255, 0.6); }
  .ftco-services .nav-pills .nav-link.active, .ftco-services .nav-pills .nav-link:hover {
    color: #fff;
    font-size: 20px;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
    background: transparent;
    font-weight: 700; }
    .ftco-services .nav-pills .nav-link.active:after, .ftco-services .nav-pills .nav-link:hover:after {
      opacity: 1; }
    .ftco-services .nav-pills .nav-link.active span, .ftco-services .nav-pills .nav-link:hover span {
      color: #fff; }
    @media (max-width: 767.98px) {
      .ftco-services .nav-pills .nav-link.active:after, .ftco-services .nav-pills .nav-link:hover:after {
        opacity: 0; } }
  @media (max-width: 767.98px) {
    .ftco-services .nav-pills .nav-link {
      display: block;
      width: 100%; } }

.ftco-services .tab-content .tab-pane .icon {
  font-size: 100px;
  color: #167ce9;
  line-height: 1.2; }

.ftco-services .tab-content .tab-pane h2 {
  font-size: 28px; }

.ftco-section-2 {
  position: relative;
  display: block;
  width: 100%;
  overflow-x: hidden; }

.services-wrap {
  display: block;
  width: 100%;
  position: relative;
  background: rgba(255, 255, 255, 0.8);
  margin-bottom: 1px;
  padding: 30px 40px 30px 50px; }
  .services-wrap:first-child {
    margin-top: 1px; }
  .services-wrap:after {
    position: absolute;
    top: 0;
    left: 100%;
    bottom: 0;
    content: '';
    width: 360%;
    background: rgba(255, 255, 255, 0.8); }
  .services-wrap h2 {
    color: #167ce9;
    font-size: 24px; }
  .services-wrap p {
    color: #7782aa;
    margin-bottom: 0; }
  .services-wrap .icon {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 15px; }
    .services-wrap .icon span {
      font-size: 20px;
      color: #73b0f2; }
      .services-wrap .icon span:first-child {
        opacity: 0; }
      .services-wrap .icon span:last-child {
        opacity: 1; }
  .services-wrap:hover {
    margin-left: -100px; }
    .services-wrap:hover .icon span:first-child {
      opacity: 1;
      margin-left: 5px; }
    .services-wrap:hover .icon span:last-child {
      opacity: 0; }

.dept {
  width: 100%;
  display: block;
  margin-bottom: 30px; }
  .dept .img {
    width: 45%; }
    @media (max-width: 767.98px) {
      .dept .img {
        width: 100%;
        height: 250px;
        display: block; } }
  .dept .text {
    width: 55%;
    bordeR: 1px solid #d0e5fb;
    border-left: 1px solid transparent; }
    @media (max-width: 767.98px) {
      .dept .text {
        width: 100%;
        display: block;
        bordeR: 1px solid #d0e5fb;
        border-top: 1px solid transparent; } }
    .dept .text h3 {
      margin-bottom: 0; }
    .dept .text .doc {
      padding: 4px 10px;
      background: #167ce9;
      -webkit-border-radius: 2px;
      -moz-border-radius: 2px;
      -ms-border-radius: 2px;
      border-radius: 2px;
      color: #fff; }
    .dept .text ul {
      margin: 0;
      padding: 0; }
      .dept .text ul li {
        list-style: none;
        color: #167ce9;
        position: relative;
        padding-left: 24px; }
        .dept .text ul li span {
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0; }
          .dept .text ul li span:before {
            color: #167ce9;
            font-size: 24px; }

#accordion .card {
  margin-bottom: 5px;
  border: 1px solid #d0e5fb;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }
  #accordion .card .card-header {
    padding: 0;
    background: transparent;
    border-bottom: 1px solid white;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0; }
    #accordion .card .card-header a {
      padding: 12px 20px;
      display: block;
      font-size: 20px;
      font-weight: 400;
      color: #39345a; }
      #accordion .card .card-header a span {
        float: right; }
        #accordion .card .card-header a span i {
          color: #a2cbf6; }
      #accordion .card .card-header a small {
        padding: 4px 10px;
        margin-left: 10px;
        background: #d0e5fb;
        color: #167ce9;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        border-radius: 30px; }

#accordion .card-body {
  border: 1px solid transparent; }

#accordion [aria-expanded="false"] > .expanded, #accordion [aria-expanded="true"] > .collapsed {
  display: none; }

.ftco-section-parallax {
  position: relative; }
  .ftco-section-parallax .parallax-img {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    position: relative;
    padding: 4em 0;
    background: #167ce9;
    background: -moz-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: -webkit-gradient(left bottom, right top, color-stop(0%, #167ce9), color-stop(100%, #79efb4));
    background: -webkit-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: -o-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: -ms-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#167ce9', endColorstr='#79efb4', GradientType=1 ); }
  .ftco-section-parallax .heading-section-white h2 {
    font-weight: 400 !important; }

@media (min-width: 768px) {
  .block-3 {
    margin-bottom: 7em; } }

.block-3 .text, .block-3 .image {
  width: 100%;
  padding: 10% 7%;
  display: block; }
  @media (min-width: 768px) {
    .block-3 .text, .block-3 .image {
      width: 50%;
      padding: 10% 7%; } }

.block-3 .text .subheading {
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: .1em; }

.block-3 .text .heading {
  font-size: 30px;
  margin-bottom: 30px; }
  .block-3 .text .heading a {
    color: #39345a; }

.block-3 .text p:last-child {
  margin-bottom: 0; }

.block-3 .image {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative; }
  .block-3 .image:after {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    -webkit-box-shadow: 20px 20px 0 0 #8bbef4;
    box-shadow: 20px 20px 0 0 #8bbef4; }
  .block-3 .image.image-2:after {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    -webkit-box-shadow: -20px 20px 0 0 #8bbef4;
    box-shadow: -20px 20px 0 0 #8bbef4; }
  @media (max-width: 767.98px) {
    .block-3 .image {
      height: 300px; } }

.block-5 {
  overflow: hidden;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  height: 400px;
  position: relative;
  display: block; }
  .block-5:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: -moz-linear-gradient(top, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%);
    background: -webkit-linear-gradient(top, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%);
    background: -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(18%, transparent), color-stop(99%, rgba(0, 0, 0, 0.8)), to(rgba(0, 0, 0, 0.8)));
    background: -o-linear-gradient(top, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%);
    background: linear-gradient(to bottom, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#cc000000',GradientType=0 );
    opacity: .8; }
  .block-5 .text {
    position: absolute;
    bottom: 0;
    right: 0;
    left: 0;
    padding: 20px 20px 10px 20px;
    -webkit-transition: .8s all ease;
    -o-transition: .8s all ease;
    transition: .8s all ease; }
    .block-5 .text:before {
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 1;
      background: #fff;
      visibility: hidden;
      opacity: 0;
      height: 0;
      position: absolute;
      content: "";
      -moz-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      -webkit-transition: all 0.3s ease;
      -ms-transition: all 0.3s ease;
      transition: all 0.3s ease; }
    .block-5 .text .heading, .block-5 .text .subheading, .block-5 .text .post-meta, .block-5 .text .excerpt, .block-5 .text .price {
      z-index: 2;
      position: relative; }
    .block-5 .text .subheading {
      color: #fff;
      text-transform: uppercase;
      letter-spacing: .1em;
      font-size: 12px;
      margin-bottom: 5px;
      opacity: .6; }
    .block-5 .text .heading {
      color: #fff;
      margin: 0 0 10px 0;
      padding: 0;
      font-weight: bold;
      font-size: 24px;
      line-height: 1.2;
      font-weight: 400; }
    .block-5 .text .post-meta {
      line-height: 1.4;
      color: #fff;
      font-size: 14px; }
      .block-5 .text .post-meta span {
        display: inline-block;
        margin-right: 10px;
        margin-bottom: 10px;
        opacity: .6; }
    .block-5 .text .price {
      color: #fff; }
    .block-5 .text .excerpt {
      line-height: 1.4;
      color: #fff; }
  .block-5:hover .text:before, .block-5:focus .text:before {
    visibility: visible;
    opacity: 1;
    height: 100%;
    background: #fff; }
  .block-5:hover .text .heading, .block-5:hover .text .subheading, .block-5:hover .text .post-meta, .block-5:hover .text .price, .block-5:hover .text .star-rate, .block-5:focus .text .heading, .block-5:focus .text .subheading, .block-5:focus .text .post-meta, .block-5:focus .text .price, .block-5:focus .text .star-rate {
    color: #39345a; }

.aside-stretch {
  background: #4596ed; }
  .aside-stretch:after {
    position: absolute;
    top: 0;
    right: 100%;
    bottom: 0;
    content: '';
    width: 360%;
    background: #4596ed; }
  @media (max-width: 767.98px) {
    .aside-stretch {
      background: transparent; }
      .aside-stretch:after {
        background: transparent;
        display: none; } }

.form-control {
  height: 52px !important;
  background: #fff !important;
  color: #39345a !important;
  font-size: 18px;
  border-radius: 0px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }
  .form-control:focus, .form-control:active {
    border-color: #39345a; }

textarea.form-control {
  height: inherit !important; }

.ftco-vh-100 {
  height: 100vh; }
  @media (max-width: 1199.98px) {
    .ftco-vh-100 {
      height: inherit;
      padding-top: 5em;
      padding-bottom: 5em; } }

.ftco-vh-75 {
  height: 75vh;
  min-height: 700px; }
  @media (max-width: 1199.98px) {
    .ftco-vh-75 {
      min-height: 700px;
      height: inherit;
      padding-top: 5em;
      padding-bottom: 5em; } }

.ftco-tab-nav {
  padding: 0;
  margin: 0;
  display: inline-block !important; }
  @media (max-width: 767.98px) {
    .ftco-tab-nav {
      display: block !important;
      margin-bottom: 10px;
      width: 100% !important; } }
  .ftco-tab-nav li {
    padding: 0;
    margin: 0 5px;
    display: inline-block !important; }
    @media (max-width: 767.98px) {
      .ftco-tab-nav li {
        display: block !important;
        margin-bottom: 10px;
        width: 100% !important; } }
    .ftco-tab-nav li a {
      text-transform: uppercase;
      font-size: 14px;
      letter-spacing: .2em;
      color: #ccc;
      border: 2px solid #ccc;
      border-radius: 0 !important; }
      .ftco-tab-nav li a.active {
        background: none !important;
        color: black !important;
        border: 2px solid #39345a; }

.ftco-animate {
  opacity: 0;
  visibility: hidden; }

.bg-primary {
  background: #167ce9 !important; }

.ftco-section .ftco-sub-title {
  font-size: 16px;
  text-transform: uppercase;
  letter-spacing: .5em;
  color: #d4d4d4;
  font-family: "Work Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-weight: 300; }

.ftco-section .ftco-primary-title {
  margin-top: 0;
  margin-bottom: 30px; }

.media-custom {
  background: #fff; }
  .media-custom .media-body .name {
    font-weight: 500;
    font-size: 16px;
    margin-bottom: 0;
    color: #167ce9; }
  .media-custom .media-body .position {
    font-size: 13px;
    color: white; }

.about-author .desc h3 {
  font-size: 24px; }

.ftco-section {
  padding: 7em 0;
  position: relative; }
  @media (max-width: 767.98px) {
    .ftco-section {
      padding: 6em 0; } }
  @media (min-width: 768px) {
    .ftco-section .container-fluid {
      padding: 0 4em; } }

.ftco-bg-dark {
  background: #3c312e; }

.ftco-footer {
  font-size: 16px;
  padding: 8em 0 8em 0; }
  .ftco-footer .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: .95;
    background: #39345a; }
  .ftco-footer .ftco-footer-logo {
    text-transform: uppercase;
    letter-spacing: .1em; }
  .ftco-footer .ftco-footer-widget h2 {
    font-weight: normal;
    color: #fff;
    margin-bottom: 40px;
    font-size: 18px;
    font-weight: 400; }
  .ftco-footer .ftco-footer-widget ul li a span {
    color: #fff; }
  .ftco-footer .ftco-footer-widget .btn-primary {
    background: #fff !important;
    border: 2px solid #fff !important; }
    .ftco-footer .ftco-footer-widget .btn-primary:hover {
      background: #fff;
      border: 2px solid #fff !important; }
  .ftco-footer p {
    color: rgba(255, 255, 255, 0.7); }
  .ftco-footer a {
    color: rgba(255, 255, 255, 0.7); }
    .ftco-footer a:hover {
      color: #fff; }
  .ftco-footer .ftco-heading-2 {
    font-size: 17px;
    font-weight: 400;
    color: #39345a; }

.ftco-footer-social li {
  list-style: none;
  margin: 0 10px 0 0;
  display: inline-block; }
  .ftco-footer-social li a {
    height: 50px;
    width: 50px;
    display: block;
    float: left;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50%;
    position: relative; }
    .ftco-footer-social li a span {
      position: absolute;
      font-size: 26px;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
    .ftco-footer-social li a:hover {
      color: #fff; }

.footer-small-nav > li {
  display: inline-block; }
  .footer-small-nav > li a {
    margin: 0 10px 10px 0; }
    .footer-small-nav > li a:hover, .footer-small-nav > li a:focus {
      color: #167ce9; }

.media .ftco-icon {
  width: 100px; }
  .media .ftco-icon span {
    color: #167ce9; }

.ftco-media {
  background: #fff;
  border-radius: 0px; }
  .ftco-media .heading {
    font-weight: normal; }
  .ftco-media.ftco-media-shadow {
    padding: 40px;
    background: #fff;
    -webkit-box-shadow: 0 10px 50px -15px rgba(0, 0, 0, 0.3);
    box-shadow: 0 10px 50px -15px rgba(0, 0, 0, 0.3);
    -webkit-transition: .2s all ease;
    -o-transition: .2s all ease;
    transition: .2s all ease;
    position: relative;
    top: 0; }
    .ftco-media.ftco-media-shadow:hover, .ftco-media.ftco-media-shadow:focus {
      top: -3px;
      -webkit-box-shadow: 0 10px 70px -15px rgba(0, 0, 0, 0.3);
      box-shadow: 0 10px 70px -15px rgba(0, 0, 0, 0.3); }
  .ftco-media .icon {
    font-size: 50px;
    display: block;
    color: #167ce9; }
  .ftco-media.text-center .ftco-icon {
    margin: 0 auto; }

.ftco-overflow-hidden {
  overflow: hidden; }

.padding-top-bottom {
  padding-top: 120px;
  padding-bottom: 120px; }

#map {
  height: 400px;
  width: 100%; }
  @media (max-width: 991.98px) {
    #map {
      height: 300px; } }

@-webkit-keyframes pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0 rgba(22, 124, 233, 0.4); }
  70% {
    -webkit-box-shadow: 0 0 0 30px rgba(22, 124, 233, 0); }
  100% {
    -webkit-box-shadow: 0 0 0 0 rgba(22, 124, 233, 0); } }

@keyframes pulse {
  0% {
    -moz-box-shadow: 0 0 0 0 rgba(22, 124, 233, 0.4);
    -webkit-box-shadow: 0 0 0 0 rgba(22, 124, 233, 0.4);
    box-shadow: 0 0 0 0 rgba(22, 124, 233, 0.4); }
  70% {
    -moz-box-shadow: 0 0 0 30px rgba(22, 124, 233, 0);
    -webkit-box-shadow: 0 0 0 30px rgba(22, 124, 233, 0);
    box-shadow: 0 0 0 30px rgba(22, 124, 233, 0); }
  100% {
    -moz-box-shadow: 0 0 0 0 rgba(22, 124, 233, 0);
    -webkit-box-shadow: 0 0 0 0 rgba(22, 124, 233, 0);
    box-shadow: 0 0 0 0 rgba(22, 124, 233, 0); } }

.heading-section .subheading {
  font-size: 14px;
  display: block;
  margin-bottom: 10px; }

.heading-section h2 {
  font-size: 30px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 1px; }
  @media (max-width: 767.98px) {
    .heading-section h2 {
      font-size: 28px; } }

.heading-section.heading-section-white .subheading {
  color: rgba(255, 255, 255, 0.9); }

.heading-section.heading-section-white h2 {
  font-size: 30px;
  color: #fff; }

.heading-section.heading-section-white p {
  color: rgba(255, 255, 255, 0.9); }

.hotel-img,
.hero-wrap,
.img,
.blog-img,
.user-img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center; }

@media (max-width: 767.98px) {
  .ftco-section-2 .section-2-blocks-wrapper {
    margin-top: 30px; } }

.ftco-section-2 .section-2-blocks-wrapper .button {
  display: block;
  position: absolute;
  width: 100px;
  height: 100px;
  right: 0;
  margin-right: -50px;
  border-radius: 50%;
  background: #167ce9;
  z-index: 1;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  -webkit-animation: pulse 2s infinite;
  animation: pulse 2s infinite; }
  @media (max-width: 991.98px) {
    .ftco-section-2 .section-2-blocks-wrapper .button {
      top: auto;
      bottom: 0 !important;
      margin-right: auto;
      right: auto;
      left: 50%;
      margin-bottom: -50px;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%); } }
  .ftco-section-2 .section-2-blocks-wrapper .button span {
    position: absolute;
    font-size: 30px;
    color: #fff;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-30%, -48%);
    -ms-transform: translate(-30%, -48%);
    transform: translate(-30%, -48%); }

.ftco-section-2 .section-2-blocks-wrapper .text {
  position: relative;
  z-index: -1;
  padding: 15px; }
  @media (min-width: 768px) {
    .ftco-section-2 .section-2-blocks-wrapper .text {
      padding: 10% 7%;
      background: rgba(0, 0, 0, 0.02); } }
  @media (max-width: 767.98px) {
    .ftco-section-2 .section-2-blocks-wrapper .text {
      margin-top: 4em; } }
  .ftco-section-2 .section-2-blocks-wrapper .text h3 {
    margin-bottom: 50px; }

.ftco-section-2 .section-2-blocks-wrapper .img {
  display: block;
  background-position: center center;
  background-size: cover; }
  @media (max-width: 991.98px) {
    .ftco-section-2 .section-2-blocks-wrapper .img {
      height: 400px; } }

.testimony-section {
  position: relative; }
  .testimony-section .owl-carousel {
    margin: 0; }
  .testimony-section .owl-carousel .owl-stage-outer {
    padding-bottom: 2em;
    padding-top: 4em;
    position: relative; }

.testimony-wrap {
  background: #fff;
  display: block;
  position: relative;
  padding: 30px;
  border: 1px solid #d0e5fb; }
  .testimony-wrap .user-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: relative;
    margin: 0 auto;
    margin-top: -80px; }
    .testimony-wrap .user-img .quote {
      position: absolute;
      bottom: -10px;
      right: 0;
      width: 40px;
      height: 40px;
      background: #167ce9;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%; }
      .testimony-wrap .user-img .quote i {
        color: #fff; }
  .testimony-wrap .name {
    font-weight: 500;
    font-size: 16px;
    margin-bottom: 0;
    color: #167ce9; }
  .testimony-wrap .position {
    font-size: 13px;
    color: #bbb7d6; }

.ftco-section {
  position: relative;
  width: 100%;
  display: block; }
  .ftco-section .nav-pills p {
    margin-bottom: 0; }
  .ftco-section .nav-pills .nav-link {
    border-radius: 0;
    margin-bottom: 0;
    font-size: 18px;
    font-weight: 400;
    position: relative;
    display: inline-block;
    margin-left: 5px;
    margin-right: 5px;
    color: #f8f8fb;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    border-radius: 30px; }
    .ftco-section .nav-pills .nav-link:hover {
      color: #39345a; }
    .ftco-section .nav-pills .nav-link.active {
      color: #fff;
      -moz-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      -webkit-transition: all 0.3s ease;
      -ms-transition: all 0.3s ease;
      transition: all 0.3s ease; }
      .ftco-section .nav-pills .nav-link.active:after {
        opacity: 1; }
      @media (max-width: 767.98px) {
        .ftco-section .nav-pills .nav-link.active:after {
          opacity: 0; } }
    @media (max-width: 767.98px) {
      .ftco-section .nav-pills .nav-link {
        display: block;
        width: 100%;
        margin-bottom: 5px; } }
  .ftco-section .tab-content .tab-pane h2 {
    font-size: 24px; }
  .ftco-section .tab-content .tab-pane .one-forth {
    width: 50%; }
    .ftco-section .tab-content .tab-pane .one-forth img {
      -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.03);
      -moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.03);
      box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.03); }
      @media (max-width: 767.98px) {
        .ftco-section .tab-content .tab-pane .one-forth img {
          margin-bottom: 20px; } }
    @media (max-width: 767.98px) {
      .ftco-section .tab-content .tab-pane .one-forth {
        width: 100%; } }
  .ftco-section .tab-content .tab-pane .one-half {
    width: 50%; }
    @media (max-width: 767.98px) {
      .ftco-section .tab-content .tab-pane .one-half {
        width: 100%; } }

.image-popup {
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in; }

.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
  opacity: 0;
  -webkit-backface-visibility: hidden;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out; }

.mfp-with-zoom.mfp-ready .mfp-container {
  opacity: 1; }

.mfp-with-zoom.mfp-ready.mfp-bg {
  opacity: 0.8; }

.mfp-with-zoom.mfp-removing .mfp-container,
.mfp-with-zoom.mfp-removing.mfp-bg {
  opacity: 0; }

#section-counter {
  position: relative;
  z-index: 0; }
  #section-counter:after {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    content: '';
    z-index: -1;
    opacity: .7;
    background: #167ce9;
    background: -moz-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: -webkit-gradient(left bottom, right top, color-stop(0%, #167ce9), color-stop(100%, #79efb4));
    background: -webkit-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: -o-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: -ms-linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    background: linear-gradient(45deg, #167ce9 0%, #79efb4 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#167ce9', endColorstr='#79efb4', GradientType=1 ); }

.ftco-counter {
  padding: 10em 0; }
  .ftco-counter .text strong.number {
    font-weight: 400;
    font-size: 40px;
    color: #fff; }
  .ftco-counter .text span {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.7); }
  @media (max-width: 767.98px) {
    .ftco-counter .counter-wrap {
      margin-bottom: 20px; } }
  .ftco-counter .ftco-number {
    display: block;
    font-size: 72px;
    font-weight: bold;
    color: #167ce9; }
  .ftco-counter .ftco-label {
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: .1em; }

.block-2 {
  margin-bottom: 50px;
  -webkit-perspective: 1000;
  -moz-perspective: 1000;
  -ms-perspective: 1000;
  perspective: 1000;
  -ms-transform: perspective(1000px);
  -moz-transform: perspective(1000px);
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d; }
  .block-2:hover .back, .block-2.hover .back {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg); }
  .block-2:hover .front, .block-2.hover .front {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg); }
  .block-2, .block-2 .front, .block-2 .back {
    width: 100%;
    height: 427px; }
  .block-2 .flipper {
    -webkit-transition: 0.6s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 0.6s;
    -moz-transition: 0.6s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    -o-transition: 0.6s;
    transition: 0.6s;
    transform-style: preserve-3d;
    position: relative; }
  .block-2 .front, .block-2 .back {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius: 2px;
    -webkit-transition: 0.6s;
    -webkit-transform-style: preserve-3d;
    -webkit-transform: rotateY(0deg);
    -moz-transition: 0.6s;
    -moz-transform-style: preserve-3d;
    -moz-transform: rotateY(0deg);
    -o-transition: 0.6s;
    -o-transform-style: preserve-3d;
    -o-transform: rotateY(0deg);
    -ms-transition: 0.6s;
    -ms-transform-style: preserve-3d;
    -ms-transform: rotateY(0deg);
    transition: 0.6s;
    transform-style: preserve-3d;
    transform: rotateY(0deg);
    position: absolute;
    top: 0;
    left: 0; }
  .block-2 .front {
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    background: lightgreen;
    z-index: 2;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat; }
    .block-2 .front:before {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: -moz-linear-gradient(top, transparent 0%, transparent 30%, rgba(0, 0, 0, 0.3) 99%, rgba(0, 0, 0, 0.3) 100%);
      background: -webkit-linear-gradient(top, transparent 0%, transparent 30%, rgba(0, 0, 0, 0.3) 99%, rgba(0, 0, 0, 0.3) 100%);
      background: -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(30%, transparent), color-stop(99%, rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3)));
      background: -o-linear-gradient(top, transparent 0%, transparent 30%, rgba(0, 0, 0, 0.3) 99%, rgba(0, 0, 0, 0.3) 100%);
      background: linear-gradient(to bottom, transparent 0%, transparent 30%, rgba(0, 0, 0, 0.3) 99%, rgba(0, 0, 0, 0.3) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#cc000000',GradientType=0 ); }
    .block-2 .front .box {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 20px;
      background: rgba(255, 255, 255, 0.95); }
      .block-2 .front .box h2, .block-2 .front .box p {
        color: #39345a;
        margin: 0;
        padding: 0;
        line-height: 1.5; }
      .block-2 .front .box h2 {
        font-size: 20px;
        color: #167ce9; }
      .block-2 .front .box p {
        font-size: 12px; }
  .block-2 .back {
    background: #fff;
    -webkit-box-shadow: 0 0 70px -10px rgba(0, 0, 0, 0.4);
    box-shadow: 0 0 70px -10px rgba(0, 0, 0, 0.4);
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg); }
  .block-2 .back p {
    position: absolute;
    top: 40px;
    left: 0;
    right: 0;
    text-align: center;
    padding: 0 20px;
    font-size: 18px; }
  .block-2 .author {
    bottom: 0;
    position: absolute;
    bottom: 20px;
    left: 20px;
    right: 20px; }
    .block-2 .author .image {
      width: 40px; }
      .block-2 .author .image .img {
        width: 46px;
        height: 46px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%; }
    .block-2 .author .position {
      display: block;
      font-size: 12px; }
  @media (max-width: 991.98px) {
    .block-2 .back {
      -webkit-transform: rotateY(0deg);
      -moz-transform: rotateY(0deg);
      -o-transform: rotateY(0deg);
      -ms-transform: rotateY(0deg);
      transform: rotateY(0deg); }
    .block-2 .front {
      -webkit-transform: rotateY(180deg);
      -moz-transform: rotateY(180deg);
      -o-transform: rotateY(180deg);
      transform: rotateY(180deg); } }

.block-20 {
  overflow: hidden;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  width: 45%;
  position: relative;
  display: block; }

.blog-entry {
  background: #fff;
  border: 1px solid #d0e5fb; }
  @media (min-width: 768px) {
    .blog-entry {
      margin-bottom: 30px; } }
  @media (max-width: 767.98px) {
    .blog-entry {
      margin-bottom: 30px; } }
  .blog-entry .text {
    position: relative;
    border-top: 0;
    border-radius: 2px;
    width: 55%; }
    .blog-entry .text .heading {
      font-size: 20px;
      margin-bottom: 16px; }
      .blog-entry .text .heading a {
        color: #39345a; }
        .blog-entry .text .heading a:hover, .blog-entry .text .heading a:focus, .blog-entry .text .heading a:active {
          color: #167ce9; }
    .blog-entry .text .read {
      color: #39345a;
      font-size: 14px; }
  .blog-entry .meta > div {
    display: inline-block;
    margin-right: 5px;
    margin-bottom: 5px;
    font-size: 15px; }
    .blog-entry .meta > div a {
      color: #bbb7d6;
      font-size: 15px; }
      .blog-entry .meta > div a:hover {
        color: #9d97c3; }

.block-23 ul {
  padding: 0; }
  .block-23 ul li, .block-23 ul li > a {
    display: table;
    line-height: 1.5;
    margin-bottom: 15px; }
  .block-23 ul li span {
    color: rgba(255, 255, 255, 0.7); }
  .block-23 ul li .icon, .block-23 ul li .text {
    display: table-cell;
    vertical-align: top; }
  .block-23 ul li .icon {
    width: 40px;
    font-size: 18px;
    padding-top: 2px;
    color: white; }

.block-6 {
  margin-bottom: 40px; }
  .block-6 .media-body p {
    font-size: 16px; }

.block-10 .chef-img {
  height: 400px; }

.block-10 .person-info {
  height: 75px; }
  .block-10 .person-info span {
    display: block; }
  .block-10 .person-info .name {
    font-size: 20px;
    color: #39345a;
    font-weight: 400; }
  .block-10 .person-info .position {
    font-size: 14px; }

.block-16 figure {
  position: relative; }
  .block-16 figure .play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-size: 40px;
    width: 90px;
    height: 90px;
    background: #fff;
    display: block;
    border-radius: 50%;
    opacity: .7; }
    .block-16 figure .play-button:hover {
      opacity: 1; }
    .block-16 figure .play-button > span {
      position: absolute;
      left: 55%;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }

.block-17 {
  background: #fff;
  overflow: hidden;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 2px; }
  .block-17 form .fields {
    width: calc(100% - 80px);
    position: relative; }
    .block-17 form .fields .one-third {
      width: 50%;
      background: #fff; }
      .block-17 form .fields .one-third:last-child {
        border-right: none;
        border-left: 1px solid rgba(0, 0, 0, 0.1); }
      .block-17 form .fields .one-third label {
        font-weight: 700;
        color: #39345a; }
    .block-17 form .fields .form-control {
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      border: transparent;
      background: #fff !important;
      color: #7e77b0 !important;
      border: 2px solid rgba(0, 0, 0, 0.1);
      font-size: 14px;
      width: 100%;
      height: 70px !important;
      bordeR: 1px solid transparent;
      padding: 10px 30px;
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      -ms-border-radius: 0;
      border-radius: 0; }
      .block-17 form .fields .form-control::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: #7e77b0; }
      .block-17 form .fields .form-control::-moz-placeholder {
        /* Firefox 19+ */
        color: #7e77b0; }
      .block-17 form .fields .form-control:-ms-input-placeholder {
        /* IE 10+ */
        color: #7e77b0; }
      .block-17 form .fields .form-control:-moz-placeholder {
        /* Firefox 18- */
        color: #7e77b0; }
    .block-17 form .fields .icon {
      position: absolute;
      top: 50%;
      right: 30px;
      font-size: 14px;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      color: rgba(57, 52, 90, 0.7); }
      @media (max-width: 767.98px) {
        .block-17 form .fields .icon {
          right: 10px; } }
    .block-17 form .fields .select-wrap {
      position: relative; }
      .block-17 form .fields .select-wrap select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none; }
  .block-17 form .search-submit {
    width: 160px;
    background: #167ce9;
    border: 1px solid #167ce9;
    color: #fff;
    padding: 12px 10px;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0; }
    @media (max-width: 767.98px) {
      .block-17 form .search-submit {
        width: 80px; } }
    .block-17 form .search-submit:hover {
      background: #167ce9 !important;
      color: #fff !important;
      border: 1px solid #167ce9 !important; }

.block-18 .icon > span {
  font-size: 40px; }

.block-18 .text strong {
  font-size: 30px; }

.block-18 .text span {
  display: block; }

.block-27 ul {
  padding: 0;
  margin: 0; }
  .block-27 ul li {
    display: inline-block;
    margin-bottom: 4px;
    font-weight: 400; }
    .block-27 ul li a, .block-27 ul li span {
      color: #167ce9;
      text-align: center;
      display: inline-block;
      width: 40px;
      height: 40px;
      line-height: 40px;
      border-radius: 50%;
      border: 1px solid #8bbef4; }
    .block-27 ul li.active a, .block-27 ul li.active span {
      background: #8bbef4;
      color: #167ce9;
      border: 1px solid transparent; }

.block-8 .accordion-item .heading {
  font-size: 16px;
  font-weight: 400;
  padding: 10px 0; }
  .block-8 .accordion-item .heading > a {
    padding-left: 35px;
    position: relative;
    color: #39345a; }
    .block-8 .accordion-item .heading > a:before {
      width: 20px;
      height: 20px;
      line-height: 18px;
      border: 1px solid #ccc;
      text-align: center;
      font-size: 18px;
      top: .1em;
      left: 0; }
    .block-8 .accordion-item .heading > a[aria-expanded="true"]:before {
      font-family: 'icomoon';
      position: absolute;
      content: "\e316";
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease;
      background: #167ce9;
      color: #fff;
      border: 1px solid #167ce9; }
    .block-8 .accordion-item .heading > a[aria-expanded="false"]:before {
      content: "\e313";
      color: #ccc;
      font-family: 'icomoon';
      position: absolute;
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }

.block-8 .accordion-item .body-text {
  font-size: 16px;
  padding: 5px 0;
  padding-left: 30px; }

.block-4 .nonloop .owl-stage {
  padding-bottom: 2em; }

.block-4 .nonloop .owl-item {
  -webkit-box-shadow: 0 7px 20px -5px rgba(0, 0, 0, 0.2);
  box-shadow: 0 7px 20px -5px rgba(0, 0, 0, 0.2); }

.block-4 .nonloop .owl-nav {
  z-index: 2;
  position: absolute;
  width: 100%;
  bottom: -2px; }
  .block-4 .nonloop .owl-nav .owl-prev, .block-4 .nonloop .owl-nav .owl-next {
    opacity: .2;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    position: absolute; }
    .block-4 .nonloop .owl-nav .owl-prev:hover, .block-4 .nonloop .owl-nav .owl-next:hover {
      opacity: 1; }
    .block-4 .nonloop .owl-nav .owl-prev.disabled, .block-4 .nonloop .owl-nav .owl-next.disabled {
      display: none; }
    .block-4 .nonloop .owl-nav .owl-prev span, .block-4 .nonloop .owl-nav .owl-next span {
      font-size: 30px; }
  .block-4 .nonloop .owl-nav .owl-prev {
    left: 50px; }
  .block-4 .nonloop .owl-nav .owl-next {
    right: 50px; }

.block-4 .nonloop .owl-dots {
  bottom: -40px;
  position: absolute;
  width: 100%;
  text-align: center; }
  .block-4 .nonloop .owl-dots .owl-dot {
    display: inline-block;
    width: 8px;
    height: 8px;
    background: #ccc;
    border-radius: 50%;
    margin-right: 10px;
    margin-bottom: 10px;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    .block-4 .nonloop .owl-dots .owl-dot.active {
      background: #167ce9; }

.contact-section .contact-info p a {
  color: #4d477a; }

.block-9 .form-control {
  outline: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  font-size: 15px; }

.block-21 .blog-img {
  display: block;
  height: 80px;
  width: 80px; }

.block-21 .text {
  width: calc(100% - 100px); }
  .block-21 .text .heading {
    font-size: 18px;
    font-weight: 300; }
    .block-21 .text .heading a {
      color: #39345a; }
      .block-21 .text .heading a:hover, .block-21 .text .heading a:active, .block-21 .text .heading a:focus {
        color: #167ce9; }
  .block-21 .text .meta > div {
    display: inline-block;
    font-size: 12px;
    margin-right: 5px; }
    .block-21 .text .meta > div a {
      color: #bbb7d6; }

.custom-pagination {
  width: 100%;
  text-align: center;
  display: inline-block; }
  .custom-pagination li {
    display: inline-block; }
  .custom-pagination .prev a, .custom-pagination .next a {
    font-size: 20px !important;
    line-height: 38px !important; }
  .custom-pagination li a, .custom-pagination .prev a, .custom-pagination .next a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    padding: 0;
    margin: 0;
    border-radius: 50% !important;
    font-size: 16px; }
  .custom-pagination li.active a, .custom-pagination .prev.active a, .custom-pagination .next.active a {
    display: block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    padding: 0;
    margin: 0;
    border-radius: 50% !important;
    font-size: 16px;
    background: #167ce9;
    color: #fff; }
    .custom-pagination li.active a:hover, .custom-pagination li.active a:focus, .custom-pagination .prev.active a:hover, .custom-pagination .prev.active a:focus, .custom-pagination .next.active a:hover, .custom-pagination .next.active a:focus {
      color: #fff; }
  .custom-pagination .prev {
    float: left; }
  .custom-pagination .next {
    float: right; }

/* Blog*/
.post-info {
  font-size: 12px;
  text-transform: uppercase;
  font-weight: bold;
  color: #fff;
  letter-spacing: .1em; }
  .post-info > div {
    display: inline-block; }
    .post-info > div .seperator {
      display: inline-block;
      margin: 0 10px;
      opacity: .5; }

.tagcloud a {
  text-transform: uppercase;
  display: inline-block;
  padding: 4px 10px;
  margin-bottom: 7px;
  margin-right: 4px;
  border-radius: 4px;
  color: #39345a;
  border: 1px solid #ccc;
  font-size: 11px; }
  .tagcloud a:hover {
    border: 1px solid #000; }

.comment-form-wrap {
  clear: both; }

.comment-list {
  padding: 0;
  margin: 0; }
  .comment-list .children {
    padding: 50px 0 0 40px;
    margin: 0;
    float: left;
    width: 100%; }
  .comment-list li {
    padding: 0;
    margin: 0 0 30px 0;
    float: left;
    width: 100%;
    clear: both;
    list-style: none; }
    .comment-list li .vcard {
      width: 80px;
      float: left; }
      .comment-list li .vcard img {
        width: 50px;
        border-radius: 50%; }
    .comment-list li .comment-body {
      float: right;
      width: calc(100% - 80px); }
      .comment-list li .comment-body h3 {
        font-size: 20px; }
      .comment-list li .comment-body .meta {
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: .1em;
        color: #ccc; }
      .comment-list li .comment-body .reply {
        padding: 5px 10px;
        background: #e9e8f2;
        color: #39345a;
        text-transform: uppercase;
        font-size: 11px;
        letter-spacing: .1em;
        font-weight: 400;
        border-radius: 4px; }
        .comment-list li .comment-body .reply:hover {
          color: #fff;
          background: #39345a; }

.search-form {
  background: white;
  padding: 10px; }
  .search-form .form-group {
    position: relative; }
    .search-form .form-group input {
      padding-right: 50px; }
  .search-form .icon {
    position: absolute;
    top: 50%;
    right: 20px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%); }

.subscribe-form .form-group {
  position: relative;
  margin-bottom: 0;
  border: 1px solid rgba(255, 255, 255, 0.7);
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  -ms-border-radius: 30px;
  border-radius: 30px; }
  .subscribe-form .form-group input {
    background: transparent !important;
    border: 1px solid transparent;
    color: rgba(255, 255, 255, 0.7) !important;
    font-size: 16px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    border-radius: 30px; }
    .subscribe-form .form-group input::-webkit-input-placeholder {
      /* Chrome/Opera/Safari */
      color: rgba(255, 255, 255, 0.7) !important; }
    .subscribe-form .form-group input::-moz-placeholder {
      /* Firefox 19+ */
      color: rgba(255, 255, 255, 0.7) !important; }
    .subscribe-form .form-group input:-ms-input-placeholder {
      /* IE 10+ */
      color: rgba(255, 255, 255, 0.7) !important; }
    .subscribe-form .form-group input:-moz-placeholder {
      /* Firefox 18- */
      color: rgba(255, 255, 255, 0.7) !important; }
  .subscribe-form .form-group .submit {
    border-left: 1px solid rgba(255, 255, 255, 0.7);
    color: #fff !important;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    font-size: 16px; }
    .subscribe-form .form-group .submit:hover {
      cursor: pointer; }

.subscribe-form .icon {
  position: absolute;
  top: 50%;
  right: 20px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  color: rgba(255, 255, 255, 0.8); }

.sidebar-wrap {
  padding: 20px;
  border: 1px solid white;
  margin-bottom: 30px; }
  .sidebar-wrap .heading {
    font-size: 18px;
    text-transform: uppercase; }
  .sidebar-wrap .fields {
    width: 100%;
    position: relative; }
    .sidebar-wrap .fields .form-control {
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      border: transparent;
      background: #fff !important;
      color: #7e77b0 !important;
      border: 1px solid white;
      font-size: 14px;
      width: 100%;
      height: 52px !important;
      padding: 10px 20px;
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      -ms-border-radius: 0;
      border-radius: 0; }
      .sidebar-wrap .fields .form-control::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: #7e77b0; }
      .sidebar-wrap .fields .form-control::-moz-placeholder {
        /* Firefox 19+ */
        color: #7e77b0; }
      .sidebar-wrap .fields .form-control:-ms-input-placeholder {
        /* IE 10+ */
        color: #7e77b0; }
      .sidebar-wrap .fields .form-control:-moz-placeholder {
        /* Firefox 18- */
        color: #7e77b0; }
    .sidebar-wrap .fields .icon {
      position: absolute;
      top: 50%;
      right: 30px;
      font-size: 14px;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      color: rgba(57, 52, 90, 0.7); }
      @media (max-width: 767.98px) {
        .sidebar-wrap .fields .icon {
          right: 10px; } }
    .sidebar-wrap .fields .select-wrap {
      position: relative; }
      .sidebar-wrap .fields .select-wrap select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none; }
  .sidebar-wrap .form-group .btn {
    width: 100%;
    display: block !important;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    border-radius: 2px; }
  .sidebar-wrap .range-slider {
    width: 100%;
    margin: auto;
    position: relative;
    height: 3em;
    margin-bottom: 30px; }
  .sidebar-wrap .range-slider svg,
  .sidebar-wrap .range-slider input[type=range] {
    position: absolute;
    left: 0;
    bottom: 0; }
  .sidebar-wrap input[type=number] {
    border: 1px solid transparent;
    text-align: center;
    font-size: 14px;
    -moz-appearance: textfield;
    background: transparent;
    position: relative; }
  .sidebar-wrap input[type=number]::-webkit-outer-spin-button,
  .sidebar-wrap input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none; }
  .sidebar-wrap input[type=number]:invalid,
  .sidebar-wrap input[type=number]:out-of-range {
    border: 2px solid #ff6347; }
  .sidebar-wrap input[type=range] {
    -webkit-appearance: none;
    width: 100%; }
  .sidebar-wrap input[type=range]:focus {
    outline: none; }
  .sidebar-wrap input[type=range]:focus::-webkit-slider-runnable-track {
    background: #167ce9; }
  .sidebar-wrap input[type=range]:focus::-ms-fill-lower {
    background: #167ce9; }
  .sidebar-wrap input[type=range]:focus::-ms-fill-upper {
    background: #167ce9; }
  .sidebar-wrap input[type=range]::-webkit-slider-runnable-track {
    width: 100%;
    height: 5px;
    cursor: pointer;
    animate: 0.2s;
    background: #167ce9;
    border-radius: 1px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 0; }
  .sidebar-wrap input[type=range]::-webkit-slider-thumb {
    z-index: 2;
    position: relative;
    -webkit-box-shadow: 0px 0px 0px #000;
    box-shadow: 0px 0px 0px #000;
    border: 1px solid #167ce9;
    height: 18px;
    width: 18px;
    border-radius: 25px;
    background: #167ce9;
    cursor: pointer;
    -webkit-appearance: none;
    margin-top: -7px; }
  .sidebar-wrap input[type=range]::-moz-range-track {
    width: 100%;
    height: 5px;
    cursor: pointer;
    animate: 0.2s;
    background: #167ce9;
    border-radius: 1px;
    box-shadow: none;
    border: 0; }
  .sidebar-wrap input[type=range]::-moz-range-thumb {
    z-index: 2;
    position: relative;
    box-shadow: 0px 0px 0px #000;
    border: 1px solid #167ce9;
    height: 18px;
    width: 18px;
    border-radius: 25px;
    background: #167ce9;
    cursor: pointer; }
  .sidebar-wrap input[type=range]::-ms-track {
    width: 100%;
    height: 5px;
    cursor: pointer;
    animate: 0.2s;
    background: transparent;
    border-color: transparent;
    color: transparent; }
  .sidebar-wrap input[type=range]::-ms-fill-lower,
  .sidebar-wrap input[type=range]::-ms-fill-upper {
    background: #167ce9;
    border-radius: 1px;
    box-shadow: none;
    border: 0; }
  .sidebar-wrap input[type=range]::-ms-thumb {
    z-index: 2;
    position: relative;
    box-shadow: 0px 0px 0px #000;
    border: 1px solid #167ce9;
    height: 18px;
    width: 18px;
    border-radius: 25px;
    background: #167ce9;
    cursor: pointer; }
  .sidebar-wrap .rate i {
    color: #167ce9;
    margin: 0 4px !important; }

.rate i {
  color: #167ce9;
  margin: 0 4px; }

.sidebar-box {
  margin-bottom: 30px;
  padding: 25px;
  font-size: 15px;
  width: 100%;
  float: left;
  background: #fff; }
  .sidebar-box *:last-child {
    margin-bottom: 0; }
  .sidebar-box h3 {
    font-size: 18px;
    margin-bottom: 15px; }

.categories li, .sidelink li {
  position: relative;
  margin-bottom: 10px;
  padding-bottom: 10px;
  border-bottom: 1px dotted #dee2e6;
  list-style: none; }
  .categories li:last-child, .sidelink li:last-child {
    margin-bottom: 0;
    border-bottom: none;
    padding-bottom: 0; }
  .categories li a, .sidelink li a {
    display: block; }
    .categories li a span, .sidelink li a span {
      position: absolute;
      right: 0;
      top: 0;
      color: #ccc; }
  .categories li.active a, .sidelink li.active a {
    color: #39345a;
    font-style: italic; }

#ftco-loader {
  position: fixed;
  width: 96px;
  height: 96px;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  background-color: rgba(255, 255, 255, 0.9);
  -webkit-box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
  box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
  border-radius: 16px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity .2s ease-out, visibility 0s linear .2s;
  -o-transition: opacity .2s ease-out, visibility 0s linear .2s;
  transition: opacity .2s ease-out, visibility 0s linear .2s;
  z-index: 1000; }

#ftco-loader.fullscreen {
  padding: 0;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none;
  background-color: #fff;
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none; }

#ftco-loader.show {
  -webkit-transition: opacity .4s ease-out, visibility 0s linear 0s;
  -o-transition: opacity .4s ease-out, visibility 0s linear 0s;
  transition: opacity .4s ease-out, visibility 0s linear 0s;
  visibility: visible;
  opacity: 1; }

#ftco-loader .circular {
  -webkit-animation: loader-rotate 2s linear infinite;
  animation: loader-rotate 2s linear infinite;
  position: absolute;
  left: calc(50% - 24px);
  top: calc(50% - 24px);
  display: block;
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg); }

#ftco-loader .path {
  stroke-dasharray: 1, 200;
  stroke-dashoffset: 0;
  -webkit-animation: loader-dash 1.5s ease-in-out infinite;
  animation: loader-dash 1.5s ease-in-out infinite;
  stroke-linecap: round; }

@-webkit-keyframes loader-rotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes loader-rotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-webkit-keyframes loader-dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -136px; } }

@keyframes loader-dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -136px; } }

    </style>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="http://premediccare.rf.gd/mainindex-user.php"><i class="flaticon-pharmacy"></i><span>Pre</span>Medic Care</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="http://premediccare.rf.gd/mainindex-user.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/about-user.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/departments-user.php" class="nav-link">Departments</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/doctor-user.php" class="nav-link">Doctors</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/blog-user.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/contact-user.php" class="nav-link">Contact</a></li>
        </ul>
        <div class="dropdown" style="float:right;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php $_SESSION['Name'];?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Dashboard</a>
    <a class="dropdown-item" href="http://premediccare.rf.gd/logout.php" style="color:red;">Log Out &nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-sign-out" aria-hidden="true"></i></a>
  </div>
</div>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/cardio.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="http://premediccare.rf.gd/index.php">Home</a></span></p>
            <h3 class="mb-3 bread">CardioVascular-Department</h3>
          </div>
        </div>
      </div>
    </div>

   <section class="ftco-section contact-section ftco-degree-bg" style="height: 1500px">
   
      <div class="container col-lg-6" >
          
          
            <div class="w3-card-4" style="width: 550px;">
              <div class="w3-container w3-black">
                <h2 style="color:white;">Heart Disease Analysis</h2>
              </div>
              <form class="w3-container" action="{{ url_for('predict')}}"method="post">
                <br>
                <p>      
                <label class="w3-text-black"><b>Age</b></label>
                <input class="w3-input w3-border w3-sand" name="first" type="text">     </p>
                <p>      
                <label class="w3-text-black"><b>Resting Blood Pressure</b></label>
                <input class="w3-input w3-border w3-sand" name="trestbps" type="text">
                </p>
                <p>      
                <label class="w3-text-black"><b>Cholestrol</b></label>
                <input class="w3-input w3-border w3-sand" name="chol" type="text">     </p>
                <p>      
                <label class="w3-text-black"><b>thalach</b></label>
                <input class="w3-input w3-border w3-sand" name="thalach" type="text">
                </p>
                <p>      
                <label class="w3-text-black"><b>oldpeak</b></label>
                <input class="w3-input w3-border w3-sand" name="oldpeak" type="text">
                </p>
                <p>
                <label class="w3-text-black"><b>Gender</b></label>
                <select class="w3-select w3-border w3-sand" name="sex" >
                <option value="" disabled selected>Select Option</option>
                <option value="1">Male</option>
                <option value="0">Female</option>
                </select>
                </p>
                <p>
                <label class="w3-text-black"><b>Chest Pain</b></label>
                <select class="w3-select w3-border w3-sand" name="cp" >
                <option value="" disabled selected>Select Option</option>
                <option value="1">Type 1</option>
                <option value="0">Type 2</option>
                </select>
                </p>
                <p>
                <label class="w3-text-black"><b>Fbs</b></label>
                <select class="w3-select w3-border w3-sand" name="Fbs" >
                <option value="" disabled selected>Select Option</option>
                <option value="1">Type 1</option>
                <option value="0">Type 2</option>
                </select>
                </p>
                <p>      
                <label class="w3-text-black"><b>Restg</b></label>
                <input class="w3-input w3-border w3-sand" name="restg" type="text"></p>
                <p>      
                <label class="w3-text-black"><b>Exang</b></label>
                <input class="w3-input w3-border w3-sand" name="exang" type="text"></p>
                <p>      
                <label class="w3-text-black"><b>Ca</b></label>
                <input class="w3-input w3-border w3-sand" name="Ca" type="text"></p>
                <p>      
                <label class="w3-text-black"><b>Slope</b></label>
                <input class="w3-input w3-border w3-sand" name="slope" type="text"></p>
                <p>      
                <label class="w3-text-black"><b>Thal</b></label>
                <input class="w3-input w3-border w3-sand" name="thal" type="text"></p>
                <p>
                <button type="submit"class="w3-btn w3-black">Analyse now</button></p>
              </form>
            </div>
            </div>
      {{ prediction_text }}
    </section>
		<footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_5.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Premedic Care</h2>
              <p>Far far away, behind the word mountains, far from the countries We're here to provide you good care of your health.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="http://premediccare.rf.gd/mainindex-user.php" class="py-2 d-block">Home</a></li>
                <li><a href="http://premediccare.rf.gd/about-user.php" class="py-2 d-block">About</a></li>
                <li><a href="http://premediccare.rf.gd/departments-user.php" class="py-2 d-block">Departments</a></li>
                <li><a href="http://premediccare.rf.gd/doctors-user.php" class="py-2 d-block">Doctors</a></li>
                <li><a href="http://premediccare.rf.gd/blog-user.php" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">King's Palace 9(a), Kiit University, Patia, Bhubaneshwar,Odisha-751024</span></li>
	                <li><a href="tel:+91 7735866609"><span class="icon icon-phone"></span><span class="text">+91 7735866609</span></a></li>
	                <li><a href="mailto:piyushsinghpk21@yahoo.com"><span class="icon icon-envelope"></span><span class="text">piyushsinghpk21@yahoo.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This page is developed and maintained with<i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Premedic Team</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

 <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>