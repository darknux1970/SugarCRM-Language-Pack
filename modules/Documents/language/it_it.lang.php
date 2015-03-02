<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
	

$mod_strings = array (
  'DEF_CREATE_LOG' => 'Documento Creato',
  'ERR_DELETE_CONFIRM' => 'Vuoi eliminare questa revisione del documento ?',
  'ERR_DELETE_LATEST_VERSION' => 'Non sei autorizzato a cancellare l´ultima revisione di un documento.',
  'ERR_DOC_ACTIVE_DATE' => 'Data Pubblicazione',
  'ERR_DOC_EXP_DATE' => 'Data Scadenza',
  'ERR_DOC_NAME' => 'Nome Documento',
  'ERR_DOC_VERSION' => 'Versione Documento',
  'ERR_FILENAME' => 'Nome file',
  'ERR_INVALID_EXTERNAL_API_ACCESS' => 'L´utente ha tentato di accedere con una API ({0}) esterna non valida',
  'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Controllo di accesso per API ({0}) esterna non riuscito',
  'ERR_MISSING_FILE' => 'Questo documento è privo di un file, molto probabilmente a causa di un errore durante il caricamento. Si prega di riprovare a caricare il file o contattare l´amministratore del sistema.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
  'LBL_ACTIVE_DATE' => 'Data Pubblicazione',
  'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
  'LBL_CASES_SUBPANEL_TITLE' => 'Reclami',
  'LBL_CATEGORY' => 'Categoria',
  'LBL_CATEGORY_VALUE' => 'Categoria:',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Non Specificato',
  'LBL_CHANGE_LOG' => 'Dettagli Modifiche:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
  'LBL_CONTRACTS' => 'Contratti',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contratti Associati',
  'LBL_CONTRACT_NAME' => 'Nome Contratto:',
  'LBL_CONTRACT_STATUS' => 'Stato Contratto:',
  'LBL_CREATED' => 'Creato da',
  'LBL_CREATED_BY' => 'Creato Da',
  'LBL_CREATED_USER' => 'Utente Creato',
  'LBL_DATE_ENTERED' => 'Data Inserimento',
  'LBL_DATE_MODIFIED' => 'Data Modifica',
  'LBL_DELETED' => 'Cancellato',
  'LBL_DESCRIPTION' => 'Descrizione',
  'LBL_DET_IS_TEMPLATE' => 'Modello?:',
  'LBL_DET_RELATED_DOCUMENT' => 'Documento associato:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Revisione del Documento Associato:',
  'LBL_DET_TEMPLATE_TYPE' => 'Tipo Documento:',
  'LBL_DOCUMENT' => 'Documento Collegato',
  'LBL_DOCUMENT_ID' => 'Id Documento',
  'LBL_DOCUMENT_INFORMATION' => 'Informazioni Documento',
  'LBL_DOC_ACTIVE_DATE' => 'Data Pubblicazione:',
  'LBL_DOC_DESCRIPTION' => 'Descrizione:',
  'LBL_DOC_EXP_DATE' => 'Data Scadenza:',
  'LBL_DOC_ID' => 'ID Sorgente Documento',
  'LBL_DOC_NAME' => 'Nome Documento:',
  'LBL_DOC_REV_HEADER' => 'Revisioni Documento',
  'LBL_DOC_STATUS' => 'Stato:',
  'LBL_DOC_TYPE' => 'Sorgente',
  'LBL_DOC_TYPE_POPUP' => 'Seleziona una sorgente nella quale verrà caricato il documento e dalla quale il documento sarà disponibile.',
  'LBL_DOC_URL' => 'URL Sorgente Documento',
  'LBL_DOC_VERSION' => 'Revisione:',
  'LBL_DOWNNLOAD_FILE' => 'Scarica File:',
  'LBL_EXPIRATION_DATE' => 'Data Scadenza',
  'LBL_EXTERNAL_DOCUMENT_NOTE' => 'I primi 20 files modificati più di recente sono visualizzati in ordine decrescente nella lista qui sotto. Utilizza la ricerca per trovare altri files.',
  'LBL_FILENAME' => 'Nome File:',
  'LBL_FILE_EXTENSION' => 'Estensione File',
  'LBL_FILE_UPLOAD' => 'File:',
  'LBL_FILE_URL' => 'Url File',
  'LBL_HOMEPAGE_TITLE' => 'I miei Documenti',
  'LBL_IS_TEMPLATE' => 'È un Modello',
  'LBL_LASTEST_REVISION_NAME' => 'Nome ultima revisione:',
  'LBL_LAST_REV_CREATE_DATE' => 'Data Creazione Ultima Revisione',
  'LBL_LAST_REV_CREATOR' => 'Revisione Creata Da:',
  'LBL_LAST_REV_DATE' => 'Data Revisione:',
  'LBL_LAST_REV_MIME_TYPE' => 'Ultima revisione tipo MIME',
  'LBL_LATEST_REVISION' => 'Ultima Revisione',
  'LBL_LATEST_REVISION_ID' => 'Id ultima revisione',
  'LBL_LINKED_ID' => 'Id collegato',
  'LBL_LIST_ACTIVE_DATE' => 'Data Pubblicazione',
  'LBL_LIST_CATEGORY' => 'Categoria',
  'LBL_LIST_DOCUMENT' => 'Documento',
  'LBL_LIST_DOCUMENT_NAME' => 'Nome Documento',
  'LBL_LIST_DOC_TYPE' => 'Sorgente',
  'LBL_LIST_DOWNLOAD' => 'Download',
  'LBL_LIST_EXP_DATE' => 'Data Scadenza',
  'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nome File',
  'LBL_LIST_FILENAME' => 'Nome file',
  'LBL_LIST_FORM_TITLE' => 'Elenco Documenti',
  'LBL_LIST_IS_TEMPLATE' => 'Modello?',
  'LBL_LIST_LAST_REV_CREATOR' => 'Pubblicato Da',
  'LBL_LIST_LAST_REV_DATE' => 'Data Revisione',
  'LBL_LIST_LATEST_REVISION' => 'Ultima versione',
  'LBL_LIST_REVISION' => 'Revisione',
  'LBL_LIST_SELECTED_REVISION' => 'Revisione Selezionata',
  'LBL_LIST_STATUS' => 'Stato',
  'LBL_LIST_SUBCATEGORY' => 'Sottocategoria',
  'LBL_LIST_TEMPLATE_TYPE' => 'Tipo Documento',
  'LBL_LIST_VIEW_DOCUMENT' => 'Visualizza',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Modello di Stampa Unione:',
  'LBL_MIME' => 'Tipo File',
  'LBL_MODIFIED' => 'Modificato da ID',
  'LBL_MODIFIED_USER' => 'Modificato da',
  'LBL_MODULE_NAME' => 'Documenti',
  'LBL_MODULE_TITLE' => 'Documenti: Home',
  'LBL_NAME' => 'Nome Documento',
  'LBL_NEW_FORM_TITLE' => 'Nuovo Documento',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunità',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Prodotti',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Offerte',
  'LBL_RELATED_DOCUMENT_ID' => 'ID documento associato',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID revisione documento associato',
  'LBL_REVISION' => 'Revisione',
  'LBL_REVISIONS' => 'Revisioni',
  'LBL_REVISIONS_PANEL' => 'Dettagli Revisione',
  'LBL_REVISIONS_SUBPANEL' => 'Revisioni',
  'LBL_REVISION_NAME' => 'Numero Revisione',
  'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nome Documento',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Documento',
  'LBL_SELECTED_REVISION_FILENAME' => 'Nome del file di revisione selezionato',
  'LBL_SELECTED_REVISION_ID' => 'Id revisione selezionata',
  'LBL_SELECTED_REVISION_NAME' => 'Nome revisione selezionata:',
  'LBL_SF_ACTIVE_DATE' => 'Data Pubblicazione:',
  'LBL_SF_CATEGORY' => 'Categoria:',
  'LBL_SF_DOCUMENT' => 'Nome Documento:',
  'LBL_SF_EXP_DATE' => 'Data Scadenza:',
  'LBL_SF_SUBCATEGORY' => 'Sottocategoria:',
  'LBL_STATUS' => 'Stato',
  'LBL_SUBCATEGORY' => 'Sottocategoria',
  'LBL_SUBCATEGORY_VALUE' => 'Sottocategoria:',
  'LBL_TEAM' => 'Gruppo:',
  'LBL_TEMPLATE_TYPE' => 'Tipo documento',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Reversioni',
  'LBL_TREE_TITLE' => 'Documenti',
  'LNK_DOCUMENT_LIST' => 'Visualizza Documenti',
  'LNK_NEW_DOCUMENT' => 'Nuovo Documento',
  'LNK_NEW_MAIL_MERGE' => 'Stampa Unione',
);

