
  <p>Here are all jokes in the database:</p>
<?php if(isset($error)): ?>
  <p>
    <?=$error ?>
  </p>
<?php else: ?>
  <?php foreach($jokes as $joke):?>
    <blockquote>
      <p>
        <?=htmlspecialchars($joke['joketext'],ENT_QUOTES,'UTF-8')?>
        <form action="deletejoke.php" method="POST">
          <input type="hidden" name="id" value="<?=$joke['id']?>">
          <input type='submit' value='Delete'>
        </form>
      </p>
    </blockquote>
  <?php endforeach; ?>
<?php endif ?>
