<?php include 'header.html.php';
$idModale=1;
?>
<body>
  <section class="info text-left">

  </section>
  <main>
    <div class="info">
      <p class="time">

      </p>
    </div>
    <div class="row">
      <div class="columns">
        <h2>Контакты</h2>
        <table class='table-contacts' border=1 >
          <tr>
            <td>Name</td>
            <td>Surname</td>
           <!--  <td>Birthday</td>
           <td>Phone</td> -->
         </tr>
         <?php $count = 0; ?>
         <?php foreach ($contacts as $contact): ?>

          <tr >
            <td>
              <?php $count=$count+1; ?>
              <a href="#openModal" class="success button round buttonModale"  id="<?php echo htmlspecialchars($contact['id'], ENT_QUOTES, 'UTF-8'); ?>" data-open="modal-<?php echo "$count";  ?> ">+</a>
              <!-- <span class="id_button" id="id" style="display: none;">   <?php// echo htmlspecialchars($contact['id'], ENT_QUOTES, 'UTF-8'); ?>  </span> -->
              <?php echo htmlspecialchars($contact['name'], ENT_QUOTES, 'UTF-8'); ?>
            </td>
            <td>
              <?php echo htmlspecialchars($contact['surname'], ENT_QUOTES, 'UTF-8'); ?>
            </td>
             <!--  <td>

                <?php //$date = htmlspecialchars($contact['birthday'], ENT_QUOTES, 'UTF-8'); ?>
                <time datetime="<?php //echo $date; ?>"> <?php //echo $date; ?> </time>
              </td>
              <td>
                <?php //$tel = htmlspecialchars($contact['phonenumber'], ENT_QUOTES, 'UTF-8'); ?>
                <a href="tel:+ <?php //echo $tel ?> "> <?php //echo $tel?> </a>
              </td>-->
            </tr>

          <?php endforeach; ?>
        </table>
      </div>

      <div class="reveal" id="1" data-reveal>
        <h1 ><?php echo htmlspecialchars($contact['name'], ENT_QUOTES, 'UTF-8'); ?></h1>
        <p> <?php //echo $tel?></p>
        <button class="close-button" data-close aria-label='Close modal' type="button">
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>

      <div id="openModal" class=" modalDialog">

        <div class="">
          <a href="#close" title="Закрыть" class="close">X</a>
          <table>
            <tr>
              <td>Name</td>
              <td>SurName</td>
              <td>Birthday</td>
            </tr>
            <tr>
              <td id="name"></td>
              <td id="surname"></td>
              <td id="birthday"></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="inf">
        <!-- <h3 id="name"></h3> -->
        <h3 id="surname"></h3>
      </div>

      <div class="add-contact">
        <a href="?addcontact" class="button">add</a>
        <!-- <a href="#" id="button" class="button">show</a> -->
      </div>
    </div>
  </main>

  <?php include 'footer.html.php' ?>
