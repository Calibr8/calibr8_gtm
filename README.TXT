
Installation
------------

Your html.tpl.php should look like this.
This is present in the latest version of the calibr8_theme. If you installed this module on an old calibr8 setup or
a site without the calibr8 themes, make sure these variables are printed.

<head>
  ...
  <title>
  <link>
  <script></script>
  {{ gtm_datalayer }}
  {{ gtm_head }}
  ...
</head>
<body>
  {{ gtm_body }}
  ...
</body>