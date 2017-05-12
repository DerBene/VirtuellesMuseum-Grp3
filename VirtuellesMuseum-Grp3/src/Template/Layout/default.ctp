<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Virtuelles Museum';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
	
    <?= $this->Html->script('jquery-3.2.1.min.js'); ?>
	<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <?= $this->Html->script('bootstrap.min.js'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="/VirtuellesMuseum-Grp3/">Home</a>
  
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="/VirtuellesMuseum-Grp3/Ausstellung">Ausstellung</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Weiteres
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="/VirtuellesMuseum-Grp3/Kategorien">Kategorien</a>
					<a class="dropdown-item" href="/VirtuellesMuseum-Grp3/Epochen">Epochen</a>
					<a class="dropdown-item" href="/VirtuellesMuseum-Grp3/Geographisch">Geographisch</a>
					<a class="dropdown-item" href="/VirtuellesMuseum-Grp3/Persoenlichkeiten">Pers&ouml;nlichkeiten</a>
					<a class="dropdown-item" href="/VirtuellesMuseum-Grp3/Medien">Medien</a>
					<a class="dropdown-item" href="/VirtuellesMuseum-Grp3/Werke">Werke</a>
				</ul>
			</li>
		</ul>
		 <ul class="navbar-nav" style="margin-right: 10px">
			<li class="nav-item pull-xs-right">
			<?php 	$user = $this->request->session()->read();
					if(!empty($user['Auth']['User'])){
						$username = $user['Auth']['User']['username'];
						if(!empty($username)){?>
							<a class="nav-link" href="/VirtuellesMuseum-Grp3/Users"><?php echo $username?></a>
							<?php
						}
					}else{?>
							<a class="nav-link" href="/VirtuellesMuseum-Grp3/Users/login">Login</a>
						<?php	
					}
					?>
					</li>
		 </ul>
		<?php echo $this->Form->create('Search', array('type' => 'post', 'class' => 'form-inline my-2 my-lg-0',  'url' => '/Search'));?>
        <?php echo $this->Form->input('Search.searchvalue', array('label' => false, 'class' => 'form-control mr-sm-2', "placeholder" => __('Suche')));?>
        <?php echo $this->Form->button(__('Suche'), array('class' => 'btn btn-outline-success my-2 my-sm-0'));?>
        <?php echo $this->Form->end(); ?>
	</div>
</nav>
<?= $this->Flash->render() ?>
    <div class="containerTEST clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <hr>
    <footer>
        <center><a style="color: black;" href="/VirtuellesMuseum-Grp3/Search/impressum">Impressum</a></center>
    </footer>
</body>
</html>
