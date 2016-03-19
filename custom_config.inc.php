<?php

if (!empty(getenv("LOG_PATH"))) {
	$tlCfg->log_path = getenv("LOG_PATH");
}
if (!empty(getenv("UPLOAD_PATH"))) {
	$g_repositoryPath = getenv("UPLOAD_PATH");
}
if (getenv("DEBUG_ON")!==false) {
	define('DBUG_ON', (int) getenv("DEBUG_ON"));
}
if (!empty(getenv("TEXT_EDITOR"))) {
	// two non-standard are tinymce & none
	$tlCfg->gui->text_editor['all'] = array( 'type' => getenv("TEXT_EDITOR"));
}
if (!empty(getenv("SMTP_HOST"))) {
	$g_smtp_host = getenv("SMTP_HOST");
}
if (!empty(getenv("SMTP_ADMIN_EMAIL"))) {
	$g_tl_admin_email = getenv("SMTP_ADMIN_EMAIL"); # for problem/error notification 
}
if (!empty(getenv("SMTP_FROM_EMAIL"))) {
	$g_from_email = getenv("SMTP_FROM_EMAIL");
}
if (!empty(getenv("SMTP_RETURN_PATH"))) {
	$g_return_path_email = getenv("SMTP_RETURN_PATH");
}
if (getenv("SMTP_PRIORITY")!==false) {
	# Urgent = 1, Not Urgent = 5, Disable = 0
	$g_mail_priority = (int) getenv("SMTP_PRIORITY");
}
if (!empty(getenv("SMTP_USERNAME"))) {
	$g_smtp_username = getenv("SMTP_USERNAME");
}
if (!empty(getenv("SMTP_PASSWORD"))) {
	$g_smtp_password = getenv("SMTP_PASSWORD");
}
if (getenv("HISTORY_ON")!==false) {
	$tlCfg->exec_cfg->history_on = (bool) getenv("HISTORY_ON");
}
if (!empty(getenv("LOG_LEVEL"))) {
	$g_log_level = getenv("LOG_LEVEL");
}

?>