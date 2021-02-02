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
    'LBL_ACCEPT_THIS' => '¿Aceptar?',
    'LBL_ADD_BUTTON' => 'Agregar',
    'LBL_ADD_INVITEE' => 'Agregar asistentes',
    'LBL_CONTACT_NAME' => 'Contacto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_CREATED_BY' => 'Creado por',
    'LBL_DATE_END' => 'Fecha final',
    'LBL_DATE_TIME' => 'Fecha y hora de inicio:',
    'LBL_DATE' => 'Fecha inicial:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Reuniones',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_DIRECTION' => 'Dirección:',
    'LBL_DURATION_HOURS' => 'Horas de duración:',
    'LBL_DURATION_MINUTES' => 'Minutos de duración:',
    'LBL_DURATION' => 'Duración:',
    'LBL_EMAIL' => 'e-Mail',
    'LBL_FIRST_NAME' => 'Nombre',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(horas/minutos)',
    'LBL_INVITEE' => 'Asistentes',
    'LBL_LAST_NAME' => 'Apellidos',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario asignado',
    'LBL_LIST_CLOSE' => 'Cerrado',
    'LBL_LIST_CONTACT' => 'Contacto',
    'LBL_LIST_DATE_MODIFIED' => 'Fecha de modificación',
    'LBL_LIST_DATE' => 'Fecha inicial',
    'LBL_LIST_DIRECTION' => 'Dirección',
    'LBL_LIST_DUE_DATE' => 'Fecha de vencimiento',
    'LBL_LIST_FORM_TITLE' => 'Lista de reuniones',
    'LBL_LIST_MY_MEETINGS' => 'Mis reuniones',
    'LBL_LIST_RELATED_TO' => 'Relacionado con',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_SUBJECT' => 'Asunto',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes potenciales',
    'LBL_LOCATION' => 'Lugar:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modificado por',
    'LBL_MODULE_NAME' => 'Reuniones',
    'LBL_MODULE_TITLE' => 'Reuniones : Inicio',
    'LBL_NAME' => 'Nombre',
    'LBL_NEW_FORM_TITLE' => 'Crear cita',
    'LBL_OUTLOOK_ID' => 'ID de Outlook',
    'LBL_SEQUENCE' => 'Secuencia de actualización de la reunión',
    'LBL_PHONE' => 'Teléfono:',
    'LBL_REMINDER_TIME' => 'Hora de aviso',
    'LBL_EMAIL_REMINDER_SENT' => 'Recordatorio por correo electrónico enviado',
    'LBL_REMINDER' => 'Aviso:',
    'LBL_REMINDER_POPUP' => 'Pantalla emergente',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Enviar correo electrónico a todos los asistentes',
    'LBL_EMAIL_REMINDER' => 'Enviar recordatorio por correo electrónico',
    'LBL_EMAIL_REMINDER_TIME' => 'Enviar hora de recordatorio por correo electrónico',
    'LBL_REMOVE' => 'Quitar', // PR 5451
    'LBL_SCHEDULING_FORM_TITLE' => 'Planeación',
    'LBL_SEARCH_BUTTON' => 'Búsqueda',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de reuniones',
    'LBL_SEND_BUTTON_LABEL' => 'Enviar invitaciones',
    'LBL_SEND_BUTTON_TITLE' => 'Enviar invitaciones',
    'LBL_STATUS' => 'Estado:',
    'LBL_TYPE' => 'Tipo de reunión',
    'LBL_PASSWORD' => 'Contraseña de la reunión',
    'LBL_URL' => 'Iniciar/Unirse a una reunión',
    'LBL_HOST_URL' => 'URL del Host',
    'LBL_DISPLAYED_URL' => 'Ver URL',
    'LBL_CREATOR' => 'Creador de reuniones ',
    'LBL_EXTERNALID' => 'ID de la aplicación externa',
    'LBL_SUBJECT' => 'Asunto:',
    'LBL_TIME' => 'Hora de inicio:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Usuarios',
    'LBL_PARENT_TYPE' => 'Tipo de padre',
    'LBL_PARENT_ID' => 'ID del Padre',
    'LNK_MEETING_LIST' => 'Reuniones',
    'LNK_NEW_APPOINTMENT' => 'Crear cita',
    'LNK_NEW_MEETING' => 'Programar reunión',
    'LNK_IMPORT_MEETINGS' => 'Importar reuniiones',

    'LBL_CREATED_USER' => 'Usuario creado',
    'LBL_MODIFIED_USER' => 'Usuario modificado',
    'NOTICE_DURATION_TIME' => 'El tiempo de duración debe ser mayor que 0',
    'LBL_MEETING_INFORMATION' => 'Información de la reunión', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_LIST_JOIN_MEETING' => 'Unirse a la reunión',
    'LBL_ACCEPT_STATUS' => 'Estado de aceptación',
    'LBL_ACCEPT_LINK' => 'Aceptar Vínculo',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'No le es posible unirse a esta reunión porque no es un invitado',
    'LBL_EXTNOT_RECORD_LINK' => 'Ver reunión',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Usted no puede iniciar esta reunión porque no es un administrador o el propietario de la reunión',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Crear una invitación',
    'LBL_CREATE_CONTACT' => 'Como Contacto',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Como Cliente Potencial', // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Crear y Agregar', // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
    'LBL_EMPTY_SEARCH_RESULT' => 'Lo sentimos, no se encontraron resultados. Por favor cree un asistente abajo.',
    'LBL_NO_ACCESS' => 'No tiene permisos para crear $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Tipo de Repetición',
    'LBL_REPEAT_INTERVAL' => 'Intervalo de Repetición',
    'LBL_REPEAT_DOW' => 'Repetir Día de la Semana',
    'LBL_REPEAT_UNTIL' => 'Repetir Hasta',
    'LBL_REPEAT_COUNT' => 'Número de repeticiones',
    'LBL_REPEAT_PARENT_ID' => 'Repita el ID principal',
    'LBL_RECURRING_SOURCE' => 'Origen de Recurrencia',

    'LBL_SYNCED_RECURRING_MSG' => 'Esta reunión se generó en otro sistema y fue sincronizada con SuiteCRM. Para hacer cambios, vaya a la reunión original dentro del otro sistema. Los cambios hechos en el otro sistema pueden ser sincronizados a este registro.',
    'LBL_RELATED_TO' => 'Relacionado a:',

    // for reminders
    'LBL_REMINDERS' => 'Recordatorios',
    'LBL_REMINDERS_ACTIONS' => 'Acciones:',
    'LBL_REMINDERS_POPUP' => 'Pantalla emergente',
    'LBL_REMINDERS_EMAIL' => 'Enviar correo electrónico a invitados',
    'LBL_REMINDERS_WHEN' => 'Cuando:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Eliminar el recordatorio',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Agregar todos los invitados',
    'LBL_REMINDERS_ADD_REMINDER' => 'Agregar recordatorio',

    // for google sync
    'LBL_GSYNC_ID' => 'ID de evento de Google', // PR 6146
    'LBL_GSYNC_LASTSYNC' => 'Última marca de tiempo de Google Sync', // PR 6146
);
