@import url(https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@100;300;400&display=swap);
@charset "UTF-8";
:root {
  --bs-blue: #0d6efd;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-red: #dc3545;
  --bs-orange: #fd7e14;
  --bs-yellow: #ffc107;
  --bs-green: #198754;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-black: #000;
  --bs-white: #fff;
  --bs-gray: #6c757d;
  --bs-gray-dark: #343a40;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #6c757d;
  --bs-gray-700: #495057;
  --bs-gray-800: #343a40;
  --bs-gray-900: #212529;
  --bs-primary: #0d6efd;
  --bs-secondary: #6c757d;
  --bs-success: #198754;
  --bs-info: #0dcaf0;
  --bs-warning: #ffc107;
  --bs-danger: #dc3545;
  --bs-light: #f8f9fa;
  --bs-dark: #212529;
  --bs-primary-rgb: 13, 110, 253;
  --bs-secondary-rgb: 108, 117, 125;
  --bs-success-rgb: 25, 135, 84;
  --bs-info-rgb: 13, 202, 240;
  --bs-warning-rgb: 255, 193, 7;
  --bs-danger-rgb: 220, 53, 69;
  --bs-light-rgb: 248, 249, 250;
  --bs-dark-rgb: 33, 37, 41;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 33, 37, 41;
  --bs-body-bg-rgb: 255, 255, 255;
  --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 1rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #212529;
  --bs-body-bg: #fff;
  --bs-border-width: 1px;
  --bs-border-style: solid;
  --bs-border-color: #dee2e6;
  --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
  --bs-border-radius: 0.375rem;
  --bs-border-radius-sm: 0.25rem;
  --bs-border-radius-lg: 0.5rem;
  --bs-border-radius-xl: 1rem;
  --bs-border-radius-2xl: 2rem;
  --bs-border-radius-pill: 50rem;
  --bs-link-color: #0d6efd;
  --bs-link-hover-color: #0a58ca;
  --bs-code-color: #d63384;
  --bs-highlight-bg: #fff3cd;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

hr {
  margin: 1rem 0;
  color: inherit;
  border: 0;
  border-top: 1px solid;
  opacity: 0.25;
}

h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: calc(1.375rem + 1.5vw);
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.5rem;
  }
}

h2, .h2 {
  font-size: calc(1.325rem + 0.9vw);
}
@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 2rem;
  }
}

h3, .h3 {
  font-size: calc(1.3rem + 0.6vw);
}
@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.75rem;
  }
}

h4, .h4 {
  font-size: calc(1.275rem + 0.3vw);
}
@media (min-width: 1200px) {
  h4, .h4 {
    font-size: 1.5rem;
  }
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title] {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
          text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small, .small {
  font-size: 0.875em;
}

mark, .mark {
  padding: 0.1875em;
  background-color: var(--bs-highlight-bg);
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

a {
  color: var(--bs-link-color);
  text-decoration: underline;
}
a:hover {
  color: var(--bs-link-hover-color);
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 0.875em;
  color: var(--bs-code-color);
  word-wrap: break-word;
}
a > code {
  color: inherit;
}

kbd {
  padding: 0.1875rem 0.375rem;
  font-size: 0.875em;
  color: var(--bs-body-bg);
  background-color: var(--bs-body-color);
  border-radius: 0.25rem;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
}

figure {
  margin: 0 0 1rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: #6c757d;
  text-align: left;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}

[list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
  display: none !important;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type=search] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::file-selector-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 4.5rem;
  }
}

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 4rem;
  }
}

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 3.5rem;
  }
}

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 3rem;
  }
}

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 2.5rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 0.875em;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}
.blockquote > :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #6c757d;
}
.blockquote-footer::before {
  content: "— ";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid var(--bs-border-color);
  border-radius: 0.375rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 0.875em;
  color: #6c757d;
}

.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1320px;
  }
}
.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-0.5 * var(--bs-gutter-x));
  margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-top: var(--bs-gutter-y);
}

.col {
  flex: 1 0 0%;
}

.row-cols-auto > * {
  flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 auto;
  width: 33.3333333333%;
}

.row-cols-4 > * {
  flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 auto;
  width: 16.6666666667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
}

.col-1 {
  flex: 0 0 auto;
  width: 8.33333333%;
}

.col-2 {
  flex: 0 0 auto;
  width: 16.66666667%;
}

.col-3 {
  flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  flex: 0 0 auto;
  width: 33.33333333%;
}

.col-5 {
  flex: 0 0 auto;
  width: 41.66666667%;
}

.col-6 {
  flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  flex: 0 0 auto;
  width: 58.33333333%;
}

.col-8 {
  flex: 0 0 auto;
  width: 66.66666667%;
}

.col-9 {
  flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  flex: 0 0 auto;
  width: 83.33333333%;
}

.col-11 {
  flex: 0 0 auto;
  width: 91.66666667%;
}

.col-12 {
  flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }
  .row-cols-sm-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0;
  }
  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0;
  }
  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 1rem;
  }
  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 1rem;
  }
  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 3rem;
  }
  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }
  .row-cols-md-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-md-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-md-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-md-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-md-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0;
  }
  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0;
  }
  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 1rem;
  }
  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 1rem;
  }
  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 3rem;
  }
  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }
  .row-cols-lg-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0;
  }
  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0;
  }
  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 1rem;
  }
  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 1rem;
  }
  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 3rem;
  }
  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }
  .row-cols-xl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0;
  }
  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0;
  }
  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }
  .row-cols-xxl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xxl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xxl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xxl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xxl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xxl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xxl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }
  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0;
  }
  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0;
  }
  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 3rem;
  }
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.text-bg-primary {
  color: #fff !important;
  background-color: RGBA(13, 110, 253, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-secondary {
  color: #fff !important;
  background-color: RGBA(108, 117, 125, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-success {
  color: #fff !important;
  background-color: RGBA(25, 135, 84, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-info {
  color: #000 !important;
  background-color: RGBA(13, 202, 240, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-warning {
  color: #000 !important;
  background-color: RGBA(255, 193, 7, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-danger {
  color: #fff !important;
  background-color: RGBA(220, 53, 69, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-light {
  color: #000 !important;
  background-color: RGBA(248, 249, 250, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-dark {
  color: #fff !important;
  background-color: RGBA(33, 37, 41, var(--bs-bg-opacity, 1)) !important;
}

.link-primary {
  color: #0d6efd !important;
}
.link-primary:hover, .link-primary:focus {
  color: #0a58ca !important;
}

.link-secondary {
  color: #6c757d !important;
}
.link-secondary:hover, .link-secondary:focus {
  color: #565e64 !important;
}

.link-success {
  color: #198754 !important;
}
.link-success:hover, .link-success:focus {
  color: #146c43 !important;
}

.link-info {
  color: #0dcaf0 !important;
}
.link-info:hover, .link-info:focus {
  color: #3dd5f3 !important;
}

.link-warning {
  color: #ffc107 !important;
}
.link-warning:hover, .link-warning:focus {
  color: #ffcd39 !important;
}

.link-danger {
  color: #dc3545 !important;
}
.link-danger:hover, .link-danger:focus {
  color: #b02a37 !important;
}

.link-light {
  color: #f8f9fa !important;
}
.link-light:hover, .link-light:focus {
  color: #f9fafb !important;
}

.link-dark {
  color: #212529 !important;
}
.link-dark:hover, .link-dark:focus {
  color: #1a1e21 !important;
}

.ratio {
  position: relative;
  width: 100%;
}
.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}
.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
  --bs-aspect-ratio: 75%;
}

.ratio-16x9 {
  --bs-aspect-ratio: 56.25%;
}

.ratio-21x9 {
  --bs-aspect-ratio: 42.8571428571%;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020;
}

.sticky-bottom {
  position: sticky;
  bottom: 0;
  z-index: 1020;
}

@media (min-width: 576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-sm-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-md-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-lg-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xxl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
.hstack {
  display: flex;
  flex-direction: row;
  align-items: center;
  align-self: stretch;
}

.vstack {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.vr {
  display: inline-block;
  align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentcolor;
  opacity: 0.25;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.float-start {
  float: left !important;
}

.float-end {
  float: right !important;
}

.float-none {
  float: none !important;
}

.opacity-0 {
  opacity: 0 !important;
}

.opacity-25 {
  opacity: 0.25 !important;
}

.opacity-50 {
  opacity: 0.5 !important;
}

.opacity-75 {
  opacity: 0.75 !important;
}

.opacity-100 {
  opacity: 1 !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.overflow-visible {
  overflow: visible !important;
}

.overflow-scroll {
  overflow: scroll !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-grid {
  display: grid !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: flex !important;
}

.d-inline-flex {
  display: inline-flex !important;
}

.d-none {
  display: none !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.top-0 {
  top: 0 !important;
}

.top-50 {
  top: 50% !important;
}

.top-100 {
  top: 100% !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-50 {
  bottom: 50% !important;
}

.bottom-100 {
  bottom: 100% !important;
}

.start-0 {
  left: 0 !important;
}

.start-50 {
  left: 50% !important;
}

.start-100 {
  left: 100% !important;
}

.end-0 {
  right: 0 !important;
}

.end-50 {
  right: 50% !important;
}

.end-100 {
  right: 100% !important;
}

.translate-middle {
  transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
  transform: translateX(-50%) !important;
}

.translate-middle-y {
  transform: translateY(-50%) !important;
}

.border {
  border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-0 {
  border: 0 !important;
}

.border-top {
  border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-end {
  border-right: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-end-0 {
  border-right: 0 !important;
}

.border-bottom {
  border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-start {
  border-left: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-start-0 {
  border-left: 0 !important;
}

.border-primary {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-primary-rgb), var(--bs-border-opacity)) !important;
}

.border-secondary {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important;
}

.border-success {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;
}

.border-info {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important;
}

.border-warning {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-warning-rgb), var(--bs-border-opacity)) !important;
}

.border-danger {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important;
}

.border-light {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-light-rgb), var(--bs-border-opacity)) !important;
}

.border-dark {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important;
}

.border-white {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important;
}

.border-1 {
  --bs-border-width: 1px;
}

.border-2 {
  --bs-border-width: 2px;
}

.border-3 {
  --bs-border-width: 3px;
}

.border-4 {
  --bs-border-width: 4px;
}

.border-5 {
  --bs-border-width: 5px;
}

.border-opacity-10 {
  --bs-border-opacity: 0.1;
}

.border-opacity-25 {
  --bs-border-opacity: 0.25;
}

.border-opacity-50 {
  --bs-border-opacity: 0.5;
}

.border-opacity-75 {
  --bs-border-opacity: 0.75;
}

.border-opacity-100 {
  --bs-border-opacity: 1;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.vw-100 {
  width: 100vw !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mh-100 {
  max-height: 100% !important;
}

.vh-100 {
  height: 100vh !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-row {
  flex-direction: row !important;
}

.flex-column {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.justify-content-start {
  justify-content: flex-start !important;
}

.justify-content-end {
  justify-content: flex-end !important;
}

.justify-content-center {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.justify-content-evenly {
  justify-content: space-evenly !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch {
  align-self: stretch !important;
}

.order-first {
  order: -1 !important;
}

.order-0 {
  order: 0 !important;
}

.order-1 {
  order: 1 !important;
}

.order-2 {
  order: 2 !important;
}

.order-3 {
  order: 3 !important;
}

.order-4 {
  order: 4 !important;
}

.order-5 {
  order: 5 !important;
}

.order-last {
  order: 6 !important;
}

.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-1 {
  margin-top: 0.25rem !important;
}

.mt-2 {
  margin-top: 0.5rem !important;
}

.mt-3 {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.me-0 {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2 {
  margin-right: 0.5rem !important;
}

.me-3 {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3 {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2 {
  margin-left: 0.5rem !important;
}

.ms-3 {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.gap-0 {
  gap: 0 !important;
}

.gap-1 {
  gap: 0.25rem !important;
}

.gap-2 {
  gap: 0.5rem !important;
}

.gap-3 {
  gap: 1rem !important;
}

.gap-4 {
  gap: 1.5rem !important;
}

.gap-5 {
  gap: 3rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.375rem + 1.5vw) !important;
}

.fs-2 {
  font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-3 {
  font-size: calc(1.3rem + 0.6vw) !important;
}

.fs-4 {
  font-size: calc(1.275rem + 0.3vw) !important;
}

.fs-5 {
  font-size: 1.25rem !important;
}

.fs-6 {
  font-size: 1rem !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-light {
  font-weight: 300 !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-normal {
  font-weight: 400 !important;
}

.fw-bold {
  font-weight: 700 !important;
}

.fw-semibold {
  font-weight: 600 !important;
}

.fw-bolder {
  font-weight: bolder !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-sm {
  line-height: 1.25 !important;
}

.lh-base {
  line-height: 1.5 !important;
}

.lh-lg {
  line-height: 2 !important;
}

.text-start {
  text-align: left !important;
}

.text-end {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-decoration-underline {
  text-decoration: underline !important;
}

.text-decoration-line-through {
  text-decoration: line-through !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}

.text-secondary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

.text-success {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
}

.text-info {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
}

.text-warning {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
}

.text-danger {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
}

.text-light {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
}

.text-dark {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}

.text-black {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
}

.text-white {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
}

.text-body {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
}

.text-muted {
  --bs-text-opacity: 1;
  color: #6c757d !important;
}

.text-black-50 {
  --bs-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important;
}

.text-opacity-25 {
  --bs-text-opacity: 0.25;
}

.text-opacity-50 {
  --bs-text-opacity: 0.5;
}

.text-opacity-75 {
  --bs-text-opacity: 0.75;
}

.text-opacity-100 {
  --bs-text-opacity: 1;
}

.bg-primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}

.bg-info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}

.bg-warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
}

.bg-danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
}

.bg-light {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}

.bg-dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
}

.bg-white {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
}

.bg-body {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
}

.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important;
}

.bg-opacity-10 {
  --bs-bg-opacity: 0.1;
}

.bg-opacity-25 {
  --bs-bg-opacity: 0.25;
}

.bg-opacity-50 {
  --bs-bg-opacity: 0.5;
}

.bg-opacity-75 {
  --bs-bg-opacity: 0.75;
}

.bg-opacity-100 {
  --bs-bg-opacity: 1;
}

.bg-gradient {
  background-image: var(--bs-gradient) !important;
}

.user-select-all {
  -webkit-user-select: all !important;
     -moz-user-select: all !important;
          user-select: all !important;
}

.user-select-auto {
  -webkit-user-select: auto !important;
     -moz-user-select: auto !important;
          user-select: auto !important;
}

.user-select-none {
  -webkit-user-select: none !important;
     -moz-user-select: none !important;
          user-select: none !important;
}

.pe-none {
  pointer-events: none !important;
}

.pe-auto {
  pointer-events: auto !important;
}

.rounded {
  border-radius: var(--bs-border-radius) !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.rounded-1 {
  border-radius: var(--bs-border-radius-sm) !important;
}

.rounded-2 {
  border-radius: var(--bs-border-radius) !important;
}

.rounded-3 {
  border-radius: var(--bs-border-radius-lg) !important;
}

.rounded-4 {
  border-radius: var(--bs-border-radius-xl) !important;
}

.rounded-5 {
  border-radius: var(--bs-border-radius-2xl) !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: var(--bs-border-radius-pill) !important;
}

.rounded-top {
  border-top-left-radius: var(--bs-border-radius) !important;
  border-top-right-radius: var(--bs-border-radius) !important;
}

.rounded-end {
  border-top-right-radius: var(--bs-border-radius) !important;
  border-bottom-right-radius: var(--bs-border-radius) !important;
}

.rounded-bottom {
  border-bottom-right-radius: var(--bs-border-radius) !important;
  border-bottom-left-radius: var(--bs-border-radius) !important;
}

.rounded-start {
  border-bottom-left-radius: var(--bs-border-radius) !important;
  border-top-left-radius: var(--bs-border-radius) !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
  .order-sm-first {
    order: -1 !important;
  }
  .order-sm-0 {
    order: 0 !important;
  }
  .order-sm-1 {
    order: 1 !important;
  }
  .order-sm-2 {
    order: 2 !important;
  }
  .order-sm-3 {
    order: 3 !important;
  }
  .order-sm-4 {
    order: 4 !important;
  }
  .order-sm-5 {
    order: 5 !important;
  }
  .order-sm-last {
    order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-3 {
    margin-top: 1rem !important;
  }
  .mt-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-5 {
    margin-top: 3rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.25rem !important;
  }
  .me-sm-2 {
    margin-right: 0.5rem !important;
  }
  .me-sm-3 {
    margin-right: 1rem !important;
  }
  .me-sm-4 {
    margin-right: 1.5rem !important;
  }
  .me-sm-5 {
    margin-right: 3rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }
  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-3 {
    margin-left: 1rem !important;
  }
  .ms-sm-4 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-5 {
    margin-left: 3rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-3 {
    padding-top: 1rem !important;
  }
  .pt-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-5 {
    padding-top: 3rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-3 {
    padding-right: 1rem !important;
  }
  .pe-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pe-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }
  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-3 {
    padding-left: 1rem !important;
  }
  .ps-sm-4 {
    padding-left: 1.5rem !important;
  }
  .ps-sm-5 {
    padding-left: 3rem !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.25rem !important;
  }
  .gap-sm-2 {
    gap: 0.5rem !important;
  }
  .gap-sm-3 {
    gap: 1rem !important;
  }
  .gap-sm-4 {
    gap: 1.5rem !important;
  }
  .gap-sm-5 {
    gap: 3rem !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
  .order-md-first {
    order: -1 !important;
  }
  .order-md-0 {
    order: 0 !important;
  }
  .order-md-1 {
    order: 1 !important;
  }
  .order-md-2 {
    order: 2 !important;
  }
  .order-md-3 {
    order: 3 !important;
  }
  .order-md-4 {
    order: 4 !important;
  }
  .order-md-5 {
    order: 5 !important;
  }
  .order-md-last {
    order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0 {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.25rem !important;
  }
  .mt-md-2 {
    margin-top: 0.5rem !important;
  }
  .mt-md-3 {
    margin-top: 1rem !important;
  }
  .mt-md-4 {
    margin-top: 1.5rem !important;
  }
  .mt-md-5 {
    margin-top: 3rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.25rem !important;
  }
  .me-md-2 {
    margin-right: 0.5rem !important;
  }
  .me-md-3 {
    margin-right: 1rem !important;
  }
  .me-md-4 {
    margin-right: 1.5rem !important;
  }
  .me-md-5 {
    margin-right: 3rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .mb-md-0 {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-3 {
    margin-bottom: 1rem !important;
  }
  .mb-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-5 {
    margin-bottom: 3rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.25rem !important;
  }
  .ms-md-2 {
    margin-left: 0.5rem !important;
  }
  .ms-md-3 {
    margin-left: 1rem !important;
  }
  .ms-md-4 {
    margin-left: 1.5rem !important;
  }
  .ms-md-5 {
    margin-left: 3rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.25rem !important;
  }
  .pt-md-2 {
    padding-top: 0.5rem !important;
  }
  .pt-md-3 {
    padding-top: 1rem !important;
  }
  .pt-md-4 {
    padding-top: 1.5rem !important;
  }
  .pt-md-5 {
    padding-top: 3rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.25rem !important;
  }
  .pe-md-2 {
    padding-right: 0.5rem !important;
  }
  .pe-md-3 {
    padding-right: 1rem !important;
  }
  .pe-md-4 {
    padding-right: 1.5rem !important;
  }
  .pe-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-3 {
    padding-bottom: 1rem !important;
  }
  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-5 {
    padding-bottom: 3rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.25rem !important;
  }
  .ps-md-2 {
    padding-left: 0.5rem !important;
  }
  .ps-md-3 {
    padding-left: 1rem !important;
  }
  .ps-md-4 {
    padding-left: 1.5rem !important;
  }
  .ps-md-5 {
    padding-left: 3rem !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.25rem !important;
  }
  .gap-md-2 {
    gap: 0.5rem !important;
  }
  .gap-md-3 {
    gap: 1rem !important;
  }
  .gap-md-4 {
    gap: 1.5rem !important;
  }
  .gap-md-5 {
    gap: 3rem !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
  .order-lg-first {
    order: -1 !important;
  }
  .order-lg-0 {
    order: 0 !important;
  }
  .order-lg-1 {
    order: 1 !important;
  }
  .order-lg-2 {
    order: 2 !important;
  }
  .order-lg-3 {
    order: 3 !important;
  }
  .order-lg-4 {
    order: 4 !important;
  }
  .order-lg-5 {
    order: 5 !important;
  }
  .order-lg-last {
    order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-3 {
    margin-top: 1rem !important;
  }
  .mt-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-5 {
    margin-top: 3rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.25rem !important;
  }
  .me-lg-2 {
    margin-right: 0.5rem !important;
  }
  .me-lg-3 {
    margin-right: 1rem !important;
  }
  .me-lg-4 {
    margin-right: 1.5rem !important;
  }
  .me-lg-5 {
    margin-right: 3rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }
  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-3 {
    margin-left: 1rem !important;
  }
  .ms-lg-4 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-5 {
    margin-left: 3rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-3 {
    padding-top: 1rem !important;
  }
  .pt-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-5 {
    padding-top: 3rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-3 {
    padding-right: 1rem !important;
  }
  .pe-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pe-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }
  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-3 {
    padding-left: 1rem !important;
  }
  .ps-lg-4 {
    padding-left: 1.5rem !important;
  }
  .ps-lg-5 {
    padding-left: 3rem !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.25rem !important;
  }
  .gap-lg-2 {
    gap: 0.5rem !important;
  }
  .gap-lg-3 {
    gap: 1rem !important;
  }
  .gap-lg-4 {
    gap: 1.5rem !important;
  }
  .gap-lg-5 {
    gap: 3rem !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
  .order-xl-first {
    order: -1 !important;
  }
  .order-xl-0 {
    order: 0 !important;
  }
  .order-xl-1 {
    order: 1 !important;
  }
  .order-xl-2 {
    order: 2 !important;
  }
  .order-xl-3 {
    order: 3 !important;
  }
  .order-xl-4 {
    order: 4 !important;
  }
  .order-xl-5 {
    order: 5 !important;
  }
  .order-xl-last {
    order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-3 {
    margin-top: 1rem !important;
  }
  .mt-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-5 {
    margin-top: 3rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xl-3 {
    margin-right: 1rem !important;
  }
  .me-xl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xl-5 {
    margin-right: 3rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-3 {
    margin-left: 1rem !important;
  }
  .ms-xl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-5 {
    margin-left: 3rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-3 {
    padding-top: 1rem !important;
  }
  .pt-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xl-5 {
    padding-top: 3rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-3 {
    padding-right: 1rem !important;
  }
  .pe-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-3 {
    padding-left: 1rem !important;
  }
  .ps-xl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xl-5 {
    padding-left: 3rem !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.25rem !important;
  }
  .gap-xl-2 {
    gap: 0.5rem !important;
  }
  .gap-xl-3 {
    gap: 1rem !important;
  }
  .gap-xl-4 {
    gap: 1.5rem !important;
  }
  .gap-xl-5 {
    gap: 3rem !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}
@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important;
  }
  .float-xxl-end {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-grid {
    display: grid !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: inline-flex !important;
  }
  .d-xxl-none {
    display: none !important;
  }
  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xxl-row {
    flex-direction: row !important;
  }
  .flex-xxl-column {
    flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    justify-content: center !important;
  }
  .justify-content-xxl-between {
    justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    justify-content: space-around !important;
  }
  .justify-content-xxl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xxl-start {
    align-items: flex-start !important;
  }
  .align-items-xxl-end {
    align-items: flex-end !important;
  }
  .align-items-xxl-center {
    align-items: center !important;
  }
  .align-items-xxl-baseline {
    align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    align-items: stretch !important;
  }
  .align-content-xxl-start {
    align-content: flex-start !important;
  }
  .align-content-xxl-end {
    align-content: flex-end !important;
  }
  .align-content-xxl-center {
    align-content: center !important;
  }
  .align-content-xxl-between {
    align-content: space-between !important;
  }
  .align-content-xxl-around {
    align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    align-content: stretch !important;
  }
  .align-self-xxl-auto {
    align-self: auto !important;
  }
  .align-self-xxl-start {
    align-self: flex-start !important;
  }
  .align-self-xxl-end {
    align-self: flex-end !important;
  }
  .align-self-xxl-center {
    align-self: center !important;
  }
  .align-self-xxl-baseline {
    align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    align-self: stretch !important;
  }
  .order-xxl-first {
    order: -1 !important;
  }
  .order-xxl-0 {
    order: 0 !important;
  }
  .order-xxl-1 {
    order: 1 !important;
  }
  .order-xxl-2 {
    order: 2 !important;
  }
  .order-xxl-3 {
    order: 3 !important;
  }
  .order-xxl-4 {
    order: 4 !important;
  }
  .order-xxl-5 {
    order: 5 !important;
  }
  .order-xxl-last {
    order: 6 !important;
  }
  .m-xxl-0 {
    margin: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.25rem !important;
  }
  .m-xxl-2 {
    margin: 0.5rem !important;
  }
  .m-xxl-3 {
    margin: 1rem !important;
  }
  .m-xxl-4 {
    margin: 1.5rem !important;
  }
  .m-xxl-5 {
    margin: 3rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xxl-0 {
    margin-top: 0 !important;
  }
  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xxl-3 {
    margin-top: 1rem !important;
  }
  .mt-xxl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xxl-5 {
    margin-top: 3rem !important;
  }
  .mt-xxl-auto {
    margin-top: auto !important;
  }
  .me-xxl-0 {
    margin-right: 0 !important;
  }
  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xxl-3 {
    margin-right: 1rem !important;
  }
  .me-xxl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xxl-5 {
    margin-right: 3rem !important;
  }
  .me-xxl-auto {
    margin-right: auto !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-auto {
    margin-bottom: auto !important;
  }
  .ms-xxl-0 {
    margin-left: 0 !important;
  }
  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xxl-3 {
    margin-left: 1rem !important;
  }
  .ms-xxl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xxl-5 {
    margin-left: 3rem !important;
  }
  .ms-xxl-auto {
    margin-left: auto !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.25rem !important;
  }
  .p-xxl-2 {
    padding: 0.5rem !important;
  }
  .p-xxl-3 {
    padding: 1rem !important;
  }
  .p-xxl-4 {
    padding: 1.5rem !important;
  }
  .p-xxl-5 {
    padding: 3rem !important;
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xxl-0 {
    padding-top: 0 !important;
  }
  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xxl-3 {
    padding-top: 1rem !important;
  }
  .pt-xxl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xxl-5 {
    padding-top: 3rem !important;
  }
  .pe-xxl-0 {
    padding-right: 0 !important;
  }
  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xxl-3 {
    padding-right: 1rem !important;
  }
  .pe-xxl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xxl-5 {
    padding-right: 3rem !important;
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xxl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xxl-0 {
    padding-left: 0 !important;
  }
  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xxl-3 {
    padding-left: 1rem !important;
  }
  .ps-xxl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xxl-5 {
    padding-left: 3rem !important;
  }
  .gap-xxl-0 {
    gap: 0 !important;
  }
  .gap-xxl-1 {
    gap: 0.25rem !important;
  }
  .gap-xxl-2 {
    gap: 0.5rem !important;
  }
  .gap-xxl-3 {
    gap: 1rem !important;
  }
  .gap-xxl-4 {
    gap: 1.5rem !important;
  }
  .gap-xxl-5 {
    gap: 3rem !important;
  }
  .text-xxl-start {
    text-align: left !important;
  }
  .text-xxl-end {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.5rem !important;
  }
  .fs-2 {
    font-size: 2rem !important;
  }
  .fs-3 {
    font-size: 1.75rem !important;
  }
  .fs-4 {
    font-size: 1.5rem !important;
  }
}
@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}
/* Slider */
.slick-slider {
  position: relative;
  display: block;
  box-sizing: border-box;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  touch-action: pan-y;
  -webkit-tap-highlight-color: transparent;
}

.slick-list {
  position: relative;
  overflow: hidden;
  display: block;
  margin: 0;
  padding: 0;
}
.slick-list:focus {
  outline: none;
}
.slick-list.dragging {
  cursor: pointer;
  cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list {
  transform: translate3d(0, 0, 0);
}

.slick-track {
  position: relative;
  left: 0;
  top: 0;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.slick-track:before, .slick-track:after {
  content: "";
  display: table;
}
.slick-track:after {
  clear: both;
}
.slick-loading .slick-track {
  visibility: hidden;
}

.slick-slide {
  float: left;
  height: 100%;
  min-height: 1px;
  display: none;
}
[dir=rtl] .slick-slide {
  float: right;
}
.slick-slide img {
  display: block;
}
.slick-slide.slick-loading img {
  display: none;
}
.slick-slide.dragging img {
  pointer-events: none;
}
.slick-initialized .slick-slide {
  display: block;
}
.slick-loading .slick-slide {
  visibility: hidden;
}
.slick-vertical .slick-slide {
  display: block;
  height: auto;
  border: 1px solid transparent;
}

.slick-arrow.slick-hidden {
  display: none;
}

/* Slider */
.slick-loading .slick-list {
  background: #fff url("./ajax-loader.gif") center center no-repeat;
}

/* Icons */
@font-face {
  font-family: "slick";
  src: url("./fonts/slick.eot");
  src: url("./fonts/slick.eot?#iefix") format("embedded-opentype"), url("./fonts/slick.woff") format("woff"), url("./fonts/slick.ttf") format("truetype"), url("./fonts/slick.svg#slick") format("svg");
  font-weight: normal;
  font-style: normal;
}
/* Arrows */
.slick-prev,
.slick-next {
  position: absolute;
  display: block;
  height: 20px;
  width: 20px;
  line-height: 0px;
  font-size: 0px;
  cursor: pointer;
  background: transparent;
  color: transparent;
  top: 50%;
  transform: translate(0, -50%);
  padding: 0;
  border: none;
  outline: none;
}
.slick-prev:hover, .slick-prev:focus,
.slick-next:hover,
.slick-next:focus {
  outline: none;
  background: transparent;
  color: transparent;
}
.slick-prev:hover:before, .slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before {
  opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before {
  opacity: 0.25;
}
.slick-prev:before,
.slick-next:before {
  font-family: "slick";
  font-size: 20px;
  line-height: 1;
  color: white;
  opacity: 0.75;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.slick-prev {
  left: -25px;
}
[dir=rtl] .slick-prev {
  left: auto;
  right: -25px;
}
.slick-prev:before {
  content: "←";
}
[dir=rtl] .slick-prev:before {
  content: "→";
}

.slick-next {
  right: -25px;
}
[dir=rtl] .slick-next {
  left: -25px;
  right: auto;
}
.slick-next:before {
  content: "→";
}
[dir=rtl] .slick-next:before {
  content: "←";
}

/* Dots */
.slick-dotted.slick-slider {
  margin-bottom: 30px;
}

.slick-dots {
  position: absolute;
  bottom: -25px;
  list-style: none;
  display: block;
  text-align: center;
  padding: 0;
  margin: 0;
  width: 100%;
}
.slick-dots li {
  position: relative;
  display: inline-block;
  height: 20px;
  width: 20px;
  margin: 0 5px;
  padding: 0;
  cursor: pointer;
}
.slick-dots li button {
  border: 0;
  background: transparent;
  display: block;
  height: 20px;
  width: 20px;
  outline: none;
  line-height: 0px;
  font-size: 0px;
  color: transparent;
  padding: 5px;
  cursor: pointer;
}
.slick-dots li button:hover, .slick-dots li button:focus {
  outline: none;
}
.slick-dots li button:hover:before, .slick-dots li button:focus:before {
  opacity: 1;
}
.slick-dots li button:before {
  position: absolute;
  top: 0;
  left: 0;
  content: "•";
  width: 20px;
  height: 20px;
  font-family: "slick";
  font-size: 6px;
  line-height: 20px;
  text-align: center;
  color: black;
  opacity: 0.25;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before {
  color: black;
  opacity: 0.75;
}

.slider-container {
  overflow: hidden;
}

.slick-slide:nth-of-child(n+1) {
  display: none;
}

.slick-initialized,
.slick-slide:first-child {
  display: block;
}

@font-face {
  font-family: "Slick";
  src: url("./wp-content/themes/genesis-child/fonts/slick.eot");
  src: local("Slick"), url("./wp-content/themes/genesis-child/fonts/slick.eot?#iefix") format("embedded-opentype"), url("./wp-content/themes/genesis-child/fonts/slick.woff") format("woff"), url("./wp-content/themes/genesis-child/fonts/slick.ttf") format("truetype"), url("./wp-content/themes/genesis-child/fonts/slick.svg#slick") format("svg");
  font-weight: 500;
  font-style: normal;
  font-display: swap;
}
html {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  font-family: sans-serif;
  font-size: 62.5%;
  margin-top: 0 !important;
  margin-right: 0 !important;
  overflow-y: initial;
  overflow-x: hidden;
}
html.noscroll {
  overflow-y: hidden !important;
}

body {
  position: relative;
  padding: 0;
  width: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  text-rendering: optimizeLegibility;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -webkit-font-smoothing: subpixel-antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin: 0;
  font-family: "arial", sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.45;
  color: #000000;
}
@media only screen and (min-width: 325px) and (max-width: 768px) {
  body {
    font-size: calc(100vw * 14 / 325);
  }
}
@media only screen and (min-width: 992px) {
  body {
    font-size: calc(100vw * 14 / 1335);
  }
}
@media only screen and (min-width: 2560px) {
  body {
    font-size: 14px;
  }
}
body.noscroll {
  overflow-y: hidden !important;
}
body .sr-only {
  position: absolute;
}
body #wpadminbar {
  display: none;
}
@media only screen and (min-width: 1170px) {
  body #wpadminbar {
    display: block;
  }
}
body #wpadminbar .ab-sub-wrapper {
  top: 100%;
}
body .site-overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100vw;
  height: 100vh;
  z-index: 1400;
  background: #ffffff;
  display: none;
}
@media only screen and (min-width: 992px) {
  body .site-overlay {
    display: block;
  }
}

::-webkit-scrollbar {
  width: 7px;
  background-color: #efefef;
}

::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background-color: #999;
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.22);
}

/* Blocks
---------------------------------------------------------------------------------------------------- */
/* Typographical Elements
--------------------------------------------- */
.editor-styles-wrapper .block-editor-block-list__layout,
body.frontend {
  font-family: "arial", sans-serif;
  /* Blockquote
  --------------------------------------------- */
  /* Pull Quote
  --------------------------------------------- */
  /* Separator
  --------------------------------------------- */
  /* Button 
  --------------------------------------------- */
  /* Image
  --------------------------------------------- */
  /* Tables
  --------------------------------------------- */
  /* Media And Text
  --------------------------------------------- */
  /* Color Options
  --------------------------------------------- */
  /* Group Block
  --------------------------------------------- */
}
.editor-styles-wrapper .block-editor-block-list__layout .container,
.editor-styles-wrapper .block-editor-block-list__layout .container-fluid,
.editor-styles-wrapper .block-editor-block-list__layout .container-sm,
.editor-styles-wrapper .block-editor-block-list__layout .container-md,
.editor-styles-wrapper .block-editor-block-list__layout .container-lg,
.editor-styles-wrapper .block-editor-block-list__layout .container-xl,
.editor-styles-wrapper .block-editor-block-list__layout .container-xxl,
body.frontend .container,
body.frontend .container-fluid,
body.frontend .container-sm,
body.frontend .container-md,
body.frontend .container-lg,
body.frontend .container-xl,
body.frontend .container-xxl {
  margin: 0 auto;
}
.editor-styles-wrapper .block-editor-block-list__layout .container.alignfull, .editor-styles-wrapper .block-editor-block-list__layout .container.alignwide,
.editor-styles-wrapper .block-editor-block-list__layout .container-fluid.alignfull,
.editor-styles-wrapper .block-editor-block-list__layout .alignfull.container-sm,
.editor-styles-wrapper .block-editor-block-list__layout .alignfull.container-md,
.editor-styles-wrapper .block-editor-block-list__layout .alignfull.container-lg,
.editor-styles-wrapper .block-editor-block-list__layout .alignfull.container-xl,
.editor-styles-wrapper .block-editor-block-list__layout .alignfull.container-xxl,
.editor-styles-wrapper .block-editor-block-list__layout .container-fluid.alignwide,
.editor-styles-wrapper .block-editor-block-list__layout .alignwide.container-sm,
.editor-styles-wrapper .block-editor-block-list__layout .alignwide.container-md,
.editor-styles-wrapper .block-editor-block-list__layout .alignwide.container-lg,
.editor-styles-wrapper .block-editor-block-list__layout .alignwide.container-xl,
.editor-styles-wrapper .block-editor-block-list__layout .alignwide.container-xxl,
body.frontend .container.alignfull,
body.frontend .container.alignwide,
body.frontend .container-fluid.alignfull,
body.frontend .alignfull.container-sm,
body.frontend .alignfull.container-md,
body.frontend .alignfull.container-lg,
body.frontend .alignfull.container-xl,
body.frontend .alignfull.container-xxl,
body.frontend .container-fluid.alignwide,
body.frontend .alignwide.container-sm,
body.frontend .alignwide.container-md,
body.frontend .alignwide.container-lg,
body.frontend .alignwide.container-xl,
body.frontend .alignwide.container-xxl {
  max-width: 100%;
}
.editor-styles-wrapper .block-editor-block-list__layout a,
.editor-styles-wrapper .block-editor-block-list__layout link,
body.frontend a,
body.frontend link {
  color: #000000;
  transition: all 0.4s ease;
}
.editor-styles-wrapper .block-editor-block-list__layout a,
body.frontend a {
  text-decoration: none;
}
.editor-styles-wrapper .block-editor-block-list__layout a:hover, .editor-styles-wrapper .block-editor-block-list__layout a:focus,
body.frontend a:hover,
body.frontend a:focus {
  text-decoration: none;
  color: #285078;
}
.editor-styles-wrapper .block-editor-block-list__layout strong,
body.frontend strong {
  font-weight: 700;
}
.editor-styles-wrapper .block-editor-block-list__layout ol,
.editor-styles-wrapper .block-editor-block-list__layout ul,
body.frontend ol,
body.frontend ul {
  padding: 0;
  margin: 0;
}
.editor-styles-wrapper .block-editor-block-list__layout ol li,
.editor-styles-wrapper .block-editor-block-list__layout ul li,
body.frontend ol li,
body.frontend ul li {
  margin-bottom: 5px;
}
.editor-styles-wrapper .block-editor-block-list__layout ul,
body.frontend ul {
  list-style-type: none;
}
.editor-styles-wrapper .block-editor-block-list__layout ul li,
body.frontend ul li {
  display: flex;
}
.editor-styles-wrapper .block-editor-block-list__layout ul li:before,
body.frontend ul li:before {
  content: "";
  margin: 0 10px 0 0;
}
.editor-styles-wrapper .block-editor-block-list__layout pre,
body.frontend pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  line-height: 18px;
  word-break: break-all;
  word-wrap: break-word;
  white-space: pre;
  white-space: pre-wrap;
}
.editor-styles-wrapper .block-editor-block-list__layout pre code,
body.frontend pre code {
  padding: 0;
  color: inherit;
  white-space: pre;
  white-space: pre-wrap;
  background-color: transparent;
  border: 0;
}
.editor-styles-wrapper .block-editor-block-list__layout cite,
body.frontend cite {
  font-style: normal;
}
.editor-styles-wrapper .block-editor-block-list__layout .clearfix::after,
body.frontend .clearfix::after {
  display: block;
  clear: both;
  content: "";
}
.editor-styles-wrapper .block-editor-block-list__layout h1,
.editor-styles-wrapper .block-editor-block-list__layout .h1,
.editor-styles-wrapper .block-editor-block-list__layout h2,
.editor-styles-wrapper .block-editor-block-list__layout .h2,
.editor-styles-wrapper .block-editor-block-list__layout h3,
.editor-styles-wrapper .block-editor-block-list__layout .h3,
.editor-styles-wrapper .block-editor-block-list__layout h4,
.editor-styles-wrapper .block-editor-block-list__layout .h4,
.editor-styles-wrapper .block-editor-block-list__layout h5,
.editor-styles-wrapper .block-editor-block-list__layout .h5,
.editor-styles-wrapper .block-editor-block-list__layout h6,
.editor-styles-wrapper .block-editor-block-list__layout .h6,
body.frontend h1,
body.frontend .h1,
body.frontend h2,
body.frontend .h2,
body.frontend h3,
body.frontend .h3,
body.frontend h4,
body.frontend .h4,
body.frontend h5,
body.frontend .h5,
body.frontend h6,
body.frontend .h6 {
  font-family: "arial", sans-serif;
  font-weight: bold;
  margin-bottom: 20px;
  margin-top: 0;
}
.editor-styles-wrapper .block-editor-block-list__layout h1,
.editor-styles-wrapper .block-editor-block-list__layout .h1,
body.frontend h1,
body.frontend .h1 {
  font-size: 55px;
}
@media only screen and (min-width: 325px) and (max-width: 768px) {
  .editor-styles-wrapper .block-editor-block-list__layout h1,
  .editor-styles-wrapper .block-editor-block-list__layout .h1,
  body.frontend h1,
  body.frontend .h1 {
    font-size: calc(100vw * 55 / 325);
  }
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h1,
  .editor-styles-wrapper .block-editor-block-list__layout .h1,
  body.frontend h1,
  body.frontend .h1 {
    font-size: calc(100vw * 50 / 768);
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h1,
  .editor-styles-wrapper .block-editor-block-list__layout .h1,
  body.frontend h1,
  body.frontend .h1 {
    font-size: calc(100vw * 70 / 1335);
  }
}
@media only screen and (min-width: 2560px) {
  .editor-styles-wrapper .block-editor-block-list__layout h1,
  .editor-styles-wrapper .block-editor-block-list__layout .h1,
  body.frontend h1,
  body.frontend .h1 {
    font-size: 70px;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout h2,
.editor-styles-wrapper .block-editor-block-list__layout .h2,
body.frontend h2,
body.frontend .h2 {
  font-size: 55px;
}
@media only screen and (min-width: 325px) and (max-width: 768px) {
  .editor-styles-wrapper .block-editor-block-list__layout h2,
  .editor-styles-wrapper .block-editor-block-list__layout .h2,
  body.frontend h2,
  body.frontend .h2 {
    font-size: calc(100vw * 55 / 325);
  }
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h2,
  .editor-styles-wrapper .block-editor-block-list__layout .h2,
  body.frontend h2,
  body.frontend .h2 {
    font-size: calc(100vw * 50 / 768);
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h2,
  .editor-styles-wrapper .block-editor-block-list__layout .h2,
  body.frontend h2,
  body.frontend .h2 {
    font-size: calc(100vw * 70 / 1335);
  }
}
@media only screen and (min-width: 2560px) {
  .editor-styles-wrapper .block-editor-block-list__layout h2,
  .editor-styles-wrapper .block-editor-block-list__layout .h2,
  body.frontend h2,
  body.frontend .h2 {
    font-size: 70px;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout h3,
.editor-styles-wrapper .block-editor-block-list__layout .h3,
body.frontend h3,
body.frontend .h3 {
  font-size: 55px;
}
@media only screen and (min-width: 325px) and (max-width: 768px) {
  .editor-styles-wrapper .block-editor-block-list__layout h3,
  .editor-styles-wrapper .block-editor-block-list__layout .h3,
  body.frontend h3,
  body.frontend .h3 {
    font-size: calc(100vw * 55 / 325);
  }
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h3,
  .editor-styles-wrapper .block-editor-block-list__layout .h3,
  body.frontend h3,
  body.frontend .h3 {
    font-size: calc(100vw * 50 / 768);
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h3,
  .editor-styles-wrapper .block-editor-block-list__layout .h3,
  body.frontend h3,
  body.frontend .h3 {
    font-size: calc(100vw * 70 / 1335);
  }
}
@media only screen and (min-width: 2560px) {
  .editor-styles-wrapper .block-editor-block-list__layout h3,
  .editor-styles-wrapper .block-editor-block-list__layout .h3,
  body.frontend h3,
  body.frontend .h3 {
    font-size: 70px;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout h4,
.editor-styles-wrapper .block-editor-block-list__layout .h4,
body.frontend h4,
body.frontend .h4 {
  font-size: 55px;
}
@media only screen and (min-width: 325px) and (max-width: 768px) {
  .editor-styles-wrapper .block-editor-block-list__layout h4,
  .editor-styles-wrapper .block-editor-block-list__layout .h4,
  body.frontend h4,
  body.frontend .h4 {
    font-size: calc(100vw * 55 / 325);
  }
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h4,
  .editor-styles-wrapper .block-editor-block-list__layout .h4,
  body.frontend h4,
  body.frontend .h4 {
    font-size: calc(100vw * 50 / 768);
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h4,
  .editor-styles-wrapper .block-editor-block-list__layout .h4,
  body.frontend h4,
  body.frontend .h4 {
    font-size: calc(100vw * 70 / 1335);
  }
}
@media only screen and (min-width: 2560px) {
  .editor-styles-wrapper .block-editor-block-list__layout h4,
  .editor-styles-wrapper .block-editor-block-list__layout .h4,
  body.frontend h4,
  body.frontend .h4 {
    font-size: 70px;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout h5,
.editor-styles-wrapper .block-editor-block-list__layout .h5,
body.frontend h5,
body.frontend .h5 {
  font-size: 55px;
}
@media only screen and (min-width: 325px) and (max-width: 768px) {
  .editor-styles-wrapper .block-editor-block-list__layout h5,
  .editor-styles-wrapper .block-editor-block-list__layout .h5,
  body.frontend h5,
  body.frontend .h5 {
    font-size: calc(100vw * 55 / 325);
  }
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h5,
  .editor-styles-wrapper .block-editor-block-list__layout .h5,
  body.frontend h5,
  body.frontend .h5 {
    font-size: calc(100vw * 50 / 768);
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h5,
  .editor-styles-wrapper .block-editor-block-list__layout .h5,
  body.frontend h5,
  body.frontend .h5 {
    font-size: calc(100vw * 70 / 1335);
  }
}
@media only screen and (min-width: 2560px) {
  .editor-styles-wrapper .block-editor-block-list__layout h5,
  .editor-styles-wrapper .block-editor-block-list__layout .h5,
  body.frontend h5,
  body.frontend .h5 {
    font-size: 70px;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout h6,
.editor-styles-wrapper .block-editor-block-list__layout .h6,
body.frontend h6,
body.frontend .h6 {
  font-size: 55px;
}
@media only screen and (min-width: 325px) and (max-width: 768px) {
  .editor-styles-wrapper .block-editor-block-list__layout h6,
  .editor-styles-wrapper .block-editor-block-list__layout .h6,
  body.frontend h6,
  body.frontend .h6 {
    font-size: calc(100vw * 55 / 325);
  }
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h6,
  .editor-styles-wrapper .block-editor-block-list__layout .h6,
  body.frontend h6,
  body.frontend .h6 {
    font-size: calc(100vw * 50 / 768);
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout h6,
  .editor-styles-wrapper .block-editor-block-list__layout .h6,
  body.frontend h6,
  body.frontend .h6 {
    font-size: calc(100vw * 70 / 1335);
  }
}
@media only screen and (min-width: 2560px) {
  .editor-styles-wrapper .block-editor-block-list__layout h6,
  .editor-styles-wrapper .block-editor-block-list__layout .h6,
  body.frontend h6,
  body.frontend .h6 {
    font-size: 70px;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout p,
.editor-styles-wrapper .block-editor-block-list__layout .p,
body.frontend p,
body.frontend .p {
  margin-top: 0;
  margin-bottom: 0;
}
.editor-styles-wrapper .block-editor-block-list__layout p + p, .editor-styles-wrapper .block-editor-block-list__layout p + .p,
.editor-styles-wrapper .block-editor-block-list__layout .p + p,
.editor-styles-wrapper .block-editor-block-list__layout .p + .p,
body.frontend p + p,
body.frontend p + .p,
body.frontend .p + p,
body.frontend .p + .p {
  margin-top: 15px;
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout br,
  body.frontend br {
    display: block;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout.tab-pressed :focus,
body.frontend.tab-pressed :focus {
  outline: 2px dashed #000000;
}
.editor-styles-wrapper .block-editor-block-list__layout blockquote,
.editor-styles-wrapper .block-editor-block-list__layout blockquote.wp-block-quote,
body.frontend blockquote,
body.frontend blockquote.wp-block-quote {
  background: transparent;
  text-align: left;
}
.editor-styles-wrapper .block-editor-block-list__layout blockquote p,
.editor-styles-wrapper .block-editor-block-list__layout blockquote.wp-block-quote p,
body.frontend blockquote p,
body.frontend blockquote.wp-block-quote p {
  color: #285078;
  font-size: 24px;
  font-style: normal;
  font-weight: 400;
}
.editor-styles-wrapper .block-editor-block-list__layout blockquote cite,
.editor-styles-wrapper .block-editor-block-list__layout blockquote .wp-block-quote__citation,
.editor-styles-wrapper .block-editor-block-list__layout blockquote.wp-block-quote cite,
.editor-styles-wrapper .block-editor-block-list__layout blockquote.wp-block-quote .wp-block-quote__citation,
body.frontend blockquote cite,
body.frontend blockquote .wp-block-quote__citation,
body.frontend blockquote.wp-block-quote cite,
body.frontend blockquote.wp-block-quote .wp-block-quote__citation {
  color: #285078;
  display: block;
  font-size: 18px;
  font-weight: 700;
  margin-top: 12px;
  text-transform: uppercase;
}
.editor-styles-wrapper .block-editor-block-list__layout blockquote p:last-of-type,
.editor-styles-wrapper .block-editor-block-list__layout blockquote.wp-block-quote p:last-of-type,
body.frontend blockquote p:last-of-type,
body.frontend blockquote.wp-block-quote p:last-of-type {
  margin-bottom: 0;
}
.editor-styles-wrapper .block-editor-block-list__layout blockquote.is-large, .editor-styles-wrapper .block-editor-block-list__layout blockquote.is-style-large,
.editor-styles-wrapper .block-editor-block-list__layout blockquote.wp-block-quote.is-large,
.editor-styles-wrapper .block-editor-block-list__layout blockquote.wp-block-quote.is-style-large,
body.frontend blockquote.is-large,
body.frontend blockquote.is-style-large,
body.frontend blockquote.wp-block-quote.is-large,
body.frontend blockquote.wp-block-quote.is-style-large {
  margin: 20px auto;
}
.editor-styles-wrapper .block-editor-block-list__layout blockquote.is-large cite, .editor-styles-wrapper .block-editor-block-list__layout blockquote.is-style-large cite,
.editor-styles-wrapper .block-editor-block-list__layout blockquote.wp-block-quote.is-large cite,
.editor-styles-wrapper .block-editor-block-list__layout blockquote.wp-block-quote.is-style-large cite,
body.frontend blockquote.is-large cite,
body.frontend blockquote.is-style-large cite,
body.frontend blockquote.wp-block-quote.is-large cite,
body.frontend blockquote.wp-block-quote.is-style-large cite {
  text-align: left;
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-pullquote,
body.frontend .wp-block-pullquote {
  border: none;
  padding: 0;
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-pullquote blockquote,
body.frontend .wp-block-pullquote blockquote {
  border-left: 0;
  border-top: 8px solid #285078;
  border-bottom: 8px solid #285078;
  padding: 16px 0;
  text-align: center;
  max-width: 50%;
  margin: 0 auto;
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-pullquote.alignleft blockquote, .editor-styles-wrapper .block-editor-block-list__layout .wp-block-pullquote.alignright blockquote,
body.frontend .wp-block-pullquote.alignleft blockquote,
body.frontend .wp-block-pullquote.alignright blockquote {
  max-width: 100%;
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-separator,
.editor-styles-wrapper .block-editor-block-list__layout hr,
body.frontend .wp-block-separator,
body.frontend hr {
  background: transparent;
  border: none;
  width: 100%;
  height: 32px;
  position: relative;
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-separator::before,
.editor-styles-wrapper .block-editor-block-list__layout hr::before,
body.frontend .wp-block-separator::before,
body.frontend hr::before {
  background: #000000;
  content: "";
  display: block;
  width: 100%;
  height: 1px;
  position: absolute;
  top: 50%;
  margin-top: -0.5px;
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-button a,
body.frontend .wp-block-button a {
  font-size: 16px;
}
.editor-styles-wrapper .block-editor-block-list__layout img,
body.frontend img {
  display: block;
  max-width: 100%;
  height: auto;
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-image figcaption,
body.frontend .wp-block-image figcaption {
  text-align: left;
  font-size: 14px;
  font-style: normal;
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-table,
body.frontend .wp-block-table {
  border-collapse: collapse;
  width: 100%;
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-table td,
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-table th,
body.frontend .wp-block-table td,
body.frontend .wp-block-table th {
  padding: 0.5em;
  border: 1px solid;
}
@media only screen and (max-width: 575px) {
  .editor-styles-wrapper .block-editor-block-list__layout .wp-block-media-text.is-stacked-on-mobile,
  body.frontend .wp-block-media-text.is-stacked-on-mobile {
    grid-template-columns: 1fr;
    grid-template-areas: "media-text-media" "media-text-content" !important;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .has-white-color,
body.frontend .has-white-color {
  color: #ffffff !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-white-background-color,
body.frontend .has-white-background-color {
  background-color: #ffffff !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-black-color,
body.frontend .has-black-color {
  color: #000000 !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-black-background-color,
body.frontend .has-black-background-color {
  background-color: #000000 !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-red-color,
body.frontend .has-red-color {
  color: #D21502 !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-red-background-color,
body.frontend .has-red-background-color {
  background-color: #D21502 !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-brown-color,
body.frontend .has-brown-color {
  color: #30151A !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-brown-background-color,
body.frontend .has-brown-background-color {
  background-color: #30151A !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-dark-color,
body.frontend .has-dark-color {
  color: #142230 !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-dark-background-color,
body.frontend .has-dark-background-color {
  background-color: #142230 !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-orange-color,
body.frontend .has-orange-color {
  color: #f59a2b !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-orange-background-color,
body.frontend .has-orange-background-color {
  background-color: #f59a2b !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-blue-color,
body.frontend .has-blue-color {
  color: #285078 !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .has-blue-background-color,
body.frontend .has-blue-background-color {
  background-color: #285078 !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-group,
body.frontend .wp-block-group {
  margin: 0 auto !important;
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
}
@media only screen and (min-width: 576px) {
  .editor-styles-wrapper .block-editor-block-list__layout .wp-block-group:not(.alignfull),
  body.frontend .wp-block-group:not(.alignfull) {
    max-width: 540px;
  }
}
@media only screen and (min-width: 768px) {
  .editor-styles-wrapper .block-editor-block-list__layout .wp-block-group:not(.alignfull),
  body.frontend .wp-block-group:not(.alignfull) {
    max-width: 720px;
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .wp-block-group:not(.alignfull),
  body.frontend .wp-block-group:not(.alignfull) {
    max-width: 960px;
  }
}
@media only screen and (min-width: 1200px) {
  .editor-styles-wrapper .block-editor-block-list__layout .wp-block-group:not(.alignfull),
  body.frontend .wp-block-group:not(.alignfull) {
    max-width: 1140px;
  }
}
@media only screen and (min-width: 1400px) {
  .editor-styles-wrapper .block-editor-block-list__layout .wp-block-group:not(.alignfull),
  body.frontend .wp-block-group:not(.alignfull) {
    max-width: 1320px;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-group .alignfull .wp-block-group__inner-container .alignfull,
body.frontend .wp-block-group .alignfull .wp-block-group__inner-container .alignfull {
  margin-left: -15px;
  margin-right: -15px;
  max-width: 100vw;
}
.editor-styles-wrapper .block-editor-block-list__layout .wp-block-group .alignfull .wp-block-group__inner-container .alignwide,
body.frontend .wp-block-group .alignfull .wp-block-group__inner-container .alignwide {
  width: auto;
}
@media only screen and (min-width: 1200px) {
  .editor-styles-wrapper .block-editor-block-list__layout .wp-block-group .alignfull .wp-block-group__inner-container .alignwide,
  body.frontend .wp-block-group .alignfull .wp-block-group__inner-container .alignwide {
    margin-left: 0;
    margin-right: 0;
    max-width: 100%;
  }
}

@media print {
  *:before, *:after {
    background: transparent !important;
    color: #000 !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="#"]:after,
  a[href^="javascript:"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  .h2,
  h3,
  .h3 {
    orphans: 3;
    widows: 3;
  }
  h2, .h2,
  h3,
  .h3 {
    page-break-after: avoid;
  }
}
@keyframes rotate {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes move-top-bottom {
  0% {
    transform: translateY(-100%);
  }
  25% {
    transform: translateY(0%);
  }
  75% {
    transform: translateY(0%);
  }
  100% {
    transform: translateY(100%);
  }
}
@keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes fade-out {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-30px);
  }
  60% {
    transform: translateY(-15px);
  }
}
@media only screen and (min-width: 1170px) {
  .editor-styles-wrapper .block-editor-block-list__layout.admin-bar .site-header, body.frontend.admin-bar .site-header {
    top: 32px;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header, body.frontend .site-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  z-index: 1000;
  border-bottom: 1px solid rgba(202, 202, 202, 0.4);
  transition: all 0.4s ease;
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header, body.frontend .site-header {
    background: transparent;
    padding: 0;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header.headroom--top, body.frontend .site-header.headroom--top {
  background-image: linear-gradient(to top, rgba(0, 0, 0, 0.05) 0%, rgba(0, 0, 0, 0.16) 96%, rgba(0, 0, 0, 0.22) 100%);
}
@media only screen and (min-width: 320px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header.headroom--top, body.frontend .site-header.headroom--top {
    background-color: transparent;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header.headroom--top .menu-item-has-children ul li a, body.frontend .site-header.headroom--top .menu-item-has-children ul li a {
  color: #f16e30;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header.headroom--not-top, body.frontend .site-header.headroom--not-top {
  background-color: #ffffff;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header.headroom--not-top .site-header__nav li a,
.editor-styles-wrapper .block-editor-block-list__layout .site-header.headroom--not-top .menu-languages-menu-container > .menu > li > a, body.frontend .site-header.headroom--not-top .site-header__nav li a,
body.frontend .site-header.headroom--not-top .menu-languages-menu-container > .menu > li > a {
  color: #f16e30;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__inner, body.frontend .site-header__inner {
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 10px;
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__inner, body.frontend .site-header__inner {
    padding: 15px 0;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__logo, body.frontend .site-header__logo {
  width: 162px;
  height: 41px;
  flex-shrink: 0;
}
@media only screen and (min-width: 320px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__logo, body.frontend .site-header__logo {
    position: static;
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__logo, body.frontend .site-header__logo {
    position: fixed;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav, body.frontend .site-header__nav {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
}
@media only screen and (min-width: 320px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__nav, body.frontend .site-header__nav {
    width: auto;
    margin-left: 0;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .back-link, body.frontend .site-header__nav .back-link {
    display: none;
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__nav, body.frontend .site-header__nav {
    width: 100%;
    margin-left: 190px;
  }
}
@media only screen and (min-width: 1400px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__nav::before, body.frontend .site-header__nav::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 200px;
    border-left: 1px solid rgba(202, 202, 202, 0.4);
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__nav::after, body.frontend .site-header__nav::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    right: 150px;
    border-right: 1px solid rgba(202, 202, 202, 0.4);
  }
}
@media only screen and (max-width: 767px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__nav::after, body.frontend .site-header__nav::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    right: 80px;
    border-right: 1px solid rgba(202, 202, 202, 0.4);
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu-main-menu-container, body.frontend .site-header__nav .menu-main-menu-container {
  height: 100%;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu, body.frontend .site-header__nav .menu {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 2;
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu, body.frontend .site-header__nav .menu {
    position: static;
    height: 50px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    -moz-column-gap: 40px;
         column-gap: 40px;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li, body.frontend .site-header__nav .menu li {
  margin: 0 10px;
  margin-bottom: 0;
}
@media only screen and (min-width: 320px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li, body.frontend .site-header__nav .menu li {
    padding: 0;
    height: auto;
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li, body.frontend .site-header__nav .menu li {
    padding: 15px 0;
    height: 100%;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li:last-of-type, body.frontend .site-header__nav .menu li:last-of-type {
  margin-right: 0;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li:first-of-type, body.frontend .site-header__nav .menu li:first-of-type {
  margin-left: 0;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li:before, body.frontend .site-header__nav .menu li:before {
  display: none;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li a, body.frontend .site-header__nav .menu li a {
  font-family: "Roboto", sans-serif;
  color: #ffffff;
  font-weight: bold;
  text-transform: capitalize;
  white-space: nowrap;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li a:hover, body.frontend .site-header__nav .menu li a:hover {
  color: #00a1b3;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li.menu-item-has-children, body.frontend .site-header__nav .menu li.menu-item-has-children {
  position: relative;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li.menu-item-has-children:hover .sub-menu, .editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li.menu-item-has-children:focus .sub-menu, body.frontend .site-header__nav .menu li.menu-item-has-children:hover .sub-menu, body.frontend .site-header__nav .menu li.menu-item-has-children:focus .sub-menu {
  display: block;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li .sub-menu, body.frontend .site-header__nav .menu li .sub-menu {
  display: none;
  position: absolute;
  top: 100%;
  padding: 25px 15px 20px 10px;
  margin-top: 16px;
  background: #ffffff;
  border-top: 8px solid #00a1b3;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li .sub-menu::before, body.frontend .site-header__nav .menu li .sub-menu::before {
  content: "";
  display: inline-block;
  background-image: url("/wp-content/themes/acf-skeleton/dist/images/svg/menu-cone.svg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  width: 20px;
  height: 20px;
  position: absolute;
  top: -22px;
  left: 30px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li .sub-menu li, body.frontend .site-header__nav .menu li .sub-menu li {
  margin: 0 0 5px 0;
  padding: 0 10px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li.menu-item-has-children::after, body.frontend .site-header__nav .menu li.menu-item-has-children::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100px;
  cursor: pointer;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .menu li.menu-item-has-children a:hover, body.frontend .site-header__nav .menu li.menu-item-has-children a:hover {
  color: #00a1b3;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .header-actions, body.frontend .site-header__nav .header-actions {
  cursor: pointer;
  z-index: 3;
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .header-actions__open span, body.frontend .site-header__nav .header-actions__open span {
  width: 50px;
  height: 4px;
  margin: 0 0 7px 0;
  background: #fd7e14;
  display: block;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .header-actions__close, body.frontend .site-header__nav .header-actions__close {
  display: none;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav .header-actions::after, body.frontend .site-header__nav .header-actions::after {
  content: "menu";
  font-size: 20px;
  color: #fd7e14;
  margin-top: -7px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active, body.frontend .site-header__nav.active {
  width: 100%;
  margin: 0;
  justify-content: space-between;
  flex-direction: row-reverse;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-languages-menu-container, body.frontend .site-header__nav.active .menu-languages-menu-container {
  display: flex;
  gap: 20px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-languages-menu-container .menu, body.frontend .site-header__nav.active .menu-languages-menu-container .menu {
  position: static;
  display: flex !important;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-languages-menu-container .menu li a, body.frontend .site-header__nav.active .menu-languages-menu-container .menu li a {
  color: #fd7e14;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-languages-menu-container .menu li a:hover, body.frontend .site-header__nav.active .menu-languages-menu-container .menu li a:hover {
  color: #00a1b3;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-languages-menu-container::before, body.frontend .site-header__nav.active .menu-languages-menu-container::before {
  content: "Language";
  color: #000000;
  font-weight: bold;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-languages-menu-container.no-before::before, body.frontend .site-header__nav.active .menu-languages-menu-container.no-before::before {
  display: none;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-navigation-menu-container, body.frontend .site-header__nav.active .menu-navigation-menu-container {
  display: block;
  background-color: rgba(255, 255, 255, 0.981);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: -1;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-navigation-menu-container .menu, body.frontend .site-header__nav.active .menu-navigation-menu-container .menu {
  flex-direction: column;
  gap: 20px;
  margin-top: 100px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-navigation-menu-container .menu li, body.frontend .site-header__nav.active .menu-navigation-menu-container .menu li {
  margin: 0;
  margin-left: 45px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-navigation-menu-container .menu li a, body.frontend .site-header__nav.active .menu-navigation-menu-container .menu li a {
  color: #fd7e14;
  font-size: 30px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-navigation-menu-container .menu li a:hover, body.frontend .site-header__nav.active .menu-navigation-menu-container .menu li a:hover {
  color: #285078;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-navigation-menu-container .menu li a > .arrow, body.frontend .site-header__nav.active .menu-navigation-menu-container .menu li a > .arrow {
  display: inline-block;
  background-image: url("/wp-content/themes/acf-skeleton/dist/images/svg/Arrow-orange.svg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  width: 21px;
  height: 15px;
  margin: 4px 4px 4px 10px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-navigation-menu-container .menu li .sub-menu, body.frontend .site-header__nav.active .menu-navigation-menu-container .menu li .sub-menu {
  background-color: #ffffff;
  margin-top: 100px;
  border: none;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  z-index: 1;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-navigation-menu-container .menu li .sub-menu::before, body.frontend .site-header__nav.active .menu-navigation-menu-container .menu li .sub-menu::before {
  display: none;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-navigation-menu-container .menu li .sub-menu li, body.frontend .site-header__nav.active .menu-navigation-menu-container .menu li .sub-menu li {
  margin: 10px 20px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .menu-navigation-menu-container .menu li.menu-item-has-children::after, body.frontend .site-header__nav.active .menu-navigation-menu-container .menu li.menu-item-has-children::after {
  display: none;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .mobile-footer-menu-container, body.frontend .site-header__nav.active .mobile-footer-menu-container {
  position: absolute;
  left: 0;
  top: 650px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .mobile-footer-menu-container ul, body.frontend .site-header__nav.active .mobile-footer-menu-container ul {
  margin-left: 45px;
  display: flex;
  flex-direction: column;
  gap: 20px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .mobile-footer-menu-container ul li a, body.frontend .site-header__nav.active .mobile-footer-menu-container ul li a {
  color: #fd7e14;
  font-size: 20px;
  font-weight: bold;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .header-actions__open, body.frontend .site-header__nav.active .header-actions__open {
  display: none;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .header-actions__close, body.frontend .site-header__nav.active .header-actions__close {
  display: block;
  color: #fd7e14;
  width: 25px;
  transform: scale(2.5);
  padding-bottom: 4px;
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header__nav.active .header-actions::after, body.frontend .site-header__nav.active .header-actions::after {
  content: "";
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .menu-languages-menu-container, body.frontend .site-header .menu-languages-menu-container {
    display: block;
    width: 100px;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .menu-languages-menu-container .menu, body.frontend .site-header .menu-languages-menu-container .menu {
    flex-direction: column;
    align-items: unset;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .menu-languages-menu-container .menu li, body.frontend .site-header .menu-languages-menu-container .menu li {
    margin: 0;
    padding: 0;
    padding-left: 10px;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .menu-languages-menu-container .menu li:first-of-type, body.frontend .site-header .menu-languages-menu-container .menu li:first-of-type {
    border-bottom: 1px solid rgba(202, 202, 202, 0.4);
    padding-bottom: 3px;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .menu-languages-menu-container .menu li:last-of-type, body.frontend .site-header .menu-languages-menu-container .menu li:last-of-type {
    padding-top: 3px;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .menu-languages-menu-container .menu li a, body.frontend .site-header .menu-languages-menu-container .menu li a {
    font-weight: bold;
    color: #ffffff;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .menu-languages-menu-container .menu li a:hover, body.frontend .site-header .menu-languages-menu-container .menu li a:hover {
    color: #285078;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .menu-languages-menu-container .menu li a.lang-clicked, body.frontend .site-header .menu-languages-menu-container .menu li a.lang-clicked {
    color: #000000;
    opacity: 0.25;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .menu-languages-menu-container .menu li a.lang-clicked--not-top, body.frontend .site-header .menu-languages-menu-container .menu li a.lang-clicked--not-top {
    color: #fd7e14;
    opacity: 0.25;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .site-header .mobile-footer-menu-container, body.frontend .site-header .mobile-footer-menu-container {
  display: none;
}
@media only screen and (max-width: 991px) {
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .back-link, body.frontend .site-header .back-link {
    display: none;
    position: relative;
    left: 0;
    z-index: 3;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .back-link a, body.frontend .site-header .back-link a {
    padding-left: 60px;
    color: #fd7e14;
    font-weight: bold;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .site-header .back-link a::before, body.frontend .site-header .back-link a::before {
    content: "";
    display: inline-block;
    background-image: url("/wp-content/themes/acf-skeleton/dist/images/svg/Arrow-orange.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 19px;
    height: 13px;
    position: absolute;
    top: 5px;
    left: 35px;
    transform: rotate(180deg);
  }
}

.site {
  min-height: 100vh;
}

/* Small */
@media only screen and (min-width: 576px) {
  .hide-br-sm-up br {
    display: none !important;
  }
}

@media only screen and (max-width: 575px) {
  .hide-br-sm-down br {
    display: none !important;
  }
}

/* Medium */
@media only screen and (min-width: 768px) {
  .hide-br-md-up br {
    display: none !important;
  }
}

@media only screen and (max-width: 767px) {
  .hide-br-md-down br {
    display: none !important;
  }
}

/* Large */
@media only screen and (min-width: 992px) {
  .hide-br-lg-up br {
    display: none !important;
  }
}

@media only screen and (max-width: 991px) {
  .hide-br-lg-down br {
    display: none !important;
  }
}

/* Extra Large */
@media only screen and (min-width: 1200px) {
  .hide-br-xl-up br {
    display: none !important;
  }
}

@media only screen and (max-width: 1199px) {
  .hide-br-xl-down br {
    display: none !important;
  }
}

.hide-br br {
  display: none !important;
}

.show {
  display: block;
}

.hide {
  display: none;
}

.table {
  display: table;
  width: 100%;
  height: 100%;
  margin: 0;
}

.table-cell {
  display: table-cell;
  height: 100%;
  vertical-align: middle;
}

.show-after-loaded {
  opacity: 0;
}
.images-loaded .show-after-loaded {
  transition: opacity 0.3s ease;
  opacity: 1;
}

.af {
  display: block;
}

.bf {
  display: none;
}
.bf-active .bf {
  display: block;
}

.with-shadow {
  box-shadow: 2px 2px 22px rgba(0, 0, 0, 0.22);
}

.color-primary {
  color: #000000;
}
.color-secondary {
  color: #285078;
}

.text-align-center {
  text-align: center;
}

.inview-animate--fade,
.animate--fade {
  transition: all 0.8s ease;
  opacity: 0;
}
.inview-animate--fade.inview-active,
.animate--fade.inview-active {
  opacity: 1;
}
.inview-animate--move-up,
.animate--move-up {
  transition: transform 0.8s ease, opacity 0.8s ease;
  transform: translateY(60px);
  opacity: 0;
}
@media only screen and (min-width: 992px) {
  .inview-animate--move-up,
  .animate--move-up {
    transform: translateY(90px);
  }
}
@media only screen and (min-width: 1400px) {
  .inview-animate--move-up,
  .animate--move-up {
    transform: translateY(150px);
  }
}
@media only screen and (min-width: 1920px) {
  .inview-animate--move-up,
  .animate--move-up {
    transform: translateY(180px);
  }
}
.inview-animate--move-up.inview-active,
.animate--move-up.inview-active {
  transform: translateY(0);
  opacity: 1;
}
.inview-animate--move-down,
.animate--move-down {
  transition: transform 0.8s ease, opacity 0.8s ease;
  transform: translateY(-60px);
  opacity: 0;
}
@media only screen and (min-width: 992px) {
  .inview-animate--move-down,
  .animate--move-down {
    transform: translateY(-90px);
  }
}
@media only screen and (min-width: 1400px) {
  .inview-animate--move-down,
  .animate--move-down {
    transform: translateY(-225px);
  }
}
@media only screen and (min-width: 1920px) {
  .inview-animate--move-down,
  .animate--move-down {
    transform: translateY(-180px);
  }
}
.inview-animate--move-down.inview-active,
.animate--move-down.inview-active {
  transform: translateY(0);
  opacity: 1;
}
.inview-animate--move-left,
.animate--move-left {
  transition: transform 0.8s ease, opacity 0.8s ease;
  transform: translateX(60px);
  opacity: 0;
}
@media only screen and (min-width: 992px) {
  .inview-animate--move-left,
  .animate--move-left {
    transform: translateX(90px);
  }
}
@media only screen and (min-width: 1400px) {
  .inview-animate--move-left,
  .animate--move-left {
    transform: translateX(150px);
  }
}
@media only screen and (min-width: 1920px) {
  .inview-animate--move-left,
  .animate--move-left {
    transform: translateX(180px);
  }
}
.inview-animate--move-left.inview-active,
.animate--move-left.inview-active {
  transform: translateX(0);
  opacity: 1;
}
.inview-animate--move-right,
.animate--move-right {
  transition: transform 0.8s ease, opacity 0.8s ease;
  transform: translateX(-60px);
  opacity: 0;
}
@media only screen and (min-width: 992px) {
  .inview-animate--move-right,
  .animate--move-right {
    transform: translateX(-90px);
  }
}
@media only screen and (min-width: 1400px) {
  .inview-animate--move-right,
  .animate--move-right {
    transform: translateX(-225px);
  }
}
@media only screen and (min-width: 1920px) {
  .inview-animate--move-right,
  .animate--move-right {
    transform: translateX(-180px);
  }
}
.inview-animate--move-right.inview-active,
.animate--move-right.inview-active {
  transform: translateX(0);
  opacity: 1;
}
.inview-animate--scale,
.animate--scale {
  transition: transform 80s ease 0.8s;
}
.inview-animate--scale.inview-active,
.animate--scale.inview-active {
  transform: matrix(1.2, 0, 0, 1.1, 0, 0);
}

/* Box Sizing
--------------------------------------------- */
html,
input[type=search] {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

/* Screen Reader Text
--------------------------------------------- */
.genesis-skip-link {
  display: none;
}

.screen-reader-text,
.screen-reader-text span,
.screen-reader-shortcut {
  position: absolute !important;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  width: 1px;
  border: 0;
  overflow: hidden;
}

.screen-reader-text:focus,
.screen-reader-shortcut:focus {
  clip: auto !important;
  height: auto;
  width: auto;
  display: block;
  font-size: 1em;
  font-weight: bold;
  padding: 15px 23px 14px;
  color: #333;
  background: #fff;
  z-index: 100000; /* Above WP toolbar. */
  text-decoration: none;
  box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
}

/* Sidebar Layouts
--------------------------------------------- */
@media only screen and (max-width: 767px) {
  .sidebar-primary {
    display: none;
  }
}
@media only screen and (min-width: 768px) {
  .sidebar-content .site-main,
  .content-sidebar .site-main {
    float: left;
    width: 65.7534246575%;
  }
  .sidebar-content .sidebar-primary,
  .content-sidebar .sidebar-primary {
    float: right;
    width: 28.6815068493%;
  }
  .sidebar-content .site-main {
    float: right;
  }
  .sidebar-content .sidebar-primary {
    float: left;
  }
}
.mfp-fade.mfp-container {
  padding: 0;
}
.mfp-fade.mfp-bg {
  background: transparent;
  z-index: 999999;
  opacity: 0;
  transition: all 0.15s ease-out;
}
.mfp-fade.mfp-bg.mfp-ready {
  opacity: 0.95;
}
.mfp-fade.mfp-bg.mfp-removing {
  opacity: 0;
}
.mfp-fade.mfp-wrap {
  z-index: 999999;
  overflow-y: auto;
}
.mfp-fade.mfp-wrap .mfp-content {
  opacity: 0;
  transition: all 0.15s ease-out;
}
.mfp-fade.mfp-wrap.mfp-ready .mfp-content {
  opacity: 1;
}
.mfp-fade.mfp-wrap.mfp-removing .mfp-content {
  opacity: 0;
}

.editor-styles-wrapper .block-editor-block-list__layout .hero, body.frontend .hero {
  position: relative;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero .background-slides, body.frontend .hero .background-slides {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero .background-slides .slick-list,
.editor-styles-wrapper .block-editor-block-list__layout .hero .background-slides .slick-track, body.frontend .hero .background-slides .slick-list,
body.frontend .hero .background-slides .slick-track {
  height: 100%;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero .background-slides .slide-image, body.frontend .hero .background-slides .slide-image {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__inner, body.frontend .hero__inner {
  display: flex;
  flex-direction: column-reverse;
}
@media only screen and (min-width: 768px) {
  .editor-styles-wrapper .block-editor-block-list__layout .hero__inner, body.frontend .hero__inner {
    flex-direction: row;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__inner, body.frontend .hero__inner {
  display: block;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__heading, body.frontend .hero__heading {
  width: 0%;
  padding: 150px 0px;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__heading .title, body.frontend .hero__heading .title {
  margin-bottom: 0;
  width: 611px;
  height: 195px;
  font-family: "Roboto", sans-serif;
  color: white;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__heading .small, body.frontend .hero__heading .small {
  position: relative;
  z-index: 1;
  font-family: "Roboto", sans-serif;
  width: -moz-max-content;
  width: max-content;
  color: white;
}
@media only screen and (max-width: 767px) {
  .editor-styles-wrapper .block-editor-block-list__layout .hero__heading .title, body.frontend .hero__heading .title {
    font-size: calc(44px + 0.725vw);
    font-weight: 300;
    padding: 60px 180px 0px 15px;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__heading .small, body.frontend .hero__heading .small {
    display: none;
  }
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .hero__heading .title, body.frontend .hero__heading .title {
    font-size: calc(57px + 1.725vw);
    font-weight: 400;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__heading .small, body.frontend .hero__heading .small {
    font-size: 35px;
    font-weight: 300;
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .hero__heading .title, body.frontend .hero__heading .title {
    font-size: calc(57px + 1.725vw);
    font-weight: 400;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__heading .small, body.frontend .hero__heading .small {
    font-size: 35px;
    font-weight: 300;
  }
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__box, body.frontend .hero__box {
  font-family: "Roboto", sans-serif;
  grid-template-columns: 2.6fr 1fr;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__box .left-box, body.frontend .hero__box .left-box {
  background-color: white;
  position: relative;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__box .left-box p, body.frontend .hero__box .left-box p {
  padding: 20px 20px 42px 20px;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__box .left-box .dna-image, body.frontend .hero__box .left-box .dna-image {
  position: absolute;
  right: 0;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__box .right-box, body.frontend .hero__box .right-box {
  background-color: #f16e30;
  color: white;
  position: relative;
  width: 100%;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__box .right-box:hover, body.frontend .hero__box .right-box:hover {
  background-color: #e89b77;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__box .right-box p, body.frontend .hero__box .right-box p {
  padding: 38px 17px 52px 17px;
}
.editor-styles-wrapper .block-editor-block-list__layout .hero__box .right-box p::after, body.frontend .hero__box .right-box p::after {
  content: "";
  display: inline-block;
  background-image: url("../../dist/images/svg/Arrow.svg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  width: 27px;
  height: 20px;
  position: absolute;
  bottom: 15px;
  right: 15px;
}
@media only screen and (max-width: 767px) {
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box, body.frontend .hero__box {
    width: 100%;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box .left-box p, body.frontend .hero__box .left-box p {
    font-size: calc(10px + 0.725vw);
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box .left-box .dna-image, body.frontend .hero__box .left-box .dna-image {
    width: 150px;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box .right-box p, body.frontend .hero__box .right-box p {
    font-size: calc(10px + 0.725vw);
  }
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box, body.frontend .hero__box {
    width: 100%;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box .left-box p, body.frontend .hero__box .left-box p {
    font-size: calc(10px + 0.725vw);
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box .left-box .dna-image, body.frontend .hero__box .left-box .dna-image {
    width: 200px;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box .right-box p, body.frontend .hero__box .right-box p {
    font-size: calc(10px + 0.725vw);
  }
}
@media only screen and (min-width: 992px) {
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box, body.frontend .hero__box {
    width: 56%;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box .left-box .dna-image, body.frontend .hero__box .left-box .dna-image {
    width: 215px;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box .blue-line, body.frontend .hero__box .blue-line {
    display: block;
    background-color: #00a1b3;
    width: 60%;
    height: 8px;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box .right-box:hover, body.frontend .hero__box .right-box:hover {
    background-color: #e89b77;
  }
  .editor-styles-wrapper .block-editor-block-list__layout .hero__box .right-box p, body.frontend .hero__box .right-box p {
    padding: 38px 17px 52px 17px;
  }
}

/*# sourceMappingURL=critical.css.map*/