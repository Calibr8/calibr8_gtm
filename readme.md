**Example on how to use**

*Je moet de html.html.twig aanpassen.*

Belangrijk is hier:
 - gtm_body moet al eerste in de body geprint worden.
 - gtm_datalayer + gtm_head moeten onder de titel tag staan.

Voorbeeld:

<!DOCTYPE html>
 <html{{ html_attributes }}>
   <head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <head-placeholder token="{{ placeholder_token|raw }}">
     <title>{{ head_title|safe_join(' | ') }}</title>
       {{ gtm_datalayer }}
       {{ gtm_head }}
    
        ...
   
   </head>
   <body{{ attributes.addClass(body_classes) }}>
     {{ gtm_body }}
     ...
    
   </body>
 </html>
