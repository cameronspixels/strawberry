<?php

defined('C5_EXECUTE') or die('Access denied.');

/**
 * @var Concrete\Core\Authentication\AuthenticationType $this
 * @var Concrete\Core\Form\Service\Widget\GroupSelector $groupSelector
 * @var Concrete\Core\Form\Service\Form $form
 * @var Concrete\Core\Url\UrlImmutable $redirectUri
 * @var array $data
 */
?>

<div class="alert alert-info">
    <?= t('Set the "Redirect URI" to: %s', ' <code>' . $redirectUri . '</code>') ?>
</div>

<div class="form-group">
    <?= $form->label('displayName', t('Authentication Type Display Name')) ?>
    <?= $form->text('displayName', $this->getAuthenticationTypeDisplayName()) ?>
</div>

<div class="form-group">
    <?= $form->label('url', t('External Concrete URL')) ?>
    <?= $form->url('url', $data['url'] ?? '', ['spellcheck' => 'false']) ?>
</div>

<div class="form-group">
    <?= $form->label('apikey', t('App ID')) ?>
    <?= $form->text('apikey', $data['appid'] ?? '', ['autocomplete' => 'off', 'class' => 'font-monospace', 'spellcheck' => 'false']) ?>
</div>
<div class="form-group">
    <?= $form->label('apisecret', t('App Secret')) ?>
    <div class="input-group">
        <?= $form->password('apisecret', $data['secret'] ?? '', ['autocomplete' => 'off', 'class' => 'font-monospace', 'spellcheck' => 'false']) ?>
        <button id="showsecret" class="btn btn-outline-secondary" title="<?= t('Show secret key') ?>"><i class="far fa-eye"></i></button>
    </div>
</div>

<div class="form-group">
    <?= $form->label('', t('Registration')) ?>
    <div class="form-check">
        <?= $form->checkbox('registration_enabled', '1', array_get($data, 'registration.enabled', false)) ?>
        <label class="form-check-label" for="registration_enabled"><?= t('Allow automatic registration') ?></label>
    </div>
</div>
<div class="form-group registration-group">
    <?= $form->label('registration_group', t('Group to enter on registration')) ?>
    <?= $groupSelector->selectGroup('registration_group', array_get($data, 'registration.group'), tc('Group', 'None')) ?>
</div>


<script>
$(document).ready(function() {

    $('#showsecret').on('click', function(e) {
        e.preventDefault();
        var $apisecret = $('#apisecret');
        if ($apisecret.attr('type') == 'password') {
            $apisecret.attr('type', 'text');
            $('#showsecret')
                .attr('title', <?= json_encode(t('Hide secret key')) ?>)
                .html('<i class="far fa-eye-slash"></i>')
            ;
        } else {
            $apisecret.attr('type', 'password');
            $('#showsecret')
                .attr('title', <?= json_encode(t('Show secret key')) ?>)
                .html('<i class="far fa-eye"></i>')
            ;
        }
    });

    $('input[name="registration_enabled"]')
        .on('change', function () {
            $('div.registration-group').toggle($(this).is(':checked'));
        })
        .trigger('change')
    ;

}());
</script>
