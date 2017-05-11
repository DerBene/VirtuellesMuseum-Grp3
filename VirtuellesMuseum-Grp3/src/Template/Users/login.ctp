<div class="container">
<?= $this->Flash->render() ?>
<?= $this->Form->create(null,['class' => 'form-signin']) ?>
    <fieldset>
        <h2 class="form-signin-heading"><?= __('Bitte einloggen') ?></h2>
        <?= $this->Form->control('username', array('label' => false, 'class' => 'form-control', "placeholder" => __('Benutzername')))?>
        <?= $this->Form->control('password', array('label' => false, 'class' => 'form-control', "placeholder" => __('Passwort')))?>
    </fieldset>
	<div class="checkbox">
          <a href="/VirtuellesMuseum-Grp3/Users/passwordreset">Passwort vergessen</a>
        </div>
<?= $this->Form->button(__('Login'), ['class' => 'btn btn-lg btn-primary btn-block']); ?>
<?= $this->Form->end() ?>

</div>