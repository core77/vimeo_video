<?php

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Application\Service\UserInterface;
use Concrete\Core\Support\Facade\Application;

$app = Application::getFacadeApplication();
/** @var UserInterface $ui */
$ui = $app->make(UserInterface::class);
?>


<fieldset>
    <div class="form-group">
        <?php echo $form->label('videoID', t("Video-ID")); ?>
        <?php echo $form->text('videoID', $videoID ?? '', ['required' => 'required']); ?>
    </div>
</fieldset>
