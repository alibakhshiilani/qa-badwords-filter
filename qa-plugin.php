<?php
if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
    header('Location: ../../');
    exit;
}

qa_register_plugin_module('filter', 'qa_badwords_filter.php', 'qa_badwords_filter', 'Prevent Badwords Filter');
