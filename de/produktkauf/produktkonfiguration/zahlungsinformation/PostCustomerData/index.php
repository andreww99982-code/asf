<?php
/**
 * Disable legacy waiting/payment interception flow and keep user in standard shop journey.
 */
header('Location: /de/produktkauf/warenkorb/');
exit();
?>