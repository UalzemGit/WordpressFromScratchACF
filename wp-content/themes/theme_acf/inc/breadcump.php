<?php if (is_single()) { ?>

    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcumb">
                        <h4>Blog</h4>
                        <ul>
                            <li><a href=""></a>Home</li> /
                            <li><?php wp_title(''); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php
} elseif (is_archive()) { ?>

    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcumb">
                        <h4><?php the_archive_title(); ?></h4>
                        <ul>
                            <li><a href=""></a>Home</li> /
                            <li><?php the_archive_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

} elseif (is_404()) { ?>

    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcumb">
                        <h4>Página Não Encontrada!!!</h4>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php

} else { ?>

    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcumb">
                        <h4><?php wp_title(''); ?></h4>
                        <ul>
                            <li><a href=""></a>Home</li> /
                            <li><?php wp_title(''); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
}


?>