<div class="flex space-x-4">
    <div class="flex flex-col">
        <input type="text" name="location" required value="<?= $location ?>" placeholder="Location" class="border rounded p-2 text-black">
        <?php if (isset($errors['location'])) : ?>
            <?php foreach ($errors['location'] as $error) : ?>
                <li class="text-red-500 text-xs mt-2"><?= $error ?></li><br>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="flex flex-col">
        <input type="date" name="check_in_date" required value="<?= $check_in_date ?>" placeholder="Check-in date" class="border rounded p-2 text-black">
        <?php if (isset($errors['check_in_date'])) : ?>
            <?php foreach ($errors['check_in_date'] as $error) : ?>
                <li class="text-red-500 text-xs mt-2"><?= $error ?></li><br>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="flex flex-col">
        <input type="date" name="check_out_date" required value="<?= $check_out_date ?>" placeholder="Check-out date" class="border rounded p-2 text-black">
        <?php if (isset($errors['check_out_date'])) : ?>
            <?php foreach ($errors['check_out_date'] as $error) : ?>
                <li class="text-red-500 text-xs mt-2"><?= $error ?></li><br>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="flex flex-col">
        <input type="number" name="number_of_guests" required value="<?= $number_of_guests ?>" placeholder="Number of guests" class="border rounded p-2 text-black" min="1" max="20">
        <?php if (isset($errors['number_of_guests'])) : ?>
            <?php foreach ($errors['number_of_guests'] as $error) : ?>
                <li class="text-red-500 text-xs mt-2"><?= $error ?></li><br>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded h-max">></button>
</div>