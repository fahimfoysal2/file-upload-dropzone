<?php

print_r($_FILES);

// accept file upload 
if (isset($_FILES)) {
    echo "File uploaded successfully.";
} 
else {
    echo "Didn't receive any file!";
}