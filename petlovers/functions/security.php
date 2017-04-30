<?php
// .htaccess file added to forbid directory listings
// prepared statements allows to be secured from SQL injections

// protects from XSS (Cross-site Scripting)
function esc($value) {
    // converts characters into their HTML entities
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
};

?>