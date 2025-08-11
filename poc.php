<?php
// SAFE SIMULATION - DOES NOT EXECUTE REAL COMMANDS
if (isset($_GET['cmd'])) {
    $cmd = htmlspecialchars($_GET['cmd']); // Prevent execution
    echo "Simulated command execution: " . $cmd;
} else {
    echo "No command provided. Example: ?cmd=ls";
}
?>
