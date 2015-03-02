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
  'ERR_DELETE_RECORD' => 'Per eliminare l´azienda deve essere specificato il numero del record.',
  'ERR_EMAIL_INCORRECT' => 'Fornire un indirizzo email valido per poter creare e inviare la password.',
  'ERR_EMAIL_NOT_SENT_ADMIN' => 'Il sistema non è in grado di processare la tua richiesta. Si prega di controllare:',
  'ERR_EMAIL_NO_OPTS' => 'Impossibile trovare impostazioni ottimali per la Posta in Arrivo',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Si prega di confermare la password nuova.',
  'ERR_ENTER_NEW_PASSWORD' => 'Si prega di inserire la password nuova.',
  'ERR_ENTER_OLD_PASSWORD' => 'Si prega di inserire la password attuale.',
  'ERR_IE_FAILURE1' => '[Clicca qui per ritornare]',
  'ERR_IE_FAILURE2' => 'Ci sono dei problemi nella connessione alla Casella di Posta. Controlla le impostazioni e riprova.',
  'ERR_IE_MISSING_REQUIRED' => 'Le impostazioni della posta in arrivo sono incomplete. Controlla la configurazione e riprova. Se non vuoi usare la posta in arrivo rimuovi la configurazione.',
  'ERR_INVALID_PASSWORD' => 'Devi specificare un nome utente e una password valide.',
  'ERR_LAST_ADMIN_1' => 'Il nome utente',
  'ERR_LAST_ADMIN_2' => 'è l´ultimo utente amministratore.  Ci deve essere almeno un utente amministrativo.<br>Verifica le impostazioni di Amministrazione.',
  'ERR_NO_LOGIN_MOBILE' => 'La prima volta che si accede a questa applicazione si deve accedere con un browser non-mobile o in un modo normale. Si prega di ritornare con un browser full o si prega di cliccare nel link qui sotto. Ci scusiamo per ogni inconveniente.',
  'ERR_PASSWORD_CHANGE_FAILED_1' => 'Cambio password utente non riuscito per',
  'ERR_PASSWORD_CHANGE_FAILED_2' => 'fallito. Deve essere inserita la nuova password',
  'ERR_PASSWORD_CHANGE_FAILED_3' => '. La nuova password non è valida',
  'ERR_PASSWORD_INCORRECT_OLD_1' => 'Vecchia password non corretta per l´utente',
  'ERR_PASSWORD_INCORRECT_OLD_2' => '. Reinserisci la password.',
  'ERR_PASSWORD_LINK_EXPIRED' => 'Il collegamento è scaduto, si prega di crearne uno nuovo.',
  'ERR_PASSWORD_MISMATCH' => 'Le password non combaciano.',
  'ERR_PASSWORD_USERNAME_MISSMATCH' => 'Devono essere specificati un nome utente e un indirizzo email validi.',
  'ERR_REASS_DIFF_USERS' => 'Si prega di selezionare un assegnazione to user che sia diversa dall assegnazione from user.',
  'ERR_REASS_SELECT_MODULE' => 'Si prega di tornare indietro a selezionare almeno un modulo.',
  'ERR_RECIPIENT_EMAIL' => 'Indirizzi Email dei destinatari.',
  'ERR_REENTER_PASSWORDS' => 'Per favore reinserisci la password.  La ´nuova password´ e la ´vecchia password´ non corrispondono.',
  'ERR_REPORT_LOOP' => 'Il sistema ha rilevato un ciclo senza uscita. Un utente non può dipendere da sè stesso, nè un superiore dipendere da un subordinato.',
  'ERR_RULES_NOT_MET' => 'La password inserita non rispetta i requisiti imposti. Si prega di riprovare.',
  'ERR_SERVER_SMTP_EMPTY' => 'Il sistema non è in grado di inviare la email all´utente. Si prega di controllare si Mail Transfer Agent nelle Importazioni Email.',
  'ERR_SERVER_STATUS' => 'Stato del server',
  'ERR_SMTP_URL_SMTP_PORT' => 'ULR server SMTP e la Porta',
  'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'SMTP Username e  SMTP Password',
  'ERR_USER_INFO_NOT_FOUND' => 'Informazione Utente non trovata',
  'ERR_USER_IS_LOCKED_OUT' => 'L´utente è stato bloccato da Sugar e non può accedere al sistema usando la propria password.',
  'ERR_USER_NAME_EXISTS_1' => 'Nome Utente',
  'ERR_USER_NAME_EXISTS_2' => 'esiste già. I Nomi Utente duplicati non sono ammessi.<br>Modificare il Nome Utente.',
  'LBL_ACCOUNT_NAME' => 'Nome Azienda',
  'LBL_ADDRESS' => 'Indirizzo',
  'LBL_ADDRESS_CITY' => 'Indirizzo, Comune',
  'LBL_ADDRESS_COUNTRY' => 'Indirizzo, Nazione',
  'LBL_ADDRESS_INFORMATION' => 'Informazioni sull´indirizzo',
  'LBL_ADDRESS_POSTALCODE' => 'Indirizzo, CAP',
  'LBL_ADDRESS_STATE' => 'Indirizzo, Provincia',
  'LBL_ADDRESS_STREET' => 'Indirizzo, Via',
  'LBL_ADMIN' => 'Amministratore',
  'LBL_ADMIN_DESC' => 'L´utente può accedere dalla pagina di Amministrazione a tutti i record, a prescindere dal gruppo di appartenenza.',
  'LBL_ADMIN_USER' => 'Utente Amministratore del Sistema',
  'LBL_ADVANCED' => 'Avanzate',
  'LBL_AFFECTED' => 'colpiti',
  'LBL_ANY_ADDRESS' => 'Altri Indirizzi:',
  'LBL_ANY_EMAIL' => 'Email alternativo',
  'LBL_ANY_PHONE' => 'Telefono alternativo',
  'LBL_APPLY_OPTIMUMS' => 'Applica ottimizzazioni',
  'LBL_ASSIGN_PRIVATE_TEAM' => '(gruppo privato in salvataggio)',
  'LBL_ASSIGN_TEAM' => 'Assegnato al Gruppo',
  'LBL_ASSIGN_TO_USER' => 'Assegna all´Utente',
  'LBL_AUTHENTICATE_ID' => 'ID Autenticazione',
  'LBL_BASIC' => 'Impostazioni Posta in Arrivo',
  'LBL_BUTTON_CREATE' => 'Nuovo',
  'LBL_BUTTON_EDIT' => 'Modifica',
  'LBL_CALENDAR_OPTIONS' => 'Opzioni Calendario',
  'LBL_CANCEL' => 'Annulla',
  'LBL_CANNOT_SEND_PASSWORD' => 'Impossibile inviare la password',
  'LBL_CERT' => 'Validazione Certificato',
  'LBL_CERT_DESC' => 'Forza la validazione di un Certificato di Sicurezza sul server - non serve se il certificato è auto-firmato.',
  'LBL_CHANGE_PASSWORD' => 'Cambia Password',
  'LBL_CHANGE_PASSWORD_TITLE' => 'Cambiare Password',
  'LBL_CHANGE_SYSTEM_PASSWORD' => 'Si prega di fornire una nuova password.',
  'LBL_CHECKMARK' => 'Segno di spunta',
  'LBL_CHOOSE_A_KEY' => 'Scegli una password per impedire l´inserimento non autorizzato nella tua agenda',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Scegli il tuo provider Email:',
  'LBL_CHOOSE_WHICH' => 'Scegli quali schede sono visibili',
  'LBL_CITY' => 'Comune',
  'LBL_CLEAR_BUTTON_TITLE' => 'Cancella',
  'LBL_CONFIRM_PASSWORD' => 'Conferma Nuova Password',
  'LBL_CONFIRM_REGULAR_USER' => 'È stato modificato il tipo utente da Amministratore del sistema a Utente Normale. Dopo il salvataggio di questa modifica, l´utente non avrà più i privilegi amministrativi.\\n\\nCliccare OK per procedere.\\nClicare Annulla per tornare al record.',
  'LBL_COUNTRY' => 'Nazione',
  'LBL_CREATED_BY_NAME' => 'Creato Da',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_CURRENCY_EXAMPLE' => 'Esempio Aspetto Valuta',
  'LBL_CURRENCY_SIG_DIGITS' => 'Cifre Decimali Significative',
  'LBL_CURRENCY_SIG_DIGITS_DESC' => 'Numero di cifre decimali da visualizzare',
  'LBL_CURRENCY_TEXT' => 'Scegli la valuta predefinita',
  'LBL_DATE_ENTERED' => 'Data Creazione',
  'LBL_DATE_FORMAT' => 'Formato Data',
  'LBL_DATE_FORMAT_TEXT' => 'Imposta la modalità di visualizzazione delle date',
  'LBL_DATE_MODIFIED' => 'Data Modifica',
  'LBL_DECIMAL_SEP' => 'Separatore decimale',
  'LBL_DECIMAL_SEP_TEXT' => 'Carattere usato per separare i decimali',
  'LBL_DEFAULT_PRIMARY_TEAM' => 'Gruppo Primario di default',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Utenti',
  'LBL_DEFAULT_TEAM' => 'Gruppo predefinito',
  'LBL_DEFAULT_TEAM_TEXT' => 'I Gruppi che si possono visualizzare di default nei records sono quelli a cui tu appartieni.',
  'LBL_DELETED' => 'Eliminato',
  'LBL_DELETE_GROUP_CONFIRM' => 'Sei sicuro di voler eliminare questo Gruppo utente? Clicca OK per eliminare il record Utente.',
  'LBL_DELETE_PORTAL_CONFIRM' => 'Sei sicuro di voler eliminare questo Utente Portale API? Clicca OK per eliminare il record Utente.',
  'LBL_DELETE_USER' => 'Elimina Utente',
  'LBL_DELETE_USER_CONFIRM' => 'Clicca OK per elimnare il record Utente. Dopo aver cliccato OK, avrai la possibilità di riassegnare i records assegnati all´utente ad un altro utente.',
  'LBL_DEPARTMENT' => 'Dipartimento',
  'LBL_DESCRIPTION' => 'Descrizione',
  'LBL_DISPLAY_TABS' => 'Mostra Schede',
  'LBL_DOWNLOADS' => 'Downloads',
  'LBL_DST_INSTRUCTIONS' => '(+DST) indica che rispetti l´ora legale',
  'LBL_EAPM_SUBPANEL_TITLE' => 'Account esterni',
  'LBL_EDIT' => 'Modifica',
  'LBL_EDITLAYOUT' => 'Modifica Layout',
  'LBL_EDIT_TABS' => 'Modifica Schede',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAILS' => 'Email',
  'LBL_EMAIL_CHARSET' => 'Set di caratteri per la Posta in Uscita',
  'LBL_EMAIL_EDITOR_OPTION' => 'Formato composizione',
  'LBL_EMAIL_GMAIL_DEFAULTS' => 'Precompilare Defaults Gmail',
  'LBL_EMAIL_INBOUND_TITLE' => 'Impostazioni Posta in Arrivo',
  'LBL_EMAIL_LINK_TYPE' => 'Programma di Posta',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Client Email del Sistema di Default</b> : client email di default impostato dall´amministratore del sistema.<br><b>Client Email SugarCRM</b> : client email nel modulo Email di Sugar.<br><b>Client Email Esterno</b> : altri client email, come Microsoft Outlook.',
  'LBL_EMAIL_NOT_SENT' => 'Il sistema non è in grado di processare la tua richiesta. Si prega di contattare l´amministratore del sistema.',
  'LBL_EMAIL_OTHER' => 'Email [2]',
  'LBL_EMAIL_OUTBOUND_TITLE' => 'Impostazioni Posta in Uscita',
  'LBL_EMAIL_PROVIDER' => 'Provider Email',
  'LBL_EMAIL_SHOW_COUNTS' => 'Mostra conteggio messaggi ?',
  'LBL_EMAIL_SIGNATURE_ERROR1' => 'La firma richiede un nome',
  'LBL_EMAIL_SMTP_SSL' => 'Attiva SMTP su SSL',
  'LBL_EMAIL_TEMPLATE_MISSING' => 'Non è stato selezionato alcun modello per la email che verrà inviata all´utente contenente la password. Si prega di selezionare un modello email nella pagina di Gestione Password.',
  'LBL_EMPLOYEE_INFORMATION' => 'Informazioni Dipendente',
  'LBL_EMPLOYEE_STATUS' => 'Stato Dipendenti',
  'LBL_ERROR' => 'Errore:',
  'LBL_EXCHANGE_SMTPPASS' => 'Password Exchange:',
  'LBL_EXCHANGE_SMTPPORT' => 'Porta Server Exchange:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange:',
  'LBL_EXCHANGE_SMTPUSER' => 'Nome Utente Exchange:',
  'LBL_EXPORT_CHARSET' => 'Set di Caratteri per Importazione/Esportazione',
  'LBL_EXPORT_CHARSET_DESC' => 'Scegli l´insieme di caratteri che volete utilizzare. Questa impostazione verrà usata durante l´importazione e l´esportazione di dati, ´invio di email, la generazione di documenti PDF e biglietti da visita.',
  'LBL_EXPORT_CREATED_BY' => 'Creato da ID',
  'LBL_EXPORT_DELIMITER' => 'Delimitatore per esportazione',
  'LBL_EXPORT_DELIMITER_DESC' => 'Specifica il/i carattere/i usato/i per delimitare i dati esportati.',
  'LBL_EXTERNAL_AUTH_ONLY' => 'Autentica questo utente solo attraverso',
  'LBL_EXT_AUTHENTICATE' => 'Autenticazione Esterna',
  'LBL_FAX' => 'Fax',
  'LBL_FAX_PHONE' => 'Fax',
  'LBL_FDOW' => 'Primo giorno della settimana',
  'LBL_FDOW_TEXT' => 'Primo giorno visualizzato nella vista Settimanale, Mensile o Annuale',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_FIND_OPTIMUM_MSG' => '<br>Sto cercando le migliori impostazioni per la connessione.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Cerca la Configurazione Ottimale',
  'LBL_FIRST_NAME' => 'Nome',
  'LBL_FORCE' => 'Forza disattivazione',
  'LBL_FORCE_DESC' => 'Alcuni server IMAP/POP3 richiedono impostazioni speciali. Questo forza la disattivazione di un´opzione (ad es. /notls)',
  'LBL_FOUND_OPTIMUM_MSG' => '<br>Impostazioni ottimali trovate. Premi il seguente pulsante per applicarle alla tua Casella di Posta.',
  'LBL_GENERATE_PASSWORD' => 'Azzera Password',
  'LBL_GENERATE_PASSWORD_BUTTON_KEY' => 'G',
  'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Azzera Password',
  'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Azzera Password [Alt+G]',
  'LBL_GMAIL_SMTPPASS' => 'Password Gmail:',
  'LBL_GMAIL_SMTPUSER' => 'Indirizzo Email Gmail:',
  'LBL_GROUP_DESC' => 'Questo utente sarà utilizzato solo per assegnare degli elementi al gruppo attraverso le funzionalità di Email in entrata. Questo utente non può accedere attraverso l´interfaccia web di Sugar.',
  'LBL_GROUP_USER' => 'Gruppo Utente',
  'LBL_GROUP_USER_STATUS' => 'Gruppo Utente',
  'LBL_HELP' => 'Aiuto',
  'LBL_HIDEOPTIONS' => 'Nascondi Opzioni',
  'LBL_HIDE_TABS' => 'Nascondi Schede',
  'LBL_HOME_PHONE' => 'Telefono Personale',
  'LBL_ICAL_PUB_URL' => 'URL Integrazione iCal',
  'LBL_ICAL_PUB_URL_HELP' => 'Utilizza questo URL per registrarsi al calendario di Sugar all&#39;interno di iCal.',
  'LBL_INBOUND_TITLE' => 'Informazioni Profilo',
  'LBL_IS_ADMIN' => 'E´ un amministratore',
  'LBL_IS_GROUP' => 'è gruppo',
  'LBL_LANGUAGE' => 'Lingua',
  'LBL_LAST_ADMIN_NOTICE' => 'Hai selezionato te stesso. Non è possibile cambiare il Tipo Utente o lo Stato di se stessi.',
  'LBL_LAST_NAME' => 'Cognome',
  'LBL_LAST_NAME_SLASH_NAME' => 'Cognome/Nome',
  'LBL_LAYOUT_OPTIONS' => 'Opzioni Aspetto',
  'LBL_LDAP' => 'LDAP',
  'LBL_LDAP_AUTHENTICATION' => 'Autenticazione LDAP',
  'LBL_LDAP_ERROR' => 'Errore LDAP: Contatta l´amministratore',
  'LBL_LDAP_EXTENSION_ERROR' => 'Errore LDAP: Estensione non caricata',
  'LBL_LIST_ACCEPT_STATUS' => 'Accetta Stato',
  'LBL_LIST_ADMIN' => 'Amministratore',
  'LBL_LIST_DEPARTMENT' => 'Dipartimento',
  'LBL_LIST_DESCRIPTION' => 'Descrizione',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_FORM_TITLE' => 'Elenco Utenti',
  'LBL_LIST_GROUP' => 'Gruppo',
  'LBL_LIST_LAST_NAME' => 'Nome',
  'LBL_LIST_MEMBERSHIP' => 'Appartenenza',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_LIST_PASSWORD' => 'Password',
  'LBL_LIST_PRIMARY_PHONE' => 'Telefono Principale',
  'LBL_LIST_STATUS' => 'Stato',
  'LBL_LIST_TITLE' => 'Titolo',
  'LBL_LIST_USER_NAME' => 'Nome utente',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Formato Visualizzazione Nome',
  'LBL_LOCALE_DESC_FIRST' => '[Primo]',
  'LBL_LOCALE_DESC_LAST' => '[Ultimo]',
  'LBL_LOCALE_DESC_SALUTATION' => '[Titolo]',
  'LBL_LOCALE_DESC_TITLE' => '[Titolo]',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Esempio',
  'LBL_LOCALE_NAME_FORMAT_DESC' => 'Imposta come verranno mostrati i nomi',
  'LBL_LOCALE_NAME_FORMAT_DESC_2' => '<i>"s" Titolo<br>"f" Nome<br>"l" Cognome</i>',
  'LBL_LOGGED_OUT_1' => 'Sei stato disconnesso. Per ricollegarti nuovamente clicca',
  'LBL_LOGGED_OUT_2' => 'qui',
  'LBL_LOGGED_OUT_3' => '.',
  'LBL_LOGIN' => 'Login',
  'LBL_LOGIN_ADMIN_CALL' => 'Si prega di contattare l´amministratore del sistema.',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Troppi tentativi di accesso.',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_BUTTON_LABEL' => 'Login',
  'LBL_LOGIN_BUTTON_TITLE' => 'Login [Alt+L]',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Password dimenticata?',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Puoi tentare di accedere nuovamente',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'giorni.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 'h.',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'min.',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'sec.',
  'LBL_LOGIN_OPTIONS' => 'Opzioni',
  'LBL_LOGIN_SUBMIT' => 'Invio',
  'LBL_LOGIN_WELCOME_TO' => 'Benvenuto in',
  'LBL_MAILBOX' => 'Cartella Monitorata',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_MAILBOX_SSL_DESC' => 'Utilizza SSL nelle connessioni. Se non funziona, verifica che il PHP sia installato con l´opzione "--with-imap-ssl"',
  'LBL_MAILBOX_TYPE' => 'Azioni Possibili',
  'LBL_MAILMERGE' => 'Stampa Unione',
  'LBL_MAILMERGE_TEXT' => 'Abilita Stampa Unione (la stampa unione deve essere abilitata anche a livello globale dall´amministratore)',
  'LBL_MAIL_FROMADDRESS' => 'Rispondi a Indirizzo',
  'LBL_MAIL_FROMNAME' => 'Rispondi a Nome',
  'LBL_MAIL_OPTIONS_TITLE' => 'Opzioni E-mail',
  'LBL_MAIL_SENDTYPE' => 'Mail Transfer Agent',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Usa Autenticazione SMTP ?',
  'LBL_MAIL_SMTPPASS' => 'SMTP Password',
  'LBL_MAIL_SMTPPORT' => 'SMTP Port',
  'LBL_MAIL_SMTPSERVER' => 'SMTP Server',
  'LBL_MAIL_SMTPTYPE' => 'Tipo SMTP Serve:',
  'LBL_MAIL_SMTPUSER' => 'SMTP Username',
  'LBL_MAIL_SMTP_SETTINGS' => 'Specificazione Server SMTP',
  'LBL_MARK_READ' => 'Lascia una copia dei messaggi sul server',
  'LBL_MARK_READ_DESC' => 'Importa e segna i messaggi "letti" sul server; non cancellare.',
  'LBL_MARK_READ_NO' => 'Email segnata come cancellata dopo l´importazione',
  'LBL_MARK_READ_YES' => 'Email lasciata sul server dopo l´importazione',
  'LBL_MAX_SUBTAB' => 'Numero dei sottopannelli',
  'LBL_MAX_SUBTAB_DESCRIPTION' => 'Numero dei sottopannelli mostrati per ogni scheda prima di vedere il menù con le voci rimanenti.',
  'LBL_MAX_TAB' => 'Numero di Schede',
  'LBL_MAX_TAB_DESCRIPTION' => 'Numero di schede mostrate all´inizio della pagina prima di vedere il menù con le voci rimanenti.',
  'LBL_MESSENGER_ID' => 'Nome IM',
  'LBL_MESSENGER_TYPE' => 'Tipo IM',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'L´amministratore non ha ancora configurato l´account predefinito per le mail in uscita.  Impossibile inviare la mail di test.',
  'LBL_MOBILE_PHONE' => 'Telefono Cellulare',
  'LBL_MODIFIED_BY' => 'Modificato da',
  'LBL_MODIFIED_BY_ID' => 'Modificato da ID',
  'LBL_MODIFIED_USER_ID' => 'Modificato da ID',
  'LBL_MODULE_NAME' => 'Utenti',
  'LBL_MODULE_TITLE' => 'Utenti: Home',
  'LBL_MY_TEAMS' => 'I miei Gruppi',
  'LBL_NAME' => 'Nome Completo',
  'LBL_NAVIGATION_PARADIGM' => 'Paradigma di Navigazione',
  'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => 'Usa aree (Schede) raggruppate invece delle aree (Schede) dei moduli.',
  'LBL_NEW_FORM_TITLE' => 'Nuovo Utente',
  'LBL_NEW_PASSWORD' => 'Password Nuova',
  'LBL_NEW_PASSWORD1' => 'Password',
  'LBL_NEW_PASSWORD2' => 'Conferma Password',
  'LBL_NEW_USER_BUTTON_KEY' => 'N',
  'LBL_NEW_USER_BUTTON_LABEL' => 'Nuovo Utente',
  'LBL_NEW_USER_BUTTON_TITLE' => 'Nuovo Utente [Alt+N]',
  'LBL_NEW_USER_PASSWORD_1' => 'La Password è stata modificata con successo.',
  'LBL_NEW_USER_PASSWORD_2' => 'È stata inviata una email all´utente contenente la password generata dal sistema.',
  'LBL_NEW_USER_PASSWORD_3' => 'La Password è stata creata con successo.',
  'LBL_NORMAL_LOGIN' => 'Cambia in vista normale',
  'LBL_NOTES' => 'Note',
  'LBL_NUMBER_GROUPING_SEP' => 'Separatore migliaia',
  'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Carattere usato per separare le migliaia',
  'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
  'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => 'OAuth Access Tokens',
  'LBL_OFFICE_PHONE' => 'Telefono ufficio',
  'LBL_OK' => 'OK',
  'LBL_OLD_PASSWORD' => 'Password Attuale',
  'LBL_ONLY' => 'Solo',
  'LBL_ONLY_SINCE' => 'Importa solo messaggi successivi all´ultimo controllo',
  'LBL_ONLY_SINCE_DESC' => 'Utilizzando il protocollo POP3 il PHP non può distinguere i messaggi Nuovi da quelli Non Letti. Attiva questa opzione per controllare solo i messaggi arrivati dopo l´ultimo controllo. Se il server non supporta il protocollo IMAP in questo modo il controllo sarà più veloce.',
  'LBL_ONLY_SINCE_NO' => 'No. Verifica tutti i messaggi sul server.',
  'LBL_ONLY_SINCE_YES' => 'Sì.',
  'LBL_OTHER' => 'Altro',
  'LBL_OTHER_EMAIL' => 'Altra Email',
  'LBL_OTHER_PHONE' => 'Altro Telefono',
  'LBL_OWN_OPPS' => 'Nessuna opportunità',
  'LBL_OWN_OPPS_DESC' => 'Imposta a vero se questo utente non riceverà Opportunità. Dovresti ignorare questa impostazione per gli utenti non manager e comunque non coinvolti nelle attività di vendita. Questa impostazione viene usata dal modulo per le previsioni.',
  'LBL_PASSWORD' => 'Password',
  'LBL_PASSWORD_EXPIRATION_GENERATED' => 'La Password è generata dal sistema.',
  'LBL_PASSWORD_EXPIRATION_LOGIN' => 'La Password è scaduta. Si prega di fornire una nuova password.',
  'LBL_PASSWORD_EXPIRATION_TIME' => 'La Password è scaduta. Si prega di fornire una nuova password.',
  'LBL_PASSWORD_GENERATED' => 'Generata Nuova password',
  'LBL_PASSWORD_SENT' => 'Password Aggiornata',
  'LBL_PDF_FONT_NAME_DATA' => 'Carattere per il Piè di pagina',
  'LBL_PDF_FONT_NAME_DATA_TEXT' => 'Il carattere selezionato sarà applicato al testo del piè di pagina del Documento PDF',
  'LBL_PDF_FONT_NAME_MAIN' => 'Carattere per l´Intestazione e per il Corpo del Testo',
  'LBL_PDF_FONT_NAME_MAIN_TEXT' => 'Il carattere selezionato sarà applicato al testo dell´intestazione e al corpo del Documento PDF',
  'LBL_PDF_FONT_SIZE_DATA' => 'Dimensione Carattere dei Dati',
  'LBL_PDF_FONT_SIZE_DATA_TEXT' => '',
  'LBL_PDF_FONT_SIZE_MAIN' => 'Dimensione Carattere Principale',
  'LBL_PDF_FONT_SIZE_MAIN_TEXT' => '',
  'LBL_PDF_MARGIN_BOTTOM' => 'Margine Inferiore',
  'LBL_PDF_MARGIN_BOTTOM_TEXT' => '',
  'LBL_PDF_MARGIN_FOOTER' => 'Margine del Piè di pagina',
  'LBL_PDF_MARGIN_FOOTER_TEXT' => '',
  'LBL_PDF_MARGIN_HEADER' => 'Margine dell´Intestazione',
  'LBL_PDF_MARGIN_HEADER_TEXT' => '',
  'LBL_PDF_MARGIN_LEFT' => 'Margine Sinistro',
  'LBL_PDF_MARGIN_LEFT_TEXT' => '',
  'LBL_PDF_MARGIN_RIGHT' => 'Margine Destro',
  'LBL_PDF_MARGIN_RIGHT_TEXT' => '',
  'LBL_PDF_MARGIN_TOP' => 'Margine Superiore',
  'LBL_PDF_MARGIN_TOP_TEXT' => '',
  'LBL_PDF_PAGE_FORMAT' => 'Formato Pagina',
  'LBL_PDF_PAGE_FORMAT_TEXT' => 'Il formato usato per le pagine',
  'LBL_PDF_PAGE_ORIENTATION' => 'Orientamento Pagina',
  'LBL_PDF_PAGE_ORIENTATION_L' => 'Panorama',
  'LBL_PDF_PAGE_ORIENTATION_P' => 'Ritratto',
  'LBL_PDF_PAGE_ORIENTATION_TEXT' => '',
  'LBL_PDF_SETTINGS' => 'Impostazioni PDF',
  'LBL_PHONE' => 'Telefono',
  'LBL_PHONE_FAX' => 'Fax',
  'LBL_PHONE_HOME' => 'Telefono Abitazione',
  'LBL_PHONE_MOBILE' => 'Cellulare',
  'LBL_PHONE_OTHER' => 'Altro Telefono',
  'LBL_PHONE_WORK' => 'Telefono Ufficio',
  'LBL_PICK_TZ_DESCRIPTION' => 'Prima di continuare, conferma il tuo fuso orario. Potrai comunque cambiare questa impostazione i futuro.',
  'LBL_PICK_TZ_WELCOME' => 'Benvenuto nel CRM',
  'LBL_PICTURE_FILE' => 'Immagine',
  'LBL_PORT' => 'Porta del server di posta',
  'LBL_PORTAL_ONLY' => 'Solo Portale',
  'LBL_PORTAL_ONLY_DESC' => 'Uso per Portal API. Questo tipo non può accedere attraverso l´interfaccia web di Sugar.',
  'LBL_PORTAL_ONLY_USER' => 'Portal API User',
  'LBL_POSTAL_CODE' => 'C.A.P.',
  'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale',
  'LBL_PRIVATE_TEAM_FOR' => 'Gruppo privato per',
  'LBL_PROCESSING' => 'Elaborazione',
  'LBL_PROMPT_TIMEZONE' => 'Richiesta Fuso Orario',
  'LBL_PROMPT_TIMEZONE_TEXT' => 'Chiedi all´utente le informazioni sul fuso orario dopo l´autenticazione.',
  'LBL_PROSPECT_LIST' => 'Lista Obiettivo',
  'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Fornire sia un nome utente che un indirizzo email.',
  'LBL_PSW_MODIFIED' => 'ultima password cambiata',
  'LBL_PUBLISH_KEY' => 'Password per la Pubblicazione',
  'LBL_REASS_ASSESSING' => 'Valutazione',
  'LBL_REASS_BUTTON_CLEAR' => 'Superata',
  'LBL_REASS_BUTTON_CONTINUE' => 'Continua',
  'LBL_REASS_BUTTON_GO_BACK' => 'Torna Indietro',
  'LBL_REASS_BUTTON_REASSIGN' => 'Riassegna',
  'LBL_REASS_BUTTON_RESTART' => 'Ri-inizia',
  'LBL_REASS_BUTTON_RETURN' => 'Ritorna',
  'LBL_REASS_BUTTON_SUBMIT' => 'Inviata',
  'LBL_REASS_CANNOT_PROCESS' => 'Non possono essere processati:',
  'LBL_REASS_CONFIRM_REASSIGN' => 'Vuoi riassegnare tutti i record di questi utenti?',
  'LBL_REASS_CONFIRM_REASSIGN_NO' => 'No',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE' => 'Ri-assegna',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => 'Sì',
  'LBL_REASS_DESC_PART1' => 'Qui troverai tutti i record (nei moduli selezionati) assegnati ad un unico utente, e ti permetterà di riassegnarli ad un altro utente.',
  'LBL_REASS_DESC_PART2' => 'Selezionare i moduli su cui eseguire i workflows, inviare notifiche di assegnazione, e monitorare le riassegnazioni. Cliccare Avanti per continuare e riassegnare i records. Clicca Riavvia pre ricominciare.',
  'LBL_REASS_FAILED' => 'Fallita',
  'LBL_REASS_FAILED_SAVE' => 'Salvataggio del record fallito',
  'LBL_REASS_FILTERS' => 'Filtri',
  'LBL_REASS_FROM' => 'da',
  'LBL_REASS_HAVE_BEEN_UPDATED' => 'sono stati aggiornati:',
  'LBL_REASS_MOD_REASSIGN' => 'Modelli da includere nella riassegnazione:',
  'LBL_REASS_NONE' => 'Nessuno',
  'LBL_REASS_NOTES_ONE' => 'L´assegnazione dei record a te stesso non attiveranno notifiche di assegnazione.',
  'LBL_REASS_NOTES_THREE' => 'Anche se non includi l´Auditing, la data di modifica e la modifica sono aggiornate conseguentemente.',
  'LBL_REASS_NOTES_TITLE' => 'Note:',
  'LBL_REASS_NOTES_TWO' => 'Comprende Workflow, Notifiche,e Audit di monitoraggio nella riassegnazione è significativamente lento.',
  'LBL_REASS_NOT_PROCESSED' => 'non può essere processato:',
  'LBL_REASS_RECORDS_FROM' => 'record da',
  'LBL_REASS_SCRIPT_TITLE' => 'Riassegnazione Record',
  'LBL_REASS_STEP2_DESC' => 'I gruppi elencati qui sotto erano disponibili nel ´Da Gruppo Utente´, ma non nel ´A Gruppo Utente´. Tutti i records nel ´Da Gruppo Utente´ non saranno visibili nel ´A Gruppo Utente´ a meno che i valori del gruppo non siano mappati.',
  'LBL_REASS_STEP2_TITLE' => 'Gruppo Riassegnazione',
  'LBL_REASS_SUCCESSFUL' => 'Con successo',
  'LBL_REASS_SUCCESS_ASSIGN' => 'Assegnato con successo',
  'LBL_REASS_TEAMS_GOOD_MSG' => 'Il A Utente ha accesso a tutti i gruppi Da Utente. No mappatura necessaria. Reindirizzare alla prossima pagina in 5 secondi.',
  'LBL_REASS_TEAM_NO_CHANGE' => '-- Non Cambiare --',
  'LBL_REASS_TEAM_SET_TO' => 'i gruppi erano impostati in',
  'LBL_REASS_TEAM_TO' => 'Imposta Gruppi a:',
  'LBL_REASS_THE_FOLLOWING' => 'I seguenti',
  'LBL_REASS_TO' => 'a',
  'LBL_REASS_UPDATE_COMPLETE' => 'Aggiornamento completato',
  'LBL_REASS_USER_FROM' => 'Da Utente:',
  'LBL_REASS_USER_FROM_TEAM' => 'Da Gruppo Utente:',
  'LBL_REASS_USER_TO' => 'A Utente:',
  'LBL_REASS_USER_TO_TEAM' => 'A Gruppo Utente :',
  'LBL_REASS_VERBOSE_HELP' => 'Seleziona questa opzione per visualizzare informazioni dettagliate sui compiti di riassegnazione che coinvolgono workflows.',
  'LBL_REASS_VERBOSE_OUTPUT' => 'Output (si appica solo ai compiti di riassegnazione che includono quei workflow)',
  'LBL_REASS_WILL_BE_UPDATED' => 'sarà aggiornato.',
  'LBL_REASS_WORK_NOTIF_AUDIT' => 'comprende Workflow/Notifiche/Audit (significativamente lenti)',
  'LBL_RECAPTCHA_FILL_FIELD' => 'Inserire il testo che compare nell´immagine.',
  'LBL_RECAPTCHA_IMAGE' => 'Cambia in Immagine',
  'LBL_RECAPTCHA_INSTRUCTION' => 'Inserire le Due Parole Sotto',
  'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'Inserire le Due Parole alla Destra',
  'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Chiave Privata del Recaptcha Invalida',
  'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'The challenge parameter of the verify Recaptcha script was incorrect.',
  'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Ottieni un altro CAPTCHA',
  'LBL_RECAPTCHA_SOUND' => 'Cambia in Suono',
  'LBL_RECAPTCHA_UNKNOWN' => 'Errore del Recaptcha sconosciuto',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Notifica Assegnazioni',
  'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Ricevi una notifica email quando ti viene assegnato qualcosa.',
  'LBL_REGISTER' => 'Nuovo utente? Si prega di procedere con la registrazione',
  'LBL_REGULAR_DESC' => 'L´utente può accedere ai moduli e ai record sulla base del gruppo e del ruolo di appartenenza.',
  'LBL_REGULAR_USER' => 'Utente Regolare',
  'LBL_REMINDER' => 'Preavvisi?',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TEXT' => 'Tempo di preavviso predefinito alle persone per le chiamate e le riunioni schedulate',
  'LBL_REMOVED_TABS' => 'Nascondi Schede (Admin)',
  'LBL_REPORTS_TO' => 'Dipende da',
  'LBL_REPORTS_TO_ID' => 'ID Dipende da:',
  'LBL_REPORTS_TO_NAME' => 'Dipende da',
  'LBL_REQUEST_SUBMIT' => 'La tua richiesta è stata presentata.',
  'LBL_RESET_DASHBOARD' => 'Ripristina Dashboard Default',
  'LBL_RESET_HOMEPAGE' => 'Riprista Pagina Iniziale',
  'LBL_RESET_HOMEPAGE_WARNING' => 'Sicuro di voler ripristanare la pagina iniziale ?',
  'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Sei sicuro di voler azzerare la Homepage di questo utente?',
  'LBL_RESET_PREFERENCES' => 'Ripristina le preferenze iniziali',
  'LBL_RESET_PREFERENCES_WARNING' => 'Vuoi ripristinare i valori predefiniti per le preferenze ?',
  'LBL_RESET_PREFERENCES_WARNING_USER' => 'Sei sicuro di voler azzerare tutte le preferenze di questo utente?',
  'LBL_RESET_TO_DEFAULT' => 'Ripristina in Default',
  'LBL_RESOURCE_NAME' => 'Nome',
  'LBL_RESOURCE_TYPE' => 'Tipo',
  'LBL_ROLES_SUBPANEL_TITLE' => 'Ruoli',
  'LBL_SALUTATION' => 'Titolo',
  'LBL_SAVED_SEARCH' => 'Ricerca & Layout Salvati',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Utenti',
  'LBL_SEARCH_URL' => 'Indirizzo per la Ricerca',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Aggiungi Utenti Selezionati',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Aggiungi Utenti Selezionati',
  'LBL_SERVER_OPTIONS' => 'Impostazioni Avanzate',
  'LBL_SERVER_TYPE' => 'Protocollo del server di posta',
  'LBL_SERVER_URL' => 'Indirizzo del server di posta',
  'LBL_SESSION_EXPIRED' => 'Sei stato scollegato perchè la sessione è scaduta.',
  'LBL_SETTINGS_URL' => 'URL',
  'LBL_SETTINGS_URL_DESC' => 'Utilizza questo indirizzo per l´autenticazione del plugin per Microsoft Outlook e Microsoft Word.',
  'LBL_SHOWOPTIONS' => 'Mostra Opzioni',
  'LBL_SHOW_ON_EMPLOYEES' => 'Mostra Record Dipendenti',
  'LBL_SIGNATURE' => 'Firma',
  'LBL_SIGNATURES' => 'Firme',
  'LBL_SIGNATURE_DEFAULT' => 'Utilizzare firma ?',
  'LBL_SIGNATURE_HTML' => 'Firma HTML',
  'LBL_SIGNATURE_NAME' => 'Nome',
  'LBL_SIGNATURE_PREPEND' => 'Firma prima della risposta ?',
  'LBL_SMTP_SERVER_HELP' => 'Questo Mail Server SMTP può essere utilizzato per le mail in uscita. Fornisci un nome utente e una password per il tuo email account così da poter utilizzare il server mail.',
  'LBL_SSL' => 'Utilizza SSL',
  'LBL_SSL_DESC' => 'Utilizza protocollo SSL durante le connessioni con il server di posta.',
  'LBL_STATE' => 'Stato/Provincia',
  'LBL_STATUS' => 'Stato',
  'LBL_SUBPANEL_LINKS' => 'Collegamenti Sottopannello',
  'LBL_SUBPANEL_LINKS_DESCRIPTION' => 'Nelle viste di dettaglio mostra una riga con i link del sotto-pannello.',
  'LBL_SUBPANEL_TABS' => 'Schede del Sottopannello',
  'LBL_SUBPANEL_TABS_DESCRIPTION' => 'Nelle viste di dettaglio, raggruppa i sottopannelli in schede e mostra una scheda alla volta.',
  'LBL_SUGAR_LOGIN' => 'Utente Sugar',
  'LBL_SUPPORTED_THEME_ONLY' => 'Applicabile solo ai temi che supportano questa opzione.',
  'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => 'Se selezionato mostra l´elenco dei Dati Recenti a lato, altrimenti in alto.',
  'LBL_SWAP_LAST_VIEWED_POSITION' => 'Dati recenti a lato',
  'LBL_SWAP_SHORTCUT_DESCRIPTION' => 'Se selezionato mostra le scorciatoie in alto, altrimenti a lato.',
  'LBL_SWAP_SHORTCUT_POSITION' => 'Collegamenti in alto',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Password Generate dal Sistema',
  'LBL_TAB_TITLE_EMAIL' => 'Impostazioni Posta',
  'LBL_TAB_TITLE_USER' => 'Impostazioni Utente',
  'LBL_TEAMS' => 'Gruppi',
  'LBL_TEAM_MEMBERSHIP' => 'Appartenenza al Gruppo',
  'LBL_TEAM_SET' => 'Impostazioni Gruppo',
  'LBL_TEAM_UPLINE' => 'Membro Collegato A',
  'LBL_TEAM_UPLINE_EXPLICIT' => 'Membro',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Prova [Alt+T]',
  'LBL_TEST_SETTINGS' => 'Prova Impostazioni',
  'LBL_TEST_SUCCESSFUL' => 'Connessione completata con successo.',
  'LBL_THEME' => 'Tema',
  'LBL_THEMEPREVIEW' => 'Anteprima',
  'LBL_THEME_COLOR' => 'Colore',
  'LBL_THEME_FONT' => 'Font',
  'LBL_TIMEZONE' => 'Fuso Orario',
  'LBL_TIMEZONE_DST' => 'Fusi Orari',
  'LBL_TIMEZONE_DST_TEXT' => 'Rispetta Fusi Orari',
  'LBL_TIMEZONE_TEXT' => 'Imposta il fuso orario corrente',
  'LBL_TIME_FORMAT' => 'Formato Ora',
  'LBL_TIME_FORMAT_TEXT' => 'Imposta la modalità di visualizzazione delle ore',
  'LBL_TITLE' => 'Titolo',
  'LBL_TLS' => 'Utilizza TLS',
  'LBL_TLS_DESC' => 'Utilizza protocollo TLS durante le connessioni con il server di posta. Usalo solo se il server supporta questo protocollo.',
  'LBL_TOGGLE_ADV' => 'Mostra Avanzate',
  'LBL_TOO_MANY_CONCURRENT' => 'Questa sessione è terminata perchè è stata avviata un ´altra sessione con lo stesso nome utente.',
  'LBL_UPDATE_FINISH' => 'Aggiornamento completato',
  'LBL_USER' => 'Utenti',
  'LBL_USER_ACCESS' => 'Accesso',
  'LBL_USER_HASH' => 'Password',
  'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Gestione Ferie',
  'LBL_USER_INFORMATION' => 'Informazioni Utente',
  'LBL_USER_LOCALE' => 'Impostazioni Internazionali',
  'LBL_USER_NAME' => 'Nome utente',
  'LBL_USER_NAME_FOR_ROLE' => 'Utenti/Gruppi/Ruoli',
  'LBL_USER_PREFERENCES' => 'Preferenze Utente',
  'LBL_USER_SETTINGS' => 'Parametri Utente',
  'LBL_USER_TYPE' => 'Tipo Utente',
  'LBL_USE_GROUP_TABS' => 'Moduli raggruppati',
  'LBL_USE_REAL_NAMES' => 'Mostra Nome Completo',
  'LBL_USE_REAL_NAMES_DESC' => 'Mostra il nome completo di un utente al posto del login.',
  'LBL_WIZARD_BACK_BUTTON' => '< Indietro',
  'LBL_WIZARD_FINISH' => 'Clicca <b>Termina</b> qui sotto per salvare le tue impostazioni e inizia ad utilizzare Sugar. Per ulteriori informazioni sull´utilizzo di Sugar:<br /><br /><table cellpadding=0 cellspacing=0><br /><tr><td><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar University</b></a><br>Get a head start with training and resources for end-users, power-users and system administrators at Sugar University.</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>Documentation</b></a><br>Product documentation to get you started with all flavors of Sugar and official Sugar Plug-Ins and extensions.</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>Knowledge Base</b></a><br>A collection of articles on accomplishing common tasks and answers to frequently asked questions.</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><img src=include/images/wiki.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/wiki" target="_blank"><b>Wiki</b></a><br>A collection of articles on accomplishing common tasks and answers to frequently asked questions.</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>Forums</b></a><br>Community and Sugar team members hang out here dicussing all things Sugar.</td></tr><br /></table>',
  'LBL_WIZARD_FINISH1' => 'Cosa ti piacerebbe fare dopo?',
  'LBL_WIZARD_FINISH10' => 'Utilizza Studio per creare e gestire campi e layout dell´applicazione.',
  'LBL_WIZARD_FINISH11' => 'Visita Sugar University',
  'LBL_WIZARD_FINISH12' => 'Trova materiale di formazione che ti aiuterà ad iniziare, come amministratore o come utente finale, ad usare l´applicativo.',
  'LBL_WIZARD_FINISH14' => 'Documentazione',
  'LBL_WIZARD_FINISH15' => 'Guide sul prodotto e note di rilascio',
  'LBL_WIZARD_FINISH16' => 'Knowledge Base',
  'LBL_WIZARD_FINISH17' => 'Consigli dall&#39;area Support di SugarCRM per l&#39;esecuzione di compiti e processi comuni in SugarCRM',
  'LBL_WIZARD_FINISH18' => 'Forum',
  'LBL_WIZARD_FINISH19' => 'Forum dedicati alla Community di Sugar per poter discutere con altri utenti o con gli sviluppatori di SugarCRM di argomenti di vostro interesse',
  'LBL_WIZARD_FINISH2' => 'Inizia ad utilizzare Sugar',
  'LBL_WIZARD_FINISH2DESC' => 'Vai direttamente alla Home Page dell´applicazione.',
  'LBL_WIZARD_FINISH3' => 'Importa dati',
  'LBL_WIZARD_FINISH4' => 'Importa dati all´interno dell´applicazione da fonti esterne.',
  'LBL_WIZARD_FINISH5' => 'Crea Utenti',
  'LBL_WIZARD_FINISH6' => 'Crea nuovi account utente da utilizzare per accedere all´applicativo.',
  'LBL_WIZARD_FINISH7' => 'Visualizza e gestisci le impostazioni dell´applicazione',
  'LBL_WIZARD_FINISH8' => 'Gestisci le impostazioni avanzate, incluse le impostazioni di default dell´applicazione.',
  'LBL_WIZARD_FINISH9' => 'Configura l´Applicazione',
  'LBL_WIZARD_FINISH_BUTTON' => 'Termina',
  'LBL_WIZARD_FINISH_TAB' => 'Termina',
  'LBL_WIZARD_FINISH_TITLE' => 'Sei pronto per usare Sugar!',
  'LBL_WIZARD_LOCALE' => 'La tua posizione locale',
  'LBL_WIZARD_LOCALE_DESC' => 'Specifica il tuo fuso orario e la modalità di visualizzazione in Sugar delle date, delle valute e dei nomi.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Avanti >',
  'LBL_WIZARD_PERSONALINFO' => 'Le tue Informazioni',
  'LBL_WIZARD_PERSONALINFO_DESC' => 'Fornisci le tue informazioni personali. Le informazioni che fornirai saranno visibili agli altri utenti di Sugar. <br />I campi segnati con l´<span class="required">*</span> sono obbligatori.',
  'LBL_WIZARD_SKIP_BUTTON' => 'Salta',
  'LBL_WIZARD_SMTP' => 'Il tuo Account Email',
  'LBL_WIZARD_SMTP_DESC' => 'Fornisci il nome utente e la password del tuo account email per il server predefinito di posta elettronica in uscita.',
  'LBL_WIZARD_TITLE' => 'Guida Utente',
  'LBL_WIZARD_WELCOME' => 'Clicca <b>Avanti</b> per configurare alcune impostazioni di base per l´utilizzo di Sugar.',
  'LBL_WIZARD_WELCOME_NOSMTP' => 'Clicca <b>Avanti</b> per configurare alcune impostazioni di base per l´utilizzo di Sugar.',
  'LBL_WIZARD_WELCOME_TAB' => 'Benvenuto',
  'LBL_WIZARD_WELCOME_TITLE' => 'Benvenuto in Sugar!',
  'LBL_WORK_PHONE' => 'Telefono Lavoro',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Password Mail Yahoo!:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID Mail Yahoo!:',
  'LBL_YOUR_PUBLISH_URL' => 'Pubblica al mio indirizzo',
  'LBL_YOUR_QUERY_URL' => 'Query per la pubblicazione',
  'LNK_EDIT_TABS' => 'Modifica Schede',
  'LNK_IMPORT_USERS' => 'Importa Utenti',
  'LNK_NEW_GROUP_USER' => 'Crea Gruppo Utente',
  'LNK_NEW_PORTAL_USER' => 'Crea Utente Portal API',
  'LNK_NEW_USER' => 'Nuovo Utente',
  'LNK_REASSIGN_RECORDS' => 'Riassegnare Record',
  'LNK_USER_LIST' => 'Utenti',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Sei sicuro di voler cancellare questo utente?',
);

