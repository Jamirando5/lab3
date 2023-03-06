<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <h3> <?= esc($guest_item['Name']) ?> </h3>
            <p><?= esc($guest_item['Email']) ?> 
            <p> <?= esc($guest_item['Comment']) ?>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guests</h3>

    <p>Unable to find any guests for you.</p>

<?php endif ?>