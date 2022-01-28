<?php 
if ( !defined( 'ABSPATH' ) ) exit;

$wcss_settings_options = get_option('wcss_settings_options');
$wcss_options = $wcss_settings_options['wcss_social_sharing'];

// echo "<pre>";
// print_r($wcss_options);
// echo "</pre>";
?>

<div class="wptg-backend-wrap">
    <div class="header-wrap">
        <div class="row">
            <div class="addbanner-wrap col-md-4">
                <img src="<?php echo plugin_dir_url( __FILE__ ).'assets/images/addbanner.jpg'; ?>" alt="addbanner" class="addbanner">
            </div>

            <div class="logo-wrap col-md-4">
                <div class="title">
                    <h1><?php _e( 'WP Custom Social Sharing', 'wcss-social-share' ); ?></h1>
                </div>
            </div>


            <div class="btn-wrap col-md-4">
                <a href="#" class="wptg-btn dashicons-before dashicons-heart">support</a>
                <a href="#" class="wptg-btn btn2 dashicons-before dashicons-star-filled">Rate us</a>
            </div>
        </div>
    </div>

    <div class="body-wrap">
        <div id="tabs-wrap" class="tabs-wrap">

            <ul class="tab-menu">
                <li class="nav-tab"><a href="#general" class="dashicons-before dashicons-editor-alignleft"><?php _e( 'General', 'wcss-social-share' ); ?></a></li>
                <!-- <li class="nav-tab"><a href="#options" class="dashicons-before dashicons-admin-generic"><?php //_e( 'Individual Post Settings', 'wcss-social-share' ); ?></a></li> -->
            </ul>

            <div class="tab-content">
                <div id="general">

                    <h2 class="tab-title"><?php _e( 'General Settings', 'wcss-social-share' ); ?></h2>

                    <form action="options.php" method="POST">

                        <?php settings_fields( 'wcss_settings_options' ); ?>

                        <div class="form-group">

                            <label for="sharebutton" class="form-label">
                                <?php _e( 'Customize Button Settings', 'wcss-social-share'); ?>
                            </label>
                            
                            <div class="form-control-wrap">

                                <div id="sharebutton" class="wcss-button-container">                                    
                                    <div class="wcss-button-check-wrapper">
                                        <!-- Facebook button setting -->
                                        <div class="wcss-share-item item facebook">

                                            <div class="slide-section closed" id="facebook-slide">
                                                <label for="enablefacebook">
                                                    <input type="checkbox" name="wcss_social_sharing[facebook][enable]" value="yes" id="enablefacebook" <?php checked( ( 'yes' === $wcss_options['facebook']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Facebook', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="facebookcolor">
                                                        <input type="text" name="wcss_social_sharing[facebook][color]" id="facebookcolor" class="color-field" value="<?php echo ( isset( $wcss_options['facebook']['color'] ) && !empty( $wcss_options['facebook']['color'] ) ) ? esc_attr( $wcss_options['facebook']['color'] ) : '#3b5998'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Facebook button setting -->

                                        <!-- Twitter button setting -->
                                        <div class="wcss-share-item item twitter">

                                            <div class="slide-section closed" id="twitter-slide">
                                                <label for="enabletwitter">
                                                    <input type="checkbox" name="wcss_social_sharing[twitter][enable]" value="yes" id="enabletwitter" <?php checked( ( 'yes' === $wcss_options['twitter']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Twitter', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="twittercolor">
                                                        <input type="text" name="wcss_social_sharing[twitter][color]" id="twittercolor" class="color-field" value="<?php echo ( isset( $wcss_options['twitter']['color'] ) && !empty( $wcss_options['twitter']['color'] ) ) ? esc_attr( $wcss_options['twitter']['color'] ) : '#00acee'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Twitter button setting -->

                                        <!-- Pinterest button setting -->
                                        <div class="wcss-share-item item pinterest">

                                            <div class="slide-section closed" id="pinterest-slide">
                                                <label for="enablepinterest">
                                                    <input type="checkbox" name="wcss_social_sharing[pinterest][enable]" value="yes" id="enablepinterest" <?php checked( ( 'yes' === $wcss_options['pinterest']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Pinterest', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="pinterestcolor">
                                                        <input type="text" name="wcss_social_sharing[pinterest][color]" id="pinterestcolor" class="color-field" value="<?php echo ( isset( $wcss_options['pinterest']['color'] ) && !empty( $wcss_options['pinterest']['color'] ) ) ? esc_attr( $wcss_options['pinterest']['color'] ) : '#C92228'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Pinterest button setting -->

                                        <!-- Linkedin button setting -->
                                        <div class="wcss-share-item item linkedin">

                                            <div class="slide-section closed" id="linkedin-slide">
                                                <label for="enablelinkedin">
                                                    <input type="checkbox" name="wcss_social_sharing[linkedin][enable]" value="yes" id="enablelinkedin" <?php checked( ( 'yes' === $wcss_options['linkedin']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable LinkdeIn', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="linkedincolor">
                                                        <input type="text" name="wcss_social_sharing[linkedin][color]" id="linkedincolor" class="color-field" value="<?php echo ( isset( $wcss_options['linkedin']['color'] ) && !empty( $wcss_options['linkedin']['color'] ) ) ? esc_attr( $wcss_options['linkedin']['color'] ) : '#0077b5'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Linkedin button setting -->

                                        <!-- Blogger button setting -->
                                        <div class="wcss-share-item item blogger">

                                            <div class="slide-section closed" id="blogger-slide">
                                                <label for="enableblogger">
                                                    <input type="checkbox" name="wcss_social_sharing[blogger][enable]" value="yes" id="enableblogger" <?php checked( ( 'yes' === $wcss_options['blogger']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Blogger', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="bloggercolor">
                                                        <input type="text" name="wcss_social_sharing[blogger][color]" id="bloggercolor" class="color-field" value="<?php echo ( isset( $wcss_options['blogger']['color'] ) && !empty( $wcss_options['blogger']['color'] ) ) ? esc_attr( $wcss_options['blogger']['color'] ) : '#ff8b13'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Blogger button setting -->

                                        <!-- Buffer button setting -->
                                        <div class="wcss-share-item item buffer">

                                            <div class="slide-section closed" id="buffer-slide">
                                                <label for="enablebuffer">
                                                    <input type="checkbox" name="wcss_social_sharing[buffer][enable]" value="yes" id="enablebuffer" <?php checked( ( 'yes' === $wcss_options['buffer']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Buffer', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="buffercolor">
                                                        <input type="text" name="wcss_social_sharing[buffer][color]" id="buffercolor" class="color-field" value="<?php echo ( isset( $wcss_options['buffer']['color'] ) && !empty( $wcss_options['buffer']['color'] ) ) ? esc_attr( $wcss_options['buffer']['color'] ) : '#3e3e3e'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Buffer button setting -->

                                        <!-- Digg button setting -->
                                        <div class="wcss-share-item item digg">

                                            <div class="slide-section closed" id="digg-slide">
                                                <label for="enabledigg">
                                                    <input type="checkbox" name="wcss_social_sharing[digg][enable]" value="yes" id="enabledigg" <?php checked( ( 'yes' === $wcss_options['digg']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Digg', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="diggcolor">
                                                        <input type="text" name="wcss_social_sharing[digg][color]" id="diggcolor" class="color-field" value="<?php echo ( isset( $wcss_options['digg']['color'] ) && !empty( $wcss_options['digg']['color'] ) ) ? esc_attr( $wcss_options['digg']['color'] ) : '#3e3e3e'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Digg button setting -->

                                        <!-- Email button setting -->
                                        <div class="wcss-share-item item email">

                                            <div class="slide-section closed" id="email-slide">
                                                <label for="enableemail">
                                                    <input type="checkbox" name="wcss_social_sharing[email][enable]" value="yes" id="enableemail" <?php checked( ( 'yes' === $wcss_options['email']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Email', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="emailcolor">
                                                        <input type="text" name="wcss_social_sharing[email][color]" id="emailcolor" class="color-field" value="<?php echo ( isset( $wcss_options['email']['color'] ) && !empty( $wcss_options['email']['color'] ) ) ? esc_attr( $wcss_options['email']['color'] ) : '#f4cd0b'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Email button setting -->

                                        <!-- Flipboard button setting -->
                                        <div class="wcss-share-item item flipboard">

                                            <div class="slide-section closed" id="flipboard-slide">
                                                <label for="enableflipboard">
                                                    <input type="checkbox" name="wcss_social_sharing[flipboard][enable]" value="yes" id="enableflipboard" <?php checked( ( 'yes' === $wcss_options['flipboard']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Flipboard', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="flipboardcolor">
                                                        <input type="text" name="wcss_social_sharing[flipboard][color]" id="flipboardcolor" class="color-field" value="<?php echo ( isset( $wcss_options['flipboard']['color'] ) && !empty( $wcss_options['flipboard']['color'] ) ) ? esc_attr( $wcss_options['flipboard']['color'] ) : '#f43d3d'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Flipboard button setting -->

                                        <?php /* ?>
                                        <!-- myspace button setting -->
                                        <div class="wcss-share-item item myspace">

                                            <div class="slide-section closed" id="myspace-slide">
                                                <label for="enablemyspace">
                                                    <input type="checkbox" name="wcss_social_sharing[myspace][enable]" value="yes" id="enablemyspace" <?php checked( ( 'yes' === $wcss_options['myspace']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Myspace', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="myspacecolor">
                                                        <input type="text" name="wcss_social_sharing[myspace][color]" id="myspacecolor" class="color-field" value="<?php echo ( isset( $wcss_options['myspace']['color'] ) && !empty( $wcss_options['myspace']['color'] ) ) ? esc_attr( $wcss_options['myspace']['color'] ) : '#f43d3d'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of myspace button setting -->
                                        <?php */ ?>

                                        <!-- Odnoklassniki button setting -->
                                        <div class="wcss-share-item item odnoklassniki">

                                            <div class="slide-section closed" id="odnoklassniki-slide">
                                                <label for="enableodnoklassniki">
                                                    <input type="checkbox" name="wcss_social_sharing[odnoklassniki][enable]" value="yes" id="enableodnoklassniki" <?php checked( ( 'yes' === $wcss_options['odnoklassniki']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Odnoklassniki', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="odnoklassnikicolor">
                                                        <input type="text" name="wcss_social_sharing[odnoklassniki][color]" id="odnoklassnikicolor" class="color-field" value="<?php echo ( isset( $wcss_options['odnoklassniki']['color'] ) && !empty( $wcss_options['odnoklassniki']['color'] ) ) ? esc_attr( $wcss_options['odnoklassniki']['color'] ) : '#ff8321'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Odnoklassniki button setting -->

                                        <!-- Pocket button setting -->
                                        <div class="wcss-share-item item pocket">

                                            <div class="slide-section closed" id="pocket-slide">
                                                <label for="enablepocket">
                                                    <input type="checkbox" name="wcss_social_sharing[pocket][enable]" value="yes" id="enablepocket" <?php checked( ( 'yes' === $wcss_options['pocket']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Pocket', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="pocketcolor">
                                                        <input type="text" name="wcss_social_sharing[pocket][color]" id="pocketcolor" class="color-field" value="<?php echo ( isset( $wcss_options['pocket']['color'] ) && !empty( $wcss_options['pocket']['color'] ) ) ? esc_attr( $wcss_options['pocket']['color'] ) : '#ff384b'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Pocket button setting -->

                                        <!-- Reddit button setting -->
                                        <div class="wcss-share-item item reddit">

                                            <div class="slide-section closed" id="reddit-slide">
                                                <label for="enablereddit">
                                                    <input type="checkbox" name="wcss_social_sharing[reddit][enable]" value="yes" id="enablereddit" <?php checked( ( 'yes' === $wcss_options['reddit']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Reddit', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="redditcolor">
                                                        <input type="text" name="wcss_social_sharing[reddit][color]" id="redditcolor" class="color-field" value="<?php echo ( isset( $wcss_options['reddit']['color'] ) && !empty( $wcss_options['reddit']['color'] ) ) ? esc_attr( $wcss_options['reddit']['color'] ) : '#ff4500'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Reddit button setting -->

                                        <!-- Skype button setting -->
                                        <div class="wcss-share-item item skype">

                                            <div class="slide-section closed" id="skype-slide">
                                                <label for="enableskype">
                                                    <input type="checkbox" name="wcss_social_sharing[skype][enable]" value="yes" id="enableskype" <?php checked( ( 'yes' === $wcss_options['skype']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Skype', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="skypecolor">
                                                        <input type="text" name="wcss_social_sharing[skype][color]" id="skypecolor" class="color-field" value="<?php echo ( isset( $wcss_options['skype']['color'] ) && !empty( $wcss_options['skype']['color'] ) ) ? esc_attr( $wcss_options['skype']['color'] ) : '#06bcff'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Skype button setting -->

                                        <!-- Stumbleupon button setting -->
                                        <div class="wcss-share-item item stumbleupon">

                                            <div class="slide-section closed" id="stumbleupon-slide">
                                                <label for="enablestumbleupon">
                                                    <input type="checkbox" name="wcss_social_sharing[stumbleupon][enable]" value="yes" id="enablestumbleupon" <?php checked( ( 'yes' === $wcss_options['stumbleupon']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Stumbleupon', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="stumbleuponcolor">
                                                        <input type="text" name="wcss_social_sharing[stumbleupon][color]" id="stumbleuponcolor" class="color-field" value="<?php echo ( isset( $wcss_options['stumbleupon']['color'] ) && !empty( $wcss_options['stumbleupon']['color'] ) ) ? esc_attr( $wcss_options['stumbleupon']['color'] ) : '#eb4924'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Stumbleupon button setting -->

                                        <!-- Telegram button setting -->
                                        <div class="wcss-share-item item telegram">

                                            <div class="slide-section closed" id="telegram-slide">
                                                <label for="enabletelegram">
                                                    <input type="checkbox" name="wcss_social_sharing[telegram][enable]" value="yes" id="enabletelegram" <?php checked( ( 'yes' === $wcss_options['telegram']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Telegram', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="telegramcolor">
                                                        <input type="text" name="wcss_social_sharing[telegram][color]" id="telegramcolor" class="color-field" value="<?php echo ( isset( $wcss_options['telegram']['color'] ) && !empty( $wcss_options['telegram']['color'] ) ) ? esc_attr( $wcss_options['telegram']['color'] ) : '#2ca5e0'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Telegram button setting -->

                                        <!-- Tumblr button setting -->
                                        <div class="wcss-share-item item tumblr">

                                            <div class="slide-section closed" id="tumblr-slide">
                                                <label for="enabletumblr">
                                                    <input type="checkbox" name="wcss_social_sharing[tumblr][enable]" value="yes" id="enabletumblr" <?php checked( ( 'yes' === $wcss_options['tumblr']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Tumblr', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="tumblrcolor">
                                                        <input type="text" name="wcss_social_sharing[tumblr][color]" id="tumblrcolor" class="color-field" value="<?php echo ( isset( $wcss_options['tumblr']['color'] ) && !empty( $wcss_options['tumblr']['color'] ) ) ? esc_attr( $wcss_options['tumblr']['color'] ) : '#3e3e3e'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Tumblr button setting -->

                                        <?php /* ?>
                                        <!-- VK button setting -->
                                        <div class="wcss-share-item item vk">

                                            <div class="slide-section closed" id="vk-slide">
                                                <label for="enablevk">
                                                    <input type="checkbox" name="wcss_social_sharing[vk][enable]" value="yes" id="enablevk" <?php checked( ( 'yes' === $wcss_options['vk']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable VK', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="vkcolor">
                                                        <input type="text" name="wcss_social_sharing[vk][color]" id="vkcolor" class="color-field" value="<?php echo ( isset( $wcss_options['vk']['color'] ) && !empty( $wcss_options['vk']['color'] ) ) ? esc_attr( $wcss_options['vk']['color'] ) : '#3673be'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of VK button setting -->
                                        <?php */ ?>

                                        <!-- Whatsapp button setting -->
                                        <div class="wcss-share-item item whatsapp">

                                            <div class="slide-section closed" id="whatsapp-slide">
                                                <label for="enablewhatsapp">
                                                    <input type="checkbox" name="wcss_social_sharing[whatsapp][enable]" value="yes" id="enablewhatsapp" <?php checked( ( 'yes' === $wcss_options['whatsapp']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Whatsapp', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="whatsappcolor">
                                                        <input type="text" name="wcss_social_sharing[whatsapp][color]" id="whatsappcolor" class="color-field" value="<?php echo ( isset( $wcss_options['whatsapp']['color'] ) && !empty( $wcss_options['whatsapp']['color'] ) ) ? esc_attr( $wcss_options['whatsapp']['color'] ) : '#13d25a'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Whatsapp button setting -->

                                        <!-- Xing button setting -->
                                        <div class="wcss-share-item item xing">

                                            <div class="slide-section closed" id="xing-slide">
                                                <label for="enablexing">
                                                    <input type="checkbox" name="wcss_social_sharing[xing][enable]" value="yes" id="enablexing" <?php checked( ( 'yes' === $wcss_options['xing']['enable'] ), true ); ?> />
                                                    <?php _e( 'Enable Xing', 'wcss-social-share' ); ?>
                                                </label>
                                                <div class="color-select">
                                                    <label for="xingcolor">
                                                        <input type="text" name="wcss_social_sharing[xing][color]" id="xingcolor" class="color-field" value="<?php echo ( isset( $wcss_options['xing']['color'] ) && !empty( $wcss_options['xing']['color'] ) ) ? esc_attr( $wcss_options['xing']['color'] ) : '#20a5a5'; ?>" />
                                                        <p class="description" ><?php _e( 'Select button color.', 'wcss-social-share' ); ?></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Xing button setting -->
                                    </div>
                                    <div class="wcss-order-icon" id="wcss-order-icon">
                                        <?php
                                        $wcss_order = esc_attr( $wcss_options['button_order'] );

                                        $exploded_order = explode( ',', rtrim( $wcss_order,',' ) );
                                        foreach ( $exploded_order  as $i ) {
                                            switch( $i ){

                                                case 'facebook':
                                                echo sprintf( __('<a href="#" id="facebook" class="button icon-button facebook-icon" data-show="facebook-slide" ><i class="fab fa-facebook-f"></i>%s</a>'), __('Facebook', 'wcss-social-share') );
                                                break;

                                                case 'twitter':
                                                echo sprintf( __('<a href="#" id="twitter" class="button icon-button twitter-icon" data-show="twitter-slide" ><i class="fab fa-twitter"></i>%s</a>'), __('Twitter', 'wcss-social-share') );
                                                break;

                                                case 'pinterest':
                                                echo sprintf( __('<a href="#" id="pinterest" class="button icon-button pinterest-icon" data-show="pinterest-slide" ><i class="fab fa-pinterest"></i>%s</a>'), __('Pinterest', 'wcss-social-share') );
                                                break;

                                                case 'linkedin':
                                                echo sprintf( __('<a href="#" id="linkedin" class="button icon-button linkedin-icon" data-show="linkedin-slide" ><i class="fab fa-linkedin"></i>%s</a>'), __('LinkedIn', 'wcss-social-share') );
                                                break;

                                                case 'blogger':
                                                echo sprintf( __('<a href="#" id="blogger" class="button icon-button blogger-icon" data-show="blogger-slide" ><i class="fab fa-blogger"></i>%s</a>'), __('Blogger', 'wcss-social-share') );
                                                break;

                                                case 'buffer':
                                                echo sprintf( __('<a href="#" id="buffer" class="button icon-button buffer-icon" data-show="buffer-slide" ><i class="fab fa-buffer"></i>%s</a>'), __('Buffer', 'wcss-social-share') );
                                                break;

                                                case 'digg':
                                                echo sprintf( __('<a href="#" id="digg" class="button icon-button digg-icon" data-show="digg-slide" ><i class="fab fa-digg"></i>%s</a>'), __('Digg', 'wcss-social-share') );
                                                break;

                                                case 'email':
                                                echo sprintf( __('<a href="#" id="email" class="button icon-button email-icon" data-show="email-slide" ><i class="far fa-envelope"></i>%s</a>'), __('Gmail', 'wcss-social-share') );
                                                break;

                                                case 'flipboard':
                                                echo sprintf( __('<a href="#" id="flipboard" class="button icon-button flipboard-icon" data-show="flipboard-slide" ><i class="fab fa-flipboard"></i>%s</a>'), __('Flipboard', 'wcss-social-share') );
                                                break;

                                                // case 'myspace':
                                                // echo sprintf( __('<a href="#" id="myspace" class="button icon-button myspace-icon" data-show="myspace-slide" ><i class="fab fa-myspace"></i>%s</a>'), __('Myspace', 'wcss-social-share') );
                                                // break;

                                                case 'odnoklassniki':
                                                echo sprintf( __('<a href="#" id="odnoklassniki" class="button icon-button odnoklassniki-icon" data-show="odnoklassniki-slide" ><i class="fab fa-odnoklassniki"></i>%s</a>'), __('Odnoklassniki', 'wcss-social-share') );
                                                break;

                                                case 'pocket':
                                                echo sprintf( __('<a href="#" id="pocket" class="button icon-button pocket-icon" data-show="pocket-slide" ><i class="fab fa-get-pocket"></i>%s</a>'), __('Pocket', 'wcss-social-share') );
                                                break;

                                                case 'reddit':
                                                echo sprintf( __('<a href="#" id="reddit" class="button icon-button reddit-icon" data-show="reddit-slide" ><i class="fab fa-reddit"></i>%s</a>'), __('Reddit', 'wcss-social-share') );
                                                break;

                                                case 'skype':
                                                echo sprintf( __('<a href="#" id="skype" class="button icon-button skype-icon" data-show="skype-slide" ><i class="fab fa-skype"></i>%s</a>'), __('Skype', 'wcss-social-share') );
                                                break;

                                                case 'stumbleupon':
                                                echo sprintf( __('<a href="#" id="stumbleupon" class="button icon-button stumbleupon-icon" data-show="stumbleupon-slide" ><i class="fab fa-stumbleupon"></i>%s</a>'), __('StumbleUpon', 'wcss-social-share') );
                                                break;

                                                case 'telegram':
                                                echo sprintf( __('<a href="#" id="telegram" class="button icon-button telegram-icon" data-show="telegram-slide" ><i class="fab fa-telegram"></i>%s</a>'), __('Telegram', 'wcss-social-share') );
                                                break;

                                                case 'tumblr':
                                                echo sprintf( __('<a href="#" id="tumblr" class="button icon-button tumblr-icon" data-show="tumblr-slide" ><i class="fab fa-tumblr"></i>%s</a>'), __('Tumblr', 'wcss-social-share') );
                                                break;

                                                // case 'vk':
                                                // echo sprintf( __('<a href="#" id="vk" class="button icon-button vk-icon" data-show="vk-slide" ><i class="fab fa-vk"></i>%s</a>'), __('VK', 'wcss-social-share') );
                                                // break;


                                                case 'whatsapp':
                                                echo sprintf( __('<a href="#" id="whatsapp" class="button icon-button whatsapp-icon" data-show="whatsapp-slide" ><i class="fab fa-whatsapp"></i>%s</a>'), __('Whatsapp', 'wcss-social-share') );
                                                break;

                                                case 'xing':
                                                echo sprintf( __('<a href="#" id="xing" class="button icon-button xing-icon" data-show="xing-slide" ><i class="fab fa-xing"></i>%s</a>'), __('Xing', 'wcss-social-share') );
                                                break;

                                            }
                                        }
                                        ?>
                                        <input type="hidden" id="wcss-button-order-field" name="wcss_social_sharing[button_order]" value="<?php echo ( isset( $wcss_options['button_order'] ) && !empty( $wcss_options['button_order'] ) ) ? esc_attr( $wcss_options['button_order'] ) : 'facebook,twitter,pinterest,linkedin,blogger,buffer,digg,email,flipboard,odnoklassniki,pocket,reddit,skype,stumbleupon,telegram,tumblr,whatsapp,xing'; ?>" />
                                    </div>
                                </div>

                                <p class="description" >
                                    <?php _e( 'Drag the icon to change the order.', 'wcss-social-sharing'); ?>
                                </p>
                            </div>
                        </div>

                        <!-- Sectin to select button for post types and custom post types-->
                        <div class="form-group">

                            <label for="displayon" class="form-label" class="form-label">
                                <?php _e( 'Show buttons on', 'wcss-social-share'); ?>
                            </label>

                            <div class="form-control-wrap">

                                <div id="displayon" class="wcss-button-container">

                                    <?php

                                    $post_types = get_post_types(array(
                                        'show_ui' => true,
                                        'show_in_menu' => true,
                                        ), 'objects');

                                    foreach ($post_types as $post_type) {
                                        ?>
                                        <div class="checkbox-radio-wrap">
                                            <input type="checkbox" name="wcss_social_sharing[post_type][]" value="<?php echo $post_type->name; ?>" id="select-<?php echo $post_type->name; ?>" <?php checked( in_array( $post_type->name, $wcss_options['post_type'] ), true ); ?> />
                                            <label class="mr10" for="select-<?php echo $post_type->name; ?>">
                                                <?php echo $post_type->label; ?>
                                            </label>
                                        </div>

                                        <?php
                                    }
                                    ?>

                                </div>

                            </div>

                        </div>
                        <!-- End of Sectin to select button for post types and custom post types-->

                        <!-- Sectin to select button position to display in front-->
                        <div class="form-group">

                            <label for="iconposition" class="form-label">
                                <?php _e( 'Icon Position', 'wcss-social-share'); ?>
                            </label>

                            <div class="form-control-wrap">

                                <div id="iconposition" class="wcss-button-container">

                                    <div class="checkbox-radio-wrap">
                                        <input type="checkbox" name="wcss_social_sharing[icon_position][]" value="after_content" id="select-after_content" <?php checked( in_array( 'after_content', $wcss_options['icon_position'] ), true ); ?> />
                                        <label class="mr10" for="select-after_content">
                                            <?php _e( 'After Content', 'wcss-social-share'); ?>
                                        </label>
                                    </div>

                                    <div class="checkbox-radio-wrap">
                                        <input type="checkbox" name="wcss_social_sharing[icon_position][]" value="above_content" id="select-above_content" <?php checked( in_array( 'above_content', $wcss_options['icon_position'] ), true ); ?> />
                                        <label class="mr10" for="select-above_content">
                                            <?php _e( 'Above Content', 'wcss-social-share'); ?>
                                        </label>
                                    </div>
                                    
                                    <div class="checkbox-radio-wrap">
                                        <input type="checkbox" name="wcss_social_sharing[icon_position][]" value="float_left" id="select-float_left" <?php checked( in_array( 'float_left', $wcss_options['icon_position'] ), true ); ?> />
                                        <label class="mr10" for="select-float_left">
                                            <?php _e( 'Float Left', 'wcss-social-share'); ?>
                                        </label>
                                    </div>

                                    <div class="checkbox-radio-wrap">
                                        <input type="checkbox" name="wcss_social_sharing[icon_position][]" value="inside_image" id="select-inside_image" <?php checked( in_array( 'inside_image', $wcss_options['icon_position'] ), true ); ?> />
                                        <label class="mr10" for="select-inside_image">
                                            <?php _e( 'Inside Image', 'wcss-social-share'); ?>
                                        </label>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- End of Sectin to select button position to display in front-->


                        <!-- Sectin to select button sizes to display in front-->
                        <div class="form-group">

                            <label for="buttonsizes" class="form-label">
                                <?php _e( 'Button Sizes', 'wcss-social-share' ); ?>
                            </label>

                            <div class="form-control-wrap">

                                <div id="buttonsizes" class="wcss-button-container">

                                    <div class="checkbox-radio-wrap">
                                        <input id="small-button" type="radio" name="wcss_social_sharing[button_size]" value="small" <?php checked($wcss_options['button_size'] == 'small'); ?> />
                                        <label class="mr10" for="small-button">
                                            <?php _e( 'Small', 'wcss-social-share' ); ?>
                                        </label>
                                    </div>

                                    <div class="checkbox-radio-wrap">
                                        <input id="medium-button" type="radio" name="wcss_social_sharing[button_size]" value="medium" <?php checked($wcss_options['button_size'] == 'medium'); ?> />
                                        <label class="mr10" for="medium-button">
                                            <?php _e( 'Medium', 'wcss-social-share' ); ?>
                                        </label>
                                    </div>
                                    
                                    <div class="checkbox-radio-wrap">
                                        <input id="large-button" type="radio" name="wcss_social_sharing[button_size]" value="large" <?php checked($wcss_options['button_size'] == 'large'); ?> />
                                        <label class="mr10" for="large-button">
                                            <?php _e( 'Large', 'wcss-social-share' ); ?>
                                        </label>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- End of Sectin to select button sizes to display in front-->


                        <!-- Sectin to display the number of icons initially in front-->
                        <div class="form-group">

                            <label for="default-count" class="form-label">
                                <?php _e( 'Default Count', 'wcss-social-share' ); ?>
                            </label>

                            <div class="form-control-wrap">

                                <div id="default-count" class="wcss-button-container">

                                    <div class="input-field-wrap">
                                        <input type="number" name="wcss_social_sharing[default_count]" value="<?php echo ( isset( $wcss_options['default_count'] ) && !empty( $wcss_options['default_count'] ) ) ? esc_attr( $wcss_options['default_count'] ) : 3; ?>" id="icon-default-count" />
                                        <p class="description" ><?php _e( 'Show the number of icons initially.', 'wcss-social-share' ); ?></p>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- End of Sectin to display the number of icons initially in front-->


                        <!-- Sectin to change the button label to display in front-->
                        <div class="form-group">

                            <label for="buttonlabel" class="form-label">
                                <?php _e( 'Button Label', 'wcss-social-share' ); ?>
                            </label>

                            <div class="form-control-wrap">

                                <div id="buttonlabel" class="wcss-button-container">

                                    <div class="input-field-wrap">
                                        <input type="text" name="wcss_social_sharing[button_label]" value="<?php echo ( isset( $wcss_options['button_label'] ) && !empty( $wcss_options['button_label'] ) ) ? esc_attr( $wcss_options['button_label'] ) : ''; ?>" id="icon-label" />
                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- End of  Sectin to change the button label to display in front-->

                        <!-- submit button -->
                        <?php submit_button( 'Save Changes', 'primary', 'submit_settings', false ); ?>

                    </form>

                </div>
            </div>

        </div>
    </div>


    <div class="footer-wrap">
        <div class="row">
            <div class="creator col-md-3">
                <span>Proudly Created by</span>
                <a href="codepixelzmedia.com">WPTG</a>
            </div>

            <div class="col-md-6">
                <ul class="footer-nav">
                    <li><a href="#">Free Plugins</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Docs</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="copyright col-md-3">
                <span>All rights reserved</span>
                &copy; <?php echo date("Y"); ?>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>