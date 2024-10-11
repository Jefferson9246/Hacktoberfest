<?php

/**
 * Generic function to sanitize a string
 * Removes unwanted characters and extra spaces.
 *
 * @param string $data The string to be sanitized.
 * @return string The sanitized string.
 */
function sanitizeString($data) {
    // Remove HTML and PHP tags
    $data = strip_tags($data);
    
    // Remove extra spaces
    $data = trim($data);
    
    // Remove backslashes
    $data = stripslashes($data);
    
    // Convert special characters to HTML entities
    $data = htmlspecialchars($data);
    
    return $data;
}
