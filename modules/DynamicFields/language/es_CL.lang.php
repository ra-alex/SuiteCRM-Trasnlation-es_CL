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
    'LNK_NEW_CALL' => 'Programar llamada',
    'LNK_NEW_MEETING' => 'Programar reunión',
    'LNK_NEW_TASK' => 'Crear tarea',
    'LNK_NEW_NOTE' => 'Crear nota o adjunto',
    'LNK_NEW_EMAIL' => 'Archivar e-Mail',
    'LNK_CALL_LIST' => 'Llamadas',
    'LNK_MEETING_LIST' => 'Reuniones',
    'LNK_TASK_LIST' => 'Tareas',
    'LNK_NOTE_LIST' => 'Notas',
    'LBL_ADD_FIELD' => 'Agregar campo:',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de módulo',
    'COLUMN_TITLE_NAME' => 'Nombre del campo',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Etiqueta',
    'COLUMN_TITLE_LABEL_VALUE' => 'Valor de la etiqueta',
    'COLUMN_TITLE_LABEL' => 'Etiqueta del sistema',
    'COLUMN_TITLE_DATA_TYPE' => 'Tipo de dato',
    'COLUMN_TITLE_MAX_SIZE' => 'Tamaño máximo',
    'COLUMN_TITLE_HELP_TEXT' => 'Ayuda',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Comentario',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Campo requerido',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Valor predeterminado',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'Altura del iFrame',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'URL predeterminada',
    'COLUMN_TITLE_AUDIT' => 'Auditoría',
    'COLUMN_TITLE_MIN_VALUE' => 'Valor mínimo',
    'COLUMN_TITLE_MAX_VALUE' => 'Valor máximo',
    'COLUMN_TITLE_LABEL_ROWS' => 'Filas',
    'COLUMN_TITLE_LABEL_COLS' => 'Columnas',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# elementos mostrados',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Auto incrementar el siguiente valor',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Deshabilitar formato',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Habilitar rango de búsqueda',
    'LBL_DROP_DOWN_LIST' => 'Lista desplegable',
    'LBL_RADIO_FIELDS' => 'Botón de radio',
    'LBL_MULTI_SELECT_LIST' => 'Lista multiselección',
    'COLUMN_TITLE_PRECISION' => 'Precisión',
    'LBL_MODULE' => 'Módule',
    'COLUMN_TITLE_MASS_UPDATE' => 'Actualización masiva',
    'COLUMN_TITLE_IMPORTABLE' => 'Se pueden importar',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Unificar duplicados',
    'LBL_LABEL' => 'Etiqueta',
    'LBL_DATA_TYPE' => 'Tipo de datos',
    'LBL_DEFAULT_VALUE' => 'Valor predeterminado',
    'ERR_RESERVED_FIELD_NAME' => "palabra reservada",
    'ERR_SELECT_FIELD_TYPE' => 'Por favor, seleccione un tipo de campo',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'El nombre del campo ya existe',
    'LBL_BTN_ADD' => 'Agregar',
    'LBL_BTN_EDIT' => 'Editar',
    'LBL_GENERATE_URL' => 'URL generada',
    'LBL_CALCULATED' => 'Valor calculado',
    'LBL_LINK_TARGET' => 'Abrir enlace en',
    'LBL_IMAGE_WIDTH' => 'Ancho',
    'LBL_IMAGE_HEIGHT' => 'Altura',
    'LBL_IMAGE_BORDER' => 'Borde',
    'LBL_HELP' => 'Ayuda' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Edición en línea',
    'COLUMN_TITLE_PARENT_ENUM' => 'Lista Desplegable Padre',
);