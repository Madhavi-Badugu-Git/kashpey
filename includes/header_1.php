<!-- <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title><?php echo $comp_title; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="shortcut icon" href="<?php echo $comp_favicon; ?>" type="image/png">
  
</head> -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $page_title . ' | ' . $comp_title; ?></title>

  <meta name="description" content="<?= $meta_description ?? 'Default description for K-Seva'; ?>">
  <meta name="keywords" content="<?= $meta_keywords ?? 'kseva, crm, finance'; ?>">

  <link rel="canonical" href="<?= $canonical_url ?? 'https://k-seva.com'; ?>">

  <link rel="shortcut icon" href="<?= $comp_favicon; ?>" type="image/png">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>