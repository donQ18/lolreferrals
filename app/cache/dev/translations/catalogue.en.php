<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'The fields {{ fields }} were not expected.' => 'The fields {{ fields }} were not expected.',
    'The fields {{ fields }} are missing.' => 'The fields {{ fields }} are missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user current password.' => 'This value should be the user current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'LexikFormFilterBundle' => 
  array (
    'boolean.yes_or_no' => 'Yes or No',
    'boolean.yes' => 'Yes',
    'boolean.no' => 'No',
  ),
  'JordiLlonchCrudGeneratorBundle' => 
  array (
    'views.layout.bannersadmin' => 'Administrator',
    'views.index.filters' => 'Filters',
    'views.index.filter' => 'Filter',
    'views.index.reset' => 'Reset',
    'views.index.list' => '%entity% list',
    'views.index.actions' => 'Actions',
    'views.index.createnew' => 'Create a new',
    'views.index.pagprev' => '&larr; Previous',
    'views.index.pagnext' => 'Next &rarr;',
    'views.actions.show' => 'show',
    'views.actions.edit' => 'edit',
    'views.recordactions.backtothelist' => 'Back to the list',
    'views.recordactions.edit' => 'Edit',
    'views.recordactions.delete' => 'Delete',
    'views.recordactions.confirm' => 'Delete the item?',
    'views.new.creation' => 'Create %entity%',
    'views.new.create' => 'Create',
    'views.edit.edit' => 'Edit %entity%',
    'views.edit.editbutton' => 'Edit',
    'views.show.show' => 'Show %entity%',
    'flash.create.success' => 'Item has been successfully created.',
    'flash.create.error' => 'An error has occurred during item creation.',
    'flash.update.success' => 'Item has been successfully updated.',
    'flash.update.error' => 'An error has occurred during item update.',
    'flash.delete.success' => 'Item has been deleted successfully.',
    'flash.delete.error' => 'An Error has occurred during item deletion.',
  ),
  'messages' => 
  array (
    'portal.menu.inicio' => 'Home',
    'portal.menu.encargar' => 'Order',
    'portal.menu.preguntas' => 'FAQ',
    'portal.menu.reputacion' => 'Feedback',
    'portal.menu.seguimiento' => 'Tracking',
    'portal.menu.contacto' => 'Contact',
    'portal.footer' => 'Copyright © 2013 LolReferrals.com. All rights reserved.',
    'inicio.metas.title' => 'Buy League of Legends referrals 2.0 | Cheap & Fast',
    'inicio.metas.description' => 'Chepest League of Legends Referral',
    'inicio.aside.titulo' => 'Statics',
    'inicio.aside.slot_1' => '~250 referrals a day.',
    'inicio.aside.slot_2' => 'Leveling referrals to level 10.',
    'inicio.aside.slot_3' => 'Cheapest prices!',
    'inicio.aside.slot_4' => 'Tracking of the order on our website!',
    'inicio.aside.slot_5' => 'Referrals are much profitable than RP!',
    'pedido.metas.title' => 'Order League of Legends Referrals 2.0',
    'pedido.metas.description' => 'Purchase your League of Legends referral bundle',
    'pedido.principal.titulo' => 'Best referral service!',
    'pedido.principal.texto' => 'We have the best league of legends referral-service in the market, fastest and with unbeatable prices. <br>When you purchase a referral bundle you\'ll receive an order ID to track the order. <br><br> Pay by paypal confidence.
',
    'pedido.principal.packs' => 'All our referrals bundles',
    'pedido.principal.footer.titulo' => 'Safe payment with Paypal',
    'pedido.aside.titulo' => 'Our clients suggest it!',
    'pedido.aside.texto' => 'All our clients are satisfied  with our service, we have a 100% positive feedback on ebay. <br>Unbeatable
',
    'faq.metas.title' => 'Frequently Asked Questions | League of legends Referrals 2.0',
    'faq.metas.description' => 'FAQ of League of Legends referral-service 2.0',
    'faq.principal.titulo' => 'Frequently Asked Questions',
    'faq.principal.slot_1_title' => 'What will I get with this?',
    'faq.principal.slot_1_texto' => 'Referral System Rewards: Riot Points, Influence Points and rare skins!',
    'faq.principal.slot_2_title' => 'How does this work?',
    'faq.principal.slot_2_texto' => 'We create the accounts you purchased using your referral link. Then we level them to 10 in a very short time.',
    'faq.principal.slot_3_title' => 'Where can I get the referral link?',
    'faq.principal.slot_3_texto' => 'You can get the referral link here(linkear en el here http://leagueoflegends.com/rewards). Of course we also need your payment.',
    'faq.principal.slot_4_title' => 'What server is it available on?',
    'faq.principal.slot_4_texto' => '<ul><li>NA</li><li>EU West</li><li>EU East & Nordic</li><li>Brazil</li><li>Turkey</li></ul>',
    'faq.principal.slot_5_title' => 'How long does it take to level the accounts?',
    'faq.principal.slot_5_texto' => '<ul><li>24 - 72 hours depending on the current queue.</li><li>We do about 200 referrals daily and we do our best to do all orders as fast as possible.</li></ul>',
    'faq.principal.slot_6_title' => 'Do you start my referrals as soon as I make a purchase?',
    'faq.principal.slot_6_texto' => 'No, It will depend on the current queue.',
    'faq.principal.slot_7_title' => 'How long does it take for my rewards to show up?',
    'faq.principal.slot_7_texto' => '24 to 48 hours depending on riot and updating the information.',
    'faq.principal.slot_8_title' => 'Will my account be banned?',
    'faq.principal.slot_8_texto' => 'No One has been banned.',
    'faq.principal.slot_9_title' => 'Why are the accounts showing up as level 1 and  nonamed?',
    'faq.principal.slot_9_texto' => 'Because they haven\'t been fully updated by riot. Perfectly normal, allow between 24 and 48 hours.',
    'faq.principal.slot_10_title' => 'Why are most of the accounts level 10 but a few a different levels?',
    'faq.principal.slot_10_texto' => 'Because they haven\'t been fully updated by riot. Perfectly normal, allow between 24 and 48 hours.',
    'faq.principal.slot_11_title' => 'Do the Patches delay the leveling process?',
    'faq.principal.slot_11_texto' => 'Yes.',
    'faq.aside.titulo' => 'After read...',
    'faq.aside.texto' => 'I still have a question, Where I can contact you?',
    'faq.aside.link' => 'En nuestra zona de contacto',
    'contacto.metas.title' => 'Contact information of www.referralslol.com',
    'contacto.metas.description' => 'Information about League of Legends referral-service',
    'contacto.enviado' => 'Message sent correctly, we will reply in a short period of time.',
    'contacto.principal.titulo' => 'Contact us',
    'contacto.principal.texto' => 'Si tienes una empresa o eres un usuario profesional, visita el Apple Online Store para Empresas o llama al 900 812 683. El horario de atención es de lunes a viernes, de 09:00 a 18:00. El Apple Online Store para Empresas ofrece una gran variedad de servicios de negocio y financiación, además de un servicio de intercambio y ventas para desarrolladores.
',
    'contacto.aside.titulo' => 'Contact us!',
    'contacto.aside.texto' => 'If you have any question Corporate Mundo will attend you',
    'seguimiento.metas.title' => 'Track your order of League of Legends referrals 2.0',
    'seguimiento.metas.description' => 'Tracking of the referral-service order.',
    'seguimiento.principal.titulo' => 'Tracking of the order',
    'seguimiento.principal.texto' => 'Fill it with the order id to see the state of your order.',
    'seguimiento.aside.titulo' => 'Title',
    'seguimiento.aside.texto' => 'Text',
    'formularios.seguimiento.seguimiento' => 'Tracking',
    'formularios.seguimiento.submit' => 'Track of the order',
    'formularios.seguimiento.estado' => 'Status',
    'formularios.seguimiento.fecha' => 'Date',
    'formularios.seguimiento.descripcion' => 'Message',
    'formularios.contacto.errors.codigo_referencia_no' => 'Order ID not exist.',
    'formularios.contacto.nombre.placeholder' => 'Write your name',
    'formularios.contacto.nombre.label' => 'Name *',
    'formularios.contacto.email.placeholder' => 'Write a valid Email',
    'formularios.contacto.email.label' => 'Email *',
    'formularios.contacto.pedido.placeholder' => 'LOL2013080301273951fce92b28529',
    'formularios.contacto.pedido.label' => 'Order ID',
    'formularios.contacto.mensaje.placeholder' => 'Write your question or issue',
    'formularios.contacto.mensaje.label' => 'Message *',
    'formularios.contacto.captcha.placeholder' => 'Captcha',
    'formularios.contacto.submit' => 'Submit Message',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'The fields {{ fields }} were not expected.' => 'No se esperaban los campos {{ fields }}.',
    'The fields {{ fields }} are missing.' => 'Faltan los campos {{ fields }}.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser null.',
    'This value should be null.' => 'Este valor debería ser null.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La anchura de la imagen es demasiado grande ({{ width }}px). La anchura máxima permitida son {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La anchura de la imagen es demasiado pequeña ({{ width }}px). La anchura mínima requerida son {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida son {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida son {{ min_height }}px.',
    'This value should be the user current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe de enviar nuevamente el formulario',
    'Bad code value' => 'El valor no coincide',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'LexikFormFilterBundle' => 
  array (
    'boolean.yes_or_no' => 'Indiferente',
    'boolean.yes' => 'Sí',
    'boolean.no' => 'No',
    'equal' => 'Igual que',
    'greater than' => 'Mayor que',
    'greater than equal' => 'Mayor o igual que',
    'lower than' => 'Menor que',
    'lower than equal' => 'Menor o igual que',
    'starts' => 'Empieza por',
    'ends' => 'Termina por',
    'equals' => 'Igual a',
    'both' => 'Contiene',
  ),
  'JordiLlonchCrudGeneratorBundle' => 
  array (
    'views.layout.bannersadmin' => 'Administrador',
    'views.index.filters' => 'Filtros',
    'views.index.filter' => 'Filtrar',
    'views.index.reset' => 'Limpiar',
    'views.index.list' => '%entity%: lista',
    'views.index.actions' => 'Acciones',
    'views.index.createnew' => 'Crear',
    'views.index.pagprev' => '&larr; Anterior',
    'views.index.pagnext' => 'Siguiente &rarr;',
    'views.actions.show' => 'ver',
    'views.actions.edit' => 'editar',
    'views.recordactions.backtothelist' => 'Volver a la lista',
    'views.recordactions.edit' => 'Editar',
    'views.recordactions.delete' => 'Eliminar',
    'views.recordactions.confirm' => 'Eliminar el elemento?',
    'views.new.creation' => 'Crear %entity%',
    'views.new.create' => 'Crear',
    'views.edit.edit' => 'Editar %entity%',
    'views.edit.editbutton' => 'Editar',
    'views.show.show' => 'Ver %entity%',
    'flash.create.success' => 'Elemento creado satisfactoriamente.',
    'flash.create.error' => 'Se ha producido un error durante la creación del elemento.',
    'flash.update.success' => 'Elemento actualizado satisfactoriamente.',
    'flash.update.error' => 'Se ha producido un error durante la actualización del elemento.',
    'flash.delete.success' => 'Elemento eliminado satisfactoriamente.',
    'flash.delete.error' => 'Se ha producido un error durante la eliminación del elemento.',
  ),
  'gregwar_captcha' => 
  array (
    'Renew' => 'Renovar',
  ),
  'messages' => 
  array (
    'portal.menu.inicio' => 'Inicio',
    'portal.menu.encargar' => 'Encargar',
    'portal.menu.preguntas' => 'Preguntas',
    'portal.menu.reputacion' => 'Reputacion',
    'portal.menu.seguimiento' => 'Seguimiento',
    'portal.menu.contacto' => 'Contacto',
    'portal.footer' => 'LolReferrals.com tu web para ganar puntos del lol',
    'inicio.metas.title' => 'inicio',
    'inicio.metas.description' => 'description',
    'inicio.aside.titulo' => 'Realiza tu pedido',
    'inicio.aside.slot_1' => '~250 referrals al dia',
    'inicio.aside.slot_2' => 'Referrals hasta nivel 10',
    'inicio.aside.slot_3' => 'Precios baratos',
    'inicio.aside.slot_4' => 'Seguimiento del pedido',
    'inicio.aside.slot_5' => 'Referrals es mas rentable que RP!',
    'pedido.metas.title' => 'inicio',
    'pedido.metas.description' => 'description',
    'pedido.principal.titulo' => 'El mejor servicio de referrals',
    'pedido.principal.texto' => 'Contamos con el mejor sistema de referrals del mercado muy rápidos y con precios inmejorables. <br>Cuando usted encargue el pedido dispondra de un código de seguimiento en el cual podra ver el seguimiento del mismo.<br><br> Pague mediante la confianza de paypal
',
    'pedido.principal.packs' => 'Listado de packs',
    'pedido.principal.footer.titulo' => 'Pago seguro con paypal',
    'pedido.aside.titulo' => 'Nuestros clientes lo aconsejan',
    'pedido.aside.texto' => 'Todos nuestros clientes quedan satisfechos, tenemos 100% de votos positivos en ebay. <br>Insuperable
',
    'faq.metas.title' => 'inicio',
    'faq.metas.description' => 'description',
    'faq.principal.titulo' => 'Preguntas y respuestas',
    'faq.principal.slot_1_title' => 'What will I get with this?',
    'faq.principal.slot_1_texto' => 'Referral System Rewards: Riot Points, Influence Points and rare skins!',
    'faq.principal.slot_2_title' => 'How does this work?',
    'faq.principal.slot_2_texto' => 'We create the accounts you purchased using your referral link. Then we level them to 10 in a very short time.',
    'faq.principal.slot_3_title' => 'Where can I get the referral link?',
    'faq.principal.slot_3_texto' => 'You can get the referral link here(linkear en el here http://leagueoflegends.com/rewards). Of course we also need your payment.',
    'faq.principal.slot_4_title' => 'What server is it available on?',
    'faq.principal.slot_4_texto' => '<ul><li>NA</li><li>EU West</li><li>EU East & Nordic</li><li>Brazil</li><li>Turkey</li></ul>',
    'faq.principal.slot_5_title' => 'How long does it take to level the accounts?',
    'faq.principal.slot_5_texto' => '<ul><li>24 - 72 hours depending on the current queue.</li><li>We do about 200 referrals daily and we do our best to do all orders as fast as possible.</li></ul>',
    'faq.principal.slot_6_title' => 'Do you start my referrals as soon as I make a purchase?',
    'faq.principal.slot_6_texto' => 'No, It will depend on the current queue.',
    'faq.principal.slot_7_title' => 'How long does it take for my rewards to show up?',
    'faq.principal.slot_7_texto' => '24 to 48 hours depending on riot and updating the information.',
    'faq.principal.slot_8_title' => 'Will my account be banned?',
    'faq.principal.slot_8_texto' => 'No One has been banned.',
    'faq.principal.slot_9_title' => 'Why are the accounts showing up as level 1 and  nonamed?',
    'faq.principal.slot_9_texto' => 'Because they haven\'t been fully updated by riot. Perfectly normal, allow between 24 and 48 hours.',
    'faq.principal.slot_10_title' => 'Why are most of the accounts level 10 but a few a different levels?',
    'faq.principal.slot_10_texto' => 'Because they haven\'t been fully updated by riot. Perfectly normal, allow between 24 and 48 hours.',
    'faq.principal.slot_11_title' => 'Do the Patches delay the leveling process?',
    'faq.principal.slot_11_texto' => 'Yes.',
    'faq.aside.titulo' => 'Despues de leer.',
    'faq.aside.texto' => '¿Sigues teniendo preguntas? contacta con nosotros,',
    'faq.aside.link' => 'en nuestra zona de contacto',
    'contacto.metas.title' => 'inicio',
    'contacto.metas.description' => 'description',
    'contacto.enviado' => 'Mensaje enviado correctamente, en un breve periodo le contestaremos.',
    'contacto.principal.titulo' => 'Contacta con nosotros',
    'contacto.principal.texto' => 'Si tienes una empresa o eres un usuario profesional, visita el Apple Online Store para Empresas o llama al 900 812 683. El horario de atención es de lunes a viernes, de 09:00 a 18:00. El Apple Online Store para Empresas ofrece una gran variedad de servicios de negocio y financiación, además de un servicio de intercambio y ventas para desarrolladores.
',
    'contacto.aside.titulo' => 'Contacta con nosotros',
    'contacto.aside.texto' => 'Para cualquier duda que tengas te atendera "nuestra mejor empleada" Mundo Ejecutivo.',
    'seguimiento.metas.title' => 'inicio',
    'seguimiento.metas.description' => 'description',
    'seguimiento.principal.titulo' => 'Seguimiento de los pedidos',
    'seguimiento.principal.texto' => 'Escribiendo el id del pedido podra ver como va el estado de su pedido
',
    'seguimiento.aside.titulo' => 'Titulo',
    'seguimiento.aside.texto' => 'Texto',
    'formularios.seguimiento.seguimiento' => 'Seguimiento',
    'formularios.seguimiento.submit' => 'Seguimiento del pedido',
    'formularios.seguimiento.estado' => 'Estado',
    'formularios.seguimiento.fecha' => 'Fecha',
    'formularios.seguimiento.descripcion' => 'Mensaje',
    'formularios.contacto.errors.codigo_referencia_no' => 'El Código de referencia no existe',
    'formularios.contacto.nombre.placeholder' => 'Escribe tu nombre',
    'formularios.contacto.nombre.label' => 'Nombre *',
    'formularios.contacto.email.placeholder' => 'Escribe un email valido',
    'formularios.contacto.email.label' => 'Email *',
    'formularios.contacto.pedido.placeholder' => 'LOL2013080301273951fce92b28529',
    'formularios.contacto.pedido.label' => 'Código de referencia',
    'formularios.contacto.mensaje.placeholder' => 'Escribe tu pregunta o problema',
    'formularios.contacto.mensaje.label' => 'Mensaje *',
    'formularios.contacto.captcha.placeholder' => 'Código de seguridad',
    'formularios.contacto.submit' => 'Enviar Mensaje',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);


return $catalogue;
