<script >
$(function() {
    var $shoutboxContainer = $('#shoutbox-container<?=$this->get('uniqid') ?>'),
        showForm = function() {
            $("#shoutbox-button-container<?=$this->get('uniqid') ?>").slideUp(200, function() {
                $("#shoutbox-form-container<?=$this->get('uniqid') ?>").slideDown(400);
            });
        },
        hideForm = function(afterHide) {
            $("#shoutbox-form-container<?=$this->get('uniqid') ?>").slideUp(400, function() {
                $("#shoutbox-button-container<?=$this->get('uniqid') ?>").slideDown(200, afterHide);
            });
        };


    //slideup-down
    $shoutboxContainer.on('click', '#shoutbox-slide-down<?=$this->get('uniqid') ?>', showForm);

    //slideup-down reset on click out
    $(document.body).on('mousedown', function(event) {
        var target = $(event.target);

        if (!target.parents().addBack().is('#shoutbox-container<?=$this->get('uniqid') ?>')) {
            hideForm();
        }
    });

    //ajax send
    $shoutboxContainer.on('click', 'button[type=submit]', function(ev) {
        ev.preventDefault();
        var $btn = $(this),
            $form = $btn.closest('form'),
            dataString = $form.serialize();

        if ($form.find('[name=shoutbox_name]').val() == '') {
            alert(<?=json_encode($this->getTrans('missingName')) ?>);
        } else if ($form.find('[name=shoutbox_textarea]').val() == '') {
            alert(<?=json_encode($this->getTrans('missingMessage')) ?>);
        } else {
            $.ajax({
                type: "POST",
                url: "<?=$this->getUrl('shoutbox/index/ajax') ?>",
                data: dataString,
                cache: false,
                success: function(html) {
                    var $htmlWithoutScript = $(html).filter('#shoutbox-container<?=$this->get('uniqid') ?>');
                    hideForm(function() {
                        $shoutboxContainer.html($htmlWithoutScript.html());
                    });
                }
            });
        }
    });
});
</script>

<?php $config = \Ilch\Registry::get('config'); ?>

<div id="shoutbox-container<?=$this->get('uniqid') ?>">
    <div id="shoutbox-button-container<?=$this->get('uniqid') ?>" class="form-horizontal">
        <div class="form-group">
            <div class="col-lg-12">
                <?php if (is_in_array($this->get('writeAccess'), explode(',', $config->get('shoutbox_writeaccess')))): ?>
                    <div class="pull-left">
                        <button class="btn btn-default btn-1" id="shoutbox-slide-down<?=$this->get('uniqid') ?>"><?=$this->getTrans('answer') ?></button>
                    </div>
                <?php endif; ?>
                <?php if (count($this->get('shoutbox')) == $config->get('shoutbox_limit')): ?>
                    <!--<div class="pull-right">
                        <a href="<?=$this->getUrl('shoutbox/index/index/') ?>" class="btn btn-default"><?=$this->getTrans('archive') ?></a>
                    </div>-->
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if (is_in_array($this->get('writeAccess'), explode(',', $config->get('shoutbox_writeaccess')))): ?>
        <div id="shoutbox-form-container<?=$this->get('uniqid') ?>" style="display: none;">
            <form class="form-horizontal" method="post">
                <input type="hidden" name="uniqid" value="<?=$this->get('uniqid') ?>">
               <?=$this->getTokenField() ?>
                <div class="form-group hidden">
                    <label class="col-lg-2 control-label">
                        <?=$this->getTrans('bot') ?>
                    </label>
                    <div class="col-lg-8">
                        <input type="text"
                               class="form-control"
                               name="bot"
                               placeholder="Bot" />
                    </div>
                </div>
                <div class="form-group <?=$this->validation()->hasError('shoutbox_name') ? 'has-error' : '' ?>">
                    <div class="col-lg-12">
                        <input type="text"
                               class="form-control"
                               name="shoutbox_name"
                               placeholder="Name"
                               value="<?=($this->getUser() !== null) ? $this->escape($this->getUser()->getName()) : '' ?>"
                               <?=($this->getUser() !== null) ? 'readonly' : 'required' ?> />
                    </div>
                </div>
                <div class="form-group <?=$this->validation()->hasError('shoutbox_textarea') ? 'has-error' : '' ?>">
                    <div class="col-lg-12">
                        <textarea class="form-control"
                                  style="resize: vertical"
                                  name="shoutbox_textarea"
                                  cols="10"
                                  rows="5"
                                  maxlength="<?=$config->get('shoutbox_maxtextlength') ?>"
                                  placeholder="<?=$this->getTrans('message') ?>"
                                  required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <div class="pull-left">
                            <button type="submit" class="btn btn-1" name="form_<?=$this->get('uniqid') ?>">
                                <?=$this->getTrans('answer') ?>
                            </button>
                        </div>
                        <?php if (count($this->get('shoutbox')) == $config->get('shoutbox_limit')): ?>
                            <div class="pull-right">
                                <a href="<?=$this->getUrl('shoutbox/index/index/') ?>" class="btn btn-default"><?=$this->getTrans('archive') ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>
    <?php endif; ?>

    <div class="shoutbox-new">
      <?php if (!empty($this->get('shoutbox'))): ?>
					<?php foreach ($this->get('shoutbox') as $shoutbox): ?>
						<?php $userMapper = new \Modules\User\Mappers\User() ?>
						<?php $user = $userMapper->getUserById($shoutbox->getUid()) ?>
						<?php $date = new \Ilch\Date($shoutbox->getTime()) ?>
						<div class="col-xs-12 col-sm-2 col-lg-2 text-align">

							<?php if ($shoutbox->getUid() == '0' || empty($user)): ?>
								<div class="first">
									<b><?=$this->escape($shoutbox->getName()) ?>:</b><br />
									<span class="small"><?=$date->format("d.m.Y H:i", true) ?></span>
								</div>
							<?php else: ?>
								<div class="first">
								<img src="<?=$this->getBaseUrl().$this->escape($user->getAvatar()) ?>"><br>
									<b><a href="<?=$this->getUrl('user/profil/index/user/'.$user->getId()) ?>"><?=$this->escape($user->getName()) ?></a></b>:<br />
									<span class="small"><?=$date->format("d.m.Y H:i", true) ?></span>
								</div>
							<?php endif; ?>
								<div class="secend">
									<?php
									/*
									 * @todo should fix this regex.
									 */
									?>
									<?=preg_replace('/([^\s]{' . $this->get('maxwordlength') . '})(?=[^\s])/', "$1\n", $this->escape($shoutbox->getTextarea())) ?>
								</div>
						</div>
					<?php endforeach; ?>
				  <?php else: ?>
					<tr>
						<td><?=$this->getTrans('noEntrys') ?></td>
					</tr>
				  <?php endif; ?>

        </ul>
    </div>
</div>
