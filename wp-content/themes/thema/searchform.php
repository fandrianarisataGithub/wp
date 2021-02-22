 <form class="form-inline my-2 my-lg-0" action="<?php echo esc_url(home_url('/')); ?>">
     <input class="form-control mr-sm-2" type="text" placeholder="Chercher" value="<?php echo get_search_query(); ?>" name="s">
     <button class="btn btn-secondaire my-2 my-sm-0" type="submit">
         <span>Chercher</span>
     </button>
 </form>