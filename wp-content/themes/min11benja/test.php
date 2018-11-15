   <div class="blog-card alt">
                            <div class="meta">
                                
                                <!--if it has thubnail-->
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(array(150,150));?>
                                        <?php else: ?>
                                            <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
                                <?php endif; ?>      
                                
                                
                                
                                <ul class="details">
                                     <!--Display Dynami post author-->
                                    <li class="author"><a href="#"><?php the_author(); ?></a></li>
                                     <!--Display Dynami post date-->
                                    <li class="date"><?php echo get_the_date( 'Y-m-d' ); ?></li>
                                     <!--Display Dynami post tags-->
                                    <li class="tags">
                                        
                                        <?php 
                                        $tags = get_tags(array(
                                        'hide_empty' => false
                                        ));
                                        echo '<ul>';
                                        foreach ($tags as $tag) {
                                          echo '<li>' . $tag->name . '</li>';
                                        }
                                        echo '</ul>';
                                        ?>
                                        
                                    </li>
                                    <!--Display Dynami post views-->
                                    <li>Vistas: #<?php echo getPostViews(get_the_ID()); ?></li>
                                     <!--Display Dynami post comments-->
                                    <li>Comentarios:#<?php $totalcomments = get_comments_number(); echo $totalcomments; ?></li>
                                </ul>
                            </div>
                            <div class="description">
                                <!--Display Dynami Title-->
                                <h1 class="text-black"><?php the_title(); ?></h1>
                                <!--Display dynami sub title-->
                                <h2><?php the_subtitle(); ?></h2>
                                <!--display dynamic expert-->
                                <p class="text-black"> <?php the_excerpt();?></p>
                                <p class="read-more">
                                    <!--article cat 1 dynamic link-->
                                    <a href="<?php the_permalink();?>" class="post-link">Leer más</a>
                                </p>
                            </div>
                        </div>