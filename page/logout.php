<?php
require('../config/function.php');
session_destroy();
header("Location: $domain");