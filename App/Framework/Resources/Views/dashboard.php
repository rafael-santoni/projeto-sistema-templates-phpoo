<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <title><?= $title ?></title>
  
  <!-- Referência do CSS Global -->
  <link rel="stylesheet" href="/assets/css/global.css">
  <?php $this->section('css'); ?>
  
  <!-- Biblioteca do Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

</head>
<body>

    <section class="container-dashboard">
        <aside class="container-aside" id="container-aside">
            <?php require 'partials/sidebar.php'; ?>
        </aside>


        <section class="container-section-principal">
            <i data-feather="menu" id="menuMobile"></i>
            <article class="container-section-principal-header">
                <?php require 'partials/header.php'; ?>
            </article>

            <main class="container-section-principal-content">
                <h1 id="h1">H1 na Master</h1>
                <?= $this->load(); ?>
            </main>

        </section>
  
    </section>

    <script src="/assets/js/scriptPrincipal.js"></script>
</body>
</html>