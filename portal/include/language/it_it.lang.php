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
	

$app_strings = array (
  'ERROR_FULLY_EXPIRED' => 'La licenza di SugarCRM è scaduta da più di 30 giorni e deve essere rinnovata. Solo l´amministratore del sistema può accedere.',
  'ERROR_LICENSE_EXPIRED' => 'La licenza di SugarCRM deve essere aggiornata. Solo l´amministratore del sistema può accedere.',
  'ERROR_NO_RECORD' => 'Errore nel recupero del record. Questo record può essere stato cancellato o non hai i permessi per vederlo.',
  'ERR_CREATING_FIELDS' => 'Errore di compilazione dei campi di dettaglio aggiuntivo:',
  'ERR_CREATING_TABLE' => 'Errore nella creazione della tabella:',
  'ERR_DELETE_RECORD' => 'Per eliminare il contatto deve essere specificato il numero del record.',
  'ERR_EXPORT_DISABLED' => 'Esportazione non abilitata.',
  'ERR_EXPORT_TYPE' => 'Errore nell´esportazione',
  'ERR_INVALID_AMOUNT' => 'Si prega di inserire un valore valido.',
  'ERR_INVALID_DATE' => 'Si prega di inserire una data valida.',
  'ERR_INVALID_DATE_FORMAT' => 'Il formato dei dati deve essere:',
  'ERR_INVALID_DAY' => 'Si prega di inserire un giorno valido.',
  'ERR_INVALID_EMAIL_ADDRESS' => 'indirizzo email non valido.',
  'ERR_INVALID_HOUR' => 'Si prega di inserire un´ora valida.',
  'ERR_INVALID_MONTH' => 'Si prega di inserire un mese valido.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Campo obbligatorio non valido:',
  'ERR_INVALID_TIME' => 'Si prega di inserire un orario valido.',
  'ERR_INVALID_VALUE' => 'Valore non valido:',
  'ERR_INVALID_YEAR' => 'Si prega di inserire un anno a 4 cifre valido.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Campo obbligatorio mancante:',
  'ERR_NEED_ACTIVE_SESSION' => 'Per esportare contenuti è richiesta una sessione attiva.',
  'ERR_NOTHING_SELECTED' => 'Prima di procedere si prega di selezionare.',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'Un opportunità con il nome %s esiste già. Si prega di inserire qui sotto un altro nome.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'Il nome dell´opportunità non è stato inserito. Si prega di inserirlo qui sotto.',
  'ERR_PORTAL_LOGIN_FAILED' => 'Impossibile creare la sessione di login del portale. Si prega di contattare l´amministratore del sistema.',
  'ERR_RESOURCE_MANAGEMENT_INFO' => 'Ritorna in Home',
  'ERR_SELF_REPORTING' => 'L´utente non può dipendere da lui o da sè stesso.',
  'ERR_SQS_NO_MATCH' => 'Nessuna corrispondenza',
  'ERR_SQS_NO_MATCH_FIELD' => 'Nessuna corrispondenza per il campo:',
  'LBL_ACCOUNT' => 'Azienda',
  'LBL_ACCOUNTS' => 'Aziende',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Vedi sommario',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Vedi sommario [Alt+H]',
  'LBL_ADDITIONAL_DETAILS' => 'Ulteriori Dettagli',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Chiudi',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Clicca per Chiudere',
  'LBL_ADD_BUTTON' => 'Aggiungi',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'Aggiungi [Alt+A]',
  'LBL_ADD_DOCUMENT' => 'Aggiungi Documento',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Aggiungi alla lista obiettivi',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Aggiungi alla lista obiettivi',
  'LBL_ADMIN' => 'Admin',
  'LBL_ALT_HOT_KEY' => 'Alt+',
  'LBL_ARCHIVE' => 'Archivia',
  'LBL_ASSIGNED_TO' => 'Assegnato a:',
  'LBL_ASSIGNED_TO_USER' => 'Assegnato all´utente',
  'LBL_BACK' => 'Indietro',
  'LBL_BILL_TO_ACCOUNT' => 'Fattura all´Azienda',
  'LBL_BILL_TO_CONTACT' => 'Fattura al Contatto',
  'LBL_BROWSER_TITLE' => 'SugarCRM - Commercial Open Source CRM',
  'LBL_BUGS' => 'Bug',
  'LBL_BY' => 'da',
  'LBL_CALLS' => 'Chiamate',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'Invia le email della campagna in coda',
  'LBL_CANCEL_BUTTON_KEY' => 'X',
  'LBL_CANCEL_BUTTON_LABEL' => 'Annulla',
  'LBL_CANCEL_BUTTON_TITLE' => 'Annulla [Alt+X]',
  'LBL_CASE' => 'Reclamo',
  'LBL_CASES' => 'Reclami',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'Cambia',
  'LBL_CHANGE_BUTTON_TITLE' => 'Cambia [Alt+G]',
  'LBL_CHANGE_PASSWORD' => 'Cambia Password',
  'LBL_CHARSET' => 'UTF-8',
  'LBL_CHECKALL' => 'Seleziona tutti',
  'LBL_CLEARALL' => 'Azzera Tutto',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'Azzera',
  'LBL_CLEAR_BUTTON_TITLE' => 'Azzera',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'Chiudi tutto',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'Chiudi tutto [Alt+I]',
  'LBL_CLOSE_WINDOW' => 'Chiudi Finestra',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Componi Email',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Componi Email [Alt+L]',
  'LBL_CONTACT' => 'Contatto',
  'LBL_CONTACTS' => 'Contatti',
  'LBL_CONTACT_LIST' => 'Elenco Contatti',
  'LBL_CREATED' => 'Creato da:',
  'LBL_CREATED_BY_USER' => 'Creato da Utente',
  'LBL_CREATE_BUTTON_LABEL' => 'Nuovo',
  'LBL_CURRENT_USER_FILTER' => 'Solo i miei elementi:',
  'LBL_DATE_ENTERED' => 'Data Creazione:',
  'LBL_DATE_MODIFIED' => 'Ultima Modifica:',
  'LBL_DELETE' => 'Elimina',
  'LBL_DELETED' => 'Eliminato',
  'LBL_DELETE_BUTTON' => 'Elimina',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => 'Elimina',
  'LBL_DELETE_BUTTON_TITLE' => 'Elimina [Alt+D]',
  'LBL_DIRECT_REPORTS' => 'Reports diretti',
  'LBL_DISPLAY_COLUMNS' => 'Mostra Colonne',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'Fatto',
  'LBL_DONE_BUTTON_TITLE' => 'Fatto [Alt+X]',
  'LBL_DST_NEEDS_FIXIN' => 'L´applicazione necessita di una correzzione dell´ora legale. Vai in <a href=index.php?module=Administration&amp;action=DstFix>Ripara</a> nel pannello amministrativo e correggi l´ora legale.',
  'LBL_DUPLICATE_BUTTON' => 'Duplica',
  'LBL_DUPLICATE_BUTTON_KEY' => 'U',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplica',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplica [Alt+U]',
  'LBL_DUP_MERGE' => 'Trova Duplicati',
  'LBL_EDIT_BUTTON' => 'Modifica',
  'LBL_EDIT_BUTTON_KEY' => 'E',
  'LBL_EDIT_BUTTON_LABEL' => 'Modifica',
  'LBL_EDIT_BUTTON_TITLE' => 'Modifica [Alt+E]',
  'LBL_EMAILS' => 'Email',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Invia Email come PDF',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Invia Email come PDF [Alt+M]',
  'LBL_EMPLOYEES' => 'Dipendenti',
  'LBL_ENTER_DATE' => 'Inserisci Data',
  'LBL_EXPORT' => 'Esporta',
  'LBL_EXPORT_ALL' => 'Esporta Tutto',
  'LBL_FULL_FORM_BUTTON_KEY' => 'F',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'Modulo Completo',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'Modulo Completo [Alt+F]',
  'LBL_HIDE' => 'Nascondi',
  'LBL_HIDE_COLUMNS' => 'Nascondi Colonne',
  'LBL_ID' => 'ID',
  'LBL_IMPORT' => 'Importa',
  'LBL_IMPORT_PROSPECTS' => 'Importa Obiettivi',
  'LBL_LAST_VIEWED' => 'Ultima Vista',
  'LBL_LEADS' => 'Leads',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Sei sicuro di voler aggiornare l´intero elenco?',
  'LBL_LISTVIEW_NO_SELECTED' => 'Per procedere si prega di selezionare almeno 1 record.',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'Pagina Corrente',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'Elenco Intero',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'Record Selezionati',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Selezionato:',
  'LBL_LIST_ACCOUNT_NAME' => 'Nome azienda',
  'LBL_LIST_ASSIGNED_USER' => 'Utente',
  'LBL_LIST_CONTACT_NAME' => 'Nome Contatto',
  'LBL_LIST_CONTACT_ROLE' => 'Ruolo del Contatto',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_LIST_OF' => 'di',
  'LBL_LIST_PHONE' => 'Telefono',
  'LBL_LIST_TEAM' => 'Gruppo',
  'LBL_LIST_USER_NAME' => 'Nome Utente',
  'LBL_LOADING' => 'Caricamento ...',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'John',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Doe',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Sig.',
  'LBL_LOGIN_SESSION_EXCEEDED' => 'Il server è troppo occupato. Si prega di riprovare più tardi.',
  'LBL_LOGIN_TO_ACCESS' => 'Si prega di registrarsi per accedere a quest´area.',
  'LBL_LOGOUT' => 'Logout',
  'LBL_MAILMERGE' => 'Stampa Unione',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MASS_UPDATE' => 'Aggiornamento Globale',
  'LBL_MEETINGS' => 'Riunioni',
  'LBL_MEMBERS' => 'Membri',
  'LBL_MODIFIED' => 'Modificato da',
  'LBL_MODIFIED_BY_USER' => 'Modificato da Utente',
  'LBL_MY_ACCOUNT' => 'La mia Azienda',
  'LBL_NAME' => 'Nome',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Nuovo',
  'LBL_NEW_BUTTON_TITLE' => 'Nuovo [Alt+N]',
  'LBL_NEXT_BUTTON_LABEL' => 'Avanti',
  'LBL_NONE' => '--Nessuno--',
  'LBL_NOTES' => 'Note',
  'LBL_NO_RECORDS_FOUND' => '- 0 Record Trovati -',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'Apri Tutto',
  'LBL_OPENALL_BUTTON_TITLE' => 'Apri Tutto [Alt+O]',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'Apri a:',
  'LBL_OPENTO_BUTTON_TITLE' => 'Apri a: [Alt+T]',
  'LBL_OPPORTUNITIES' => 'Opportunità',
  'LBL_OPPORTUNITY' => 'Opportunità',
  'LBL_OPPORTUNITY_NAME' => 'Nome Opportunità',
  'LBL_OR' => 'o',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PRODUCTS' => 'Prodotti',
  'LBL_PRODUCT_BUNDLES' => 'Famiglie di prodotto',
  'LBL_PROJECTS' => 'Progetti',
  'LBL_PROJECT_TASKS' => 'Compiti di Progetto',
  'LBL_QUOTES' => 'Offerte',
  'LBL_QUOTES_SHIP_TO' => 'Invia Offerte a',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Crea Opportunità dall´Offerta',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Crea Opportunità dall´Offerta[Alt+O]',
  'LBL_RELATED_RECORDS' => 'Record Relativi',
  'LBL_REMOVE' => 'Rimuovi',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_SAVED' => 'Salvato',
  'LBL_SAVED_LAYOUT' => 'Il layout è stato salvato.',
  'LBL_SAVED_VIEWS' => 'Viste salvate',
  'LBL_SAVE_BUTTON_KEY' => 'S',
  'LBL_SAVE_BUTTON_LABEL' => 'Salva',
  'LBL_SAVE_BUTTON_TITLE' => 'Salva [Alt+S]',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'Salva e Crea Nuovo',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'Salva e Crea Nuovo [Alt+V]',
  'LBL_SAVING' => 'Salvataggio',
  'LBL_SAVING_LAYOUT' => 'Salvataggio Layout ...',
  'LBL_SEARCH' => 'Cerca',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'Cerca',
  'LBL_SEARCH_BUTTON_TITLE' => 'Cerca [Alt+Q]',
  'LBL_SEARCH_CRITERIA' => 'Criteri di Ricerca',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'Seleziona',
  'LBL_SELECT_BUTTON_TITLE' => 'Seleziona [Alt+T]',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Seleziona Contatto',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Seleziona Contatto [Alt+T]',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Seleziona da Report',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Seleziona Report',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'Seleziona Utente',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'Seleziona utente [Alt+U]',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'Risorse utilizzate per costruire questa pagina (query, files)',
  'LBL_SERVER_RESPONSE_TIME' => 'Tempo di risposta del server:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'secondi.',
  'LBL_SHIP_TO_ACCOUNT' => 'Spedisci all´Azienda',
  'LBL_SHIP_TO_CONTACT' => 'Spedisci al Contatto',
  'LBL_SHORTCUTS' => 'Scorciatoie',
  'LBL_SHOW' => 'Mostra',
  'LBL_SQS_INDICATOR' => '',
  'LBL_STATUS' => 'Stato:',
  'LBL_STATUS_UPDATED' => 'Il tuo stato per questo evento è stato aggiornato!',
  'LBL_SUBJECT' => 'Oggetto',
  'LBL_SYNC' => 'Sync',
  'LBL_TASKS' => 'Compiti',
  'LBL_TEAM' => 'Gruppo:',
  'LBL_TEAMS_LINK' => 'Gruppo',
  'LBL_TEAM_ID' => 'Id Gruppo',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivia Email',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivia Email [Alt+K]',
  'LBL_UNAUTH_ADMIN' => 'Accesso non autorizzato all´amministrazione',
  'LBL_UNDELETE' => 'Ripristina',
  'LBL_UNDELETE_BUTTON' => 'Ripristina',
  'LBL_UNDELETE_BUTTON_LABEL' => 'Ripristina',
  'LBL_UNDELETE_BUTTON_TITLE' => 'Ripristina [Alt+D]',
  'LBL_UNSYNC' => 'Non sincronizzare',
  'LBL_UPDATE' => 'Aggiorna',
  'LBL_USERS' => 'Utenti',
  'LBL_USERS_SYNC' => 'Sincronizza Utenti',
  'LBL_USER_LIST' => 'Elenco Utenti',
  'LBL_VIEW_BUTTON' => 'Visualizza',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'Visualizza',
  'LBL_VIEW_BUTTON_TITLE' => 'Visualizza [Alt+V]',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'Stampa come PDF',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'Stampa come PDF [Alt+P]',
  'LNK_ABOUT' => 'About',
  'LNK_ADVANCED_SEARCH' => 'Avanzata',
  'LNK_BASIC_SEARCH' => 'Basic',
  'LNK_DELETE' => 'canc',
  'LNK_DELETE_ALL' => 'cancella tutto',
  'LNK_EDIT' => 'modifica',
  'LNK_GET_LATEST' => 'Ottieni ultimo',
  'LNK_GET_LATEST_TOOLTIP' => 'Sostituisci con ultima versione',
  'LNK_HELP' => 'Aiuto',
  'LNK_LIST_END' => 'Fine',
  'LNK_LIST_NEXT' => 'Avanti',
  'LNK_LIST_PREVIOUS' => 'Indietro',
  'LNK_LIST_RETURN' => 'Ritorna all´elenco',
  'LNK_LIST_START' => 'Inizio',
  'LNK_LOAD_SIGNED' => 'Firma',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'Sostituisci con documento firmato',
  'LNK_PRINT' => 'Stampa',
  'LNK_REMOVE' => 'canc',
  'LNK_RESUME' => 'Riprendi',
  'LNK_VIEW_CHANGE_LOG' => 'Vedi Log Cambiamenti',
  'LOGIN_LOGO_ERROR' => 'Si prega di sostituire i loghi della SugarCRM.',
  'NTC_CLICK_BACK' => 'Si prega di selezionare il pulsante indietro del browser e correggere l´errore.',
  'NTC_DATE_FORMAT' => '(aaaa-mm-gg)',
  'NTC_DATE_TIME_FORMAT' => '(aaaa-mm-gg 24:00)',
  'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record?',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Sei sicuro di voler eliminare i record selezionati?',
  'NTC_LOGIN_MESSAGE' => 'Si prega di inserire il nome utente e la password:',
  'NTC_NO_ITEMS_DISPLAY' => 'nessuno',
  'NTC_REMOVE_CONFIRMATION' => 'Sei sicuro di voler rimuovere questa relazione?',
  'NTC_REQUIRED' => 'Indica un campo obbligatorio',
  'NTC_SUPPORT_SUGARCRM' => 'Supporta il progetto open source SugarCRM con una donazione tramite PayPal - è veloce, gratuito e sicuro!',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_WELCOME' => 'Benvenuto',
  'NTC_YEAR_FORMAT' => '(aaaa)',
);

$app_list_strings = array (
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => 'Analista',
    'Competitor' => 'Competitor',
    'Customer' => 'Cliente',
    'Integrator' => 'Integrator',
    'Investor' => 'Investitore',
    'Other' => 'Altro',
    'Partner' => 'Partner',
    'Press' => 'Stampa',
    'Prospect' => 'Prospect',
    'Reseller' => 'Rivenditore',
  ),
  'activity_dom' => 
  array (
    'Call' => 'Chiamata:',
    'Email' => 'Email',
    'Meeting' => 'Riunione:',
    'Note' => 'Nota',
    'Task' => 'Compito',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => 'Uguali',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => 'No',
    'bool_true' => 'Si',
  ),
  'bug_priority_dom' => 
  array (
    'High' => 'Alta',
    'Low' => 'Bassa',
    'Medium' => 'Media',
    'Urgent' => 'Urgente',
  ),
  'bug_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Accettata',
    'Duplicate' => 'Duplicato',
    'Fixed' => 'Corretta',
    'Invalid' => 'Non valida',
    'Later' => 'Posticipata',
    'Out of Date' => 'Scaduta',
  ),
  'bug_status_dom' => 
  array (
    'Assigned' => 'Assegnato',
    'Closed' => 'Chiuso',
    'New' => 'Nuovo',
    'Pending' => 'In sospeso',
    'Rejected' => 'Respinto',
  ),
  'bug_type_dom' => 
  array (
    'Defect' => 'Difetto',
    'Feature' => 'Funzionalità',
  ),
  'call_direction_dom' => 
  array (
    'Inbound' => 'In entrata',
    'Outbound' => 'In uscita',
  ),
  'call_status_dom' => 
  array (
    'Held' => 'Effettuata',
    'Not Held' => 'Non Effettuata',
    'Planned' => 'Pianificata',
  ),
  'campaign_status_dom' => 
  array (
    '' => '',
    'Active' => 'Attivo',
    'Complete' => 'Completato',
    'In Queue' => 'In Coda',
    'Inactive' => 'Non attivo',
    'Planning' => 'Pianificazione',
    'Sending' => 'In Uscita',
  ),
  'campaign_type_dom' => 
  array (
    '' => '',
    'Email' => 'Email',
    'Mail' => 'Posta',
    'Print' => 'Stampa',
    'Radio' => 'Radio',
    'Telesales' => 'Televendite',
    'Television' => 'Televisione',
    'Web' => 'Web',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '',
    'contact' => 'Contatti Creati',
    'invalid email' => 'Messaggi non consegnati, Indirizzo non valido',
    'lead' => 'Leads Creati',
    'link' => 'Click-thru Link',
    'removed' => 'Disiscritto',
    'send error' => 'Messaggi non consegnati, Altro',
    'targeted' => 'Messaggio Inviato/Tentato',
    'viewed' => 'Messaggio Letto',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Contacts' => 'Contatti',
    'Leads' => 'Leads',
    'Prospects' => 'Obiettivi',
    'Users' => 'Utenti',
  ),
  'case_priority_dom' => 
  array (
    'P1' => 'Alta',
    'P2' => 'Media',
    'P3' => 'Bassa',
  ),
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Alternate Contact' => 'Contato Alternativo',
    'Primary Contact' => 'Contatto Primario',
  ),
  'case_status_dom' => 
  array (
    'Assigned' => 'Assegnato',
    'Closed' => 'Chiuso',
    'Duplicate' => 'Duplicato',
    'New' => 'Nuovo',
    'Pending Input' => 'In attesa di azione',
    'Rejected' => 'Respinto',
  ),
  'checkbox_dom' => 
  array (
    '' => '',
    1 => 'Si',
    2 => 'No',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => '1 Giorno',
    3 => '3 Giorni',
    5 => '5 Giorni',
    7 => '1 Settimana',
    14 => '2 Settimane',
    21 => '3 Settimane',
    31 => '1 Mese',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => 'Metà Anno',
    'monthly' => 'Mensile',
    'quarterly' => 'Trimestrale',
    'yearly' => 'Annuale',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => 'In Corso',
    'notstarted' => 'Non iniziato',
    'signed' => 'Firmato',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => 'Non è uguale a',
    'Equals' => 'Uguali',
  ),
  'document_category_dom' => 
  array (
    '' => '',
    'Knowledege Base' => 'Knowledge Base',
    'Marketing' => 'Marketing',
    'Sales' => 'Vendite',
  ),
  'document_status_dom' => 
  array (
    'Active' => 'Attivo',
    'Draft' => 'Bozza',
    'Expired' => 'Scaduto',
    'FAQ' => 'FAQ',
    'Pending' => 'In attesa',
    'Under Review' => 'In Revisione',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => 'FAQ',
    'Marketing Collateral' => 'Collegato al Marketing',
    'Product Brochures' => 'Brochure Prodotto',
  ),
  'document_template_type_dom' => 
  array (
    '' => '',
    'eula' => 'EULA',
    'license' => 'Licenza',
    'mailmerge' => 'Stampa Unione',
    'nda' => 'NDA',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Gennaio',
    2 => 'Febbraio',
    3 => 'Marzo',
    4 => 'Aprile',
    5 => 'Maggio',
    6 => 'Giugno',
    7 => 'Luglio',
    8 => 'Agosto',
    9 => 'Settembre',
    10 => 'Ottobre',
    11 => 'Novembre',
    12 => 'Dicembre',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => 'No',
    'bool_true' => 'Si',
  ),
  'dom_email_distribution' => 
  array (
    '' => '--Nessuno--',
    'direct' => 'Assegnazione Diretta',
    'leastBusy' => 'Least-Busy',
    'roundRobin' => 'Round-Robin',
  ),
  'dom_email_editor_option' => 
  array (
    '' => 'Formato Email predefinito',
    'html' => 'HTML Email',
    'plain' => 'Plain Text Email',
  ),
  'dom_email_errors' => 
  array (
    1 => 'Selezionare solo un utente per le voci di Assegnazione diretta.',
    2 => 'Devi assegnare solamente gli Elementi Selezionati  per i record di Assegnazione Diretta',
  ),
  'dom_email_link_type' => 
  array (
    '' => 'Client di posta predefinito per il sistema',
    'mailto' => 'Client di posta esterno',
    'sugar' => 'Client di posta di SugarCRM',
  ),
  'dom_email_server_type' => 
  array (
    '' => '--Nessuno--',
    'imap' => 'IMAP',
    'pop3' => 'POP3',
  ),
  'dom_email_status' => 
  array (
    'archived' => 'Archiviato',
    'closed' => 'Chiuso',
    'draft' => 'Bozza',
    'read' => 'Letto',
    'replied' => 'Risposto',
    'send_error' => 'Errore di Invio',
    'sent' => 'Inviato',
    'unread' => 'Non letto',
  ),
  'dom_email_types' => 
  array (
    'archived' => 'Archiviato',
    'draft' => 'Bozza',
    'inbound' => 'In entrata',
    'out' => 'Inviato',
  ),
  'dom_int_bool' => 
  array (
    1 => 'Si',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => 'Bounce Handling',
    'bug' => 'Segnala bug',
    'contact' => 'Nuovo contatto',
    'pick' => 'Crea [Qualsiasi]',
    'sales' => 'Nuovo Lead',
    'support' => 'Nuovo Reclamo',
    'task' => 'Nuovo Compito',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => 'Accetta',
    'decline' => 'Rifiuta',
    'tentative' => 'Accetta provvisoriamente',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => 'Accettato',
    'decline' => 'Rifiutato',
    'none' => 'Nessuno',
    'tentative' => 'Accettato provvisoriamente',
  ),
  'dom_report_types' => 
  array (
    'detailed_summary' => 'Raggruppamento con dettagli',
    'summary' => 'Raggruppamento',
    'tabular' => 'Righe e Colonne',
  ),
  'dom_switch_bool' => 
  array (
    '' => 'No',
    'off' => 'No',
    'on' => 'Si',
  ),
  'dom_timezones' => 
  array (
    -12 => '-12',
    -11 => '-11',
    -10 => '-10',
    -9 => '-9',
    -8 => '-8',
    -7 => '-7',
    -6 => '-6',
    -5 => '-5',
    -4 => '-4',
    -3 => '-3',
    -2 => '-2',
    -1 => '-1',
    1 => '(GMT + 1) Madrid',
    2 => '(GMT + 2) Athens',
    3 => '(GMT + 3) Moscow',
    4 => '(GMT + 4) Kabul',
    5 => '(GMT + 5) Ekaterinburg',
    6 => '(GMT + 6) Astana',
    7 => '(GMT + 7) Bangkok',
    8 => '(GMT + 8) Perth',
    9 => '(GMT + 9) Seol',
    10 => '(GMT + 10) Brisbane',
    11 => '(GMT + 11) Solomone Is.',
    12 => '(GMT + 12) Auckland',
  ),
  'dom_timezones_extra' => 
  array (
    -12 => '(GMT-12) International Date Line West',
    -11 => '(GMT-11) Midway Island, Samoa',
    -10 => '(GMT-10) Hawaii',
    -9 => '(GMT-9) Alaska',
    -8 => '(GMT-8) (PST)',
    -7 => '(GMT-7) (MST)',
    -6 => '(GMT-6) (CST)',
    -5 => '(GMT-5) (EST)',
    -4 => '(GMT-4) Santiago',
    -3 => '(GMT-3) Buenos Aires',
    -2 => '(GMT-2) Mid-Atlantic',
    -1 => '(GMT-1) Azores',
    1 => '(GMT+1) Madrid',
    2 => '(GMT+2) Athens',
    3 => '(GMT+3) Moscow',
    4 => '(GMT+4) Kabul',
    5 => '(GMT+5) Ekaterinburg',
    6 => '(GMT+6) Astana',
    7 => '(GMT+7) Bangkok',
    8 => '(GMT+8) Perth',
    9 => '(GMT+9) Seol',
    10 => '(GMT+10) Brisbane',
    11 => '(GMT+11) Solomone Is.',
    12 => '(GMT+12) Auckland',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => 'Non è uguale a',
    'Equals' => 'Uguali',
    'Less Than' => 'è meno di',
    'More Than' => 'è più di',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => 'è meno di',
    'More Than' => 'era più di',
  ),
  'duration_intervals' => 
  array (
    15 => '15',
    30 => '30',
    45 => '45',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '',
    'active' => 'Attivo',
    'inactive' => 'Non attivo',
  ),
  'employee_status_dom' => 
  array (
    'Active' => 'Attivo',
    'Leave of Absence' => 'In aspettativa',
    'Terminated' => 'Licenziato',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => 'Attivo',
    'Inactive' => 'Non attivo',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => 'Diretta',
    'Rollup' => 'Rollup',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => 'Tessile',
    'Banking' => 'Banca',
    'Biotechnology' => 'Biotecnologie',
    'Chemicals' => 'Industria Chimica',
    'Communications' => 'Comunicazioni',
    'Construction' => 'Costruzioni',
    'Consulting' => 'Consulenza',
    'Education' => 'Istruzione',
    'Electronics' => 'Informatica - Elettronica',
    'Energy' => 'Energia',
    'Engineering' => 'Ingegneria',
    'Entertainment' => 'Cultura-Stampa',
    'Environmental' => 'Ambiente',
    'Finance' => 'Finanza',
    'Government' => 'Pubblica Amministratione',
    'Healthcare' => 'Sanità',
    'Hospitality' => 'Alberghiero',
    'Insurance' => 'Assicurazione',
    'Machinery' => 'Industria Meccanica',
    'Manufacturing' => 'Industria Manifatturiera',
    'Media' => 'Media',
    'Not For Profit' => 'No Profit',
    'Other' => 'Altro',
    'Recreation' => 'Ricreazione',
    'Retail' => 'Commercio Retail',
    'Shipping' => 'Trasporti e Logistica:',
    'Technology' => 'Tecnologico',
    'Telecommunications' => 'Telecomunicazioni',
    'Transportation' => 'Viaggi e turismo',
    'Utilities' => 'Servizi e utility',
  ),
  'language_pack_name' => 'IT Italiano',
  'layouts_dom' => 
  array (
    'Invoice' => 'Fattura',
    'Standard' => 'Proposta',
    'Terms' => 'Termini di Pagamento',
  ),
  'lead_source_dom' => 
  array (
    '' => '',
    'Cold Call' => 'Chiamata a Freddo',
    'Conference' => 'Conferenza',
    'Direct Mail' => 'Direct Mail',
    'Email' => 'Email',
    'Employee' => 'Dipendente',
    'Existing Customer' => 'Cliente Esistente',
    'Other' => 'Altro',
    'Partner' => 'Partner',
    'Public Relations' => 'Pubbliche Relazioni',
    'Self Generated' => 'Autogenerato',
    'Trade Show' => 'Fiera',
    'Web Site' => 'Sito web',
    'Word of mouth' => 'Passaparola',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'Assigned' => 'Assegnato',
    'Converted' => 'Convertito',
    'Dead' => 'Perso',
    'In Process' => 'In Esecuzione',
    'New' => 'Nuovo',
    'Recycled' => 'Recuperato',
  ),
  'lead_status_noblank_dom' => 
  array (
    'Assigned' => 'Assegnato',
    'Converted' => 'Convertito',
    'Dead' => 'Perso',
    'In Process' => 'In Esecuzione',
    'New' => 'Nuovo',
    'Recycled' => 'Recuperato',
  ),
  'meeting_status_dom' => 
  array (
    'Held' => 'Effettuata',
    'Not Held' => 'Non Effettuata',
    'Planned' => 'Pianificata',
  ),
  'messenger_type_dom' => 
  array (
    '' => '',
    'AOL' => 'AOL',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
  ),
  'moduleList' => 
  array (
    'Bugs' => 'Bug Tracker',
    'Cases' => 'Reclami',
    'FAQ' => 'FAQ',
    'Home' => 'Home',
    'KBDocuments' => 'Knowledge Base',
    'Newsletters' => 'Newsletters',
    'Notes' => 'Note',
    'Teams' => 'Gruppi',
    'Users' => 'Utenti',
  ),
  'moduleListSingular' => 
  array (
    'Bugs' => 'Bug',
    'Cases' => 'Reclami',
    'Home' => 'Home',
    'Notes' => 'Note',
    'Teams' => 'Team',
    'Users' => 'Utente',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => 'é',
    'in' => 'è uno dei',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Business Decision Maker',
    'Business Evaluator' => 'Valutatore Business',
    'Executive Sponsor' => 'Sponsor Esecutivo',
    'Influencer' => 'Influencer',
    'Other' => 'Altro',
    'Primary Decision Maker' => 'Decision maker principale',
    'Technical Decision Maker' => 'Decision Maker Tecnico',
    'Technical Evaluator' => 'Valutatore Tecnico',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => 'Business esistente',
    'New Business' => 'Nuovo affare',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => 'Annullato',
    'Confirmed' => 'Confermato',
    'On Hold' => 'In Attesa',
    'Pending' => 'In sospeso',
    'Shipped' => 'Inviato',
  ),
  'payment_terms' => 
  array (
    '' => '',
    'Net 15' => '15 gg',
    'Net 30' => '30 gg',
  ),
  'pricing_formula_dom' => 
  array (
    'Fixed' => 'Prezzo fisso',
    'IsList' => 'Come listino',
    'PercentageDiscount' => 'Sconto da listino',
    'PercentageMarkup' => 'Margine di profitto sul costo',
    'ProfitMargin' => 'Margine di profitto',
  ),
  'product_category_dom' => 
  array (
    '' => '',
    'Accounts' => 'Aziende',
    'Activities' => 'Attività',
    'Bug Tracker' => 'Bug Tracker',
    'Calendar' => 'Calendario',
    'Calls' => 'Chiamate',
    'Campaigns' => 'Campagne',
    'Cases' => 'Reclami',
    'Contacts' => 'Contatti',
    'Currencies' => 'Valute',
    'Dashboard' => 'Grafici',
    'Documents' => 'Documenti',
    'Emails' => 'Email',
    'Feeds' => 'Feeds',
    'Forecasts' => 'Previsioni',
    'Help' => 'Help',
    'Home' => 'Home',
    'Leads' => 'Leads',
    'Meetings' => 'Riunioni',
    'Notes' => 'Note',
    'Opportunities' => 'Opportunità',
    'Outlook Plugin' => 'Plugin Outlook',
    'Product Catalog' => 'Catalogo Prodotti',
    'Products' => 'Prodotti',
    'Projects' => 'Progetti',
    'Quotes' => 'Offerte',
    'RSS' => 'RSS',
    'Releases' => 'Releases',
    'Studio' => 'Studio',
    'Upgrade' => 'Aggiornamento',
    'Users' => 'Utenti',
  ),
  'product_status_dom' => 
  array (
    'Orders' => 'Ordinato',
    'Quotes' => 'Quotato',
    'Ship' => 'Inviato',
  ),
  'product_status_quote_key' => 'Offerte',
  'product_template_status_dom' => 
  array (
    'Available' => 'Disponibile',
    'Unavailable' => 'Non disponibile',
  ),
  'project_task_priority_options' => 
  array (
    'High' => 'Alta',
    'Low' => 'Bassa',
    'Medium' => 'Media',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => 'Completato',
    'Deferred' => 'Rimandato',
    'In Progress' => 'In Corso',
    'Not Started' => 'Non iniziato',
    'Pending Input' => 'In attesa di azione',
  ),
  'project_task_utilization_options' => 
  array (
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => 'Predefinito',
    'exempt' => 'Suppression List - Per Id',
    'exempt_address' => 'Suppression List - Per Indirizzo Email',
    'exempt_domain' => 'Suppression List - Per Dominio',
    'seed' => 'Seed',
    'test' => 'Test',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(X) Moltiplicato per',
    '+' => '(+) Più',
    '-' => '(-) Meno',
    '/' => '(/) Diviso per',
  ),
  'quote_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Business Decision Maker',
    'Business Evaluator' => 'Valutatore Business',
    'Executive Sponsor' => 'Sponsor Esecutivo',
    'Influencer' => 'Influencer',
    'Other' => 'Altro',
    'Primary Decision Maker' => 'Decision maker principale',
    'Technical Decision Maker' => 'Decision Maker Tecnico',
    'Technical Evaluator' => 'Valutatore Tecnico',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => 'Chiuso Accettato',
    'Closed Dead' => 'Chiuso Morto',
    'Closed Lost' => 'Chiuso Perso',
    'Confirmed' => 'Confermato',
    'Delivered' => 'Consegnato',
    'Draft' => 'Bozza',
    'Negotiation' => 'Negoziazione',
    'On Hold' => 'In Attesa',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => 'Ordine',
    'Quotes' => 'Offerta',
  ),
  'record_type_display' => 
  array (
    'Accounts' => 'Azienda',
    'Bugs' => 'Bug',
    'Cases' => 'Reclamo',
    'Contacts' => 'Contatti',
    'Leads' => 'Lead',
    'Opportunities' => 'Opportunità',
    'ProductTemplates' => 'Prodotto',
    'Project' => 'Progetto',
    'ProjectTask' => 'Compito di Progetto',
    'Quotes' => 'Offerta',
    'Tasks' => 'Compito',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => 'Azienda',
    'Bugs' => 'Bug',
    'Calls' => 'Chiamata',
    'Cases' => 'Reclamo',
    'Contacts' => 'Contatto',
    'Contracts' => 'Contratto',
    'Emails' => 'Email',
    'Leads' => 'Lead',
    'Meetings' => 'Riunione',
    'Opportunities' => 'Opportunità',
    'ProductTemplates' => 'Prodotto',
    'Products' => 'Prodotto',
    'Project' => 'Progetto',
    'ProjectTask' => 'Compito di Progetto',
    'Quotes' => 'Offerta',
  ),
  'reminder_max_time' => '3600',
  'reminder_time_options' => 
  array (
    60 => '1 minuto prima',
    300 => '5 minuti prima',
    600 => '10 minuti prima',
    900 => '15 minuti prima',
    1800 => '30 minuti prima',
    3600 => '1 ora prima',
  ),
  'sales_probability_dom' => 
  array (
    'Closed Lost' => '',
    'Closed Won' => '100',
    'Id. Decision Makers' => '40',
    'Needs Analysis' => '25',
    'Negotiation/Review' => '80',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Prospecting' => '10',
    'Qualification' => '20',
    'Value Proposition' => '30',
  ),
  'sales_stage_dom' => 
  array (
    'Closed Lost' => 'Chiuso Perso',
    'Closed Won' => 'Chiuso vinto',
    'Id. Decision Makers' => 'Id. Decision Makers',
    'Needs Analysis' => 'Analisi dei bisogni',
    'Negotiation/Review' => 'Negoazione/Review',
    'Perception Analysis' => 'Percezione Analisi',
    'Proposal/Price Quote' => 'Proposta economica',
    'Prospecting' => 'Prospettiva',
    'Qualification' => 'Qualificazione',
    'Value Proposition' => 'Proposta di valore',
  ),
  'salutation_dom' => 
  array (
    '' => '',
    'Dr.' => 'Dr.',
    'Mr.' => 'Sig.',
    'Mrs.' => 'Sig.na',
    'Ms.' => 'Sig.ra',
    'Prof.' => 'Prof.',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => 'Completato',
    'failed' => 'Fallito',
    'in progress' => 'In Corso',
    'no curl' => 'Non eseguito: nessun cURL disponibile',
    'not run' => 'Tempo di esecuzione passato, Non Eseguito',
    'ready' => 'Pronto',
  ),
  'source_dom' => 
  array (
    '' => '',
    'Forum' => 'Forum',
    'InboundEmail' => 'Email',
    'Internal' => 'Interno',
    'Web' => 'Web',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => 'Un anno',
    '+2 years' => 'Due anni',
    '+6 months' => 'Sei mesi',
  ),
  'task_priority_dom' => 
  array (
    'High' => 'Alta',
    'Low' => 'Bassa',
    'Medium' => 'Media',
  ),
  'task_status_dom' => 
  array (
    'Completed' => 'Completato',
    'Deferred' => 'Rimandato',
    'In Progress' => 'In Corso',
    'Not Started' => 'Non iniziato',
    'Pending Input' => 'In attesa di azione',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => 'Non Imponibile',
    'Taxable' => 'Imponibile',
  ),
  'tselect_type_dom' => 
  array (
    14440 => '4 ore',
    28800 => '8 ore',
    43200 => '12 ore',
    86400 => '1 giorno',
    172800 => '2 giorni',
    259200 => '3 giorni',
    345600 => '4 giorni',
    432000 => '5 giorni',
    604800 => '1 settimana',
    1209600 => '2 settimane',
    1814400 => '3 settimane',
    2592000 => '30 giorni',
    5184000 => '60 giorni',
    7776000 => '90 giorni',
    10368000 => '120 giorni',
    12960000 => '150 giorni',
    15552000 => '180 giorni',
  ),
  'user_status_dom' => 
  array (
    'Active' => 'Attivo',
    'Inactive' => 'Inattivo',
  ),
  'wflow_action_datetime_type_dom' => 
  array (
    'Existing Value' => 'Valore attuale',
    'Triggered Date' => 'Data calcolata',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => 'Nuovo record',
    'update' => 'Aggiorna record',
    'update_rel' => 'Aggiorna record collegato',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => 'BCC:',
    'cc' => 'CC:',
    'to' => 'A:',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => 'BCC:',
    'cc' => 'CC:',
    'invite_only' => '(Solo invito)',
    'to' => 'A:',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => 'A:',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => 'Sposta il dropdown avanti di',
    'retreat' => 'Sposta il dropdown indietro di',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => 'Team di utenti connessi',
    'team_id' => 'Team attuale di Record calcolati',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => 'Utente assegnato al record calcolato',
    'created_by' => 'Utente che ha creato il record calcolato',
    'current_user' => 'Utente connesso',
    'modified_user_id' => 'Ultimo utente che ha modificato il record calcolato',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => 'Email',
    'Invite' => 'Invito',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => 'Nuovo Valore',
    'past' => 'Vecchio Valore',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => 'Azioni poi Avvisi',
    'alerts_actions' => 'Avvisi poi Azioni',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => 'Record nuovi ed esistenti',
    'New' => 'Solo nuovi records',
    'Update' => 'Solo records esistenti',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => 'Tutti quelli collegati',
    'filter' => 'Filtro collegato',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => 'Manager dell´Utente',
    'Self' => 'Utente',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => 'Tutti quelli collegati',
    'any' => 'Qualsiasi collegato',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => 'Opzioni Avanzate',
    'Basic' => 'Opzioni Base',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => 'Modello personalizzato',
    'Normal Message' => 'Messaggio normale',
    'System Default' => 'Predefinito da sistema',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => 'Quando il record viene salvato',
    'Time' => 'Quando il tempo è scaduto',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => 'Utenti Attuali',
    'rel_user' => 'Utenti Collegati',
    'rel_user_custom' => 'Utente Personalizzato Collegato',
    'specific_role' => 'Ruolo Specifico',
    'specific_team' => 'Team Specifico',
    'specific_user' => 'Utente Specifico',
  ),
);

