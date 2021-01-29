<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind Css -->
    <link rel="stylesheet" href="/assets/css/tailwind.css" />
    
    <!--<link href="/assets/css/tailwind.min.css" rel="stylesheet">-->


    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Material Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Axios -->
    <script src="/assets/js/axios.min.js"></script>

    <!-- Alpine Js -->
    <script src="/assets/js/alpine.min.js"></script>

    <!-- Titulo -->
    <title>Document</title>

</head>
<body :class="{ 'theme-dark': dark }" x-data="data()" x-init="generateInvoiceNumber(111111, 999999);" lang="en">
    

