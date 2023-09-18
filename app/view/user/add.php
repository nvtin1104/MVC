<?
if (!empty($msg)) {
    echo $msg;
}
?>
<form method="post" action="<? echo _WEB_ROOT; ?>/home/postUser">
    <div>
        <input name="username" type="text" placeholder="username" value="<? echo old_data('username','') ?>">
        <? echo form_error('username', '<span style="color:red;">', '</span>') ?>
    </div>
    <div>
        <input name="age" type="text" placeholder="age" value="<? echo  old_data('age','') ?>">
        <? echo form_error('age', '<span style="color:red;">', '</span>') ?>
    </div>
    <div>
        <input name="email" type="text" placeholder="Email" value="<?  echo old_data('email','') ?>">
        <? echo form_error('email', '<span style="color:red;">', '</span>') ?>
    </div>
    <div>
        <input name="password" type="password" placeholder="password">
        <? echo form_error('password', '<span style="color:red;">', '</span>') ?>
    </div>
    <div>
        <input name="cf-password" type="password" placeholder="cf-password">
        <? echo form_error('cf-password', '<span style="color:red;">', '</span>') ?>
    </div>
    <button type="submit">Submit</button>
</form>