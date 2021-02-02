<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Avanzado',
    'DEFAULT_CURRENCY_ISO4217' => 'Código de divisa ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Nombre de la divisa',
    'DEFAULT_CURRENCY_SYMBOL' => 'Símbolo de divisa',
    'DEFAULT_DATE_FORMAT' => 'Formato de fecha predeterminado',
    'DEFAULT_DECIMAL_SEP' => 'Símbolo decimal',
    'DEFAULT_LANGUAGE' => 'Idioma predeterminado',
    'DEFAULT_SYSTEM_SETTINGS' => 'Interfaz de usuario',
    'DEFAULT_THEME' => 'Tema predeterminado',
    'DEFAULT_TIME_FORMAT' => 'Formato de hora predeterminado',
    'DISPLAY_RESPONSE_TIME' => 'Mostrar los tiempos de respuesta del servidor',
    'IMAGES' => 'Logotipo',
    'LBL_ALLOW_USER_TABS' => 'Permitir a usuarios ocultar pestañas',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Configuración del sistema',
    'LBL_LOGVIEW' => 'Ver registro',
    'LBL_MAIL_SMTPAUTH_REQ' => '¿Usar autenticación SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Contraseña SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Puerto SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Usuario SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificación del servidor SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Elija su proveedor de e-Mail:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Contraseña de Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID de Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Contraseña Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Dirección de Email de Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Contraseña de Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Nombre de usuario Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Puerto del servidor Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Permitir a los usuarios emplear esta cuenta para enviar e-Mails:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Cuando esta opción esta seleccionada, todos los usuarios serán capaz de enviar e-Mails usando la misma cuenta de e-Mail saliente usada para enviar notificaciones y alertas del sistema.  Si la opción no está seleccionada, los usuarios podrán usar el servidor de e-Mail saliente después de proveer la información de su propia cuenta',
    'LBL_MAILMERGE' => 'Combinar correspondencia',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalo mínimo de auto actualizado del Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Este es el valor del intervalo mínimo que se puede elegir para tener auto actualizado el Dashlet. Configurado a \'Nunca\' deshabilita el auto actualizado de los dashlets',
    'LBL_MODULE_FAVICON' => 'Mostrar el icono del módulo como un favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Si está visitando un módulo con icono, utilize el icono del módulo como favicon, en lugar del favicon del tema, en la pestaña del navegador',
    'LBL_MODULE_NAME' => 'Configuración del sistema',
    'LBL_MODULE_ID' => 'Configurador',
    'LBL_MODULE_TITLE' => 'Interfaz de usuario',
    'LBL_NOTIFY_FROMADDRESS' => 'Dirección "De":',
    'LBL_NOTIFY_SUBJECT' => 'Asunto de e-Mail:',
    'LBL_PROXY_AUTH' => '¿Autenticación?',
    'LBL_PROXY_HOST' => 'Servidor proxy',
    'LBL_PROXY_ON_DESC' => 'Configura la dirección del servidor proxy y la configuración de la autenticación',
    'LBL_PROXY_ON' => '¿Utilizar servidor proxy?',
    'LBL_PROXY_PASSWORD' => 'Contraseña',
    'LBL_PROXY_PORT' => 'Puerto',
    'LBL_PROXY_TITLE' => 'Configuración del proxy',
    'LBL_PROXY_USERNAME' => 'Nombre de usuario',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restaurar',
    'LBL_SYSTEM_SETTINGS' => 'Configuración del sistema',
    'LBL_SKYPEOUT_ON_DESC' => 'Permite a los usuarios hacer click en los números de teléfono para realizar llamadas utilizando SkypeOut&reg;. Los números deben de estar formateados debidamente para utilizar esta funcionalidad. El número debe tener el formato: "+"  "Código País" "Número", como +34 965 555 555.',
    'LBL_SKYPEOUT_ON' => 'Habilitar Click para llamar',
    'LBL_SKYPEOUT_TITLE' => 'Click para llamar',
    'LBL_USE_REAL_NAMES' => 'Mostrar nombres completos',
    'LBL_USE_REAL_NAMES_DESC' => 'Mostrar el nombre completo de los usuarios en lugar de sus nombres de usuario en los campos de asignación',
    'LBL_DISALBE_CONVERT_LEAD' => 'Desactivar acción de convertir objetivo en proespecto',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Si un objetivo ya fue convertido, activar esta opción removera la acción de convertir a prospecto.',
    'LBL_ENABLE_ACTION_MENU' => 'Mostrar acciones dentro de los menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Seleccione para visualizar las acciones DetailView y subpanel dentro de un menú desplegable. Si no se selecciona, las acciones se mostrarán como botones separados.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Activar edición rápida en el listado',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Elige para activar la edición rápida en los campos de la lista. Si no hay campos seleccionados, será desactivado en el listado.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Activar edición rápida en la vista detallada',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Elige para activar la edición rápida en los campos de la vista detallada. Si no hay campos seleccionados, será desactivado en la vista detallada.',
    'LBL_HIDE_SUBPANELS' => 'Subpaneles colapsados',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Elementos por página para listas',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Elementos por página para subpaneles',
    'LOG_MEMORY_USAGE' => 'Registrar utilización de memoria',
    'LOG_SLOW_QUERIES' => 'Registrar consultas lentas',
    'CURRENT_LOGO' => 'Logo actual:',
    'CURRENT_LOGO_HELP' => 'Este logo se muestra en la esquina superior izquierda de la aplicación SuiteCRM.',
    'NEW_LOGO' => 'Seleccionar nuevo logo:',
    'NEW_LOGO_HELP' => 'El formato del archivo de imagen puede ser tanto .png como .jpg. La altura máxima es 170px, y la anchura máxima es 450px. Cualquier imagen cargada que se sobrepase en alguna de las medidas será modificada al tamaño indicado, según la medida que exceda.',
    'NEW_LOGO_HELP_NO_SPACE' => 'El formato del archivo de imagen puede ser tanto .png como .jpg. La altura máxima es 170px, y la anchura máxima es 450px. Cualquier imagen cargada que se sobrepase en alguna de las medidas será modificada al tamaño indicado, según la medida que exceda. El nombre del archivo de imagen no puede contener un carácter espacio.',
    'SLOW_QUERY_TIME_MSEC' => 'Tiempo umbral para consultas lentas (ms)',
    'STACK_TRACE_ERRORS' => 'Mostrar la pila del rastreo de errores',
    'UPLOAD_MAX_SIZE' => 'Tamaño máximo para la subida de archivos',
    'VERIFY_CLIENT_IP' => 'Validar dirección IP del usuario',
    'LOCK_HOMEPAGE' => 'No permitir el diseño personalizado de la página de inicio',
    'LOCK_SUBPANELS' => 'No permitir el diseño personalizado de subpaneles',
    'MAX_DASHLETS' => 'Número máximo de dashlets en la página de inicio de SuiteCRM',
    'SYSTEM_NAME' => 'Nombre del sistema:',
    'SYSTEM_NAME_WIZARD' => 'Nombre:',
    'SYSTEM_NAME_HELP' => 'Este es el nombre que se muestra en la barra de título de su navegador',
    'LBL_LDAP_TITLE' => 'Soporte de autenticación LDAP',
    'LBL_LDAP_ENABLE' => 'Habilitar LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Servidor:',
    'LBL_LDAP_SERVER_PORT' => 'Numéro de puerto:',
    'LBL_LDAP_ADMIN_USER' => 'Nombre de usuario:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Usado para buscar el usuario LDAP, Lightweight Directory Access Protocol. Necesita estar plenamente calificado.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Contraseña:',
    'LBL_LDAP_AUTHENTICATION' => 'Autenticación:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Enlace al servidor LDAP utilizando credenciales de usuarios específicos. Se unirá de forma anónima si no se proporciona.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Crear usuarios automáticamente:',
    'LBL_LDAP_USER_DN' => 'DN de usuario:',
    'LBL_LDAP_GROUP_DN' => 'DN de grupo:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Ejemplo: <em>ou=grupos,dc=ejemplo,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Filtro de Usuarios:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Pertenencia a grupos:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Los usuarios deben de ser miembros de un grupo específico',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Atributo de usuario:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'El identificador único de una persona que será utilizado para comprobar si son miembros del grupo. Ejemplo: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'El atributo del grupo será utilizado como filtro sobre el atributo de usuario. Ejemplo: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Atributo de grupo:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Cualquier parámetro de filtro adicional para aplicar al autenticar usuarios, por ejemplo, <em> is_suitecrm_user = 1 o (is_suitecrm_user = 1) (is_sales = 1) </ em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Atributo de inicio de sesión:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Atributo de conexión (bind):',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Para ejemplos de uso de autentificación usando LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Para ejemplos de busquedas de usuarios usando LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Ejemplo: ldap.example.com o ldaps://ldap.example.com cuando se usa SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Ejemplo: 389 o 636 cuando se usa SSL',
    'LBL_LDAP_GROUP_NAME' => 'Nombre del Grupo:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Ejemplo <em> cn = suitecrm </ em>',
    'LBL_LDAP_USER_DN_DESC' => 'Ejemplo: ou=gente,dc=ejemplo,dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Si un usuario autenticado no existe, se creará uno en SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Clave de encriptación:',
    'DEVELOPER_MODE' => 'Modo desarrollador',

    'SHOW_DOWNLOADS_TAB' => 'Mostrar pestaña de descargas',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Cuando es seleccionada, la pestaña de descarga aparecerá en la configuración de Usuario y proporcionará acceso a los usuarios a los plug-ins de SuiteCRM y otros archivos disponibles',
    'LBL_LDAP_ENC_KEY_DESC' => 'Para la autenticación SOAP al usar LDAP',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'La extensión php_mcrypt debe estar habilitada en su archivo php.ini',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'La extensión openssl debe habilitarse en el archivo php.ini.',
    'LBL_ALL' => 'Todo',
    'LBL_MARK_POINT' => 'Marcar punto',
    'LBL_NEXT_' => 'Siguiente>>',
    'LBL_REFRESH_FROM_MARK' => 'Actualizar desde marca',
    'LBL_SEARCH' => 'Buscar:',
    'LBL_REG_EXP' => 'Exp. Reg.:',
    'LBL_IGNORE_SELF' => 'Ignorar datos propios:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marcando desde donde iniciar el registro',
    'LBL_DISPLAYING_LOG' => 'Mostrar registro',
    'LBL_YOUR_PROCESS_ID' => 'Su ID de proceso',
    'LBL_YOUR_IP_ADDRESS' => 'Su dirección IP es',
    'LBL_IT_WILL_BE_IGNORED' => 'Será ignorado ',
    'LBL_LOG_NOT_CHANGED' => 'El registro no ha cambiado',
    'LBL_ALERT_JPG_IMAGE' => 'El formato de archivo de la imagen debe ser JPEG.  Suba un nuevo archivo cuya extensión sea .jpg',
    'LBL_ALERT_TYPE_IMAGE' => 'El formato de archivo de la imagen debe ser JPEG o PNG.  Suba un nuevo archivo cuya extensión sea .jpg o .png',
    'LBL_ALERT_SIZE_RATIO' => 'La relación de aspecto de la imagen debería estar entre 1:1 y 10:1.  La imagen será redimensionada',
    'ERR_ALERT_FILE_UPLOAD' => 'Error al subir la imagen',
    'LBL_LOGGER' => 'Configuración del registro',
    'LBL_LOGGER_FILENAME' => 'Nombre de archivo del registro',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extensión',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Tamaño máximo del archivo de registro',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Formato de fecha predeterminado',
    'LBL_LOGGER_LOG_LEVEL' => 'Nivel del registro',
    'LBL_LEAD_CONV_OPTION' => 'Opciones de conversión de leads',
    'LEAD_CONV_OPT_HELP' => "<b> Copiar </ b>: crea y relaciona copias de todas las actividades del cliente potencial con nuevos registros que el usuario selecciona durante la conversión. Se crean copias para cada uno de los registros seleccionados. <br> <br> <b> Move </ b> - Mueve todas las actividades del cliente potencial a un nuevo registro que el usuario selecciona durante la conversión. <br> <br> <b> No hacer nada </ b>: no hace nada con las actividades del cliente potencial durante la conversión. Las actividades siguen relacionadas solo con el cliente potencial.",
    'LBL_CONFIG_AJAX' => 'Configurar la interfaz de usuario AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Active o desactive el uso de AJAX UI para módulos específicos.',
    'LBL_LOGGER_MAX_LOGS' => 'Número máximo de archivos de registro (antes de rotación)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Agregar tras el nombre de archivo',
    'LBL_VCAL_PERIOD' => 'Período de tiempo para actualizaciones vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Importar - Número máximo de filas:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Especificar cuántas filas se permiten dentro de los archivos de importación.<br>Si el número de filas en un archivo de importación supera este número, el usuario recibirá una alerta.<br>Si no se introduce un valor se tendra un número ilimitado de filas.',
    'vCAL_HELP' => 'Utilice esta opción para determinar el número de meses de antelación sobre la fecha actual con la que se publica la información relativa al estado de Disponible/Ocupado sobre llamadas y reuniones.<BR>Para desactivar la publicación del estado Disponible/Ocupado, introduzca "0".  El mínimo es 1 mes; el máximo 12 meses',
    'LBL_PDFMODULE_NAME' => 'Configuración PDF',
    'SUGARPDF_BASIC_SETTINGS' => 'Propiedades del documento',
    'SUGARPDF_ADVANCED_SETTINGS' => 'Configuración avanzada',
    'SUGARPDF_LOGO_SETTINGS' => 'Imágenes',

    'PDF_AUTHOR' => 'Autor',
    'PDF_AUTHOR_INFO' => 'El autor aparece en las propiedades del documento',

    'PDF_HEADER_LOGO' => 'Para documentos PDF de Cotizaciones',
    'PDF_HEADER_LOGO_INFO' => 'Esta imagen aparece en la cabecera por defecto de los documentos PDF de Cotizaciones',

    'PDF_NEW_HEADER_LOGO' => 'Seleccione una nueva imagen para las cotizaciones',
    'PDF_NEW_HEADER_LOGO_INFO' => 'El formato de archivo puede ser .jpg o .png. (Sólo .jpg para EZPDF)<BR>El tamaño recomendado es 867x60 pixeles.',

    'PDF_SMALL_HEADER_LOGO' => 'Para documentos PDF de informes',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'Esta imagen aparece en el encabezado predeterminado en Informes Documentos PDF. <br> Esta imagen también aparece en la esquina superior izquierda de la aplicación SuiteCRM.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Seleccione una nueva imagen para informes',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'El formato de archivo puede ser .jpg o .png. (sólo .jpg para EZPDF)<BR>El tamaño recomendado es 212x40 pixeles',

    'PDF_FILENAME' => 'Nombre de archivo predeterminado',
    'PDF_FILENAME_INFO' => 'Nombre de archivo por defecto para los archivos PDF generados',

    'PDF_TITLE' => 'Título',
    'PDF_TITLE_INFO' => 'El título aparece en las propiedades del documento',

    'PDF_SUBJECT' => 'Asunto',
    'PDF_SUBJECT_INFO' => 'El asunto aparece en las propiedades del documento',

    'PDF_KEYWORDS' => 'Palabra(s) claves',
    'PDF_KEYWORDS_INFO' => 'Asociar palabras clave con el documento, generalmente en la forma "palabra1 palabra2..."',

    'PDF_COMPRESSION' => 'Compresión',
    'PDF_COMPRESSION_INFO' => 'Activa o desactiva la compresión de página. <br>Cuando ha sido activada, la representación interna de cada página se comprime, llevando a niveles de compresión de aproximadamente 2 para el documento resultante',

    'PDF_JPEG_QUALITY' => 'Calidad JPEG (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Establece la calidad de compresión JPEG por defecto (1-100)',

    'PDF_PDF_VERSION' => 'Versión PDF',
    'PDF_PDF_VERSION_INFO' => 'Establece la versión de PDF (consulte la referencia PDF para valores válidos)',

    'PDF_PROTECTION' => 'Protección del documento',
    'PDF_PROTECTION_INFO' => 'Establece la protección de documento<br>- copiar: copiar texto e imágenes al portapapeles<br>- imprimir: imprimir el documento<br>- modificar: modificar el documento (excepto las anotaciones y formularios)<br>- anot.-forms.: añadir anotaciones y formularios<br>Nota: la protección ante la modificación es para gente que posee el producto Acrobat completo',

    'PDF_USER_PASSWORD' => 'Contraseña de usuario',
    'PDF_USER_PASSWORD_INFO' => 'Si no establece ninguna contraseña, el documento se abrirá como de costumbre. <br>Si establece una contraseña de usuario, el visor PDF se la solicitará antes de mostrar el documento. <br>Si la contraseña maestra es diferente de la de usuario podrá utilizarla para obtener acceso completo',

    'PDF_OWNER_PASSWORD' => 'Contraseña de propietario',
    'PDF_OWNER_PASSWORD_INFO' => 'Si no establece ninguna contraseña, el documento se abrirá como de costumbre. <br>Si establece una contraseña de usuario, el visor PDF se la solicitará antes de mostrar el documento. <br>Si la contraseña maestra es diferente de la de usuario podrá utilizarla para obtener acceso completo',

    'PDF_ACL_ACCESS' => 'Control de acceso',
    'PDF_ACL_ACCESS_INFO' => 'Control de acceso predeterminado para la generación del PDF',

    'K_CELL_HEIGHT_RATIO' => 'Relación de aspecto de la altura de la celda ',
    'K_CELL_HEIGHT_RATIO_INFO' => 'Si la altura de una celda es menor que (altura de la fuente por la relación de aspecto de la altura de la celda), entonces se utilizará (altura de la fuente por la relación de aspecto de la altura de la celda) como la altura de la celda.<br>(altura de la fuente por la relación de aspecto de la altura de la celda) también se utiliza como la altura de la celda cuando no hay ninguna altura definida',

    'K_SMALL_RATIO' => 'Coeficiente para fuentes pequeñas',
    'K_SMALL_RATIO_INFO' => 'Coeficiente de reducción para fuentes pequeñas',

    'PDF_IMAGE_SCALE_RATIO' => 'Relación de aspecto del escalado de la imagen',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Relación de aspecto utilizado para escalar las imágenes',

    'PDF_UNIT' => 'Unidad',
    'PDF_UNIT_INFO' => 'Unidad de medida del documento',
    'PDF_GD_WARNING' => 'No ha instalado la librería GD para PHP. Sin la librería GD, sólo se mostrarán los logos JPEG en los documentos PDF',
    'ERR_EZPDF_DISABLE' => 'Aviso : La clase EZPDF ha sido deshabilitada en la tabla de configuración y está establecida como la clase para PDF. Por favor, "Guarde" este formulario para establecer TCPDF como la Clase PDF y vuelva en un estado estable',
    'LBL_IMG_RESIZED' => "(redimensionado para ser mostrado)",


    'LBL_FONTMANAGER_BUTTON' => 'Administrador de fuentes PDF',
    'LBL_FONTMANAGER_TITLE' => 'Administrador de fuentes PDF',
    'LBL_FONT_BOLD' => 'Negrita',
    'LBL_FONT_ITALIC' => 'Cursiva',
    'LBL_FONT_BOLDITALIC' => 'Negrita/Cursiva',
    'LBL_FONT_REGULAR' => 'Normal',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Núcleo',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Tipo 1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Nombre',
    'LBL_FONT_LIST_FILENAME' => 'Nombre del archivo',
    'LBL_FONT_LIST_TYPE' => 'Tipo',
    'LBL_FONT_LIST_STYLE' => 'Estilo',
    'LBL_FONT_LIST_STYLE_INFO' => 'Estilo de la fuente',
    'LBL_FONT_LIST_ENC' => 'Codificación',
    'LBL_FONT_LIST_EMBEDDED' => 'Incrustado',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Marque esta opción para incrustar la fuente en el archivo PDF',
    'LBL_FONT_LIST_CIDINFO' => 'Información CID',
    'LBL_FONT_LIST_CIDINFO_INFO' => 'Para ejemplos y más ayuda: www.tcpdf.org',
    'LBL_FONT_LIST_FILESIZE' => 'Tamaño de fuente (Kb)',
    'LBL_ADD_FONT' => 'Agregar una fuente',
    'LBL_BACK' => 'Atrás',
    'LBL_REMOVE' => 'Quitar', // PR 5451
    'LBL_JS_CONFIRM_DELETE_FONT' => '¿Está seguro que desea eliminar esta fuente?',

    'LBL_ADDFONT_TITLE' => 'Añadir una fuente PDF',
    'LBL_PDF_ENCODING_TABLE' => 'Tabla de codificación',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Nombre de la tabla de codificación.<br>Esta opción es ignorada en Unicode TrueType, Unicode OpenType y fuentes con símbolos.<br>La codificación define la asociación entre un código (de 0 a 255) y un carácter contenido en la fuente.<br>Los primeros 128 son fijos y se corresponden con ASCII',
    'LBL_PDF_FONT_FILE' => 'Archivo de fuente',
    'LBL_PDF_FONT_FILE_INFO' => 'archivo .ttf o .otf o .pfb',
    'LBL_PDF_METRIC_FILE' => 'Archivo de métrica',
    'LBL_PDF_METRIC_FILE_INFO' => 'archivo .afm o .ufm',
    'LBL_ADD_FONT_BUTTON' => 'Agregar',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'Este archivo no tiene una extensión de archivo adecuada',

    'ERR_MISSING_CIDINFO' => 'El campo de información CID no puede estar vacío',
    'LBL_ADDFONTRESULT_TITLE' => 'Resultado del proceso de adición de fuente',
    'LBL_STATUS_FONT_SUCCESS' => 'ÉXITO: La fuente se a agregado a SuiteCRM.',
    'LBL_STATUS_FONT_ERROR' => 'ERROR : La fuente no ha sido agregada. Mire en el siguiente registro',

// Font manager
    'ERR_PDF_NO_UPLOAD' => 'Error durante la subida del archivo de fuente o de métricas',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Tus escenarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No se han configurado escenarios',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Elige cuáles escenarios son los indicados para tu instalación. Estas opciones pueden ser cambias después de la instalación.',

    'LBL_WIZARD_TITLE' => 'Asistente de Admin',
    'LBL_WIZARD_WELCOME_TAB' => 'Bienvenido',
    'LBL_WIZARD_WELCOME_TITLE' => '¡Bienvenido a SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Haga clic en <b> Siguiente </ b> para marcar, localizar y configurar ahora SuiteCRM. Si desea configurar SuiteCRM más tarde, haga clic en <b> Saltar </ b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Siguiente >',
    'LBL_WIZARD_BACK_BUTTON' => '< Anterior',
    'LBL_WIZARD_SKIP_BUTTON' => 'Omitir',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuar',
    'LBL_WIZARD_FINISH_TITLE' => 'La configuración básica del sistema está completa',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Personalizando',
    'LBL_WIZARD_SYSTEM_DESC' => 'Proporcione el nombre y el logotipo de su organización para integrar su imagen a SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Especifique cómo le gustaría que sean mostrados los datos en SuiteCRM, basado en su ubicación geográfica. Los ajustes que ha proporcionado aquí serán los ajustes predeterminados del sistema. Los usuarios podrán ajustar sus propias preferencias.',
    'LBL_WIZARD_SMTP_DESC' => 'Proporcione la cuenta de e-Mail que será usada para enviar e-Mails, notificaciones y asignación de contraseñas de usuarios. Los usuarios recibirán e-Mails de SuiteCRM provenientes de la cuenta de e-Mail especificada.',
    'LBL_LOADING' => 'Cargando...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Bienvenido' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logotipo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Muestra los emails de contactos relacionados en el subpanel Historia para módulos',
);