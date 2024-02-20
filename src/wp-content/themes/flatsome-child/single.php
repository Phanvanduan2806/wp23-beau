<?php
/**
 * The blog template file.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_header();

?>

<div id="content" class="blog-wrapper blog-single page-wrapper">
    <?php
    if (have_posts()) {
        the_post();
        $title = get_the_title();
        $content = get_the_content();
    }
    $result = <<<EOF
    
    [section label="c-top-single" padding="0px" class="c-top-single"]

[gap height="120px" height__md="70px"]

[row label="heading" style="small" class="heading"]

[col span="9" span__sm="12" span__md="12" class="pb-0"]

[ux_html]

<h1>$title</h1>
[/ux_html]

[/col]

[/row]
[gap height="140px" height__md="50px"]

[row style="small"]

[col span__sm="12" span__md="12"]

[ux_html]

[c_breadcrumb]
[/ux_html]

[/col]

[/row]

[/section]
[section label="single_post" padding="0px" class="single_post"]

[ux_image id="528"]

[row style="small" v_align="middle" h_align="center"]

[col span="6" span__sm="12" span__md="9"]

[gap height="150px" height__sm="50px" height__md="100px"]

$content

[/col]

[/row]
[gap]

[row label="bai-viet-lq" class="bai-viet-lq"]

[col span="4" span__sm="12" span__md="12"]

<h2>Bài viết liên quan</h2>

[/col]
[col span="8" span__sm="12" span__md="12"]

[post_cat_uxb_list style="vertical" col_spacing="small" columns="2" columns__md="2" show_date="false" excerpt_length="20" comments="false" image_width="40" text_align="left"]


[/col]

[/row]
[gap height="100px"]

[row label="dang-ky" class="dang-ky"]

[col span="4" span__sm="12" span__md="6"]

[ux_html]

<h2>Đăng ký nhận tin tức</h2>
[contact-form-7 id="83c3f8d" title="Contact form 1"]
[/ux_html]

[/col]

[/row]
[gap height="100px" height__sm="30px" height__md="50px"]


[/section]

    

EOF;
    echo do_shortcode($result);
    ?>
</div>

<?php get_footer();