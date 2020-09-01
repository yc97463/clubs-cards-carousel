                <div class="item">
                    <section class="cd">
                        <div class="bg">
                            <img src="<?php echo "timthumb.php?h=420&w=820&zc=1&src=".urlencode("https://img.imych.one/sw/clubs/109/{$item['img']['url']}") ?>">
                        </div>
                        <div class="box clubs-cd">
                            <div class="container">
                                <h1 class="has-text-centered has-text-weight-bold is-size-4 club-title"><strong><?php echo "{$item['title']}" ?></strong></h1>
                                <p class="club-container is-size-5">
                                    <?php echo "{$item['content']}" ?>
                                </p>
                                <div class="columns club-social">
                                    <?php if($item['social']['facebook']){?>
                                    <div class="column is-one-fifth">
                                        <a href="/smhs-reader/?mode=reload&uri=https://www.facebook.com/<?php echo $item['social']['facebook'] ?>" target="_blank" rel="noopener noreferrer"><img src="assets/social/036-facebook.svg" alt="facebook"></a>
                                    </div>
                                    <?php ;};if($item['social']['instagram']){?>
                                    <div class="column is-one-fifth">
                                        <a href="/smhs-reader/?mode=reload&uri=https://www.instagram.com/<?php echo $item['social']['instagram'] ?>" target="_blank" rel="noopener noreferrer"><img src="assets/social/029-instagram.svg" alt="instagram"></a>
                                    </div>
                                    <?php ;};?>
                                  </div>
                            </div>
                          </div>
                    </section>

                </div>