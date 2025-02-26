<?php include 'connect_bdd.php'; ?>

<?php

<form class="comment-form">
    <input type="hidden" name="oeuvre_id" value="<?= $oeuvre['id'] ?>">
    <textarea name="commentaire" placeholder="Votre commentaire"></textarea>
    <button type="submit">Commenter</button>
</form>
<div class="comments" id="comments-<?= $oeuvre['id'] ?>">
    <!-- Commentaires chargés en AJAX -->
</div>

<script>
$(".comment-form").submit(function(e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.post("ajouter_commentaire.php", formData, function(data) {
        var oeuvreId = $("input[name='oeuvre_id']").val();
        $("#comments-" + oeuvreId).html(data);
    });
});
</script>

<button class="like-btn" data-id="<?= $oeuvre['id'] ?>">❤️ J'aime</button>
<span id="like-count-<?= $oeuvre['id'] ?>">0</span>

<script>
$(".like-btn").click(function() {
    var oeuvreId = $(this).data("id");
    $.post("like.php", { oeuvre_id: oeuvreId }, function(data) {
        $("#like-count-" + oeuvreId).text(data);
    });
});
</script>


?>
