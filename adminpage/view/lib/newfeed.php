<?php
/*
 Template Name: Quản lý bài viết
 */
 ?>
 
<div class="vnkings_form col-md-12">
<?php if( $_SESSION['loggedin'] ) { 
$current_user = wp_get_current_user();
$current_user->user_login;
$userid = $current_user->ID; ?>
    <h4><i class="fa fa-tasks"></i> <?php echo $current_user->display_name; ?> Quản lý bài</h4>
    <a style="color:#fff;margin:10px 0;" href="<?php bloginfo("url");?>/dang-bai.html" class="btn btn-primary" role="button">
        <i class="fa fa-pencil"></i> Viết bài
    </a>
    <table class="table table-bordered">
        <thead>
            <tr class="vnkings_hd">
                <th>Tiêu đề</th>
                <th>Trạng thái</th>
                <th>Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $vnkings = new WP_Query(array(
            'post_status' => array('publish', 'pending'),
            'orderby' => 'ID',
            'order' => 'DESC',
            'author' => $userid,
            'paged' => get_query_var('paged'),
            'posts_per_page'=> 10));
            ?>
            <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
            <?php $postid = get_the_ID(); ?>
            <tr class="vnkings_mn">
                <td><a target="_blank" class="vnk1" href="<?php the_permalink() ;?>"><?php the_title() ;?></a></td>
                <td><span class="vnk2"><?php $stt = get_post_status($postid); if($stt=="publish"){ echo "Đang mở"; } else {echo "Chờ duyệt";  } ?></span></td>
                <td><a target="_blank" class="vnk3" href="<?php bloginfo('url');?>/sua-bai.html?id=<?php echo $postid;?>"><i class="fa fa-pencil-square-o"></i> Sửa</a></td>
            </tr>
        <?php endwhile ; wp_reset_query() ;?>
        </tbody>
     </table>
    <?php if (function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $vnkings ) ); } ?>
    <?php } else { ?>
    <div class="formdangnhap">
    <div class="alert alert-warning"><strong>Bạn</strong> cần đăng nhập để quản lý bài của mình!</div>
        <?php wp_login_form(); ?>         
    </div>
    <?php } ?>
</div>