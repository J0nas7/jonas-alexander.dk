<?php
// Include the PHP file specified by the URL path
require_once get_required_php_file(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Function to get the required PHP file based on the URL path
function get_required_php_file(string $path): string
{
    // If the path is the root ('/'), return 'index.php'
    if ($path == '/' || $path == '') {
        return 'index.php';
    }

    if (strpos(" ".$path, "wp-json/wp/v2")) {
        return 'wp-includes/post.php';
    }

    // Get the last character of the path
    $last_char = \substr($path, -1);
    
    // Remove trailing slash if the last character is '/'
    $pathname = ($last_char === '/' ? rtrim($path, '/') : $path);
    
    // Remove leading slashes
    $pathname = ltrim($pathname, '/');
    
    // Construct the full path to the PHP file (assumed to be 'index.php' in the specified directory)
    $full_php_path = $pathname;

    // Check if the PHP file exists, return it; otherwise, return 'index.php'
    return (\file_exists($full_php_path) ? $full_php_path : 'index.php');
}
