<?php $this->extends('dashboard', ['title' => $title]); ?>

<h2>Home</h2>

<p>Users:</p>
<ul>
<?php foreach($users as $user): ?>
  <li><?= $user->firstName; ?></li>  
<?php endforeach; ?>
</ul>