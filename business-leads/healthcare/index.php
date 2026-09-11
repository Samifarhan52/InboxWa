<?php
$basePath = '../../';
$categorySlug = 'healthcare';
require_once __DIR__ . '/../../config/industries-content.php';
$indData = getIndustryData($categorySlug);
require_once __DIR__ . '/../../includes/industry-template.php';
