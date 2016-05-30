<?php include 'header.html.php';
$idModale=1;
?>
<body>
  <main>
    <div class="row">
      <div class="columns">
        <h2>Контакты</h2>
        <table class='table-contacts' border=1 >
          <tr>
            <td>Name</td>
            <td>Surname</td>
            <td>Birthday</td>
            <td>Phone</td>
          </tr>
          <?php $count = 0; ?>
          <?php foreach ($contacts as $contact): ?>

            <tr >
              <td>
                <?php $count=$count+1; ?>
                <a href="#" class="success button round buttonModale"  data-open="modal-<?php echo "$count";  ?> ">+</a>
                <?php echo htmlspecialchars($contact['name'], ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>
                <?php echo htmlspecialchars($contact['surname'], ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>

                <?php $date = htmlspecialchars($contact['birthday'], ENT_QUOTES, 'UTF-8'); ?>
                <time datetime="<?php echo $date; ?>"> <?php echo $date; ?> </time>
              </td>
              <td>
                <?php $tel = htmlspecialchars($contact['phonenumber'], ENT_QUOTES, 'UTF-8'); ?>
                <a href="tel:+ <?php echo $tel ?> "> <?php echo $tel?> </a>
              </td>
            </tr>

            <div class="reveal" id="modal-<?php echo "$count";  ?>" data-reveal>
              <h1><?php echo htmlspecialchars($contact['name'], ENT_QUOTES, 'UTF-8'); ?></h1>
              <p> <?php echo $tel?></p>
              <button class="close-button" data-close aria-label='Close modal' type="button">
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>

          <?php endforeach; ?>
        </table>
      </div>

      <div class="add-contact">
        <a href="?addcontact" class="button">add</a>
      </div>
    </div>
  </main>

  <?php include 'footer.html.php' ?>
