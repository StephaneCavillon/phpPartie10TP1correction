<form method="POST">
    <!-- nom -->
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <!-- pattern="[A-Za-z-éèêëàâäôöûüç' ]+" required -->
        <input type="text" class="form-control" id="name" name="name" value="<?= $name ?? ''?>">
        <div id="name_error" class="form-text"><?= $errorsArray['name_error'] ?? ''?></div>
    </div>
  
    <!-- prénom -->
    <div class="mb-3">
        <label for="firstname" class="form-label">Prénom</label>
        <!-- pattern="[A-Za-z-éèêëàâäôöûüç' ]+" required -->
        <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $firstname ?? ''?>">
        <div id="firstname_error" class="form-text"><?= $errorsArray['firstname_error'] ?? ''?></div>
    </div>

    <!-- date de naissance -->
    <div class="mb-3">
        <label for="birthDate" class="form-label">Date de naissance</label>
        <!-- pattern="" required -->
        <input type="date" class="form-control" id="birthDate" name="birthDate" value="<?= $birthDate ?? ''?>">
        <div id="birthDate_error" class="form-text"><?= $errorsArray['birthDate_error'] ?? ''?></div>
    </div>

    <!-- pays de naissance -->
    <div class="mb-3">
        <label for="birthCountry" class="form-label">Pays de naissance</label>
        <!-- pattern="" required -->
        <select class="form-select" id="birthCountry" name="birthCountry" >
            <option>Choisissez votre pays de naissance</option>
            <option value="France" <?= ($birthCountry == 'France') ? 'selected' : '' ?> >France</option>
            <option value="Italie" <?= ($birthCountry == 'Italie') ? 'selected' : '' ?> >Italie</option>
            <option value="Grande Bretagne" <?= ($birthCountry == 'Grande Bretagne') ? 'selected' : '' ?> >Grande Bretagne</option>
            <option value="Mars">Mars</option>
        </select>     
        <div id="birthCountry_error" class="form-text"><?= $errorsArray['birthCountry_error'] ?? ''?></div>
    </div>

    <!-- Téléphone -->
    <div class="mb-3">
        <label for="phone" class="form-label">Téléphone</label>
        <!-- pattern="/^(\+33|0|0033)[1-9]((-|\/|\.)\d{2}){4}$/" -->
        <input type="tel" class="form-control" id="phone" name="phone" value="<?= $phone ?? ''?>">
        <div id="phone_error" class="form-text"><?= $errorsArray['phone_error'] ?? ''?></div>
    </div>

    <!-- Mail -->
    <div class="mb-3">
        <label for="mail" class="form-label">Mail</label>
        <!-- pattern="" required -->
        <input type="mail" class="form-control" id="mail" name="mail" value="<?= $mail ?? ''?>">
        <div id="mail_error" class="form-text"><?= $errorsArray['mail_error'] ?? ''?></div>
    </div>



  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>