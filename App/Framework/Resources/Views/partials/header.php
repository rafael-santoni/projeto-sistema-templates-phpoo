    <h2>Olá,
    <?php if($this->session('logged')): ?>
        <?= $this->session('user')->firstName; ?>
    <?php endif; ?>
    </h2>
    <h3>Bem-vindo novamente!</h3>