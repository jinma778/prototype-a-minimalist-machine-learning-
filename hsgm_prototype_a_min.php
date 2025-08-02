<?php

// Configuration file for minimalist machine learning model simulator

// Simulator Settings
$simulator = array(
    'name' => 'HSGM Prototype A',
    'version' => '0.1',
    'description' => 'Minimalist machine learning model simulator'
);

// Model Settings
$model = array(
    'type' => 'Linear Regression', // Supported types: Linear Regression, Decision Tree, Random Forest
    'features' => array('x1', 'x2'), // Input features
    'target' => 'y', // Target variable
    'train_size' => 0.7, // Training dataset size (ratio)
    'test_size' => 0.3, // Testing dataset size (ratio)
);

// Data Settings
$data = array(
    'source' => 'csv', // Supported sources: csv, mysql, json
    'file' => 'data.csv', // Data file path
    'delimiter' => ',', // CSV delimiter
    'header' => true, // Does the CSV file have a header?
);

// Visualization Settings
$visualization = array(
    'type' => 'scatter', // Supported types: scatter, bar, line
    'x_axis' => 'x1', // X-axis variable
    'y_axis' => 'y', // Y-axis variable
);

// Debug Settings
$debug = array(
    'enabled' => true, // Enable debug mode
    'verbosity' => 2 // Debug verbosity level (1-5)
);

?>