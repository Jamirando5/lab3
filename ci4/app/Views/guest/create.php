<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/guest/create" method="post">
    <?= csrf_field() ?>

    <label  for="Name">Name</label>
    <input type="input" name="Name" value="<?= set_value('Name') ?>">
    <br>

    <label  for="Email">Email</label>
    <input type="input" name="Email" value="<?= set_value('Email') ?>">
    <br>

    <label  for="Website">Website</label>
    <input type="input" name="Website" value="<?= set_value('Website') ?>">
    <br>

    <label  for="Comment">Comment</label>
    <textarea name="Comment" cols="45" rows="4"><?= set_value('Comment') ?></textarea>
    <br>

    <label  for="Gender">Gender</label>
    <input type="input" name="Gender" value="<?= set_value('Gender') ?>">
    <br>

    <input type="submit" name="submit" value="Create guest entry">
</form>