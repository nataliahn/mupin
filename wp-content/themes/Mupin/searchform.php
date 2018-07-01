<?php header();?>

<div class="searchform-area">
    <form action="<?php echo home_url(); ?>" id="search-form" method="get">
        <button class="search-form_input" type="submit">
            <img src="<?php bloginfo('template_url'); ?>/assets/imgs/lupa.png" alt="">
        </button>
        <input type="text" name="s" id="s" placeholder="BUSCAR" onfocus="if(this.value=='¿Qué estás buscando?=''" />  
    </form>
</div>

<?php header();?>
