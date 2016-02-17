<?php
// si les commentaires sont activés, on affiche le formulaire
if('open' == $post->comment_status ): ?>
<h3 id="respond">Lissez un commentaire</h3>
<?php // si l'utilisateur est obligé d'être inscrit et qu'il n'est pas connecté,
// on affiche un lien vers le formulaire de connexion

if(/*get_option('comment_registration') &&*/ ! $user_ID) :
?>
<p> vous devez être <a href="<?php get_option('siteurl')?>/wp-system/wp-login.php?redirect_to=<?php the_permalink(); ?>">connecté</a> pour laisser un commentaire. </p>
    <?php else: ?>

    <?php // Affichage du formulaire ici ?>
    <?php endif; //Fin condition user est connecté?>
    <?php endif; //Fin condition "on peut laisser des commentaires" ?>
