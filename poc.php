<?php
// SAFE SIMULATION - DOES NOT EXECUTE REAL COMMANDS
// my site : https://ziademad2024.github.io/xsstest/poc.php
if (isset($_GET['cmd'])) {
    $cmd = htmlspecialchars($_GET['cmd']); // Prevent execution
    echo "Simulated command execution: " . $cmd;
} else {
    echo "No command provided. Example: ?cmd=ls";
}
?>
